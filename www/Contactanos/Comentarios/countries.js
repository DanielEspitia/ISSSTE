/*
	*	Original script by: Shafiul Azam
	*	ishafiul@gmail.com
	*	Version 3.0
	*	Modified by: Luigi Balzano

	*	Description:
	*	Inserts Countries and/or States as Dropdown List
	*	How to Use:

		In Head section:
		<script type= "text/javascript" src = "countries.js"></script>
		In Body Section:
		Select Country:   <select onchange="print_state('state',this.selectedIndex);" id="country" name ="country"></select>
		<br />
		City/District/State: <select name ="state" id ="state"></select>
		<script language="javascript">print_country("country");</script>	

	*
	*	License: OpenSource, Permission for modificatin Granted, KEEP AUTHOR INFORMATION INTACT
	*	Aurthor's Website: http://shafiul.progmaatic.com
	*
*/

var country_arr = new Array("Guanajuato");
var s_a = new Array();
s_a[0]="";
s_a[1]="Abasolo|Acámbaro|Apaseo el Alto|Apaseo el Grande|Atarjea|Celaya|Comonfort|Coroneo|Cortazar|Cuerámaro|Doctor Mora|Dolores Hidalgo|Guanajuato|Huanímaro|Irapuato|Jaral del Progreso|Jerécuaro|León|Manuel Doblado|Moroleón|Ocampo|Pénjamo|Pueblo Nuevo|Purísima del Rincón|Romita|Salamanca|Salvatierra|San Diego de la Unión|San Felipe|San Francisco del Rincón|San José Iturbide|San Luis de la Paz|San Miguel de Allende|Santa Catarina|Santa Cruz de Juventino|Santiago Maravatío|Silao|Tarandacuao|Tarimoro|Tierra Blanca|Uruangato|Valle de Santiago|Victoria|Villagrán|Xichú|Yuriria";


function print_country(country_id){
	// given the id of the <select> tag as function argument, it inserts <option> tags
	var option_str = document.getElementById(country_id);
	option_str.length=0;
	option_str.options[0] = new Option('Selecciona el Estado');
	option_str.selectedIndex = 0;
	for (var i=0; i<country_arr.length; i++) {
		option_str.options[option_str.length] = new Option(country_arr[i],country_arr[i]);
	}
}

function print_state(state_id, state_index){
	var option_str = document.getElementById(state_id);
	option_str.length=0;	// Fixed by Julian Woods
	option_str.options[0] = new Option('Selecciona Tu Ciudad');
	option_str.selectedIndex = 0;
	var state_arr = s_a[state_index].split("|");
	for (var i=0; i<state_arr.length; i++) {
		option_str.options[option_str.length] = new Option(state_arr[i],state_arr[i]);
	}
}
