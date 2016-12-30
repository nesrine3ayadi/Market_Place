{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('nom', 'Nom:') !!}
			{!! Form::text('nom') !!}
		</li>
		<li>
			{!! Form::label('prenom', 'Prenom:') !!}
			{!! Form::text('prenom') !!}
		</li>
		<li>
			{!! Form::label('sexe', 'Sexe:') !!}
			{!! Form::text('sexe') !!}
		</li>
		<li>
			{!! Form::label('adresse', 'Adresse:') !!}
			{!! Form::text('adresse') !!}
		</li>
		<li>
			{!! Form::label('code_postale', 'Code_postale:') !!}
			{!! Form::text('code_postale') !!}
		</li>
		<li>
			{!! Form::label('ville', 'Ville:') !!}
			{!! Form::text('ville') !!}
		</li>
		<li>
			{!! Form::label('pays', 'Pays:') !!}
			{!! Form::text('pays') !!}
		</li>
		<li>
			{!! Form::label('tel', 'Tel:') !!}
			{!! Form::text('tel') !!}
		</li>
		<li>
			{!! Form::label('mail', 'Mail:') !!}
			{!! Form::text('mail') !!}
		</li>
		<li>
			{!! Form::label('boutique', 'Boutique:') !!}
			{!! Form::text('boutique') !!}
		</li>
		<li>
			{!! Form::label('num_CIN_vendeur', 'Num_CIN_vendeur:') !!}
			{!! Form::text('num_CIN_vendeur') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}