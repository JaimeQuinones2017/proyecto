@extends ('layouts.layout')
@section ('contenido')
 <div class="row">
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <h3>Nuevo Cliente</h3>
 @if (count($errors)>0)
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{$error}}</li>
 @endforeach
 </ul>
 </div>
 @endif
 {!!Form::open(array('url'=>'cliente','method'=>'POST','autocomplete'=>'off'))!!}
 {{Form::token()}}
 <div class="form-group">
 <label for="nombre">Cedula</label>
 <input type="text" name="cedula" class="form-control" placeholder="Cedula...">
 </div>
 <div class="form-group">
 <label for="descripcion">Nombre</label>
 <input type="text" name="nombre" class="form-control" placeholder="Nombre...">
 </div>
 <div class="form-group">
 <label for="descripcion">Apellido</label>
 <input type="text" name="apellido" class="form-control" placeholder="Apellido...">
 </div>
 <div class="form-group">
 <label for="descripcion">Correo</label>
 <input type="text" name="correo" class="form-control" placeholder="Correo...">
 </div>
 <div class="form-group">
 <button class="btn btn-primary" type="submit">Guardar</button>
 <button class="btn btn-danger" type="reset">Cancelar</button>
 </div>
 {!!Form::close()!!}
 </div>
 </div>
@endsection