
<?php include("header.php"); ?>

<!-- main-slider -->
<section class="w3l-main-slider position-relative" id="home">
	<div class="companies20-content">
		<div class="owl-one owl-carousel owl-theme">
		<?php

			$host= 'localhost';
			$user= 'root';
			$password= '';
			$dbname= 'movies_db';

			$conn= mysqli_connect($host, $user, $password, $dbname);

			$sql= "SELECT * FROM add_banner";
				$retval= mysqli_query($conn, $sql);

				if(mysqli_num_rows($retval) > 0)
				{ 
				$b_id = 0;
				while($row= mysqli_fetch_assoc($retval))
					{ 
					$b_id++;
				?>
			<div class="item">
				<li>
					<div class="slider-info banner-view bg bg2" style="background-image: url(assets/images/<?php echo $row["b_img"]; ?>);">
						<div class="banner-info">
							<h3><?php echo $row["m_name"]; ?></h3>

							<p><?php echo $row["b_discribtion"]; ?></span></p>

							<a href="#small-dialog<?php echo $b_id; ?>" class="popup-with-zoom-anim play-view1">
								<span class="video-play-icon">
									<span class="fa fa-play"></span>
								</span>
								<h6>Watch Trailer</h6>
							</a>
							<div id="small-dialog<?php echo $b_id; ?>" class="zoom-anim-dialog mfp-hide">
							<!-- <iframe width="853" height="480" src="https://www.youtube.com/embed/JfVOs4VSpmA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
								<?php echo $row["Trailer_Link"]; ?>
							</div>
						</div>
					</div>
				</li>
			</div>
			
			<?php  
				}

			  }

			  mysqli_close($conn);  

			  ?>   


		</div>
	</div>
</section>
<!-- main-slider -->
<!--grids-sec1-->
<section class="w3l-grids">
	<div class="grids-main py-5">
		<div class="container py-lg-3">
			<div class="headerhny-title">
				<div class="w3l-title-grids">
					<div class="headerhny-left">
						<h3 class="hny-title">Popular Movies</h3>
					</div>
					<div class="headerhny-right text-lg-right">
						<h4><a class="show-title" href="movies.php">Show all</a></h4>
					</div>
				</div>
			</div>
			<div class="w3l-populohny-grids">
			<?php

$host= 'localhost';
$user= 'root';
$password= '';
$dbname= 'movies_db';

$conn= mysqli_connect($host, $user, $password, $dbname);

$sql= "SELECT * FROM add_movies ORDER BY release_date DESC LIMIT 4";
$retval= mysqli_query($conn, $sql);

if(mysqli_num_rows($retval) > 0)
{ 

while($row= mysqli_fetch_assoc($retval))
	{ 
	
?>


<div class="item vhny-grid">
	<div class="box16 mb-0">
	
		<figure>
			<img class="img-fluid" src="admin/assets/poster/<?php echo $row["movie_poster"]; ?>" alt="">
		</figure>
		<a href=".Commando<?php echo $row["m_id"]; ?>" data-toggle="modal">
			<div class="box-content">
				<h3 class="title"><?php echo $row["movie_name"]; ?></h3>
				<h4> <span class="post"> </span>

					</span>

					<span class="post fa fa-heart text-right"></span>
				</h4>
			</div>
		</a>
		<!-- Modal -->
		<div class="modal fade Commando<?php echo $row["m_id"]; ?>" id="myModal" tabindex="-1" role="dialog"
			aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content" id="mymodalcontent">
					<div class="modal-header">
						<h4 class="modal-title" id="exampleModalLongTitle"><?php echo $row["movie_name"]; ?></h4>
						<button type="button" class="closebtn" data-dismiss="modal"
							aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body" id="dynamic-content">
						<div class="row">
							<div class="col-12 col-md-4">
								<img src="admin/assets/poster/<?php echo $row["movie_poster"]; ?>" class="img-fluid modalimg" alt="" />
							</div>
							<div class="col-12 col-md-8">
							<div class="d-flex flex-column justify-content-between h-100">
								<div>
									<p>
										<h3>Release Date&nbsp;:<?php echo $row["release_date"]; ?></h3>
									</p>
									<h4>Description</h4>
									<p>
											<?php echo $row["m_description"]; ?>
									</p>

								</div>
								
								<div class="bookbtn ">
									<button type="button" class="btn btn-success" 
									onclick="location.href='ticket-booking.php';">Book Now</button>
								</div>
							</div>
							
							</div>
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
		<!-- modal end -->
	</div>
</div>

<?php  
		}
		
	}
	
	mysqli_close($conn);  
	
	?>  
			</div>
		</div>
	</div>
