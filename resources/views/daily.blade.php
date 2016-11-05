@extends('layout')


@section('navigation-bar')

<li><a href="/">Home</a></li>
<li><a href="hourly-forecast">Hourly Forecast</a></li>
<li class="active"><a>Weekly Forecast</a></li>

@stop

@section('content')

<h1> {{ $day->getMaxTemp() }}</h1>

<h1> {{ $day->getMinTemp() }}</h1>


@stop
