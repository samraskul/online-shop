<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $image->id }}</p>
</div>

<!-- Url Field -->
<div class="col-sm-12">
    {!! Form::label('url', 'Url:') !!}
    <p>{{ $image->url }}</p>
</div>

<!-- Type Field -->
<div class="col-sm-12">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $image->type }}</p>
</div>

<!-- Imageable Id Field -->
<div class="col-sm-12">
    {!! Form::label('imageable_id', 'Imageable Id:') !!}
    <p>{{ $image->imageable_id }}</p>
</div>

<!-- Imageable Type Field -->
<div class="col-sm-12">
    {!! Form::label('imageable_type', 'Imageable Type:') !!}
    <p>{{ $image->imageable_type }}</p>
</div>

<!-- Admin Id Field -->
<div class="col-sm-12">
    {!! Form::label('admin_id', 'Admin Id:') !!}
    <p>{{ $image->admin_id }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $image->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $image->updated_at }}</p>
</div>

