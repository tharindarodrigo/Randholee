
<div class="form-group">
    <label class="dropdown-header" for="demo-megamenu-input">Image Title</label>
    {!! Form::text('title', null, ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
    <label class="dropdown-header" for="demo-megamenu-input">Image Sub title</label>
    {!! Form::text('sub_title', null, ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
    <label class="dropdown-header" for="demo-megamenu-input">Select Slider Image</label>
    {!! Form::file('slider_image', ['class'=> '']) !!}
</div>

