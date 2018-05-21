<?php

namespace LinuxArtisan\ToMoney;

use LinuxArtisan\ToMoney\Format\FormatMoney;

/**
* This class is the main facade for all format conversions.
*
* @author linuxartisan
*/
class Money
{
    /**
     * Formats money to Indian locale.
     *
     * @param  double  $amount
     * @return string
     */
    public static function formatToIndian($amount)
    {
        $value = FormatMoney::toIndian($amount);

        return strval($value);
    }

    /**
     * Formats money to US locale.
     *
     * @param  double  $amount
     * @return string
     */
    public static function formatToUS($amount)
    {
        $value = FormatMoney::toUS($amount);

        return strval($value);
    }

    /**
     * Formats money to user specified locale.
     *
     * @param  string  $locale
     * @param  double  $amount
     * @return string
     */
    public static function formatTo($locale, $amount)
    {
        $value = FormatMoney::to($locale, $amount);

        return strval($value);
    }

}
