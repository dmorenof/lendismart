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

class ErrorTypes extends Dictionary
{
    protected $values = [
        1 => 'Error en los datos enviados',
        2 => 'Error en las credenciales',
        3 => 'Error genérico',
    ];
}