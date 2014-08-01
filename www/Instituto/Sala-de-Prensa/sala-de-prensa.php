<html lang="es">
    
    <head>
    
    

		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		
		<link rel="icon" type="image/ico" href="../../images/logo.jpg" />
		<link rel="alternate" type="application/rss+xml" title="Plantillas 2010" href="index.rss" />
        
        <title>ISSSTE GUANAJUATO - Sala de Prensa</title>
		
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
<div class="category-list">

		<h1>
		Sala de Prensa	</h1>
		<h2>
							<span class="subheading-category">Comunicados 2014</span>
			</h2>
	
	
	<div class="cat-items">
		

<form action="sala-de-prensa.php" method="post" name="adminForm" id="adminForm">
		<fieldset class="filters">
		
				<div style="width:150px;">
			<h3>Mostrar #&nbsp;</h3>
 
        <select class="form-control" id="limit" name="limit" size="1" onchange="this.form.submit()">
 <option value="5">5</option>
	<option value="10">10</option>
	<option value="15">15</option>
	<option value="20">20</option>
	<option value="25">25</option>
	<option value="30">30</option>
	<option value="50">50</option>
	<option value="100">100</option>
	<option value="0" selected="selected">Todas</option>
</select>
		</div>
       
        
        
		
	<!-- @TODO add hidden inputs -->
		<input name="filter_order" value="" type="hidden">
		<input name="filter_order_Dir" value="" type="hidden">
		<input name="limitstart" value="" type="hidden">
	</fieldset>
	 <br><br>
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th><a class="tooltip_arriba" href="#" onclick="Joomla.tableOrdering('a.title','asc','');" title="Haga clic para ordenar en esta columna.">Título</a>	</th>
      <th><a class="tooltip_arriba" href="#" onclick="Joomla.tableOrdering('a.created','asc','');" title="Haga clic para ordenar en esta columna.">Fecha de creación</a>		</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th><a class="tooltip_arriba" href="19-07-2014 comsocial.php">
							UN ISSSTE SIN REZAGO EDUCATIVO </a></th>
      <th>21 Julio 2014	</th>
    </tr>
    <tr>
      <th><a class="tooltip_arriba" href="19-07-2014 comsocial.php">
							ANUNCIA DIRECTOR GENERAL DEL ISSSTE DERRAMA ECONÓMICA POR MÁS DE 14 MMDP PARA EDOMEX</a></th>
      <th>19 Julio 2014</th>
    </tr>
    <tr>
      <th><a class="tooltip_arriba" href="17-07-2014 comsocial.php">
							MÁS DE 1773 MDP PARA CRÉDITOS DE VIVIENDA A DERECHOHABIENTES EN VERACRUZ: LERDO DE TEJADA  </a></th>
      <th>17 Julio 2014</th>
    </tr>
    <tr>
      <th><a class="tooltip_arriba" href="16-07-2014 comsocial.php">
							PARA VERACRUZ, EL ISSSTE DESTINA MÁS DE NUEVE MIL 400 MILLONES DE PESOS EN 2014</a></th>
      <th>16 Julio 2014</th>
    </tr>
   
  </tbody>
</table> 


	</form>
	</div>

	</div>

<div><img src="../../images/enconstruccion.png" alt="Página en construcción">
</div>
		</div>

     </div>
	</div>
	 <div class="col-md-3">
         <?php
		 include('menuPrensa.php');
		 ?>
         
         
         </div>
</div>
	  
	  
	  

	   
      <?php
         include('../../footer2.php');
       
        ?>	
</body>
</html>