@extends('plantilla')
@section('seccion')
<h1>Detalle de entretenimiento</h1>
<h4>id: {{$entretenimientos->id_entretenimiento}}  </h4>  
<h4>Nombre: {{$entretenimientos->nombre}}  </h4>  
<h4>id: {{$entretenimientos->descripcion}}  </h4>  
@endsection