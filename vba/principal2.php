<? 
include("conexion.php");
$fecha=date("Y-m-d");
$fecha3=date("d-m-Y");

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
														<td class="menu_main"><a href="admin.php"class="menu_main_link_l">Administrador </a></TD>
													</tr>
													
													<tr>
														<td class="menu_main"><a href="principal.php"class="menu_main_link_l">Analistas </a></TD>
													</tr>
													<tr>
														<td class="menu_main"><a href="bene.php"class="menu_main_link_l">Voluntarios </a></TD>
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
														<td class="menu_main"><a href="actividad.php"class="menu_main_link_l">Actividades</a></TD>
													</tr>
													<tr>
														<td class="menu_main"><a href="noticias.html"class="menu_main_link_l">Noticias</a></TD>
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
        <td height="430" align="center" valign="top"><br><br><br><br><table width="100%"  border="0"  bordercolor="#990033"     bgcolor="">
       
        <tr>
        
           <td align="center" >
                       <table  bgcolor="">
                       <caption><h3  class="Estilo9"	>Ingreso de Analistas</h3><img src="Imagenes/bb.png" width="250" height="15"></caption>
                       
 <form action="entrar2.php" method="post" name="form">
<tr>

<td class="Estilo9" align="left">
 LOGIN:</td><td><input type="text" name="login">
  </td></tr>
  <tr>
<td class="Estilo9">

PASSWORD:</td><td><input type="password" name="password">
  
  
  </td></tr>
 <tr><td align="right">
  <input name="Submit" type="submit" onClick="MM_validateForm('login','','R','password','','R');return document.MM_returnValue" value="Entrar"> </td><td><input name="reset" type="reset" value="Borrar">
 </td></tr>
</form>
</table>
<table>
<tr><td><img src="Imagenes/andro1.png" width="250" height="200"></td></tr>
<tr><td><img src="Imagenes/gg.png" width="250" height="15"></td></tr>
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

