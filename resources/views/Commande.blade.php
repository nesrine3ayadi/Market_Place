{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('type', 'Type:') !!}
			{!! Form::text('type') !!}
		</li>
		<li>
			{!! Form::label('Client', 'Client:') !!}
			{!! Form::text('Client') !!}
		</li>
		<li>
			{!! Form::label('Livraison', 'Livraison:') !!}
			{!! Form::text('Livraison') !!}
		</li>
		<li>
			{!! Form::label('tva', 'Tva:') !!}
			{!! Form::text('tva') !!}
		</li>
		<li>
			{!! Form::label('total', 'Total:') !!}
			{!! Form::text('total') !!}
		</li>
		<li>
			{!! Form::label('remise', 'Remise:') !!}
			{!! Form::text('remise') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}