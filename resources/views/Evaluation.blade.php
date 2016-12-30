{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('commentaire', 'Commentaire:') !!}
			{!! Form::textarea('commentaire') !!}
		</li>
		<li>
			{!! Form::label('evaluation', 'Evaluation:') !!}
			{!! Form::text('evaluation') !!}
		</li>
		<li>
			{!! Form::label('client', 'Client:') !!}
			{!! Form::text('client') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}