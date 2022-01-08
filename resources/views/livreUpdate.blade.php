@extends('adminp')
@section('content')

<html>
<head>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}" >
  <link rel="stylesheet" href="{{asset('bootstrap/css/font-awesome.min.css')}}" >
  <link rel="stylesheet" href="{{asset('bootstrap/css/monstyle.css')}}" >
  <meta charset="utf-8">
  <style>
  .Content {
	   margin-left: 7%;
  }
  </style>
 </head>
<div class="Content">
{!!Form::open(['url'=>'livreUpdate/'.$livre->idLive,'files'=>true,'class'=>'form-horizontal from-label-left input_mask'])!!}
{!! csrf_field()!!}
<div class="form-group {!!$errors->has('image')? 'has-error': ''!!}">
<strong>Photo</strong> <br>
{!!Form::file('image',null,['class'=>'form-control','placeholder'=>'Photo'])!!}
<div class="alert-danger">{!!$errors->first('image')!!}</div>
</div>
<div class="form-group {!!$errors->has('titre')? 'has-error': ''!!}">
<strong>Titre</strong> <br>
{!!Form::text('titre',null,['class'=>'form-control','placeholder'=>'Titre'])!!}
<div class="alert-danger">{!!$errors->first('titre')!!}</div>
</div>
<div class="form-group {!!$errors->has('prix')? 'has-error': ''!!}">
<strong>Prix</strong> <br>
{!!Form::text('prix',null,['class'=>'form-control','placeholder'=>'Prix'])!!}
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
<div class="ln_solid"></div>
<div class="form-group">
<div class="col-md-9 col-sm-9 col-xs-12 col-md-offest-3">
<a href="{{url('livreListe')}}" class="btn btn-primary">Annuler</a>
<button type="submit" class="btn btn-success">Modifier</button>
</div>
</div>
{!!Form::close()!!}
</div>
</html>

@stop
