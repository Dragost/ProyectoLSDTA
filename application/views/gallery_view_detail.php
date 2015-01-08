
		<!-- BODY : begin -->
		<div id="body">

			<!-- WRAPPER : begin -->
			<div id="wrapper">

				<!-- CORE : begin -->
				<div id="core">

					<!-- PAGE HEADER : begin -->
					<div id="page-header">
						<div class="container">
							<h1>Galerias con carga via AJAX</h1>
							<ul class="breadcrumbs">
								<li><a href="<?php echo base_url(); ?>">Home</a></li>
								<li><a href="<?php echo base_url('galerias'); ?>">Galerias</a></li>
								<li><?php echo @$valor; ?></li>
							</ul>
						</div>
					</div>
					<!-- PAGE HEADER : end -->

					<!-- PAGE CONTENT : begin -->
					<div id="page-content">

						<!-- PORTFOLIO LIST : begin -->
						<div class="portfolio-list">

							<!-- GALLERY : begin -->
							<div class="c-gallery" data-layout="fitRows">

								<!-- GALLERY TOOLS : begin -->
								<div class="gallery-tools">
									<div class="container">
										<div class="clearfix">

											<!-- GALLERY FILTER : begin -->
											<ul class="gallery-filter">
												<li><button class="m-active" type="button" data-filter="*">all</button></li>
												<li><button type="button" data-filter=".cat-animation">animation</button></li>
												<li><button type="button" data-filter=".cat-print">print</button></li>
												<li><button type="button" data-filter=".cat-pixelart">pixelart</button></li>
												<li><button type="button" data-filter=".cat-flyers">flyers</button></li>
											</ul>
											<!-- GALLERY FILTER : end -->

										</div>
									</div>
								</div>
								<!-- GALLERY TOOLS : end -->

								<!-- ITEM LIST : begin -->
								<ul class="item-list">

									<!-- ITEM : begin -->
									<li class="item m-has-overlay m-overlay-ico m-animated cat-flyers cat-print">
										<a href="/images/project_01.jpg" class="item-image lightbox" title="Lorem ipsum"><img src="/images/project_01.jpg" alt=""></a>
										<div class="item-info">
											<h4>Lorem ipsum</h4>
										</div>
									</li>
									<!-- ITEM : end -->

									<!-- ITEM : begin -->
									<li class="item m-has-overlay m-animated cat-animation">
										<a href="/images/project_02.jpg" class="item-image lightbox" title="Dolor sit amet"><img src="/images/project_02.jpg" alt=""></a>
										<div class="item-info">
											<h4>Dolor sit amet</h4>
										</div>
									</li>
									<!-- ITEM : end -->

									<!-- ITEM : begin -->
									<li class="item m-has-overlay m-animated cat-video">
										<a href="http://vimeo.com/34389736" class="item-image lightbox-video" title="Consectetuer"><img src="/images/project_03.jpg" alt=""></a>
										<div class="item-info">
											<h4>Consectetuer</h4>
										</div>
									</li>
									<!-- ITEM : end -->

									<!-- ITEM : begin -->
									<li class="item m-has-overlay m-animated cat-animation">
										<a href="/images/project_04.jpg" class="item-image lightbox" title="Adipiscing elit"><img src="/images/project_04.jpg" alt=""></a>
										<div class="item-info">
											<h4>Adipiscing elit</h4>
										</div>
									</li>
									<!-- ITEM : end -->

									<!-- ITEM : begin -->
									<li class="item m-has-overlay m-animated cat-flyers cat-pixelart">
										<a href="/images/project_05.jpg" class="item-image lightbox" title="Aenean commodo"><img src="/images/project_05.jpg" alt=""></a>
										<div class="item-info">
											<h4>Aenean commodo</h4>
										</div>
									</li>
									<!-- ITEM : end -->

									<!-- ITEM : begin -->
									<li class="item m-has-overlay m-animated cat-video">
										<a href="http://vimeo.com/39493181" class="item-image lightbox-video" title="Ligula eget dolor"><img src="/images/project_06.jpg" alt=""></a>
										<div class="item-info">
											<h4>Ligula eget dolor</h4>
										</div>
									</li>
									<!-- ITEM : end -->

									<!-- ITEM : begin -->
									<li class="item m-has-overlay m-animated cat-print">
										<a href="/images/project_07.jpg" class="item-image lightbox" title="Aenean massa"><img src="/images/project_07.jpg" alt=""></a>
										<div class="item-info">
											<h4>Aenean massa</h4>
										</div>
									</li>
									<!-- ITEM : end -->

									<!-- ITEM : begin -->
									<li class="item m-has-overlay m-animated cat-animation cat-pixelart">
										<a href="/images/project_08.jpg" class="item-image lightbox" title="Sociis natoque"><img src="/images/project_08.jpg" alt=""></a>
										<div class="item-info">
											<h4>Sociis natoque</h4>
										</div>
									</li>
									<!-- ITEM : end -->

								</ul>
								<!-- ITEM LIST : end -->

								<!-- PAGINATION : begin -->
								<div class="c-pagination m-ajaxed">
									<div class="container">
										<a href="ajax/portfolio-list-grid-ajaxed-lightbox-page2.html" class="c-button m-outline"
											data-loading-label="Loading..."
											data-no-more-label="No more projects">Load More</a>
									</div>
								</div>
								<!-- PAGINATION : end -->

							</div>
							<!-- GALLERY : end -->

						</div>
						<!-- PORTFOLIO LIST : end -->

					</div>
					<!-- PAGE CONTENT : end -->

				</div>
				<!-- CORE : end -->