@foreach ($livraison as $l)
    {{ $l->nom }}
    {{ $l->tarif }}

    @if(\Illuminate\Support\Facades\Auth::check())
        @if(\Illuminate\Support\Facades\Auth::user()->role==1 )
    {!! Form::open(array('route' => ['livraison.destroy',$l->id], 'method' => 'DELETE')) !!}
             {!! Form::submit('Supprimer') !!}
    {!! Form::close() !!}
            <a href="{{ route('livraison.edit',$l->id) }}"> Modifier</a>
    @endif
        @endif

@endforeach
