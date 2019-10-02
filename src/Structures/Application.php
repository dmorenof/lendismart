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

namespace dmorenof\lendismart\Structures;

use dmorenof\lendismart\Dictionaries\FeePaymentTypes;
use dmorenof\lendismart\Dictionaries\LenderCustomers;
use dmorenof\lendismart\Dictionaries\ServiceDurations;
use dmorenof\lendismart\Validation;

class Application extends Validation
{
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
        'goodsType' => [
            'type' => 'Integer',
            'required' => true,
        ],
        'reference' => [
            'type' => 'String',
        ],
        'serialNumber' => [
            'type' => 'String',
        ],
        'purchaseAmount' => [
            'type' => 'Number',
            'required' => true,
        ],
        'requestedAmount' => [
            'type' => 'Number',
            'required' => true,
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
            'type' => 'String',
            'dictionary' => ServiceDurations::class,
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
            'required' => true,
        ],
    ];
}