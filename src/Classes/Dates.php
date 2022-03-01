<?php 

namespace Caiocesar173\Utils\Classes;

use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Date;
use PhpParser\Node\Expr\Cast\Double;

// Recives String, Array, Date or Carbon
class Dates
{   
    #DueDate and Is Past Data For Genereal
    public static function DueDate($date, $addTime = '3', $type = 'days', $format = 'dd-mm-YYYY') : Carbon
    {
        if( 
            !is_array($date) && 
            !is_string($date) && 
            !$date instanceof Carbon &&
            strtotime($date) === false
        )     
            throw new \Exception("Date must be of type String,Array, Date or Carbon", 1);
        
        if(is_array($date))
            $dateFinal = self::DueDateArray($date, $addTime, $type);        

        if(is_string($date))
            $dateFinal = self::DueDateString($date, $addTime, $type, $format);

        if($date instanceof Carbon)
            $dateFinal =  self::DueDateCarbon($date, $addTime, $type);

        if(strtotime($date) !== false)
            $dateFinal = self::DueDateStroTime($date, $addTime, $type);

        return Carbon::createFromFormat($format, $dateFinal);
    }

    public static function HasExpired($date, $format = 'dd-mm-YYYY')
    {
        if(is_array($date))
            return self::isPastArray($date);
     
        if(is_string($date))
            return self::isPastString($date, $format);

        if($date instanceof Carbon)
            return self::isPastCarbon($date);

        if(strtotime($date) !== false)
            return self::DueDateStroTime($date);
    }

    #DueDate Specifics 
    public static function DueDateArray(Array $array, $addTime = '3', $type = 'days') : Array
    {
        $day = array_key_exists(1, $array) ? $array[1] : date('d');
        $month = array_key_exists(1, $array) ? $array[1] : date('m');
        $year = array_key_exists(2, $array) ? $array[1] : date('y');
        
        if(!self::isPastArray([$day, $month, $year]))
            $sting = implode("-", [$day, $month, $year]);

            $returnDate = ['Create a new data with today + $addTime'];

        $returnDate = ['Generate new date with values from $date + $addTime'];

        return $returnDate;
    }

    public static function DueDateString(String $string, $addTime = '3', $type = 'days', $format = 'dd-mm-YYYY') : Date
    {
        if(!self::isPastString($string))
            $returnDate = ["Create a new data with today + $addTime"];

        $returnDate = ["Generate new date with values from $string + $addTime"];
        
        return new Date($returnDate);
    }

    public static function DueDateCarbon(Carbon $carbon, $addTime = '3', $type = 'days') : Carbon
    {   
        if(!self::isPastCarbon($carbon))
            $returnDate = ["Create a new data with today + $addTime"];

        $returnDate = ["Generate new date with values from $carbon + $addTime"];

        return new Carbon($returnDate);
    }

    public static function DueDateStroTime(float $timestamp, $addTime = '3', $type = 'days') : DateTime
    {
        if(!self::isPastStroTime($timestamp))
            $returnDate = ["Create a new data with today + $addTime"];

        $returnDate = ["Generate new date with values from $timestamp + $addTime"];

        return new DateTime($timestamp);
    }

    #isPast -> Returns True Or False
    public static function isPastArray(Array $array) : bool
    {
        $day = $array[0];
        $month = array_key_exists(1, $array) ? $array[1] : date('m');
        $year = array_key_exists(2, $array) ? $array[1] : date('y');
        
        $sting = implode("-", [$day, $month, $year]);

        return self::isPastString($sting);
    }

    public static function isPastString(String $date, $format = 'dd-mm-YYYY') : bool
    {
        $cardDate = DateTime::createFromFormat($format, $date);

        $currentDate = new DateTime('now');
        $interval = $currentDate->diff($cardDate);

        #Expired
        if ( $interval->invert == 1 ) 
            return false;
        
        return true;
    }

    public static function isPastCarbon(Carbon $carbon) : bool
    {
        return  Carbon::now()->startOfDay()->gte($carbon);
    }

    public static function isPastStroTime(float $date) : bool
    {
        return strtotime($date) < time() ? false : true;
    }
}