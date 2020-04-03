@extends ('layouts.layout')
@section ('contenido')
 <div class="row">
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <h3>Editar Cliente</h3>
 @if (count($errors)>0)
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{$error}}</li>
 @endforeach
 </ul>
 </div>
 @endif
 {{Form::open(array('action'=>array('ClienteController@update', $clientes->id),'method'=>'patch'))}}
 <div class="form-group">
    <label for="nombre">Nombre del Cliente</label>
         <input type="text" name="nombre" class="form-control" value="{{$clientes->nombre}}">
    
</div>

<div class="form-group">
    <label for="apellido">Apellido del Cliente</label>
         <input type="text" name="apellido" class="form-control" value="{{$clientes->apellido}}">
    
</div>
<div class="form-group">
    <label for="cedula">Cedula del Cliente</label>
         <input type="text" name="cedula" class="form-control" value="{{$clientes->cedula}}">

         <div class="form-group">
    <label for="correo">Correo del Cliente</label>
         <input type="text" name="correo" class="form-control" value="{{$clientes->correo}}">
    
</div>
                        
 
 <div class="form-group">
 <button class="btn btn-primary" type="submit">Actualizar</button>
 <button class="btn btn-danger" type="reset">Cancelar</button>
 </div>
 {!!Form::close()!!}
 </div>
 </div>
@endsection