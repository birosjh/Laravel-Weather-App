@extends('layout')


@section('navigation-bar')

<li><a href="/">Home</a></li>
<li><a href="hourly-forecast">Hourly Forecast</a></li>
<li class="active"><a>Weekly Forecast</a></li>

@stop

@section('content')

  @foreach($dayCollection as $day)

  <div class="day container">

    <p>Time: {{ $day->getTime() }}</p>

    <p>Summary: {{ $day->getSummary() }}</p>

    <p>Icon: {{ $day->getIcon() }}</p>

    <p>Humidity: {{ $day->getHumidity() }}</p>

    <p>Precip Probability: {{ $day->getPrecipProbability() }}</p>

    <p>Max Temp: {{ $day->getMaxTemp() }}</p>

    <p>Min Temp: {{ $day->getMinTemp() }}</p>

  </div>

  @endforeach


@stop
