# Lendismart integration API

This is a fast and secure integration for Lendismart, S.L.

This library allows to create and check applications thought the webservice 

## Installation

### Composer

To install the library you must execute the following code

    composer require dmorenof/lendismart dev-master

### Manual

Download the library from https://github.com/dmorenof/lendismart

Include all the files from the "installation path/src"

    function autoload($path) {
        $items = glob($path . DIRECTORY_SEPARATOR . "*");
    
        foreach($items as $item) {
            $isPhp = pathinfo($item) ["extension"] === "php";

            if (is_file($item) && $isPhp) {
                require_once $item;
            } elseif (is_dir($item)) {
                autoload($item);
            }
        }
    }
    
    autoload($installation_path . DIRECTORY_SEPARATOR . 'src');

## Usage

Instance the library

    $Lendismart = new dmorenof\lendismart\Lendismart\Lendismart();
    
Prepare the authentication and environment

    $Lendismart->setEndpoint('https://api-staging.lendismart.com/externalAPI/v1');
    $Lendismart->setApiKey(AUTH_TOKEN);

### Create an application

Example to create an application

     try {
        $Application = new dmorenof\lendismart\Lendismart\Structures\Application([
            'goodsType' => 10101,
            'reference' => '2018/J3212',
            'serialNumber' => '11238630119',
            'purchaseAmount' => 2350,
            'requestedAmount' => 2000,
            'maxMonthlyPayment' => 80,
            'feePaymentType' => 1,
            'insurance' => true,
            'noAccount' => false,
            'terms' => [
                [
                    'term' => 12,
                ],
            ],
            'gracePeriods' => [
                [
                    'gracePeriod' => 0,
                ],
            ],
            'openingFeePcts' => [
                [
                    'openingFeePct' => 0.025000000000000001,
                ],
            ],
            'productTypes' => [
                [
                    'productType' => 1,
                ],
            ],
            'applicants' => [
                [
                    'docIdType' => 1,
                    'docIdNumber' => '11111111H',
                    'docIdExpirationDate' => '2022-03-25T00:00:00.000Z',
                    'firstName' => 'José',
                    'surname1' => 'Pérez',
                    'surname2' => 'García',
                    'birthDate' => '1975-10-17T00:00:00.000Z',
                    'nationality' => 65,
                    'nativeCountry' => 65,
                    'nativeProvince' => '28',
                    'nativeCity' => '28079',
                    'gender' => 1,
                    'maritalStatus' => 1,
                    'phoneType1' => 2,
                    'phone1' => '611111111',
                    'phoneType2' => 1,
                    'phone2' => '911111111',
                    'email' => 'prueba@prueba.es',
                    'housingTenureType' => 1,
                    'housingTenureStartDate' => '2008-04-12T00:00:00.000Z',
                    'housingExpenses' => 400,
                    'occupation' => 1120,
                    'workingDayType' => 1,
                    'profession' => 1,
                    'jobTitle' => 1,
                    'industry' => 901,
                    'contractStartDate' => '2004-01-21T00:00:00.000Z',
                    'companyName' => 'Despacho Prueba SA',
                    'companyPhone' => '912222222',
                    'companyProvince' => '28',
                    'companyCity' => '28079',
                    'companyPostalCode' => '28001',
                    'monthlyIncome' => 1800.3399999999999,
                    'incomeFrequency' => 14,
                    'monthlyBonus' => 0,
                    'otherMonthlyIncome' => 0,
                    'dependentChildren' => 0,
                    'dependentAdults' => 0,
                    'otherExpenses' => 0,
                    'role' => 1,
                    'paymentMethod' => 1,
                    'accountNumber' => 'ES9420805801101234567891',
                    'accountCreationDate' => '2002-02-23T00:00:00.000Z',
                    'address' => [
                        'streetType' => 6,
                        'street' => 'Francisco Silvela',
                        'number' => '62',
                        'stairs' => 'C',
                        'floor' => '2',
                        'door' => 'A',
                        'postalCode' => '28018',
                        'province' => '28',
                        'city' => '28079',
                        'locality' => '280790001',
                    ],
                ],
            ],
        ]);
        
        $NewApplicationResponse = $Lendismart->createNewApplication(APP_USER_ID, $Application);
        $application_identifier = $$NewApplicationResponse->appId;
    } catch (Exception $exception) {
        echo $exception->getMessage();
    }

