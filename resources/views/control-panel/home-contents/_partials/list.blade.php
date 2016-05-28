<div class="table-responsive">
    <table class="table" id="menu_categories">
        <thead>
        <tr>
            <th>#</th>
            <th>Tilte</th>
            <th>Sub Title</th>
            <th>Img</th>
            <th>Controls</th>
        </tr>
        </thead>
        <tbody>
        @if(!empty($home_contents))
            @foreach($home_contents as $home_content)
                <tr>
                    <td>{!! $home_content->id !!}</td>
                    <td>{!! $home_content->title !!}</td>
                    <td>{!! $home_content->sub_title !!}</td>
                    <td>
                        <img width="50" src="{!! asset('images/slides/'.$home_content->id.'.jpg')!!}" alt="img">
                    </td>
                    <td>
                        <div class="btn-group">
                            {!! Form::open(['route'=>['control-panel.home-contents.destroy',$home_content->id],
                            'method'=>'delete']) !!}
                            <a href="{!! route('control-panel.home-contents.edit', $home_content->id) !!}" class="btn btn-primary" type="button"><span class="fa fa-edit"></span></a>
                            <button class="btn btn-danger" type="submit"><span class="fa fa-trash"></span></button>
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
</div>