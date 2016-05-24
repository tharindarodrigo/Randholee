<div class="form-group">
    <label class="dropdown-header" for="demo-megamenu-input">Menu Category</label>
    {!! Form::select('menu_category_id', App\MenuCategory::lists('menu_category', 'id'),null, ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
    <label class="dropdown-header" for="demo-megamenu-input">Item Title</label>
    {!! Form::text('item', null, ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
    <label class="dropdown-header" for="demo-megamenu-input">Item Description</label>
    {!! Form::text('description', null, ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
    <label class="dropdown-header" for="demo-megamenu-input">Price</label>
    {!! Form::text('price', null, ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
    <label class="dropdown-header" for="demo-megamenu-input">Select Item Image</label>
    {!! Form::file('image', ['class'=> '']) !!}
</div>

