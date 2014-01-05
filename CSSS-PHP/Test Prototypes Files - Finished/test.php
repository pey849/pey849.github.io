
        <?php

          
                $f = fopen("unitednations.txt", "r");
		
                
		// Read line by line until end of file
		while (!feof($f))
		{ 
		
		// Make an array using comma as delimiter
		    $arrM = explode(",",fgets($f)); 
	
		// Write links (get the data in the array)
		    echo "$arrM[1] <br/>";
		    echo "$arrM[0] <br/><br/>";
		 	
		}
		
		fclose($f);
                
        
	?>
	
