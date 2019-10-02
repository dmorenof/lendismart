<?php
/**
 * Created by David Moreno Falero.
 *
 * Validation Class for Lendismart Rest Api
 *
 * User: dmoreno@housell.com
 * Date: 17/01/19
 * Time: 20:16
 */

namespace dmorenof\lendismart;

use dmorenof\lendismart\Dictionaries\ResponseCodes;
use Exception;

class Response
{
    /* @var array */
    private $response = [];

    /**
     * Validation constructor.
     * @param string $raw_response
     * @throws Exception
     */
    public function __construct($raw_response)
    {
        $this->response = json_decode($raw_response, true);

        if (!$this->response) {
            throw new Exception('Invalid JSON format on the response. Raw response: ' . $raw_response);
        }

        if (!isset($this->response['responseCode'])) {
            throw new Exception('Missing responseCode. Raw response: ' . $raw_response);
        }

        if ($this->response['responseCode'] != '000') {
            $ResponseCodes = new ResponseCodes();

            throw new Exception($ResponseCodes->getById($this->response['responseCode']) . ': ' . $this->response['description']);
        }
    }

    /**
     * @return bool|mixed
     */
    public function getResponse()
    {
        return $this->response;
    }
}