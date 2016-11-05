<?php

namespace app;

abstract class weatherObject
{
  protected $time;

  protected $summary;

  protected $icon;

  protected $humidity;

  public function __construct($time, $summary, $icon, $humidity, $precipProbability)
  {
    $this->time = $time;
    $this->summary = $summary;
    $this->icon = $icon;
    $this->humidity = $humidity;
    $this->precipProbability = $precipProbability;

  }

  public function getTime()
  {
    return $this->time;
  }

  public function getSummary()
  {
    return $this->summary;
  }

  public function getIcon()
  {
    return $this->icon;
  }

  public function getHumidity()
  {
    return $this->humidity;
  }

  public function getPrecipProbability()
  {
    return $this->precipProbability;
  }

}

class day extends weatherObject
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

  public function getMaxTemp($maxTemp)
  {
    return $this->maxTemp;
  }

  public function getMinTemp($minTemp)
  {
    return $this->minTemp;
  }


}

class hour extends weatherObject
{
  protected $temp;

  public function setTemp($temp)
  {
    $this->temp = $temp;
  }

  public function getTemp($temp)
  {
    return $this->temp;
  }
}
