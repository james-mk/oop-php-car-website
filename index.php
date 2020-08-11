<?php 

include('header.php'); 
include('slider.php');

?>
<div class="row section">
	<div class="col s12 m7">
		<div class="section center amber-text blue-grey">
			<h3>New Arrivals</h3>
		</div>
		<?php include('car.php');  ?>

	</div>
	<div class="col s12 m5 ">
		<div class="section">
			<?php include('search.php'); ?>
		<div class="card-panel teal white-text">
			<h3>Great News!!</h3>
			<p>We now offer very attractive financing options for both salaried and self employed individuals.</p>
			<h5 >Call: <a href="tel:0777123456" class="amber-text">07773123456 </a>To Get Started</h5>
		</div>
		
	</div>
	</div>

</div>
<div class="row">
	
<div class="col s12 m12">
	<section class="section">
	<?php
$listing=new Getlistings();
$rows=$listing->all();
?>
<div class="section center blue-grey amber-text ">
	<h3>In Stock</h3>
</div>	
			<div class="owl-carousel owl-theme section">
            <?php foreach($rows as $row) { ?>
			<div class="item card">
					<div class="card-image">
						<img src="<?php echo $row['coverphoto']; ?>">
					</div>
					<div class="card-content">
						<span class="card-title purple-text"><?=$row['make'];?> <?=$row['model'];?></span>
					<p class="pink-text">Price: <?=number_format($row['price']);?></p>
					<p class="blue-grey-text">Year: <?=$row['year'];?></p>
					<p class="blue-grey-text">Engine: <?=$row['engine_capacity'];?>cc</p>

					</div>
					<div class="card-action">
						<a href="details.php?details=<?=$row['id'];?>" class=" btn pink  white-text">VIEW DETAILS</a>
					</div>

				</div>
		<?php } ?>		
</div>



</section>
</div>



</div>
<div class="parallax-container">
	<div class="parallax">
		<img src="img/1.jpg" class="responsive-img">
<h3>hey</h3>
</div>
</div>
<?php include('brands.php'); ?>

<?php

include('footer_links.php');
include('footer.php');
?>
<script type="text/javascript">
	$(document).ready(function() {
		 $('.owl-carousel').owlCarousel({
    autoplay: true,
 
    margin: 10,
    nav: true,
    dots: true,
    loop: true,
    lazyLoad: true,
    stagePadding: 5,
    responsive: {
        0: {
            items: 1,
            dots: true
        },
        455: {
            items: 1,
            dots: true
        },
        768: {
            items: 3,
            dots: true
        },
        960: {
            items: 3,
            dots: true
        },
        1200: {
            items: 3,
            dots: true
        }
    },
 });

	});


</script>