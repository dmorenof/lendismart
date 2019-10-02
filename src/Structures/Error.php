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

use dmorenof\lendismart\Dictionaries\ErrorTypes;
use dmorenof\lendismart\Validation;

class Error extends Validation
{
    public $id;
    public $errorType;
    public $errorDescription;

    protected $structure = [
        'id' => [
            'type' => 'Integer',
        ],
        'errorType' => [
            'type' => 'Integer',
            'dictionary' => ErrorTypes::class,
        ],
        'errorDescription' => [
            'type' => 'String',
        ],
    ];
}