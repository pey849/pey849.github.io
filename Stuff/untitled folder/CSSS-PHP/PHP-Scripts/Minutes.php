<?php

//periods or for concatenation 

$status = array(); //old or most recent?
$year = array(); //what year
$day = array(); //what day
$time = array(); //time of meeting
//make sure permission to write and read are changed to everyone, else it won't work. By default, its read only
$flip = array(); //what flip
$panel = array(); //what panel

/*
function create_jquery()
{
    $javaScript = fopen("Javascript/testjava.js", 'w');
    $query =    "$(document).ready(function()
{
    $('#flip').click(function()
    {
        $('#flip').toggleClass('main');
        $('#panel').slideToggle('slow');
        $('#panel').toggleClass('main2');
    });
});\n\n";
                                  
    fwrite($javaScript, $query);
    fclose($javaScript);
}*/



function fileRead($fileName)
{
    $fileName = $fileName;
    $contents = file($fileName); 
    $string = implode("<br>", $contents);
    return $string;
}



function meetingMinutes()
{
	    //createCSS();
	    $f = fopen("TextFiles/Minutes_File.txt", "r");
            $javaScript = fopen("Javascript/Minutes.js", 'w');
            
	    $index = 1;
            
	    
	    // Read line by line until end of file
	    while (!feof($f))
	    { 
	    
			// Make an array using semi-colon and space as delimiter
			$arrM = explode("; ",fgets($f)); 
			
			// Write links (get the data in the array)
			$status[$index] = $arrM[0];
			$year[$index] = $arrM[1];
			$day[$index] = $arrM[2];
			$time[$index] = $arrM[3];
                        //added an extra word after the file path. Some reason the explode function added a blank
                        //space after the filename so it caused the file function to read a the same file name with a blank space at the end
                        //format is now: status; year; day; time; notes; random placeholder
                        $notes = fileRead($arrM[4]);
                        //{} <-- use to convert int to string, ignores the data type;
                        $flip[$index] = "flip{$index}" ;
                        $panel[$index] = "panel{$index}" ;
                    
			
                        echo
                        
                        "
                            <tr id=" . $flip[$index] ." class='row'>
                                <td><b>" . $status[$index] ."</b></td>
				<td><b>" . $year[$index] ."</b></td>
                                <td><b>" . $day[$index] ."</b></td>
                                <td><b>" . $time[$index] ."</b></td>
                            </tr>
                            
                            <tr>
                                <td colspan='4' class='paragraph'>
                                        <div id='" . $panel[$index] ."'>"
                                         . $notes .  
                                        "</div>
                                </td>
                            </tr>
                            
                        ";
                        
                        $query =    "$(document).ready(function()
{
    $('#" . $flip[$index] ."').click(function()
    {
        $('#" . $flip[$index] ."').toggleClass('main');
        $('#" . $panel[$index] ."').slideToggle('slow');
        $('#" . $panel[$index] ."').toggleClass('main2');
    });
});\n\n";

                        fwrite($javaScript, $query);
			$index += 1;	
	    }
            
            
            $css = fopen("css/Minutes.css", 'w');
            $flipCss = "";
            $panelCss = "";
            $index--;
            
            while($index > 0)
            {
                $flipCss .= "#".$flip[$index];
                $panelCss .= "#".$panel[$index];
                
                if($index != 1)
                {
                    $flipCss .= ", ";
                    $panelCss .= ", ";
                    
                }
                $index--;
            }
            
            $flipCss .= '{ cursor: pointer; }';
            $panelCss .= '{ padding: 50px; display:none; }';
            
            $mergeCss = $flipCss . "\n\n" . $panelCss;
            
            fwrite($css, $mergeCss);
	    fclose($css);
	    fclose($f);
	    fclose($javaScript);
            

}

?>