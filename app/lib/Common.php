<?php

namespace app\lib;


class Common
{
    public static function nWord($number, $n1, $n2, $n5) {
        if ($number % 10 == 1) {
            return $n1;
        } elseif ($number % 10 < 5 && $number % 10 > 1) {
            return $n2;
        } else {
            return $n5;
        }
    }

    public static function getMonthName($monthNumber)
    {
        if ($monthNumber < 1 || $monthNumber > 12) {
            return false;
        }
        $monthName = '';
        switch ($monthNumber) {
            case 1: $monthName = 'Январь'; break;
            case 2: $monthName = 'Февраль'; break;
            case 3: $monthName = 'Март'; break;
            case 4: $monthName = 'Апрель'; break;
            case 5: $monthName = 'Май'; break;
            case 6: $monthName = 'Июнь'; break;
            case 7: $monthName = 'Июль'; break;
            case 8: $monthName = 'Август'; break;
            case 9: $monthName = 'Сентябрь'; break;
            case 10: $monthName = 'Октябрь'; break;
            case 11: $monthName = 'Ноябрь'; break;
            case 12: $monthName = 'Декабрь'; break;
            default:
        }
        return $monthName;
    }
}