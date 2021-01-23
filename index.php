<!DOCTYPE html>

<html>
     <head>
	 
	        <title>Form</title>
			
			<link rel = "stylesheet" href="findreplace_style.css"/>	
			
				<style>
	
	</style>
			<meta charset = "UTF-8">
		
	 </head>
	 
	  </head>
	 
	 <body>
	 
	         <form method = "post">
			 
		         
				<fieldset> 
				
				<legend align = "center">Character Replace FUN !!</legend>
				 
			   Text Area:<br><br>
			   <textarea name = "string" col = "100" rows = "5"></textarea>
			
			   
			   <br><br>
			   
			<label>Find:</label>
			<input type="text" name="find"><br><br>
			<label>Replace:</label>
			<input type="text" name="replace"><br><br>
			
				
				
				<input  type="submit" name="submit" value="Result">


              <?php
				include_once 'findreplace.php';
			  ?>
			  
			  </fieldset>
			  
			
			 </form>
			 
			 <br>
			
		
		
            <center> <a href = "gpa.php">GPA CALCULATOR</a></center>		
			  
			
		
	 </body>



</html>

