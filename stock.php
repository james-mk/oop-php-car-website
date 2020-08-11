<?php 
include('header.php');
include('search.php');
$listing=new Getlistings();

?>

<div class="section center">
    <h3>New <span class="purple-text">Vehicles</span></h3>
</div>

<?php
$rows=$listing->new();
?>
<div class="section">
			<div class="owl-carousel owl-theme">
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

</div>

<div class="section center">
    <h3>Used <span class="purple-text"> Vehicles</span></h3>
</div>

<?php
$rows=$listing->Used();

?>
<div class="section">
			<div class="owl-carousel owl-theme">
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

</div>


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
            items: 2,
            dots: true
        },
        768: {
            items: 2,
            dots: true
        },
        960: {
            items: 3,
            dots: true
        },
        1200: {
            items: 4,
            dots: true
        }
    },
 });

	});


</script>



<?php include('footer.php');?>
