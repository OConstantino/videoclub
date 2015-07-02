function showRoomG(data){
	$.ajax({
		type:"POST",
		url:urlweb+"/inc/mostrar.php",
		data:"genero="+data,
		success:function(d){
			$("#tbody").html("");
			$("#tbody").append(d);
		}
	});
}
function showRoomD(data){
	$.ajax({
		type:"POST",
		url:urlweb+"/inc/mostrar.php",
		data:"director="+data,
		success:function(d){
			$("#tbody").html("");
			$("#tbody").append(d);
		}
	});
}
function showRoomA(data){
	$.ajax({
		type:"POST",
		url:urlweb+"/inc/mostrar.php",
		data:"actor="+data,
		success:function(d){
			$("#tbody").html("");
			$("#tbody").append(d);
		}
	});
}
function showRoomT(data){
	$.ajax({
		type:"POST",
		url:urlweb+"/inc/mostrar.php",
		data:"titulo="+data,
		success:function(d){
			$("#tbody").html("");
			$("#tbody").append(d);
		}
	});
}
