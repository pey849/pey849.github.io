<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="height: 100%; width:100%">

<head>
	
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/Career_Fair.css" />
	<link rel="stylesheet" type="text/css" href="css/fluid_grid.css" />
	<link rel="stylesheet" type="text/css" href="css/Career.css" />
	<link href='http://fonts.googleapis.com/css?family=Wellfleet' rel='stylesheet' type='text/css'/>
	
	<link rel="stylesheet" type="text/css" href="Nav_Bar/css/tooltipster.css" />

	
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>

	<script type="text/javascript" src="Javascript/Career.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	
	
        
        <?php
	    include 'PHP-Scripts/Career.php';
	?>
	
	
	<title>Career Fair!</title>
	

</head>

<body>
	<!-- Start of Container -->
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
		
		<div class="clear"></div>
		
		<!-- Start Schedule -->
		<div class="grid_12">
			
			<div class="grid_8">
				<h1 class="titleFont">CSSS Career Fair 2013 - February 12, 2013</h1>
			</div>
			
			<?php
                        
                            echo careerFair();
                            
                        ?>
			
			<!-- Start Twitter Feed -->
			<div class="grid_4 menu">
				
				<h2 class="font go_center">Information</h2>
				<p class="paragraph2">
					
					Every Year the CSSS hosts a Computer Science Career Fair that invite local companies, as well as
					out of province companies, to come out and educate U of S Computer Science students
					on the what they're about and what it is like working for them. At these career fairs,
					it is an oppurtnity to learn and apply for an internship at one of the companies.
					Internship positions usually fill up fast, so apply fast by getting to know the people
					at the CSSS Career Fair!
					
					<br/><br/>
					
					To learn about each sponsor, simply click on the company's name. Information will be
					displayed in a drop down window. To hide the information, just simply click on the
					company's name, that you chose to read about, again.
			
				</p>
				
				
				
			</div>
			<!-- End Twitter Feed -->
			
		</div>
		<!-- End About Us -->
		
		
		<div class="clear"></div>

		
		<div class="grid_12" style="padding: 20px;"><hr/></div>
	</div>
	<!-- End of Container -->
	
</body>

</html>

