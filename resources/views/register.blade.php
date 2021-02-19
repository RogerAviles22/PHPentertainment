@extends('plantilla')
@section('seccion')

<section class="m-3 sm-m-2 main">
    <form class="container-fluid" action="{{route ('entretenimiento.crear') }}" method="POST">
      @csrf
      @if (session('exito'))
        <div class="alert alert-success">
          {{session('exito')}}
        </div>
      @endif
      @error('genders')
      <div class="alert alert-danger">
        Seleccione al menos un tipo de género.
      </div>
      @enderror

        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div class="row p-3 ">
                    <h3 class="col-lg-12">General</h3>
                    <hr/>
                    <div class="form-floating col-lg-8 col-sm-12 mb-3">
                        <input type="text" name="nombre" value="{{ old('nombre')}}" class="form-control" id="floatingInput" maxlength="100" required>
                        <label for="floatingInput">Nombre del Entretenimiento</label>
                    </div>
                    <div class="form-general col-lg-4 col-sm-12  text-center mb-3">
                        <label for="floatingInput">Año de estreno</label>
                        <input id="floatingInput" name="anio_estreno" TYPE="NUMBER" MIN="1800" MAX="<?php echo date('Y'); ?>" STEP="1" VALUE="<?php echo date('Y'); ?>" SIZE="4"
                            required>
                    </div>
                    <div class="form-floating col-lg-12 ">
                        <textarea class="form-control" name="descripcion" value="{{ old('descripcion')}}" id="floatingTextarea2" style="height: 150px" maxlength="300" required></textarea>
                        <label for="floatingTextarea2">Descripción</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="row p-3">
                    <h3 class="col-12">Tipo</h3>
                    <hr />                      
                    <div class="list-group col-lg-6 mb-lg-3 ">
                      @foreach ($generos1 as $item)
                        <label class="list-group-item">
                          <input class="form-check-input me-1" name="genders[]" type="checkbox" value="{{$item->id_genero}}">
                          {{$item->nombre}}
                        </label>                          
                      @endforeach 
                    </div>
                      <div class="list-group col-lg-6 mb-3">
                        @foreach ($generos2 as $item)
                        <label class="list-group-item">
                          <input class="form-check-input me-1" name="genders[]" type="checkbox" value="{{$item->id_genero}}">
                          {{$item->nombre}}
                        </label>                          
                      @endforeach 
                      </div>

                    <div class="form-floating col-lg-12">
                      <select name="id_categoria"  class="form-select" id="form-categorias" required>
                        @foreach ($categorias as $item)
                          <option value="{{$item->id_categoria}}">{{$item->nombre}}</option>
                        @endforeach
                      </select> 
                      <label for="floatingSelectGrid">Categoría</label>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-12">
                <div class="row p-3">
                    <h3 class="col-12">Visto el</h3>
                    <hr/>
                    <div class="col-12 d-flex mb-3">
                        <input type="date" id="datePicker" name="fecha_visto" value="<?php echo date('Y-m-d'); ?>"  required>
                    </div>

                    <div class="form-floating col-lg-8 col-sm-12 mb-3">
                        <input type="text" name="visto_en" value="{{ old('visto_en')}}"  class="form-control" id="floatingInput" maxlength="100" required>
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
                        <input TYPE="NUMBER" name='estrellas' MIN="0" MAX="10" STEP="1" VALUE="5" SIZE="4" required>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-12 text-center">
            <button class="btn btn-danger" type="reset">Cancelar</button>
            <button class="btn btn-dark" type="submit">Guardar</button>
        </div>

    </form>
</section>

@endsection
