<!-- BODY : begin -->
		<div id="body">

			<!-- WRAPPER : begin -->
			<div id="wrapper">

				<!-- CORE : begin -->
				<div id="core" class="m-has-sidebar">

					<!-- PAGE HEADER : begin -->
					<div id="page-header">
						<div class="container">
							<ul class="breadcrumbs">
								<li><a href="<?php echo base_url(); ?>">Home</a></li>
								<li>Conciertos</li>
							</ul>
						</div>
					</div>
					<!-- PAGE HEADER : end -->

					<div class="container">
						<div class="row">


							<!-- TESTIMONIALS SECTION : begin -->
							<section class="c-section" id="testimonials" style="padding: 20px 0;">
								<div class="section-inner">

									<div class="container">
										<div class="row">
											<div class="col-sm-10 col-sm-offset-1">

												<?php $c = 0; ?>
												<?php foreach ($conciertos->result() as $row) { ?>


													<?php if ( $c%2!=0 ) { ?>
													<!-- TESTIMONIAL : begin -->
													<div class="c-testimonial m-portrait-on-left" data-inview-anim="fadeInLeft">
														<div class="testimonial-inner">
															<p class="testimonial-portrait" style="text-align: center;">
																<span class="" style="color: #7BB0E2; font-weight: bold; font-size: 2em;"><?php echo date_format(date_create($row->date_start), "d"); ?></span>
																<br>
																<span class="" style="color: #7BB0E2; font-weight: bold; font-size: 2em;"><?php echo date_format(date_create($row->date_start), "M"); ?></span>
															</p>
															<blockquote>
																<p><?php echo $row->text; ?> - <?php echo date_format(date_create($row->date_start), "d M Y"); ?> a las <?php echo date_format(date_create($row->date_start), "h:m"); ?></p>
																<footer>
																	<strong><?php echo $row->city; ?></strong>   <a href="#" class="c-button m-outline" target="_blank">Ver en Facebook</a>
																</footer>
															</blockquote>
														</div>
													</div>
													<!-- TESTIMONIAL : end -->
													<hr class="c-divider m-large">


													<?php } else { ?>

													<!-- TESTIMONIAL : begin -->
													<div class="c-testimonial m-portrait-on-right animated fadeInLeft" data-inview-anim="fadeInLeft">
														<div class="testimonial-inner">
															<p class="testimonial-portrait" style="text-align: center;">
																<span class="" style="color: #7BB0E2; font-weight: bold; font-size: 2em;"><?php echo date_format(date_create($row->date_start), "d"); ?></span>
																<br>
																<span class="" style="color: #7BB0E2; font-weight: bold; font-size: 2em;"><?php echo date_format(date_create($row->date_start), "M"); ?></span>
															</p>
															<blockquote>
																<p><?php echo $row->text; ?> - <?php echo date_format(date_create($row->date_start), "d M Y"); ?> a las <?php echo date_format(date_create($row->date_start), "h:m"); ?></p>
																<footer>
																	<strong><?php echo $row->city; ?></strong>   <a href="#" class="c-button m-outline" target="_blank">Ver en Facebook</a>
																</footer>
															</blockquote>
														</div>
													</div>

													<!-- TESTIMONIAL : end -->
													<hr class="c-divider m-large">



													<?php } ?>

													<?php $c++; ?>
												<?php } ?>


											</div>
										</div>

										<hr class="c-divider m-small m-transparent">
										<p class="textalign-center"><a href="#" class="c-button m-outline" target="_blank">Mira nuestros videos</a></p>

									</div>

								</div>
							</section>
							<!-- TESTIMONIALS SECTION : end -->

						</div>
					</div>

				</div>
				<!-- CORE : end -->