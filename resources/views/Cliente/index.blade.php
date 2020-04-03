@extends ('layouts.layout')
@section ('contenido')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Cliente <a href="cliente/create">
        <button class="btn btn-success">Nuevo</button></a></h3>
        @include('Cliente.search')
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <th>Id</th>
                        <th>nombre</th>
                        <th>apellido</th>
                        <th>cedula</th>
                        <th>correo</th>
                        <th>Opciones</th>
                    </thead>
                    @foreach ($clientes as $cli)
                        <tr>
                            <td>{{ $cli->id}}</td>
                            <td>{{ $cli->nombre}}</td>
                            <td>{{ $cli->apellido}}</td>
                            <td>{{ $cli->cedula}}</td>
                            <td>{{ $cli->correo}}</td>
                            <td>
                                <a href="{{URL::action('ClienteController@edit',$cli->id)}}">
                                <button class="btn btn-info">Editar</button></a>
                                <a href="" data-target="#modal-delete-{{$cli->id}}" data-toggle="modal">
                                <button class="btn btn-danger">Eliminar</button></a>
                            </td>
                        </tr>
                        @include('Cliente.modal')
                        @endforeach
                </table>
                {{$clientes->render()}}
            </div>
        </div>
@endsection
