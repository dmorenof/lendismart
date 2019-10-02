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

class JobTitles extends Dictionary
{
    protected $values = [
        1 => 'Alto directivo / alto cargo',
        2 => 'Directivo / Gerente',
        3 => 'Mando intermedio / Jefe responsable',
        4 => 'Técnico superior',
        5 => 'Técnico medio',
        6 => 'Administrativo',
        7 => 'Encargado',
        8 => 'Empleado especializado',
        9 => 'Trabajador no cualificado',
        10 => 'Obrero',
        11 => 'Comercial',
        12 => 'Vendedor comisionista',
    ];
}