@extends('adminp')
@section('content')

<html>
<head>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}" >
  <link rel="stylesheet" href="{{asset('bootstrap/css/font-awesome.min.css')}}" >
  <link rel="stylesheet" href="{{asset('bootstrap/css/monstyle.css')}}" >
  <meta charset="utf-8">
 <style>
 .required{
	 color:red;
 }
 </style>
 </head>
<div class="Content">
{!!Form::open(['url'=>'auteurUpdate/'.$auteur->id,'class'=>'form-horizontal from-label-left input_mask'])!!}
{!! csrf_field()!!}
<div class="form-group {!!$errors->has('name')? 'has-error': ''!!}">
<label class="control-label col-md-3 col-sm-6 col-xs-12"> Nom <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6 col-xs-12 has-feedback">
{!!Form::text('name',$auteur->name,['class'=>'form-control has-feedback-left','placeholder'=>'Nom'])!!}
<div class="alert-danger">{!!$errors->first('name')!!}</div>
</div>
</div>

<div class="ln_solid"></div>
<div class="form-group">
<div class="col-md-9 col-sm-9 col-xs-12 col-md-offest-3">
<a href="{{url('auteurListe')}}" class="btn btn-primary">Annuler</a>
<button type="submit" class="btn btn-success">Modifier</button>

</div>
</div>
{!!Form::close()!!}
</div>
</html>

@stop