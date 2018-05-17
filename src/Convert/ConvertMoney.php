<?php

    namespace Convert;


    /**
    * This class performs various conversions on money format.
    */
    class ConvertMoney
    {

    /**
     * Format the number into money pattern.
     *
     * @param double $amount
     * Ref: http://stackoverflow.com/questions/10042485/how-to-display-currency-in-indian-numbering-format-in-php
     */
    public static function toMoney($amount)
    {
        if (is_numeric($amount)) {
            setlocale(LC_MONETARY, 'en_IN');
            $amount = money_format('%!i', $amount);
            return $amount;
        }
        return false;
    }

}
