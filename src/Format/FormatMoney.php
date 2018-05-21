<?php

namespace LinuxArtisan\ToMoney\Format;


/**
* This class performs various conversions on money format.
*
* @author linuxartisan
*/
class FormatMoney
{

    /**
     * Formats the number into Indian money pattern.
     * Ref: http://stackoverflow.com/questions/10042485/how-to-display-currency-in-indian-numbering-format-in-php
     *
     * @param  double  $amount
     * @return string
     */
    public static function toIndian($amount)
    {
        // Try formatting the amount, if it is numeric
        if (is_numeric($amount)) {
            // Try and set the appropriate locale
            if (self::tryAndSetLocale('en_IN')) {
                $amount = money_format('%!i', $amount);
                return $amount;
            }

            // Else, return amount without formatting
            return $amount;
        }

        // Else, return '0'
        return '0';
    }

    /**
     * Formats the number into US money pattern
     *
     * @param  double  $amount
     * @return string
     */
    public static function toUS($amount)
    {
        // Try formatting the amount, if it is numeric
        if (is_numeric($amount)) {
            // Try and set the appropriate locale
            if (self::tryAndSetLocale('en_US')) {
                $amount = money_format('%!i', $amount);
                return $amount;
            }

            // Else, return amount without formatting
            return $amount;
        }

        // Else, return '0'
        return '0';
    }

    /**
     * Formats the number into user specified money pattern
     *
     * @param  string  $locale
     * @param  double  $amount
     * @return string
     */
    public static function to($locale, $amount)
    {
        // Try formatting the amount, if it is numeric
        if (is_numeric($amount)) {
            // Try and set the appropriate locale
            if (self::tryAndSetLocale($locale)) {
                $amount = money_format('%!i', $amount);
                return $amount;
            }

            // Else, return amount without formatting
            return $amount;
        }

        // Else, return '0'
        return '0';
    }


    /*******************************
     * Helper functions
     *******************************/

    /**
     * Tries to set locale to the desired locale.
     *
     * @param  string  locale
     * @return boolean
     */
    protected static function tryAndSetLocale($locale)
    {
        // Try to set the appropriate locale
        $isLocale = setlocale(LC_MONETARY, $locale);

        if (!$isLocale) {
            // Try again with utf8
            $isLocale = setlocale(LC_MONETARY, $locale . '.utf8');

            // Return true if success
            if ($isLocale) {
                return true;
            }

            // Else return false
            return false;
        }

        // Return true as first attempt to set locale was successful. 
        return true;
    }

}
