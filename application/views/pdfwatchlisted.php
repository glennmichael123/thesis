
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
                      $line = 0;
                      $linectr = 0;
                      $xPos = $this->GetX();
                      $yPos = $this->GetY();
                       $cWidth = 55;
                    $cHeight= 11;
                    $col = 0;
                      $holdWidth = $cWidth;
                      $iWidth = $cWidth;
                     for($x = 0;$x<($count[0]['count_watchlisted']);$x++ ){
                          $ctr= $ctr + 1;
                   
                    
                    
                      
                      

                       

                       $strWidth  = $this->GetStringWidth($db[$x]['company_name']);
                       if($cWidth < $strWidth){
                          $line = ceil($strWidth / $cWidth);



                       }
                       else{
                        $line = 1;

                       }
                        $linectr += $line;
                        if($linectr >=10){
                          $linectr = 0;

                        $this->SetXY($xPos + $holdWidth ,$yPos);
                        $this->MultiCell($cWidth,$cHeight,$db[$x]['company_name'] ,1,'C',false);
                        $qwe = $this->GetX();
                        $asd = $this->GetY();
                        $this->SetXY($qwe + $holdWidth ,$asd );
                   
                        $holdWidth+=$iWidth;
                        $col++;

                        }

                       else{
                        if($col<=0){
                            $this->MultiCell($cWidth,$cHeight,$db[$x]['company_name'] ,1,'C',false);
                        }
                        else{
                          
                          $this->MultiCell($cWidth,$cHeight,$db[$x]['company_name'] ,1,'C',false);
                          $qwe = $this->GetX();
                        $asd = $this->GetY();
                         $this->SetXY($qwe + $cWidth + ($cWidth * ($col - 1)) ,$asd );

                        }
                    


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