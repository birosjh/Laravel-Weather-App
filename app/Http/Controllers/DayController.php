<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
    $dayCollection = collect();

    for($i = 0; $i < sizeOf($dayWeather['data']); $i++){
      $time = date("l", $dayWeather['data'][$i]['time']);
      $summary = $dayWeather['data'][$i]['summary'];
      $icon = $dayWeather['data'][$i]['icon'];
      $humidity = $dayWeather['data'][$i]['humidity'];
      $precipProbability = $dayWeather['data'][$i]['precipProbability'];
      $maxTemp = $dayWeather['data'][$i]['temperatureMax'];
      $minTemp = $dayWeather['data'][$i]['temperatureMin'];

      $dayCollection->push(WeatherDataFactories::createDay($time, $summary, $icon, $humidity, $precipProbability));
      $dayCollection[$i]->setMinTemp($minTemp);
      $dayCollection[$i]->setMaxTemp($maxTemp);

    }

    return view('daily')->with(['dayCollection' => $dayCollection]);

  }
}
