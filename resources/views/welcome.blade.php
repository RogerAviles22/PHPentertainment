@extends('plantilla')

@section('seccion')
<section class="container-fluid main">
        
        <form class="row justify-content-center align-items-center m-2">
            <div class="col-auto">Filtrar por Año de visualización:</div>
            <div class="col-auto">
                <input TYPE="NUMBER" MIN="1800" MAX="2021" STEP="1" VALUE="2019" SIZE="4">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary"><i class="bi-search"></i></button>
                
            </div>
        </form>

        <div class="row justify-content-center align-items-center my-2 cards">

            <div class="col-lg-3 col-sm-6 p-1">
                <div class="card">
                    <div class="card-header">
                        <div class="title-entertainment d-flex justify-content-center align-items-center">
                            <div >
                                <h4 class="text-wrap">Titulo del Entretenimiento</h4>
                                <p class="fs-6">2016</p>
                            </div>
                            <div class="btn-group-vertical mx-1" role="group">
                                <button type="submit" class="btn btn-outline-info btn-description"><i class="bi-eye"></i></button>
                                <button type="submit" class="btn btn-outline-danger btn-delete"><i class="bi-trash"></i></button>
                            </div>
                        </div>                    
                    </div>
                    <div class="card-body"> 
                        <p class="fst-italic">Puntaje: 9.8</p>     
                        <p class="text-wrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ab, error harum dolor, voluptate quia blanditiis magni delectus ipsum tenetur laudantium, quidem eos omnis reprehenderit recusandae labore quibusdam velit. Eveniet?</p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
@endsection