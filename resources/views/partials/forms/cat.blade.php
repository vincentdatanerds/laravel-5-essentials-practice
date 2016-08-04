

<div class="form-group">
	{!! Form:label('name', 'Name') !!}
	<div class="form-controls">
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>
</div>


<div class="form-group">
{!! Form::label('date_of_birth', 'Date of birth') !!}
	<div class="form-controls">
		{{!! Form::date('date_of_birth', null, ['class' => 'form-control']) !!}}
	</div>
</div>


