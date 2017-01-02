
{!! Form::open(array('route' => 'methode_paiment.store', 'method' => 'POST')) !!}
<ul>

    <li>
        {!! Form::label('nom', 'nom:') !!}
        {!! Form::text('nom') !!}
    </li>
    <li>
        {!! Form::label('taxe', 'taxe:') !!}
        {!! Form::number('taxe') !!}
    </li>
    <li>
        {!! Form::submit() !!}
    </li>
</ul>
{!! Form::close() !!}
