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

class IncidentTypes extends Dictionary
{
    protected $values = [
        1 => 'Incidencia genérica',
        2 => 'Retraso en la aprobación',
        3 => 'Faltan datos necesarios',
        4 => 'Falta el número de cuenta',
        5 => 'Faltan documentos',
    ];
}