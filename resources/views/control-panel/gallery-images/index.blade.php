@extends('control-panel.layout.master')


{{--

@section('styles')

@endsection

--}}



@section('page-title')
    Gallery Images
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
                    {!! Form::open(['route'=> ['control-panel.gallery-images.store'], 'method'=>'post', 'files'=>'true']) !!}
                        @include('control-panel.gallery-images._partials.form')
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
                    @include('control-panel.gallery-images._partials.list')
                </div>
            </div>
        </div>
    </div>

@endsection



@section('scripts')


@stop
