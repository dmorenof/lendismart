<?php
/**
 * Created by David Moreno Falero.
 *
 * Validation Class for Lendismart Rest Api
 *
 * User: dmoreno@housell.com
 * Date: 17/01/19
 * Time: 20:16
 */

namespace dmorenof\lendismart;

use Exception;

class Dictionary
{
    protected $values = [];

    /**
     * Get value by id.
     * @param string $value_id
     * @return string
     * @throws Exception
     */
    public function getById($value_id)
    {
        if (!isset($this->values[$value_id])) {
            throw new Exception('Value ' . $value_id . ' not found in ' . get_called_class());
        }

        return $this->values[$value_id];
    }
}