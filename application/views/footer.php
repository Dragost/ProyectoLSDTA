
				<!-- BOTTOM PANEL : begin -->
				<div id="bottom-panel">

					<div class="container">
						<div class="row">
							<div class="col-md-4">

								<!-- TEXT WIDGET : begin -->
								<div class="widget text-widget">
									<h3 class="widget-title">Sobre Nosotros</h3>
									<div class="widget-content">

										<div class="various-content">
											<p><strong>Los Secretos de tu Almohada</strong> es un grupo de música pop/rock originario de Zaragoza, formado por Ana María (vocalista y compositora), Jorge (guitarra), Iván (bajo) y Alex (batería).</p>
											<a class="c-button m-outline m-medium" href="<?php echo base_url('sobre'); ?>">Saber más...</a>
										</div>

									</div>
								</div>
								<!-- TEXT WIDGET : end -->

							</div>
							<div class="col-md-4">

								<!-- BLOG WIDGET : begin -->
								<div class="widget blog-widget">
									<h3 class="widget-title">Últimas Noticias</h3>
									<div class="widget-content">

										<ul>
										
											<?php foreach ($ultimas->result() as $row) { ?>
												<li>
													<h4><a href="<?php echo base_url('/noticias/'.$row->slug); ?>"><?php echo $row->title; ?></a></h4>
													<p class="date"><?php echo $row->date; ?></p>
												</li>
											<?php } ?>
											
										</ul>

									</div>
								</div>
								<!-- BLOG WIDGET : end -->

							</div>
							<div class="col-md-4">

								<!-- SUBSCRIBE WIDGET : begin -->
								<div class="widget subscribe-widget">
									<h3 class="widget-title">Newsletter</h3>
									<div class="widget-content">

										<p>Recive todas nuestras <strong>novedades</strong>.</p>

										<form class="subscribe-widget-form" action="//lossecretosdetualmohada.us9.list-manage.com/subscribe/post-json?u=63d0c37ba42c38ad494701754&amp;id=aad725a825&amp;c=?" method="get">

											<!-- VALIDATION ERROR MESSAGE : begin -->
											<p style="display: none;" class="c-alert-message m-warning m-validation-error"><i class="ico fa fa-exclamation-circle"></i>Email address is required.</p>
											<!-- VALIDATION ERROR MESSAGE : end -->

											<!-- SENDING REQUEST ERROR MESSAGE : begin -->
											<p style="display: none;" class="c-alert-message m-warning m-request-error"><i class="ico fa fa-exclamation-circle"></i>There was a connection problem. Try again later.</p>
											<!-- SENDING REQUEST ERROR MESSAGE : end -->

											<!-- SUCCESS MESSAGE : begin -->
											<p style="display: none;" class="c-alert-message m-success"><i class="ico fa fa-check-circle"></i><strong>Sent successfully.</strong></p>
											<!-- SUCCESS MESSAGE : end -->

											<div class="form-fields">
												<input class="m-required m-email" name="EMAIL" type="text" data-placeholder="Your email address" title="Your email address">
												<button class="c-button m-outline submit-btn" type="submit" data-label="Subscribe" data-loading-label="Sending...">Subscribe</button>
											</div>

										</form>

									</div>
								</div>
								<!-- SUBSCRIBE WIDGET : end -->

							</div>
						</div>
					</div>

					<!-- BACK TO TOP : begin -->
					<a href="#header" id="back-to-top" title="Back to top"><i class="fa fa-chevron-up"></i></a>
					<!-- BACK TO TOP : end -->

				</div>
				<!-- BOTTOM PANEL : end -->

			</div>
			<!-- WRAPPER : end -->

			<!-- FOOTER : begin -->
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-push-6">

							<!-- FOOTER MENU : begin -->
							<nav class="footer-menu">
								<ul>
									<li><a href="<?php echo base_url(); ?>">Home</a></li>
									<li><a href="<?php echo base_url('/doc'); ?>" target="_blank">Documentación</a></li>
								</ul>
							</nav>
							<!-- FOOTER MENU : end -->

						</div>
						<div class="col-md-6 col-md-pull-6">

							<!-- FOOTER TEXT : begin -->
							<div class="footer-text">
								<p></p>
							</div>
							<!-- FOOTER TEXT : end -->

						</div>
					</div>
				</div>
			</div>
			<!-- FOOTER : end -->

		</div>
		<!-- BODY : end -->

		<!-- MAIN SIDEBAR : begin -->
		<div id="main-sidebar">
			<div class="main-sidebar-inner">

				<!-- SIDEBAR CLOSE : begin -->
				<button class="sidebar-close" type="button"><i class="fa fa-times"></i></button>
				<!-- SIDEBAR CLOSE : end -->

				<!-- SIDEBAR SEARCH : begin -->
				<form class="sidebar-search" action="index.html">
					<input type="text" data-placeholder="Search for...">
					<button type="submit"><i class="fa fa-search"></i></button>
				</form>
				<!-- SIDEBAR SEARCH : end -->

				<!-- SIDEBAR MENU : begin -->
				<nav class="sidebar-menu m-header-menu-copy">
					<hr class="sidebar-divider">
				</nav>
				<!-- SIDEBAR MENU : end -->

				<!-- SIDEBAR SOCIAL : begin -->
				<ul class="sidebar-social">
					<li><a href="https://twitter.com/LSDTAlmohada"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
				</ul>
				<!-- SIDEBAR SOCIAL : end -->

				<hr class="sidebar-divider">

				<!-- SIDEBAR WIDGETS : begin -->
				<div class="sidebar-widgets">

					<!-- TWITTER WIDGET : begin -->
					<div class="widget twitter-widget m-paginated" data-id="LSDTAlmohada" data-limit="3" data-interval="20000">
						<h3 class="widget-title"><a href="https://twitter.com/LSDTAlmohada">@LSDTAlmohada</a></h3>
						<div class="widget-content">

							<div class="twitter-feed">
								<span class="c-loading-anim"><span></span></span>
							</div>

						</div>
					</div>
					<!-- TWITTER WIDGET : end -->

					<!-- INSTAGRAM WIDGET : begin -->
					<div class="widget instagram-widget" data-id="1237036137" data-limit="6">
						<h3 class="widget-title">Instagram Feed</h3>
						<div class="widget-content">

							<span class="c-loading-anim"><span></span></span>
							<div class="widget-feed"></div>

						</div>
					</div>
					<!-- INSTAGRAM WIDGET : end -->



				</div>
				<!-- SIDEBAR WIDGETS : end -->

			</div>
		</div>
		<!-- MAIN SIDEBAR : end -->

		<!-- SCRIPTS : begin -->
		<script src="<?php echo base_url('js/jquery-1.9.1.min.js'); ?>" type="text/javascript"></script>
		<script src="<?php echo base_url('js/third-party.js'); ?>" type="text/javascript"></script>
		<script src="<?php echo base_url('js/library.js'); ?>" type="text/javascript"></script>
		<script src="<?php echo base_url('js/scripts.js'); ?>" type="text/javascript"></script>
		<!-- SCRIPTS : end -->

	</body>
</html>