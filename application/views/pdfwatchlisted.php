
  <?php   


     require "fpdf.php";
     // print_r($company[0]['id']);
                   class createPDF extends FPDF{
                    function header(){
              ///qweqweqwe
                        $this->SetFont('Arial','B',16);
                      $this->Cell(276,10,'CEBU INSTITUTE OF TECHNOLOGY - UNIVERSITY',0,0,'C');
                      $this->Ln();
                      $this->SetFont('Times','B',12);
                      $this->Cell(276,10,'NETWORKING AND LINKAGES OFFICE',0,0,'C');
                      $this->Ln(20);
                      $this->SetFont('Times','U',12);
                      $this->Cell(276,10,'WATCHLISTED COMPANIES',0,0,'C');
                      $this->Ln(20);


                    }
                    function footer(){
                      $this->SetY(-15);
                      $this->SetFont('Arial','',8);
                      $this->Cell(0,10,'Page '.$this->PageNo(). '/{nb}',0,0,'C');

                    }
                   
                    function displayTable($db,$count){
                      $this->SetFont('Times','B',9);
                      $str = "";
                      $ctr=1;
                     for($x = 0;$x<($count[0]['count_watchlisted']);$x++ ){
                          $ctr= $ctr + 1;
                    $cWidth = 55;
                    $cHeight= 11;
                    $line=1;
                    
                    
                      $this->Cell(55,($line * $cHeight),$db[$x]['company_name'],1,0,'C');
                      if($ctr>5){
                        $this->Ln();
                        $ctr = 0;
                      }
                      
                      
                        }
                     
                   }

                      


                    

                   }
                   $count = $count_watchlisted;
                   $passArray = $watchlisted;
                   $imageurl=base_url() .'logocit.png';
                   $newpdf = new createPDF();
              
                   $newpdf->AliasNbPages();
                   $newpdf->AddPage('L','A4',0);
                   $newpdf->Image($imageurl,10,6);
                  
                   $newpdf->displayTable($passArray,$count);
                   $newpdf->Output();




                    ?>