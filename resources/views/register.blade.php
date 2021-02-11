@extends('plantilla')
@section('seccion')

<section class="m-3 sm-m-2 main">
    <form class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div class="row p-3 ">
                    <h3 class="col-lg-12">General</h3>
                    <hr/>
                    <div class="form-floating col-lg-8 col-sm-12 mb-3">
                        <input type="text" class="form-control" id="floatingInput" maxlength="100" required>
                        <label for="floatingInput">Nombre del Entretenimiento</label>
                    </div>
                    <div class="form-general col-lg-4 col-sm-12  text-center mb-3">
                        <label for="floatingInput">Año de estreno</label>
                        <input id="floatingInput" TYPE="NUMBER" MIN="1800" MAX="2021" STEP="1" VALUE="2019" SIZE="4"
                            required>
                    </div>
                    <div class="form-floating col-lg-12 ">
                        <textarea class="form-control" id="floatingTextarea2" style="height: 150px" maxlength="300" required></textarea>
                        <label for="floatingTextarea2">Descripción</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="row p-3">
                    <h3 class="col-12">Tipo</h3>
                    <hr />  
                    <div class="list-group col-lg-6 mb-lg-3 ">
                        <label class="list-group-item">
                          <input class="form-check-input me-1" type="checkbox" value="1">
                          Comedia
                        </label>
                        <label class="list-group-item">
                          <input class="form-check-input me-1" type="checkbox" value="2">
                          Romance
                        </label>
                        <label class="list-group-item">
                          <input class="form-check-input me-1" type="checkbox" value="3">
                          Suspenso
                        </label>
                        <label class="list-group-item">
                          <input class="form-check-input me-1" type="checkbox" value="4">
                          Acción
                        </label>
                        <label class="list-group-item">
                          <input class="form-check-input me-1" type="checkbox" value="5">
                          Bélico
                        </label>
                      </div>
                      <div class="list-group col-lg-6 mb-3">
                        <label class="list-group-item">
                          <input class="form-check-input me-1" type="checkbox" value="6">
                          Terror
                        </label>
                        <label class="list-group-item">
                          <input class="form-check-input me-1" type="checkbox" value="7">
                          Animación
                        </label>
                        <label class="list-group-item">
                          <input class="form-check-input me-1" type="checkbox" value="8">
                          Ciencia Ficción
                        </label>
                        <label class="list-group-item">
                          <input class="form-check-input me-1" type="checkbox" value="9">
                          Crimen
                        </label>
                        <label class="list-group-item">
                          <input class="form-check-input me-1" type="checkbox" value="10">
                          Drama
                        </label>
                      </div>

                    <div class="form-floating col-lg-12">
                        <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select category" required>
                            <option value="1">Película</option>
                            <option value="2">Serie</option>
                            <option value="3">Novela</option>
                            <option value="4">Anime</option>
                        </select>
                        <label for="floatingSelectGrid">Categoría</label>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-12">
                <div class="row p-3">
                    <h3 class="col-12">Visto el</h3>
                    <hr />
                    <div class="col-12 d-flex mb-3">
                        <input type="date" required>
                    </div>

                    <div class="form-floating col-lg-8 col-sm-12 mb-3">
                        <input type="text" class="form-control" id="floatingInput" maxlength="100" required>
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
                        <input TYPE="NUMBER" MIN="0" MAX="10" STEP="1" VALUE="5" SIZE="4" required>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-12 text-center">
            <button class="btn btn-danger" type="submit">Cancelar</button>
            <button class="btn btn-primary" type="submit">Guardar</button>
        </div>

    </form>
</section>

@endsection