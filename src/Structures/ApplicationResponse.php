<?php
/**
 * Created by David Moreno Falero.
 * User: david
 * Date: 13/02/19
 * Time: 19:07
 */

namespace dmorenof\lendismart\Structures;

use dmorenof\lendismart\Dictionaries\ApplicationStatuses;
use dmorenof\lendismart\Dictionaries\FeePaymentTypes;
use dmorenof\lendismart\Dictionaries\LenderCustomers;
use dmorenof\lendismart\Dictionaries\ResponseCodes;
use dmorenof\lendismart\Dictionaries\UsedSignatureMethods;
use dmorenof\lendismart\Validation;

class ApplicationResponse extends Validation
{
    public $responseCode;
    public $applicationId;
    public $description;
    public $createdBy;
    public $creationDate;
    public $merchant;
    public $status;
    public $lender;
    public $signatureMethodUsed;
    public $docsSubmitted;
    public $approvalDate;
    public $cancellationDate;
    public $errors;
    public $incidents;
    public $lenderApplicationId;
    public $mainApplicantDocIdNumber;
    public $merchantCost;
    public $offerRequestedAmount;
    public $offerTerm;
    public $offerGracePeriod;
    public $offerProductType;
    public $goodsType;
    public $reference;
    public $serialNumber;
    public $purchaseAmount;
    public $requestedAmount;
    public $maxMonthlyPayment;
    public $feePaymentType;
    public $insurance;
    public $noAccount;
    public $lenderCustomer;
    public $serviceDuration;
    public $terms;
    public $gracePeriods;
    public $openingFeePcts;
    public $productTypes;
    public $applicants;

    protected $structure = [
        'responseCode' => [
            'type' => 'String',
            'dictionary' => ResponseCodes::class,
        ],
        'applicationId' => [
            'type' => 'Integer',
        ],
        'description' => [
            'type' => 'String',
        ],
        'createdBy' => [
            'type' => 'String',
        ],
        'creationDate' => [
            'type' => 'DateTime',
        ],
        'merchant' => [
            'type' => 'String',
        ],
        'status' => [
            'type' => 'String',
            'dictionary' => ApplicationStatuses::class,
        ],
        'lender' => [
            'type' => 'String',
        ],
        'signatureMethodUsed' => [
            'type' => 'Integer',
            'dictionary' => UsedSignatureMethods::class,
        ],
        'docsSubmitted' => [
            'type' => 'Boolean',
        ],
        'approvalDate' => [
            'type' => 'DateTime',
        ],
        'cancellationDate' => [
            'type' => 'DateTime',
        ],
        'errors' => [
            'type' => 'Array',
            'structure' => Error::class,
        ],
        'incidents' => [
            'type' => 'Array',
            'structure' => Incident::class,
        ],
        'lenderApplicationId' => [
            'type' => 'String',
        ],
        'mainApplicantDocIdNumber' => [
            'type' => 'String',
        ],
        'merchantCost' => [
            'type' => 'Number',
        ],
        'offerRequestedAmount' => [
            'type' => 'Number',
        ],
        'offerTerm' => [
            'type' => 'Integer',
        ],
        'offerGracePeriod' => [
            'type' => 'Integer',
        ],
        'offerProductType' => [
            'type' => 'Integer',
        ],
        'goodsType' => [
            'type' => 'Integer',
        ],
        'reference' => [
            'type' => 'String',
        ],
        'serialNumber' => [
            'type' => 'String',
        ],
        'purchaseAmount' => [
            'type' => 'Number',
        ],
        'requestedAmount' => [
            'type' => 'Number',
        ],
        'maxMonthlyPayment' => [
            'type' => 'Number',
        ],
        'feePaymentType' => [
            'type' => 'Integer',
            'dictionary' => FeePaymentTypes::class,
        ],
        'insurance' => [
            'type' => 'Boolean',
        ],
        'noAccount' => [
            'type' => 'Boolean',
        ],
        'lenderCustomer' => [
            'type' => 'String',
            'dictionary' => LenderCustomers::class,
        ],
        'serviceDuration' => [
            'type' => 'Integer',
            'dictionary' => LenderCustomers::class,
        ],
        'terms' => [
            'type' => 'Array',
            'structure' => Term::class,
        ],
        'gracePeriods' => [
            'type' => 'Array',
            'structure' => GracePeriod::class,
        ],
        'openingFeePcts' => [
            'type' => 'Array',
            'structure' => OpeningFeePct::class,
        ],
        'productTypes' => [
            'type' => 'Array',
            'structure' => ProductType::class,
        ],
        'applicants' => [
            'type' => 'Array',
            'structure' => Applicant::class,
        ],
    ];
}