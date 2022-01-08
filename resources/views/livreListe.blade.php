@extends('adminp')
@section('content')
<head>
<meta charset="utf-8">
  <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}" >
  <link rel="stylesheet" href="{{asset('bootstrap/css/font-awesome.min.css')}}" >
  <link rel="stylesheet" href="{{asset('bootstrap/css/monstyle.css')}}" >
</head>
<div class="content">
<div class="col-sm-offset-3 col-sm-8">
@if(Session::has('msg'))
<div class="alert alert-info in margtop20">
<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>x</button>
<strong> {{session('msg')}}</strong>
</div>
@endif
<table class="table table-striped table-bordered table-hover " id="datatable">
<div class="panel panel-white">
<div class="panel-heading">
<span class="lato size18"> La Liste de livres</span>
</div>
</div>
<thead>
<tr>
<th>Photo</th>
<th>Titre</th>
<th>Prix</th>
<th>Nom  d'auteur</th>
<th>Action</th>
</tr>
</thead>
@foreach($livres as $livre)
<tr>
<td> <img src="{{$chemin}}/{{$livre->image}}" width="100"/> </td>
<td> {{$livre->titre}}</td>
<td> {{$livre->prix}}</td>
<td> {{App\Auteur::find($livre->auteur_id)->name}}</td>
<td style="text-align: center" >
<a href="{{url('livreUpdate',['idLive'=>$livre->idLive])}}" class="btn btn-primary">Modifier</a>
<a href="{{url('livreDelete',['idLive'=>$livre->idLive])}}" class="btn btn-danger">Supprimer</a>
</tr>
@endforeach
</table>
</div>
</div>
@stop