<html>
<head>
<meta charset="utf-8">
<title>Paises</title>
<script type="text/javascript" src="countries.js"></script>
</head>

<body>
        <div align="center">
             Selecciona tu Estado:   <select onchange="print_state('state',this.selectedIndex);" id="country" name="country">

	<option value="GTO">Guanajuato</option>

<br>
</select>
			 Ciudad: <select name="state" id="state"></select>
			 <script language="javascript">print_country("country");</script>
            <script type="text/javascript">date_populate("date", "month", "year");</script>
        <br><br>

        </div>
    
</body>
</html>