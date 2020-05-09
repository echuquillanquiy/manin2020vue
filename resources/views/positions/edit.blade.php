@extends('template.plantilla')

@section('content')

<div class="row mt--4">
    <div class="col-md-6 col-12 mt">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Registro de Puestos</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" action="{{ url('positions/'.$position->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="nombre">Nombre del Puesto</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Por ejemplo Mecánico" value="{{ old('nombre', $position->nombre) }}" autofocus>
                                            <div class="form-control-position">
                                                <i class="feather icon-award"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="descripcion">Descripción Corta</label>
                                        <div class="position-relative has-icon-left">
                                        <input type="text" id="descripcion" class="form-control" name="descripcion" placeholder="Por ejemplo Este cargo es para planta" value="{{ old('descripcion', $position->descripcion) }}">
                                            <div class="form-control-position">
                                                <i class="feather icon-clipboard"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mr-1 mb-1">Actualizar</button>
                                    <a href="{{ route('positions.index') }}" class="btn btn-warning mr-1 mb-1">Cancelar</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-12">
        
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-success">Alertas</h4>
            </div>
    
            <div class="card-content">
                <div class="card-body">
                    @if(session('notification'))
                        <div class="col-md-12 col-12 mt--4">
                            <div class="alert alert-success mt-1 alert-validation-msg" role="alert">
                                <i class="feather icon-save mr-1 align-middle"></i>
                                {{ session('notification') }}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-danger">Errores</h4>
            </div>
    
            <div class="card-content">
                <div class="card-body">
                    @if($errors->any()) 
                        <div class="col-md-12 col-12">
                            <ul class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                @foreach($errors->all() as $error)
                                <li style="list-style: none">
                                    <i class="feather icon-alert-triangle mr-1 align-middle"></i>
                                    {{ $error }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection