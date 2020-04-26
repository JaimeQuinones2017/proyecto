@extends ('layouts.layout')
@section ('contenido')
 <div class="row">
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <h3>Editar Tarifa del vehiculo</h3>
 @if (count($errors)>0)
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{$error}}</li>
 @endforeach
 </ul>
 </div>
 @endif
 {{Form::open(array('action'=>array('TarifaController@update', $tarifa->id),'method'=>'patch'))}}
 <div class="form-group">
    <label for="tipo_vehiculo_id">Tipo de Vehiculo</label>
         <input type="text" name="tipo_vehiculo_id" class="form-control" value="{{$tarifa->tipo_vehiculo_id}}">{{$tarifa->tipo_vehiculo_id}}>
    
</div>

                        <div class="form-group">
                        <label for="valor">Valor</label>
         <input type="text" name="valor" class="form-control" value="{{$tarifa->valor}}">{{$tarifa->Valor}}>
       


 <div class="form-group">
 <label for="descripcion">Estado</label>
 <input type="text" name="estado" id="estado" class="form-control" value="{{$tarifa->estado}}">
 </div>
 <div class="form-group">
 <button class="btn btn-primary" type="submit">Actualizar</button>
 <button class="btn btn-danger" type="reset">Cancelar</button>
 </div>
 {!!Form::close()!!}
 </div>
 </div>
@endsection