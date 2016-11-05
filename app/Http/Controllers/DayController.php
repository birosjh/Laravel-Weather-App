<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\GetWeatherInfo;
use App\Day;
use App\WeatherDataFactories;

class DayController extends Controller
{
  public function getDaysView()
  {
    $latAndLong = "42.3601,-71.0589";
    $dayWeather = GetWeatherInfo::getDayWeather($latAndLong);
    $time = $dayWeather['data'][0]['time'];
    $summary = $dayWeather['data'][0]['summary'];
    $icon = $dayWeather['data'][0]['icon'];
    $humidity = $dayWeather['data'][0]['humidity'];
    $precipProbability = $dayWeather['data'][0]['precipProbability'];
    $maxTemp = $dayWeather['data'][0]['temperatureMax'];
    $minTemp = $dayWeather['data'][0]['temperatureMin'];

    $day = WeatherDataFactories::createDay($time, $summary, $icon, $humidity, $precipProbability);
    $day->setMinTemp($minTemp);
    $day->setMaxTemp($maxTemp);

    return view('daily')->with(['day' => $day]);

  }
}
