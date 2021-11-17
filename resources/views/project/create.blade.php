@extends('layout.app')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Proyectos</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulario de Creacion </h6>
        </div>
        <div class="card-body">
            @include('layout.validate-mess')


            <form method="POST" action="{{ route('project.store') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="name">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="surname">Introduccion</label>
                
                        <textarea  name="introduction" class="form-control" id="introduction" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="address">Lugar</label>
                        <input type="text" class="form-control" id="location" name="location" placeholder="1234 Main St">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="cost">Costo</label>
                        <input type="number" name="cost" class="form-control" id="cost">
                    </div>
                </div>

              





                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a class="btn btn-secundary" href="{{ route('project.index') }}">Cancelar</a>

                    </div>
                </div>





            </form>




        </div>
    </div>
@endsection
