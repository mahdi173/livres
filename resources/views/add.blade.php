{!!Form::open(['url'=>'Addlivre'])!!} // url ou le post est transferer par exemple ton script php
{!! csrf_field()!!}                      // on peut ajouter les class dans cette fromulaire avec bootsrap et tous
{!!Form::text('name',null)!!}
{!!$errors->first('name')!!}
<button type="submit">ok</button>
	{!!Form::close()!!}