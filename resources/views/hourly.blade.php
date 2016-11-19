@extends('layout')


@section('navigation-bar')

<li><a href="/">Home</a></li>
<li class="active"><a>hourly Forecast</a></li>
<li><a href="weekly-forecast">Weekly Forecast</a></li>

@stop

@section('content')

@foreach($hourCollection as $hour)

<div class="hour container">

  <p>Time: {{ $hour->getTime() }}</p>

  <p>Summary: {{ $hour->getSummary() }}</p>

  <p>Icon: {{ $hour->getIcon() }}</p>

  <p>Humidity: {{ $hour->getHumidity() }}</p>

  <p>Precip Probability: {{ $hour->getPrecipProbability() }}</p>

  <p>Temp: {{ $hour->getTemp() }}</p>

</div>

@endforeach

@stop
