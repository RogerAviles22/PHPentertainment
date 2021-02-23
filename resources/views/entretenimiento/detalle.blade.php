@extends('plantilla')
@section('seccion')
<div class="modal-body detail">
    <div class="container">
        <div class="row">
            <div class="card detail col-12">
                <div class="card-header heading-footer"></div>
                <div class="card-body card-detail row align-items-center">
                    <div class="col-12 d-flex justify-content-between">
                        <h3 class="text-start text-uppercase card-title">{{$entretenimientos->nombre}}</h3> 
                        <p class="text-end card-title">Toma #000{{$entretenimientos->id_entretenimiento}}</p>
                    </div>
                    <hr>
                    <p class="col-8 fs-5">{{$entretenimientos->descripcion}}</p>  
                    <div class="col-4 text-center">                        
                        <h4 >GÉNERO</h4>
                        @foreach ($generos as $item)
                            <p class="gender">{{$item->nombre}} </p>
                        @endforeach
                    </div>    
                    <hr>
                    <div class="col-5 d-flex justify-content-around align-items-center">
                        <h4>AÑO</h4>
                        <p class="fs-5">{{$entretenimientos->anio_estreno}}</p>
                    </div>     
                    <div class="col-7 d-flex justify-content-around ">
                        <h4 class="align-items-center">CATEGORÍA</h4>
                        <p class="fs-5 align-items-center">{{$categoria->nombre}} </p>
                    </div>  
                    <hr> 
                    <div class="col-12 d-flex justify-content-evenly ">
                        <h4 class="align-items-center">VISTO EL</h4>
                        <p class="fs-5 align-items-center">{{$historial[0]->fecha_visto}}</p>                        
                    </div>
                    <hr>
                    <div class="col-lg-6 col-md-12 d-flex justify-content-evenly align-items-center">
                        <h4 class="mx-1 align-items-center">SITIO</h4>
                        <p class="fs-6">{{$historial[0]->visto_en}}</p>
                    </div>
                    <div class="col-lg-6 col-md-12 d-flex justify-content-evenly align-items-center">
                        <h4 class="align-items-center">CALIFICACIÓN PERSONAL</h4>
                        <P class="fs-5">{{$historial[0]->estrellas}}</P>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</div>
@endsection

