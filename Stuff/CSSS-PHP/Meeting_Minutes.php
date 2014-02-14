<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="height: 100%; width:100%">

    <head>
            
            
            <link rel="stylesheet" type="text/css" href="css/style.css" />
            <link rel="stylesheet" type="text/css" href="css/Minutes.css" />
            <link rel="stylesheet" type="text/css" href="css/Meeting_Minutes.css" />
            
            <link rel="stylesheet" type="text/css" href="css/fluid_grid.css" />
            
            <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
            <link rel="stylesheet" type="text/css" href="Nav_Bar/css/tooltipster.css" />
            <link rel="stylesheet" type="text/css" href="Nav_Bar/css/style2.css" />
            
            <script type="text/javascript" src="Nav_Bar/js/jquery.tooltipster.js"></script>
            <script type="text/javascript" src="Javascript/Minutes.js"></script>
            
            
            
            <link rel="stylesheet" type="text/css" href="Nav_Bar/css/tooltipster.css" />
            <link href='http://fonts.googleapis.com/css?family=Wellfleet' rel='stylesheet' type='text/css'/>
            
            
            <title>Meeting Minutes</title>
            
            <?php
	    include 'PHP-Scripts/Minutes.php';
	?>
    
    </head>
    
    <body>
        
        
        
        
        <!-- Start of Container -->
	<div class="container_12">
	
		<div class="background-header grid_12">
		    <div class=" grid_6">	
			    <p class="CSSS">CSSS</p>
			    <h2 class="littleHeader">
				<span class="odd">Computer</span>
				<span class="even">Science</span>
				<span class="student_header">Student</span>
				<span class="even">Society</span>
			    </h2>
		    </div>
		    
		    <div class="grid_6">	
				<img class="uofscenter" src="New/uofs.png"/>
		    </div>
		</div>
		
                <div class="grid_12">
                    
                    <ul>
                        <li><a href="Career_Fair.php">Career Fair</a></li>
                        <li><a href="Meeting_Minutes.php">Minutes</a></li>
                        <li><a href="Current_Execs.php">Executives</a></li>
                        <li><a href="Current_Events.php">Home</a></li>
                    </ul>
                    
                </div>
                
		<div class="clear"></div>
                
                
                <!-- Start Schedule -->
            <div class="grid_12">
            
            <div class="grid_8">
                <h1 class="titleFont">CSSS Meeting Minutes!</h1>
	    </div>
			
	    <div class="clear"></div>
			
	    <div class="grid_12">
		<h3 class="font">
                        Our executive meeting minutes are made public so everyone can see what we
                        as a society do for students that attend the University of Saskatchewan.
                        To view our notes, just click on a date. To close, just simply click on the
                        date again.
                </h3>
            </div>
			
	    <div class="clear"></div>
            
            <!-- Start Table -->
            <div class="grid_12">
		<table border="0" >
                    
                    <tr class="tableHeader">
                        <td><b>Status</b></td>
                        <td><b>Year</b></td>
                        <td><b>Day</b></td>
                        <td><b>Time</b></td>
                    </tr>
                    
                    <?php
                        echo meetingMinutes();
                    ?>
                    
                    
                </table>
            </div>
            
            <!-- End Table -->
            
        </div>
        <!-- End Schedule -->
		
                
        </div>        
        <!-- End of Container -->
                
    </body>

</html>