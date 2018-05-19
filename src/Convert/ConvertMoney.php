<?php

namespace LinuxArtisan\ToMoney\Convert;


/**
* This class performs various conversions on money format.
*
* @author linuxartisan
*/
class ConvertMoney
{

    /**
     * Formats the number into Indian money pattern.
     * Ref: http://stackoverflow.com/questions/10042485/how-to-display-currency-in-indian-numbering-format-in-php
     *
     * @param double $amount
     * @return string or false
     */
    public static function toIndian($amount)
    {
        if (!is_numeric($amount)) {
            return '';
        }

        $isLocale = setlocale(LC_MONETARY, 'en_IN.utf8');

        if(!$isLocale) {
            return false;
        }

        $amount = money_format('%!i', $amount);
        return $amount;
    }

    /**
     * Formats the number into US money pattern
     *
     * @param double $amount
     * @return string or false
     */
    public static function toUS($amount)
    {
        if (!is_numeric($amount)) {
            return '';
        }

        $isLocale = setlocale(LC_MONETARY, 'en_US.utf8');

        if(!$isLocale) {
            return false;
        }

        $amount = money_format('%!i', $amount);
        return $amount;
    }

}
