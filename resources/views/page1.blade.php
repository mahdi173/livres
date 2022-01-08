@extends('Template')
@section('titre')
Page1
@stop

@section('content')
Article
<?php echo $id;
// l'extend doit etre entre les blades
// la template doit etre dans le dossier public
?>
@stop

@section('footer')
<h5>Contactez-nous:</h5>
<h5><strong>0674932930</strong></h5>
@stop
