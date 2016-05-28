<div class="table-responsive">
    <table class="table" id="menu_categories">
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Image</th>
            <th>Controls</th>
        </tr>
        </thead>
        <tbody>
        @if(!empty($gallery_images))
            @foreach($gallery_images as $gallery_image)
                <tr>
                    <td>{!! $gallery_image->id !!}</td>
                    <td>{!! $gallery_image->title !!}</td>
                    <td>
                        <img width="50" src="{!! asset('images/gallery/thumb/'.$gallery_image->id.'.jpg')!!}" alt="img">
                    </td>
                    <td width="100px">
                        <div class="btn-group">
                            {!! Form::open(['route'=>['control-panel.gallery-images.destroy',$gallery_image->id],
                            'method'=>'delete']) !!}
                            <a href="{!! route('control-panel.gallery-images.edit', $gallery_image->id) !!}" class="btn btn-primary" type="button"><span class="fa fa-edit"></span></a>
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