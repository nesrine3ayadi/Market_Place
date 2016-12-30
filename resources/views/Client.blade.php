<p>
	Votre panier : {{ session('somme') }}
</p>
{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('adresse', 'Adresse:') !!}
			{!! Form::text('adresse') !!}
		</li>

		<li>

		</li>
		<li>
			{!! Form::label('code_postal', 'Code_postal:') !!}
			{!! Form::text('code_postal') !!}
		</li>
		<li>
			{!! Form::label('sexe', 'Sexe:') !!}
			{!! Form::text('sexe') !!}
		</li>
		<li>
			{!! Form::label('ville', 'Ville:') !!}
			{!! Form::text('ville') !!}
		</li>
		<li>
			{!! Form::label('mail', 'Mail:') !!}
			{!! Form::text('mail') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::token() !!}
{!! Form::close() !!}