@extends('layout')


@section('navigation-bar')

<li class="active"><a>Home</a></li>
<li><a href="hourly-forecast">Hourly Forecast</a></li>
<li><a href="weekly-forecast">Weekly Forecast</a></li>

@stop

@section('content')
  <div class="row">
    <div class="col-md-6">
      <h1>Today</h1>
      <h3>{{ $today->getTime() }}</h3>
      <p>{{ $today->getSummary() }}</p>
      <p>{{ $today->getTemp() }}</p>
      <div class="row">
        <div class="col-md-6">
          <p>Humidity</p>
          <p>{{ $today->getHumidity() * 100 }}%</p>
        </div>
        <div class="col-md-6">
          <p>Chance of Rain</p>
          <p>{{ $today->getPrecipProbability() * 100 }}%</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <canvas id="0" class="{{ $today->getIcon() }}" width="350" height="350"></canvas>
    </div>
  </div>

@stop
