
  <?php   


     require "fpdf.php";
     // print_r($company[0]['id']);
                   class createPDF extends FPDF{

                    function header(){
              ///qweqweqwe
                        $this->SetFont('Arial','B',16);
                      $this->Cell(276,10,'CEBU INSTITUTE OF TECHNOLOGY - UNIVERSITY',0,0,'C');
                      $this->Ln();
                      $this->SetFont('Times','',12);
                      $this->Cell(276,10,'NETWORKING AND LINKAGES OFFICE',0,0,'C');
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
                      $this->SetAutoPageBreak(false);

                        $str = "";
                       $tempheight = 0;
                       $nextLine = 0;
                       $maxheight = 0;
                      
                       $i = 0;


                     for($x = 0;$x<($count[0]['company_count']);$x++ ){

                 

                      if($db[$x]['moa']==1){

                        $str = "WITH MOA";
                      }
                      else{
                        $str="NO MOA";
                      }
                    $cWidth = 55;
                    $cHeight= 10;
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

                        // $errMar = 10;
                        // $startChar = 0;
                        // $maxChar = 0;
                        // $textArray = array();
                        // $getLine = 0;
                        // $tmpString = "";

                       

                        // while($startChar < $strLen){

                        //   while(

                        //       $this->GetStringWidth($tmpString) < ($cWidth  ) &&
                        //        ($startChar+$maxChar) < $strLen){

                        //     $maxChar++;
                        //     $tmpString = substr($passStr,$startChar,$maxChar);

                        //   }
                        //     $startChar = $startChar + $maxChar;
                        //     array_push($textArray,$tmpString);
                        //     $getLine += 1;
                        //     $maxChar = 0;
                        //     $tmpString = "";

                          // $line = count($textArray);
                            

                        // }
                        $line = ceil( ($this->GetStringWidth($passStr)) / $cWidth); //mycode
                       
                        
                    }// 
                        $i +=($line);
                        if($i >=12){
                            $this->AddPage('L','A4',0);
                            $this->headerTable();
                             $this->SetFont('Times','',9);
                             $i = 0;

                        }
                      if($this->GetStringWidth($db[$x]['company_name']) > $cWidth && $this->GetStringWidth($db[$x]['address']) > $cWidth){
                         $xPos = $this ->GetX();
                         $yPos = $this->GetY();
                        $this->MultiCell($cWidth,$cHeight,$db[$x]['company_name'] ,1,'C',false);
                        
                        $this->SetXY($xPos + $cWidth ,$yPos);
                        $xPos = $this ->GetX();
                         $yPos = $this->GetY();
                          $this->MultiCell($cWidth,$cHeight,$db[$x]['address'] ,1,'C',false);
                         $this->SetXY($xPos + ($cWidth) ,$yPos);

                      }
                      if($this->GetStringWidth($db[$x]['company_name']) > $cWidth && $this->GetStringWidth($db[$x]['address']) < $cWidth){
                          $xPos = $this ->GetX();
                         $yPos = $this->GetY();
                         $this->MultiCell($cWidth,$cHeight,$db[$x]['company_name'] ,1,'C',false);
                        $this->SetXY($xPos + $cWidth ,$yPos);
                        $this->Cell(55,($line * $cHeight),$db[$x]['address'],1,0,'C');

                      }
                      if($this->GetStringWidth($db[$x]['company_name']) < $cWidth && $this->GetStringWidth($db[$x]['address']) > $cWidth){
                        
                          $this->Cell(55,($line * $cHeight),$db[$x]['company_name'],1,0,'C');
                          $xPos = $this ->GetX();
                         $yPos = $this->GetY();
                        $this->MultiCell($cWidth,$cHeight,$db[$x]['address'] ,1,'C',false);
                        $this->SetXY($xPos + $cWidth ,$yPos);

                      }
                      if($this->GetStringWidth($db[$x]['company_name']) < $cWidth && $this->GetStringWidth($db[$x]['address']) < $cWidth){
                          $this->Cell(55,($line * $cHeight),$db[$x]['company_name'],1,0,'C');
                          $this->Cell(55,($line * $cHeight),$db[$x]['address'],1,0,'C');


                      }

                      $this->Cell(55,($line * $cHeight),$db[$x]['designated_person'],1,0,'C');
                      $this->Cell(55,($line * $cHeight),$db[$x]['contact_no'],1,0,'C');
                      if($str =="WITH MOA"){
                          $this->SetFont('Times','B',9);
                          $this->SetTextColor(66, 244, 122);
                        $this->Cell(55,($line * $cHeight),$str,1,0,'C');
                        $this->SetFont('Times','',9);
                          $this->SetTextColor(0, 0, 0);
                      
                      }
                      else{
                          $this->SetFont('Times','B',9);
                          $this->SetTextColor(244, 65, 65);
                        $this->Cell(55,($line * $cHeight),$str,1,0,'C');
                        $this->SetFont('Times','',9);
                          $this->SetTextColor(0, 0, 0);


                      }
                      

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