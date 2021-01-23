<?php
    if(isset($_POST['submit'])) {
        $number1 = $_POST['first_no'];
        $number2 = $_POST['second_no'];
		$number3 = $_POST['third_no'];
        $number4 = $_POST['four_no'];
		$number5 = $_POST['fifth_no'];
        $number6 = $_POST['sixth_no'];
		$number7 = $_POST['seventh_no'];
        $number8 = $_POST['eight_no'];
		$number9 = $_POST['nine_no'];
        
        $x= ($number1 * 3.0 )+ ($number2 * 3.0 ) + ($number3 * 3.0 )
		
		+ ($number4 * 3.0 ) + ($number5 * 3.0 )  + ($number6 * 0.75 )  + ($number7 * 1.5 )
		
		+ ($number8 * 0.75 )  + ($number9 * 0.75 );
		
		$sum = $x / 18.75 ;
		
		echo "The GPA is: ".$sum;
	}
?>
