@extends('layout')


@section('navigation-bar')

<li><a href="/">Home</a></li>
<li class="active"><a>Hourly Forecast</a></li>
<li><a href="weekly-forecast">Weekly Forecast</a></li>

@stop

@section('content')

  @foreach($hourCollection as $hour)

    <div class="hour">
      <div class="row">
        <div class="col-md-6">
          <div class="column-one">
            <h2>{{ $hour->getTime() }}</h2>
            <strong><p>{{ $hour->getSummary() }}</p></strong>
            <p class="temp">{{ $hour->getTemp() }} F</p>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <p>Humidity</p>
              <p>{{ $hour->getHumidity() }}%</p>
            </div>
            <div class="col-xs-6">
              <p>Rain</p>
              <p>{{ $hour->getPrecipProbability() }}%</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <canvas id="{{ $loop->index }}" class="{{ $hour->getIcon() }}" width="200" height="200"></canvas>
        </div>
      </div>
    </div>

  @endforeach

@stop
