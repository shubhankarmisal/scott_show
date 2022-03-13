<?php include("header.php"); ?>


	<!--/breadcrumbs -->
	<div class="w3l-breadcrumbs">
		<nav id="breadcrumbs" class="breadcrumbs">
			<div class="container page-wrapper">
				<a href="index.php">Home</a> » <span class="breadcrumb_last" aria-current="page">movies</span>
			</div>
		</nav>
	</div>
	<!--/movies -->
	<!--grids-sec1-->
	<!-- <section class="w3l-grids">
		<div class="grids-main py-4">
			<div class="container py-lg-4">
				<div class="headerhny-title">
					<h3 class="hny-title">Popular Movies</h3>
				</div>
				<div class="owl-four owl-carousel owl-theme">
					<div class="item vhny-grid">
						<div class="box16">
							<a href="#">
								<figure>
									<img class="img-fluid" src="assets/images/banner1.jpg" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">End Game</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
						<div class="box16 mt-4">
							<a href="#">
								<figure>
									<img class="img-fluid" src="assets/images/banner2.jpg" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Frozen 2</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<a href="#">
								<figure>
									<img class="img-fluid" src="assets/images/banner3.jpg" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Doctor Sleep</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
						<div class="box16 mt-4">
							<a href="#">
								<figure>
									<img class="img-fluid" src="assets/images/banner4.jpg" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Toy story 4</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<a href="#">
								<figure>
									<img class="img-fluid" src="assets/images/banner1.jpg" alt="">

								</figure>
								<div class="box-content">
									<h3 class="title">Rocketman</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
						<div class="box16 mt-4">
							<a href="#">
								<figure>
									<img class="img-fluid" src="assets/images/banner2.jpg" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title">Frozen 2</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
								<span class="fa fa-play video-icon" aria-hidden="true"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!--grids-sec1 -->
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

						$sql= "SELECT * FROM add_movies";
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
									<a href=".Commando3" data-toggle="modal">
										<div class="box-content">
											<h3 class="title"><?php echo $row["movie_name"]; ?></h3>
											<h4> <span class="post"> </span>

												</span>

												<span class="post fa fa-heart text-right"></span>
											</h4>
										</div>
									</a>
									<!-- Modal -->
									<div class="modal fade Commando3" id="myModal" tabindex="-1" role="dialog"
										aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content" id="mymodalcontent">
												<div class="modal-header">
													<h4 class="modal-title" id="exampleModalLongTitle"><?php echo $row["movie_name"]; ?></h4>
													<button type="button" class="closebtn" data-dismiss="modal"
														aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body" id="dynamic-content">
													<img src="admin/assets/poster/<?php echo $row["movie_poster"]; ?>" class="img-fluid modalimg" alt="" />
													<p>
														<h3>Release Date&nbsp;:<?php echo $row["release_date"]; ?></h3>
													</p>
													<h4>Description</h4>
													<p>
													<?php echo $row["m_description"]; ?>
													</p>
												</div>
												<div class="bookbtn">
													<button type="button" class="btn btn-success"
													onclick="location.href='ticket-booking.html';">Book Now</button>
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
					
				<!-- ***********************************Adults Section ************************************** -->
				<div class="w3l-title-grids">
					<div class="headerhny-left">
						<h3 class="hny-title">Adults</h3>
					</div>
					<div class="headerhny-right text-lg-right">
						<h4><a class="show-title" href="movies.html">Show all</a></h4>
					</div>
				</div>
				<div class="w3l-populohny-grids">
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<figure>
								<img class="img-fluid" src="assets/images/m1.jpg" alt="">
							</figure>
							<a href=".Rocketman" data-toggle="modal">
								<div class="box-content">
									<h3 class="title">Rocketman</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 1min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
							</a>
							<!-- Modal -->
							<div class="modal fade Rocketman" id="myModal" tabindex="-1" role="dialog"
								aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content" id="mymodalcontent">
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLongTitle">DETAILS</h4>
											<button type="button" class="closebtn" data-dismiss="modal"
												aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" id="dynamic-content">
											<img src="assets/images/m1.jpg" class="img-fluid modalimg" alt="" />
											<p>
												<h3>Release Date&nbsp;:31 May 2019 </h3>
												<h3>Venue&nbsp;:Cg Road </h3>
											</p>
											<h4>About Movie</h4>
											<p>
												Rocketman is a 2019 biographical musical film based on the life of
												British musician Elton John. Directed by Dexter Fletcher and written by
												Lee Hall, it stars Taron Egerton as Elton John, with Jamie Bell as
												Bernie Taupin, Richard Madden as John Reid, and Bryce Dallas Howard as
												Sheila Eileen, John's mother. The film follows John in his early days in
												England as a prodigy at the Royal Academy of Music through his musical
												partnership with Taupin, and is titled after John's 1972 song "Rocket
												Man".
											</p>
											<h4>Star Cast</h4>
											<p>
												Taron Egerton as Elton John<br />
												Jamie Bell as Bernie Taupin<br />
												Richard Madden as John Reid<br />
												Bryce Dallas Howard as Sheila Dwight<br />
												Gemma Jones as Ivy, Elton's grandmother
											</p>
										</div>
										<div class="bookbtn">
											<!-- window.open('ticket-booking.html','_blank'); -->
											<button type="button" class="btn btn-success"
												onclick="location.href='ticket-booking.html';">Book</button>
										</div>
									</div>
								</div>
							</div>
							<!-- modal end -->

						</div>
					</div>

					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<figure>
								<img class="img-fluid" src="assets/images/m2.jpg" alt="">
							</figure>
							<a href=".Doctorsleep" data-toggle="modal">
								<div class="box-content">
									<h3 class="title">Doctor Sleep</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 32min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
							</a>
							<!-- Modal -->
							<div class="modal fade Doctorsleep" id="myModal" tabindex="-1" role="dialog"
								aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content" id="mymodalcontent">
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLongTitle">DETAILS</h4>
											<button type="button" class="closebtn" data-dismiss="modal"
												aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" id="dynamic-content">
											<img src="assets/images/m2.jpg" class="img-fluid modalimg" alt="" />
											<p>
												<h3>Release Date&nbsp;:October 21, 2019 </h3>
												<h3>Venue&nbsp;:Cg Road </h3>
											</p>
											<h4>About Movie</h4>
											<p>
												Doctor Sleep is a 2019 American supernatural horror film written and
												directed by Mike Flanagan. It is based on the 2013 novel of the same
												name by Stephen King, a sequel to King's 1977 novel The Shining. The
												film, which also serves as a direct sequel to the 1980 film adaptation
												of The Shining, directed by Stanley Kubrick, is set several decades
												after the events of the original and combines elements of the 1977 novel
												as well. Ewan McGregor plays the lead role as Danny Torrance, a man with
												psychic abilities who struggles with childhood trauma. Rebecca Ferguson,
												Kyliegh Curran, and Cliff Curtis have supporting roles.[6][7] In the
												film, Dan Torrance, now an adult, must protect a young girl with similar
												powers from a cult known as the True Knot, whose members prey on
												children who possess the shining to extend their own lives.
											</p>
											<h4>Star Cast</h4>
											<p>
												Ewan McGregor as Danny Torrance<br />
												Rebecca Ferguson as Rose the Hat<br />
												Cliff Curtis as Billy Freeman<br />
												Carl Lumbly as Dick Hallorann<br />
												Zahn McClarnon as Crow Daddy
											</p>
										</div>
										<div class="bookbtn">
											<button type="button" class="btn btn-success"
												onclick="location.href='ticket-booking.html';">Book</button>
										</div>
									</div>
								</div>
							</div>
							<!-- modal end -->

						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<figure>
								<img class="img-fluid" src="assets/images/ks1.png" alt="">
							</figure>
							<a href=".kabir" data-toggle="modal">
								<div class="box-content">
									<h3 class="title">Kabir Singh</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 52min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
							</a>
							<!-- Modal -->
							<div class="modal fade kabir" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content" id="mymodalcontent">
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLongTitle">DETAILS</h4>
											<button type="button" class="closebtn" data-dismiss="modal"
												aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" id="dynamic-content">
											<img src="assets/images/ks1.png" class="img-fluid modalimg" alt="" />
											<p>
												<h3>Release Date&nbsp;:21 June 2019 </h3>
												<h3>Venue&nbsp;:Cg Road </h3>
											</p>
											<h4>About Movie</h4>
											<p>
												Kabir Singh is a 2019 Indian Hindi-language romantic drama film written
												and directed by Sandeep Reddy Vanga and jointly produced by Bhushan
												Kumar, Murad Khetani, Krishan Kumar Ashwin Varde and co-produced by
												Vinod Bhanushali under T-Series Films and Cine1 Studios. A remake of
												Vanga's own Telugu film Arjun Reddy (2017), it stars Shahid Kapoor in
												the titular role as a surgeon who spirals into self-destruction when his
												girlfriend, Preeti, played by Kiara Advani, marries someone else. Adil
												Hussain, Nikita Dutta, Arjan Bajwa, Suresh Oberoi, Dolly Minhas, Suparna
												Marwah, Anurag Arora, Soham Majumdar, Kunal Thakur, Anusha Sampath, Amit
												Sharma and Kamini Kaushal feature in supporting roles.
											</p>
											<h4>Star Cast</h4>
											<p>
												Shahid Kapoor as Dr Kabir Rajdheer Singh<br />
												Kiara Advani as Dr Preeti Sikka<br />
												Soham Majumdar as Dr Shiva<br />
												Arjan Bajwa as Karan Rajdheer Singh, Kabir's brother<br />
												Nikita Dutta as Jiah Sharma
											</p>
										</div>
										<div class="bookbtn">
											<button type="button" class="btn btn-success"
												onclick="location.href='ticket-booking.html';">Book</button>
										</div>
									</div>
								</div>
							</div>
							<!-- modal end -->

						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<figure>
								<img class="img-fluid" src="assets/images/m9.jpg" alt="">
							</figure>
							<a href=".Joker" data-toggle="modal">
								<div class="box-content">
									<h3 class="title">Joker</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 2min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
							</a>
							<!-- Modal -->
							<div class="modal fade Joker" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content" id="mymodalcontent">
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLongTitle">DETAILS</h4>
											<button type="button" class="closebtn" data-dismiss="modal"
												aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" id="dynamic-content">
											<img src="assets/images/m9.jpg" class="img-fluid modalimg" alt="" />
											<p>
												<h3>Release Date&nbsp;:October 4, 2019 </h3>
												<h3>Venue&nbsp;:Cg Road </h3>
											</p>
											<h4>About Movie</h4>
											<p>
												Joker is a 2019 American psychological thriller film directed and
												produced by Todd Phillips, who co-wrote the screenplay with Scott
												Silver. The film, based on DC Comics characters, stars Joaquin Phoenix
												as The Joker and provides an alternative origin story for the character.
												Set in 1981, it follows Arthur Fleck, a failed clown and stand-up
												comedian whose descent into insanity and nihilism inspires a violent
												counter-cultural revolution against the wealthy in a decaying Gotham
												City. Robert De Niro, Zazie Beetz, Frances Conroy, Brett Cullen, Glenn
												Fleshler, Bill Camp, Shea Whigham, and Marc Maron appear in supporting
												roles. Joker was produced by Warner Bros. Pictures, DC Films, and Joint
												Effort, in association with Bron Creative and Village Roadshow Pictures,
												and distributed by Warner Bros.
											</p>
											<h4>Star Cast</h4>
											<p>
												Joaquin Phoenix as Arthur Fleck / Joker<br />
												Robert De Niro as Murray Franklin<br />
												Zazie Beetz as Sophie Dumond<br />
												Frances Conroy as Penny Fleck<br />
											</p>
										</div>
										<div class="bookbtn">
											<button type="button" class="btn btn-success"
												onclick="location.href='ticket-booking.html';">Book</button>
										</div>
									</div>
								</div>
							</div>
							<!-- modal end -->

						</div>
					</div>
				</div>
				<!-- ***********************************kids Section ************************************** -->
				<div class="w3l-title-grids">
					<div class="headerhny-left">
						<h3 class="hny-title">Kids</h3>
					</div>
					<div class="headerhny-right text-lg-right">
						<h4><a class="show-title" href="movies.html">Show all</a></h4>
					</div>
				</div>
				<div class="w3l-populohny-grids">
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<figure>
								<img class="img-fluid" src="assets/images/tzp.png" alt="">
							</figure>
							<a href=".tzp" data-toggle="modal">
								<div class="box-content">
									<h3 class="title">Taare Zameen Par</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 44min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
							</a>
							<!-- Modal -->
							<div class="modal fade tzp" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content" id="mymodalcontent">
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLongTitle">DETAILS</h4>
											<button type="button" class="closebtn" data-dismiss="modal"
												aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" id="dynamic-content">
											<img src="assets/images/tzp.png" class="img-fluid modalimg" alt="" />
											<p>
												<h3>Release Date&nbsp;:21 December 2007 </h3>
												<h3>Venue&nbsp;:Cg Road </h3>
											</p>
											<h4>About Movie</h4>
											<p>
												Taare Zameen Par (titled Little Stars on Earth internationally) is a
												2007 Indian Hindi-language drama film produced and directed by Aamir
												Khan. The film explores the life and imagination of Ishaan, an
												8-year-old dyslexic child. Although he excels in art, his poor academic
												performance leads his parents to send him to a boarding school. Ishaan's
												new art teacher suspects that he is dyslexic and helps him to overcome
												his reading disorder. Darsheel Safary stars as 8-year-old Ishaan, and
												Aamir Khan plays his art teacher.
											</p>
											<h4>Star Cast</h4>
											<p>
												Darsheel Safary as Ishaan 'Inu' Awasthi<br />
												Aamir Khan as Ram Shankar Nikumbh<br />
												Tanay Chheda as Rajan Damodran<br />
												Tisca Chopra as Maya Awasthi<br />
												Vipin Sharma as Nandkishore Awasthi
											</p>
										</div>
										<div class="bookbtn">
											<button type="button" class="btn btn-success"
												onclick="location.href='ticket-booking.html';">Book</button>
										</div>
									</div>
								</div>
							</div>
							<!-- modal end -->

						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<figure>
								<img class="img-fluid" src="assets/images/cp.png" alt="">
							</figure>
							<a href=".Chillarparty" data-toggle="modal">
								<div class="box-content">
									<h3 class="title">Chillar Party</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 59min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
							</a>
							<!-- Modal -->
							<div class="modal fade Chillarparty" id="myModal" tabindex="-1" role="dialog"
								aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content" id="mymodalcontent">
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLongTitle">DETAILS</h4>
											<button type="button" class="closebtn" data-dismiss="modal"
												aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" id="dynamic-content">
											<img src="assets/images/cp.png" class="img-fluid modalimg" alt="" />
											<p>
												<h3>Release Date&nbsp;:8 July 2011 </h3>
												<h3>Venue&nbsp;:Cg Road </h3>
											</p>
											<h4>About Movie</h4>
											<p>
												Chillar Party is a 2011 Indian family comedy
												film directed by Nitesh Tiwari and Vikas Bahl and produced by Ronnie
												Screwvala under UTV Motion Pictures and Salman Khan under his SKBH
												Productions (Salman Khan Being Human Productions).The film has a
												multiple-cast of debuting child-artists particularly named after movies
												such as, "Silencer", "Aflatoon", "Shaolin" etc. It also features Ranbir
												Kapoor in an item-number.Chillar Party won the 2011 National Film
												Award for Best Children's Film.
											</p>
											<h4>Star Cast</h4>
											<p>
												Irfan Khan as Fatka<br />
												Sanath Menon as Arjun / Encyclopedia<br />
												Rohan Grover as Rishabh / Ronny / Ramashanker Iyer / Akram<br />
												Naman Jain as Balwan Jhangiani / Jhangiya<br />
												Araav Khanna as Aflatoon
											</p>
										</div>
										<div class="bookbtn">
											<button type="button" class="btn btn-success"
												onclick="location.href='ticket-booking.html';">Book</button>
										</div>
									</div>
								</div>
							</div>
							<!-- modal end -->

						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<figure>
								<img class="img-fluid" src="assets/images/ganesha.png" alt="">
							</figure>
							<a href=".ganesha" data-toggle="modal">
								<div class="box-content">
									<h3 class="title">Ganesha</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 3 Hr 10min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
							</a>
							<!-- Modal -->
							<div class="modal fade ganesha" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content" id="mymodalcontent">
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLongTitle">DETAILS</h4>
											<button type="button" class="closebtn" data-dismiss="modal"
												aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" id="dynamic-content">
											<img src="assets/images/ganesha.png" class="img-fluid modalimg" alt="" />
											<p>
												<h3>Release Date&nbsp;:6 July 2007 </h3>
												<h3>Venue&nbsp;:Cg Road </h3>
											</p>
											<h4>About Movie</h4>
											<p>
												My Friend Ganesha is a 2008 Indian Hindi-language film written and
												directed by Rajiv S Ruia and produced by Deepak Bhanushali, Manish
												Ruparel, Raman Trikha, Mitesh Mehta, and Ronak Bhagat. It stars Ahsaas
												Channa, Kiran Janjani, Sheetal Shah and Upasana Singh.
											</p>
											<h4>Star Cast</h4>
											<p>
												Ahsaas Channa as Ashu<br />
												Kiran Janjani as Aditya, Ashu's father<br />
												Sheetal Shah as Aarti, Ashu's mother<br />
												Arun Bakshi as Ashu's Principal<br />
												Mushtaq Khan as Police Inspector
											</p>
										</div>
										<div class="bookbtn">
											<button type="button" class="btn btn-success"
												onclick="location.href='ticket-booking.html';">Book</button>
										</div>
									</div>
								</div>
							</div>
							<!-- modal end -->
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<figure>
								<img class="img-fluid" src="assets/images/m8.jpg" alt="">
							</figure>
							<a href=".Toystory" data-toggle="modal">
								<div class="box-content">
									<h3 class="title">Toy Story 4</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 59min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
							</a>
							<!-- Modal -->
							<div class="modal fade Toystory" id="myModal" tabindex="-1" role="dialog"
								aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content" id="mymodalcontent">
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLongTitle">DETAILS</h4>
											<button type="button" class="closebtn" data-dismiss="modal"
												aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" id="dynamic-content">
											<img src="assets/images/m8.jpg" class="img-fluid modalimg" alt="" />
											<p>
												<h3>Release Date&nbsp;:June 21, 2019 </h3>
												<h3>Venue&nbsp;:Cg Road </h3>
											</p>
											<h4>About Movie</h4>
											<p>
												Toy Story 4 is a 2019 American computer-animated comedy film produced by
												Pixar Animation Studios and released by Walt Disney Pictures. It is the
												fourth and final installment in Pixar's Toy Story series and the sequel
												to Toy Story 3 (2010). It was directed by Josh Cooley (in his feature
												directorial debut) from a screenplay by Andrew Stanton and Stephany
												Folsom; the three also conceived the story alongside John Lasseter,
												Rashida Jones, Will McCormack, Valerie LaPointe, and Martin Hynes.
												Tom Hanks, Tim Allen, Annie Potts, Joan Cusack, Don Rickles (via archive
												recordings),Wallace Shawn, John Ratzenberger, Estelle Harris, Blake
												Clark, Bonnie Hunt, Jeff Garlin, Kristen Schaal and Timothy Dalton
												reprise their character roles from the first three films. They are
												joined by Tony Hale, Keegan-Michael Key, Jordan Peele, Christina
												Hendricks, Keanu Reeves, and Ally Maki, who voice the new characters.
											</p>
											<h4>Star Cast</h4>
											<p>
												Madeleine McGraw as Bonnie<br />
												Maliah Bargas-Good as Lost Girl<br />
												Tim Allen as Buzz Lightyear<br />
												Tom Hanks as Woody<br />
											</p>
										</div>
										<div class="bookbtn">
											<button type="button" class="btn btn-success"
												onclick="location.href='ticket-booking.html';">Book</button>
										</div>
									</div>
								</div>
							</div>
							<!-- modal end -->
						</div>
					</div>

				</div>
				<!-- ***********************************Gujarati Section ************************************** -->
				<div class="w3l-title-grids">
					<div class="headerhny-left">
						<h3 class="hny-title">Gujarati</h3>
					</div>
					<div class="headerhny-right text-lg-right">
						<h4><a class="show-title" href="movies.html">Show all</a></h4>
					</div>
				</div>
				<div class="w3l-populohny-grids">
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<figure>
								<img class="img-fluid" src="assets/images/gk.png" alt="">
							</figure>
							<a href=".gk" data-toggle="modal">
								<div class="box-content">
									<h3 class="title">Golkeri</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 8min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
							</a>
							<!-- Modal -->
							<div class="modal fade gk" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content" id="mymodalcontent">
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLongTitle">DETAILS</h4>
											<button type="button" class="closebtn" data-dismiss="modal"
												aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" id="dynamic-content">
											<img src="assets/images/gk.png" class="img-fluid modalimg" alt="" />
											<p>
												<h3>Release Date &nbsp;: 28 February 2020</h3>
												<h3>Venue&nbsp;:Cg Road </h3>
											</p>
											<h4>About Movie</h4>
											<p>
												Golkeri (Mango pickle) is a Gujarati comedy drama film directed by Viral
												Shah and produced by Manasi Parekh and Parthiv Gohil under banner of
												Soul Sutra Studio. It is written by Viral Shah and Amatya. The film
												starring Malhar Thakar and Manasi Parekh is a remake of 2017 Marathi
												film Muramba
											</p>
											<h4>Star Cast</h4>
											<p>
												Malhar Thakar as Sahil Mohanbhai Sutariya<br />
												Manasi Parekh as Harshita<br />
												Sachin Khedekar as Mohanbhai Sutariya<br />
												Vandana Pathak as Jyotnsa Sutariya<br />
												Dharmesh Vyas
											</p>
										</div>
										<div class="bookbtn">
											<button type="button" class="btn btn-success"
												onclick="location.href='ticket-booking.html';">Book</button>
										</div>
									</div>
								</div>
							</div>
							<!-- modal end -->

						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<figure>
								<img class="img-fluid" src="assets/images/gujjubhai.jpeg" alt="">
							</figure>
							<a href=".gujjubhai" data-toggle="modal">
								<div class="box-content">
									<h3 class="title">Gujjubhai : The Great</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 25min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
							</a>
							<!-- Modal -->
							<div class="modal fade gujjubhai" id="myModal" tabindex="-1" role="dialog"
								aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content" id="mymodalcontent">
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLongTitle">DETAILS</h4>
											<button type="button" class="closebtn" data-dismiss="modal"
												aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" id="dynamic-content">
											<img src="assets/images/gujjubhai.jpeg" class="img-fluid modalimg" alt="" />
											<p>
												<h3>Release Date &nbsp;: 18 September 2015</h3>
												<h3>Venue&nbsp;:Cg Road </h3>
											</p>
											<h4>About Movie</h4>
											<p>
												Gujjubhai The Great (Gujarati: ગુજ્જુભાઈ ધ ગ્રેટ) is a 2015 Gujarati
												comedy film directed by Ishaan Randeria. It is presented by Nakshatra
												Entertainment and produced by Devendra N. Patel in association with
												Siddharth Randeria Productions. The film is a comedy drama based on the
												super-hit franchise of Gujjubhai stage-plays. The film stars Siddharth
												Randeria, Jimit Trivedi, Swati Shah, Dipna Patel, Alekh Sangal, Sunil
												Vishrani, Khatera Hakimi and Dharmesh Vyas. The film released on 18
												September.
											</p>
											<h4>Star Cast</h4>
											<p>
												Siddharth Randeria as Hasmukh Gandhi<br />
												Swati Shah as Pramila Gandhi<br />
												Dipna Patel as Tanisha Gandhi<br />
												Jimit Trivedi as Bakul Buch<br />
												Alekh Sangal as Montu
											</p>
										</div>
										<div class="bookbtn">
											<button type="button" class="btn btn-success"
												onclick="location.href='ticket-booking.html';">Book</button>
										</div>
									</div>
								</div>
							</div>
							<!-- modal end -->

						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<figure>
								<img class="img-fluid" src="assets/images/Thaijase.png" alt="">
							</figure>
							<a href=".thaijase" data-toggle="modal">
								<div class="box-content">
									<h3 class="title">Thai Jashe</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 35min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
							</a>
							<!-- Modal -->
							<div class="modal fade thaijase" id="myModal" tabindex="-1" role="dialog"
								aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content" id="mymodalcontent">
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLongTitle">DETAILS</h4>
											<button type="button" class="closebtn" data-dismiss="modal"
												aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" id="dynamic-content">
											<img src="assets/images/Thaijase.png" class="img-fluid modalimg" alt="" />
											<p>
												<h3>Release Date &nbsp;: 3 June 2016</h3>
												<h3>Venue&nbsp;:Cg Road </h3>
											</p>
											<h4>About Movie</h4>
											<p>
												Thai Jashe! (English: Will Be Done!) is a 2016 Indian Gujarati film
												written and directed by Nirav Barot.It is about the struggles of
												a middle class man to achieve his goals in the metrocity Ahmedabad. The
												film stars Manoj Joshi,Malhar Thakar, and Monal Gajjar. The film was
												released on 3 June 2016.
											</p>
											<h4>Star Cast</h4>
											<p>
												Malhar Thakar as Pranav Joshi<br />
												Monal Gajjar as Kajal Bhatt<br />
												Manoj Joshi as Chandrakantbhai Joshi<br />
												Kumkum Das as Sarojben Joshi<br />
												Hemang Dave as Deepak Dua
											</p>
										</div>
										<div class="bookbtn">
											<button type="button" class="btn btn-success"
												onclick="location.href='ticket-booking.html';">Book</button>
										</div>
									</div>
								</div>
							</div>
							<!-- modal end -->
						</div>
					</div>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<figure>
								<img class="img-fluid" src="assets/images/reva.png" alt="">
							</figure>
							<a href=".Reva" data-toggle="modal">
								<div class="box-content">
									<h3 class="title">Reva</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 38min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
							</a>
							<!-- Modal -->
							<div class="modal fade Reva" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content" id="mymodalcontent">
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLongTitle">DETAILS</h4>
											<button type="button" class="closebtn" data-dismiss="modal"
												aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" id="dynamic-content">
											<img src="assets/images/reva.png" class="img-fluid modalimg" alt="" />
											<p>
												<h3>Release Date &nbsp;: 6 April 2018</h3>
												<h3>Venue&nbsp;:Cg Road </h3>
											</p>
											<h4>About Movie</h4>
											<p>
												Reva: A Journey Within is a 2018 Gujarati adventure drama film starring
												Chetan Dhanani and Monal Gajjar produced by Brainbox Studios and Baroda
												Talkies. The film is based on Gujarati author Dhruv Bhatt's 1998
												Gujarati novel Tatvamasi. The film was directed by Rahul Bhole and Vinit
												Kanojia. It was released on 6 April 2018 to highly positive critic
												reviews praising performances of cast, story and cinematography and
												positive commercial acclaim too. The film won National Film Award for
												Best Feature Film in Gujarati
											</p>
											<h4>Star Cast</h4>
											<p>
												Chetan Dhanani as Karan<br />
												Monal Gajjar as Supriya<br />
												Yatin Karyekar as Shashtriji<br />
												Muni Jha as Lawyer<br />
											</p>
										</div>
										<div class="bookbtn">
											<button type="button" class="btn btn-success"
												onclick="location.href='ticket-booking.html';">Book</button>
										</div>
									</div>
								</div>
							</div>
							<!-- modal end -->
						</div>
					</div>

				</div>

			</div>
			<!-- <div class="button-center text-center mt-3">
				<a href="#" class="btn view-button">View all <span class="fa fa-angle-double-right ml-2"
						aria-hidden="true"></span></a>
			</div> -->
		</div>
	</section>

     <!-- <section class="w3l-albums py-5" id="projects">
		<div class="container py-lg-4">
			<div class="row">
				<div class="col-lg-12 mx-auto">
					
					<div id="parentHorizontalTab">
						<ul class="resp-tabs-list hor_1">
							<li>Recent Movies</li>
							<li>Popular Movies</li>
							<li>Trend Movies</li>
							<div class="clear"></div>
						</ul>
						<div class="resp-tabs-container hor_1">
							<div class="albums-content">
								<div class="row">
								
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.html">

													<img src="assets/images/m6.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.html">Long Shot</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.html"><img src="assets/images/m5.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.html">Jumanji</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.html"><img src="assets/images/m4.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.html">Little Women</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.html"><img src="assets/images/m1.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.html">Rocketman</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.html"><img src="assets/images/m2.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.html">Doctor Sleep</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.html"><img src="assets/images/m3.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.html">Knives Out</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.html"><img src="assets/images/n1.jpg" class="img-fluid"
														alt="author image">
													<span class="fa fa-play video-icon" aria-hidden="true"></span>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.html">No Time to Die</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.html"><img src="assets/images/n2.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.html">Mulan</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.html"><img src="assets/images/n3.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.html">Free Guy</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
								</div>
							</div>
							<div class="albums-content">
								<div class="row">
								
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.html"><img src="assets/images/m1.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.html">Rocketman</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.html"><img src="assets/images/m2.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.html">Doctor Sleep</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.html"><img src="assets/images/m3.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.html">Knives Out</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.html"><img src="assets/images/m7.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.html">Frozen 2</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.html"><img src="assets/images/m8.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.html">Toy Story 4</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.html"><img src="assets/images/m9.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.html">Joker</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
								</div>
							</div>
							<div class="albums-content">
								<div class="row">
									
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.html"><img src="assets/images/m7.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.html">Frozen 2</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.html"><img src="assets/images/m8.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.html">Toy Story 4</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.html"><img src="assets/images/m9.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.html">Joker</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.html"><img src="assets/images/m10.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.html">Alita</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min
													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.html"><img src="assets/images/m11.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.html">The Lego</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min
													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="movies.html"><img src="assets/images/m12.jpg" class="img-fluid"
														alt="author image">
													<div class="overlay-icon">

														<span class="fa fa-play video-icon" aria-hidden="true"></span>
													</div>
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="movies.html">The Hustle</a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													<span class="post fa fa-heart text-right"></span>
												</h4>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>  -->
	<!--grids-sec2-->

<?php include("footer.php"); ?>

