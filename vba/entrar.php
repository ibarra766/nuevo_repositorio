<?php
session_start();

include("conexion.php"); 
$login=$_POST['login'];
$password=$_POST['password'];
$fecha_act=date("Y-m-d");


	
	
	$sentencia= "SELECT * FROM `admin` WHERE (`login` ='$login' AND `password`='$password')"; 
	$sql=mysql_query($sentencia,$link);	
	$resultado=mysql_fetch_assoc($sql);

	$nombre=$resultado["nombre"];
	
	$apellido=$resultado["apellido"];

	
	$_SESSION["NOMBRE_SESSION_USUARIO"]=$nombre;
	$_SESSION["APELLIDO_SESSION_USUARIO"]=$apellido;
	
	
	
			
		

				if (mysql_num_rows($sql)==1){
					
						include("registro2.php");
				}
				else{
					include ("admin2.php");
				}
	
	
?>
