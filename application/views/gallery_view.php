
		<!-- BODY : begin -->
		<div id="body">

			<!-- WRAPPER : begin -->
			<div id="wrapper">

				<!-- CORE : begin -->
				<div id="core">

					<!-- PAGE HEADER : begin -->
					<div id="page-header">
						<div class="container">
							<ul class="breadcrumbs">
								<li><a href="<?php echo base_url(); ?>">Home</a></li>
								<li>Galerias</li>
							</ul>
						</div>
					</div>
					<!-- PAGE HEADER : end -->

					<!-- PAGE CONTENT : begin -->
					<div id="page-content">


						<!-- SLIDER : begin -->
							<div class="c-slider" data-interval="8000">
								<div class="slide-list">

									<?php foreach ($images_important->result() as $row) { ?>

									<!-- SLIDE 1 : begin -->
									<div class="slide" style="background-image: url( 'images/uploads/galeria/<?php echo $row->url; ?>' );">
										<div class="slide-bg">
											<div class="container">
												<div class="slide-inner">
													<div class="slide-content various-content textalign-left valign-bottom">


													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- SLIDE 1 : end -->

									<?php } ?>

								</div>
							</div>
							<!-- SLIDER : end -->






						<!-- PORTFOLIO LIST : begin -->
						<div class="portfolio-list">

							<!-- GALLERY : begin -->
							<div class="c-gallery" data-layout="fitRows">

								<!-- ITEM LIST : begin -->
								<ul class="item-list">

									<?php foreach ($galerias->result() as $row) { ?>


									<!-- ITEM : begin -->
									<li class="item m-has-overlay m-overlay-ico m-animated cat-flyers cat-print">
										<a href="/images/uploads/galeria/<?php echo $row->url; ?>" class="item-image lightbox" title="<?php echo $row->title;?>"><img src="/images/uploads/galeria/<?php echo $row->url; ?>" alt="<?php echo $row->title;?>"></a>
										<div class="item-info">
											<h4><?php echo $row->title;?></h4>
										</div>
									</li>
									<!-- ITEM : end -->

									<?php } ?>

									
								</ul>
								<!-- ITEM LIST : end -->

								<!-- PAGINATION : begin -->
								<div class="c-pagination m-ajaxed">
									<div class="container">
										<a href="ajax/portfolio-list-grid-ajaxed-lightbox-page2.html" class="c-button m-outline"
											data-loading-label="Loading..."
											data-no-more-label="No more projects">Cargar Mas</a>
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