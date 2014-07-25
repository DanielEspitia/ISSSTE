<!DOCTYPE html>
<html lang="en">
    
    <head>
    <link href="images/logo.jpg" type="image/x-icon" rel="shortcut icon" />
<link rel="alternate" type="application/rss+xml" title="Plantillas 2010" href="index.rss" />


        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        
        <title>ISSSTE GUANAJUATO</title>
        
        <!--loading Bootstrap  -->
        <link rel="stylesheet" href="bootstrap-3.2.0-dist/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap-3.2.0-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap-3.2.0-dist/css/bootstrap-theme.min.css">
        <script src="bootstrap-3.2.0-dist/js/jquery.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.js"> </script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"> </script>

        
    
    </head>

    <body>

     <?php
         include('header1.php');
       
        ?>
        <!-- Carrusel-->
        <div class="container-fluid">
        <div class="row"> <!--Renglon con carrusel-->
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <div id="MiCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#MiCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#MiCarousel" data-slide-to="1" class=""></li>
        <li data-target="#MiCarousel" data-slide-to="2" class=""></li>
      </ol>
            <div class="carousel-inner">
                <div class="active item"><img  src="imagenes/carousel/prevenissste.jpg" alt="banner1" />
             <div class="carousel-caption">
                <h3> </h3>
                <p>En PREVENISSSTE te decimos como cuidar tu salud</p>
             </div></div>
            <div class="item"><img  src="imagenes/carousel/taller.jpg" alt="banner2" />
            <div class="carousel-caption">
                <h3>Taller de Verano 2014</h3>
                <p>Explora, inventa, crea y juega</p>
             </div></div>
                <div class="item"><img  src="imagenes/carousel/bicentenario.jpg" alt="banner3" />
            <div class="carousel-caption">
                <h3></h3>
                <p>descripcion de la noticia </p>
             </div></div>
        </div>
      
      
    <a class="left carousel-control" href="##MiCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#MiCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
        
 </div>
        
        <div class="col-md-3"></div>
		</div>
		</div>
		<br>
		
		<div class="row"> 
        <div class="col-md-8"></div>
		<div class="col-md-4">
        <a href="http://www.fovissste.gob.mx/" target="_blank"><img src="imagenes/Imagen_pagina_web/i_fovissste.jpg" alt="fovissste" width="300" height="170" class="img-thumbnail" ></a>
        <a href="http://www.pensionissste.gob.mx/" target="_blank"><img src="imagenes/Imagen_pagina_web/i_pensionissste.jpg" alt="pensionissste" width="300" height="170" class="img-thumbnail" ></a>
        <a href="http://www2.issste.gob.mx:8080/index.php/turissste" target="_blank"><img src="imagenes/Imagen_pagina_web/i_turissste.jpg" alt="turissste" width="300" height="170" class="img-thumbnail"></a>
        </div>
		</div>
       
    <!-- Cierre Contenedor carrusel-->


        
      <?php
         include('footer1.php');
       
        ?>
   
    </body>
</html>
