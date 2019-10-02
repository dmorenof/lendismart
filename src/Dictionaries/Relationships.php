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

class Relationships extends Dictionary
{
    protected $values = [
        1 => 'Cónyuge',
        2 => 'Pareja de hecho',
        3 => 'Hijo/a',
        4 => 'Padre/madre',
        5 => 'Hermano/a',
        6 => 'Familiares de segundo grado',
        7 => 'Resto familia',
        8 => 'Sin relación',
    ];
}