<?php

namespace App;

use GuzzleHttp\Client;

use App\WeatherData;
use App\WeatherDataFactories;

class getWeatherInfo
{

  const API_KEY = "b76d32714d01206752cb63a0fae1341d";


  public static function callForecastAPI($latAndLong)
  {

    $latLong = $this->getLatAndLong();

    $urlBase = "https://api.darksky.net/forecast/";

    $url = $urlBase . self::API_KEY . "/" . $latLong;

    $client = new Client();

    $response = $client->request('GET', $url, [
      'query' => 'exclude=minutely,alerts,flags']);

    $weather = json_decode($response->getBody());

    return $weather;

  }

}
