@extends('layout.master')
    @section('content')
        <body style="background-color:#6c757d">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="https://e00-expansion.uecdn.es/assets/multimedia/imagenes/2016/02/03/14544932514907.jpg" class="d-block w-100" style="background: #868E96" alt="..." width="400" height="600">
                        <div class="carousel-caption d-none d-md-block"> 
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="https://cdne.diariocorreo.pe/redactor/uploads/2017/05/26/a3.jpg" class="d-block w-100" style="background: #868E96" alt="..." width="400" height="600">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="https://revistadiners.com.co/wp-content/uploads/2016/11/libreriamazon_800x669.jpg" class="d-block w-100" style="background: #868E96" alt="..." width="400" height="600">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                </div>
                
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div> 
        </body> 
    @stop
    