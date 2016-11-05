<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Http\Requests;
use App\GetWeatherInfo;

class CurrentController extends Controller
{

    public function getHomeView()
    {
      $latAndLong = "42.3601,-71.0589";
      $weather = GetWeatherInfo::callForecastAPI($latAndLong);
      Log::debug($weather);


      return view('home')->with('todayWeather');

    }


    public function getHoursView()
    {

      //return view('hourly')->with('hourlyWeather', $hourlyWeather);
    }

    // public function getDaysView()
    // {
    //
    //   $dailyWeather = $this->getDailyWeather();
    //
    //   return view('week')->with('dailyWeather', $dailyWeather);
    // }
}
