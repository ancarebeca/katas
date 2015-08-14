<?php

namespace katas;

use Exception;

/**
 * Class StringCalculator
 * @package katas
 */
class StringCalculator
{
    const EMPTY_STRING = "";
    const DEFAULT_SEPARATOR = ',';
    const DEFINE_SEPARATOR = '[]';
    const NEW_LINE = '\n';

    /**
     * @param String $value
     * @return int
     * @throws Exception
     */
    public function add($value)
    {
        if($value == self::EMPTY_STRING){
            return 0;
        }

        if(!$this->isValid($value)){
            throw new Exception('Negatives not allowed');
        }

        if(substr($value, 0, 2) == self::DEFINE_SEPARATOR){
            $separator = $value[2];
            $value = str_replace($separator, self::DEFAULT_SEPARATOR, $value);
        }

        $value = preg_replace("/,[0-9]{4,}/", "", $value);

        $normalizedValue = str_replace(self, self::DEFAULT_SEPARATOR, $value);

        $numbers = explode(",", $normalizedValue);

        $total = array_sum($numbers);

        return intval($total);
    }

    private function isValid($value)
    {
        $validate = true;
        $pattern = '/-[0-9]+/';
        if(preg_match($pattern, $value)){
            $validate = false;
        }
        return $validate;
    }
}
