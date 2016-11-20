@extends('layout')


@section('navigation-bar')

<li><a href="/">Home</a></li>
<li><a href="hourly-forecast">Hourly Forecast</a></li>
<li class="active"><a>Weekly Forecast</a></li>

@stop

@section('content')

  @foreach($dayCollection as $day)

    @if($loop->first)

      @continue

    @endif

    <div class="day">

      <h2>{{ $day->getTime() }}</h2>

      <canvas id="{{ $loop->index }}" class="{{ $day->getIcon() }}" width="100" height="100"></canvas>

      <div class="summary-wrapper">
        <strong><p class="summary">{{ $day->getSummary() }}</p></strong>
      </div>

      <div class="details-wrapper">
        <div class="row">
          <div class="col-xs-6">
            <p>High</p>
            <p>{{ $day->getMaxTemp() }}F</p>
            <p>Humidity:</p>
            <p>{{ $day->getHumidity() * 100 }}%</p>
          </div>
          <div class="col-xs-6">
            <p>Low</p>
            <p>{{ $day->getMinTemp() }}F</p>
            <p>Rain:</p>
            <p>{{ $day->getPrecipProbability() * 100 }}%</p>
          </div>
        </div>

      </div>

    </div>

  @endforeach



@stop
