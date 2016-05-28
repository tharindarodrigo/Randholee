@extends('control-panel.layout.master')


@section('styles')
    {{--<link rel="stylesheet" href="{!! asset('control-panel-assets/plugins/summernote/summernote.min.css') !!}">--}}
@endsection



@section('page-title')
    Menu Categories
@endsection



@section('bread-crumbs')

@endsection



@section('content')

    <div class="page-content">
        <div class="col-md-4">

            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Home Contents - Edit</h3>

                </div>

                <div class="panel-body">
                    {!! Form::model($home_content, ['route'=> ['control-panel.home-contents.update',$home_content->id],
                    'method'=>'patch' , 'files'=> 'true']) !!}
                    @include('control-panel.home-contents._partials.form')
                    <button class="btn btn-primary " type="submit">Submit</button>
                    <a href="{!! route('control-panel.home-contents.index') !!}" class="btn btn-warning" type="submit">Cancel</a>
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
        <div class="col-md-8">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Home Contents List</h3>
                </div>
                <div class="panel-body">
                    @include('control-panel.home-contents._partials.list')
                </div>
            </div>
        </div>
    </div>

@endsection



@section('scripts')
    {{--<script src="{!! asset('control-panel-assets/plugins/summernote/summernote.min.js') !!}"></script>--}}
    {{--<script type="text/javascript">--}}
    {{--$('.summernote').summernote({height: 250});--}}
    {{--</script>--}}
@stop
