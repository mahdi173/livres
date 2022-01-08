@extends('adminp')
@section('content')
<head>
<meta charset="utf-8">
  <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}" >
  <link rel="stylesheet" href="{{asset('bootstrap/css/font-awesome.min.css')}}" >
  <link rel="stylesheet" href="{{asset('bootstrap/css/monstyle.css')}}" >

</head>
<div class="content">
<div class="col-sm-offset-3 col-sm-6">
@if(Session::has('msg'))
<div class="alert alert-info in margtop20">
<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>x</button>
<strong> {{session('msg')}}</strong>
</div>
@endif
<table class="table table-striped table-bordered table-hover " id="datatable">
<div class="panel panel-white">
<div class="panel-heading">
<span class="lato size18"> La Liste d'auteurs </span>
</div>
</div>
<thead>
<tr>
<th>Nom</th>
<th>Action</th>
</tr>
</thead>
@foreach($auteurs as $auteur)
<tr>
<td> {{$auteur->name}}</td>
<td style="text-align: center" >
<a href="{{url('auteurUpdate',['id'=>$auteur->id])}}" class="btn btn-primary">Modifier</a>
<a href="{{url('auteurDelete',['id'=>$auteur->id])}}" class="btn btn-danger">Supprimer</a>


</tr>
@endforeach
</table>
</div>
</div>

	@stop