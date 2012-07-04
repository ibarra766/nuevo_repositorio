<? session_start();
include("conexion.php");
$fecha=date("Y-m-d");
$fecha3=date("d-m-Y");

if ($_SESSION["NOMBRE_SESSION_USUARIO"] != NULL){
?>
<html>
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<title>ZONA</title>

<script language="JavaScript" type="text/JavaScript">

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' escriba correcto su e-mail.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' solo numeros.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
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
.Estilo6 {font-family: Verdana, Arial, Helvetica, sans-serif, "MS sans serif"; font-size: 10px; color: #000066; }
.Estilo8 {color: #FFFFFF}
.Estilo9 {color: #990033}
-->
</style>
</head>
<body   bgcolor="#990033" marginwidth="0" marginheight="0" leftmargin="0" topmargin="0"><br>
<table width="781" height="881" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="56" colspan="3" valign="middle" ><div align="center"><img src="Imagenes/banner2.jpg" width="770" height="48" /></div></td>
  </tr>
  <tr>
    <td height="" colspan="3"></td>
  </tr>
  <tr>
    <td height="4" colspan="3" bgcolor=""></td>
  </tr>
  <tr>
    <td width="7" height="75" background="Imagenes/border_left.jpg">&nbsp;</td>
    <td width="768"><table width="100%" bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="56" colspan="3" valign="middle" ><div align="center"><img src="Imagenes/banne.jpg" width="770" height="48" /></div></td>
      </tr>
      <tr>
        <td height="22" background="Imagenes/subhead_bg.png" >&nbsp;</td>
        <td height="22" background="Imagenes/subhead_bg.png" >&nbsp;</td>
        <td height="22" background="Imagenes/subhead_bg.png" class="Estilo6" ><span class="Estilo9">
 <marquee ScrollAmount="5">
" Registro de Movimientos."            
            </marquee>
        </span> </td>
        <td height="22" background="Imagenes/subhead_bg.png" >&nbsp;</td>
      </tr>
      
      <tr>
        <td width="22%" height="135" rowspan="3" valign="top"  class="Estilo6" align="center"><? echo "".$fecha3 ?>
		
		    <table border="0"  bgcolor="#FEE3E0" width="83%" cellpadding="0" cellspacing="0">
					
							<tr>
							  <td height="3"></td>
			  </tr>
							<tr>
								<td><img src="Imagenes/head.png"  width="166"></td>
							</tr>
							<tr>
								<td>
									<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#0066FF" class="boxcolor">
										<tr>
											<td><div align="center" class="tit_menu_main Estilo8">MEN&Uacute; DE CONTENIDO</div></td>
										</tr>
								  </table>								</td>
							</tr>
							<tr>
								<td>
									<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#3399FF" class="boxcolor">
										<tr>
											<td height="5" bgcolor="#990033"></td>
										</tr>
										<tr>
											<td>

					<!-- Menu Izquierda -->

												<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#990033">
													<tr>
														<td  height="1" bgcolor="#FFFFFF"></td>
													</tr>
													<tr>
														<td class="menu_main"><a href="registro.php"class="menu_main_link_l">Registrar Usuarios </a></TD>
													</tr>
													<tr>
														<td class="menu_main"><a href="eliminar.php"class="menu_main_link_l">Eliminar Movimientos </a></TD>
													</tr>
<tr>
														<td class="menu_main"><a href="movimientos.php"class="menu_main_link_l">Modificar Movimientos  </a></TD>
													</tr>
													
			
													
													<tr>
														<td class="menu_main"><a href="reportm.php"class="menu_main_link_l">Visualizar </a></TD>
													</tr>
												
													<tr>
														<td class="menu_main"><a href="cerrar_sesion.php"class="menu_main_link_l">Cerrar Sesion </a></TD>
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
			<table border="0" bgcolor="#FFFFFF" width="83%" cellpadding="0" cellspacing="0">
							<tr>
								<td height="5"></td>
							</tr>
							<tr>
								<td><img src="Imagenes/head.png"  width="166"></td>
							</tr>
							<tr>
								<td>
									<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#33CCFF" class="boxcolor">
										<tr>
											<td><div align="center" class="tit_menu_main">Personal Docente</div></td>
										</tr>
								  </table>								</td>
							</tr>
							<tr>
								<td>
									<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#990033" class="boxcolor">
										<tr>
											<td height="5"></td>
										</tr>
										<tr>
											<td>

					<!-- Menu Izquierda -->

												<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#990033">
													<tr>
														<td  height="1" bgcolor="#FFFFFF"></td>
													</tr>
													<tr>
														<td class="menu_main"><a href=""class="menu_main_link_l">Mis&iacute;on  </a></TD>
													</tr>
													</tr>
													<tr>
														<td class="menu_main"><a href=""class="menu_main_link_l">Vis&iacute;on </a></TD>
													</tr>
													<tr>
														<td class="menu_main"><a href=""class="menu_main_link_l">Organigrama </a></TD>
													</tr>
													</tr>
													<tr>
														<td class="menu_main"><a href=""class="menu_main_link_l"> </a></TD>
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
			</table>	<br>
			<p align="center">&nbsp;</p></td>
        <td width="1%">&nbsp;</td>
        <td width="76%" height="27" align="center"><table width="100%" border="0" background="Imagenes/subhead_bg.png" >
                   </table>          </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="1%">&nbsp;</td>
        <td height="430" align="center" valign="top" align="left"><br><font class="Estilo9" >Bienvenido:</font> <? $nombre=$_SESSION["NOMBRE_SESSION_USUARIO"];
	                   $apellido=$_SESSION["APELLIDO_SESSION_USUARIO"]; ?></font><font color="#FF0000"><? echo "".$nombre." ".$apellido?><br><br><br><table width="100%"  border="0"  bordercolor="#990033" bgcolor="#FFFFFF" ;>
       
	    <? $cedula1=$_POST["cedula1"];
$sql="select * from  movimiento where cedula2='$cedula1'";
	$resusltado=mysql_query($sql);
		$busqueda=mysql_fetch_assoc($resusltado);
	    $nombre2=$busqueda["nombre2"];
		$apellido2=$busqueda["apellido2"];
		$cedula2= $busqueda["cedula2"];
		$fein=$busqueda["fein"];
        $fere=$busqueda["fere"];
        $fena=$busqueda["fena"];
		$sexo=$busqueda["sexo"];
        $civil=$busqueda["civil"];
        $nivel=$busqueda["nivel"];
		$coden=$busqueda["coden"];
        $depen=$busqueda["depen"];
        $coca=$busqueda["coca"];
		$deno=$busqueda["deno"];
        $carho=$busqueda["carho"];
        $suel=$busqueda["suel"];
		$coden2=$busqueda["coden2"];
        $depen2=$busqueda["depen2"];
        $coca2=$busqueda["coca2"];
		$deno2=$busqueda["deno2"];
        $carho2=$busqueda["carho2"];
        $nombra=$busqueda["nombra"];
		$lugar=$busqueda["lugar"];
        
        $turno=$busqueda["turno"];
		$bono=$busqueda["bono"];
        $cuen=$busqueda["cuen"];
        $cod=$busqueda["cod"];
        $banco=$busqueda["banco"];
        $tipo=$busqueda["tipo"];
        $retro=$busqueda["retro"];
		$cedul=$busqueda["cedul"];
        $apell=$busqueda["apell"];
        $name=$busqueda["name"];
		$motivo=$busqueda["motivo"];
        $movimiento=$busqueda["movimiento"];
        $status=$busqueda["status"];


 ?>
       
	   
       <caption align="top" class="titulo2"> ELIMINAR MOVIMIENTO</caption> <tr>
        
            <td><form action="eliminar.php" method="post" name="faM3" >
			<table><tr>
   <td bgcolor="#009933" class="Estilo2" >Consultar Movimiento:</td><td bgcolor="#990033"  class="Estilo2" >Cedula:</td><td><input name="cedula1" type="text" size="12"></td>
  
  <td align="right"><input name="Submit" type="submit"  onclick="MM_validateForm('cedula1','','RisNum');return document.MM_returnValue" value="Enviar"></td></tr></table></form>
  <hr color="#333333">
  
  <table>
  
  <caption class="Estilo7">I Datos de Identificacion</caption>
  
  <form action="recibm3.php" method="post" name="fomt4t"> 
   <tr>
  <td bgcolor="#990033"  class="Estilo2" >Cedula:</td><td><input name="cedula2" type="text" size="12" value="<? echo $cedula2 ?>" ></td>
  <td bgcolor="#990033" class="Estilo2" >Apellidos:</td><td><input name="apellido" type="text" size="30" value="<? echo $apellido2 ?>" disabled></td>
  </tr>
  <tr>
  <td bgcolor="#990033" class="Estilo2" >Nombres:</td><td><input name="nombre" type="text" size="30" value="<? echo $nombre2 ?>" disabled></td>
  <td bgcolor="#990033" class="Estilo2" >Tipo de Movimiento:</td><td><select name="movimiento" disabled >
     <option><? echo $movimiento  ?>
	  <option>Ingreso
     <option>Reingreso
     <option>Cargo Adicional
     <option>Traslado
     <option>Ascenso
     <option>Clasificacion
	 <option>Liberacion de Cargo
     <option>Suspencion
    
     <option>Egreso/Jubilaciòn
     <option>Modificacion de Datos
     <option>Otros
                
    </select></td>
  </tr>
  </table>
  <hr color="#333333">
  
  <table>
  
  <caption class="Estilo7">II Datos Personales</caption>
  <tr>
  <td align="left" bgcolor="#990033" class="Estilo2" >Fecha de Ingreso:</td><td><input name="fein" type="text" size="20" value="<? echo $fein ?>" disabled></td>
  <td align="left" bgcolor="#990033" class="Estilo2" >Fecha de Reingreso:</td><td><input name="fere" type="text" size="20" value="<? echo $fere ?>" disabled ></td>
  </tr>
  <tr>
  <td align="left" bgcolor="#990033" class="Estilo2" >Fecha de Nacimiento:</td><td><input name="fena" type="text" size="20" value="<? echo $fena ?>"disabled></td>
  <td align="left" bgcolor="#990033" class="Estilo2" >Sexo:</td><td><select name="sexo" disabled>
     <option><? echo $sexo  ?>
	 <option>Masculino
     <option>Femenino
     
     
                
    </select></td>
  </tr>
  <tr>
  <td align="left" bgcolor="#990033" class="Estilo2" >Estado Civil:</td><td><select name="civil" disabled>
        <option><? echo $civil ?>
	 <option>Casado
     <option>Soltero
	 <option>Viudo
     <option>Divorciado
     
     
                
    </select></td>
  <td align="left" bgcolor="#990033" class="Estilo2" >Nivel Academico:</td><td><select name="nivel" disabled>
      <option><? echo $nivel  ?>
	 <option>Lic-Profesional
     <option>MSC-Profesional
     <option>Dc-Profesional     
     <option>TSU
     <option>Bachiller
     
     
                
    </select></td>
  </tr>
  
  </table>
  <hr color="#333333">
   <table>
  
  <caption class="Estilo7">III Datos Del Cargo Anterior </caption>
  <tr>
  <td align="left" bgcolor="#990033" class="Estilo2" >Codigo Dep:</td><td><input name="coden" type="text" size="10" value="<? echo $coden?>" disabled></td>
  <td align="left" bgcolor="#990033" class="Estilo2" >Dependencia:</td><td><input name="depen" type="text" size="30" value="<? echo $depen ?>" disabled></td>
  </tr>
  <tr>
  <td align="left" bgcolor="#990033" class="Estilo2" >Codigo Cargo:</td><td><input name="coca" type="text" size="10" value="<? echo $coca ?>" disabled></td>
  <td align="left" bgcolor="#990033" class="Estilo2" >Denominacion:</td><td><input name="deno" type="text" size="30" value="<? echo $deno ?>" disabled></td>
  
  </tr>
  <tr>
  <td align="left" bgcolor="#990033" class="Estilo2" >Carga Horaria:</td><td><select name="carho" diseabled>
      <option><? echo $carho  ?>
	 <option>8 Horas 
     <option>6 Horas 
     <option>4 Horas
    
	 
     
                
    </select></td>
  <td align="left" bgcolor="#990033" class="Estilo2" >Sueldo:</td><td><input name="suel" type="text" size="10" value="<? echo $suel ?>" disabled></td>
  
  </tr>
  </table>
   <hr color="#333333">
   <table>
  
  <caption class="Estilo7">IV Datos Del Cargo Propuesto </caption>
  <tr>
  <td align="left" bgcolor="#990033" class="Estilo2" >Codigo Dep:</td><td><input name="coden2" type="text" size="10" value="<? echo $coden2?>" disabled></td>
  <td align="left" bgcolor="#990033" class="Estilo2" >Dependencia:</td><td><input name="depen2" type="text" size="30" value="<? echo $depen2 ?>" disabled></td>
  </tr>
  <tr>
  <td align="left" bgcolor="#990033" class="Estilo2" >Codigo Cargo:</td><td><input name="coca2" type="text" size="10" value="<? echo $coca2 ?>" disabled></td>
  <td align="left" bgcolor="#990033" class="Estilo2" >Denominacion:</td><td><input name="deno2" type="text" size="30" value="<? echo $deno2 ?>" disabled></td>
  
  </tr>
  <tr>
  <td align="left" bgcolor="#990033" class="Estilo2" >Carga Horaria:</td><td><select name="carho2" diseabled>
      <option><? echo $carho2  ?>
	 <option>8 Horas 
     <option>6 Horas 
     <option>4 Horas
    
	 
     
                
    </select></td>
  <td align="left" bgcolor="#990033" class="Estilo2" >Nombramiento:</td><td><input name="nombra" type="text" size="20" value="<? echo $nombra ?>" disabled></td>
  
  </tr>
  <tr>
  <td align="left" bgcolor="#990033" class="Estilo2" >Municipio:</td><td><input name="lugar" type="text" size="20" value="<? echo $lugar ?>" disabled></td>
  
  
  </tr>
  <tr>
  
  <td align="left" bgcolor="#990033" class="Estilo2" >Turno:</td><td><select name="turno" disabled>
      <option><? echo $turno  ?>
	  <option>Diurno
     <option>Nocturno
     <option>Diurno-Nocturno
     <option>Fin de Semana
     
                
    </select></td>
	<td align="left" bgcolor="#990033" class="Estilo2" >Bono Bolivariano:</td><td><select name="bono" disabled>
      <option><? echo $bono ?>
	 <option>Si
     <option>No
     
     
                
    </select></td>
  
  </tr>
  </table>
   <hr color="#333333">
  
  <table>
  
  <caption class="Estilo7">V Datos Bancarios</caption>
  <tr>
  <td align="left" bgcolor="#990033" class="Estilo2" >Numero de Cuenta:</td><td><input name="cuen" type="text" size="20" value="<? echo $cuen ?>" disabled></td>
  <td align="left" bgcolor="#990033" class="Estilo2" >Codigo:</td><td><input name="cod" type="text" size="20" value="<? echo $cod ?>" disabled></td>
  </tr>
  <tr>
 <td align="left" bgcolor="#990033" class="Estilo2" >Banco:</td><td><select name="banco" disabled>
     <option><? echo $banco  ?>
	 <option>Mercantil
     <option>Venezuela
     <option>Caribe
     <option>Banfoandes
     <option>Banesco
	 <option>Industrial
     <option>B.O.D
     <option>Federal
	 <option>Caroni
     <option>Provincial
	 <option>Bicentenario
     <option>B.N.C       
    </select></td>
  <td align="left" bgcolor="#990033" class="Estilo2" >Tipo de Cuenta:</td><td><select name="tipo" disabled>
     <option><? echo $tipo  ?>
	 <option>Ahorro
     <option>Corriente
     
     
                
    </select></td>
  
 
 
  </tr>
  
  </table>
  <hr color="#333333">
  
  <table>
  
  <caption class="Estilo7">VI Datos de Retroactivo</caption>
  <tr>
  <td align="left" bgcolor="#990033" class="Estilo2" >Datos:</td><td><input name="retro" type="text" size="70" value="<? echo $retro ?>" disabled></td>
  
  </tr>
  
  
  </table>
  <hr color="#333333">
  
  <table>
  
  <caption class="Estilo7">VII Datos del Funcionario Saliente</caption>
  <tr>
  <td align="left" bgcolor="#990033" class="Estilo2" >Cedula:</td><td><input name="cedul" type="text" size="20" value="<? echo $cedul ?>" disabled></td>
  <td align="left" bgcolor="#990033" class="Estilo2" >Apellidos:</td><td><input name="apell" type="text" size="20" value="<? echo $apell ?>" disabled ></td>
  </tr>
  <tr>
  <td align="left" bgcolor="#990033" class="Estilo2" >Nombres:</td><td><input name="name" type="text" size="20" value="<? echo $name ?>" disabled></td>
  <td align="left" bgcolor="#990033" class="Estilo2" >Motivo:</td><td><select name="motivo"  disabled>
     <option><? echo $motivo ?>
	 <option>Jubilacion
     <option>Traslado
     <option>Incapacidad
     <option>Muerte
         
    </select></td>
  </tr>
  <tr>
  
  <td align="left" bgcolor="#990033" class="Estilo2" >Status:</td><td><select name="status" disabled >
     <option><? echo $status ?>
	 <option>Por Firmar
     <option>Firmado
     <option>Procesado
     
         
    </select></td>
  </tr>
  
  </table>
  <table> <tr align="left">
  </tr><tr><td align="right"><input name="Submit" type="submit"  onclick="MM_validateForm('fein','','R','fena','','R','civil2','','R','sexo2','','R','nivel2','','R','movimiento2','','R','nombre','','R','apellido','','R','cedula2','','RisNum','ciudad','','R','plantel','','R');return document.MM_returnValue" value="Enviar"></td><td><input name="Reset" type="reset" value="Borrar"> </form> </td></tr>
 
  </table></td>
           
            
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
            <td width="98%"><iframe src="informacion.html" tppabs="http://www.tupasaporterapido.com/pagina/informacion.html" name="iframe" width="100%" height="160" frameborder="0"></iframe></td>
            <td width="1%">&nbsp;</td>
          </tr>
          <tr>
            <td height="7" colspan="3"><div align="center"><img src="Imagenes/fondo_pizarra_2.jpg" tppabs="http://www.tupasaporterapido.com/pagina/imagenes/fondo_pizarra_2.jpg" width="571"></div></td>
          </tr>
        </table><br></td>
        <td width="1%">&nbsp;</td>
      </tr>
    </table>
  
      <td width="8" background="Imagenes/border_right.jpg" tppabs="http://www.tupasaporterapido.com/pagina/imagenes/border_right.jpg">&nbsp;</td>
  </tr>
  <tr>
    <td height="30" colspan="3" valign="middle" bgcolor="#990033"><div align="center" class="Estilo2">&copy; 2008 Zona Educativa- Estado Gu&aacute;rico <br>
    Todos Los Derechos Reservados  </div></td>
  </tr>
  <tr>
    <td height="7" colspan="3"><img src="Imagenes/tope-abajo.gif" tppabs="http://www.tupasaporterapido.com/pagina/imagenes/tope-abajo.gif" width="782" height="8" /></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
</body>
</html>

<?


}

else{
	include ("index2.php");
}
?>
