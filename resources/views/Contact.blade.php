@extends('adminp')
@section('content')
{!!Form::open(['url'=>'Contact'])!!}
{!! csrf_field()!!}
<html>
<head>
<meta charset="utf-8">
  <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}" >
  <link rel="stylesheet" href="{{asset('bootstrap/css/font-awesome.min.css')}}" >
  <link rel="stylesheet" href="{{asset('bootstrap/css/monstyle.css')}}" >
        <title>Contact</title>
		<style type="text/css">
 
.main {
 display:flex;
 }

.container {
	 margin-top: 10%;
	    margin-left: 50px;
}
 </style> 
</head>
<body>
<div class="container">
                       <form>
                       <div class="panel panel-primary margetop60">
                <div class="panel-body">
                        <div class="form-group">
		                <h6>Nom*</h6>  <input type="text" name="nom"  class="form-control" />
						<div class="alert-danger">{!!$errors->first('nom')!!}</div>
                        </div>
                         <div class="form-group">
                        <h6>Email*</h6>  <input type="text" name="email"  class="form-control" />
						<div class="alert-danger">{!!$errors->first('email')!!}</div>
                        </div>
							<div class="form-group">
                        <h6>Sujet*</h6> <input type="text" name="sujet" class="form-control"/>
                        <div class="alert-danger">{!!$errors->first('sujet')!!}</div>                
                        </div>
						<div class="form-group">
                       <h6>Message*</h6> <textarea type="text" name="msg" class="form-control" /> </textarea>
                      <div class="alert-danger">{!!$errors->first('msg')!!}</div>                       
                        </div>
                     	<div class="form-group">
						<button type="reset" class="btn btn-primary" >Annuller</button>
				        <button type="submit" class="btn btn-success">
                            <span class="glyphicon glyphicon-save"> ok	</span>
                            	
                        </button>
						</div>
						</form>
                </div>
            </div>   
        </div>      
		</body>
</html>
@stop