{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('id_livtaion', 'Id_livtaion:') !!}
			{!! Form::text('id_livtaion') !!}
		</li>
		<li>
			{!! Form::label('id_boutique', 'Id_boutique:') !!}
			{!! Form::text('id_boutique') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}