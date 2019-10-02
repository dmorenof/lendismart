<?php
/**
 * Created by David Moreno Falero.
 *
 * Class for Lendismart Rest Api
 *
 * User: dmoreno@housell.com
 * Date: 17/01/19
 * Time: 20:16
 */

namespace dmorenof\lendismart;

use dmorenof\lendismart\Structures\Application;
use Exception;

class Lendismart
{
    // Configuration
    private $endpoint = '';
    private $api_key = '';

    // Registry
    private $call_url;
    private $post_data;
    private $raw_response;
    private $info;

    /**
     * Full example of a complete $application
     * <code>
     * [
     *     'goodsType' => 10101,
     *     'reference' => '2018/J3212',
     *     'serialNumber' => '11238630119',
     *     'purchaseAmount' => 2350,
     *     'requestedAmount' => 2000,
     *     'maxMonthlyPayment' => 80,
     *     'feePaymentType' => 1,
     *     'insurance' => true,
     *     'noAccount' => false,
     *     'terms' => [
     *         [
     *             'term' => 12,
     *         ],
     *     ],
     *     'gracePeriods' => [
     *         [
     *             'gracePeriod' => 0,
     *         ],
     *     ],
     *     'openingFeePcts' => [
     *         [
     *             'openingFeePct' => 0.025000000000000001,
     *         ],
     *     ],
     *     'productTypes' => [
     *         [
     *             'productType' => 1,
     *         ],
     *     ],
     *     'applicants' => [
     *         [
     *             'docIdType' => 1,
     *             'docIdNumber' => '11111111H',
     *             'docIdExpirationDate' => '2022-03-25T00:00:00.000Z',
     *             'firstName' => 'José',
     *             'surname1' => 'Pérez',
     *             'surname2' => 'García',
     *             'birthDate' => '1975-10-17T00:00:00.000Z',
     *             'nationality' => 65,
     *             'nativeCountry' => 65,
     *             'nativeProvince' => '28',
     *             'nativeCity' => '28079',
     *             'gender' => 1,
     *             'maritalStatus' => 1,
     *             'phoneType1' => 2,
     *             'phone1' => '611111111',
     *             'phoneType2' => 1,
     *             'phone2' => '911111111',
     *             'email' => 'prueba@prueba.es',
     *             'housingTenureType' => 1,
     *             'housingTenureStartDate' => '2008-04-12T00:00:00.000Z',
     *             'housingExpenses' => 400,
     *             'occupation' => 1120,
     *             'workingDayType' => 1,
     *             'profession' => 1,
     *             'jobTitle' => 1,
     *             'industry' => 901,
     *             'contractStartDate' => '2004-01-21T00:00:00.000Z',
     *             'companyName' => 'Despacho Prueba SA',
     *             'companyPhone' => '912222222',
     *             'companyProvince' => '28',
     *             'companyCity' => '28079',
     *             'companyPostalCode' => '28001',
     *             'monthlyIncome' => 1800.3399999999999,
     *             'incomeFrequency' => 14,
     *             'monthlyBonus' => 0,
     *             'otherMonthlyIncome' => 0,
     *             'dependentChildren' => 0,
     *             'dependentAdults' => 0,
     *             'otherExpenses' => 0,
     *             'role' => 1,
     *             'paymentMethod' => 1,
     *             'accountNumber' => 'ES9420805801101234567891',
     *             'accountCreationDate' => '2002-02-23T00:00:00.000Z',
     *             'address' => [
     *                 'streetType' => 6,
     *                 'street' => 'Francisco Silvela',
     *                 'number' => '62',
     *                 'stairs' => 'C',
     *                 'floor' => '2',
     *                 'door' => 'A',
     *                 'postalCode' => '28018',
     *                 'province' => '28',
     *                 'city' => '28079',
     *                 'locality' => '280790001',
     *             ],
     *         ],
     *     ],
     * ];
     * </code>
     *
     * @param string $merchant_id
     * @param array $application
     * @return Structures\NewApplicationResponse
     * @throws Exception
     */
    public function createNewApplication($merchant_id, array $application)
    {
        $Response = new Response($this->post('/merchants/' . $merchant_id . '/applications',
            new Application($application)));
        $response = $Response->getResponse();

        if (!isset($response['appId'])) {
            throw new Exception('Missing appId. Response: ' . PHP_EOL . json_encode($response, JSON_PRETTY_PRINT));
        }

        return new Structures\NewApplicationResponse($response, false);
    }

