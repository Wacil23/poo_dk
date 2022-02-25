<?php
class Speedometer 
{
    public const CONVERT_MK = 1.609;
    public static function kmToMiles($km)
    {
        return $km / self::CONVERT_MK;
    }
    public static function milesToKm($miles)
    {
        return $miles * self::CONVERT_MK;
    }
}