
  <?php   


     require "fpdf.php";
     // print_r($company[0]['id']);
                   class createPDF extends FPDF{
                    function header(){
              ///qweqweqwe
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
                      $this->Cell(55,10,'Company Name',1,0,'C');
                      $this->Cell(55,10,'Company Address',1,0,'C');
                      $this->Cell(55,10,'Designated Person',1,0,'C');
                      $this->Cell(55,10,'Contact Number',1,0,'C');
                      
                      $this->Cell(55,10,'Moa Status',1,0,'C');
                      $this->Ln();

                    }
                    function displayTable($db,$count){
                      $this->SetFont('Times','',9);
                      $str = "";
                     for($x = 0;$x<($count[0]['company_count']);$x++ ){
                      if($db[$x]['moa']==1){

                        $str = "WITH MOA";
                      }
                      else{
                        $str="NO MOA";
                      }
                    $cWidth = 55;
                    $cHeight= 11;
                    if($this->GetStringWidth($db[$x]['address']) < $cWidth && $this->GetStringWidth($db[$x]['company_name']) < $cWidth ){
                        $line = 1;

                    }
                    else{

                      if(strlen($db[$x]['address'])>strlen($db[$x]['company_name']) ){

                          $strLen = strlen($db[$x]['address']);
                          $passStr = $db[$x]['address'];

                      }
                      else{
                          $strLen = strlen($db[$x]['company_name']);
                          $passStr = $db[$x]['company_name'];
                      }
                        $errMar = 10;
                        $startChar = 0;
                        $maxChar = 0;
                        $textArray = array();
                        $tmpString = "";
                       

                        while($startChar < $strLen){

                          while(

                              $this->GetStringWidth($tmpString) < ($cWidth ) &&
                               ($startChar+$maxChar) < $strLen){

                            $maxChar++;
                            $tmpString = substr($passStr,$startChar,$maxChar);

                          }
                            $startChar = $startChar + $maxChar;
                            array_push($textArray,$tmpString);
                            $maxChar = 0;
                            $tmpString = "";


                            

                        }
                        $line = count($textArray);
                    }// 
                    
                      $this->Cell(55,($line * $cHeight),$db[$x]['company_name'],1,0,'L');
                      $xPos = $this ->GetX();
                      $yPos = $this->GetY();
                      $this->MultiCell($cWidth,$cHeight,$db[$x]['address'],1);
                      $this->SetXY($xPos + $cWidth ,$yPos);
                        
                      $this->Cell(55,($line * $cHeight),$db[$x]['designated_person'],1,0,'C');
                      $this->Cell(55,($line * $cHeight),$db[$x]['contact_no'],1,0,'C');
                      $this->Cell(55,($line * $cHeight),$str,1,0,'C');
                      $this->Ln();
                        }
                     
                   }

                      


                    

                   }
                   $count = $count_company;
                   $passArray = $company;
                    $imageurl=base_url() .'logocit.png';
                   $newpdf = new createPDF();
              
                   $newpdf->AliasNbPages();
                   $newpdf->AddPage('L','A4',0);
                   $newpdf->Image($imageurl,10,6);
                   $newpdf->headerTable();
                   $newpdf->displayTable($passArray,$count);
                   $newpdf->Output();




                    ?>