<?php

namespace App\Helpers;

use Carbon\Carbon;

class Helper
{
    static $month = [
        1 => [
            'th' => [ 'long' => 'มกราคม', 'shot' => 'ม.ค.' ],
            'en' => [ 'long' => 'january', 'shot' => 'JAN' ],
        ],
        2 => [
            'th' => [ 'long' => 'กุมภาพันธ์', 'shot' => 'ก.พ.' ],
            'en' => [ 'long' => 'february', 'shot' => 'FEB' ],
        ],
        3 => [
            'th' => [ 'long' => 'มีนาคม', 'shot' => 'มี.ค.' ],
            'en' => [ 'long' => 'march', 'shot' => 'MAR' ],
        ],
        4 => [
            'th' => [ 'long' => 'เมษายน', 'shot' => 'เม.ย.' ],
            'en' => [ 'long' => 'april', 'shot' => 'APR' ],
        ],
        5 => [
            'th' => [ 'long' => 'พฤษภาคม', 'shot' => 'พ.ค.' ],
            'en' => [ 'long' => 'may', 'shot' => 'MAY' ],
        ],
        6 => [
            'th' => [ 'long' => 'มิถุนายน', 'shot' => 'มิ.ย.' ],
            'en' => [ 'long' => 'june', 'shot' => 'JUN' ],
        ],
        7 => [
            'th' => [ 'long' => 'กรกฎาคม', 'shot' => 'ก.ค.' ],
            'en' => [ 'long' => 'july', 'shot' => 'JUL' ],
        ],
        8 => [
            'th' => [ 'long' => 'สิงหาคม', 'shot' => 'ส.ค.' ],
            'en' => [ 'long' => 'august', 'shot' => 'AUG' ],
        ],
        9 => [
            'th' => [ 'long' => 'กันยายน', 'shot' => 'ก.ย.' ],
            'en' => [ 'long' => 'september', 'shot' => 'SEP' ],
        ],
        10 => [
            'th' => [ 'long' => 'ตุลาคม', 'shot' => 'ต.ค.' ],
            'en' => [ 'long' => 'october', 'shot' => 'OCT' ],
        ],
        11 => [
            'th' => [ 'long' => 'พฤศจิกายน', 'shot' => 'พ.ย.' ],
            'en' => [ 'long' => 'november', 'shot' => 'NOV' ],
        ],
        12 => [
            'th' => [ 'long' => 'ธันวาคม', 'shot' => 'ธ.ค.' ],
            'en' => [ 'long' => 'december', 'shot' => 'DEC' ],
        ],
    ];

    public static function DatetimeFormatTH($string_datetime, $type = null)
    {
        $datetime = \Carbon\Carbon::parse($string_datetime)->addYears(543);
        $month_name = self::$month[$datetime->month]['th']['shot'];

        switch ($type) {
            case 'on_time':
                return $datetime->day."/".$month_name."/".$datetime->format('Y');
                break;
            
            default:
                return $datetime->day."/".$month_name."/".$datetime->format('Y H:i');
                break;
        }
    }

    public static function DateFormatTh($string)
    {
        
        $ex = explode('/',$string);
        return intval($ex[0]) . " " . self::changeMonth($ex[1]) . " ". ( $ex[2]+543 ) ;

    }

    public static function changeMonth($month){
        $result = false;
        switch ($month) {
            case 1:
                $result = 'มกราคม';
                break;
            case 2:
                $result = 'กุมภาพันธ์';
                break;
            case 3:
                $result = 'มีนาคม';
                break;
            case 4:
                $result = 'เมษายน';
                break;
            case 5:
                $result = 'พฤษภาคม';
                break;
            case 6:
                $result = 'มิถุนายน';
                break;
            case 7:
                $result = 'กรกฎาคม';
                break;
            case 8:
                $result = 'สิงหาคม';
                break;
            case 9:
                $result = 'กันยายน';
                break;
            case 10:
                $result = 'ตุลาคม';
                break;
            case 11:
                $result = 'พฤจิกายน';
                break;
            case 12:
                $result = 'ธันวาคม';
                break;
            default:
                $result = false;
                break;
        }
        return $result;
    }
    public static function changeMonthEn($month){
        $result = false;
        switch ($month) {
            case 1:
                $result = 'January';
                break;
            case 2:
                $result = 'February';
                break;
            case 3:
                $result = 'March';
                break;
            case 4:
                $result = 'April';
                break;
            case 5:
                $result = 'May';
                break;
            case 6:
                $result = 'June';
                break;
            case 7:
                $result = 'July';
                break;
            case 8:
                $result = 'August';
                break;
            case 9:
                $result = 'September';
                break;
            case 10:
                $result = 'October';
                break;
            case 11:
                $result = 'November';
                break;
            case 12:
                $result = 'December';
                break;
            default:
                $result = false;
                break;
        }
        return $result;
    }

    public static function make_slug($string) {
        return preg_replace('/\s+/u', '-', trim($string));
    }
    
}
