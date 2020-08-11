<?php 
include('header.php');

if(isset($_GET['details']) || isset($_POST['book_button'])) {
	
$details_id=$_GET['details'];
	
	$details=new Getlistings();
	$records=$details->getSingleRecord($details_id);
	
	
}

?>

<div class="section">
	<div class="row">
		<div class="col s12 m7">
			<img src="<?=$records['coverphoto']?>" class="materialboxed responsive-img">

				<h4 class="purple-text"><?=$records['make']?> <?=$records['model']?></h4>

			<table class="highlight stripped centered responsive-table">
				<thead class="teal-text">
					<tr>

						<td>Year:</td>
						<td>Price:</td>
						<td>Drive:</td>
						<td>Condition:</td>
						<td>Mileage:</td>
						<td>Engine:</td>
						<td>Colour:</td>
						<td>Interior:</td>

					</tr>
				</thead>

				<tbody class="blue-grey-text-text">
					<tr>

						<td><?=$records['year']?></td>
						<td><?=number_format($records['price'])?></td>
						<td><?=$records['drive'];?></td>
						<td><?=$records['state']?></td>
						<td><?=$records['mileage']?></td>
						<td><?=$records['engine_capacity']?></td>
						<td><?=$records['color']?></td>
						<td><?=$records['interior']?></td>
					</tr>
				</tbody>

			</table>
			<p class=" flow-text purple-text">Features</p>
			<ul class="collection">
				<ul>
					<?php foreach(explode(',', $records['description']) as $description) { ?>
					<li class="collection-item"><?php echo $description; ?></li>
					<?php } ?>

				</ul>

			</ul>
		</div>
		<div class="col s12 m5">
				<div class="card-panel teal white-text">
					<h3>Like this <span class="amber-text"><?=$records['make']?> <?=$records['model']?>?</span> Book a test drive today!</h3>
					<form method="POST" action="">
							<button name="book_button" data-target="booking_modal" class="btn btn-large modal-trigger pink white-text">BOOK TEST DRIVE</button>
					</form>
				</div>
				<?php include('includes/search.php');?>

				<div id="search-results">
					
				</div>

		</div>

	</div>



</div>
<?php

$book=new Bookings();
$book->insertBooking();
?>
<div id="booking_modal" class="modal">
	<div class="modal-content">
		<div class="container">
			<h4 class="purple-text">Contact Details</h4>


			<form action="" method="POST" enctype="multipart/form-data">
				<div class="input-field">
					<input type="text" name="name" id="name" required>
					<label for="name">Your Name</label>

				</div>
				<div class="input-field">
					<input type="email" name="email" id="email" required>
					<label for="email">Your Email</label>

				</div>
				<div class="input-field">
					<input type="text" name="tel" id="tel" required>
					<label for="tel">Your Telephone Number</label>

				</div>
				<div class="input-field">
					<input type="hidden" name="make" value="<?=$records['make']?>">
				</div>
				<div class="input-field">
					<input type="hidden" name="model" value="<?=$records['model']?>">
				</div>
				<input type="submit" name="book" value="BOOK TEST DRIVE" class="btn pink white-text">

			</form>

		</div>

	</div>

	<div class="modal-footer">
		<a href="#!" class="modal-close waves-effect">Close</a>
	</div>

</div>





<?php
include('footer.php');
?>