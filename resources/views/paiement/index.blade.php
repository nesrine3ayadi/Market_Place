@foreach ($paiement as $p)

    {{ $p->num_transaction }}

    @if(Auth::check())
        @if (Auth::user()->role==2)
            {!! Form::open(array('route' =>['paiement.destroy',$p->id ] , 'method' => 'DELETE','autocomplete'=>'off')) !!}

            <input id="submit" type="submit" class="form-control" name="submit" required value="Suppirmer paiement">
            {{ Form::token() }}
            {!! Form::close() !!}
        @endif
    @endif




@endforeach