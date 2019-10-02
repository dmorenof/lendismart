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

use dmorenof\lendismart\Validation;

class OpeningFeePct extends Validation
{
    public $openingFeePct;

    protected $structure = [
        'openingFeePct' => [
            'type' => 'Number',
        ],
    ];
}