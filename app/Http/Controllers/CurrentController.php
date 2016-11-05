<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\GetWeatherInfo;
use App\Today;


class CurrentController extends Controller
{

    public function getCurrentView()
    {
      $latAndLong = "42.3601,-71.0589";
      $currentWeather = GetWeatherInfo::getCurrentWeather($latAndLong);
      $time = $currentWeather['time'];
      $summary = $currentWeather['summary'];
      $icon = $currentWeather['icon'];
      $humidity = $currentWeather['humidity'];
      $precipProbability = $currentWeather['precipProbability'];
      $temp = $currentWeather['temperature'];

      $today = new Today($time, $summary, $icon, $humidity, $precipProbability);
      $today->setTemp($temp);

      return view('home')->with(['today' => $today]);

    }

}
