<?php
$title = "Oil Grease Resistant Paper";
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
<div class="pbmit-title-bar-wrapper ogr">
	<div class="container">
		<div class="pbmit-title-bar-content">
			<div class="pbmit-title-bar-content-inner">
				<div class="pbmit-tbar">
					<div class="pbmit-tbar-inner container">
						<h3 class="pbmit-tbar-subtitle"> Products</h3>
						<h1 class="pbmit-tbar-title">Oil Grease Resistant Paper (OGR)</h1>
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
						<span><span class="post-root post post-post current-item"> Oil Grease Resistant Paper (OGR)</span></span>
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
									<!-- <li class="post-active"><a href="oil-grease-resistant-paper">Oil Grease Resistant Paper </a></li> -->
									<li><a href="baking-and-cooking-paper"> Baking & Cooking Paper </a></li>
									<li><a href="slip-easy-paper"> Slip Easy Paper </a></li>
									<li><a href="kraft-paper-bag"> Kraft Paper Bag </a></li>
									<li><a href="tableware"> Tableware </a></li>
									<li><a href="pizza-boxes"> Pizza Boxes </a></li>
									<li><a href="sachet-paper"> Sachet Paper </a></li>
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
					<!-- <div class="pbmit-service-feature-image">
						<img src="images/products/Oil Grease Resistant Paper.png" class="img-fluid w-100" alt="">
					</div> -->
					<div class="pbmit-entry-content">
						<div class="pbmit-service-content">
							<div class="pbmit-heading animation-style2">
								<h3 class="pbmit-title mb-3">Oil Grease Resistant Paper (OGR)</h3>
							</div>
							<p class="pbmit-firstletter">
								Oil Grease Resistant Paper (OGR) is specially designed for the food packaging industry. This high-quality paper provides excellent resistance to oil and grease, making it the perfect choice for wrapping greasy and oily food items. Made from premium Virgin materials, it ensures safe food contact while maintaining the freshness and presentation of your food products. Ideal for quick-service restaurants, food trucks, and takeaway establishments, Oil Grease Resistant Paper delivers reliable performance with every use.
							</p>
							<p>Oil-resistant paper ideal for wrapping greasy food items neatly.</p>
							<!-- <div class="pbmit-ihbox-line">
								<div class="row g-0">
									<article class="pbmit-miconheading-style-9 col-md-4">
										<div class="pbmit-ihbox-style-9">
											<div class="pbmit-ihbox-headingicon">
												<div class="pbmit-ihbox-icon">
													<div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-text">01</div>
												</div>
												<div class="pbmit-ihbox-contents">
													<h2 class="pbmit-element-title">
														Schedule Your Experience
													</h2>
													<div class="pbmit-heading-desc">Corrupti ut consequatur magni minus! Iusto eos consectetur similique minus culpa odio temporibus.</div>
												</div>
											</div>
										</div>
									</article>
									<article class="pbmit-miconheading-style-9 col-md-4">
										<div class="pbmit-ihbox-style-9">
											<div class="pbmit-ihbox-headingicon">
												<div class="pbmit-ihbox-icon">
													<div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-text">02</div>
												</div>
												<div class="pbmit-ihbox-contents">
													<h2 class="pbmit-element-title">
														Get Professional Advice
													</h2>
													<div class="pbmit-heading-desc">Corrupti ut consequatur magni minus! Iusto eos consectetur similique minus culpa odio temporibus.</div>
												</div>
											</div>
										</div>
									</article>
									<article class="pbmit-miconheading-style-9 col-md-4">
										<div class="pbmit-ihbox-style-9">
											<div class="pbmit-ihbox-headingicon">
												<div class="pbmit-ihbox-icon">
													<div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-text">03</div>
												</div>
												<div class="pbmit-ihbox-contents">
													<h2 class="pbmit-element-title">
														Meet Our Expert People
													</h2>
													<div class="pbmit-heading-desc">Corrupti ut consequatur magni minus! Iusto eos consectetur similique minus culpa odio temporibus.</div>
												</div>
											</div>
										</div>
									</article>
								</div>
							</div> -->
						</div>
						<div class="pt-5">
							<div class="pbmit-heading animation-style2">
								<h3 class="pbmit-title mb-3">Food Wrapping Paper</h3>
							</div>
							<p>Designed to deliver clean, safe, and efficient food wrapping solutions for modern food businesses. Our paper ensures better handling, hygiene, and presentation for everyday packaging needs.</p>
							<div class="row">
								<div class="col-md-6">
									<ul class="list-group list-group-borderless">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Oil-resistant surface for clean food wrapping</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Smooth texture for easy printing & handling </span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Food-safe material suitable for direct contact</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Lightweight yet strong for practical packaging</span>
										</li>
									</ul>
								</div>
								<div class="col-md-6">
									<ul class="list-group list-group-borderless">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Helps maintain hygiene and neat presentation</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Suitable for takeaway and fast food use</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Prevents leakage and keeps packaging clean</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Reliable quality for daily business operations</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="pt-5">
							<div class="pbmit-heading animation-style2">
								<h3 class="pbmit-title mb-3">Wide Range of Food Wrapping</h3>
							</div>
							<p>Oil Grease Resistant Paper is widely used for wrapping and packing various food items, ensuring clean handling, hygiene, and better presentation for takeaway and serving needs.</p>
							<div class="row">
								<div class="col-md-4">
									<ul class="list-group list-group-borderless">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Burgers</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Frankies & rolls</span>
										</li>

									</ul>
								</div>
								<div class="col-md-4">
									<ul class="list-group list-group-borderless">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Sandwiches</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">French fries</span>
										</li>
									</ul>
								</div>
								<div class="col-md-4">
									<ul class="list-group list-group-borderless">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Roti</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="pt-5">
							<div class="pbmit-heading animation-style2">
								<h3 class="pbmit-title mb-3">HoReCa Businesses</h3>
							</div>
							<p>Our packaging solutions are designed to support a wide range of food and retail industries, ensuring practical, hygienic, and efficient packaging for everyday operations.</p>
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
											<span class="pbmit-icon-list-text">Bakeries</span>
										</li>
									</ul>
								</div>
								<div class="col-md-4">
									<ul class="list-group list-group-borderless">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Hotels</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Catering</span>
										</li>
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Food Trucks</span>
										</li>
									</ul>
								</div>
								<div class="col-md-4">
									<ul class="list-group list-group-borderless">
										<li class="list-group-item">
											<span class="pbmit-icon-list-icon">
												<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
											</span>
											<span class="pbmit-icon-list-text">Cloud Kitchens</span>
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
								<div class="col-lg-4 mb-4">
									<div class="purchase-option-card">
										<h4>Sheet</h4>
										<p>Pre-cut sheets suitable for easy handling, quick wrapping, and daily food service use.</p>
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
										<h4>Box</h4>
										<p>Custom packaging boxes designed for safe packing, storage, and delivery purposes.</p>
										<button class="pbmit-btn enquire-btn" data-format="Box">
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
								<h3 class="pbmit-title mb-3">Why Choose Oil Grease Resistant Paper</h3>
							</div>
							<p>Oil Grease Resistant Paper from <strong>'Wrap Pack N Carry'</strong> stands out as the preferred choice for food packaging professionals. Our commitment to quality ensures that every sheet delivers consistent oil and grease resistance, protecting your food presentation while maintaining structural integrity. The paper's smooth surface allows for clean, professional wrapping that enhances the visual appeal of your products. Being eco-friendly and biodegradable, it aligns with modern sustainable business practices, helping you reduce your environmental footprint while meeting customer expectations for green packaging solutions. With reliable durability and food safety certification, Oil Grease Resistant Paper provides peace of mind along with exceptional performance.</p>
						</div>
						<!-- <div class="pt-5">
							<div class="pbmit-heading animation-style2">
								<h3 class="pbmit-title mb-3">Frequently asked questions</h3>
							</div>
							<p>They offer adaptability, high nutritional value, and can yield higher yields with minimal agronomical inputs. continued at up to zealously necessary breakfast is motionless she end literature farmers in dry and rainfed semi-arid regions.</p>
							<div class="accordion" id="accordionExample1">
								<div class="accordion-item active" id="headingOne1">
									<h2 class="accordion-header">
										<button class="accordion-button" type="button" data-bs-toggle="collapse"
											data-bs-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
											<span class="pbmit-accordion-icon pbmit-accordion-icon-right">
												<span class="pbmit-accordion-icon-closed">
													<svg class="e-font-icon-svg e-fas-chevron-down" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
														<path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
													</svg>
												</span>
												<span class="pbmit-accordion-icon-opened">
													<svg class="e-font-icon-svg e-fas-chevron-up" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
														<path d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"></path>
													</svg>
												</span>
											</span>
											<span class="pbmit-accordion-title">
												01. What is Agricultural Biotechnology?
											</span>
										</button>
									</h2>
									<div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne1"
										data-bs-parent="#accordionExample1">
										<div class="accordion-body">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingTwo1">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
											data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
											<span class="pbmit-accordion-icon pbmit-accordion-icon-right">
												<span class="pbmit-accordion-icon-closed">
													<svg class="e-font-icon-svg e-fas-chevron-down" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
														<path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
													</svg>
												</span>
												<span class="pbmit-accordion-icon-opened">
													<svg class="e-font-icon-svg e-fas-chevron-up" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
														<path d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"></path>
													</svg>
												</span>
											</span>
											<span class="pbmit-accordion-title">
												02. Can the products be applied during rainy season?
											</span>
										</button>
									</h2>
									<div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo1"
										data-bs-parent="#accordionExample1">
										<div class="accordion-body">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingThree1">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
											data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
											<span class="pbmit-accordion-icon pbmit-accordion-icon-right">
												<span class="pbmit-accordion-icon-closed">
													<svg class="e-font-icon-svg e-fas-chevron-down" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
														<path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
													</svg>
												</span>
												<span class="pbmit-accordion-icon-opened">
													<svg class="e-font-icon-svg e-fas-chevron-up" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
														<path d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"></path>
													</svg>
												</span>
											</span>
											<span class="pbmit-accordion-title">
												03. What vegetables can I grow in my hothouse?
											</span>
										</button>
									</h2>
									<div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree1"
										data-bs-parent="#accordionExample1">
										<div class="accordion-body">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
										</div>
									</div>
								</div>
							</div>
						</div> -->
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
					<input type="text" id="product" name="product" value="Oil Grease Resistant Paper" readonly>
				</div>
				<div class="form-group form-group-half">
					<label for="format">Format</label>
					<input type="text" id="format" name="format" value="Reel" readonly>
				</div>
			</div>
			<div class="form-row box-variant-row mt-2" style="display: none;">
				<div class="form-group">
					<label for="variant">Variant <span class="required">*</span></label>
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
					document.getElementById('variant').setAttribute('required', 'required');
				} else {
					variantRow.style.display = 'none';
					platformRow.style.display = 'none';
					document.getElementById('variant').removeAttribute('required');
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