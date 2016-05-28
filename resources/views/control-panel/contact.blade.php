@extends('control-panel.layout.master')


@section('styles')
    <link rel="stylesheet" href="{!! asset('control-panel-assets/plugins/summernote/summernote.min.css') !!}">
@endsection



@section('page-title')
    Contact
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
                {!! Form::model($contact->first(),['route'=>['control-panel.contact.store'], 'method'=>'Post']) !!}
                <div class="form-group">
                    <label class="dropdown-header" for="tel">Tel</label>
                    {!! Form::text('tel', null, ['class'=> 'form-control']) !!}
                </div>

                <div class="form-group">
                    <label class="dropdown-header" for="fax">Fax</label>
                    {!! Form::text('fax', null, ['class'=> 'form-control']) !!}
                </div>

                <div class="form-group">
                    <label class="dropdown-header" for="email">Email</label>
                    {!! Form::text('email', null, ['class'=> 'form-control']) !!}
                </div>

                <div class="form-group">
                    <label class="dropdown-header" for="address">Address</label>
                    {!! Form::text('address', null, ['class'=> 'form-control']) !!}
                </div>

                <div class="form-group">
                    <label class="dropdown-header" for="demo-megamenu-input">Location</label>
                    <div class="row">
                        <div class="col-sm-6">
                            {!! Form::text('longitude', null, ['class'=> 'form-control' ,'placeholder'=>'Longitude']) !!}
                        </div>
                        <div class="col-sm-6">
                            {!! Form::text('latitude', null, ['class'=> 'form-control' ,'placeholder'=>'Latitude']) !!}

                        </div>

                    </div>
                </div>

                <button class="btn btn-primary " type="submit">Submit</button>
                {!! Form::close() !!}
            </div>

        </div>
    </div>

@endsection



@section('scripts')

@stop
