<html lang="es">
    
    <head>
    
    

		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		
		<link rel="icon" type="image/ico" href="../images/logo.jpg" />
		<link rel="alternate" type="application/rss+xml" title="Plantillas 2010" href="index.rss" />
        
        <title>ISSSTE GUANAJUATO- Vigencia</title>
		
		 <!--loading Bootstrap  -->
        <link rel="stylesheet" href="../bootstrap-3.2.0-dist/css/bootstrap.css">
        <link rel="stylesheet" href="../bootstrap-3.2.0-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap-3.2.0-dist/css/bootstrap-theme.min.css">
        <script src="../bootstrap-3.2.0-dist/js/jquery.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.js"> </script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"> </script>
		
        <link rel="stylesheet" href="../css/format.css">
        <link rel="stylesheet" href="../css/contenedores.css">
	
	<link rel="stylesheet" href="../JTree/jaofiletree.css">
	<script type="text/javascript" src="../JTree/jquery-1.8.3.js"></script>
	<script type="text/javascript" src="../JTree/jaofiletree.js"></script>
	<script type="text/javascript">
            jQuery.noConflict();
            jQuery(document).ready(function($) {
                $('#jao').jaofiletree({ 
                    script  : '../JTree/connectors/jaoconnector.php',
                    onclick : function(elem,type,file){}
                });
                $('#jao').bind('afteropen',function(){jQuery('#debugcontent').prepend('A folder has been opened<br/>');});
                $('#jao').bind('afterclose',function(){jQuery('#debugcontent').prepend('A folder has been closed<br/>');});
            });
	</script>
        <link href='http://fonts.googleapis.com/css?family=Archivo+Black' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Archivo+Narrow' rel='stylesheet' type='text/css'>
  </head>

	<body>
	<?php
         include('../headerVigencia.php');
      ?>
	  <div class="container-fluid">
        <div class="col-md-2"></div>
        <div id="contentLeft">
	  
	        <div id="text">        
            <div class="item-page">
     <h2>Archivos Vigencia</h2>
   <hr>
    <div id="jao"></div> 
 
 
 
 </div>

 </div>
 </div>
 <div class="col-md-3">


 </div>
</div>





 <?php
 include('../footerVigencia.php');

 ?>
</body>
</html>