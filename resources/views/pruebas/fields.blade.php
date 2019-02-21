<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Clave Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clave', 'Clave:') !!}
    {!! Form::password('clave', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">

    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
   <!--  @if(Session::has('flash_message'))
                            {{Session::get('flash_message')}}
                        @endif -->
    <a href="{!! route('pruebas.index') !!}" class="btn btn-default">Cancel</a>
</div>
