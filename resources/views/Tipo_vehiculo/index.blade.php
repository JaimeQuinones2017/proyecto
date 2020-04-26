@extends ('layouts.layout')
@section ('contenido')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Listado de Tipo de Vehiculos<a href="tipo_vehiculo/create">
            <button class="btn btn-success">Nuevo</button></a></h3>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <th>Id</th>
                        <th>nombre</th>
                        <th>descripcion</th> 
                        <th>Opciones</th>
                    </thead>
                    @foreach ($tipo_vehiculo as $tipo_vehiculo)
                        <tr>
                           <td>{{ $tipo_vehiculo->id}}</td>
                            <td>{{ $tipo_vehiculo->nombre}}</td>
                            <td>{{ $tipo_vehiculo->descripcion}}</td>
                            <td>
                                <a href="{{URL::action('Tipo_vehiculoController@edit',$tipo_vehiculo->id)}}">
                                <button class="btn btn-info">Editar</button></a>
                                <a href="" data-target="#modal-delete-{{$tipo_vehiculo->id}}" data-toggle="modal">
                                <button class="btn btn-danger">Eliminar</button></a>
                            </td>
                        </tr>
                        @include('tipo_vehiculo.modal')
                        @endforeach
                </table>
            </div>
        </div>
@endsection