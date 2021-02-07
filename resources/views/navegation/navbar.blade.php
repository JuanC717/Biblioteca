<nav class="navbar navbar-expand-lg navbar-light bg-dark" >


    <div style="background-color:#6c757d" class="container" >
    
        <a class="navbar-brand" href="{{url('/')}}" style="color:#131313"><span style="font-size:15pt">🏠</span><font size=4 face="Comic Sans MS,arial,verdana">Inicio</font></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if( true || Auth::check() )
            <div class="collapse navbar-collapse container" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <body>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="color:#131313" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <font size=4 face="Comic Sans MS,arial,verdana">📚 Libros</font>
                            </a>
                            <div class="dropdown-menu " aria-labelledby="dropdownMenuBoton">
                                <a class="dropdown-item" style="color:#131313" href="{{url('/libros/listlibros')}}"><font size=4 face="Comic Sans MS,arial,verdana">📋 Lista de Libros </font></a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="color:#131313" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <font size=4 face="Comic Sans MS,arial,verdana">🏰 Editorial</font>
                            </a>
                            <div class="dropdown-menu " aria-labelledby="dropdownMenuBoton">
                                
                                <a class="dropdown-item" style="color:#131313" href="{{url('/editor/registro')}}"><font size=4 face="Comic Sans MS,arial,verdana">📝 Registrar Editorial </font></a>
                                <a class="dropdown-item" style="color:#131313" href="{{url('/editor/listar')}}"><font size=4 face="Comic Sans MS,arial,verdana">📄 Listar Editoriales</font></a>
                            </div>
                        </li>

                        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                    </body>
                </ul>
            </div>
        @endif
    </div>
</nav>