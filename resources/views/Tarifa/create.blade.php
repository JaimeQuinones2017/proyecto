@extends ('layouts.layout')
@section ('contenido')
 <div class="row">
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <h3>Nuevo Tarifa</h3>
 @if (count($errors)>0)
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{$error}}</li>
 @endforeach
 </ul>
 </div>
 @endif
 {!!Form::open(array('url'=>'tarifa','method'=>'POST','autocomplete'=>'off'))!!}
 {{Form::token()}}
 <div class="form-group">
 <label for="Role">Tipo de Vehiculo</label>
 
                            <select name="tipo_vehiculo_id"  id="tipo_vehiculo_id" class="form-control">
                                <option value="" disable selected>Seleccione El Tipo De Vehiculo:</option>
                                @foreach($tipo_vehiculo as $tipov)
                                <option value="{{$tipov->id}}">ID: {{$tipov->id}} Nombre: {{$tipov->nombre}}</option>
                             
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
 <label for="valor">Valor</label>
 <input type="text" name="valor" class="form-control" placeholder="Valor hora..">
 </div>
 <div class="form-group">
 <label for="estado">Estado</label>
 <input type="text" name="estado" class="form-control" placeholder="Estado. 1 Activo 0. Inactivo">
 </div>
 <div class="form-group">
 <button class="btn btn-primary" type="submit">Guardar</button>
 <button class="btn btn-danger" type="reset">Cancelar</button>
 </div>
 {!!Form::close()!!}
 </div>
 </div>
@endsection