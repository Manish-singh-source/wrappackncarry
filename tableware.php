<?php
$title = "Tableware";
include('layouts/header.php'); ?>


<style>
	.service-right-col {
		flex: 0 0 28%;
		max-width: 28%;
	}

	.service-left-col {
		flex: 0 0 72%;
		max-width: 72%;
		padding-left: 36px;
	}

	.product-format-row {
		display: grid !important;
		grid-template-columns: 1fr 1fr !important;
		gap: 18px;
	}

	.product-format-row .form-group {
		margin-bottom: 0;
	}

	@media (max-width: 991px) {
		.service-right-col {
			flex: 0 0 100%;
			max-width: 100%;
			margin-top: 40px;
			order: 2;
		}

		.service-left-col {
			flex: 0 0 100%;
			max-width: 100%;
			padding-left: 0;
		}
	}

	@media (max-width: 767px) {

		/* .pbmit-title-bar-content-inner {
			flex-direction: column;
			text-align: center;
		}
		.pbmit-tbar-inner {
			padding: 20px 15px;
		}
		.pbmit-tbar-title {
			font-size: 24px !important;
		}
		.pbmit-breadcrumb-inner {
			justify-content: center;
		}
		.pbmit-title-bar-content-inner .pbmit-tbar,
		.pbmit-title-bar-content-inner .pbmit-breadcrumb {
			width: 100%;
		} */
		.list-group-item {
			padding: 12px 0;
		}

		.purchase-option-card {
			padding: 20px;
		}
	}

	@media (max-width: 480px) {

		/* .pbmit-tbar-title {
			font-size: 20px !important;
		}
		.pbmit-tbar-subtitle {
			font-size: 14px;
		}
		.pbmit-title-bar-content-inner {
			padding: 15px 10px;
		} */
		.all-post-list ul {
			display: block;
			flex-wrap: wrap;
			gap: 8px;
			padding: 0;
			list-style: none;
		}

		.all-post-list li {
			flex: 0 0 auto;
		}

		.all-post-list li a {
			padding: 8px 12px;
			font-size: 13px;
		}
	}
</style>

