@extends('default.layouts.layout')


@section('navbar')
    @parent
    {{--@parent отобразить контент из родительской секции--}}
@endsection


@section('header')
    @parent
@endsection


@section('sidebar')
    @parent
    <h1>About</h1>
@endsection


@section('content')
    @include('default.content')
@endsection