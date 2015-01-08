

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Noticias</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Listado de noticias
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="datatable" class="table table-striped table-bordered table-hover dataTable no-footer display" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Titulo</th>
                                            <th>Fecha</th>
                                            <th>Activo</th>
                                            <th>Editar</th>
                                            <th>Borrar</th>
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

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url('js/plugins/dataTables/jquery.dataTables.js'); ?>"></script>
    <script src="<?php echo base_url('js/plugins/dataTables/dataTables.bootstrap.js'); ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('js/sb-admin-2.js'); ?>"></script>


    <!-- Datatables Initialition -->
    <script>

                $(document).ready(function() {

                   mitabla = $('#datatable').dataTable( {
                        "iDisplayLength": 5,
                        "aLengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
                        "bProcessing": true,
                        "bServerSide": false,
                        "bAutoWidth": true,
                        "sAjaxSource": "<?php echo base_url('admin/noticias/show');?>",
                        "language": {
                            "url": "/js/plugins/dataTables/lang/Spanish.json"
                        },
                        "aoColumns": [
                          
                            { "mData": "id" },
                            { "mData": "title"},
                            { "mData": "date"},
                            { "mData": "active"},
                            { "mData": "id",
                                "mRender": function(data, type, full){
                                    return '<a href="<?php echo base_url("admin/noticias/edit"); ?>/'+data+'" class="btn btn-success pull-right">Editar</a>';
                                },
                                "bSortable":false,
                                "bSearchtable":false
                            },
                            { "mData": "id",
                                "mRender": function(data, type, full){
                                    return '<a onclick="return sure()" href=<?php echo base_url("admin/noticias/del"); ?>/'+data+'" class="btn btn-danger pull-right">Eliminar</a>';
                                },
                                "bSortable":false,
                                "bSearchtable":false
                            }

                        ]
           
                    });                             
                    
        });
                    
    

    </script>

    <script type="text/javascript">
        function sure() { //v4.0
            if (confirm("¡SE DISPONE A BORRAR LA NOTICIA SELECCIONADA! \n Pulse Cancelar si no es esa su intención")){
                return true
            }else{
                return false
            }
        }
    </script>

</body>

</html>