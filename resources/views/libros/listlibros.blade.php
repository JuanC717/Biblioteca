@extends('layout.master')
    @section('content')

    <br>
    <h2><font color="black"><center>Listado de Libros </center></font></h2>

    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ISBN</th>
                <th scope="col">Titulo</th>
                <th scope="col">Precio</th>
                <th scope="col">Editorial</th>
                <th scope="col">Descuento</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($libro as $lib )
                <tr>
                    <td>{{$lib->id}}</td>
                    <td>{{$lib->ISBN}}</td>
                    <td>{{$lib->titulo}}</td>
                    <td>{{$lib->precio}}</td>
                    

                    @foreach($editorial as $edi)
                        @if($lib->editorial_fk == $edi->id)
                            <td>{{$edi->nombre}}</td>
                        @endif 
                    @endforeach 
                    <td></td>
                </tr>
            @endforeach 
        </tbody>
    </table> 

@stop