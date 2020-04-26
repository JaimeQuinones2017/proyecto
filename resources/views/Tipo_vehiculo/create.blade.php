@extends ('layouts.layout')
@section ('contenido')
 <div class="row">
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <h3>Nuevo Tipo de vehiculo</h3>
 @if (count($errors)>0)
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{$error}}</li>
 @endforeach
 </ul>
 </div>
 @endif
 {!!Form::open(array('url'=>'tipo_vehiculo','method'=>'POST','autocomplete'=>'off'))!!}
 {{Form::token()}}
 <div class="form-group">
 <label for="Role">Tipo de Vehiculo</label>
 
                            <select name="nombre"  id="nombre" class="form-control">
                                <option value="" disable selected>Seleccione El Nombre Del tipo Vehiculo:</option>
                                
                                <option value="Motocicleta">Moto</option>
                                <option value="Automovil">Carro</option>
                            
                            </select>
                        </div>
                        <div class="form-group">
 <label for="descripcion">Descripcion</label>
 <input type="text" name="descripcion" class="form-control" placeholder=" nombre del vehiculo">
 </div>

 <div class="form-group">
 <button class="btn btn-primary" type="submit">Guardar</button>
 <button class="btn btn-danger" type="reset">Cancelar</button>
 </div>
 {!!Form::close()!!}
 </div>
 </div>
@endsection