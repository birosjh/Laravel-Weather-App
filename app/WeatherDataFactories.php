<?php

namespace app;

class weatherDataFactory{

  public static function createDay($time, $summary, $icon, $humidity, $precipProbability){
    return new day($time, $summary, $icon, $humidity, $precipProbability);
  }

  public static function createHour($time, $summary, $icon, $humidity, $precipProbability){
    return new hour($time, $summary, $icon, $humidity, $precipProbability);
  }

}
