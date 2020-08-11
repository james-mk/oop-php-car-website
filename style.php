<style>
	* {
		box-sizing: border-box;
		margin: 0;
		padding: 0;
	}

	body {
		background: #f4f4f4;
	}
	
	#results{
		margin-top:30px;
	}
	
	#results a{
	color:red;
	font-weight:bold;
	}

	#search{
		padding: 5px !important;
		border:3px solid #f4f4f4 !important;
		font-size: 18px !important;
		width: 90% !important;
		/*background-color: white;*/
		color:#fff;
	}
	.teampic {
		height: 200px !important;
		width: 200px !important;
	}



	.form-wrapper {
		position: relative;
		width: 60%;
		margin: auto;
		border: 3px solid teal;
		padding: 20px;
	}

	.tabs .indicator {
		background-color: teal;
	}

	.tabs .tab a:focus,
	.tabs .tab a:focus.active {
		background: transparent;


	}

	.tabs .tab a {
		color: teal;
		font-weight: 600;
	}

	.tabs .tab a.active {
		color: orange;
	}

	.tabs .tab a:hover {
		color: orange !important;
	}


	.card-title {
		font-weight: bold;
		text-shadow: #fff;
	}

	thead {
		color: #4527a0;
		font-weight: bold;
	}

	.card-image {
		height: auto;
	}

	.owl-prev {
		left: -30px;
	}

	.owl-next {
		right: -30px;
	}

	.owl-prev,
	.owl-next {
		position: absolute;
		top: 30%;
	}

	.owl-prev span,
	.owl-next span {
		font-size: 60px;
		color: #787878;
	}

.card-content{
		font-weight: bold;
	}
	.responsive-img{
		box-sizing: border-box;
	}

	@media (max-width:768px) {
		.teampic, {
			height: 150px !important;
			width: 150px !important;
			margin: 10px;
			align-items: center;
		}

		.responsive-img{
			width: 150px;
			height: 150px;
			margin: 10px;
		}
	}

</style>
