@extends('layout.app')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Estudiantes</h1>
  
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulario de Creacion </h6>
        </div>
        <div class="card-body">
            @include('layout.validate-mess')


            <form action="{{ route('student.update', $student->id) }}" method="POST">
                @csrf
                @method('PUT')
              
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ $student->name }}" aria-describedby="name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="surname">Apellido</label>
                        <input type="text" name="surname" class="form-control"  value="{{ $student->surname }}" id="surname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">Direccion</label>
                    <input type="text" class="form-control" id="address"  name="address" value="{{ $student->address }}"  placeholder="1234 Main St">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="birth">Nacimiento</label>
                        <input type="date" name="birth" class="form-control" value="{{ $student->birth }}" id="birth">
                    </div>
                 
                </div>


                <div class="form-group">


                    <label for="exampleFormControlSelect1">usuario</label>
                    <select class="form-control" name="user_id" aria-label="Default select example">
                        @foreach ($datoF as $data)
                
                        @if ($data->id == $student->user_id)
                            <option selected value="{{$data->id}}">{{$data->name}}</option>
                        @else
                            <option value="{{$data->id}}">{{$data->name}}     {{$data->id}}</option>
                        @endif


                        
                    @endforeach
                    </select>
                </div>

               
               
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                        <a class="btn btn-secundary" href="{{ route('student.index') }}">Cancelar</a>
        
                    </div>
                  </div>

           
              
            </form>




        </div>
    </div>
@endsection
