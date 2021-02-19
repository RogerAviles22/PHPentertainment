@extends('plantilla')

@section('seccion')
<section class="container-fluid main">
        
        <form class="row justify-content-center align-items-center m-2">
            <div class="col-auto">Filtrar por Año de visualización:</div>
            <div class="col-auto">
                <input TYPE="NUMBER" MIN="1800" MAX="<?php echo date('Y'); ?>" STEP="1" VALUE="2019" SIZE="4">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-dark"><i class="bi-search"></i></button>
            </div>
        </form>

        <div class="row justify-content-center d-flex align-items-stretch my-2 cards">
            @foreach ($entretenimientos as $item)
                <div class="col-lg-3 col-sm-6 p-1">
                    <div class="card">
                        <div class="card-header">
                            <div class="title-entertainment d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="text-wrap">{{$item->nombre}}</h4>
                                    <p class="fs-6">{{$item->anio_estreno}}</p>
                                </div>
                                <div class="btn-group-vertical m-1 align-items-center" role="group">
                                    <a class="mb-1" href="{{ route('entretenimiento.detalle', $item) }}"><i class="bi-eye"></i></a>
                                    <a class="mb-1" href="{{ route('entretenimiento.editar', $item) }}"><i class="bi-pencil"></i></a>
                                    <form action="{{ route('entretenimiento.eliminar', $item) }}"  method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="bi-trash"></i></button>
                                    </form> 
                                </div>
                            </div>                    
                        </div>
                        <div class="card-body"> 
                            <p class="text-wrap">{{$item->descripcion}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <div class="pagination justify-content-center">
        {{$entretenimientos -> links('pagination::bootstrap-4')}}
    </div>
@endsection