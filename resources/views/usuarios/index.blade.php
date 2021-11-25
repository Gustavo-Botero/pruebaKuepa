@extends('layouts.plantilla')
@section('usuario', 'active')
@section('content')

<div class="col-12">
    <form id="usuario" action="{{route('usuarios.store')}}">
        @csrf
        
        <div class="card-body row">
            <div class="form-group col-6">
                <label for="name">Nombres:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Pepito">
            </div>

            <div class="form-group col-6">
                <label for="lastName">Apellidos:</label>
                <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Perez">
            </div>

            <div class="form-group col-6">
                <label for="email">Correo:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="ejemplo@correo.com">
            </div>

            <div class="form-group col-6">
                <label for="phone">Numero de telefono:</label>
                <input type="number" class="form-control" name="phone" id="phone" placeholder="3185555555">
            </div>

            <div class="form-group col-6">
                <label for="programas">Programas:</label>
                <select class="form-control" name="programas" id="programas">
                    <option value="">--Seleccione--</option>
                    @foreach ($programas as $row)
                        <option value=" {{$row->id}} "> {{$row->name}} </option>
                    @endforeach
                </select>
            </div>
        </div>
    </form>
    <!-- /.card-body -->
    <div class="card-footer row">
        <div class="col-4"></div>
        <div class="col-4">
            <button onclick="guardar('usuario')" class="btn btn-success btn-guardar">Guardar</button>
            <button onclick="limpiarForm('usuario')" class="btn btn-secondary">Limpiar</button>
        </div>
        <div class="col-4"></div>
    </div>  
</div>
@endsection