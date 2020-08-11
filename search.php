<script>
	
	$(document).ready(function(){

	$("#search").keyup(function(){

	$.ajax({
		url:'ajax.php',
		type:'post',
		data:{search:$(this).val()},
		success:function(result){
			$("#results").html(result);
		}
	});
});




});

</script>

<section class="section purple darken-3 center white-text search">
	<h4 class="white-text">Car Search</h4>
	<p>We have vehicles for all budgets</p>

	<form action="" method="POST">
		<div class="row">
			<div class="col s12 m12">
				<div class="input-field">
			<input type="text" name="search" id="search" placeholder="Enter vehicle make or model e.g 'Toyota Prado'">
		</div>
			</div>
		</div>
	</form>
</section>

<div class="container" id="results" style="padding:20px;">
					
</div>

