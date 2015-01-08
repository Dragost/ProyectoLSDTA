

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Galerías</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Configuración Galería <?php echo @$gallery_data->id; ?></h3>
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
                                                    <input class="form-control" name="title" value="<?php echo @$gallery_data->title; ?>">
                                                    <p class="help-block">Título del evento.</p>
                                                </div>

                                                <div class="row">

                                                    <div class="col-md-4">
                                                        <label>Activo</label><br>
                                                        <input type="checkbox" name="active" <?php if(@$gallery_data->active == 1):?>checked<?php endif;?>>
                                                        <p class="help-block">Activar para mostrar contenido en la Web.</p>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Importante</label><br>
                                                        <input type="checkbox" name="important" <?php if(@$gallery_data->important == 1):?>checked<?php endif;?>>
                                                        <p class="help-block">Activar para mostrar contenido en las primeras secciónes de la Galería.</p>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Home Slider</label><br>
                                                        <input type="checkbox" name="home_slider" <?php if(@$gallery_data->home_slider == 1):?>checked<?php endif;?>>
                                                        <p class="help-block">Activar para mostrar contenido en la la Página Principal.</p>
                                                    </div>           

                                                </div>



                                                <div class="col-xs-12">
                                                    <input type="hidden" name="id" value="<?php echo @$gallery_data->id; ?>">
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


            <?php if (isset($gallery_data->id)) { ?>

            <!-- /.row -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Contenido</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12">


                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                      <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                          <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                              Añadir Imágen
                                            </a>
                                          </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                          <div class="panel-body">
                                            
                                            <form role="form" method="post" action="../add_img" enctype="multipart/form-data">

                                                <div class="form-group">
                                                    <label>Imágen de portada.</label>
                                                    <input type="file" name="img" accept="image/*">
                                                </div>

                                                <div class="col-xs-12">
                                                    <input type="hidden" name="gallerys_id" value="<?php echo @$gallery_data->id; ?>">
                                                    <button type="submit" class="btn btn-primary pull-right">Guardar</button>
                                                </div>

                                            </form>
                                            <!-- /.Form -->

                                          </div>
                                        </div>
                                      </div>
                                      <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo" aria-multiselectable="true">
                                          <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                              Añadir Vídeo
                                            </a>
                                          </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                          <div class="panel-body">
                                            


                                            <form role="form" method="post" action="../add_video">

                                                <div class="form-group">
                                                    <label>Link del Vídeo</label>
                                                    <input class="form-control" name="name">
                                                    <p class="help-block">Link al vídeo</p>
                                                </div>

                                                <div class="col-xs-12">
                                                    <input type="hidden" name="gallerys_id" value="<?php echo @$gallery_data->id; ?>">
                                                    <button type="submit" class="btn btn-primary pull-right">Guardar</button>
                                                </div>

                                            </form>
                                            <!-- /.Form -->


                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- /.Collapse Panel -->

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

            <?php } ?>


            <?php

            if(isset($images_gallery)){

                $c = 0;
                foreach ($images_gallery->result() as $row) {


                    if ($c == 0) { 

                        echo '<div class="row">';

                    } 
                    ?>

                        <div class="col-lg-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    
                                </div>
                                <div class="panel-body">
                                    <img width="100%" src="<?php echo base_url('/images/uploads/galeria/'.$row->url); ?>">
                                </div>
                                <div class="panel-footer">
                                    Panel Footer
                                </div>
                            </div>
                        </div>

                    <?php 

                    if ($c == 3){

                        echo '</div>';

                        $c = 0;

                    } 

                    $c++;
                }
            }
            ?>



            
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
        $("[name='important']").bootstrapSwitch();
        $("[name='home_slider']").bootstrapSwitch();

    </script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('js/sb-admin-2.js'); ?>"></script>


</body>

</html>