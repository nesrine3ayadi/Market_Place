{!! Form::open(array('route' => 'paiement.store', 'method' => 'POST')) !!}
<ul>

    <li>
        <select name="methode">
            @foreach(\App\Methode_paiment::all()  as $m)
            <option value="{{ $m->id }}"> {{ $m->nom }}</option>
            @endforeach
        </select>
    </li>

    <li>
        {!! Form::submit() !!}
    </li>
</ul>
{!! Form::close() !!}
