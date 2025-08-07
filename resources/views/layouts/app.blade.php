@extends('layouts.base')

@section('child')
    @include('layouts.partials.header')

    @yield('content')

    <footer></footer>
@endsection
