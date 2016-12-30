{!! Form::open(array('route' => 'route.name', 'method' => 'POST','enctype'=>"multipart/form-data")) !!}
	<ul>
		<li>
			{!! Form::label('nom', 'nom:') !!}
			{!! Form::text('nom') !!}
		</li>
		<li>
			{!! Form::label('description', 'Description:') !!}
			{!! Form::text('description') !!}
		</li>
		<li>
			{!! Form::label('prix', 'Prix:') !!}
			{!! Form::text('prix') !!}
		</li>
		<li>
			{!! Form::label('quantite', 'Quantite:') !!}
			{!! Form::text('quantite') !!}
		</li>
		<li>
			{!! Form::label('categori', 'Categori:') !!}
			{!! Form::text('categori') !!}
		</li>
		<li>
			{!! Form::label('image', 'Image:') !!}
			{!! Form::file('image') !!}
		</li>
		<li>
			{!! Form::label('evaluation', 'Evaluation:') !!}
			{!! Form::text('evaluation') !!}
		</li>

		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}