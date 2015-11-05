<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>House of English</title>

   
    
    <link href="<?php echo base_url('bower_components/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
     <!-- MetisMenu CSS http://startbootstrap.com/bootstrap-resources/#ui -->
    

    <link href="<?php echo base_url('bower_components/metisMenu/dist/metisMenu.min.css')?>" rel="stylesheet">

    <!-- Timeline CSS -->
  
    <link href="<?php echo base_url('dist/css/timeline.css')?>" rel="stylesheet">

    <!-- Custom CSS -->
   
    <link href="<?php echo base_url('dist/css/sb-admin-2.css')?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    
    <link href="<?php echo base_url('bower_components/morrisjs/morris.css')?>" rel="stylesheet">

    <!-- Custom Fonts -->
   
    <link href="<?php echo base_url('bower_components/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">


    
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">

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
                <a class="navbar-brand" href="index.html"> House of English </a>
            </div>
            <!-- /.navbar-header -->
            
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            <a href='<?php echo site_url('descuentos/index')?>'>Asistencias</a> 
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Alumnos <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Nuevo Alumno</a>
                                </li>
                                <li>
                                    <a href="morris.html">Tipos de alumnos</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tutores </a>
                        </li>
                        <li>
                            <a href='<?php echo site_url('ciudades/index')?>'> <i class="fa fa-table fa-fw"></i> Select </a> 
                        </li>
                        <li>
                            <a href='<?php echo site_url('person/validaciones')?>'> <i class="fa fa-table fa-fw"></i> validaciones </a> 
                        </li>
                         <li>
                            <a href='<?php echo site_url('prueba/autocompletemenu')?>'> autocomplete </a> 
                        </li>

                        <li> <?php echo  "<a href='".  site_url("prueba/autocompletemenu")."'>Cuentas</a>"; ?></li>
                         <li>
                            <a href='<?php echo site_url('person/pruebas_funcionales')?>'> Pruebas_funcionales</a> 
                        </li>
                        <li>
                            <a href='<?php echo site_url('persons/tablas')?>'> Examaenes </a> 
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Examenes </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Examenes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Particular </a>
                                </li>
                                <li>
                                    <a href="buttons.html">Globales</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">

            
