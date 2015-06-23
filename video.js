$(document).ready();

var urlweb='http://localhost/VideoClub/';
function ventana(argument) {
	if(argument)
		$('#log').fadeIn(500);
	else {
		$('#log').fadeOut(500);
		$('#error_login').slideUp(500);
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
function showRoom(){
	$.ajax({
		type:"POST",
		url:urlweb+"/inc/mostrar.php",
		data:{action:"showroom"},
		success:function(data){
			$("#tabla").html(data);
		}
	});
}