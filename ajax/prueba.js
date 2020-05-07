$(document).ready(function(){
	console.log("Hola desde la prueba");

	var usuario = {"nombre":"Uriel",
			"apellido":"Cajiga"};

	//console.log(usuario);


	console.log("Este es el POST");
	$.ajax({
		type:"POST",
		url:"servidor.php",
		data:usuario,
		success:function(r){
			var us = JSON.parse(r);
			console.log(us);
		}
	});


});

/*
$.ajax({
	type:"POST",
	url:"servidor.php",
	data:{usuario},
	success:function(r){
		console.log(r);
	}
});
*/