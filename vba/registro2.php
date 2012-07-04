<? session_start();
include("conexion.php");
$fecha=date("Y-m-d");
$fecha3=date("d-m-Y");

if ($_SESSION["NOMBRE_SESSION_USUARIO"] != NULL){

   $cedula2=$_POST["cedula1"];
 
   $sql="select * from  usuarios where cedula='$cedula2'";
  
		 $resusltado=mysql_query($sql);
	
		$busqueda=mysql_fetch_assoc($resusltado);
	    $nombre1=$busqueda["nombre"];
		$apellido1=$busqueda["apellido"];
		$cedula= $busqueda["cedula"];
	    $login=$busqueda["login"];
        $password=$busqueda["password"];
        $estado=$busqueda["estado"];
		$correo=$busqueda["correo"];
		$mun=$busqueda["municipio"];
		$uni=$busqueda["universidad"];
		 $tel=$busqueda["telefono"];
		$ni=$busqueda["nivel"];
		
		
		
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
       
       <caption align="top"  class=" Estilo9" >REGISTRO DE USUARIOS</caption> <tr>
        
            <td>
 <hr>           
<table  align="center" border="0">
<form action="registro2.php" method="post" name="bus">
<tr><td class="boxcolor" >Cedula:</td><td><input name="cedula1" type="text" size="12" ><input  type="submit"  onclick="MM_validateForm('cedula1','','RisNum');return document.MM_returnValue" Value=Buscar ></td><td class="Estilo6"></td></tr>
</form>
</table> 
<hr>           
                       
 <form action="re_us2.php" method="post" name="form">
 <table align="center" border="0" bordercolor="#006633">
<tr>

<td  class="boxcolor" align="left">
 Nombres:</td><td><input type="text" name="nombre" size="25" value="<? echo  $nombre1 ?>">
  </td>
<td  class="boxcolor">

Apellidos:</td><td><input type="text" name="apellido" size="25" value="<? echo  $apellido1 ?>" >
  
  
  </td></tr>
  <tr>

<td  class="boxcolor" align="left">
 Cedula:</td><td><input type="text" name="cedula" size="15" value="<? echo  $cedula ?>" >
  </td>
<td  class="boxcolor">

Correo:</td><td><input type="text" name="correo" size="20" value="<? echo $correo  ?>">
  
  
  </td></tr>
   <tr>

<td  class="boxcolor" align="left">
 Telefono:</td><td><input type="text" name="telefono" size="15" value="<? echo $tel  ?>" >
  </td>
<td  class="boxcolor">

Universidad:</td><td><input type="text" name="universidad" size="30" value="<? echo  $uni ?>">
  
  </td></tr>
    <tr>

<td  class="boxcolor" align="left">
 Estado:</td><td><select  name="estado"  >
 <option><? echo $estado  ?>
 <option>Aragua
  <option>Apure
 
 <option>Amazonas
  <option>Anzoategui
   <option>Barinas
    <option>Bolivar
 
  <option>Carabobo
 <option>Cojedes
  <option>Distrito Capital
 <option>Delta Amacuro
  <option>Falcon
 <option>Guarico
  <option>Lara
 <option>Monagas
  <option>Miranda
 <option>Merida
  <option>Nueva Esparta
 <option>Portuguesa
  <option>Sucre
 <option>Tachira
  <option>Trujillo
 <option>Yaracuy
  <option>
 <option>Zulia
 </select>
  </td>
<td  class="boxcolor">

Municipio:</td><td><input type="text" name="municipio" size="25"value="<? echo  $mun ?>">
  
  
  </td></tr>
    <tr>

<td  class="boxcolor" align="left">
 Nivel:</td><td><select  name="nivel" >
 <option> <? echo $ni ?>
 <option>1
 <option>2
 </select>
  </td>
  <td  class="boxcolor">

Login:</td><td><input type="text" name="login" size="25" value="<? echo $login   ?>">
  
  
  </td>
</tr>
 <tr>

<td  class="boxcolor" align="left">
 Password:</td><td><input type="password" name="password" size="15" value="<? echo $password   ?> >
  </td>
</tr>
 <tr><td align="right">
  <input name="Submit" type="submit" onClick="MM_validateForm('cedula','','inRange','correo','','R','login','','R','password','','R','cedula','','RisNum','nombre','','R','apellido','','R','telefono','','RisNum','correo','','isEmail','universidad','','R','municipio','','R');return document.MM_returnValue" value="Enviar"> </td><td><input name="reset" type="reset" value="Borrar">
 </td></tr>
</form>
</table>
<table>
<tr><td><img src="Imagenes/gg.png" width="450" height="15"></td></tr>
</table>                      
           
           </td>
 
            
        </tr></table></td>
        <td width="1%">&nbsp;</td>
      </tr>
      <tr>
        <td width="1%">&nbsp;</td>
        <td><table width="100%" border="0">
          <tr>
            <td colspan="3"><div align="center"><img src="Imagenes/fondo_pizarra_1.jpg" tppabs="http://www.tupasaporterapido.com/pagina/imagenes/fondo_pizarra_1.jpg" width="572"></div></td>
          </tr>
          <tr>
            <td width="1%"></td>
            <td width="98%"></td>
            <td width="1%">&nbsp;</td>
          </tr>
          <tr>
            <td height="7" colspan="3"><div align="center"><img src="Imagenes/fondo_pizarra_2.jpg" tppabs="http://www.tupasaporterapido.com/pagina/imagenes/fondo_pizarra_2.jpg" width="571"></div></td>
          </tr>
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
