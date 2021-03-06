<div class="form-group">
    {!! Form::label('name', 'Name', ['class'=>'control-label col-sm-2']) !!}
    <div class="col-sm-10">
        <div class="col-xs-12">
        {!! Form::text('name', $authUser->name ?? null, ['placeholder'=>'John Doe','class'=>'form-control', 'required']) !!}
        </div>
    </div>
</div>
<div class="form-group">
    {!! Form::label('email', 'Email', ['class'=>'control-label col-sm-2']) !!}
    <div class="col-sm-10">
        {!! Form::text('email', $authUser->email ?? null, ['placeholder'=>'john@example.com','class'=>'form-control', 'required']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('content', 'Content', ['class'=>'control-label col-sm-2']) !!}
    <div class="col-sm-10">
        {!! Form::textarea('content', null, ['placeholder'=>'Add note content','class'=>'form-control', 'required']) !!}
    </div>
</div>
