{!! Form::open(array('route' =>['evaluation.update',$evaluation->id ] , 'method' => 'PATCH','autocomplete'=>'off','enctype'=>"multipart/form-data")) !!}
<label>Commentaire :</label>
<input id="nom" type="text" class="form-control" name="commentaire" required placeholder="{{ $evaluation->commentaire }}" value="{{ $evaluation->commentaire }}">

<label>Evaluation :</label>
<input id="nom" type="text" class="form-control" name="evaluation" required placeholder="{{ $evaluation->evaluation }}" value="{{ $evaluation->evaluation }}">

<input id="submit" type="submit" class="form-control" name="submit" required>


{!! Form::close() !!}