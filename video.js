var datai=0;
var dataf=0;
var urlweb='http://localhost/VideoClub/';

function ventana(argument) {
	if(argument)
		$('#log').fadeIn(500);
	else {
		$('#error_login').slideUp(500);
		$('#log').fadeOut(500);
	}
}
function regis(argument) {
	if(argument)
		$('#reg').fadeIn(500);
	else {
		$('#reg').fadeOut(500);
	}
}
function ajax_login(user,passw) {
	if(user!=''&&passw!=''){
		$.ajax({
			type: 'POST',
			url:urlweb+'/inc/login.php',
			data: 'user='+ user + '&passw='+passw,
			success: function(data) {
				if(data==1){
					location.reload();
				}
				else if(data==0) {
					$('#error_login').slideDown(500);
				}
			}
		});
	}
}
function ajax_register(user,passw,nombre,apellido) {
	if(user!=''&&passw!=''&&nombre!=''&&apellido!=''){
		$.ajax({
			type: 'POST',
			url:urlweb+'/inc/registrar.php',
			data: 'user='+ user + '&passw='+passw+'&nombre='+nombre+'&apellido='+apellido,
			success: function(data) {
				if(data==1){
					$('#success_regis').slideDown(500);
					setTimeout(function(){
						ajax_login(user,passw);
					},1000);
				}
				else if(data==0) {
					$('#error_regis').slideDown(500);
				}}
			});
	}
}
function showRoom(data){
	if(data==0){
		datai=0;
		dataf=7;
	}
	else{
		datai=dataf;
		dataf=datai+4;
	}
	$.ajax({
		type:"POST",
		url:urlweb+"/inc/mostrar.php",
		data:{action:datai,action1:dataf},
		success:function(d){
			$("#tabla").append(d);
		}
	});
}

function reservar(id,user){
	$.ajax({
		type:"POST",
		url:urlweb+"/inc/reservar.php",
		data:'id='+id+'&user='+user,
		success:function(d){
			if(d==1){
				$('#res').fadeIn(500);
				setTimeout(function(){
						$('#res').fadeOut(500);
					},1000);

			}
		}
	});
}function MostrarTabla(){
	$.ajax({
		type:"POST",
		url:urlweb+"/inc/mostrarr.php",
		success:function(d){
			$('#tabla').append(d);
		}
	});
}
function alquilar(id,user){
	$.ajax({
		type:"POST",
		url:urlweb+"/inc/alquilar.php",
		data:'id='+id+'&user='+user,
		success:function(d){
			if(d==1){
				location.reload();
			}
			}
	});
}
function MostrarTablaA(){
	$.ajax({
		type:"POST",
		url:urlweb+"/inc/mostrarA.php",
		success:function(d){
			$('#tabla').append(d);
		}
	});
}
function devuelto(id,user){
	$.ajax({
		type:"POST",
		url:urlweb+"/inc/devuelto.php",
		data:'id='+id+'&user='+user,
		success:function(d){
			if(d==1){
				location.reload();
			}
			}
	});
}
