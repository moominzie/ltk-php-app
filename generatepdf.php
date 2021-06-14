<?php
session_start();
error_reporting(0);
include('includes/connection.php');
require_once('TCPDF-main/tcpdf.php');

/**
 * *
 */
class PDF extends TCPDF
{
    function Header(){
    }
    function Footer(){
        $this->Ln(-5);   //font name size style
        $this->SetFont('thsarabunnew','B','16');
        $this->Cell(20, 1, '', 0, 0);
        $this->Cell(150, 5, 'วิสัยทัศน์อฟอ.:ผลิตไฟฟ้าเพื่อความมั่นคงยั่งยืน ด้วยเทคโนโลยีและนวัตกรรม Smart Energy for Sustainability', 0, 1, 'C');


    }

    function ViewData($dbh){
        $imageFile = K_PATH_IMAGES.'การไฟฟ้าฝ่ายผลิตแห่งประเทศไทย.png';
        $this->Image($imageFile, 20, 10, 30, '', 'PNG', '','T', false, 300, '', false, false, 
            0, false, false, false);
        $this->Ln(5);   //font name size style
        $this->SetFont('thsarabunnew','','16');
                    //189 is total width of A4 page, height, border, line,
        $this->Cell(40, 1, '', 0, 0); 
        $this->MultiCell(100, 5, 'ELECTRICITY GENERATING AUTHORITY OF THAILAND NORTH-EASTERN REGION HYDRO POWER PLANT', 0,'C',0,1,'','',true);
        $this->SetFont('thsarabunnew','B','16');
        $this->Ln(2); 
        $this->SetFont('thsarabunnew','B','16');

        $id=intval($_GET['id']);
        $sql = "SELECT tblauthor.PowerId,tblauthor.InitialsId,tblauthor.Username,corrective_maintenance.id,corrective_maintenance.Username,tblpower.id,tblpower.PowerplantName,tblinitials.id,tblinitials.Initials,tblcm.Agency,tblcm.id from tblauthor join corrective_maintenance on corrective_maintenance.Username=tblauthor.Username join tblpower on tblpower.id=tblauthor.PowerId join tblinitials on tblinitials.id=tblauthor.InitialsId join tblcm on tblcm.id=tblinitials.id where corrective_maintenance.id=:id group by corrective_maintenance.id=:id";
        $query = $dbh -> prepare($sql);
        $query-> bindParam(':id', $id, PDO::PARAM_STR);
        $query->execute();
        $results=$query->fetchAll(PDO::FETCH_OBJ);
        $cnt=1;
        if($query->rowCount() > 0)
        {
        foreach($results as $result)
        {  
            $this->Cell(30, 1, '', 0, 0);
            $this->Cell(120, 5, 'Daily Report: '.$result->Initials, 0, 1, 'C');
            $this->Cell(30, 1, '', 0, 0);
            $this->Cell(60,5,$result->PowerplantName,0, 0,'C');
            $this->Cell(1, 1, '', 0, 0);
            $this->Cell(60, 5,$result->Agency, 0, 0,'C');
        }
    }
        
                $id=intval($_GET['id']);
                $sql = "SELECT member.Username,corrective_maintenance.Images1,corrective_maintenance.Images2,tblauthor.AuthorName,tblauthor.Username,corrective_maintenance.RegDate,corrective_maintenance.Problem,corrective_maintenance.Corrective,corrective_maintenance.Summary,corrective_maintenance.id as cid FROM corrective_maintenance join member on member.Username=corrective_maintenance.Username join tblauthor on tblauthor.Username=corrective_maintenance.Username where corrective_maintenance.id=:id group by corrective_maintenance.id=:id";
                $query = $dbh -> prepare($sql);
                $query-> bindParam(':id', $id, PDO::PARAM_STR);
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                $cnt=1;
                if($query->rowCount() > 0)
                {
                foreach($results as $result)
                {  
                $this->Cell(1, 1, '', 0, 0);
                $this->Cell(20,5,$result->RegDate,0, 0,'C');
                $this->Ln(50);   //font name size style
                $this->SetFont('thsarabunnew','','16');
                $this->Cell(5, 1, '', 0, 0);
                $imageFile = K_PATH_IMAGES.$result->Images1;
                $this->Image($imageFile, 40, 60, 139, '', 'JPG', '','T', false, 300, '', false, false, 0, false, false, false);
                $this->Ln(50);   //font name size style
                $this->SetFont('thsarabunnew','','16');
                $this->Cell(5, 1, '', 0, 0);
                $imageFile = K_PATH_IMAGES.$result->Images2;
                $this->Image($imageFile, 40, 170, 139, '', 'JPG', '','T', false, 300, '', false, false, 0, false, false, false);
                    
                $this->Ln(120); 
                $this->Cell(15, 1, '', 0, 0);   
                $this->SetFont('thsarabunnew','B','16');
                $this->Cell(100, 5, 'สาเหตุ/ปัญหา', 0, 1, 'L');
                $this->Cell(25, 1, '', 0, 0); 
                $this->SetFont('thsarabunnew','','16');
                $this->MultiCell(150, 5,$result->Problem, 0,'L',0,1,'','',true);

                $this->Ln(5); 
                $this->Cell(15, 1, '', 0, 0);  
                $this->SetFont('thsarabunnew','B','16'); 
                $this->Cell(100, 5, 'การแก้ไข', 0, 1, 'L');
                $this->Cell(25, 1, '', 0, 0); 
                $this->SetFont('thsarabunnew','','16');
                $this->MultiCell(150, 5,$result->Corrective, 0,'L',0,1,'','',true);

                $this->Ln(5); 
                $this->Cell(15, 1, '', 0, 0);  
                $this->SetFont('thsarabunnew','B','16'); 
                $this->Cell(100, 5, 'สรุป', 0, 1, 'L');
                $this->Cell(25, 1, '', 0, 0); 
                $this->SetFont('thsarabunnew','','16');
                $this->MultiCell(150, 5,$result->Summary, 0,'L',0,1,'','',true);

                $this->Ln(100);   //font name size style
                $this->SetFont('thsarabunnew','','16');
                $this->Cell(5, 1, '', 0, 0);
                $this->Cell(50, 5, 'จึงเรียนมาเพื่อโปรดพิจารณา', 0, 1, 'C');

                $this->Ln(5);   //font name size style
                $this->SetFont('thsarabunnew','B','16');
                $this->Cell(89, 1, '', 0, 0);
                $this->Cell(100, 5, $result->AuthorName, 0, 1, 'C');


                }
            }

        }
    }

// create new PDF document
                // portrait or landscape
$pdf = new PDF('p', 'mm', 'A4', true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Methawee Atthawan');
$pdf->SetTitle('โรงไฟฟ้าลำตะคองชลภาวัฒนา');
$pdf->SetSubject('');
$pdf->SetKeywords('');


// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('thsarabunnew', '', 14, '', true);


// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();
$pdf->ViewData($dbh);

// Close and output PDF document
$pdf->Output('cmwork_ltk.pdf', 'I');
?>