@extends('plantilla.plantilla')

@section('titulo','Agenda')

@section('contenido')
<div class="container-fluid registerinicio">
  <div class="row">
      <div class="col-md-6 register-left register-left1">
          <img src="http://www.idaipqroo.org.mx/wp-content/uploads/2018/06/proteccion-de-datos-personales-791x1024.png" alt=""/>
      </div>    
      <div class="col-md-6 register-left">
          
          <h3>Bienvenid@</h3>
          <p>Por favor llena los datos correctamente en el sistema!</p>
          
      </div>    
  </div>
</div>




<div class="container-fluid ">

    @if (session('datos'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{ session('datos')}}
<button type="button" class='close' data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>  
</button>
</div>
    @endif
    @if (session('cancelar'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('cancelar')}}
    <button type="button" class='close' data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>  
    </button>
    </div>
        @endif

<br>

@include('agenda.navuser')

<nav aria-label="breadcrumb">
<ol class="breadcrumb">
  <li class="breadcrumb-item active"><a href="{{route('agenda.index')}}">Inicio</a></li>
</ol>
</nav>


<nav class="navbar navbar-light float-right">
  <form class="form-inline">
      <select name='tipo' class="form-control mr-sm-2" id="exampleFormControlSelect2">
        <option>Buscar por tipo</option>
        <option value='nombres'>Nombre</option>
        <option value='apellidos'>Apellido</option>
        <option value='telefono'>Telefono</option>
        <option value='celular'>Celular</option>
        <option value='email'>Email</option>
      </select>
    <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Texto a buscar" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busqueda</button>
  </form>
</nav>

<br>
<h1 class="text-center">Datos personales</h1>

<br>
<div class="row float-right">
<a  href="{{ route('agenda.create')}}"class="btn btn-info btncolorblanco"><i class="fas fa-user-plus"></i> Agregar un nuevo Registro</a>
</div>
<br>
<table class="table-responsive table text-center">
                                  <thead>
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Nombres y apellidos</th>
                                      <th scope="col">Telefono</th>
                                      <th scope="col">Celular</th>
                                      <th scope="col">Sexo</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Posición</th>
                                      <th scope="col">Departamento</th>
                                      <th scope="col">Salario</th>
                                      <th scope="col">Fecha de nacimiento</th>
                                      <th scope="col">Acción</th>
                                  
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($Agenda as $AgendaItem)
                                        
                                   
                                    <tr>
                                      <th scope="row">{{ $AgendaItem->id }}</th>
                                      <td><a href="{{route('agenda.show',$AgendaItem->id)}}">{{$AgendaItem->nombres.' '.$AgendaItem->apellidos}}</a></td>
                                      <td>{{ $AgendaItem->telefono }}</td>
                                      <td>{{ $AgendaItem->celular }}</td>
                                      <td>{{ $AgendaItem->sexo }}</td>
                                      <td>{{ $AgendaItem->email }}</td>
                                      <td>{{ $AgendaItem->posicion }}</td>
                                      <td>{{ $AgendaItem->departamento }}</td>
                                      <td>{{ $AgendaItem->salario }}</td>
                                      <td>{{ $AgendaItem->fechadenacimiento }}</td>
                                      <td><a  href="{{route('agenda.edit',$AgendaItem->id) }}" class="btn btn-success btncolorblanco">
                                            <i class="fa fa-edit"></i> Editar 
                                          </a>

                                          <a href="{{route('agenda.confirm',$AgendaItem->id) }}" class="btn btn-danger btncolorblanco">
                                            <i class="fa fa-trash-alt"></i> Eliminar 
                                          </a>
                                      </td>
                                      
                                    </tr>
                                    @endforeach
                                  </tbody>
                                </table>

                                {{ $Agenda->appends($_GET)->links() }}
</div>

<br>

@include('plantilla.footer',['container'=>'container-fluid'])
@endsection

