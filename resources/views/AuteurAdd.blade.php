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
 margin-left: 50%;
}
.panel{
	 margin-top: 10%;	    
}
 </style> 
 </head>
<div class="panel">
{!!Form::open(['url'=>'AuteurAdd'])!!}
{!! csrf_field()!!}
<div class="form-group">
<strong>Nom d'auteur</strong> <br>
{!!Form::text('name',null,['class'=>'form-control'])!!}
<div class="alert-danger">{!!$errors->first('name')!!}</div>
</div>
<button type="submit" class="btn btn-success">Envoyer</button>
{!!Form::close()!!}
</div>
</html>

@stop