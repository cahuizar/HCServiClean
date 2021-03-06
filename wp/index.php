<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="home">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="hero first">
							<div class="hero-inner">
								<h1 class="carousel-text">HC <span class="servi">Servi</span><span class="clean">Clean</span></h1>
								<h2 class="carousel-text">We offer the best residential and commercial cleaning service in Indiana</h2>
								<a class="quote-btn mt-4" href="#contact"> Free Estimate</a>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="hero second">
							<div class="hero-inner">
								<h1 class="carousel-text">HC <span class="servi">Servi</span><span class="clean">Clean</span></h1>
								<h2 class="carousel-text">The solution to all your cleaning needs</h2>
								<a class="quote-btn mt-4" href="#contact"> Free Estimate</a>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="hero third">
							<div class="hero-inner">
								<h1 class="carousel-text">HC <span class="servi">Servi</span><span class="clean">Clean</span></h1>
								<h2 class="carousel-text">We understand your needs and will do whatever it takes to make you happy</h2>
								<a class="quote-btn mt-4" href="#contact"> Free Estimate</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--  About Us -->
		<div class="container about-us scroll">
			<div class="row align-items-center">
				<div class="col-12 col-md-6">
					<h2 id="about" class="section-header section-border-left">Why Choose Us?</h2>
					<p class="section-description">We have been providing house and commercial cleaning for more than <span class="yearsWorking">5</span> years. We have a history of excellence and dedication to our clients,
                   providing professional and high-quality house cleaning. H C ServiClean has served the following areas: Fishers, Indianapolis,
                   Geist, Carmel, Noblesville, Westfield, McCordsville, Cicero, Zionsville, and Sheridan.</p>
				</div>
				<div class="col-12 offset-md-1 col-md-5">
					<div id="testimonials" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#testimonials" data-slide-to="0" class="active"></li>
							<li data-target="#testimonials" data-slide-to="1"></li>
							<li data-target="#testimonials" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner text-center">
							<div class="carousel-item active">
									<div class="hero-inner text-center">
										<p class="section-description">
											"I can't say enough about this team. I've been using their services for over 5 years now
											and I am very happy with the quality of their work. Thay always work around my
											schedule and arrive on time. I just love the day they come!"
										</p>
										<p class="mt-2 text-right"><cite> - Michelle Walsh &middot; Carmel</cite></p>
									</div>
							</div>
							<div class="carousel-item ">
								<p class="section-description">
									"H C ServiClean have been cleaning for me for over 5 years. I have used several different individuals
									and companies in the past. None of them compare to H C ServiClean's services. 
									They are completely reliable,  flexible, and thorough."
								</p>
								<p class="mt-2 text-right"><cite> - Gina Schaeffer &middot; Carmel</cite></p>
							</div>
							<div class="carousel-item">
								<p class="section-description">
									"I highly recommend H C ServiClean if you want an amazing and yet easy experience for your house cleaning
									needs. We have not had to do any kind of cleaning of our own. They are very reliable and trustworthy.
									Try them out and see for yourself."
								</p>
								<p class="mt-2 text-right"><cite> - James Milner &middot; Fishers</cite></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--  Services -->
		<div id="services" class="services scroll">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2 class="section-header section-border-left">What we Offer that Others Don't</h2>
						<p class="section-description">We guarantee your satisfaction with our cleaning. Here are some of the services we provide:</p>
					</div>
				</div>
				
				<div class="row justify-content-center">
					<!-- Bedrooms and living room -->
					<div class="col-10 col-sm-6 col-md-4 card-col">
						<div class="card">
							<img class="card-img-top" height="260px" src="<?php echo get_template_directory_uri(); ?>/assets/images/living_room.jpg" alt="Card image cap">
							<h4 class="card-title">Bedroom</h4>
							<div class="card-body">
								<ul>
									<li> Dust picture frames, ceiling fans, lamp shades, and blinds</li>
									<li> Clean, and vacuum hardwood floors</li>
									<li> Doors and door frames spot clean</li>
									<li> Flat areas hand wiped</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Bathroom -->
					<div class="col-10 col-sm-6 col-md-4 card-col">
						<div class="card ">
							<img class="card-img-top" height="260px" src="<?php echo get_template_directory_uri(); ?>/assets/images/bathroom.jpg" alt="Card image cap">
							<h4 class="card-title">Bathroom</h4>
							<div class="card-body">
								<ul>
									<li> Clean tile walls, bathtubs, showers, toilets, vanity and sink</li>
									<li> Mop floors</li>
									<li> General dusting</li>
									<li> Vacuum carpets</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<!-- Kitchen -->
					<div class="col-10 col-sm-6 col-md-4 card-col">
						<div class="card">
							<img class="card-img-top" height="260px" src="<?php echo get_template_directory_uri(); ?>/assets/images/kitchen.jpg" alt="Card image cap">
							<h4 class="card-title">Kitchen</h4>
							<div class="card-body">
								<ul>
									<li> Clean counter tops and the front of all appliances</li>
									<li> Vacuum and damp mop the floors</li>
									<li> Microwave wiped out</li>
									<li> General dusting</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Extras -->
					<div class="col-10 col-sm-6 col-md-4 card-col">
						<div class="card">
							<img class="card-img-top" height="260px" src="<?php echo get_template_directory_uri(); ?>/assets/images/extra.jpg" alt="Card image cap">
							<h4 class="card-title">Extras</h4>
							<div class="card-body">
								<ul>
									<li> Clean inside of the fridge</li>
									<li> Clean inside oven</li>
									<li> Clean interior windows</li>
									<li> Clean inside cabinets</li>
									<li> Wash & dry laundry</li>
									<li> Baseboard deep clean</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Contact Us -->
		<div id="contact" class="contact-us scroll">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2 class="section-header">Let Us Do The Cleaning For You</h2>
						<p class="section-description white">Fill out the form below and receive your free consultation. We will contact you as soon as possible!</p>
					</div>
				</div>
				<div class="row mt-3 align-items-center">
					<?php echo do_shortcode( '[contact-form-7 id="60" title="Free Estimate"]' ); ?>
				</div>
			</div>
		</div>
		<!--  FAQ  -->
		<div id="faq"  class="container scroll mt-5 mb-5">
			<div class="row">
				<div class="col-12">
					<h2 class="section-header section-border-left">Frequently Asked Questions</h2>
					<p class="section-description">Check out some of the questions we are asked on a daily basis. If your question is still unanswered, be sure to send us an email at <a class="email link" href= "mailto:contact@hcserviclean.com?Subject=Question">contact<span class="at">@</span>serviclean.com</a></p>
				</div>
				<div class="col-12 col-md-6">
					<h3>General</h3>
					<div id="accordion" class="mobile-spacing-5">
						<div class="card">
							<div class="card-header" id="headingOne">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										<i class="fas fa-plus"></i> Do we bring all the cleaning supplies needed?
									</button>
								</h5>
							</div>
						
							<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="card-body">
									H C ServiClean provides products to give your home a great clean such as: mop, vacuum and bucket. For personal preference, please note that we are willing to use any products you may provide us.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTwo">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										<i class="fas fa-plus"></i> What cleaning areas are included?
									</button>
								</h5>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="card-body">
									Bedrooms, bathrooms, living rooms, kitchen and if you would like anything extra, it can be discussed during your free consultation.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										<i class="fas fa-plus"></i> What if you stay extra long to finish the job?
									</button>
								</h5>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="card-body">
									Unlike others, H C ServiClean has a service quote, not a time quote. Which means that the cleaners will stay until they get all that's needed done.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingFour">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
										<i class="fas fa-plus"></i> Do I have to be home while you clean?
									</button>
								</h5>
							</div>
							<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
								<div class="card-body">
									You do not have to be home for your clean as long as your cleaner has proper directions for entering and exiting your home.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingSix">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
										<i class="fas fa-plus"></i> What are the payment options?
									</button>
								</h5>
							</div>
							<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
								<div class="card-body">										
									At the moment we accept cash and checks.
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<h3>Trust & Safety</h3>
					<div id="accordion2">
						<div class="card">
							<div class="card-header" id="headingSeven">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
										<i class="fas fa-plus"></i> How long have you been in business?
									</button>
								</h5>
							</div>
							<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion2">
								<div class="card-body">
									The company is new, but we have been cleaning homes in Indiana for over <span class="yearsWorking">5</span> years.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingEight">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
										<i class="fas fa-plus"></i> Can I trust the cleaners?
									</button>
								</h5>
							</div>
							<div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion2">
								<div class="card-body">
									Absolutely. The cleaners are highly trained, background and reference checked. Our cleaners are full-time employees of our company, not contractors.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingNine">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
										<i class="fas fa-plus"></i> Is HC ServiClean pet safe?
									</button>
								</h5>
							</div>
							<div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion2">
								<div class="card-body">
									We love animals, but they don't always love us. If you think your pet may become overly anxious while we are there, please make temporary arrangements while we are in your home. Feel free to tell us any pet instructions.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingTen">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
										<i class="fas fa-plus"></i> Any references? 
									</button>
								</h5>
							</div>
							<div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion2">
								<div class="card-body">
									Yes, we have serviced countless of happy customers. If you'd like to see our references, please read our Yelp reviews or send us and email!
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingEleven">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
										<i class="fas fa-plus"></i> Do you use cleaning products that are safe for all surfaces?
									</button>
								</h5>
							</div>
							<div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion2">
								<div class="card-body">
									All of our cleaners and maids are trained to use products that are safe for all surfaces, including: stainless steel, tiles, glass, wood, etc.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	  
		<!-- NewsLetter -->
		<div id="newsletter" class="dont-miss-out scroll">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-6">
						<h2>Don't Miss Out on Deals!</h2>
						<div class="deals-text">
							Sign up to our Newsletter to take advantages of all the offers
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<input type="email" placeholder="Email Address here" />
						<button type="button">Subscribe</button>
					</div>
				</div>
			</div>
		</div>
<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>