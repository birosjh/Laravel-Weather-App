<?php

namespace app;

use App\WeatherObject;

class Day extends WeatherObject
{
  protected $maxTemp;

  protected $minTemp;

  public function setMaxTemp($maxTemp)
  {
    $this->maxTemp = $maxTemp;
  }

  public function setMinTemp($minTemp)
  {
    $this->minTemp = $minTemp;
  }

  public function getMaxTemp()
  {
    return $this->maxTemp;
  }

  public function getMinTemp()
  {
    return $this->minTemp;
  }
}