<style>
	.coming-soon {
		position: relative;
		min-height: 100vh;
		display: flex;
		align-items: center;
		justify-content: center;
		padding: 40px 20px;
		background: #E3DBBB;
		font-family: "Inter", sans-serif;
		overflow: hidden;
	}

	.coming-container {
		position: relative;
		max-width: 680px;
		width: 100%;
		text-align: center;
		padding: 60px 40px;
		border-radius: 28px;
		background: #F8F3E0;
		backdrop-filter: blur(18px);
		box-shadow:
			0 30px 80px rgba(0, 0, 0, 0.12),
			inset 0 1px 0 rgba(255, 255, 255, 0.9);
		animation: fadeUp 1s ease;
	}

	.coming-container h1 {
		font-size: clamp(42px, 6vw, 72px);
		font-weight: 800;
		color: #101412;
		margin-bottom: 16px;
		letter-spacing: -0.03em;
	}

	.subtitle {
		font-size: 18px;
		color: rgba(16, 20, 18, 0.65);
		margin-bottom: 24px;
	}

	.divider {
		width: 60px;
		height: 4px;
		margin: 20px auto;
		border-radius: 999px;
		background: linear-gradient(90deg, #8bd70d, #254e58);
	}

	.desc {
		font-size: 15px;
		color: rgba(16, 20, 18, 0.6);
		margin-bottom: 30px;
	}

	.back-btn {
		display: inline-block;
		padding: 12px 26px;
		border-radius: 999px;
		background: #101412;
		color: #fff;
		font-size: 14px;
		font-weight: 600;
		text-decoration: none;
		transition: 0.3s ease;
	}

	.back-btn:hover {
		background: #8bd70d;
		color: #101412;
	}

	/* animation */
	@keyframes fadeUp {
		from {
			opacity: 0;
			transform: translateY(40px);
		}

		to {
			opacity: 1;
			transform: translateY(0);
		}
	}

	@media (max-width: 767px) {
		.coming-container {
			padding: 40px 24px;
		}

		.subtitle {
			font-size: 16px;
		}

		.desc {
			font-size: 14px;
		}
	}
</style>

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper tableware">
	<div class="container">
		<div class="pbmit-title-bar-content">
			<div class="pbmit-title-bar-content-inner">
				<div class="pbmit-tbar">
					<div class="pbmit-tbar-inner container">
						<h3 class="pbmit-tbar-subtitle"> Products</h3>
						<h1 class="pbmit-tbar-title"> Tableware</h1>
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
						<span>
							<a title="" href="product.php" class="home"><span>Products</span></a>
						</span>
						<span class="sep">
							<i class="pbmit-base-icon-angle-right"></i>
						</span>
						<span><span class="post-root post post-post current-item"> Tableware</span></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Title Bar End-->

<!-- Coming Soon Section  -->
<section class="coming-soon d-none">
	<div class="overlay"></div>

	<div class="coming-container">
		<h1>Coming Soon</h1>

		<p class="subtitle">
			We’re working on something amazing for our tableware collection.
		</p>

		<!-- <div class="divider"></div> -->

		<p class="desc">
			Stay tuned — new designs and premium quality products are on the way.
		</p>

		<!-- <a href="/" class="back-btn">Back to Home</a> -->

		<div class="pbmit-button transform-bottom transform-delay-4">
			<a class="pbmit-btn" href="index.php">
				<span class="pbmit-button-text">Back To Home</span>
				<span class="pbmit-button-icon-wrapper">
					<span class="pbmit-button-icon">
						<i class="pbmit-base-icon-black-arrow-1"></i>
					</span>
				</span>
			</a>
		</div>
	</div>
</section>

<!-- Page Content -->
<div class="page-content">

	<!-- Service Details -->
	<section class="site-content service-details">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 service-right-col sidebar">
					<aside class="service-sidebar">
						<aside class="widget post-list">
							<h2 class="widget-title">Our Products</h2>
							<div class="all-post-list">
								<ul>
									<li><a href="ogr-paper.php">Oil Grease Resistant Paper </a></li>
									<li><a href="baking-and-cooking-paper.php"> Baking & Cooking Paper </a></li>
									<li><a href="slip-easy-paper.php"> Slip Easy Paper </a></li>
									<li><a href="sachet-paper.php"> Sachet Paper </a></li>
									<li><a href="kraft-paper-bag.php"> Kraft Paper Bag </a></li>
									<li><a href="mg-poster-bag.php"> MG Poster Bag </a></li>
									<li><a href="pizza-boxes.php"> Pizza Boxes </a></li>
									<!-- <li><a href="tableware.php"> Tableware </a></li> -->

								</ul>
							</div>
						</aside>
						<aside class="widget pbmit-service-ad">
							<div class="textwidget">
								<div class="pbmit-service-ads">
									<div class="pbmit-ads-icon">
										<i class="pbmit-base-icon-plant"></i>
									</div>
									<h4 class="pbmit-ads-title">Packaging That Cares for Nature </h4>
									<div class="pbmit-ads-desc">
										<i class="pbmit-base-icon-phone-call-1"></i>+91 93244 20871
									</div>
									<a class="pbmit-btn pbmit-btn-white" href="contact-us.php">
										<span class="pbmit-button-text">Contact us Now</span>
										<span class="pbmit-button-icon-wrapper">
											<span class="pbmit-button-icon">
												<i class="pbmit-base-icon-black-arrow-1"></i>
											</span>
										</span>
									</a>
								</div>
							</div>
						</aside>
						<aside class="widget pbmit-download-content">
							<h2 class="widget-title">Company profile</h2>
							<div class="textwidget">
								<div class="download">
									<div class="item-download">
										<a href="wrap_pack_n_carry_company_profile.pdf" target="_blank" rel="noopener noreferrer">
											<span class="pbmit-download-content">
												<i class="pbmit-base-icon-pdf-file-format-symbol-1"></i> Download Pdf File
											</span>
											<span class="pbmit-download-item">
												<i class="pbminfotech-base-icons pbmit-righticon pbmit-base-icon-download"></i>
											</span>
										</a>
									</div>
									<div class="item-download d-none">
										<a href="#" target="_blank" rel="noopener noreferrer">
											<span class="pbmit-download-content">
												<i class="pbmit-base-icon-pdf-file-format-symbol-1"></i> Download Word File
											</span>
											<span class="pbmit-download-item">
												<i class="pbminfotech-base-icons pbmit-righticon pbmit-base-icon-download"></i>
											</span>
										</a>
									</div>
								</div>
							</div>
						</aside>
					</aside>
				</div>
				<div class="col-lg-9 service-left-col">
					<div class="pbmit-entry-content">
						<div class="pbmit-service-content">
							<div class="pbmit-heading animation-style2">
								<h3 class="pbmit-title mb-3">Tableware</h3>
							</div>
							<p class="pbmit-firstletter">
								Tableware products are designed for hygienic food serving and takeaway needs. Made from eco-friendly materials, they provide a convenient and sustainable solution for modern food businesses. Ideal for both dine-in and takeaway services, they ensure clean and efficient food presentation.
							</p>
							<p>Eco-friendly tableware for hygienic serving and food presentation.</p>
						</div>
						<div class="pt-5">
							<div class="pbmit-heading animation-style2">
								<h3 class="pbmit-title mb-3">Advanced Packaging Features</h3>
							</div>
							<p>Eco-friendly serving solutions designed for modern food businesses.</p>
							<div class="row">
								<div class="col-md-4">
									<ul class="list-group list-group-borderless">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Strong Oil & Water Resistant</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Eco-friendly material</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Disposable and convenient</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Lightweight & sturdy Even for dry and Semi liquid food</span>
										</li>
									</ul>
								</div>
								<div class="col-md-4">
									<ul class="list-group list-group-borderless">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Microwave & Freezer Safe</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Suitable for takeaway use</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Durable and safe</span>
										</li>
									</ul>
								</div>
								<div class="col-md-4">
									<ul class="list-group list-group-borderless">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Hygienic for food serving</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Easy to handle</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Supports clean presentation</span>
										</li>
										
									</ul>
								</div>
							</div>
						</div>
						<div class="pt-5">
							<div class="pbmit-heading animation-style2">
								<h3 class="pbmit-title mb-3">Serving Diverse Food Businesses</h3>
							</div>
							<p>Perfect for events, catering, and food service businesses.</p>
							<div class="row">
								<div class="col-md-4">
									<ul class="list-group list-group-borderless">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Restaurants</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Cafes</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Catering</span>
										</li>
									</ul>
								</div>
								<div class="col-md-4">
									<ul class="list-group list-group-borderless">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Events</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Food Trucks</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Cloud Kitchens</span>
										</li>
									</ul>
								</div>
								<div class="col-md-4">
									<ul class="list-group list-group-borderless">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Takeaways</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">QSR Chains</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="pt-5">
							<div class="pbmit-heading animation-style2">
								<h3 class="pbmit-title mb-3">Flexible Packaging Formats</h3>
							</div>
							<p>Choose from various tableware options.</p>
							<div class="row">
								<div class="col-lg-4 mb-4">
									<div class="purchase-option-card">
										<h4>Plates</h4>
										<p>Disposable plates in various sizes.</p>
										<button class="pbmit-btn enquire-btn" data-format="Plates">
											<span class="pbmit-button-text">Enquire Now</span>
											<span class="pbmit-button-icon-wrapper">
												<span class="pbmit-button-icon">
													<i class="pbmit-base-icon-black-arrow-1"></i>
												</span>
											</span>
										</button>
									</div>
								</div>
								<div class="col-lg-4 mb-4">
									<div class="purchase-option-card">
										<h4>Bowls</h4>
										<p>Deep bowls for soups and noodles.</p>
										<button class="pbmit-btn enquire-btn" data-format="Bowls">
											<span class="pbmit-button-text">Enquire Now</span>
											<span class="pbmit-button-icon-wrapper">
												<span class="pbmit-button-icon">
													<i class="pbmit-base-icon-black-arrow-1"></i>
												</span>
											</span>
										</button>
									</div>
								</div>
							</div>
						</div>
						<div class="pt-5">
							<div class="pbmit-heading animation-style2">
								<h3 class="pbmit-title mb-3">Why Choose Tableware</h3>
							</div>
							<p>Tableware from <strong>'Wrap Pack N Carry'</strong> products offer a clean, convenient, and eco-friendly solution for food serving. Their lightweight and hygienic design makes them ideal for modern food businesses. They ensure ease of use while supporting sustainable practices.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Service Details End -->

</div>

<!-- Enquiry Modal -->
<div class="enquiry-modal" id="enquiryModal">
	<div class="modal-content">
		<button class="close-modal" type="button" id="closeModalBtn">&times;</button>
		<div class="modal-header">
			<h4>Product Enquiry</h4>
			<p>Fill in your details and we'll get back to you shortly</p>
		</div>
		<!-- <div class="product-format-info">
            <i class="fa-solid fa-box-archive"></i>
            <span id="modalProductName">Oil Grease Resistant Paper</span>
            <span class="format-badge" id="modalFormat">Reel</span>
        </div> -->
		<form class="enquiry-form" id="enquiryForm">
			<div class="form-row">
				<div class="form-group form-group-half">
					<label for="name">Full Name <span class="required">*</span></label>
					<input type="text" id="name" name="name" required placeholder="Your name">
				</div>
				<div class="form-group form-group-half">
					<label for="phone">Phone <span class="required">*</span></label>
					<input type="tel" id="phone" name="phone" required placeholder="Your phone">
				</div>
			</div>
			<div class="form-group">
				<label for="email">Email Address <span class="required">*</span></label>
				<input type="email" id="email" name="email" required placeholder="your@email.com">
			</div>
			<div class="form-row product-format-row">
				<div class="form-group form-group-half">
					<label for="product">Product</label>
					<input type="text" id="product" name="product" value="Tableware" readonly>
				</div>
				<div class="form-group form-group-half">
					<label for="format">Format</label>
					<input type="text" id="format" name="format" value="Reel" readonly>
				</div>
			</div>
			<!-- <div class="form-row box-variant-row" style="display: none;">
				<div class="form-group form-group-half">
					<label for="variant">Variant</label>
					<select id="variant" name="variant">
						<option value="">Select Variant</option>
						<option value="20 meter">20 Meter</option>
						<option value="200 meter">200 Meter</option>
					</select>
				</div>
			</div> -->
			<div class="form-row box-variant-row" style="display: none;">
				<div class="form-group">
					<label for="variant">Variant</label>
					<div class="variant-options" style="display: flex;gap: 10px;flex-wrap: wrap;">
						<input type="text" id="variant" name="variant" value="20 meter" readonly style="flex: 1;min-width: 80px;">
						<input type="text" id="variant2" name="variant" value="200 meter" readonly style="flex: 1;min-width: 80px;">
					</div>
				</div>
			</div>
			<div class="platform-links-row" style="display: none;">
				<div class="platform-links">
					<!-- <span class="platform-label">Buy from:</span> -->
					<p class="discount-note">Get 10% Discount on</p>
					<a href="https://www.flipkart.com" target="_blank" class="platform-link" title="Flipkart">
						<img src="images/products/flipkart.png" alt="Flipkart">
					</a>
					<a href="https://www.amazon.in" target="_blank" class="platform-link" title="Amazon">
						<img src="images/products/amazon.png" alt="Amazon">
					</a>
				</div>
			</div>
			<!-- <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="text" id="quantity" name="quantity" placeholder="e.g. 100 kg, 500 kg, 1 ton">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Any specific requirements or questions?"></textarea>
            </div> -->
			<button type="submit" class="pbmit-btn">
				<span class="pbmit-button-text">Submit Enquiry</span>
				<span class="pbmit-button-icon-wrapper">
					<span class="pbmit-button-icon">
						<i class="pbmit-base-icon-black-arrow-1"></i>
					</span>
				</span>
			</button>
		</form>
	</div>
</div>

<script>
	document.addEventListener('DOMContentLoaded', function() {
		const modal = document.getElementById('enquiryModal');
		const closeModal = document.getElementById('closeModalBtn');
		const enquireBtns = document.querySelectorAll('.enquire-btn');
		const formatInput = document.getElementById('format');
		// const modalFormat = document.getElementById('modalFormat');

		const variantRow = document.querySelector('.box-variant-row');
		const platformRow = document.querySelector('.platform-links-row');

		enquireBtns.forEach(btn => {
			btn.addEventListener('click', function() {
				const format = this.getAttribute('data-format');
				formatInput.value = format;

				if (format === 'Box') {
					variantRow.style.display = 'flex';
					platformRow.style.display = 'block';
				} else {
					variantRow.style.display = 'none';
					platformRow.style.display = 'none';
				}

				modal.classList.add('show');
				document.body.style.overflow = 'hidden';
			});
		});

		if (closeModal) {
			closeModal.addEventListener('click', function() {
				modal.classList.remove('show');
				document.body.style.overflow = 'auto';
			});
		}

		modal.addEventListener('click', function(e) {
			if (e.target === modal) {
				modal.classList.remove('show');
				document.body.style.overflow = 'auto';
			}
		});

		document.addEventListener('keydown', function(e) {
			if (e.key === 'Escape' && modal.classList.contains('show')) {
				modal.classList.remove('show');
				document.body.style.overflow = 'auto';
			}
		});

		document.getElementById('enquiryForm').addEventListener('submit', function(e) {
			e.preventDefault();
			var formData = new FormData(this);
			fetch('submit-enquiry.php', {
					method: 'POST',
					body: formData
				})
				.then(response => response.json())
				.then(data => {
					alert(data.message);
					if (data.success) {
						modal.classList.remove('show');
						document.body.style.overflow = 'auto';
						this.reset();
					}
				})
				.catch(error => {
					alert('Something went wrong. Please try again.');
				});
		});
	});
</script>


<!-- Page Content End -->
<?php include('layouts/footer.php'); ?>