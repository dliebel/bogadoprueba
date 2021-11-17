@extends('layout.app')

@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Proyectos</h1>
    <p class="mb-4"><a class="btn btn-primary" href="{{ route('project.create') }}">Crear</a></p>
    @include('layout.flash-mess')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">

            <table class="table table-bordered table-responsive-lg">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Introduccion</th>
                    <th>Lugar</th>
                    <th>Costo</th>
                    <th>Actions</th>
                </tr>
        
                @foreach ($data as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->introduction }}</td>
                        <td>{{ $project->location }}</td>
                        <td>{{ $project->cost }}</td>
                        <td>
               
                          
                            <form action="{{ route('project.destroy', $project->id) }}" method="POST">

                                <a class="btn btn-success" href="{{ route('project.edit', $project->id) }}" title="show">
                                    <i class="fas fa-edit   "></i> Editar
                                </a>
                                @csrf
                                @method('DELETE')

                                <button  class="btn btn-danger" type="submit" title="delete" >
                                    <i class="fas fa-trash "></i> Borrar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            {!! $data->links() !!}
        </div>
    </div>
@endsection
