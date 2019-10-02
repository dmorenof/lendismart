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
use dmorenof\lendismart\Dictionaries\Localities;
use dmorenof\lendismart\Dictionaries\Provinces;
use dmorenof\lendismart\Dictionaries\StreetTypes;
use dmorenof\lendismart\Validation;

class Address extends Validation
{
    public $id;
    public $streetType;
    public $street;
    public $number;
    public $block;
    public $stairs;
    public $floor;
    public $door;
    public $complement;
    public $postalCode;
    public $province;
    public $city;
    public $locality;

    protected $structure = [
        'id' => [
            'type' => 'Integer',
        ],
        'streetType' => [
            'type' => 'Integer',
            'dictionary' => StreetTypes::class,
        ],
        'street' => [
            'type' => 'String',
        ],
        'number' => [
            'type' => 'String',
        ],
        'block' => [
            'type' => 'String',
        ],
        'stairs' => [
            'type' => 'String',
        ],
        'floor' => [
            'type' => 'String',
        ],
        'door' => [
            'type' => 'String',
        ],
        'complement' => [
            'type' => 'String',
        ],
        'postalCode' => [
            'type' => 'String',
        ],
        'province' => [
            'type' => 'String',
            'dictionary' => Provinces::class,
        ],
        'city' => [
            'type' => 'String',
            'dictionary' => Cities::class,
        ],
        'locality' => [
            'type' => 'String',
            'dictionary' => Localities::class,
        ],
    ];
}