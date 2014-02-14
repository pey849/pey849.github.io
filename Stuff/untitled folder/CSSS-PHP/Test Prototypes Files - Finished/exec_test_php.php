<?php

$pictures = array(); //array to hold links to pictures or file paths
$names = array(); //hold names
$year = array(); //year of study
$major = array(); //majoring in
$position = array(); //position
$help = array(); //helpful with what classes. Comma separated.

function currentExecs()
{
	    
	    $f = fopen("Exec_File.txt", "r");
	    $index = 0;
	    
	    // Read line by line until end of file
	    while (!feof($f))
	    { 
	    
			// Make an array using semi-colon and space as delimiter
			$arrM = explode("; ",fgets($f)); 
			
			// Write links (get the data in the array)
			$position[$index] = $arrM[0];
			$names[$index] = $arrM[1];
			$year[$index] = $arrM[2];
			$major[$index] = $arrM[3];
			$pictures[$index] = $arrM[4];
			$help[$index] = $arrM[5];
			
			//for pictures being positioned on the right side
			if($index%2 == 0)
			{
				    echo "
				    
						<div class='clear'></div>
						<div class='clear'></div>
						
						<div class='grid_12'>
				
							    <div class='grid_3'>
								<img class='Exec_L' src='" . $pictures[$index] . "'>
							    </div>
					       
						
							    <div class='grid_9'>
									    
									<h1 class='background-header Exec_Name'>" . $names[$index] . "</h1>
									
									
									
									<div class='background-header'>
									    <h2 class='Exec_Position'>"
										. $position[$index] .  "<br/>
										Year: " . $year[$index] . "<br/>
										Major: " . $major[$index] . "<br/>
										Can help with: " . $help[$index] . "<br/>
									    </h2>
									</div>
							    
							    </div>
						</div>
				    
				    ";
			}
			
			//for pictures being positioned on the right side
			else{
				    echo "
				    
						<div class='clear'></div>
						<div class='clear'></div>
						
						<div class='grid_12'>
				
							    <div class='grid_9'>
									    
									<h1 class='background-header Exec_Name'>" . $names[$index] . "</h1>
									
									
									
									<div class='background-header'>
									    <h2 class='Exec_Position'>"
										. $position[$index] .  "<br/>
										Year: " . $year[$index] . "<br/>
										Major: " . $major[$index] . "<br/>
										Can help with: " . $help[$index] . "<br/>
									    </h2>
									</div>
							    
							    </div>
							    
							    <div class='grid_3'>
								<img class='Exec_L' src='" . $pictures[$index] . "'>
							    </div>
						</div>
				    
				    ";
			}
			
			$index += 1;	
	    }
	    
	    fclose($f);
	    

}

?>