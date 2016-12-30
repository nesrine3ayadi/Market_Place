{!! Form::open(array('route' => 'categorie.store', 'method' => 'POST')) !!}
<ul>
    <li>
        {!! Form::label('nom', 'Nom:') !!}
        {!! Form::text('nom') !!}
    </li>
    <li>
        {!! Form::submit() !!}
    </li>
</ul>
{!! Form::close() !!}