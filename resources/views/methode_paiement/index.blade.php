@foreach ($paiement as $p)

    {{ $p->nom }}
    {{ $p->taxe }}

    @if(Auth::check())
        @if (Auth::user()->role==1)
            {!! Form::open(array('route' =>['methode_paiment.destroy',$p->id ] , 'method' => 'DELETE','autocomplete'=>'off')) !!}

            <input id="submit" type="submit" class="form-control" name="submit" required value="Suppirmer paiement">
            {{ Form::token() }}
            {!! Form::close() !!}
        @endif
    @endif




@endforeach