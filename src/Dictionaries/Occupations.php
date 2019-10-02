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

class Occupations extends Dictionary
{
    protected $values = [
        1110 => 'Funcionario / administración',
        1241 => 'Funcionario interino',
        1114 => 'Personal laboral fijo',
        1242 => 'Personal laboral temporal',
        1120 => 'Fijo',
        1130 => 'Fijo discontinuo',
        1210 => 'Temporal',
        1220 => 'Temporal ETT',
        1230 => 'Temporero / Por obra o servicio',
        1400 => 'Formación y aprendizaje',
        1300 => 'Becario / En Practicas',
        2100 => 'Autónomo',
        2200 => 'Profesional Libre',
        2300 => 'Propietario Pyme',
        3400 => 'Ama de casa',
        3200 => 'Desempleado',
        3500 => 'Estudiante',
        3140 => 'Pensión enfermedad temporal',
        3110 => 'Jubilación',
        3150 => 'Pensión larga enfermedad',
        3130 => 'Orfandad',
        3120 => 'Viudedad',
        3160 => 'Otros pensionistas',
        3300 => 'Rentista',
        3600 => 'Otros',
    ];
}