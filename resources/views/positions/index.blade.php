@extends('template.plantilla')

@section('content')
<div class="row" id="table-hover-animation">
    <div class="col-12">
        @if (session('notification'))
                        <div class="alert alert-success" role="alert">
                        <span class="alert-icon"><i class="feather icon-thumbs-up mr-1 align-middle"></i></span>
                        {{ session('notification') }}
                        </div>
            @endif
        <div class="card">
            <div class="card-header">
                <a href="{{ route('positions.create') }}" class="btn btn-icon btn-outline-success breadcum-right"><i class="fa fa-plus"></i> Registrar</a>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover-animation mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre del Puesto</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Fecha y Hora de Creación</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($positions as $position)
                                    <tr>
                                        <th scope="row">{{ $position->id }}</th>
                                        <td>{{ $position->nombre }}</td>
                                        <td>{{ $position->descripcion }}</td>
                                        <td>{{ $position->created_at }}</td>
                                        <td>
                                            <form action="{{ url('/positions/'.$position->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ url('/positions/'.$position->id.'/edit') }}" class="btn btn-outline-info btn-m" data-toggle="tooltip" title="Editar"><i class="fa fa-edit text-info"></i></a>
                                                <button class="btn btn-outline-danger btn-m" onclick="return confirm('¿Seguro que desea eliminar el Puesto: {{ $position->nombre }}?');" type="submit" data-toggle="tooltip" title="Eliminar"><i class="fa fa-trash text-danger"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach    
                            </tbody>
                        </table>
                    </div>
                    <div class="pagination pagination-warning justify-content-center mt-0">
                        {{ $positions->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection