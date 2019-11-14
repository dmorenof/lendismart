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

use DateTime;
use Exception;
use ReflectionClass;

class Validation
{
    protected $structure;

    /**
     * Validation constructor.
     * @param array $inputValues
     * @param bool $validate
     * @throws Exception
     */
    public function __construct(array $inputValues, $validate = true)
    {
        if ($validate) {
            $this->validate($inputValues);
        } else {
            foreach ($inputValues as $field => $value) {
                $this->$field = $value;
            }
        }
    }

    /**
     * @param array $inputValues
     * @param string get_called_class()
     * @throws Exception
     */
    private function validate(array $inputValues)
    {
        $this->checkMandatoryFields($inputValues);

        foreach ($inputValues as $field => $value) {
            $this->validateFieldName($field);

            if (!is_null($value)) {
                $this->validateFieldType($field, $value);
                $this->validateRecursiveObjects($field, $value);
                $this->validateDictionaryFields($field, $value);
            }

            $this->$field = $value;
        }
    }

    /**
     * @param mixed $inputValues
     * @throws Exception
     */
    private function checkMandatoryFields($inputValues)
    {
        foreach ($this->structure as $field => $value) {
            if (isset($field['required']) && $field['required'] === true) {
                if (!array_key_exists($field, $inputValues)) {
                    throw new Exception('Validation error: "' . $field . '" is is mandatory in "' . get_called_class() . '"');
                }
            }
        }
    }

    /**
     * @param string $field
     * @throws Exception
     */
    private function validateFieldName($field)
    {
        if (!array_key_exists($field, $this->structure)) {
            throw new Exception('Validation error: "' . $field . '" is not a valid field for "' . get_called_class() . '"');
        }
    }

    /**
     * @param string $field
     * @param mixed $value
     * @throws Exception
     */
    private function validateFieldType($field, $value)
    {
        if (isset($this->structure[$field]['type'])) {
            switch ($this->structure[$field]['type']) {
                case 'Integer':
                    if (filter_var($value, FILTER_VALIDATE_INT) === false) {
                        throw new Exception('Validation error: "' . $value . '" is not a valid Integer for "' . $field . '" in object "' . get_called_class() . '"');
                    }

                    break;

                case 'String':
                    if (!is_string($value)) {
                        throw new Exception('Validation error: "' . $value . '" is not a valid String for "' . $field . '" in object "' . get_called_class() . '"');
                    }

                    break;

                case 'Number':
                    if (filter_var($value, FILTER_VALIDATE_FLOAT) === false) {
                        throw new Exception('Validation error: "' . $value . '" is not a valid Number for "' . $field . '" in object "' . get_called_class() . '"');
                    }

                    break;

                case 'DateTime':
                    if (!$this->validateDateTime($value)) {
                        throw new Exception('Validation error: "' . $value . '" is not a valid Date Time for "' . $field . '" in object "' . get_called_class() . '"');
                    }

                    break;

                case 'Boolean':
                    if (filter_var($value, FILTER_VALIDATE_BOOLEAN) === null) {
                        throw new Exception('Validation error: "' . $value . '" is not a valid Boolean for "' . $field . '" in object "' . get_called_class() . '"');
                    }

                    break;

                case 'Email':
                    if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                        throw new Exception('Validation error: "' . $value . '" is not a valid Email for "' . $field . '" in object "' . get_called_class() . '"');
                    }

                    break;

                case 'Array':
                case 'Object':
                    if (!is_array($value)) {
                        throw new Exception('Validation error: "' . $value . '" is not a valid Array for "' . $field . '" in object "' . get_called_class() . '"');
                    }

                    break;
            }
        }
    }

    /**
     * Default format ISO8601 extended
     * @param string $value
     * @param string $format
     * @return bool
     */
    private function validateDateTime($value, $format = 'Y-m-d\TH:i:s.000Z')
    {
        $date = DateTime::createFromFormat($format, $value);

        return is_object($date);
    }

    /**
     * @param string $field
     * @param mixed $value
     * @return true
     * @throws Exception
     */
    private function validateRecursiveObjects($field, $value)
    {
        if (isset($this->structure[$field]['structure'])) {

            if ($this->structure[$field]['type'] == 'Array') {
                foreach ($value as $object) {
                    new $this->structure[$field]['structure']($object);
                }
            }

            if ($this->structure[$field]['type'] == 'Object') {
                new $this->structure[$field]['structure']($value);
            }
        }

        return true;
    }

    /**
     * @param string $field
     * @param mixed $value
     * @return true
     * @throws Exception
     */
    private function validateDictionaryFields($field, $value)
    {
        if (isset($this->structure[$field]['dictionary'])) {
            /** @var Dictionary $Dictionary */
            $Dictionary = new $this->structure[$field]['dictionary']();
            $Dictionary->getById($value);
        }

        return true;
    }

    /**
     * @param $dictionary
     * @return Dictionary | object
     * @throws Exception
     */
    private function instanceDictionary($dictionary)
    {
        try {
            $class = new ReflectionClass('\\Lendismart\\Dictionaries\\' . $dictionary);

            return $class->newInstanceArgs();
        } catch (Exception $e) {
            throw new Exception('Instantiation error dictionary: "' . $dictionary . '" does not exist');
        }
    }
}