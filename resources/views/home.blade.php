@extends('layout.app', ['title' => 'Home'])

@section('title', 'Home')

@section('head')
    <style>
        body {
            background: burlywood;
        }
    </style>
@endsection

@section('content')
    <div class="container"> 
        My name is {!! $name !!}
    </div>
@endsection