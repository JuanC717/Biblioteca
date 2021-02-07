@extends('layout.master')
    @section('content')
    
    <br>
    <div  align="center">
        <font size=4 face="Comic Sans MS,arial,verdana"><h2>Actualización de Editorial</h2></font>
    </div>
    <br>
    <form action="{{route('actualizar_edi', $editorial->id)}}" method="POST">
    @csrf

        <label for="nombre">Nombre </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id='nombre' name='nombre' placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1" value="{{$editorial->nombre}}" required>
            </div>

        <label for="nombre">Dirección </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id='direccion' name='direccion' placeholder="Direccion" aria-label="Username" aria-describedby="basic-addon1" value="{{$editorial->direccion}}" required>
            </div>

        <label for="nombre">Ciudad </label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id='ciudad' name='ciudad' placeholder="Ciudad" aria-label="Username" aria-describedby="basic-addon1" value="{{$editorial->ciudad}}" required>
            </div>

        <label for="nombre">Telefono </label>
            <div class="input-group mb-3">
                <input type="number" class="form-control" id='telefono' name='telefono' placeholder="telefono" aria-label="Username" aria-describedby="basic-addon1" value="{{$editorial->telefono}}" required>
            </div>

        <br>

        <button style="color:#000000; background-color:#b5b5b5; border-color:#000000;" type="submit" class="btn btn-success">Actualizar</button>

        
            <a style="color:#000000; background-color:#b5b5b5; border-color:#000000;" href="{{route('listaEditorial')}}" class="btn btn-success" >Cancelar</a>
        
    </form>
    <br><br>
 @stop