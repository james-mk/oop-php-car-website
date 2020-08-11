<?php

class Contact extends Database{

public function insertMessage(){

if(isset($_POST['send'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];

	$sql="INSERT INTO contact_form(name,email,subject,message)VALUES(?,?,?,?)";
	$stmt=$this->connect()->prepare($sql);
	$stmt->execute([$name,$email,$subject,$message]);

	echo"<script> alert('Thanks for your message! we will be in touch with you soon');</script>";
}


}

}



?>