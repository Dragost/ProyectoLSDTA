

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Noticias</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Configuración noticia <?php echo @$news_data->id; ?></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <?=validation_errors('<p class="bg-danger">','</p>'); ?>
                                    <form role="form" method="post">
                                        <div class="form-group">
                                            <div class="form-group input-group col-xs-12">

                                                <div class="form-group">
                                                    <label>Tìtulo</label>
                                                    <input class="form-control" name="title" value="<?php echo @$news_data->title; ?>">
                                                    <p class="help-block">Será el titulo a mostrar.</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Texto</label>
                                                    <textarea class="form-control" name="text"><?php echo @$news_data->text; ?></textarea>
                                                    <p class="help-block">Texto de la noticia.</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Fecha</label>
                                                    <div class="input-group date" id="datepicker">
                                                        <input type='text' class="form-control" name="date" data-date-format="YYYY-MM-DD HH:mm:ss" value="<?php echo @$news_data->date; ?>"/>
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        </span>
                                                    </div>
                                                    <p class="help-block">Fecha de publicación.</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Url Amigable</label>
                                                    <input class="form-control" name="slug" value="<?php echo @$news_data->slug; ?>" disabled>
                                                    <p class="help-block">Mostrado en la ruta del navegador.</p>
                                                </div>

                                                <div class="form-group input-group">
                                                    <input type="checkbox" name="active" <?php if(@$news_data->active == 1):?>checked<?php endif;?>>
                                                </div>

                                                <div class="col-xs-12">
                                                    <input type="hidden" name="id" value="<?php echo @$news_data->id; ?>">
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

    <!-- Switch Bootstrap -->
    <script src="<?php echo base_url('js/bootstrap-switch.js'); ?>"></script>
    <script type="text/javascript">

        $("[name='active']").bootstrapSwitch();

    </script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('js/sb-admin-2.js'); ?>"></script>

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

    <!-- DatePicker -->
    <script type="text/javascript" src="<?php echo base_url('/js/moment.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('/js/bootstrap-datetimepicker.min.js'); ?>"></script>
    <script type="text/javascript">
        $(function () {
            $('#datepicker').datetimepicker();
        });
    </script>

</body>

</html>