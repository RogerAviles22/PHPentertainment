@extends('plantilla')

@section('seccion')
<section class="container-fluid main">        
    <form class="row justify-content-center align-items-center m-2">
        
        <div class="col-auto">Filtrar por nombre del entretenimiento:</div>
        <div class="col-auto">
            <input type="search" name="search" value="{{ old('nombre')}}" class="form-control" id="floatingInput" maxlength="100" >
        </div>
        <div class="col-1">
            <form action="">
                <button type="submit" class="btn btn-dark">
                    <i class="bi-search"></i>
                </button>
            </form>
        </div>
    </form>

    <div class="row justify-content-center d-flex align-items-stretch my-2 cards">
        @forelse ($entretenimientos as $item)
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
        @empty
        <div class="col-9 py-4 d-flex justify-content-center align-items-center bg-dark text-light">    
            <div class="row justify-content-center align-items-center">
                <img class="col-lg-8 col-sm-12" src="{{ asset('images/tv.gif') }} " alt="entretenerse" class="img-fluid">            
                <p class="col-lg-4 col-sm-12 px-2 fs-3 text-uppercase text-wrap" id="mensaje-recomendacion">¿Qué esperas para buscar entretenimiento en tu sitio de streaming o pirata favorito?</p>           
            </div>
        </div>
        @endforelse
    </div>
    </section>
    <div class="pagination justify-content-center">
        {{$entretenimientos -> links('pagination::bootstrap-4')}}
    </div>
@endsection