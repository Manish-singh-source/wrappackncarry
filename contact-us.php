<?php
$title = "Contact Us";
include('layouts/header.php');
?>


<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper">
	<div class="container">
		<div class="pbmit-title-bar-content">
			<div class="pbmit-title-bar-content-inner">
				<div class="pbmit-tbar">
					<div class="pbmit-tbar-inner container">
						<h1 class="pbmit-tbar-title"> Contact Us</h1>
					</div>
				</div>
				<div class="pbmit-breadcrumb">
					<div class="pbmit-breadcrumb-inner">
						<span>
							<a title="" href="index.php" class="home"><span>Home</span></a>
						</span>
						<span class="sep">
							<i class="pbmit-base-icon-angle-right"></i>
						</span>
						<span><span class="post-root post post-post current-item"> Contact Us</span></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Title Bar End-->

<!-- Contact Us Content -->
<div class="page-content">

	<!-- Ihbox -->
	<section class="section-xl">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xl-4">
					<div class="pbmit-ihbox-style-7">
						<div class="pbmit-ihbox-box">
							<div class="pbmit-icon-wrapper d-flex align-items-center">
								<div class="pbmit-ihbox-icon">
									<div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
										<i class="pbmit-agrimo-icon pbmit-agrimo-icon-email"></i>
									</div>
								</div>
								<div class="pbmit-title-wrap">
									<h2 class="pbmit-element-title">Mail us 24/7</h2>
								</div>
							</div>
							<div class="pbmit-content-wrapper">
								<div class="pbmit-heading-desc">
									<a href="mailto:info@wrappackncarry.com">info@wrappackncarry.com</a><br>
									<a href="mailto:info@wrappackncarry.com">info@wrappackncarry.com</a>
								</div>
							</div>
						</div>
						<div class="pbmit-ihbox-btn">
							<a href="#">
								<span class="pbmit-button-text">Read More</span>
								<span class="pbmit-button-icon-wrapper">
									<span class="pbmit-button-icon">
										<i class="pbmit-base-icon-black-arrow-1"></i>
									</span>
								</span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xl-4">
					<div class="pbmit-ihbox-style-7 pt-md-0 pt-4">
						<div class="pbmit-ihbox-box">
							<div class="pbmit-icon-wrapper d-flex align-items-center">
								<div class="pbmit-ihbox-icon">
									<div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
										<i class="pbmit-agrimo-icon pbmit-agrimo-icon-call"></i>
									</div>
								</div>
								<div class="pbmit-title-wrap">
									<h2 class="pbmit-element-title">Call us 24/7</h2>
								</div>
							</div>
							<div class="pbmit-content-wrapper">
								<div class="pbmit-heading-desc">Phone : 022-35226194 | 35227291<br> Mobile : +91 93244 20871</div>
							</div>
						</div>
						<div class="pbmit-ihbox-btn">
							<a href="#">
								<span class="pbmit-button-text">Read More</span>
								<span class="pbmit-button-icon-wrapper">
									<span class="pbmit-button-icon">
										<i class="pbmit-base-icon-black-arrow-1"></i>
									</span>
								</span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xl-4">
					<div class="pbmit-ihbox-style-7 pt-xl-0 pt-4">
						<div class="pbmit-ihbox-box">
							<div class="pbmit-icon-wrapper d-flex align-items-center">
								<div class="pbmit-ihbox-icon">
									<div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
										<i class="pbmit-agrimo-icon pbmit-agrimo-icon-pin"></i>
									</div>
								</div>
								<div class="pbmit-title-wrap">
									<h2 class="pbmit-element-title">Our Locations</h2>
								</div>
							</div>
							<div class="pbmit-content-wrapper">
								<div class="pbmit-heading-desc">304, Kalpataru Plaza, Rambaug, Chincholi Bunder Road, Malad (W), Mumbai - 400064</div>
							</div>
						</div>
						<div class="pbmit-ihbox-btn">
							<a href="#">
								<span class="pbmit-button-text">Read More</span>
								<span class="pbmit-button-icon-wrapper">
									<span class="pbmit-button-icon">
										<i class="pbmit-base-icon-black-arrow-1"></i>
									</span>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Ihbox End -->

	<!-- Contact Form -->
	<section>
		<div class="container">
			<div class="row g-0">
				<div class="col-md-12 col-xl-5">
					<div class="contact-img-box"></div>
				</div>
				<div class="col-md-12 col-xl-7">
					<div class="contact-form-area pbmit-bg-color-white">
						<div class="pbmit-heading-subheading animation-style4">
							<h4 class="pbmit-subtitle">Get to Contact us</h4>
							<h2 class="pbmit-title">Have any Questions? <br> Get in Touch!</h2>
						</div>
						<form class="contact-form" method="post" id="contact-form" action="submit-contact.php">
							<?php if (isset($_GET['success']) && $_GET['success'] == '1'): ?>
								<div class="alert alert-success">Thank you! Your message has been sent successfully. We will contact you soon.</div>
							<?php endif; ?>
							<div class="row">
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Your Name" name="name" required>
								</div>
								<div class="col-md-6">
									<input type="tel" class="form-control" placeholder="Phone Number" name="phone" required>
								</div>
								<div class="col-md-6">
									<input type="email" class="form-control" placeholder="Email Address" name="email" required>
								</div>
								<div class="col-md-6">
									<input type="text" class="form-control" placeholder="Subject" name="subject" required>
								</div>
								<div class="col-md-12">
									<textarea name="message" cols="40" rows="10" class="form-control" placeholder="Comment" required></textarea>
								</div>
								<div class="g-recaptcha mb-3" data-sitekey="6Lez9N0sAAAAAKdCbUw6cR-dFSf-ZtT2bg1q5nNW"></div>
								<div class="col-md-12">
									<button class="pbmit-btn pbmit-btn-hover-global">
										<i class="form-btn-loader fa fa-circle-o-notch fa-spin fa-fw margin-bottom d-none"></i>
										<span class="pbmit-button-text">Send Message</span>
										<span class="pbmit-button-icon-wrapper">
											<span class="pbmit-button-icon">
												<i class="pbmit-base-icon-black-arrow-1"></i>
											</span>
										</span>
									</button>
								</div>
								<div class="col-md-12 col-lg-12 message-status"></div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact Form -->

	<!-- Client Start -->
	<section class="section-md">
		<div class="container">
			<div class="swiper-slider" data-autoplay="true" data-loop="true" data-dots="false" data-arrows="false" data-columns="5" data-margin="30" data-effect="slide">
				<div class="swiper-wrapper">
					<!-- Slide1 -->
					<article class="pbmit-client-style-1 swiper-slide">
						<div class="pbmit-border-wrapper">
							<div class="pbmit-client-wrapper">
								<div class="pbmit-featured-img-wrapper">
									<div class="pbmit-featured-wrapper">
										<img src="images/clients/padumjee.png" class="img-fluid" alt="">
									</div>
								</div>
							</div>
						</div>
					</article>
					<!-- Slide9 -->
					<article class="pbmit-client-style-1 swiper-slide">
						<div class="pbmit-border-wrapper">
							<div class="pbmit-client-wrapper">
								<div class="pbmit-featured-img-wrapper">
									<div class="pbmit-featured-wrapper">
										<img src="images/clients/9.png" class="img-fluid" alt="">
									</div>
								</div>
							</div>
						</div>
					</article>
					<!-- Slide3 -->
					<article class="pbmit-client-style-1 swiper-slide">
						<div class="pbmit-border-wrapper">
							<div class="pbmit-client-wrapper">
								<div class="pbmit-featured-img-wrapper">
									<div class="pbmit-featured-wrapper">
										<img src="images/clients/3.png" class="img-fluid" alt="">
									</div>
								</div>
							</div>
						</div>
					</article>
					<!-- Slide14 -->
					<article class="pbmit-client-style-1 swiper-slide">
						<div class="pbmit-border-wrapper">
							<div class="pbmit-client-wrapper">
								<div class="pbmit-featured-img-wrapper">
									<div class="pbmit-featured-wrapper">
										<img src="images/clients/14.png" class="img-fluid" alt="">
									</div>
								</div>
							</div>
						</div>
					</article>
					<!-- Slide14 -->
					<article class="pbmit-client-style-1 swiper-slide">
						<div class="pbmit-border-wrapper">
							<div class="pbmit-client-wrapper">
								<div class="pbmit-featured-img-wrapper">
									<div class="pbmit-featured-wrapper">
										<img src="images/clients/jpc.png" class="img-fluid" alt="">
									</div>
								</div>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>
	<!-- Client End -->

	<!-- Iframe -->
	<section class="iframe-section section-lgb">
		<div class="container-fluid p-0">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d942.0919701671257!2d72.84506850610802!3d19.179127900113972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b712ec1ca067%3A0x28ef927af17fe429!2sJagdamba%20Paper%20Corporation!5e0!3m2!1sen!2sin!4v1775907531207!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</section>
	<!-- Iframe End-->

</div>
<!-- Contact Us Content End -->

<?php include('layouts/footer.php'); ?>