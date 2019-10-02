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

class DocIdTypes extends Dictionary
{
    protected $values = [
        1 => 'DNI/NIF',
        2 => 'Tarjeta Residencia Temporal',
        3 => 'Tarjeta Residencia Permanente',
    ];
}