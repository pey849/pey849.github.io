<?php

//periods are for concatenation 

$flip = array();
$panel = array();

function fileRead($fileName)
{
    $fileName = $fileName;
    $contents = file($fileName); 
    $string = implode("<br>", $contents);
    return $string;
}


function buildCSS($counter, $flipArray, $panelArray)
{
    $css = fopen("css/Career.css", 'w');
    $flipCss = "";
    $panelCss = "";
    $counter--;
    
    while($counter > 0)
    {
        $flipCss .= "#".$flipArray[$counter];
        $panelCss .= "#".$panelArray[$counter];
        
        if($counter != 1)
        {
            $flipCss .= ", ";
            $panelCss .= ", ";
            
        }
        $counter--;
    }
    
    $flipCss .= '{ cursor: pointer; }';
    $panelCss .= '{ padding: 30px; display:none; }';
    
    $mergeCss = $flipCss . "\n\n" . $panelCss;
    
    fwrite($css, $mergeCss);
    fclose($css);
}



function careerFair()
{
	    //createCSS();
	    $f = fopen("TextFiles/Career_File.txt", "r");
            $javaScript = fopen("Javascript/Career.js", 'w');
            
	    $index = 1;
            
            echo
            "
                <!-- Start Table -->
                <div class='grid_8'>
                    <table border='0' >
                    
                        <tr>
                            <td><b>Start Time</b></td>
                            <td><b>End Time</b></td>
                            <td><b>Company</b></td>
                            <td><b>Location</b></td>
                        </tr>
                
            ";
            
	    
	    // Read line by line until end of file
	    while (!feof($f))
	    { 
	    
			// Make an array using semi-colon and space as delimiter
			$arrM = explode("; ",fgets($f)); 
			
			// Write links (get the data in the array)
			$companyInfo = fileRead($arrM[0]);
			$startTime = $arrM[1];
			$endTime = $arrM[2];
			$companyName = $arrM[3];
                        $location = $arrM[4];

                        //{} <-- use to convert int to string, ignores the data type;
                        $flip[$index] = "flip{$index}" ;
                        $panel[$index] = "panel{$index}" ;
                    
                        echo
                        "
                            <tr id='". $flip[$index] ."' class='row'>
                                <td>" .$startTime. "</td>
                                <td>" .$endTime. "</td>
                                <td>" .$companyName. "</td>
                                <td>" .$location. "</td>
                            </tr>
                            
                            <tr>
                                  <td colspan='4' class='paragraph'>
                                          <div id='". $panel[$index] ."'>"
                                                  . $companyInfo .
                                          "</div>
                                  </td>
                                  
                            </tr>
                            
                        ";
                        
                        
                        
                        $query =    "$(document).ready(function()
{
    $('#" .$flip[$index]."').click(function()
    {
        $('#" .$flip[$index]."').toggleClass('main');
        $('#" .$panel[$index]."').slideToggle('slow');
        $('#" .$panel[$index]."').toggleClass('main2');
    });
});\n\n";

                        fwrite($javaScript, $query);
			$index += 1;	
	    }
            
            
            echo
            "
                    </table>
                </div>
            <!-- End Schedule -->
                
            ";
            
            
            buildCSS($index, $flip, $panel);
            
	    fclose($f);
	    fclose($javaScript);
            

}


?>


