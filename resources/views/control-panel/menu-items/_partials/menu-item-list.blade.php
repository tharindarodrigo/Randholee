<div class="table-responsive">
    <table class="table" id="menu_categories">
        <thead>
        <tr>
            <th>#</th>
            <th>Category</th>
            <th>Item</th>
            <th>Description</th>
            <th>Price</th>
            <th>Controls</th>
        </tr>
        </thead>
        <tbody>
        @if(!empty($menu_items))
            @foreach($menu_items as $menu_item)
                <tr>
                    <td>{!! $menu_item->id !!}</td>
                    <td>{!! $menu_item->itemCategory->menu_category !!}</td>
                    <td>{!! $menu_item->item !!}</td>
                    <td>{!! $menu_item->description !!}</td>
                    <td>{!! $menu_item->price !!}</td>
                    <td>
                        <img width="50" src="{!! asset('images/menu/'.$menu_item->id.'.jpg')!!}" alt="img">
                    </td>
                    <td width="100px">
                        <div class="btn-group">
                            {!! Form::open(['route'=>['control-panel.menu-items.destroy',$menu_item->id],
                            'method'=>'delete']) !!}
                            <a href="{!! route('control-panel.menu-items.edit', $menu_item->id) !!}" class="btn btn-primary" type="button"><span class="fa fa-edit"></span></a>
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