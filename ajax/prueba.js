$(document).ready(function(){
	console.log("Hola desde la prueba");

	var usuario = {"nombre":"Uriel",
			"apellido":"Cajiga"}

	//console.log(usuario);
	console.log("Este es el get")
	$.get("https://reqres.in/api/users/2",function(response){
		console.log(response);
	});

	console.log("Este es el POST")
	$.ajax({
		type:"POST",
		url:"servidor.php",
		data:{"nombre":"Uriel",
			"apellido":"Cajiga"},
		success:function(r){
			var us = JSON.parse(r);
			console.log(us);
			us.map(function(num){
				console.log(num);
			});
		}
	});

	$.ajax({
		type:"POST",
		url:"servidor.php",
		data:{"nombre":"Osvaldo",
			"apellido":"Gutierrez"},
		success:function(r){
			var us = JSON.parse(r);
			console.log(us);
			us.map(function(num){
				console.log(num);
			});
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