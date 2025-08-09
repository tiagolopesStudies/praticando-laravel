@extends('layouts.example')

@section('title', 'Home Page')

@section('header')
    <header>Header</header>
@endsection

@section('content')
    <h2>Home Page</h2>
@endsection

@section('linksFooter')
    @parent
    <a href="#">Link 3</a>
    <a href="#">Link 4</a>
@endsection
