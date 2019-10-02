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

class MaritalStatuses extends Dictionary
{
    protected $values = [
        1 => 'Soltero/a',
        2 => 'Casado/a - Gananciales',
        3 => 'Casado/a - Separación de bienes',
        4 => 'Pareja de hecho / convivencia',
        5 => 'Separado/a',
        6 => 'Divorciado/a',
        7 => 'Viudo/a',
    ];
}