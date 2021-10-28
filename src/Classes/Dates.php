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
    public static function DueDate($date, $addTime = '3', $format = 'dd-mm-YYYY') : Carbon
    {
        if( 
            !is_array($date) && 
            !is_string($date) && 
            !$date instanceof Carbon &&
            strtotime($date) === false
        )     
            throw new \Exception("Date must be of type String,Array, Date or Carbon", 1);
        
        if(is_array($date))            
            return self::DueDateArray($date,$addTime);        
        
        if(is_string($date))
            return self::DueDateString($date,$addTime, $format);

        if($date instanceof Carbon)
            return self::DueDateCarbon($date,$addTime);

        if(strtotime($date) !== false)
            return self::DueDateStroTime($date,$addTime);
        
        return new Carbon();
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
    public static function DueDateArray(Array $array, $addTime = '3') : Array
    {
        $day = array_key_exists(1, $array) ? $array[1] : date('d');
        $month = array_key_exists(1, $array) ? $array[1] : date('m');
        $year = array_key_exists(2, $array) ? $array[1] : date('y');
        
        if(!self::isPastArray([$day, $month, $year]))
            $returnDate = ['Create a new data with today + $addTime'];

        $returnDate = ['Generate new date with values from $date + $addTime'];

        return $returnDate;
    }

    public static function DueDateString(String $string, $addTime = '3', $format = 'dd-mm-YYYY') : Date
    {
        if(!self::isPastString($string))
            $returnDate = ["Create a new data with today + $addTime"];

        $returnDate = ["Generate new date with values from $string + $addTime"];
        
        return new Date($returnDate);
    }

    public static function DueDateCarbon(Carbon $carbon, $addTime = '3') : Carbon
    {   
        if(!self::isPastCarbon($carbon))
            $returnDate = ["Create a new data with today + $addTime"];

        $returnDate = ["Generate new date with values from $carbon + $addTime"];

        return new Carbon($returnDate);
    }

    public static function DueDateStroTime(float $timestamp, $addTime = '3') : DateTime
    {
        if(!self::isPastStroTime($timestamp))
            $returnDate = ["Create a new data with today + $addTime"];

        $returnDate = ["Generate new date with values from $timestamp + $addTime"];

        return new DateTime($timestamp);
    }

    #isPast
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