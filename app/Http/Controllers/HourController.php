<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\GetWeatherInfo;
use App\Hour;
use App\WeatherDataFactories;


class HourController extends Controller
{
  public function getHoursView()
  {
    $latAndLong = "42.3601,-71.0589";
    $hourWeather = GetWeatherInfo::getHourWeather($latAndLong);
    $hourCollection = collect();

    for($i = 0; $i < sizeOf($hourWeather['data']); $i++ ) {

      $time = date("F j, Y, g:i a", $hourWeather['data'][$i]['time']);
      $summary = $hourWeather['data'][$i]['summary'];
      $icon = $hourWeather['data'][$i]['icon'];
      $humidity = $hourWeather['data'][$i]['humidity'];
      $precipProbability = $hourWeather['data'][$i]['precipProbability'];
      $temp = $hourWeather['data'][$i]['temperature'];

      $hour = WeatherDataFactories::createHour($time, $summary, $icon, $humidity, $precipProbability);
      $hour->setTemp($temp);
      $hourCollection->push($hour);
      
    }

    return view('hourly')->with(['hourCollection' => $hourCollection]);

  }
}
