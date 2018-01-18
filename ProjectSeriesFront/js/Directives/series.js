function select_eps(){
		var ep = document.getElementById("ddlepisodio");
		$(ep).empty();
	var temporada = document.getElementById("ddlseries").value;
	$.get( "http://localhost/ProjectSeries/episodio/?cod_temporada="+temporada , function( data ) {
	
	var resultado = JSON.parse(data);

	for (var i =  0; i <= resultado.length; i++) {

		$(ep).append("<option value='"+resultado[i].idt_episodio+"'>"+resultado[i].num_episodio+"</option>");
	}
},"Json" );

}