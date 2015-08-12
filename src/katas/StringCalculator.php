<?php

namespace katas;

/**
 * Class StringCalculator
 * @package katas
 */
class StringCalculator
{
    const EMPTY_STRING = "";

    /**
     * @param String $value
     * @return int
     */
    public function add($value)
    {
        if($value == self::EMPTY_STRING){
            return 0;
        }

        $pattern = '/^\d(,\d)+$/';

        if(!preg_match_all($pattern, $value, $matches)){
            return intval($value);
        } else {
            $numbers = explode(',', $value);
            return intval($numbers[0]) + intval($numbers[1]);
        }

    }
}
