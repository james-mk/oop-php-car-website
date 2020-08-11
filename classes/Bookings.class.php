<?php
/**
 * 
 */
class Bookings extends Database {

	
	public function insertBooking(){

		if(isset($_POST['book'])) {
			$name=$_POST['name'];
			$email=$_POST['email'];
			$tel=$_POST['tel'];
			$make=$_POST['make'];
			$model=$_POST['model'];

			$sql="INSERT INTO bookings(name,email,tel,make,model)VALUES(?,?,?,?,?)";
			$stmt=$this->connect()->prepare($sql);
			$stmt->execute([$name,$email,$tel,$make,$model]);

			echo"
    	<script> alert('Thanks for booking! We will be intouch soon'); </script>
    	";


		}


	}
	
}










?>