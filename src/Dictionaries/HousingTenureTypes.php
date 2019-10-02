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

class HousingTenureTypes extends Dictionary
{
    protected $values = [
        1 => 'En propiedad con hipoteca',
        2 => 'En propiedad sin hipoteca',
        3 => 'Alquiler',
        4 => 'Padres',
        5 => 'Cónyuge',
        6 => 'Otros familiares',
        7 => 'Empresa',
        8 => 'Leasing',
        9 => 'Usufructo',
        0 => 'Otros	',
    ];
}