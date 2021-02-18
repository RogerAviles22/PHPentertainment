@extends('plantilla')
@section('seccion')
<section class="m-3 sm-m-2 main">
    <h1>Editar entretenimiento</h1> 
    <form class="container-fluid" action="{{ route('entretenimiento.update', [ $entretenimientos->id_entretenimiento ]) }}" method="POST">
        @method('PUT')
        @csrf
        @if (session('mensaje'))
        <div class="alert alert-success close">
            {{session('mensaje')}}
        </div>
        
        @endif

        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div class="row p-3 ">
                    <h3 class="col-lg-12">General</h3>
                    <hr/>
                    <div class="form-floating col-lg-8 col-sm-12 mb-3">
                        <input type="text" name="nombre" value="{{$entretenimientos->nombre}}" class="form-control" id="floatingInput" maxlength="100" required>
                        <label for="floatingInput">Nombre del Entretenimiento</label>
                    </div>
                    <div class="form-general col-lg-4 col-sm-12  text-center mb-3">
                        <label for="floatingInput">Año de estreno</label>
                        <input id="floatingInput" name="anio_estreno" TYPE="NUMBER" MIN="1800" MAX="<?php echo date('Y'); ?>" STEP="1" VALUE="{{$entretenimientos->anio_estreno}}" SIZE="4"
                            required>
                    </div>
                    <div class="form-floating col-lg-12 ">
                        <textarea class="form-control" name="descripcion" value="" style="height: 150px" maxlength="300" required>{{$entretenimientos->descripcion}}</textarea>
                        <label for="floatingTextarea2">Descripción</label>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-sm-12">
                <div class="row p-3">
                    <h3 class="col-12">Visto el</h3>
                    <hr/>
                    <div class="col-12 d-flex mb-3">
                        <input type="date" id="datePicker" name="fecha_visto" value="{{$historial[0]->fecha_visto}}"  required>
                    </div>

                    <div class="form-floating col-lg-8 col-sm-12 mb-3">
                        <input type="text" name="visto_en" value="{{$historial[0]->visto_en}}"  class="form-control" id="floatingInput" maxlength="100" required>
                        <label for="floatingInput">Lo vi en...</label>       
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="row p-3">
                    <h3 class="col-12">Califícalo</h3>
                    <hr />
                    <div class="col-12 d-flex text-center">
                        <label class="form-label">Puntuación</label>
                        <input TYPE="NUMBER" name='estrellas' MIN="0" MAX="10" STEP="1" VALUE="{{$historial[0]->estrellas}}" SIZE="4" required>
                    </div>
                </div>

            </div>
        </div>
        <div class="text-center d-grid gap-2  col-6 mx-auto">
            <button class="btn btn-primary" type="submit">Editar</button>
        </div>

    </form>
</section>
@endsection