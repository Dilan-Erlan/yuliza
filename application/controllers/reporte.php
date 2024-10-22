<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reporte extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model("modelo_contactos");
       $this->load->library("fpdf/fpdf");
       define('FPDF_FONTPATH',BASEPATH.'/libraries/fpdf/font/');
    }

    public function imprimir()
    {
        $this->fpdf->AddPage();//añade la primera pagina
        $this->fpdf->SetFont('Times','B',8); //tamaño estilo de letra si quiero
        $this->fpdf->setXY(70,30);
        $this->fpdf->Cell(80,10,'LISTADO DE CONTACTOS','B',0,'C',0);
        /*$this->fpdf->Ln();
        $this->fpdf->Ln();*/
        $this->fpdf->setXY(10,50);
        $this->fpdf->Cell(20,10,'Num',1,'','C',0);
        $this->fpdf->Cell(30,10,'Nombre',1,'','C',0);
        $this->fpdf->Cell(40,10,'Telefono',1,'','C',0);
        $this->fpdf->Cell(60,10,'Email',1,'','C',0);
        $this->fpdf->Cell(40,10,'Foto',1,'','C',0);
        $datos["ver"]=$this->modelo_contactos->ver();
        $y=60;
        $s=1; foreach($datos["ver"] as $fila){
        $this->fpdf->setXY(10,$y);
        $this->fpdf->Cell(20,10,$s++,1,'','C',0);
        $this->fpdf->Cell(30,10, $fila->nombre,1,'','C',0);
        $this->fpdf->Cell(40,10,$fila->telefono,1,'','C',0);
        $this->fpdf->Cell(60,10,$fila->email,1,'','C',0);
        $this->fpdf->Image(base_url("fotos/").$fila->foto,175,$y,8);
        $this->fpdf->Cell(40,10,'',1,'C',0);
        $y=$y+10;
        }
         //ancho,alto 
         //tamaño del borde
          //borde izquierdo L T R B para los 4 lados
          // C de centro
          //L lineal a la izquiera
          //R a la derecha
          $this->fpdf->output('Contactos.pdfl','I');
          //I previo
          //D obliga a guardar el archivo
          
            //print_r($data);die();
           
        }
        //para la imagen hay 5 pasos

    
        public function imprimir2($id)
    {
        $this->fpdf->AddPage();//añade la primera pagina
        $this->fpdf->SetFont('Times','B',25); //tamaño estilo de letra si quiero
        $this->fpdf->setXY(85,30);
        $this->fpdf->Cell(40,10,' CONTACTO','BU',0,'C',0);
        $datos["datos"]=$this->modelo_contactos->reportes2($id);
        foreach($datos["datos"] as $fila){
        $this->fpdf->setXY(30,50);
        //$this->fpdf->Cell(55,55,'Foto',1,'','C',0);
        $this->fpdf->Image(base_url("fotos/").$fila->foto,45,60,45);

        $this->fpdf->SetFont('Times','BU',25); //tamaño estilo de letra si quiero
        $this->fpdf->setXY(95,55);
        $this->fpdf->Cell(40,10,'Nombre','',0,'C',0);

        $this->fpdf->SetFont('Arial','I',15);
        $this->fpdf->setXY(100,65);
        $this->fpdf->Cell(90,10,$fila->nombre,'B',0,'C',0);

        $this->fpdf->SetFont('Times','BU',25);
        $this->fpdf->setXY(95,80);
        $this->fpdf->Cell(40,10,'Telefono','',0,'C',0);

        $this->fpdf->SetFont('Arial','I',15);
        $this->fpdf->setXY(100,90);
        $this->fpdf->Cell(90,10,$fila->telefono,'B','','C',0);

        $this->fpdf->SetFont('Times','BU',25);
        $this->fpdf->setXY(95,105);
        $this->fpdf->Cell(35,10,'Email','',0,'C',0);

        $this->fpdf->SetFont('Arial','I',15);
        $this->fpdf->setXY(100,115);
        $this->fpdf->Cell(90,10,$fila->email,'B',0,'C',0);



        $this->fpdf->SetFont('Arial','I',15);
        $this->fpdf->setXY(70,120);
        $this->fpdf->Cell(10,125,'HOLA MUNDO ','',0,'C',0);
        }
        
         //ancho,alto 
         //tamaño del borde
          //borde izquierdo L T R B para los 4 lados
          // C de centro
          //L lineal a la izquiera
          //R a la derecha
          $this->fpdf->output('Contactos.pdfl','I');
          //I previo
          //D obliga a guardar el archivo
          
            //print_r($data);die();
           
        }
        //para la imagen hay 5 pasos
}