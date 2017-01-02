
{!! Form::open(array('route' => 'paiement.store', 'method' => 'POST')) !!}
<ul>

    <li>
        {!! Form::label('num_transaction', 'num_transaction:') !!}
        {!! Form::text('num_transaction') !!}
    </li>

    <li>
        {!! Form::submit() !!}
    </li>
</ul>
{!! Form::close() !!}
