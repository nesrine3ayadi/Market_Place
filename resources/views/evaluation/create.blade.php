
{!! Form::open(array('route' => 'evaluation.store', 'method' => 'POST')) !!}
<ul>

    <li>
        {!! Form::label('commentaire', 'commentaire:') !!}
        {!! Form::text('commentaire') !!}
    </li>
    <li>
        {!! Form::label('evaluation', 'evaluation:') !!}
        {!! Form::number('evaluation') !!}
    </li>
    <li>
        {!! Form::submit() !!}
    </li>
</ul>
{!! Form::close() !!}
