@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message')
<a href="{{ url()->previous() }}">{{ __('app.label_home_page')}}</a>
@endsection

@section('img')
<img src="{{ asset('images/errors/404.png')}}" class="flex" width="300px" alt="" srcset="">
@endsection