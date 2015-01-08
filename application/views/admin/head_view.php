<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LSDTA | ADMIN PANEL</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('img/apple-touch-icon-57x57.png'); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('img/apple-touch-icon-114x114.png'); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('img/apple-touch-icon-72x72.png'); ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('img/apple-touch-icon-144x144.png'); ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('img/apple-touch-icon-60x60.png'); ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('img/apple-touch-icon-120x120.png'); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('img/apple-touch-icon-76x76.png'); ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('img/apple-touch-icon-152x152.png'); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('img/apple-touch-icon-180x180.png'); ?>">
    <link rel="icon" type="image/png" href="<?php echo base_url('img/favicon-192x192.png" sizes="192x192'); ?>">
    <link rel="icon" type="image/png" href="<?php echo base_url('img/favicon-160x160.png" sizes="160x160'); ?>">
    <link rel="icon" type="image/png" href="<?php echo base_url('img/favicon-96x96.png" sizes="96x96'); ?>">
    <link rel="icon" type="image/png" href="<?php echo base_url('img/favicon-16x16.png" sizes="16x16'); ?>">
    <link rel="icon" type="image/png" href="<?php echo base_url('img/favicon-32x32.png" sizes="32x32'); ?>">
    <meta name="msapplication-TileColor" content="#ffaf65">
    <meta name="msapplication-TileImage" content="<?php echo base_url('img/mstile-144x144.png'); ?>">

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('css/plugins/metisMenu/metisMenu.min.css'); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('css/admin/sb-admin-2.css'); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">

    <!-- Switch Bootstrap -->
    <link href="<?php echo base_url('css/bootstrap-switch.min.css'); ?>" rel="stylesheet">

    <!-- Date Picker -->
    <link href="<?php echo base_url('css/bootstrap-datetimepicker.min.css'); ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Los Secretos de tu Almohada</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a <?php if($this->uri->segment(2)=="noticias"):?>class="active"<?php endif; ?> href="<?php echo base_url('admin/noticias'); ?>"><i class="fa fa-newspaper-o"></i> Noticias</a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a <?php if($this->uri->segment(2)=="noticias" && $this->uri->segment(3)==""):?>class="active"<?php endif; ?> href="<?php echo base_url('admin/noticias'); ?>"><i class="fa fa-table fa-fw"></i></i> Listado</a>
                                </li>
                                <li>
                                    <a <?php if($this->uri->segment(2)=="noticias" && $this->uri->segment(3)=="add"):?>class="active"<?php endif; ?> href="<?php echo base_url('admin/noticias/add'); ?>"><i class="fa fa-plus fa-fw"></i> Añadir</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li>
                            <a <?php if($this->uri->segment(2)=="eventos"):?>class="active"<?php endif; ?> href="<?php echo base_url('admin/eventos'); ?>"><i class="fa fa-table fa-fw"></i> Eventos</a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a <?php if($this->uri->segment(2)=="eventos" && $this->uri->segment(3)==""):?>class="active"<?php endif; ?> href="<?php echo base_url('admin/eventos'); ?>"><i class="fa fa-table fa-fw"></i> Listado</a>
                                </li>
                                <li>
                                    <a <?php if($this->uri->segment(2)=="eventos" && $this->uri->segment(3)=="add"):?>class="active"<?php endif; ?> href="<?php echo base_url('admin/eventos/add'); ?>"><i class="fa fa-plus fa-fw"></i> Añadir</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li>
                            <a <?php if($this->uri->segment(2)=="discografia"):?>class="active"<?php endif; ?> href="<?php echo base_url('admin/discografia'); ?>"><i class="fa fa-stop"></i></i> Discografia</a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a <?php if($this->uri->segment(2)=="discografia" && $this->uri->segment(3)==""):?>class="active"<?php endif; ?> href="<?php echo base_url('admin/discografia'); ?>"><i class="fa fa-table fa-fw"></i></i> Listado</a>
                                </li>
                                <li>
                                    <a <?php if($this->uri->segment(2)=="discografia" && $this->uri->segment(3)=="add"):?>class="active"<?php endif; ?> href="<?php echo base_url('admin/discografia/add'); ?>"><i class="fa fa-plus fa-fw"></i> Añadir</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li>
                            <a <?php if($this->uri->segment(2)=="galerias"):?>class="active"<?php endif; ?> href="<?php echo base_url('admin/galerias'); ?>"><i class="fa fa-picture-o"></i></i> Galerías</a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a <?php if($this->uri->segment(2)=="galerias" && $this->uri->segment(3)==""):?>class="active"<?php endif; ?> href="<?php echo base_url('admin/galerias'); ?>"><i class="fa fa-table fa-fw"></i></i> Listado</a>
                                </li>
                                <li>
                                    <a <?php if($this->uri->segment(2)=="galerias" && $this->uri->segment(3)=="add"):?>class="active"<?php endif; ?> href="<?php echo base_url('admin/galerias/add'); ?>"><i class="fa fa-plus fa-fw"></i> Añadir</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li>
                            <a <?php if($this->uri->segment(2)=="bares"):?>class="active"<?php endif; ?> href="<?php echo base_url('admin/bares'); ?>"><i class="fa fa-money"></i></i> Bares</a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a <?php if($this->uri->segment(2)=="bares" && $this->uri->segment(3)==""):?>class="active"<?php endif; ?> href="<?php echo base_url('admin/bares'); ?>"><i class="fa fa-table fa-fw"></i></i> Listado</a>
                                </li>
                                <li>
                                    <a <?php if($this->uri->segment(2)=="bares" && $this->uri->segment(3)=="add"):?>class="active"<?php endif; ?> href="<?php echo base_url('admin/bares/add'); ?>"><i class="fa fa-plus fa-fw"></i> Añadir</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li>
                            <a <?php if($this->uri->segment(2)=="config"):?>class="active"<?php endif; ?> href="<?php echo base_url('admin/config'); ?>"><i class="fa fa-wrench fa-fw"></i> Configuración</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>