@extends ('layouts.layout')
@section ('contenido')
 <div class="row">
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <h3>Editar Vehiculo</h3>
 @if (count($errors)>0)
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{$error}}</li>
 @endforeach
 </ul>
 </div>
 @endif
 {{Form::open(array('action'=>array('Tipo_vehiculoController@update', $tipo_vehiculo->id),'method'=>'patch'))}}
 


 <div class="form-group">
 <label for="descripcion">Nombre</label>
 <input type="text" name="nombre" id="nombre" class="form-control" value="{{$tipo_vehiculo->nombre}}">

 <div class="form-group">
 <label for="descripcion">Descripcion</label>
 <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{$tipo_vehiculo->descripcion}}">
 </div>

 <div class="form-group">
 <button class="btn btn-primary" type="submit">Actualizar</button>
 <button class="btn btn-danger" type="reset">Cancelar</button>
 </div>
 {!!Form::close()!!}
 </div>
 </div>
@endsection