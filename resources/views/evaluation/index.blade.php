@foreach ($evaluation as $e)

    {{ $e->commentaire }}
    {{ $e->evaluation }}
    @if(Auth::check())
        @if (Auth::user()->role==1)
            {!! Form::open(array('route' =>['evaluation.destroy',$e->id ] , 'method' => 'DELETE','autocomplete'=>'off')) !!}

            <input id="submit" type="submit" class="form-control" name="submit" required value="Suppirmer evaluation">
            {{ Form::token() }}
            {!! Form::close() !!}
        @endif
    @endif


@endforeach
