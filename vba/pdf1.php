<?php    session_start();
$link=mysql_connect("localhost","root");
mysql_select_db("vba",$link);
require('fpdf.php');
$fech=date("d-m-Y");

 $apellido3=$_SESSION["APELLIDO_SESSION_USUARIO"];
  $nombre3=$_SESSION["NOMBRE_SESSION_USUARIO"];
class PDF extends FPDF
{
//Cabecera de página
function Header()
{
    //Logo
    $this->Image('Imagenes/banner2.jpg',30,9.5,150,'C');


	//$this->Image('kgfree4top1.jpg',30,32,150,'C');
	//$this->Image('kgfree4left.jpg',30,41.6,33.6);
    //Arial bold 15
    $this->SetFont('Arial','B',15);
    //Movernos a la derecha
    $this->Cell(80);
    //Título

    //Salto de línea
    $this->Ln(20);
}

//Pie de página
function Footer()
{

   $fech=date("d-m-Y");
    //Posición: a 1,5 cm del final
    $this->SetY(-15);
    //Arial italic 8
    $this->SetFont('Arial','I',8);
    //Número de página
    $this->Cell(20,10,'San Juan de los Morros  '.$fech,0,0);
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');


}
}

//Creación del objeto de la clase heredada

$pdf=new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',10);

		$pdf->SetTextColor(255,0,0);
		
$pdf->Ln(14);

$pdf->Cell(83);

$pdf->Cell(20,5,'',0,0,'C');
$pdf->Ln(5);
$pdf->Cell(70);
$pdf->Cell(60,5,'Reportes de Voluntarios',0,0,'C');



/*for($i=1;$i<=40;$i++)
    $pdf->Cell(0,10,'Imprimiendo línea número '.$i,0,1);*/
	$pdf->Ln(10);

	$pdf->Cell(30);
	$pdf->Cell(25,5,'Cedula',1,0,'C');
        $pdf->Cell(35,5,'Nombre',1,0,'C');
        $pdf->Cell(35,5,'Apellido',1,0,'C');
     
	$pdf->Cell(25,5,'Login',1,0,'C');
        $pdf->Cell(25,5,'Password',1,0,'C');
		
		
		
		
		
		$pdf->Ln();
		$pdf->Cell(30);
			$pdf->SetFont('Times','IB',8);
		$pdf->SetTextColor(0,0,255);
		$result=mysql_query("SELECT * FROM usuarios");

		while( $row=mysql_fetch_array($result) )
		{
			$pdf->Cell(25,5,$row['cedula'],1);
$pdf->Cell(35,5,$row['nombre'],1);
$pdf->Cell(35,5,$row['apellido'],1);
$pdf->Cell(25,5,$row['login'],1);
$pdf->Cell(25,5,$row['password'],1);
						
			
			
			$pdf->Ln();
			$pdf->Cell(30);

		
		}
		    	$pdf->Ln();
			$pdf->Cell(45);
			$pdf->SetTextColor(255,0,0);
			$pdf->Cell(20,5,'Impreso por: '.$nombre3.' '.$apellido3.' '.$fech);
			
$pdf->Output();
?>
