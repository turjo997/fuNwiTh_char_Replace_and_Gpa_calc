<!DOCTYPE html>

<html>
     <head>
	 
	        <title>Char_Replace_Gpa_Calc</title>
			
			<link rel = "stylesheet" href="findreplace_style.css"/>	

			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">	
			
				<style>
	
	            </style>
			<meta charset = "UTF-8">
		
	 </head>
	 
	  </head>
	 
	 <body>

	   <div class="container-fluid">
	 
     <div class="form-section bg-warning text-white p-5 my-5">

                        <div class="title text-center mb-3">
                          <h3 class="font-weight-bolder">Character Replace Fun</h3>
                        </div>
    

                        <form method = "post" action="" class="w-50 m-auto ">

                          <div class="from-group">
                             
                            <label for="text">Write the text</label>
                            <textarea style = "resize: none;" name="text" class = "form-control" id="" cols="30" rows="5"></textarea>

                           

                          </div>

                          <div class="from-group">

                            <label for="find">Find</label>
                            <input type="text" class="form-control" name="find">

                            
                          </div>

                          <div class="from-group">

                            <label for="replace">Replace</label>
                            <input type="text" class="form-control" name="replace">

                            
                          </div>


                          <div class="form-group mt-3">

                          <input type="submit" name= "submit" class= "btn btn-secondary" value="RESULT">

                          <?php
			             	include_once 'findreplace.php';
			              ?>
			  
                         
                          </div>

						  <a class = "btn text-center  p-3 btn-success  text-white mb-3" href="gpa.php">GPA CALCULATOR</a>
                        



                        </form>

						
                        
                        
                      </div>

					  
				
            
           
		
		
           <!-- <center> <a href = "gpa.php">GPA CALCULATOR</a></center>-->		

        </div>
			  

			
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
			
		
	 </body>



</html>


