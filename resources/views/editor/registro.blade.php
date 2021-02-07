@extends('layout.master')
    @section('content')
    <body style="background-color:#6c757d">
        <br>
        <div  align="center">
            <font size=4 face="Comic Sans MS,arial,verdana"><h2>Registro de Editorial</h2></font>
        </div>
        <br>
        <form action="{{route('registro_Editorial')}}" method="POST">
        @csrf

            <label for="nombre">Nombre </label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id='nombre' name='nombre' placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1" required>
                </div>

            <label for="nombre">Dirección </label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id='direccion' name='direccion' placeholder="Direccion" aria-label="Username" aria-describedby="basic-addon1" required>
                </div>

            <label for="nombre">Ciudad </label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id='ciudad' name='ciudad' placeholder="Ciudad" aria-label="Username" aria-describedby="basic-addon1" required>
                </div>

            <label for="nombre">Telefono </label>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" id='telefono' name='telefono' placeholder="telefono" aria-label="Username" aria-describedby="basic-addon1" required>
                </div>

            <br>

            <button style="color:#00a726; border-color:#00a726; background-color:#1d2124" type="submit" class="btn btn-dark">Registrar</button>

            <button style="color:#ff0018; border-color:#ff0018; background-color:#1d2124" type="reset" class="btn btn-dark">Borrar</button>
            
            <a style="color:#f9bb00; border-color:#f9bb00; background-color:#1d2124" href="{{url('/')}}" class="btn btn-success" >Volver</a>
            
        </form>
        <br><br>
    </body>
 @stop