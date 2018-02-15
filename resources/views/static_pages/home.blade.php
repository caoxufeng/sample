@extends('layouts.default')
@section('title','主页')
@section('content')
    <div class="jumbotron">
       <li><a href="{{route('help')}}">帮助</a></li>
    </div>
    <h1>主页</h1>
@stop