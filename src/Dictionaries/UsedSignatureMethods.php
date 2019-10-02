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

class UsedSignatureMethods extends Dictionary
{
    protected $values = [
        0 => 'No firmada',
        1 => 'Firmada en contrato físico',
        2 => 'Firmada mediante pin SMS',
        3 => 'Frimada mediante Wacom',
        4 => 'Firmada mediante tableta',
    ];
}