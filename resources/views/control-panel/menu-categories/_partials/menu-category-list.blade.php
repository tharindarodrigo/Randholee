<div class="table-responsive">
    <table class="table" id="menu_categories">
        <thead>
        <tr>
            <th>#</th>
            <th>Category</th>
            <th>Controls</th>
        </tr>
        </thead>
        <tbody>
        @if(!empty($menu_categories))
            @foreach($menu_categories as $menu_category)
                <tr>
                    <td>{!! $menu_category->id !!}</td>
                    <td>{!! $menu_category->menu_category!!}</td>
                    <td>
                        <div class="btn-group">
                            {!! Form::open(['route'=>['control-panel.menu-categories.destroy',$menu_category->id],
                            'method'=>'delete']) !!}
                            <a href="{!! route('control-panel.menu-categories.edit', $menu_category->id) !!}" class="btn btn-primary" type="button"><span class="fa fa-edit"></span></a>
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