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
 {{Form::open(array('action'=>array('VehiculoController@update', $vehiculo->id),'method'=>'patch'))}}
 <div class="form-group">
    <label for="placa">Placa Del Vehiculo</label>
         <input type="text" name="placa" class="form-control" value="{{$vehiculo->placa}}">{{$vehiculo->placa}}>
    
</div>

                        <div class="form-group">
                            <br>
                            <label for="tipo">Tipo De Vehiculo</label>
                            <select type="text" name="tipo" id="tipo" class="form-control">
                                <option value="{{$vehiculo->tipo}}">{{$vehiculo->tipo}}</option>
                            </select>
                        </div>
 <div class="form-group">
 <label for="descripcion">Modelo</label>
 <input type="text" name="modelo" id="modelo" class="form-control" value="{{$vehiculo->modelo}}">
 </div>
 <div class="form-group">
 <button class="btn btn-primary" type="submit">Actualizar</button>
 <button class="btn btn-danger" type="reset">Cancelar</button>
 </div>
 {!!Form::close()!!}
 </div>
 </div>
@endsection