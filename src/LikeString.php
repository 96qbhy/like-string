<?php

namespace Qbhy\LikeString;

class LikeString
{
    /**
     * @param $format
     * @param $str
     * @return bool
     */
    public static function formatFullMatch($format, $str)
    {
        $formatLen = strlen($format);
        $strLen = strlen($str);
        if ($formatLen !== $strLen) {
            return false;
        }

        $mapping = [];

        for ($i = 0; $i < $strLen; $i++) {
            if (!isset($mapping[$str[$i]])) {
                $mapping[$str[$i]] = $format[$i];
            }
            if ($mapping[$str[$i]] !== $format[$i]) {
                return false;
            }
        }
        return true;
    }



}