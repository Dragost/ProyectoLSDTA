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
								<li>Discografía</li>
							</ul>
						</div>
					</div>
					<!-- PAGE HEADER : end -->

					<div class="container">
						<div class="row">


							<section class="c-section" style="padding: 20px 0;">
								<div class="section-inner">

									<div class="container">
										<div class="row">


											<?php if($discos->num_rows() == 1){ ?>
											<div class="col-md-4"></div>
											<?php } ?>

											<?php foreach ($discos->result() as $row) { ?>

											<div class="col-md-4">

												<!-- SERVICE : begin -->
												<div class="c-service">
													<p class="service-image m-animated">
														<img src="<?php echo base_url('/images/uploads/discografia/'.$row->img); ?>" alt="">
													</p>
													<div class="service-ico"><i class="fa fa-spotify"></i></div>
													<div class="service-content">
														<h3><?php echo $row->title; ?></h3>
														<p><?php echo $row->text; ?></p>
														<p><a href="#" class="c-button m-outline">Comprar</a></p>
													</div>
												</div>
												<!-- SERVICE : end -->

											</div>

											<?php } ?>

										</div>
									</div>

								</div>
							</section>

						</div>
					</div>

				</div>
				<!-- CORE : end -->