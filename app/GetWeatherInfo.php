<?php

namespace App;

use GuzzleHttp\Client;

use App\WeatherObject;
use App\WeatherDataFactories;

class getWeatherInfo
{

  const API_KEY = "b76d32714d01206752cb63a0fae1341d";


  public static function callForecastAPI($latAndLong)
  {

    $urlBase = "https://api.darksky.net/forecast/";

    $url = $urlBase . self::API_KEY . "/" . $latAndLong;

    $client = new Client();

    $response = $client->request('GET', $url, [
      'query' => 'exclude=minutely,alerts,flags']);

    $weather = json_decode($response->getBody(), true);

    return $weather;

  }

  public static function getCurrentWeather($latAndLong){

    $weather = self::callForecastAPI($latAndLong);
    return $weather['currently'];

  }

  public static function getHourWeather($latAndLong){

    $weather = self::callForecastAPI($latAndLong);
    return $weather['hourly'];

  }

  public static function getDayWeather($latAndLong){

    $weather = self::callForecastAPI($latAndLong);
    return $weather['daily'];

  }


}
