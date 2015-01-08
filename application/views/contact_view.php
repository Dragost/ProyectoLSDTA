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
								<li><a href="<?php echo base_url(''); ?>">Home</a></li>
								<li>Contacto</li>
							</ul>
						</div>
					</div>
					<!-- PAGE HEADER : end -->

					<!-- PAGE CONTENT : begin -->
					<div id="page-content">
						<div class="various-content">

							<!-- INFO : begin -->
							<section style="padding: 20px 0;">
								<div class="container">
									<div class="row">
										<div class="col-sm-6">

											<!-- ICON BLOCK : begin -->
											<div class="c-icon-block">
												<i class="fa fa-building"></i>
												<h3>Somos un Grupo de Zaragoza</h3>
												<p>Tocamos alla donde nos quieran</p>
											</div>
											<!-- ICON BLOCK : end -->

										</div>
										<div class="col-sm-6">

											<!-- ICON BLOCK : begin -->
											<div class="c-icon-block">
												<i class="fa fa-envelope-o"></i>
												<h3>Email &amp; Teléfono</h3>
												<p><a href="#">info@lossecretosdetualmohada.com</a><br>
												695 990 620</p>
											</div>
											<!-- ICON BLOCK : end -->

										</div>
									</div>
								</div>
							</section>
							<!-- INFO : end -->

							<!-- GOOGLE MAP : begin -->
							<section>
								<!-- If you specify the "data-address" attribute, "data-latitude" and "data-longitude" are optional -->
								<div class="c-gmap"
									data-address="Zaragoza"
									data-zoom="13"
									data-maptype="ROADMAP"
									data-enable-mousewheel="false">
								</div>
							</section>
							<!-- GOOGLE MAP : end -->

							<!-- FORM SECTION : begin -->
							<section>
								<div class="container">

									<h2>Contacta con nosotros</h2>

									<!-- CONTACT FORM : begin -->
									<form id="contact-form" class="default-form m-ajax-form" action="ajax/contact-form.php" method="post" >
										<input type="hidden" name="contact-form">

										<!-- FORM VALIDATION ERROR MESSAGE : begin -->
										<p class="c-alert-message m-warning m-validation-error" style="display: none;"><i class="ico fa fa-exclamation-circle"></i>Por favor, rellene los campos requeridos (*).</p>
										<!-- FORM VALIDATION ERROR MESSAGE : end -->

										<!-- SENDING REQUEST ERROR MESSAGE : begin -->
										<p class="c-alert-message m-warning m-request-error" style="display: none;"><i class="ico fa fa-exclamation-circle"></i>Ha habido un problema de conexión. Inténtalo mas tarde.</p>
										<!-- SENDING REQUEST ERROR MESSAGE : end -->

										<div class="row">
											<div class="col-sm-4">

												<!-- NAME FIELD : begin -->
												<div class="form-field">
													<label for="contact-name">Tu Nombre <span>*</span></label>
													<input id="contact-name" name="contact-name" class="m-required">
												</div>
												<!-- NAME FIELD : end -->

												<!-- EMAIL FIELD : begin -->
												<div class="form-field">
													<label for="contact-email">Tu Dirección de Correo <span>*</span></label>
													<input id="contact-email" name="contact-email" class="m-required m-email">
												</div>
												<p style="display: none;">
													<label for="contact-email-hp">Tu Dirección de Correo de Nuevo</label>
													<input id="contact-email-hp" name="contact-email-hp">
												</p>
												<!-- EMAIL FIELD : end -->

												<!-- PHONE FIELD : begin -->
												<div class="form-field">
													<label for="contact-phone">Tu número de teléfono</label>
													<input id="contact-phone" name="contact-phone">
												</div>
												<!-- PHONE FIELD : end -->

											</div>
											<div class="col-sm-8">

												<!-- SUBJECT FIELD : begin -->
												<div class="form-field">
													<label for="contact-subject">Asunto del Mensaje</label>
													<input id="contact-subject" name="contact-subject">
												</div>
												<!-- SUBJECT FIELD : end -->

												<!-- MESSAGE FIELD : begin -->
												<div class="form-field">
													<label for="contact-message">Mensaje <span>*</span></label>
													<textarea id="contact-message" name="contact-message" class="m-required"></textarea>
												</div>
												<!-- MESSAGE FIELD : end -->

												<!-- SUBMIT BUTTON : begin -->
												<div class="form-field">
													<button class="submit-btn c-button" type="submit" data-label="Send Message" data-loading-label="Sending...">Enviar Mensage</button>
												</div>
												<!-- SUBMIT BUTTON : end -->

											</div>
										</div>

									</form>
									<!-- CONTACT FORM : end -->

								</div>
							</section>
							<!-- FORM SECTION : end -->

						</div>
					</div>
					<!-- PAGE CONTENT : end -->

				</div>
				<!-- CORE : end -->