<html lang="es">
    
    <head>
    
    

		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		
		<link rel="icon" type="image/ico" href="../../images/logo.jpg" />
		<link rel="alternate" type="application/rss+xml" title="Plantillas 2010" href="index.rss" />
        
        <title>ISSSTE GUANAJUATO- Contáctanos</title>
		
		 <!--loading Bootstrap  -->
        <link rel="stylesheet" href="../../bootstrap-3.2.0-dist/css/bootstrap.css">
        <link rel="stylesheet" href="../../bootstrap-3.2.0-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../bootstrap-3.2.0-dist/css/bootstrap-theme.min.css">
        <script src="../../bootstrap-3.2.0-dist/js/jquery.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.js"> </script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"> </script>
		
        <link rel="stylesheet" href="../../css/format.css">
        <link rel="stylesheet" href="../../css/contenedores.css">
	</head>

	<body>
	<?php
         include('../../header2.php');
      ?>
	  <div class="container-fluid">
        <div class="col-md-2"></div>
        <div id="contentLeft">
	  
	        <div id="text">        
            <div class="item-page">
  <h1>Comentarios y Sugerencias</h1>  

        <br><br>
       
     <!-- Formulario   -->
	 <form class="form-horizontal">
  <fieldset>
   <center> <legend>Datos del Derechohabiente</legend> </center>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Nombre</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Nombre">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        <div class="checkbox">
          <label>
            <input type="checkbox"> Checkbox
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Textarea</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea"></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Radios</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
            Option one is this
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            Option two can be something else
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Selects</label>
      <div class="col-lg-10">
        <select class="form-control" id="select">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
        <br>
        <select multiple="" class="form-control">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
	 
	 
	 
	 <!-- Fin Formulario -->
	
		</div>

     </div>
	</div>
	 <div class="col-md-3">
         <?php
		 include('menuComentarios.php');
		 ?>
         
         
         </div>
</div>
	  
	  
	  

	   
      <?php
         include('../../footer2.php');
       
        ?>	
</body>
</html>