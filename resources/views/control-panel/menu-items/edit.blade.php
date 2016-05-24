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
                    <h3 class="panel-title">Menu Cateogories - Edit</h3>

                </div>

                <div class="panel-body">
                    {!! Form::model($menu_item, ['route'=> ['control-panel.menu-items.update',$menu_item->id], 'method'=>'patch']) !!}
                        @include('control-panel.menu-items._partials.form')
                    <button class="btn btn-primary " type="submit">Update</button>
                    <a href="{!! route('control-panel.menu-items.index') !!}" class="btn btn-warning" type="submit">Cancel</a>
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
        <div class="col-md-8">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Menu Item List</h3>
                </div>
                <div class="panel-body">
                    @include('control-panel.menu-items._partials.menu-item-list')
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
