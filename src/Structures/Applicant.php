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

use dmorenof\lendismart\Dictionaries\Cities;
use dmorenof\lendismart\Dictionaries\Countries;
use dmorenof\lendismart\Dictionaries\DocIdTypes;
use dmorenof\lendismart\Dictionaries\Genders;
use dmorenof\lendismart\Dictionaries\HousingTenureTypes;
use dmorenof\lendismart\Dictionaries\Industries;
use dmorenof\lendismart\Dictionaries\JobTitles;
use dmorenof\lendismart\Dictionaries\MaritalStatuses;
use dmorenof\lendismart\Dictionaries\Occupations;
use dmorenof\lendismart\Dictionaries\PaymentMethods;
use dmorenof\lendismart\Dictionaries\PhoneTypes;
use dmorenof\lendismart\Dictionaries\Professions;
use dmorenof\lendismart\Dictionaries\Provinces;
use dmorenof\lendismart\Dictionaries\Relationships;
use dmorenof\lendismart\Dictionaries\Roles;
use dmorenof\lendismart\Dictionaries\WorkingDayTypes;
use dmorenof\lendismart\Validation;

class Applicant extends Validation
{
    public $docIdType;
    public $docIdNumber;
    public $docIdExpirationDate;
    public $firstName;
    public $surname1;
    public $surname2;
    public $birthDate;
    public $nationality;
    public $residencyStartDate;
    public $residencyEndDate;
    public $nativeCountry;
    public $nativeProvince;
    public $nativeCity;
    public $gender;
    public $maritalStatus;
    public $phoneType1;
    public $phone1;
    public $phoneType2;
    public $phone2;
    public $email;
    public $housingTenureType;
    public $housingTenureStartDate;
    public $housingExpenses;
    public $occupation;
    public $workingDayType;
    public $profession;
    public $jobTitle;
    public $industry;
    public $contractStartDate;
    public $contractEndDate;
    public $companyName;
    public $companyPhone;
    public $companyProvince;
    public $companyCity;
    public $companyPostalCode;
    public $monthlyIncome;
    public $incomeFrequency;
    public $monthlyBonus;
    public $yearlyIncome;
    public $otherMonthlyIncome;
    public $dependentChildren;
    public $dependentAdults;
    public $otherExpenses;
    public $role;
    public $relationship;
    public $paymentMethod;
    public $accountNumber;
    public $accountCreationDate;
    public $cardNumber;
    public $address;

    protected $structure = [
        'id' => [
            'type' => 'Integer',
        ],
        'docIdType' => [
            'type' => 'Integer',
            'required' => true,
            'dictionary' => DocIdTypes::class,
        ],
        'docIdNumber' => [
            'type' => 'String',
            'required' => true,
        ],
        'docIdExpirationDate' => [
            'type' => 'DateTime',
        ],
        'firstName' => [
            'type' => 'String',
        ],
        'surname1' => [
            'type' => 'String',
        ],
        'surname2' => [
            'type' => 'String',
        ],
        'birthDate' => [
            'type' => 'DateTime',
        ],
        'nationality' => [
            'type' => 'Integer',
            'dictionary' => Countries::class,
        ],
        'residencyStartDate' => [
            'type' => 'DateTime',
        ],
        'residencyEndDate' => [
            'type' => 'DateTime',
        ],
        'nativeCountry' => [
            'type' => 'Integer',
            'dictionary' => Countries::class,
        ],
        'nativeProvince' => [
            'type' => 'String',
            'dictionary' => Provinces::class,
        ],
        'nativeCity' => [
            'type' => 'String',
            'dictionary' => Cities::class,
        ],
        'gender' => [
            'type' => 'Integer',
            'dictionary' => Genders::class,
        ],
        'maritalStatus' => [
            'type' => 'Integer',
            'dictionary' => MaritalStatuses::class,
        ],
        'phoneType1' => [
            'type' => 'Integer',
            'dictionary' => PhoneTypes::class,
        ],
        'phone1' => [
            'type' => 'String',
        ],
        'phoneType2' => [
            'type' => 'Integer',
            'dictionary' => PhoneTypes::class,
        ],
        'phone2' => [
            'type' => 'String',
        ],
        'email' => [
            'type' => 'Email',
        ],
        'housingTenureType' => [
            'type' => 'Integer',
            'dictionary' => HousingTenureTypes::class,
        ],
        'housingTenureStartDate' => [
            'type' => 'DateTime',
        ],
        'housingExpenses' => [
            'type' => 'Number',
        ],
        'occupation' => [
            'type' => 'Integer',
            'dictionary' => Occupations::class,
        ],
        'workingDayType' => [
            'type' => 'Integer',
            'dictionary' => WorkingDayTypes::class,
        ],
        'profession' => [
            'type' => 'Integer',
            'dictionary' => Professions::class,
        ],
        'jobTitle' => [
            'type' => 'Integer',
            'dictionary' => JobTitles::class,
        ],
        'industry' => [
            'type' => 'Integer',
            'dictionary' => Industries::class,
        ],
        'contractStartDate' => [
            'type' => 'DateTime',
        ],
        'contractEndDate' => [
            'type' => 'DateTime',
        ],
        'companyName' => [
            'type' => 'String',
        ],
        'companyPhone' => [
            'type' => 'String',
        ],
        'companyProvince' => [
            'type' => 'String',
            'dictionary' => Provinces::class,
        ],
        'companyCity' => [
            'type' => 'String',
            'dictionary' => Cities::class,
        ],
        'companyPostalCode' => [
            'type' => 'String',
        ],
        'monthlyIncome' => [
            'type' => 'Number',
        ],
        'incomeFrequency' => [
            'type' => 'Integer',
        ],
        'monthlyBonus' => [
            'type' => 'Number',
        ],
        'yearlyIncome' => [
            'type' => 'Number',
        ],
        'otherMonthlyIncome' => [
            'type' => 'Number',
        ],
        'dependentChildren' => [
            'type' => 'Integer',
        ],
        'dependentAdults' => [
            'type' => 'Integer',
        ],
        'otherExpenses' => [
            'type' => 'Number',
        ],
        'role' => [
            'type' => 'Integer',
            'dictionary' => Roles::class,
        ],
        'relationship' => [
            'type' => 'Integer',
            'dictionary' => Relationships::class,
        ],
        'paymentMethod' => [
            'type' => 'Integer',
            'dictionary' => PaymentMethods::class,
        ],
        'accountNumber' => [
            'type' => 'String',
        ],
        'accountCreationDate' => [
            'type' => 'DateTime',
        ],
        'cardNumber' => [
            'type' => 'String',
        ],
        'address' => [
            'type' => 'Object',
            'structure' => Address::class,
        ],
    ];
}