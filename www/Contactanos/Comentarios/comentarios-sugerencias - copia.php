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
        <link rel="stylesheet" href="../../menu/styles.css">
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
	 <form class="form-horizontal" method="post" action="sendEmail.php" name="comentarios-sugerencias" id="comentarios-sugerencias" onSubmit="return">
  <fieldset>
   <center> <h1>Datos del Derechohabiente</h1> </center>
    <div class="form-group">
      <label for="inputApellidoPaterno" class="col-lg-2 control-label">Apellido Paterno : </label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="inputApellidoPaterno" id="inputApellidoPaterno" placeholder="Apellido Paterno">
      </div>
    </div>
	
	<div class="form-group">
		        <label for="inputApellidoMaterno" class="col-lg-2 control-label">Apellido Materno : </label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="inputApellidoMaterno" id="inputApellidoMaterno" placeholder="Apellido Materno">
      </div>
	 </div>
	 
	 	<div class="form-group">
		        <label for="inputNombre" class="col-lg-2 control-label">Nombre (s) : </label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="inputNombre" id="inputNombre" placeholder="Nombre (s)">
      </div>
	 </div>
	 
	 
	<div class="form-group">
	        <label for="inputDomicilio" class="col-lg-2 control-label">Domicilio : </label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="inputDomicilio" id="inputDomicilio" placeholder="Domicilio">
      </div>
	 </div>
	 
		<div class="form-group">
	        <label for="inputColonia" class="col-lg-2 control-label">Colonia :</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="inputColonia" id="inputColonia" placeholder="Colonia">
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
        <input type="text" class="form-control" name="inputTelefono" id="inputTelefono" placeholder="Teléfono y Extensión">
      </div>
	 </div>
	 
	<div class="form-group">
	        <label for="inputEmail" class="col-lg-2 control-label">E-mail (correo electrónico) :</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="inputEmail" id="inputEmail" placeholder="E-mail (correo electrónico)">
      </div>
	 </div>
	 
	 
	<div class="form-group">
      <label class="col-lg-2 control-label">Tipo de Derechohabiente</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="opciones" id="trabajador" value="trabajador" checked="">
            <h5>Trabajador &nbsp &nbsp &nbsp &nbsp</h5>
          </label>
        </div>
		
        <div class="radio">
          <label>
            <input type="radio" name="opciones" id="pensionado" value="pensionado">
            <h5>Pensionado &nbsp &nbsp &nbsp &nbsp </h5>
          </label>
        </div>
		<div class="radio">
          <label>
            <input type="radio" name="opciones" id="jubilado" value="jubilado">
           <h5> Jubilado &nbsp &nbsp &nbsp &nbsp </h5>
          </label>
        </div>
		<div class="radio">
          <label>
            <input type="radio" name="opciones" id="beneficiario" value="beneficiario">
          <h5>  Beneficiario </h5>
          </label>
        </div>
		
      </div>
    </div>
	
	<div class="form-group">
      <label class="col-lg-2 control-label">Tipo de Opinión</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="opinion" id="felicitacion" value="felicitacion" checked="">
            <h5>Felicitación &nbsp &nbsp &nbsp &nbsp</h5>
          </label>
        </div>
		
        <div class="radio">
          <label>
            <input type="radio" name="opinion" id="sugerencia" value="sugerencia">
            <h5>Sugerencia &nbsp &nbsp &nbsp &nbsp </h5>
          </label>
        </div>
		<div class="radio">
          <label>
            <input type="radio" name="opinion" id="inconformidad" value="inconformidad">
           <h5> Inconformidad &nbsp &nbsp &nbsp &nbsp </h5>
          </label>
        </div>
			
      </div>
    </div>
	 
	 <div class="form-group">
      <label for="textArea" class="col-lg-10 control-label"><h5> En el espacio siguiente, usted puede proporcionarnos sus comentarios : </h5></label> <br>
      <div class="col-lg-11">
        <center> <textarea class="form-control" rows="4" id="textArea"></textarea>
        <span style="text-align:justify" class="help-block">La Subdirección de Atención al Derechohabiente le informa que los datos personales proporcionados por Usted están protegidos y serán incorporados y tratados en el sistema de datos personales denominado "Buzón de Comentarios y Sugerencias", con fundamento en los artículos 20 y 21 de la Ley Federal de Transparencia y Acceso a la Información Pública Gubernamental, decimosexto, decimoséptimo, vigésimo séptimo, vigésimo octavo, vigésimo noveno, trigésimo primero, trigésimo segundo y trigésimo tercero de los Lineamientos de Protección de Datos Personales, cuya finalidad es recibir de los derechohabientes del ISSSTE comentarios y sugerencias que ayuden a mejorar los servicios que se propporcionan, mismo que está registrado en el Listado de Sistemas de Datos Personales ante el Instituto Federal de Acceso a la Información Pública (www.ifai.org.mx), y podrán ser transmitidos a instancias correspondientes dentro del Instituto y a las autoridades competentes con la finalidad de coadyuvar al ejercicio de las funciones propias de la Institución, además de otras transmisiones previstas en la Ley. La Subdirección de Atención al Derechohabiente es responsable de la información recibida en el Buzón de Comentarios y Sugerencias, y la dirección donde el interesado podrá ejercer los derechos de acceso y corrección ante la misma es Av. Insurgentes Sur N° 716, Col. Del Valle, Del. Benito Juárez, C.P. 03100, México D.F. Lo anterior se informa en cumplimiento al décimo séptimo de los Lineamientos de Protección de Datos Personales publicados en el Diario Oficial de la Federación el 30 de septiembre de 2005. </span>
		</center>
      </div>
    </div>
	
	
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancelar</button>
        <button type="submit" class="btn btn-primary">Enviar</button>
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