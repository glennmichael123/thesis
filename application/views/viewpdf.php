
  <?php   


     require "fpdf.php";
     // print_r($company[0]['id']);
                   class createPDF extends FPDF{
                    function header(){
                      $this->SetFont('Arial','B',14);
                      $this->Cell(276,10,'NETWORKING AND LINKAGES OFFICE',0,0,'C');
                      $this->Ln();
                      $this->SetFont('Times','',12);
                      $this->Cell(276,10,'Cebu Institute of Technology - University',0,0,'C');
                      $this->Ln(20);

                    }
                    function footer(){
                      $this->SetY(-15);
                      $this->SetFont('Arial','',8);
                      $this->Cell(0,10,'Page '.$this->PageNo(). '/{nb}',0,0,'C');

                    }
                    function headerTable(){
                      $this->SetFont('Times','B',12);
                      $this->Cell(53,10,'Company Name',1,0,'C');
                      $this->Cell(53,10,'Company Address',1,0,'C');
                      $this->Cell(53,10,'Designated Person',1,0,'C');
                      $this->Cell(53,10,'Contact Number',1,0,'C');
                      $this->Cell(53,10,'With Moa',1,0,'C');
                      $this->Ln();

                    }
                    function displayTable($db,$count){
                      $this->SetFont('Times','',12);
                      $str = "";
                     for($x = 0;$x<($count[0]['company_count']);$x++ ){
                      if($db[$x]['moa']==1){

                        $str = "Yes";
                      }
                      else{
                        $str="No";
                      }
                      $this->Cell(53,10,$db[$x]['company_name'],1,0,'C');
                      $this->Cell(53,10,$db[$x]['address'],1,0,'C');
                      $this->Cell(53,10,$db[$x]['designated_person'],1,0,'C');
                      $this->Cell(53,10,$db[$x]['contact_no'],1,0,'C');
                      $this->Cell(53,10,$str,1,0,'C');
                      $this->Ln();
                        }
                     
                   }

                      


                    

                   }
                   $count = $count_company;
                   $passArray = $company;
                   $newpdf = new createPDF();
                   $newpdf->AliasNbPages();
                   $newpdf->AddPage('L','A4',0);
                   $newpdf->headerTable();
                   $newpdf->displayTable($passArray,$count);
                   $newpdf->Output();




                    ?>