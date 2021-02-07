@extends('layout.master')
    @section('content')
 <body style="background-color:#6c757d"> 
        <br>
        <h2><font color="black"><center>Listado de Editorial </center></font></h2>

        <br>
        <table class="table" border=4 style="border-color:#000000;">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Telefono</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($editorial as $e )
                    <tr>
                        <td>{{$e->id}}</td>
                        <td>{{$e->nombre}}</td>
                        <td>{{$e->direccion}}</td>
                        <td>{{$e->ciudad}}</td>
                        <td>{{$e->telefono}}</td>
                        
                        <td><a style="color:#000000; background-color:#5592d4; border-color:#000000;" href="{{route('formulario_edi', $e->id)}}" class="btn btn-success"> Editar </a></td>
                    </tr>
                @endforeach 
            </tbody>
        </table> 
  </body>
@stop