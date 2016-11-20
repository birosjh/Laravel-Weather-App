@extends('layout')


@section('navigation-bar')

<li><a href="/">Home</a></li>
<li class="active"><a>Hourly Forecast</a></li>
<li><a href="weekly-forecast">Weekly Forecast</a></li>

@stop

@section('content')

  @foreach($hourCollection as $hour)

    <div class="hour">

      <h3>{{ $hour->getTime() }}</h3>

      <p>Summary: {{ $hour->getSummary() }}</p>

      <canvas id="{{ $loop->index }}" class="{{ $hour->getIcon() }}" width="100" height="100"></canvas>

      <p>Humidity: {{ $hour->getHumidity() }}</p>

      <p>Precip Probability: {{ $hour->getPrecipProbability() }}</p>

      <p>Temp: {{ $hour->getTemp() }}</p>

    </div>

  @endforeach

@stop
