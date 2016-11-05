@extends('layout')


@section('navigation-bar')

<li class="active"><a>Home</a></li>
<li><a href="hourly-forecast">Hourly Forecast</a></li>
<li><a href="weekly-forecast">Weekly Forecast</a></li>

@stop

@section('content')

  <h1>{{ $today->getTemp() }}</h1>

@stop
