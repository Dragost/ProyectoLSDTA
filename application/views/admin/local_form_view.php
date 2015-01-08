

        <div id="page-wrapper">

            <!-- /.row -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default" style="margin-top: 20px;">
                        <div class="panel-heading">
                            <h3>Configuración bar <?php echo @$disco_data->id; ?></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <?=validation_errors('<p class="bg-danger">','</p>'); ?>
                                    <form role="form" method="post">
                                        <div class="form-group">
                                            <div class="form-group input-group col-xs-12">

                                                <div class="row">

                                                    <div class="col-lg-6">

                                                        <div class="form-group">
                                                            <label>Nombre</label>
                                                            <input class="form-control" name="name" value="<?php echo @$local_data->name; ?>">
                                                            <p class="help-block">Nombre del bar.</p>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Ciudad</label>
                                                            <input class="form-control" name="city" value="<?php echo @$local_data->city; ?>">
                                                            <p class="help-block">Ciudad del bar.</p>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Dirección</label>
                                                            <input class="form-control" name="dir" value="<?php echo @$local_data->dir; ?>">
                                                            <p class="help-block">Nombre del bar.</p>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Telefono</label>
                                                            <input class="form-control" name="tel" value="<?php echo @$local_data->tel; ?>">
                                                            <p class="help-block">Teléfono del bar.</p>
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">

                                                        <div class="form-group">
                                                            <label>Web</label>
                                                            <input class="form-control" name="web" value="<?php echo @$local_data->web; ?>">
                                                            <p class="help-block">Web del bar.</p>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Twitter</label>
                                                            <input class="form-control" name="twitter" value="<?php echo @$local_data->twitter; ?>">
                                                            <p class="help-block">Twitter del bar.</p>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Facebook</label>
                                                            <input class="form-control" name="face" value="<?php echo @$local_data->face; ?>">
                                                            <p class="help-block">Facebook del bar.</p>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Other</label>
                                                            <input class="form-control" name="other" value="<?php echo @$local_data->other; ?>">
                                                            <p class="help-block">Alguna otra cosa del bar.</p>
                                                        </div>

                                                    </div>


                                                    <div class="col-xs-12">
                                                        <input type="hidden" name="id" value="<?php echo @$local_data->id; ?>">
                                                        <button type="submit" class="btn btn-primary pull-right">Guardar</button>
                                                    </div>

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







            <?php if (isset($local_data->id)) { ?>



            <!-- /.row -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default" style="margin-top: 20px;">
                        <div class="panel-heading">
                            Añadir registro
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <?=validation_errors('<p class="bg-danger">','</p>'); ?>
                                    <form role="form" method="post" action="<?php echo base_url('/admin/bares/reg'); ?>">
                                        <div class="form-group">
                                            <div class="form-group input-group col-xs-12">

                                                <div class="row">

                                                    <div class="col-lg-2">

                                                        <div class="form-group">
                                                            <label>Descripcion</label>
                                                            <input class="form-control" name="desc">
                                                        </div>


                                                    </div>
                                                    <div class="col-lg-2">

                                                        <div class="form-group">
                                                            <label>Fecha Inicio</label>
                                                            <div class="input-group date" id="datepicker_a">
                                                                <input type='text' class="form-control" name="init_date" data-date-format="YYYY-MM-DD HH:mm:ss"/>
                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                </span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-2">

                                                        <div class="form-group">
                                                            <label>Fecha Fin</label>
                                                            <div class="input-group date" id="datepicker_b">
                                                                <input type='text' class="form-control" name="end_date" data-date-format="YYYY-MM-DD HH:mm:ss"/>
                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                </span>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="col-lg-2">

                                                        <div class="form-group">
                                                            <label>Precio</label>
                                                            <input class="form-control" name="price">
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-2">

                                                        <div class="form-group">
                                                            <label>Satisfacción</label>
                                                            <select class="form-control" name="quality">
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>

                                                    </div>


                                                    <div class="col-lg-2">
                                                        <input type="hidden" name="id" value="<?php echo @$local_data->id; ?>">
                                                        <button type="submit" class="btn btn-primary pull-right" style="margin-top: 24px;">Guardar</button>
                                                    </div>

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
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Listado de registro
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="datatable" class="table table-striped table-bordered table-hover dataTable no-footer display" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Descripción</th>
                                            <th>Fecha inicio</th>
                                            <th>Fecha fin</th>
                                            <th>Precio</th>
                                            <th>Satisfacción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>loading...</td>
                                      </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <?php } ?>
            
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
            $('#datepicker_a').datetimepicker();
            $('#datepicker_b').datetimepicker();
            $("#datepicker_a").on("dp.change",function (e) {
               $('#datepicker_b').data("DateTimePicker").setMinDate(e.date);
            });
            $("#datepicker_b").on("dp.change",function (e) {
               $('#datepicker_a').data("DateTimePicker").setMaxDate(e.date);
            });
        });
    </script>


    <?php if (isset($local_data->id)) { ?>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url('js/plugins/dataTables/jquery.dataTables.js'); ?>"></script>
    <script src="<?php echo base_url('js/plugins/dataTables/dataTables.bootstrap.js'); ?>"></script>

    <!-- Datatables Initialition -->
    <script>

        $(document).ready(function() {

            mitabla = $('#datatable').dataTable( {
                "iDisplayLength": 5,
                "aLengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
                "bProcessing": true,
                "bServerSide": false,
                "bAutoWidth": true,
                "sAjaxSource": "<?php echo base_url('admin/bares/show_reg/'.$local_data->id);?>",
                "language": {
                    "url": "/js/plugins/dataTables/lang/Spanish.json"
                },
                "aoColumns": [
                  
                    { "mData": "id" },
                    { "mData": "desc"},
                    { "mData": "init_date"},
                    { "mData": "end_date"},
                    { "mData": "price"},
                    { "mData": "quality"}

                ]

            });                             

        });
                    
    

    </script>

    <!-- DatePicker -->
    <script type="text/javascript" src="<?php echo base_url('/js/moment.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('/js/bootstrap-datetimepicker.min.js'); ?>"></script>
    <script type="text/javascript">
        $(function () {
            $('#datepicker_a').datetimepicker();
            $('#datepicker_b').datetimepicker();
            $("#datepicker_a").on("dp.change",function (e) {
               $('#datepicker_b').data("DateTimePicker").setMinDate(e.date);
            });
            $("#datepicker_b").on("dp.change",function (e) {
               $('#datepicker_a').data("DateTimePicker").setMaxDate(e.date);
            });
        });
    </script>

    <?php } ?>


</body>

</html>