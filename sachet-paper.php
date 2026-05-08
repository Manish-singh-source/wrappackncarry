<?php
$title = "Sachet Paper";
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

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper sachet">
	<div class="container">
		<div class="pbmit-title-bar-content">
			<div class="pbmit-title-bar-content-inner">
				<div class="pbmit-tbar">
					<div class="pbmit-tbar-inner container">
						<h3 class="pbmit-tbar-subtitle"> Products</h3>
						<h1 class="pbmit-tbar-title"> Sachet Paper</h1>
					</div>
				</div>
				<div class="pbmit-breadcrumb">
					<div class="pbmit-breadcrumb-inner">
						<span>
							<a title="" href="index" class="home"><span>Home</span></a>
						</span>
						<span class="sep">
							<i class="pbmit-base-icon-angle-right"></i>
						</span>
						<span>
							<a title="" href="product" class="home"><span>Products</span></a>
						</span>
						<span class="sep">
							<i class="pbmit-base-icon-angle-right"></i>
						</span>
						<span><span class="post-root post post-post current-item"> Sachet Paper</span></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Title Bar End-->

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
									<li><a href="oil-grease-resistant-paper">Oil Grease Resistant Paper </a></li>
									<li><a href="baking-and-cooking-paper"> Baking & Cooking Paper </a></li>
									<li><a href="slip-easy-paper"> Slip Easy Paper </a></li>
									<li><a href="kraft-paper-bag"> Kraft Paper Bag </a></li>
									<li><a href="tableware"> Tableware </a></li>
									<li><a href="pizza-boxes"> Pizza Boxes </a></li>
									<!-- <li><a href="sachet-paper"> Sachet Paper </a></li> -->
									<li><a href="mg-poster-bag"> MG Poster Bag </a></li>

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
									<a class="pbmit-btn pbmit-btn-white" href="contact-us">
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
										<a href="javascript:void(0);" target="_blank" rel="noopener noreferrer">
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
								<h3 class="pbmit-title mb-3">Sachet Paper</h3>
							</div>
							<p class="pbmit-firstletter">
								Sachet Paper is designed for flexible packaging needs, offering excellent opacity, printability, and heat sealing properties. It is suitable for packaging both dry and oily food items, ensuring durability and moisture resistance while maintaining product quality.Ideal for retail and food packaging applications, it supports efficient and attractive packaging solutions.
							</p>
							<p>Lightweight packaging paper for small portions and food packs.</p>
						</div>
						<div class="pt-5">
							<div class="pbmit-heading animation-style2">
								<h3 class="pbmit-title mb-3">Advanced Packaging Features</h3>
							</div>
							<p>Specialized paper for sachets and small packaging applications requiring excellent print quality.</p>
							<div class="row">
								<div class="col-md-6">
									<ul class="list-group list-group-borderless">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Excellent opacity and finish</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Superior heat sealing properties</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">High water resistance</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Strong and durable material</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Heat sealing property</span>
										</li>
									</ul>
								</div>
								<div class="col-md-6">
									<ul class="list-group list-group-borderless">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Good printability for branding</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Suitable for dry and oily items</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Lightweight and flexible</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Reliable packaging performance</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Idle for high speed feeling station</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="pt-5">
							<div class="pbmit-heading animation-style2">
								<h3 class="pbmit-title mb-3">Wide Range of Food Applications</h3>
							</div>
							<p>Ideal for packaging small portions, sachets, and retail food items.</p>
							<div class="row">
								<div class="col-md-6">
									<ul class="list-group list-group-borderless">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Dry groceries</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Spices & condiment</span>
										</li>

									</ul>
								</div>
								<div class="col-md-6">
									<ul class="list-group list-group-borderless">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Snacks</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Small food packs</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="pt-5">
							<div class="pbmit-heading animation-style2">
								<h3 class="pbmit-title mb-3">Serving Diverse Food Businesses</h3>
							</div>
							<p>Perfect solution for businesses requiring efficient small packaging formats.</p>
							<div class="row">
								<div class="col-md-4">
									<ul class="list-group list-group-borderless">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Retail Stores</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Distributors</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Food Brands</span>
										</li>
									</ul>
								</div>
								<div class="col-md-4">
									<ul class="list-group list-group-borderless">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Packaging Units</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Wholesalers</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Cafes</span>
										</li>
									</ul>
								</div>
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
							<p>Choose the format that best suits your business needs. We offer multiple packaging options to support different usage and operational requirements.</p>
							<div class="row">
								<div class="col-lg-4 mb-4">
									<div class="purchase-option-card">
										<h4>Reel</h4>
										<p>Ideal for continuous wrapping and high-volume usage in food packaging operations.</p>
										<button class="pbmit-btn enquire-btn" data-format="Reel">
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
						<!-- <div class="pt-5">
							<div class="pbmit-heading animation-style2">
								<h3 class="pbmit-title mb-3">Flexible Packaging Formats</h3>
							</div>
							<p>Choose the format that best suits your packaging requirements.</p>
							<div class="row">
								<div class="col-lg-4 mb-4">
									<div class="purchase-option-card">
										<h4>Reel</h4>
										<p>For industrial sachet manufacturing.</p>
										<button class="pbmit-btn enquire-btn" data-format="Reel">
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
										<h4>Sheet</h4>
										<p>For manual packaging operations.</p>
										<button class="pbmit-btn enquire-btn" data-format="Sheet">
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
										<h4>Pre-cut</h4>
										<p>Ready-to-use sachet cut sizes.</p>
										<button class="pbmit-btn enquire-btn" data-format="Pre-cut">
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
						</div> -->
						<div class="pt-5">
							<div class="pbmit-heading animation-style2">
								<h3 class="pbmit-title mb-3">Why Choose Sachet Paper</h3>
							</div>
							<p>Sachet Paper from <strong>'Wrap Pack N Carry'</strong> provides a perfect balance of strength, printability, and moisture resistance. It is designed to meet modern packaging needs while maintaining product safety and presentation. Its flexibility and durability make it an ideal choice for small and efficient packaging solutions.</p>
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
					<input type="text" id="product" name="product" value="Sachet Paper" readonly>
				</div>
				<div class="form-group form-group-half">
					<label for="format">Format</label>
					<input type="text" id="format" name="format" value="Reel" readonly>
				</div>
			</div>
			<div class="form-row box-variant-row mt-2" style="display: none;">
				<div class="form-group">
					<label for="variant">Variant</label>
					<select id="variant" name="variant">
						<option value="">Select Variant</option>
						<option value="20 meter">20 Meter</option>
						<option value="200 meter">200 Meter</option>
					</select>
				</div>
			</div>
			<!-- <div class="form-row box-variant-row" style="display: none;">
				<div class="form-group">
					<label for="variant">Variant</label>
					<div class="variant-options" style="display: flex;gap: 10px;flex-wrap: wrap;">
						<input type="text" id="variant" name="variant" value="20 meter" readonly style="flex: 1;min-width: 80px;">
						<input type="text" id="variant2" name="variant" value="200 meter" readonly style="flex: 1;min-width: 80px;">
					</div>
				</div>
			</div> -->
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
			<div class="g-recaptcha mt-3" data-sitekey="6Lez9N0sAAAAAKdCbUw6cR-dFSf-ZtT2bg1q5nNW"></div>
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
			var submitBtn = this.querySelector('button[type="submit"]');
			submitBtn.disabled = true;
			var originalBtnText = submitBtn.innerHTML;
			submitBtn.innerHTML = '<span class="pbmit-button-text">Submitting...</span>';
			var formData = new FormData(this);
			fetch('submit-enquiry', {
					method: 'POST',
					body: formData
				})
				.then(response => response.json())
				.then(data => {
					alert(data.message);
					submitBtn.disabled = false;
					submitBtn.innerHTML = originalBtnText;
					if (data.success) {
						modal.classList.remove('show');
						document.body.style.overflow = 'auto';
						this.reset();
					}
				})
				.catch(error => {
					submitBtn.disabled = false;
					submitBtn.innerHTML = originalBtnText;
					alert('Something went wrong. Please try again.');
				});
		});
	});
</script>


<!-- Page Content End -->
<?php include('layouts/footer.php'); ?>