    /**
     * @param string $resource
     * @param Structures\Application $Application
     * @return bool|string
     * @throws Exception
     */
    private function post($resource, Structures\Application $Application)
    {
        if (!$this->endpoint) {
            throw new Exception('Endpoint not set');
        }

        if (!$this->api_key) {
            throw new Exception('Api key not set');
        }

        $this->call_url = $this->endpoint . $resource;
        $this->post_data = json_encode($Application, JSON_PRETTY_PRINT);

        $curl = curl_init($this->call_url);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $this->post_data);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'API-KEY: ' . $this->api_key,
            'Accept: application/json',
            'Content-Type: application/json',
        ]);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_MAXREDIRS, 10);

        $this->raw_response = curl_exec($curl);
        $this->info = curl_getinfo($curl);
        $error_number = curl_errno($curl);
        curl_close($curl);

        if ($error_number) {
            throw new Exception('cURL error (' . $error_number . '):' . PHP_EOL . curl_strerror($error_number));
        }

        return $this->raw_response;
    }

    /**
     * @param $application_id
     * @param $format
     * @return Structures\ApplicationResponse
     * @throws Exception
     */
    public function application($application_id, $format)
    {
        if (!$application_id) {
            throw new Exception('Empty application ID');
        }

        if (!in_array($format, ['short', 'long'])) {
            throw new Exception('Invalid format ' . $format);
        }

        $Response = new Response($this->get('/applications/' . $application_id . '/' . $format));
        $response = $Response->getResponse();

        return new Structures\ApplicationResponse($response, false);
    }

    /**
     * @param string $endpoint
     * @return bool|string
     * @throws Exception
     */
    private function get($endpoint)
    {
        if (!$this->endpoint) {
            throw new Exception('Endpoint not set');
        }

        if (!$this->api_key) {
            throw new Exception('Api key not set');
        }

        $this->call_url = $this->endpoint . $endpoint;
        $curl = curl_init($this->call_url);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'API-KEY: ' . $this->api_key,
            'Accept: application/json',
        ]);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_MAXREDIRS, 10);

        $this->raw_response = curl_exec($curl);
        $this->info = curl_getinfo($curl);
        $error_number = curl_errno($curl);
        curl_close($curl);

        if ($error_number) {
            throw new Exception('cURL error (' . $error_number . '):' . PHP_EOL . curl_strerror($error_number));
        }

        return $this->raw_response;
    }

    /**
     * @param string $endpoint
     * @throws Exception
     */
    public function setEndpoint($endpoint)
    {
        if (!$endpoint || !filter_var($endpoint, FILTER_VALIDATE_URL)) {
            throw new Exception('Endpoint is not a valid URL');
        }

        $this->endpoint = $endpoint;
    }

    /**
     * @param $api_key
     * @throws Exception
     */
    public function setApiKey($api_key)
    {
        if (!$api_key) {
            throw new Exception('Invalid API_KEY');
        }

        $this->api_key = $api_key;
    }

    /**
     * @return mixed
     */
    public function getCallUrl()
    {
        return $this->call_url;
    }

    /**
     * @return mixed
     */
    public function getPostData()
    {
        return $this->post_data;
    }

    /**
     * @return mixed
     */
    public function getRawResponse()
    {
        return $this->raw_response;
    }

    /**
     * @return mixed
     */
    public function getHttpCode()
    {
        return $this->info['http_code'];
    }
}