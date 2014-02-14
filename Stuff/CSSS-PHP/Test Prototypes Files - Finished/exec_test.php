<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="height: 100%; width:100%">
    
    <head>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/Current_Execs.css" />
	<link rel="stylesheet" type="text/css" href="css/fluid_grid.css" />
	
	<link href='http://fonts.googleapis.com/css?family=Wellfleet' rel='stylesheet' type='text/css'/>
	
	<link rel="stylesheet" type="text/css" href="Nav_Bar/css/tooltipster.css" />
	<link rel="stylesheet" type="text/css" href="Nav_Bar/css/style2.css" />

	<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
	<script type="text/javascript" src="Nav_Bar/js/jquery.tooltipster.js"></script>
	<link rel="stylesheet" type="text/css" href="Nav_Bar/css/tooltipster.css" />
	
	
	<script type="text/javascript">
		$(document).ready(function() {
			 $('.tooltip').tooltipster();
		});
	</script>
	
	
	
	
	<title>Current Executives</title>
	
	<?php
	    include 'exec_test_php.php';
	?>
	
    </head>
    
    
    
    
    <body>
	
	<div class="container_12">
		
		
		<div class="background-header grid_12">
		    <div class=" grid_6">	
			    <h1 class="header">CSSS</h1>
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
		
		
		
		<div class=" grid_12">
		    
		    <h1 class="titleFont">2013-2014 CSSS Executives</h1>
		    
		</div>
		
		<?php
                        echo currentExecs();
                ?>
	</div>
	
    </body>
</html>