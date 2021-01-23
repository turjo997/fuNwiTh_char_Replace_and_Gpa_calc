<?php
    if(isset($_POST['submit'])) {
        $string = $_POST['string'];
		$find = $_POST['find'];
		$replace = $_POST['replace'];
        
		$ind = 0;
		
		$strlen = strlen($find);
		
		if(!empty($string) && !empty($find) && !empty($replace)){
		
		/*
         while($strpos = strpos($string , $find ,$ind)){
			 $ind = $strpos + $strlen ; 
			// $string = str_replace($string  , $replace ,$strpos, $strlen);
			$string = substr_replace($string  , $replace ,$strpos, $strlen);
		 }*/		
		 
		 echo str_replace($find ,$replace , $string);
		 //echo $string ;
			
		}else{
			echo "Fill up All Fields";
				
		}
		
		
	}
?>
