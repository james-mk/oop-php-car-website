<?php

class Getlistings extends Database {

public function selectListings() {

$sql="SELECT * FROM car_listings ORDER BY id DESC LIMIT 3";
$stmt=$this->connect()->query($sql);
return $stmt;
}

public function new() {
$sql="SELECT * FROM car_listings WHERE state='new'";
$stmt=$this->connect()->query($sql);
return $stmt;
}

public function used() {
$sql="SELECT * FROM car_listings WHERE state='used'";
$stmt=$this->connect()->query($sql);
return $stmt;
}


public function getSingleRecord($details_id) {
		$sql="SELECT * FROM car_listings WHERE id = ?";
		$stmt=$this->connect()->prepare($sql);
		$stmt->execute([$details_id]);
		$result=$stmt->fetch();
		return $result;
		
		
	}

public function all() {
		$sql="SELECT * FROM car_listings";
		$stmt=$this->connect()->query($sql);
		return $stmt;
		
		
	}




}


?>