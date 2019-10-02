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

class ApplicationStatuses extends Dictionary
{
    protected $values = [
        2111 => 'Cancelada (borrador)',
        2112 => 'Cancelada (enviada)',
        2121 => 'Denegada (scoring)',
        2122 => 'Denegada (validaciones)',
        2151 => 'Borrador',
        2211 => 'Pendiente de estudio',
        2212 => 'Pendiente de envío',
        2221 => 'Preaprobada - pendiente de selección',
        2222 => 'Preaprobada - pendiente de documentación',
        2223 => 'Preaprobada - pendiente de validaciones',
        2231 => 'Aprobada - pendiente de pago',
        2232 => 'Aprobada - pendiente de documentación',
        2233 => 'Aprobada - pendiente de validaciones',
        2234 => 'Aprobada - pagada',
    ];
}