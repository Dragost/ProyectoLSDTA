

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Configuración General</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Mantenimiento
                        </div>
                        <div class="panel-body">
                            <div class="row">
	                            <div class="col-xs-12">
                                    <?=validation_errors('<p class="bg-danger">','</p>'); ?>
	                            	<form role="form" method="post">
	                                    <div class="form-group">
	                                        <div class="form-group input-group">
	                                        	<input type="checkbox" name="maintenance" <?php if($settings->maintenance == 1):?>checked<?php endif;?>>
	                                        </div>
	                                        <div class="form-group input-group col-xs-12">


	                                            <div class="form-group input-group">
		                                            <input name="excludeips" type="text" class="form-control" value="<?php echo $settings->excludeips; ?>">
		                                            <span class="input-group-btn">
		                                                <a class="btn btn-default" onclick="addip()"><i class="fa fa-plus"></i> Añadir MI IP</a>
		                                            </span>
		                                        </div>

	                                            <p class="help-block">Añada las IPs Excluidas separadas por Guiones ( - )</p>

	                                            <div class="col-xs-12">
	                                            	<button type="submit" class="btn btn-primary pull-right">Guardar</button>
	                                            </div>

	                                        </div>
	                                    </div>
	                                </form>
                            	
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- /.row -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Parametros de la Web</h2>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12">

                                    <form role="form" method="post">
                                        <div class="form-group">
                                            <div class="form-group input-group col-xs-12">

                                                <div class="form-group">
                                                    <label>Titulo del Sitio</label>
                                                    <input class="form-control" name="title" value="<?php echo $settings->title; ?>">
                                                    <p class="help-block">Utilizado en algunas secciones de la Web.</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Texto del Home</label>
                                                    <textarea class="form-control" name="home_text"><?php echo $settings->home_text; ?></textarea>
                                                    <p class="help-block">Texto de la página inicial del Footer del Sitio.</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Texto del About</label>
                                                    <textarea class="form-control" name="about"><?php echo $settings->about; ?></textarea>
                                                    <p class="help-block">Texto para la página del "Sobre Nosotros".</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Mail</label>
                                                    <input class="form-control" name="mail" value="<?php echo $settings->mail; ?>">
                                                    <p class="help-block">Direccion de correo desde donde se mandan los mails.</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Facebook</label>
                                                    <input class="form-control" name="facebook" value="<?php echo $settings->facebook; ?>">
                                                    <p class="help-block">Solo nombre de usuario de Facebook.</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Twitter</label>
                                                    <input class="form-control" name="twitter" value="<?php echo $settings->twitter; ?>">
                                                    <p class="help-block">Solo nombre de usuario de Twitter.</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Instagram</label>
                                                    <input class="form-control" name="instagram" value="<?php echo $settings->instagram; ?>">
                                                    <p class="help-block">Solo nombre de usuario de Instagram.</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Google Plus</label>
                                                    <input class="form-control" name="gplus" value="<?php echo $settings->gplus; ?>">
                                                    <p class="help-block">Solo nombre de usuario de Google Plus.</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Youtube</label>
                                                    <input class="form-control" name="youtube" value="<?php echo $settings->youtube; ?>">
                                                    <p class="help-block">Solo nombre de usuario del canal del Youtube.</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Spotify</label>
                                                    <input class="form-control" name="spotify" value="<?php echo $settings->spotify; ?>">
                                                    <p class="help-block">Solo nombre de usuario de Spotify.</p>
                                                </div>

                                                <div class="col-xs-12">
                                                    <button type="submit" class="btn btn-primary pull-right">Guardar</button>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url('js/jquery-1.11.0.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('js/plugins/metisMenu/metisMenu.min.js'); ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('js/sb-admin-2.js'); ?>"></script>

    <!-- Switch Bootstrap -->
    <script src="<?php echo base_url('js/bootstrap-switch.js'); ?>"></script>
    <script type="text/javascript">

    	$("[name='maintenance']").bootstrapSwitch();

        function addip(){
            $("[name='excludeips']").val($("[name='excludeips']").val() + "-<?php echo $ip; ?>");
        }

    </script>

    <!-- Tinymce -->
    <script type="text/javascript" src="<?php echo base_url('/js/plugins/tinymce/tinymce.min.js'); ?>"></script>
    <script type="text/javascript">
    tinymce.init({
        selector: "textarea",
        theme: "modern",
        language : 'es',
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        toolbar2: "print preview media | forecolor backcolor emoticons",
        image_advtab: true,
        templates: [
            {title: 'Test template 1', content: 'Test 1'},
            {title: 'Test template 2', content: 'Test 2'}
        ]
    });
    </script>

</body>

</html>