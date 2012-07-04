<?
include("conexion.php");




?>
<html>
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?

$nombre=$_POST["nombre"];
$login=$_POST["login"];
$cedula1=$_POST["cedula"];
$apellido=$_POST["apellido"];
$municipio=$_POST["municipio"];
$password=$_POST["password"];
$estado=$_POST["estado"];
$telefono=$_POST["telefono"];
$universidad=$_POST["universidad"];
$nivel=$_POST["nivel"];
$correo=$_POST["correo"];






	
	$sql="select * from  usuarios where cedula='$cedula1'";
	$result=mysql_query($sql);
       
	if(mysql_num_rows($result)==1){
	
	include("no.php");
	
        }else{
	$sql=" INSERT INTO usuarios (`estado`, `correo`, `telefono`, `nombre`, `apellido`, `cedula`, `login`, `password`, `municipio`, `universidad`, `nivel`) VALUES('$estado','$correo','$telefono','$nombre','$apellido','$cedula1','$login','$password','$municipio','$universidad','$nivel')";
	$result=mysql_query($sql);
	include("listo2.php");
	  }
	 
	
	
?>
</body>
</html>
