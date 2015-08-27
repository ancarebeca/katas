<?php

namespace Katas;

use Exception;

/**
 * Class StringCalculator
 * @package katas
 */
class StringCalculator
{
    const EMPTY_STRING = "";
    const DEFAULT_SEPARATOR = ",";
    const DEFINE_SEPARATOR = "//";
    const NEW_LINE = "\n";

    /**
     * @param String $value
     * @return int
     * @throws Exception
     */
    public function add($value)
    {
        $total = 0;

        if (!$this->isValid($value)) {
            throw new Exception('Negatives not allowed');
        }

        if ($value != self::EMPTY_STRING) {

            $normalizedValue = $this->normalizeString($value);

            $numbers = explode(self::DEFAULT_SEPARATOR, $normalizedValue);

            $total = array_sum($numbers);
        }

        return intval($total);
    }



    private function normalizeString($value)
    {
        $value = $this->ignoreNumbersBiggerThanOneThousand($value);

        $normalizedValue = $this->replaceDefineSeparator($value);

        $normalizedValue = $this->replaceNewLineByDefaultSeparator($normalizedValue);

        return $normalizedValue;

    }

    private function replaceDefineSeparator($value)
    {
        $pattern = '/\/\/(.*)\\n/';
        if(preg_match_all($pattern, $value, $matches)) {
            if (preg_match_all('/\[(.+?)\]/', $value, $matches_custom_delimiter)) {
                foreach ($matches_custom_delimiter[1] as $separator) {
                    $value = str_replace($separator, self::DEFAULT_SEPARATOR, $value);
                }
            } else {
                $separator = $matches[1];
                $value = str_replace($separator, self::DEFAULT_SEPARATOR, $value);
            }
        }
        return $value;
    }

    private function replaceNewLineByDefaultSeparator($value)
    {
        return str_replace(self::NEW_LINE, self::DEFAULT_SEPARATOR, $value);
    }

    private function ignoreNumbersBiggerThanOneThousand($value)
    {
        return preg_replace("/,[0-9]{4,}/", "", $value);
    }

    private function isValid($value)
    {
        $validate = true;
        $pattern = '/-[0-9]+/';
        if (preg_match($pattern, $value)) {
            $validate = false;
        }

        return $validate;
    }
}
