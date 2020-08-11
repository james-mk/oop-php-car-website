
<script type="text/javascript">
	$(document).ready(function() {
		 $('.owlCarousel').owlCarousel({
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
            items: 2,
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