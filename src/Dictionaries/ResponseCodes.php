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

class ResponseCodes extends Dictionary
{
    protected $values = [
        '000' => 'Llamada correcta',
        '001' => 'Falta el API_KEY en la llamada',
        '002' => 'El API_KEY no es válido',
        '003' => 'Error en la búsqueda de la solicitud',
        '004' => 'No se ha encontrado la solicitud',
        '005' => 'Error desconocido',
        '006' => 'El usuario no cuenta con permisos suficientes',
        '007' => 'Falta el applicationId',
        '009' => 'Error genérico',
        '010' => 'No se ha informado el docIdNumber',
        '011' => 'El docIdNumber informado no es válido',
        '012' => 'No se ha incluido en la llamada ningún applicant',
        '013' => 'Se ha incluido un cardNumber/accountNumber pero no se ha incluido el campo paymentMethod',
        '014' => 'El campo accountNumber informado no es un iban / CCC válido',
        '015' => 'El campo cardNumber informado no es una cuenta válida',
    ];
}