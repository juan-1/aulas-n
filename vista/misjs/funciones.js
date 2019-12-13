////////////////////////////////////AGREGAR USUARIO//////////////////////////////////////////////////////
function NuevoSocio(){
	var datos="action=nuevo";
	$.post("../controlador/controlusuarios.php",datos,function(data){
		$(".container3").html(data);
	
});
}

function valida(){
	        jQuery(document).ready(function(){   
            jQuery("#formulario").validationEngine();
        });
}
////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////VISTA CALENDARIOS////////////////////////////////////////////////////////
function VistaReservasAdmin(){
	var datos="action=ReservasAdmin";
	$.post("../controlador/controlusuarios.php",datos,function(data){
		$(".container3").html(data);
	
});
}

function VistaReservasAdmin2(){
	var datos="action=ReservasAdmin2";
	$.post("../controlador/controlusuarios.php",datos,function(data){
		$(".container3").html(data);
	
});
}

function VistaReservasObs(){
	var datos="action=calendarioObs";
	$.post("../controlador/controlusuarios.php",datos,function(data){
		$(".container3").html(data);
	
});
}

function VistaReservasUsuario(){
	var datos="action=calendarioUsua";
	$.post("../controlador/controlusuarios.php",datos,function(data){
		$(".container3").html(data);
	
});
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////----CONTRASEÑAS-----------------------///////////////////////////////////77
function cambiarpwd(){
	var datos="action=cambiarpwd";
	$.post("../controlador/controlusuarios.php",datos,function(data){
		$(".container3").html(data);
	
});
}

function cambiarpwd2(){
	var datos="action=cambiarpwd2";
	$.post("../controlador/controlusuarios.php",datos,function(data){
		$(".container3").html(data);
	
});
}

function cambiarpwd3(){
	var datos="action=cambiarpwd3";
	$.post("../controlador/controlusuarios.php",datos,function(data){
		$(".container3").html(data);
	
});
}

function cambiarpwd4(){
	var datos="action=cambiarpwd4";
	$.post("../controlador/controlusuarios.php",datos,function(data){
		$(".container3").html(data);
	
});
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////VISTAS PERFIL DE USUARIO///////////////////////////////////////////

function perfiladmin(){
	var datos="action=administrador1";
	$.post("../controlador/controlusuarios.php",datos,function(data){
		$(".container3").html(data);
	
});
}

function perfiladmin2(){
	var datos="action=administrador2";
	$.post("../controlador/controlusuarios.php",datos,function(data){
		$(".container3").html(data);
	
});
}

function perfilobs(){
	var datos="action=observador";
	$.post("../controlador/controlusuarios.php",datos,function(data){
		$(".container3").html(data);
	
});
}

function perfilusua(){
	var datos="action=usuario";
	$.post("../controlador/controlusuarios.php",datos,function(data){
		$(".container3").html(data);
	
});
}

///////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////VISTAS FORMULARIO RESERVAS///////////////////////////////////////
function Reservar(){
	var datos="action=reservarAulas";
	$.post("../controlador/controlusuarios.php",datos,function(data){
		$(".container3").html(data);
	
});
}

function Reservar2(){
	var datos="action=reservarAulas2";
	$.post("../controlador/controlusuarios.php",datos,function(data){
		$(".container3").html(data);
	
});
}

////////////////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////VISTA TABLA DATOS USUARIO//////////////////////////////////////
function DatosUsuario(){
	var datos="action=DatosUsu";
	$.post("../controlador/controlusuarios.php",datos,function(data){
		$(".container3").html(data);
	
});
}

function DatosUsuario2(){
	var datos="action=DatosUsu2";
	$.post("../controlador/controlusuarios.php",datos,function(data){
		$(".container3").html(data);
	
});
}

///////////////////////////////////////////////////////////////////////////////////////////////////////


function Buscar(){
	var datos="action=listar&"+$("#myform2").serialize();
	$.post("../controlador/controlusuarios.php",datos,function(data){
	$(".container3").prepend(data);
});
}

 function mostrarContrasena(){
      var tipo = document.getElementById("pass");
      if(tipo.type == "password"){
          tipo.type = "text";
      }else{
          tipo.type = "password";
      }
  }