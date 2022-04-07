<?php include("header.php"); ?>


	<!--/breadcrumbs -->
	<div class="w3l-breadcrumbs">
		<nav id="breadcrumbs" class="breadcrumbs">
			<div class="container page-wrapper">
				<a href="index.php">Home</a> » <span class="breadcrumb_last" aria-current="page">movies</span>
			</div>
		</nav>
	</div>
	
	<section class="w3l-grids">
		<div class="grids-main py-5">
			<div class="container py-lg-4">
				<div class="headerhny-title">
					<div class="w3l-title-grids">
						<div class="headerhny-left">
							<h3 class="hny-title">Latest Movies</h3>
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

						$sql= "SELECT * FROM add_movies ORDER BY release_date DESC LIMIT 6";
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

<?php include("footer.php"); ?>

