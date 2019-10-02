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

class ServiceDurations extends Dictionary
{
    protected $values = [
        1 => '0-6 meses',
        2 => '7-12 meses',
        3 => '13-18 meses',
        4 => '19-24 meses',
        5 => '25-30 meses',
        6 => '> 30 meses',
    ];
}