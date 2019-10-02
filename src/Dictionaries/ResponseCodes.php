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

namespace dmorenof\lendismart\Dictionaries;

use dmorenof\lendismart\Dictionary;

class ResponseCodes extends Dictionary
{
    protected $values = [
        '000' => 'Success',
        '001' => 'Missing API_KEY',
        '002' => 'invalid API_KEY',
        '003' => 'Application search error',
        '004' => 'Application not found',
        '006' => 'Permission denied',
        '007' => 'Missing Application ID',
        '009' => 'Generic error',
        '010' => 'Unknown error',
        '011' => 'Unknown error',
    ];
}