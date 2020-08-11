<?php
include('includes/header.php');
$message=new Contact();
$message->insertMessage();

?>


<section class="section center purple darken-3 amber-text">
	<h3>Contact Us</h3>
</section>
<div class="container">
	<div class="row section">
		<div class="col s12 m6">
			<div class="card-panel blue-grey white-text center">
				<i class="material-icons">location_on</i>
				<h5>Mombasa Road, Nairobi</h5>
				<p>Working Hours: 8Am - 6Pm</p>
			</div>
			<p>We have a vehicle for every budget!.We offer financing options in collaboration with ABC bank. Drive home with your dream car with only a deposit of Ksh 300,000!! Talk to us today</p>
		</div>
		<div class="col s12 m6">
			<div class="card-panel grey lighten-2">
				<form action="" method="POST">
					<h5>Send us a message</h5>
					<div class="input-field">
						<input type="text" name="name" id="name" required>
						<label for="name">Name</label>
					</div>
					<div class="input-field">
						<input type="text" name="email" id="email" required>
						<label for="email">Email</label>
					</div>
					
                 <div class="input-field">
                    <input type="text" name="subject">
                    <label for="subject">Subject</label>
                </div>

					<div class="input-field">
						<textarea name="message" id="message" class="materialize-textarea" required></textarea>
						<label for="message">Enter Your Message</label>
					</div>
					
					<button class="btn btn-large white-text pink" name="send">SEND MESSAGE</button>
					


				</form>

			</div>

		</div>

	</div>
</div>








<?php
include('includes/footer.php');
?>
