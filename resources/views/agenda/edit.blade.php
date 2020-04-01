@extends('plantilla.plantilla')

@section('titulo','Editar registro')

@section('contenido')

<div class="container">
  <br>
  @include('agenda.navuser')


<nav aria-label="breadcrumb">
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('agenda.index')}}">Inicio</a></li>
    <li class="breadcrumb-item"><a>Editar registro</a></li>
    <li class="breadcrumb-item" aria-current="page">{{ $Agenda->id}}</li>
</ol>
</nav>
</div>
<form method="POST" action="{{ route ('agenda.update', $Agenda->id) }}">
<div class="container register">
@csrf
@method('PUT')

             <div class="row">
                 <div class="col-md-3 register-left">
                     <img src="http://www.idaipqroo.org.mx/wp-content/uploads/2018/06/proteccion-de-datos-personales-791x1024.png" alt=""/>
                     <h3>Bienvenid@</h3>
                     <p>Por favor llena los datos correctamente en el sistema!</p>
                     
                 </div>
                 <div class="col-md-9 register-right">
              
                     <div class="tab-content" id="myTabContent">
                         <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                             
                             <h3 class="register-heading">Editar Registro</h3>
                                                         
                             <div class="row register-form">

                                 <div class="col-md-6">                                        

                                     <div class="form-group">
                                        <div class="input-group">
                                             <div class="input-group-prepend">
                                                 <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                             </div>
                                         <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" value="{{ $Agenda->nombres }}" required="">
                                         </div>
                                     </div>

                                     <div class="form-group">
                                        <div class="input-group">
                                             <div class="input-group-prepend">
                                                 <div class="input-group-text"><i class="fa fa-user-edit text-info"></i></div>
                                             </div>
                                         <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" value="{{ $Agenda->apellidos }}" required="">
                                         </div>
                                     </div>

                                     <div class="form-group">
                                        <div class="input-group">
                                             <div class="input-group-prepend">
                                                 <div class="input-group-text"><i class="fa fa-phone text-info"></i></div>
                                             </div>
                                         <input class="form-control" type="number" name="telefono" placeholder="Telefono: 18491115555" value="{{ $Agenda->telefono }}" id="telefono">
                                         </div>
                                     </div>

                                     <div class="form-group">
                                        <div class="input-group">
                                             <div class="input-group-prepend">
                                                 <div class="input-group-text"><i class="fa fa-mobile-alt text-info"></i></div>
                                             </div>
                                         <input class="form-control" type="number" name="celular" placeholder="Celular: 18491115555" value="{{ $Agenda->celular }}" id="Celular">
                                         </div>
                                     </div>
                                    @if ($Agenda->sexo == 'masculino')
                                        
                                    @endif
                                  
                                     <div class="form-group">
                                         <div class="maxl">
                                             <label class="radio inline"> 
                                             <input type="radio" name="sexo" value="Masculino" {{ $Agenda->sexo == 'Masculino'?"checked":""}}>
                                                 <span> Masculino </span> 
                                             </label>
                                             <label class="radio inline"> 
                                                 <input type="radio" name="sexo" value="Femenino" {{ $Agenda->sexo == 'Femenino'?"checked":""}}>
                                                 <span>Femenino </span> 
                                             </label>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     

                                      <div class="form-group">
                                        <div class="input-group">
                                             <div class="input-group-prepend">
                                                 <div class="input-group-text"><i class="fa  fa-at text-info"></i></div>
                                             </div>
                                          <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $Agenda->email }}" value="" />
                                         </div>
                                     </div>

                                     <div class="form-group">
                                        <div class="input-group">
                                             <div class="input-group-prepend">
                                                 <div class="input-group-text"><i class="fa fa-address-card text-info"></i></div>
                                             </div>
                                          <input type="text" name="posicion" value="{{ $Agenda->posicion }}" class="form-control" placeholder="Posición" value="" />
                                         </div>
                                     </div>


                                     <div class="form-group">
                                        <div class="input-group">
                                             <div class="input-group-prepend">
                                                 <div class="input-group-text"><i class="fa fa-map-marker-alt text-info"></i></div>
                                             </div>
                                          <select name = "departamento" class="form-control">
                                             <option class="hidden" selected disabled>Departamento</option>
                                             <option {{ $Agenda->departamento == 'Gerencia de TI'?"selected":""}}>Gerencia de TI</option>
                                             <option {{ $Agenda->departamento == 'Auditoria TI'?"selected":""}}>Auditoria TI</option>
                                             <option {{ $Agenda->departamento == 'Contabilidad'?"selected":""}}>Contabilidad</option>
                                         </select>
                                         </div>
                                     </div>


                                     <div class="form-group">
                                        <div class="input-group">
                                             <div class="input-group-prepend">
                                                 <div class="input-group-text"><i class="fa  fa-dollar-sign text-info"></i></div>
                                             </div>
                                           <input type="number" class="form-control" name="salario" value="{{ $Agenda->salario }}" placeholder="salario *" />
                                         </div>
                                     </div>
                                     
                                     <div class="form-group">
                                         <label >Fecha de nacimiento</label>
                                        <div class="input-group">
                                             <div class="input-group-prepend">                                                    
                                                 <div class="input-group-text"><i class="fa fa-calendar-alt text-info"></i></div>
                                             </div>
                                             
                                             <input type="date" name="fechadenacimiento" value="{{ $Agenda->fechadenacimiento }}" id="fechadenacimiento" min="1000-01-01"
                                               max="3000-12-31" class="form-control">                                                   
                                         </div>
                                     </div>

                                 
                                 

                                 <button type="submit" class="redondo btn btn-info"><i class="fas fa-save"></i> Guardar</button>
                                 <a href="{{ route('cancelar')}}" class="redondo btn btn-danger"><i class="fas fa-ban"></i> Cancelar</a>
                                 </div>
                             </div>
                         </div>
                    
                     </div>
                 </div>
             </div>

         </div>

         </form>

<br>



@include('plantilla.footer',['container'=>'container'])
@endsection