</section>
<!--//grids-sec1-->



<?php include("footer.php"); ?>


<script type="text/javascript">
$(document).ready(function () {
	//Horizontal Tab
	$('#parentHorizontalTab').easyResponsiveTabs({
		type: 'default', //Types: default, vertical, accordion
		width: 'auto', //auto or any width like 600px
		fit: true, // 100% fit in a container
		tabidentify: 'hor_1', // The tab groups identifier
		activate: function (event) { // Callback function if tab is switched
			var $tab = $(this);
			var $info = $('#nested-tabInfo');
			var $name = $('span', $info);
			$name.text($tab.text());
			$info.show();
		}
	});
});
</script>

<script>
$(document).ready(function () {
	$('.owl-one').owlCarousel({
		stagePadding: 280,
		loop: true,
		margin: 20,
		nav: true,
		responsiveClass: true,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplaySpeed: 1000,
		autoplayHoverPause: false,
		responsive: {
			0: {
				items: 1,
				stagePadding: 40,
				nav: false
			},
			480: {
				items: 1,
				stagePadding: 60,
				nav: true
			},
			667: {
				items: 1,
				stagePadding: 80,
				nav: true
			},
			1000: {
				items: 1,
				nav: true
			}
		}
	})
})
</script>
<script>
$(document).ready(function () {
	$('.owl-three').owlCarousel({
		loop: true,
		margin: 20,
		nav: false,
		responsiveClass: true,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplaySpeed: 1000,
		autoplayHoverPause: false,
		responsive: {
			0: {
				items: 2,
				nav: false
			},
			480: {
				items: 2,
				nav: true
			},
			667: {
				items: 3,
				nav: true
			},
			1000: {
				items: 5,
				nav: true
			}
		}
	})
})
</script>
<script>
$(document).ready(function () {
	$('.owl-mid').owlCarousel({
		loop: true,
		margin: 0,
		nav: false,
		responsiveClass: true,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplaySpeed: 1000,
		autoplayHoverPause: false,
		responsive: {
			0: {
				items: 1,
				nav: false
			},
			480: {
				items: 1,
				nav: false
			},
			667: {
				items: 1,
				nav: true
			},
			1000: {
				items: 1,
				nav: true
			}
		}
	})
})
</script>
<script>
$(document).ready(function () {
	$('.popup-with-zoom-anim').magnificPopup({
		type: 'inline',

		fixedContentPos: false,
		fixedBgPos: true,

		overflowY: 'auto',

		closeBtnInside: true,
		preloader: false,

		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in'
	});

	$('.popup-with-move-anim').magnificPopup({
		type: 'inline',

		fixedContentPos: false,
		fixedBgPos: true,

		overflowY: 'auto',

		closeBtnInside: true,
		preloader: false,

		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-slide-bottom'
	});
});
</script>
<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
	$('.navbar-toggler').click(function () {
		$('body').toggleClass('noscroll');
	})
});
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
$(window).on("scroll", function () {
	var scroll = $(window).scrollTop();

	if (scroll >= 80) {
		$("#site-header").addClass("nav-fixed");
	} else {
		$("#site-header").removeClass("nav-fixed");
	}
});

//Main navigation Active Class Add Remove
$(".navbar-toggler").on("click", function () {
	$("header").toggleClass("active");
});
$(document).on("ready", function () {
	if ($(window).width() > 991) {
		$("header").removeClass("active");
	}
	$(window).on("resize", function () {
		if ($(window).width() > 991) {
			$("header").removeClass("active");
		}
	});
});
</script>

