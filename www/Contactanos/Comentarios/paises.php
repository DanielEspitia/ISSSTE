<html>
<head>
<meta charset="utf-8">
<title>Paises</title>
<script type="text/javascript" src="countries.js"></script>
</head>

<body>
        <div align="center">
             Selecciona tu Estado:   <select onchange="print_state('state',this.selectedIndex);" id="country" name="country">
			
	<option value="Aguascalientes">Aguascalientes</option>
	<option value="Baja California">Baja California</option>
	<option value="Baja California Sur">Baja California Sur</option>
	<option value="Campeche">Campeche</option>
	<option value="Chiapas">Chiapas</option>
	<option value="Chihuahua">Chihuahua</option>
	<option value="COA">Coahuila</option>
	<option value="COL">Colima</option>
	<option value="DUR">Durango</option>
	 <option value="DIF">Distrito Federal</option>
	<option value="GTO">Guanajuato</option>
	<option value="GRO">Guerrero</option>
	<option value="HGO">Hidalgo</option>
	<option value="JAL">Jalisco</option>
	<option value="MEX">M&eacute;xico</option>
	<option value="MIC">Michoac&aacute;n</option>
	<option value="MOR">Morelos</option>
	<option value="NAY">Nayarit</option>
	<option value="NLE">Nuevo Le&oacute;n</option>
	<option value="OAX">Oaxaca</option>
	<option value="PUE">Puebla</option>
	<option value="QRO">Quer&eacute;taro</option>
	<option value="ROO">Quintana Roo</option>
	<option value="SLP">San Luis Potos&iacute;</option>
	<option value="SIN">Sinaloa</option>
	<option value="SON">Sonora</option>
	<option value="TAB">Tabasco</option>
	<option value="TAM">Tamaulipas</option>
	<option value="TLX">Tlaxcala</option>
	<option value="VER">Veracruz</option>
	<option value="YUC">Yucat&aacute;n</option>
	<option value="ZAC">Zacatecas</option>
<br>
</select>
			 Ciudad: <select name="state" id="state"></select>
			 <script language="javascript">print_country("country");</script>
            <script type="text/javascript">date_populate("date", "month", "year");</script>
        <br><br>

        </div>
    
</body>
</html>