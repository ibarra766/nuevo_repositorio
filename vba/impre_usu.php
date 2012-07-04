<? session_start();
include("conexion.php");
$fecha=date("Y-m-d");
$fecha3=date("d-m-Y");

if ($_SESSION["NOMBRE_SESSION_USUARIO"] != NULL){

  
		
?>

<html>
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<title>Fundavanguardia</title>

<script language="JavaScript" type="text/JavaScript">

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' escriba correcto su e-mail.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' solo numeros.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf('');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' es requerido.\n'; }
  } if (errors) alert('Falta llenar los siguientes campos:\n'+errors);
  document.MM_returnValue = (errors == '');
  }
  function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}
  
  </script>
  
<link href="estilos.css"  rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.Estilo2 {font-family: Verdana, Arial, Helvetica, sans-serif, "MS sans serif"; font-size: 10px; color: #FFFFFF;}
.Estilo6 {font-family: Verdana, Arial, Helvetica, sans-serif, "MS sans serif"; font-size: 10px; color: #00F; }
.Estilo8 {color: #FFFFFF}
.Estilo9 {color: #818477}
-->
</style>
</head>
<body   background="Imagenes/fondo.jpg" marginwidth="0" marginheight="0" leftmargin="0" topmargin="0"><br>
<table width="781" height="738" border="1" align="center" cellpadding="0" cellspacing="0"  bgcolor="" bordercolor="#000000">
  <tr>
    <td height="56" colspan="3" valign="middle" ><div align="center"><img src="Imagenes/banner2.jpg" width="770" height="48" /></div></td>
  </tr>
  <tr>
    
  </tr>
  <tr>
   
  </tr>
  <tr>
   
    <td width="768"><table width="100%"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="56" colspan="3" valign="middle" ><div align="center"><img src="Imagenes/banne.jpg" width="770" height="48" /></div></td>
      </tr>
      <tr>
        <td height="22" background="Imagenes/subhead_bg.png" >&nbsp;</td>
        <td height="22" background="Imagenes/subhead_bg.png" >&nbsp;</td>
        <td height="22" background="Imagenes/subhead_bg.png" class="Estilo6" ><span class="Estilo9">
          <marquee ScrollAmount="5">
"Fundaci&oacute;n Bicentenaria Ayacucho"            
            </marquee>
        </span> </td>
        <td height="22" background="Imagenes/subhead_bg.png" >&nbsp;</td>
      </tr>
      
      <tr>
        <td width="22%" height="135" rowspan="3" valign="top" >
		
		    <table border="0" bgcolor="#CDE1D6" width="83%" cellpadding="0" cellspacing="0">
					
							<tr>
							  <td height="3"></td>
			  </tr>
							<tr>
								<td><img src="Imagenes/head.png"  width="166"></td>
							</tr>
							<tr>
								<td>
									<table width="100%" border="0" cellpadding="0" cellspacing="0"  bgcolor="" class="boxcolor">
										<tr  bgcolor="">
											<td><div align="center" class="tit_menu_main">MEN&Uacute; DE CONTENIDO</div></td>
										</tr>
								  </table>								</td>
							</tr>
							<tr>
								<td>
									<table width="100%" border="0" cellpadding="0" cellspacing="0"  bgcolor="" class="boxcolor">
										<tr>
											<td height="5" bgcolor=""></td>
										</tr>
										<tr>
											<td>

					<!-- Menu Izquierda -->

												<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="">
													<tr  bgcolor="">
														<td  height="1"></td>
													</tr>
													<tr>
														<td class="menu_main"><a href="registro.php"class="menu_main_link_l">Registrar o Modificar </a></TD>
													</tr>
													
													<tr>
														<td class="menu_main"><a href="impre_usu.php"class="menu_main_link_l">Visualizar Usuarios </a></TD>
													</tr>
													<tr>
														<td class="menu_main"><a href="reg_noti.php"class="menu_main_link_l"> Noticias </a></TD>
													</tr>
                                                    <tr>
														<td class="menu_main"><a href="re_act.php"class="menu_main_link_l"> Actividades </a></TD>
													</tr>
													
													<tr>
														<td class="menu_main"><a href="cerrar_sesion.php" class="menu_main_link_l">Cerrar Sesion </a></TD>
													</tr>

													<tr>
														<td height="5"></td>
													</tr>
											  </table>

					<!-- Fin Menu Izquierda -->											</td>
										</tr>
								  </table>								</td>
							</tr>
							<tr>
								<td><img src="Imagenes/footer.png"  width="166"></td>
							</tr>
			</table>
			<p align="center">&nbsp;&nbsp;</p>
			<table border="0"  bgcolor="" width="83%" cellpadding="0" cellspacing="0">
							<tr>
								<td height="5"></td>
							</tr>
							<tr>
								<td><img src="Imagenes/head.png"  width="166"></td>
							</tr>
							<tr>
								<td>
									<table width="100%" border="0" cellpadding="0" cellspacing="0"  class="boxcolor">
										<tr>
											<td><div align="center" class="tit_menu_main">SERVICIOS</div></td>
										</tr>
								  </table>								</td>
							</tr>
							
								<td>
									<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="" class="boxcolor">
										<tr>
											<td height="5"></td>
										</tr>
										<tr>
											<td>

					<!-- Menu Izquierda -->

												<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="">
													<tr>
														<td  height="1"></td>
													</tr>
													<tr>
														<td class="menu_main"><a href=""class="menu_main_link_l"> </a></TD>
													</tr>
													</tr>
													<tr>
														<td class="menu_main"><a href="index.php"class="menu_main_link_l">Quienes Somos</a></TD>
													</tr>
													<tr>
														<td class="menu_main"><a href="estructura.html"class="menu_main_link_l">Estructura</a></TD>
													</tr>
                                                    <tr>
														<td class="menu_main"><a href="galeria.html"class="menu_main_link_l">Galeria</a></TD>
													</tr>
                                                    <tr>
														<td class="menu_main"><a href="contactos.html"class="menu_main_link_l">Contactos</a></TD>
													</tr>
													</tr>
													

													<tr>
														<td height="5"></td>
													</tr>
											  </table>

					<!-- Fin Menu Izquierda -->											</td>
										</tr>
								  </table>								</td>
							</tr>
							<tr  bgcolor="">
								<td><img src="Imagenes/footer.png"  width="166"></td>
							</tr>
			</table>	<br>
			<p align="center">&nbsp;</p></td>
        <td width="1%">&nbsp;</td>
        <td width="76%" height="27" align="center"><table width="100%" border="0" background="Imagenes/subhead_bg.png" >
                   </table>          </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="1%">&nbsp;</td>
        <td height="430" align="center" valign="top"><table width="100%"  border="0"  bordercolor="#990033"     bgcolor=""><br><font class="Estilo9" >Bienvenido:</font> <? $nombre=$_SESSION["NOMBRE_SESSION_USUARIO"];
	                   $apellido=$_SESSION["APELLIDO_SESSION_USUARIO"]; ?></font><font color="#FF0000"><? echo "".$nombre." ".$apellido?><br><br><br><table width="100%"  border="0"  bordercolor="#990033"   bgcolor="" >
       
       <caption align="top"  class=" boxcolor" >Voluntarios Registrados</caption> <tr>
        
            <td>
    
                       

<table align="center" >
<tr align="center"><td>   <?
require("conexion.php");
//inicializo el criterio y recibo cualquier cadena que se desee buscar
/*$criterio="";
$txt_criterio = "";
if ($_GET["criterio"]!=""){
   $txt_criterio = $_GET["criterio"];
   $criterio = " where nombre like '%" . $txt_criterio . "%' or apellido like '%" . $txt_criterio . "%' or cedula like '%" . $txt_criterio . "%'";
}*/


$sql="SELECT * FROM usuarios " ;
$res=mysql_query($sql);
$numeroRegistros=mysql_num_rows($res);
if($numeroRegistros<=0)
{
    echo "<div align='center'><strong><img src='artic.gif'><a href='report.php'>ATRAS</a></strong></div>";
}else{
    //////////elementos para el orden
    if(!isset($orden))
    {
       $orden="cedula";
    }
    //////////fin elementos de orden

    //////////calculo de elementos necesarios para paginacion
    //tamaño de la pagina
    $tamPag=5;

    //pagina actual si no esta definida y limites
    if(!isset($_GET["pagina"]))
    {
       $pagina=1;
       $inicio=1;
       $final=$tamPag;
    }else{
       $pagina = $_GET["pagina"];
    }
    //calculo del limite inferior
    $limitInf=($pagina-1)*$tamPag;

    //calculo del numero de paginas
    $numPags=ceil($numeroRegistros/$tamPag);
    if(!isset($pagina))
    {
       $pagina=1;
       $inicio=1;
       $final=$tamPag;
    }else{
       $seccionActual=intval(($pagina-1)/$tamPag);
       $inicio=($seccionActual*$tamPag)+1;

       if($pagina<$numPags)
       {
          $final=$inicio+$tamPag-1;
       }else{
          $final=$numPags;
       }

       if ($final>$numPags){
          $final=$numPags;
       }
    }

//////////fin de dicho calculo

//////////creacion de la consulta con limites
$sql="SELECT * FROM usuarios "." ORDER BY ".$orden.",cedula ASC LIMIT ".$limitInf.",".$tamPag;
$res=mysql_query($sql);

//////////fin consulta con limites
echo "<div align='center' bgcolor='#063' >";
echo "<font face='verdana' size='-2'>encontrados ".$numeroRegistros." resultados<br>";
echo "ordenados por <b>".$orden."</b>";
if(isset($txt_criterio)){
    echo "<br>Valor filtro: <b>".$txt_criterio."</b>";
}
echo "</font></div>";
echo "<table align='center' width='100%' border='0' cellspacing='1' cellpadding='0'>";
echo "<tr><td colspan='5'><hr noshade></td></tr>";
echo "<th bgcolor='#CCCCCC'>Apellido</a></th>";
echo "<th bgcolor='#CCCCCC'>Nombre</a></th>";
echo "<th bgcolor='#CCCCCC'>Cedula</a></th>";
echo "<th bgcolor='#CCCCCC'>Login</a></th>";
echo "<th bgcolor='#CCCCCC'>Password</a></th>";

while($registro=mysql_fetch_array($res))
{
?> <!-- tabla de resultados -->
    <tr bgcolor="#063" onMouseOver="this.style.backgroundColor='#FF9900';this.style.cursor='hand';" onMouseOut="this.style.backgroundColor='#990033'"o"];" onClick="javascript:muestra('<? echo "[".$registro["apellido"]."] ".$registro["nombre"]." - ".$registro["cedula"]."".$registro["telefono"]."".$registro["login"]; ?>');">
    <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFCC"><b><? echo $registro["apellido"]; ?></b></font></td>
    <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFCC"><b><? echo $registro["nombre"]; ?></b></font></td>
    <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFCC"><b><? echo $registro["cedula"]; ?></b></font></td>
    <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFCC"><b><? echo $registro["login"]; ?></b></font></td>
    <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFCC"><b><? echo $registro["password"]; ?></b></font></td>

    

    </td>
    </tr>
   <!-- fin tabla resultados -->
<?
}//fin while
echo "</table>";
}//fin if
//////////a partir de aqui viene la paginacion
?></td>
    <br>
    <table cellspacing="0" cellpadding="0" align="center">
    <tr><td align="center" valign="top">
<?
    if($pagina>1)
    {
       echo "<a class='p' href='".$_SERVER["PHP_SELF"]."?pagina=".($pagina-1)."&orden=".$orden."'>";
       echo "<font face='verdana' size='-2'>anterior</font>";
       echo "</a> ";

    }

    for($i=$inicio;$i<=$final;$i++)
    {
       if($i==$pagina)
       {
          echo "<font face='verdana' size='-2'><b>".$i."</b> </font>";
       }else{
          echo "<a class='p' href='".$_SERVER["PHP_SELF"]."?pagina=".$i."&orden=".$orden."'>";
          echo "<font face='verdana' size='-2'>".$i."</font></a> ";
       }
    }
    if($pagina<$numPags)
   {
       echo " <a class='p' href='".$_SERVER["PHP_SELF"]."?pagina=".($pagina+1)."&orden=".$orden."'>";
       echo "<font face='verdana' size='-2'>siguiente</font></a>";
   }
//////////fin de la paginacion
?><tr>
   <td align="center"><div align="center"><form action="pdf1.php"><input name="submit" type="submit" value="Imprimir PDF"></form></div></td>
   </tr>
</tr>
<br>
<tr><td>
<br></td>
</tr>
</table>




</td>
</table><br></td>
        <td width="1%"></td>
      </tr>
    </table></td>
      
  </tr>
 
  
  <tr>
    <td colspan="3" class="Estilo6" align="center">&copy, Antonio-Joan Derechos no Reservados</td>
  </tr>
</table>
</body>
</html>

<?
 
}

else{
	include ("index.php");
}
?>
