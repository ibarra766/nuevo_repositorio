<?php
session_start();

include("conexion.php"); 
$login=$_POST['login'];
$password=$_POST['password'];
$fecha_act=date("Y-m-d");


	
	
	$sentencia= "SELECT *FROM `usuarios` WHERE (`login` ='$login' AND `password`='$password')"; 
	$sql=mysql_query($sentencia,$link);	
	$resultado=mysql_fetch_assoc($sql);

	$nombre=$resultado["nombre"];
	
	$apellido=$resultado["apellido"];
	$estado=$resultado["estado"];
$municipio=$resultado["municipio"];
$nivel=$resultado["nivel"];
	
	
	$_SESSION["NOMBRE_SESSION_USUARIO"]=$nombre;
	$_SESSION["APELLIDO_SESSION_USUARIO"]=$apellido;
	$_SESSION["MUNICIPIO_SESSION_USUARIO"]=$municipio;
	$_SESSION["ESTADO_SESSION_USUARIO"]=$estado;
	$_SESSION["NIVEL_SESSION_USUARIO"]=$nivel;
	
	
	if (mysql_num_rows($sql)==1){
			
		if ($nivel==1){

				
					
						include("registro.php");
				}
				else{
					include ("principal2.php");
				}}
	
	
?>
