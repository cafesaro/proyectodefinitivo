<div class="form-group">
	{!! Form::label('nombre', 'Nombre de la imagen, con al final un ".jpg"')!!}
	{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('alto', 'alto de la imagen')!!}
	{!! Form::text('alto', null, ['class' => 'form-control']) !!}
</div>	
<div class="form-group">
	{!! Form::label('ancho', 'ancho de la imagen')!!}
	{!! Form::text('ancho', null, ['class' => 'form-control']) !!}
</div>	
<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-control'])!!}
</div>	