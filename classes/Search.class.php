<?php

class Search extends Database {

	public function search(){

	$search=$_POST['search'];
	$search="%$search%";
		if(strlen($search)>2) {

			$sql="SELECT DISTINCT * FROM car_listings WHERE make LIKE ? || model LIKE ? ";
			$stmt=$this->connect()->prepare($sql);
		
			$stmt->execute([$search,$search]);

			while($row=$stmt->fetch()){
				$id=$row['id'];
				$make=$row['make'];
				$model=$row['model'];
				$year=$row['year'];
				$state=$row['state'];
		
		
			
			echo "<a href='details.php?details=$id class='hoverable'>$make $model $year $state</a>"."<br>";
			

		

		

			}


	}


	}

}

