<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $user->id }}</p>
</div>

<!-- name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'name:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'email:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- mobile Field -->
<div class="col-sm-12">
    {!! Form::label('mobile', 'mobile:') !!}
    <p>{{ $user->mobile }}</p>
</div>

<!-- sex Field -->
<div class="col-sm-12">
    {!! Form::label('sex', 'sex:') !!}
    <p>{{ $user->sex }}</p>
</div>

<!-- created_at Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'created at:') !!}
    <p>{{ $user->created_at }}</p>
</div>


