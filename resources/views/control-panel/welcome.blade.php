@extends('control-panel.layout.master')


@section('styles')
    @yield('styles')
@endsection



@section('page-title')
    Welcome
@endsection



@section('bread-crumbs')
    <li><a href="#">Home</a></li>
    <li><a href="#">Library</a></li>
    <li class="active">Data</li>
@endsection



@section('content')

    Hello

@endsection



@section('scripts')
    @yield('scripts')
@stop
