@extends('control-panel.layout.master')


@section('styles')
    <link rel="stylesheet" href="{!! asset('control-panel-assets/plugins/summernote/summernote.min.css') !!}">
@endsection



@section('page-title')
    About
@endsection



@section('bread-crumbs')

@endsection



@section('content')

    <div class="page-content">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">About Us</h3>

            </div>

            <div class="panel-body">
                {!! Form::model($about->first(),['route'=>['control-panel.about-us.store'], 'method'=>'POST']) !!}
                <div class="form-group">
                    <label class="dropdown-header" for="demo-megamenu-input">Title</label>
                    {!! Form::text('title', null, ['class' =>'form-control']) !!}

                </div>
                <div class="form-group">
                    <label class="dropdown-header" for="demo-megamenu-input">About</label>
                    {!! Form::textarea('about', null, ['class' =>'form-control']) !!}
                </div>
                <button class="btn btn-primary " type="submit">Submit</button>
                {!! Form::close() !!}
            </div>

        </div>
    </div>

@endsection



@section('scripts')

@stop
