@extends('adminp')
@section('content')
<html>
<head>
<meta charset="utf-8">
  <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}" >
  <link rel="stylesheet" href="{{asset('bootstrap/css/font-awesome.min.css')}}" >
  <link rel="stylesheet" href="{{asset('bootstrap/css/monstyle.css')}}" >
<style>
.form-group{
	margin-top: 10%;
		margin-left: 20%;
}
.btn{
	margin-left: 50%;
}
</style>
</head>
<body>
<div class="panel panel-primary margetop60">
@if(session()->has('error'))
<div class="alert-danger"> {!!session('error')!!} </div>
@endif
{!!Form::open(['url'=>'Image','files'=>true])!!} 
{!! csrf_field()!!}
<div class="form-group">
{!!Form::file('fichier')!!}
<div class="alert-danger">{!!$errors->first('fichier')!!}</div>
</div>
<button type="submit" class="btn btn-success">Envoyer</button>
	{!!Form::close()!!}
	</div>
	</body>
</html>
	@stop