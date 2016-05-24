@extends('control-panel.layout.master')


@section('styles')
    <link rel="stylesheet" href="{!! asset('control-panel-assets/plugins/summernote/summernote.min.css') !!}">
@endsection



@section('page-title')
    Menu Items
@endsection



@section('bread-crumbs')

@endsection



@section('content')

    <div class="page-content">
        <div class="col-md-4">

            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Menu Items</h3>

                </div>

                <div class="panel-body">
                    {!! Form::open(['route'=> ['control-panel.menu-items.store'], 'method'=>'post', 'files'=>'true']) !!}
                        @include('control-panel.menu-items._partials.form')
                    <button class="btn btn-primary " type="submit">Create</button>

                    {!! Form::close() !!}
                </div>

            </div>
        </div>
        <div class="col-md-8">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Menu fItem List</h3>
                </div>
                <div class="panel-body">
                    @include('control-panel.menu-items._partials.menu-item-list')
                </div>
            </div>
        </div>
    </div>

@endsection



@section('scripts')


@stop
