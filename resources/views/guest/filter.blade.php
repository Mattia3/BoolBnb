@extends('layouts.guest')
@section('page_title', 'filter')
    
@section('content')
<div id="app">
  <div class="background-hero"></div>

  <main-component :apartments="{{json_encode($apartments)}}" :services="{{json_encode($services)}}"></main-component>
</div>
@endsection