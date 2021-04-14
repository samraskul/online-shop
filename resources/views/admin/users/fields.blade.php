<!-- name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- mobile Field -->
<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('mobile', 'mobile:') !!}
    {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
</div>

<!-- sex Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sex', 'sex:') !!}
    {!! Form::select('sex', ['male'=>'male', 'female'=>'female', 'other'=>'other'], null, ['class' => 'form-control']) !!}
</div>

<!-- password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'password:') !!} 
    <br>
    {!! Form::password('password', null, ['class' => 'form-control']) !!}
    <br>
    <div class="small"><abbr title="Leave it empty, if you don't want to change the password when updating the user">hover for help</abbr></div>

</div>

<!-- password_confirmation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password_confirmation', 'password_confirmation:') !!}
    {!! Form::password('password_confirmation', null, ['class' => 'form-control']) !!}
</div>


