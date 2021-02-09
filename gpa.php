<!DOCTYPE html>

<html>
     <head>
	 
	        <title>Gpa_Calc</title>
			
			<link rel = "stylesheet" href="gpa_style.css"/>	
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">	
			
				<style>
	
	</style>
			<meta charset = "UTF-8">
		
	 </head>
	 

	 
	 <body>
	 
	      
			<a class = "btn text-center mt-3 p-3 btn-success  text-white mb-3" href="index.php">HOME</a>

			<div class="container-fluid">
			<div class="form-section bg-primary text-white p-5 my-5">

	            		<div class="title text-center mb-3">
                          <h3 class="font-weight-bolder">FILL THE GRADE LIST !!!</h3>
                        </div>

						<form method = "post" action="" class="w-50 m-auto ">
						
						<div class="from-group">

						<label for = "First Number"> Economics and Accounting:</label> 
			            <input type = "text" class="form-control" name = "first_no">
 
						</div>
						<div class="from-group">
							
						<label for = "Second Number"> Mathematical Analysis for Computer Science  :</label> 
		            	<input type = "text" class="form-control" name = "second_no">
 
						</div>
						<div class="from-group">
									
						<label for = "Third Number"> Database  :</label> 
						<input type = "text" class="form-control" name = "third_no">
						</div>
						<div class="from-group">

						<label for = "Four Number"> Microprocessors  :</label> 
		            	<input type = "text" class="form-control" name = "four_no">

                        </div>
						<div class="from-group">
                     
						<label for = "Fifth Number"> Digital System Design :</label> 
			            <input type = "text" class="form-control" name = "fifth_no">
                        </div>

						<div class="from-group">
						<label for = "Sixth Number"> Software Development-IV :</label> 
			            <input type = "text" class="form-control" name = "sixth_no">
                        </div>

						<div class="from-group">
						<label for = "Seventh umber"> Database Lab :</label> 
			            <input type = "text" class="form-control" name = "seventh_no">
                        </div>

						<div class="from-group">
						<label for = "Eight Number"> Microprocessors Lab:</label> 
			             <input type = "text" class="form-control" name = "eight_no">
                        </div>

						<div class="from-group">
						<label for = "Nine Number"> Digital System Design Lab :</label> 
			            <input type = "text" class="form-control" name = "nine_no">
                        </div>

						<div class="form-group mt-3">

                       <input type="submit" name= "submit" class= "btn btn-secondary" value="FIND GPA">

						<?php
						include_once 'add.php';
						?>


                        </div>

						</form>



    
    


			</div>



			</div>
	 
	 

            		
			
		   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
			
			 
			 
	 </body>



</html>

