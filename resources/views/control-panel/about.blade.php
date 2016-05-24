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
                <form role="form" class="form">
                    <div class="form-group">
                        <label class="dropdown-header" for="demo-megamenu-input">Title</label>
                        <input id="demo-megamenu-input" type="text" placeholder="Enter Title" class="form-control" value="{{!empty($title) ? $title : ''}}">
                    </div>
                    <div class="form-group">
                        <label class="dropdown-header" for="demo-megamenu-input">About</label>
                        <textarea name="about" id="" class="form-control" cols="30" rows="10">{{ !empty($about) ? $about : '' }}</textarea>
                    </div>
                    <button class="btn btn-primary " type="submit">Submit</button>
                </form>
            </div>

        </div>
    </div>

@endsection



@section('scripts')
    <script src="{!! asset('control-panel-assets/plugins/summernote/summernote.min.js') !!}"></script>
    <script type="text/javascript">
        $('.summernote').summernote({height: 250});
    </script>
@stop
