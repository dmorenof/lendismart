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

class ProductTypes extends Dictionary
{
    protected $values = [
        1 => 'Interés cliente',
        2 => 'Gratuito',
        3 => 'Mixto',
    ];
}