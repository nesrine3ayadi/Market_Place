{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('num_transaction', 'Num_transaction:') !!}
			{!! Form::text('num_transaction') !!}
		</li>
		<li>
			{!! Form::label('commande', 'Commande:') !!}
			{!! Form::text('commande') !!}
		</li>
		<li>
			{!! Form::label('methode', 'Methode:') !!}
			{!! Form::text('methode') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}