<html>
	<head>
	<title>Reading from text files</title>

	 <style>
            
            img{ height: 50px; height: 50px; }
            
        </style>


        <?php
            $f = fopen("unitednations.txt", "r");
            $count = 0;
            $x = array();
            $y = array();
            
            // Read line by line until end of file
            while (!feof($f))
            { 
            
            // Make an array using comma as delimiter
                $arrM = explode(",",fgets($f)); 
    
            // Write links (get the data in the array)
                $x[$count] = $arrM[1];
                $y[$count] = $arrM[0];
                $count += 1;	
            }
            
            fclose($f);
                    
            for($i=0; $i<12; $i++)
            {
                    //echo "$x[$i] <br/>";
                echo "<img src='http://" . $x[$i] . "'>";
            }
	?>



	</head>
	<body>
	<p id="hello">bye</p>

	</body>
</html>
