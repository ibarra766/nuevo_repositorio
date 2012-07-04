<? session_start();
include("conectar.php");

if ($_SESSION["NOMBRE_SESSION_USUARIO"] != NULL){


?>
<html>
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?

$razon=$_POST["razon"];
$nombre=$_POST["nombre"];
$cedula=$_POST["cedula"];
$telefono=$_POST["telefono"];
$correo=$_POST["correo"];
$password=$_POST["password"];
$direccion=$_POST["direccion"];


	
	$sql="select * from  registro where ci='$cedula'";
	$result=mysql_query($sql);
       
	if(mysql_num_rows($result)==1){
	$sql1=;
	$result1=($sql1);
	include("registro.php");?>
	
	<script>
	
			alert ("Usuario ya Registrado");
			
	</script>
	
	<?
	
        }else{
	$sql=" INSERT INTO registro (`razon`, `nombre`, `cedula`, `telefono`, `correo`, `password`, `direccion`) VALUES('$razon','$nombre','$cedula','$telefono','$correo','$password','$direccion')";
	$result=mysql_query($sql);
	include("index.php");?>
	
	<script>
	
			alert ("Usuario Registrado con Exito")
	
	</script>
	
	  }
	 
		

</body>
</html>
<?
}
else{
	include (".php");
}
?>
