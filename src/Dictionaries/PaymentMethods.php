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

class PaymentMethods extends Dictionary
{
    protected $values = [
        1 => 'CCC / IBAN',
        2 => 'Tarjeta',
    ];
}