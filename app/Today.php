<?php

namespace app;

use App\WeatherObject;

class Today extends WeatherObject
{
  protected $temp;

  public function setTemp($temp)
  {
    $this->temp = $temp;
  }

  public function getTemp()
  {
    return $this->temp;
  }
}
