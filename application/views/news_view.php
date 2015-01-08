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
								<li>Noticias</li>
							</ul>
						</div>
					</div>
					<!-- PAGE HEADER : end -->

					<div class="container">
						<div class="row">
							<div class="col-md-8">

								<!-- PAGE CONTENT : begin -->
								<div id="page-content" style="padding-top:20px;">

									<!-- BLOG LIST : begin -->
									<div class="blog-list">



										<?php foreach ($noticias->result() as $row) { ?>

										<!-- QUOTE ARTICLE : begin -->
										<article class="quote">
											<div class="article-inner">

												<!-- ARTICLE HEADER : begin -->
												<header class="article-header">
													<span class="article-date"><?php echo $row->date; ?></span>
													<h2 class="article-title"><a href="blog-post-quote.html"><?php echo $row->title; ?></a></h2>
												</header>
												<!-- ARTICLE HEADER : end -->

												<!-- ARTICLE QUOTE : begin -->
												<div class="article-quote">
													<?php echo $row->text; ?>
												</div>
												<!-- ARTICLE QUOTE : end -->

												<!-- ARTICLE FOOTER : begin -->
												<footer class="article-footer">
													<ul class="article-info">
														<li class="author">Los Secretos de tu Almohada</li>
														<li class="categories"><a href="#">Actualidad</a></li>
														<li class="comments"><a href="#">0 comments</a></li>
													</ul>
													<p class="article-more"><a href="<?php echo base_url('/noticias/'.$row->slug); ?>" class="c-button m-outline">Leer mas</a></p>
												</footer>
												<!-- ARTICLE FOOTER : end -->

											</div>
										</article>
										<!-- QUOTE ARTICLE : end -->

										<?php } ?>



									</div>
									<!-- BLOG LIST : end -->

									<!-- PAGINATION : begin -->
									<div class="c-pagination">
										<ul>
											<li class="pagination-prev"><a href="#" class="c-button m-outline"><i class="fa fa-chevron-left"></i></a></li>
											<li><a href="#" class="c-button m-outline">1</a></li>
											<li class="m-active"><a href="#" class="c-button m-outline">2</a></li>
											<li><a href="#" class="c-button m-outline">3</a></li>
											<li class="pagination-next"><a href="#" class="c-button m-outline"><i class="fa fa-chevron-right"></i></a></li>
										</ul>
									</div>
									<!-- PAGINATION : end -->

								</div>
								<!-- PAGE CONTENT : end -->

							</div>
							<div class="col-md-4">

								<!-- PAGE SIDEBAR : begin -->
								<aside id="page-sidebar">

									<!-- SIDEBAR SEARCH : begin -->
									<div class="widget search-widget">
										<h3 class="widget-title">Buscar</h3>
										<div class="widget-content">

											<form class="c-search-form" action="search-results.html">
												<div class="form-fields">
													<input type="text" data-placeholder="Lo que desea buscar...">
													<button class="c-button" type="submit"><i class="fa fa-search"></i></button>
												</div>
											</form>

										</div>
									</div>
									<!-- SIDEBAR SEARCH : end -->

									<!-- BLOG WIDGET : begin -->
									<div class="widget blog-widget">
										<h3 class="widget-title">Últimos Posts</h3>
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

									<!-- SIDEBAR TAGS : begin -->
									<div class="widget tags-widget">
										<h3 class="widget-title">Palabras mas buscadas</h3>
										<div class="widget-content">
											<ul>
												<li><a href="#">Acustico</a></li>
												<li><a href="#">Concierto</a></li>
												<li><a href="#">Foto</a></li>
												<li><a href="#">Portrait</a></li>
												<li><a href="#">Space</a></li>
												<li><a href="#">Stars</a></li>
											</ul>
										</div>
									</div>
									<!-- SIDEBAR TAGS : end -->

								</aside>
								<!-- PAGE SIDEBAR : end -->

							</div>
						</div>
					</div>

				</div>
				<!-- CORE : end -->