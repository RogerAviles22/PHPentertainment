@extends('plantilla')
@section('seccion')
<div class="modal-body detail">
    <div class="container">
        <div class="row">
            <h1 class="text-center">{{$entretenimientos->nombre}} - {{$entretenimientos->anio_estreno}} </h1>  
            <p>{{$entretenimientos->descripcion}}</p>  
            <div class="col-lg-6 col-sm-12">
                <h3>Categoría</h3>
                <p class="text-center">{{$categoria->nombre}} </p>
                <h3>Géneros</h3>
                @foreach ($generos as $item)
                    <span class="gender">{{$item->nombre}} </span>
                @endforeach
            </div>            
            <div class="col-lg-6 col-sm-12">
                <h2 class="text-center">Historial</h2>
                <h3>Lo viste el</h3>
                <p class="text-center">{{$historial[0]->fecha_visto}}</p>
                <h3>Sitio</h3>
                <p class="text-center">{{$historial[0]->visto_en}}</p>
                <h3>Calificación personal</h3>
                <p class="text-center">{{$historial[0]->estrellas}}</p>
            </div>
            @endsection
        </div>
    </div>
</div>

