<html lang="es">
    
    <head>
    
    

		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		
		<link rel="icon" type="image/ico" href="../../images/logo.jpg" />
		<link rel="alternate" type="application/rss+xml" title="Plantillas 2010" href="index.rss" />
		<script type="text/javascript" src="countries.js"></script>
        
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
            <div id="logoheader"></div>
  <center><h1>Quejas y Denuncias</h1> </center> 

        <br><br>
       
       <h3>Formulario para la Atención de QUEJAS Y DENUNCIAS </h3>
       
       <div style="border-style:dotted; border-color:#F00">
       <h5>Los datos personales por usted proporcionadosserán protegidos en términos de la Ley Federal de Transpariencia y Acceso a la Información Pública Gubernamental y los Lineamientos de Protección de Datos Personales emitidos por el IFAI, y se registrarán en el Sistema Electrónico de Atención Ciudadana cuya finalidad es supervisar, controlar y dar seguimiento a la atención que se brinde a la queja presuntada, lo anterior con fundamento en el articulo 37, fracciones IV y VII del Reglamento Interior de la Secretaría de la Función Pública.  </h5>
<br>
<h6  style="color:#F00">Para enviar su queja desde este formulario es necesario que tenga configurada una aplicación de correo electrónico en su equipo personal, de lo contrario, puede enviarla directamente a la cuenta <b>correo@issste.gob.mx</b></h6>
       </div>
       <br><br><br>
      <center><h3>Datos del servidor público denunciado</h3></center>
     <!-- Formulario 1   -->
	 <form class="form-horizontal" id="servidorPublico" name="servidorPublico">
  <fieldset>
    <div class="form-group">
      <label for="inputApellidoPaterno" class="col-lg-2 control-label">Apellido Paterno : </label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputApellidoPaterno" placeholder="Apellido Paterno">
      </div>
    </div>
	
	<div class="form-group">
		        <label for="inputApellidoMaterno" class="col-lg-2 control-label">Apellido Materno : </label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputApellidoMaterno" placeholder="Apellido Materno">
      </div>
	 </div>
	 
	 	<div class="form-group">
		        <label for="inputNombre" class="col-lg-2 control-label">Nombre (s) : </label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputNombre" placeholder="Nombre (s)">
      </div>
	 </div>
	 
	 
	<div class="form-group">
	        <label for="inputORganismo" class="col-lg-2 control-label">Organismo : </label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputOrganismo" placeholder="Organismo">
      </div>
	 </div>
	 
		<div class="form-group">
	        <label for="inputArea" class="col-lg-2 control-label">Area :</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputArea" placeholder="Area">
      </div>
	 </div>
	 
     		<div class="form-group">
	        <label for="inputCarga" class="col-lg-2 control-label">Cargo que Desempeña :</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputCarga" placeholder="Cargo que Desempeña">
      </div>
	 </div>
     
     <div class="form-group">
	        <label for="inputTelefono" class="col-lg-2 control-label">Teléfono y Extensión :</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputTelefono" placeholder="Teléfono y Extensión">
      </div>
	 </div>

       <br><br><br>
      <center> <h3>Datos generales sobre los hechos</h3> </center>

       <div class="form-group">
	        <label for="inputDia" class="col-lg-2 control-label">Dia de los Hechos :</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputDia" placeholder="Día/Mes/Año">
      </div>
	 </div>
     
          <div class="form-group">
	        <label for="inputHora" class="col-lg-2 control-label">Hora de los Hechos :</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputHora" placeholder="12:00 pm/am">
      </div>
	 </div>
     
          <div class="form-group">
	        <label for="inputLugar" class="col-lg-2 control-label">Lugar de los Hechos :</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputLugar" placeholder="Lugar Específico">
      </div>
	 </div>
  
      <div class="form-group">
                    <label for="descripcion" class="col-lg-2 control-label">Como ocurrieron los hechos (favor de describirlos) :</label>
                        <div class="col-lg-10">
                      <textarea class="form-control" rows="3" id="descripcion" placeholder="Descripción"></textarea>
                        </div>
                  </div>
                  
       <div class="form-group">
      <label class="col-lg-2 control-label">¿ Existen pruebas de los hechos? :</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="pruebas" id="si" value="si" checked="">
            <h5>Sí &nbsp &nbsp &nbsp &nbsp </h5>
          </label>
        </div>
		
        <div class="radio">
          <label>
            <input type="radio" name="pruebas" id="no" value="no">
            <h5>No &nbsp &nbsp &nbsp &nbsp </h5>
          </label>
        </div>
      </div>
    </div>
	            
       <div class="form-group">
      <label class="col-lg-2 control-label">¿ Existen testigos de los hechos? :</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="testigos" id="si" value="si" checked="">
            <h5>Sí &nbsp &nbsp &nbsp &nbsp </h5>
          </label>
        </div>
		
        <div class="radio">
          <label>
            <input type="radio" name="testigos" id="no" value="no">
            <h5>No &nbsp &nbsp &nbsp &nbsp </h5>
          </label>
        </div>
      </div>
    </div>            
                  
   <div class="form-group">
      <label for="textArea" class="col-lg-10 control-label"><h5> En caso afirmativo, favor de indicar sus nombres y forma de localizarlos : </h5></label> <br>
      <div class="col-lg-11">
        <center> <textarea class="form-control" rows="4" id="nombreTestigos"></textarea>
        <br>
        <p>Para dar un adecuado seguimiento a sus quejas o denuncias es necesario que proporcione sus datos personales, mismos que serán manejados en forma <b>estríctamente confidencial.</b> </p>
		</center>
      </div>
    </div>               
                  
                  
    <div class="form-group">
      <label for="inputApellidoPaterno" class="col-lg-2 control-label">Apellido Paterno : </label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputApellidoPaterno" placeholder="Apellido Paterno">
      </div>
    </div>
	
	<div class="form-group">
		        <label for="inputApellidoMaterno" class="col-lg-2 control-label">Apellido Materno : </label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputApellidoMaterno" placeholder="Apellido Materno">
      </div>
	 </div>
	 
	 	<div class="form-group">
		        <label for="inputNombre" class="col-lg-2 control-label">Nombre (s) : </label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputNombre" placeholder="Nombre (s)">
      </div>
	 </div>
	 
	 
	<div class="form-group">
	        <label for="inputDomicilio" class="col-lg-2 control-label">Domicilio : </label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputDomicilio" placeholder="Domicilio">
      </div>
	 </div>
	 
		<div class="form-group">
	        <label for="inputColonia" class="col-lg-2 control-label">Colonia :</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputColonia" placeholder="Colonia">
      </div>
	 </div>
     
     		<div class="form-group">
	        <label for="inputDelegacion" class="col-lg-2 control-label">Delegación/Municipio :</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputDelegacion" placeholder="Delegación/Municipio">
      </div>
	 </div>
	 
     		<div class="form-group">
	        <label for="inputCP" class="col-lg-2 control-label">Código Postal :</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputCP" placeholder="Código Postal">
      </div>
	 </div>
     
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Estado : </label>
      <div class="col-lg-10">

		
		   <select class="form-control" onchange="print_state('ciudad',this.selectedIndex);" id="estado" name="estado">
			

</select>
</div>
</div>

<div class="form-group">
<label for="select" class="col-lg-2 control-label">Ciudad : </label>		
<div class="col-lg-10">	
			<select class="form-control" name="ciudad" id="ciudad"></select>
			 <script language="javascript">print_country("estado");</script>
            <script type="text/javascript">date_populate("date", "month", "year");</script>
     </div>
     
    </div>
	
<div class="form-group">
	        <label for="inputTelefono" class="col-lg-2 control-label">Teléfono y Extensión :</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputTelefono" placeholder="Teléfono y Extensión">
      </div>
	 </div>
	 
	<div class="form-group">
	        <label for="inputEmail" class="col-lg-2 control-label">E-mail (correo electrónico) :</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="E-mail (correo electrónico)">
      </div>
	 </div>
	 
	 
 <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button class="btn btn-default">Cancelar</button>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </div>
    
  </fieldset>
</form>
	 
	 
	 
	 <!-- Fin Formulario 1 -->
	
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