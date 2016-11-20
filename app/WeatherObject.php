<?php

namespace app;

abstract class WeatherObject
{
  protected $time;

  protected $summary;

  protected $icon;

  protected $humidity;

  protected $precipProbability;

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
