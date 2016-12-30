{!! Form::open(array('route' => 'livraison.store', 'method' => 'POST')) !!}
<ul>
    <li>
        {!! Form::label('nom', 'Nom Livraison:') !!}
        {!! Form::text('nom') !!}
    </li>
    <li>
        {!! Form::label('tarif', 'Tarif:') !!}
        {!! Form::number('tarif') !!}
    </li>
    <li>
        {!! Form::submit() !!}
    </li>
{!! Form::token() !!}
</ul>
{!! Form::close() !!}