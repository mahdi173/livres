@extends('adminp')
@section('content')

<html>
<head>
  <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}" >
  <meta charset="utf-8">
<style type="text/css">
.form-group{
 margin-left: 10%;	
}
.btn {
 margin-left: 60%;
}
.panel{
	 margin-top: 10%;	    
}
.required{
	 color:red;
 }
 
 </style> 
 </head>
<div class="panel">
{!!Form::open(['url'=>'Addlivre','files'=>true])!!}
{!! csrf_field()!!}
<div class="form-group">
<strong>Photo</strong>  <span class="required">*</span> <br>
{!!Form::file('image',null,['class'=>'form-control'])!!}
<div class="alert-danger">{!!$errors->first('image')!!}</div>
</div>
<div class="form-group">
<strong>Titre</strong> <span class="required">*</span> <br>
{!!Form::text('titre',null,['class'=>'form-control'])!!}
<div class="alert-danger">{!!$errors->first('titre')!!}</div>
</div>
<div class="form-group">
<strong>Prix</strong> <span class="required">*</span> <br>
{!!Form::text('prix',null,['class'=>'form-control'])!!}
<div class="alert-danger">{!!$errors->first('prix')!!}</div>
</div>
<div class="form-group">
        <label class="label">Nom d'auteur</label>
        <div class="select">
            <select name="auteur_id">
                @foreach($auteurs as $auteur)
                    <option value="{{$auteur->id }}">{{ $auteur->name}}</option>
                @endforeach
            </select>
        </div>
	</div>
</div>
<button type="submit" class="btn btn-success">Envoyer</button>
{!!Form::close()!!}
</div>
</html>

@stop