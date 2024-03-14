<?php
include('header.php');
?>


<html>

<meta charset="utf-8" />
<title>Swiper demo</title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<style>
	.swiper {
		width: 100%;
		height: 100%;
	}

	.swiper-slide {
		text-align: center;
		font-size: 18px;
		background: #fff;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.swiper-slide img {
		display: block;
		width: 100%;
		height: 100%;
		object-fit: cover;
	}

	/* Additional styles for responsive design */
	.swiper-container {
		width: 100%;
		margin: auto;
	}

	.swiper-slide img {
		width: 100%;
		height: auto;
	}

	.card:hover {
		transform: scale(1.02);
		transition: 0.3s;
	}

	@media (max-width: 767px) {
		.swiper-container {
			max-width: 80%;
		}

		.mySwiper {
			max-height: 40%;
		}
	}

	@import url(https://fonts.googleapis.com/css?family=Raleway:400);
	@import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);

	figure.snip1193 {
		font-family: 'Raleway', Arial, sans-serif;
		color: #fff;
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
		position: relative;
		justify-content: center;
		align-items: center;
		overflow: hidden;
		margin: 10px;
		min-width: 220px;
		max-width: 310px;
		max-height: 220px;
		width: 100%;
		background: #000000;
		text-align: center;
		border-radius: 8px;
		box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
	}

	.figure-container {
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
		margin: -15px;
		/* To offset default padding of Bootstrap columns */
		padding: 70px;




	}


	figure.snip1193 * {
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
		-webkit-transition: all 0.6s ease;
		transition: all 0.6s ease;
	}

	figure.snip1193 img {
		opacity: 1;
		width: 100%;
		display: block;
	}

	figure.snip1193 figcaption {
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		margin: 10px 12px 5px;
		position: absolute;
		justify-content: center;
	}

	figure.snip1193 h4,
	figure.snip1193 i {
		color: #ffffff;
	}

	figure.snip1193 h4 {
		font-weight: 400;
		left: 0;
		width: 100%;
		margin: 0;
		text-transform: uppercase;
		letter-spacing: 1px;
	}

	figure.snip1193 i {
		font-size: 22px;
	}

	figure.snip1193 a {
		text-decoration: none;
	}

	figure.snip1193 .bottom-left,
	figure.snip1193 .bottom-right {
		position: absolute;
		bottom: 5px;
		opacity: 0;
	}

	figure.snip1193 .bottom-left {
		left: 5px;
		-webkit-transform: translate(-50%, 50%);
		transform: translate(-50%, 50%);
	}

	figure.snip1193 .bottom-right {
		right: 5px;
		-webkit-transform: translate(50%, 50%);
		transform: translate(50%, 50%);
	}

	figure.snip1193:hover img,
	figure.snip1193.hover img {
		opacity: 0.6;
		-webkit-transform: scale(1.1);
		transform: scale(1.1);
	}

	figure.snip1193:hover figcaption .bottom-left,
	figure.snip1193.hover figcaption .bottom-left,
	figure.snip1193:hover figcaption .bottom-right,
	figure.snip1193.hover figcaption .bottom-right {
		-webkit-transform: translate(0, 0);
		transform: translate(0, 0);
		opacity: 1;
	}


	/* nowshowing */

	.divider {
		border: 1px solid #ccc;
	}

	img {
		width: 100%;
	}

	.swiper-container {
		width: 100%;
		height: 100%;
	}

	.swiper-slide {
		text-align: center;
		font-size: 18px;
		background: #fff;
		/* Center slide text vertically */
		display: -webkit-box;
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;
		-webkit-box-pack: center;
		-ms-flex-pack: center;
		-webkit-justify-content: center;
		justify-content: center;
		-webkit-box-align: center;
		-ms-flex-align: center;
		-webkit-align-items: center;
		align-items: center;

	}

	.swiper-container {
		width: 100%;
		margin: auto;
		position: relative;
		/* Add relative position */
	}

	.swiper-slide {
		text-align: center;
		font-size: 18px;

		/* Center slide text vertically */
		display: flex;
		justify-content: center;
		align-items: center;
	}

	@media (max-width: 767px) {
		.imageRow {
			margin-top: 10px;
		}

		.movie-card {
			height: 60%;
		}

		.movie-card img {
			width: 100%;
			height: 50%;
		}

		.btn-details {
			margin-top: 5px;
			display: flex;
			/* Use flexbox */
			align-items: center;
			justify-content: center;
			text-align: center;
		}


		/* upcomingmovies */
</style>

<body>

	<div class="swiper mySwiper" style="margin-top: 40px;height:600px;">
		<div class="swiper-wrapper">
			<div class="swiper-slide"><img src="images/sw2.jpg" alt="" height="400px"></div>
			<div class="swiper-slide"><img src="images/ns4.jpg" alt="" height="400px"></div>
			<div class="swiper-slide"><img src="images/sw3.jpg" alt="" height="400px"></div>
			<div class="swiper-slide"><img src="images/up2.jpg" alt="" height="400px"></div>


		</div>
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
	</div>










	/* <!-- now showing --> */




	<div class="container text-center">
		<h2
			style="color: #555; text-align: center; color: white; font-family: Open Ssans, Helvetica, sans-serif; padding: 30px; margin-top: 40px;margin-bottom:20px ;border-bottom: 3px solid #ff5733;">
			NOW SHOWING
		</h2>




		<div class="card-deck">
			<div class="card">
				<img class="card-img-top" src="images/ns1.jpg" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Kung Fu Panda 4</h5>
					<p class="card-text">Cast: Jack BlackAwkwafinaViola Davis
					</p>
					<p class="card-text"><small class="text-muted"></small></p>
					<a href="about.php?id=21" class="btn btn-danger"
						style="margin-top:9px;width:110px;text-align:center;margin-right:10px;font-family: Open Ssans, Helvetica, sans-serif;padding:5;font-size:16pt">Details</a>

				</div>
			</div>
			<div class="card">
				<img class="card-img-top" src="images/dune1.png" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Dune Part II</h5>
					<p class="card-text">Cast : Timothee Chalamet, Zendaya, Rebecca Ferguson
					</p>
					<p class="card-text"><small class="text-muted"></small></p>
					<a href="about.php?id=20" class="btn btn-danger"
						style="margin-top:9px;width:110px;text-align:center;margin-right:10px;font-family: Open Ssans, Helvetica, sans-serif;padding:5;font-size:16pt">Details</a>

				</div>
			</div>
			<div class="card">
				<img class="card-img-top" src="images/girl.jpg" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Mean Girl</h5>
					<p class="card-text">Cast: Angourie Rice, Renee Rapp, Aulii Cravalho
					</p>
					<p class="card-text"><small class="text-muted"></small></p>
					<a href="about.php?id=24" class="btn btn-danger"
						style="margin-top:9px;width:110px;text-align:center;margin-right:10px;font-family: Open Ssans, Helvetica, sans-serif;padding:5;font-size:16pt">Details</a>

				</div>
			</div>
			<div class="card">
				<img class="card-img-top" src="images/ns4.jpg" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Drive Away Dolls</h5>
					<p class="card-text">Cast: Margaret QualleyGeraldine ViswanathanBeanie
					</p>
					<p class="card-text"><small class="text-muted"></small></p>
					<a href="about.php?id=23" class="btn btn-danger"
						style="margin-top:9px;width:110px;text-align:center;margin-right:10px;font-family: Open Ssans, Helvetica, sans-serif;padding:5;font-size:16pt">Details</a>

				</div>
			</div>
		</div>







		<!--- upcoming movies --->

		<div class="container text-center">
			<h2
				style="color: #555; text-align: center; color: white; font-family: Open Ssans, Helvetica, sans-serif; padding: 30px; margin-top: 40px;margin-bottom:20px ;border-bottom: 3px solid #ff5733;">
				UPCOMING MOVIES
			</h2>

			<div class="swiper mySwiper" style="margin-top: 40px;height:500px">
				<div class="swiper-wrapper">
				<div class="swiper-slide"><img src="images/sw3.jpg" alt=""></div>
					<div class="swiper-slide"><img src="images/t;2.jpg" alt=""></div>
					<div class="swiper-slide"><img src="images/up3.jpg" alt=""></div>
					<div class="swiper-slide"><img src="images/tl1.jpg" alt=""></div>
					
					<div class="swiper-slide"><img src="images/up4.jpg" alt=""></div>
				


				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>


		</div>

		/* <!-- MOVIE TRAILER --> */


		<div class="container text-center">
			<h2
				style="color: #555; text-align: center; color: white; font-family: Open Ssans, Helvetica, sans-serif; padding: 30px; margin-top: 40px;margin-bottom:20px ;border-bottom: 3px solid #ff5733;">
				MOVIES TRAILERS
			</h2>

		</div>

		<div class="figure-container" style="margin-top:-60px">

			<figure class="snip1193">
			
				<img src="images/tl1.jpg" alt="sample31">
				<figcaption>
					<a href="https://www.youtube.com/watch?v=LEjhY15eCx0&t=2s">
					<h4>Inside Out 2</h4></a>
					<a href="" class="bottom-left"><i class="ion-ios-chatboxes-outline"></i></a><a href=""
						class="bottom-right"><i class="ion-ios-telephone-outline"></i></a>
				
				</figcaption>
			
				
			</figure>
		

			<figure class="snip1193">
				<img src="images/t;2.jpg" alt="sample68" />
				<figcaption>
				<a href="https://www.youtube.com/watch?v=qQlr9-rF32A">
					<h4>Despicable me 4</h4></a>
					<a href="#" class="bottom-left"><i class="ion-ios-chatboxes-outline"></i></a><a href="#"
						class="bottom-right"><i class="ion-ios-telephone-outline"></i></a>
				</figcaption>
			</figure>

			<figure class="snip1193">
				<img src="images/tl3.jpg" alt="sample69" />
				<figcaption>
				<a href="https://www.youtube.com/watch?v=wCLqwRsjYLs">
					<h4>Moana 2</h4></a>
					<a href="#" class="bottom-left"><i class="ion-ios-chatboxes-outline"></i></a><a href="#"
						class="bottom-right"><i class="ion-ios-telephone-outline"></i></a>
				</figcaption>
			</figure>


		</div>



	</div>

	</div>








<script>

const video = document.querySelector("video");

function startPreview() {
  video.muted = true;
  video.currentTime = 1;
  video.playbackRate = 0.5;
  video.play();
}

function stopPreview() {
  video.currentTime = 0;
  video.playbackRate = 1;
  video.pause();
}

let previewTimeout = null;

video.addEventListener("mouseenter", () => {
  startPreview();
  previewTimeout = setTimeout(stopPreview, 4000);
});

video.addEventListener("mouseleave", () => {
  clearTimeout(previewTimeout);
  previewTimeout = null;
  stopPreview();
});


</script>










	<!-- Swiper JS -->
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

	<!-- Initialize Swiper -->
	<script>
		var swiper1 = new Swiper(".mySwiper", {
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
		});

		$(".hover").mouseleave(
			function () {
				$(this).removeClass("hover");
			}
		);

		var swiper2 = new Swiper('.swiper-container', {
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		});
	</script>

	


	<?php include('footer.php'); ?>
	</div>
	<?php include('searchbar.php'); ?>