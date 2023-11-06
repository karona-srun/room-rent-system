@extends('errors::minimal')

@section('title', __('Server Error'))
@section('code', '500')
@section('message')
<a href="{{ url()->previous() }}">{{ __('app.label_home_page')}}</a>
@endsection
@section('img')
<img src="{{ asset('images/errors/500.png')}}" class="flex" width="300px" alt="" srcset="">
@endsection

