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

use dmorenof\lendismart\Dictionaries\IncidentTypes;
use dmorenof\lendismart\Validation;

class Incident extends Validation
{
    public $id;
    public $incidentType;
    public $incidentDescription;

    protected $structure = [
        'id' => [
            'type' => 'Integer',
        ],
        'incidentType' => [
            'type' => 'Integer',
            'dictionary' => IncidentTypes::class,
        ],
        'incidentDescription' => [
            'type' => 'String',
        ],
    ];
}