Returns the dmorenof\lendismart\Lendismart\Structures\NewApplicationResponse object or throws an Exception  on error
    
### Check an application

Example to check an application

    try {
        $ApplicationResponse = $Lendismart->application($application_identifier, 'long');
        $application_status = $ApplicationResponse->status;
    } catch (Exception $exception) {
        echo $exception->getMessage();
    }

Returns dmorenof\lendismart\Lendismart\Structures\ApplicationResponse or throws Exception on error

# Documentation

## Lendismart::class

### Lendismart::setEndpoint(string $endpoint)

Sets the endpoint (root url) of the environment we want to use for future calls:
* https://api.lendismart.com/externalAPI/v1 PRODUCTION
* https://api-staging.lendismart.com/externalAPI/v1 STAGING

### Lendismart::setApiKey(string $api_key)

Sets the api_key (authorization token) provided by Lendismart we want to use for future calls

### Lendismart::application(string $application_id, string $format) 

$application_id Lendismart APPLICATION_ID

$format short|long

Returns dmorenof\lendismart\Lendismart\Structures\ApplicationResponse or throws Exception on error

### Lendismart::createNewApplication(int $merchant_id, Application $application) 

$merchant_id Lendismart merchant_id to associate the application

$application new Application object

Returns the dmorenof\lendismart\Lendismart\Structures\NewApplicationResponse object or throws an Exception  on error

### Lendismart::getCallUrl()

Get the called url for debugging reasons

### Lendismart::getPostData()

Get the sent post data for debugging reasons

### Lendismart::getRawResponse()

Get the raw response for debugging reasons

### Lendismart::getHttpCode()

Get the HTTP code for debugging reasons

## Validation::class

Dynamically validates the objects on the Structures creation

## Structure classes

* Address
* Applicant
* Application
* ApplicationResponse
* Error
* GracePeriod
* Incident
* NewApplicationResponse
* OpeningFeePct
* ProductType
* Term

On construction evaluates the input array and returns the object

Uses the dictionaries to check valid values

Example:

    try {
        $Address = new dmorenof\lendismart\Lendismart\Structures\Address([
            'streetType' => 6,
            'street' => 'Francisco Silvela',
            'number' => '62',
            'stairs' => 'C',
            'floor' => '2',
            'door' => 'A',
            'postalCode' => '28018',
            'province' => '28',
            'city' => '28079',
            'locality' => '280790001',
        ]);
    } catch (Exception $exception) {
        echo $exception->getMessage();
    }

## Dictionary::class

Sets a dictionary

### getById(int $value_id)

Gets the string name from an id

Example:

    try {
        $ApplicationResponse = $Lendismart->application($application_identifier, 'short');
        $application_status = $ApplicationResponse->status;
        $ApplicationStatuses = new dmorenof\lendismart\Lendismart\Dictionaries\ApplicationStatuses();
        $status_text = $ApplicationStatuses->getById($application_status);
    } catch (Exception $exception) {
        echo $exception->getMessage();
    }

## Dictionary classes

* ApplicationStatuses
* Cities
* Countries
* DocIdTypes
* ErrorTypes
* FeePaymentTypes
* Genders
* HousingTenureTypes
* IncidentTypes
* Industries
* JobTitles
* LenderCustomers
* Localities
* MaritalStatuses
* Occupations
* PaymentMethods
* PhoneTypes
* ProductTypes
* Professions
* Provinces
* Relationships
* ResponseCodes
* Roles
* ServiceDurations
* StreetTypes
* UsedSignatureMethods
* WorkingDayTypes
