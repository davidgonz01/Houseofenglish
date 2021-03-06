<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Factura Profesor</title>

    <!-- Bootstrap Core CSS -->
   
    
    <link href="<?php echo base_url('bower_components/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- MetisMenu CSS -->
    

    <link href="<?php echo base_url('bower_components/metisMenu/dist/metisMenu.min.css')?>" rel="stylesheet">

    <!-- Timeline CSS -->
  
    <link href="<?php echo base_url('dist/css/timeline.css')?>" rel="stylesheet">

    <!-- Custom CSS -->
   
    <link href="<?php echo base_url('dist/css/sb-admin-2.css')?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    
    <link href="<?php echo base_url('bower_components/morrisjs/morris.css')?>" rel="stylesheet">

    <!-- Custom Fonts -->
   
    <link href="<?php echo base_url('bower_components/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">


    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">

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
                <a class="navbar-brand" href="index.html">English Language Center </a>
            </div>
            <!-- /.navbar-header -->

           
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
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
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
           
<div class="row">

 <div class="">
    <div class="">
         <div class="row">
         <div class="col-lg-6">
             <form role="form">       
                 <div class="form-body">
                      <div class="form-group">
                      <label class="control-label col-md-3">Fecha</label>
                      <div class="col-md-9">
                        <input name="dob1" placeholder="yyyy-mm-dd" class="form-control" type="text">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">RUC </label>
                      <div class="col-md-9">
                        <input name="firstName1" placeholder="RUC" class="form-control" type="text">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">Nombre </label>
                      <div class="col-md-9">
                        <input name="lastName1" placeholder="o Rason Social" class="form-control" type="text">
                      </div>
                    </div>
  
                  </div>

            </form>
          </div>
                                <!-- /.col-lg-6 (nested) -->
        <div class="col-lg-6"> 
             
              <form role="form">
                <div class="form-body">
                <div class="form-group">
                      <label class="control-label col-md-3">Condicion  </label>
                      <div class="col-md-9">
                        <input name="firstName8" placeholder="Condicion de Venta" class="form-control" type="text">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3">Direccioon </label>
                      <div class="col-md-9">
                        <input name="firstName7" placeholder="Direccion " class="form-control" type="text">
                      </div>
                    </div>


                  <div class="form-group">
                      <label class="control-label col-md-3"> Timbrado N°</label>
                      <div class="col-md-9">
                        <input name="firstName2" placeholder="Timbrado de la Factura" class="form-control" type="text">
                      </div>
                    </div>
                </div>
            </form>
          
                                   
         </div>
          <!-- /.col-lg-6 (nested) -->

        </div>
        <!-- /.row (nested) -->
         
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->

     </div>
            <!-- /.row -->
            <div class="row">
               <div class="">
    
    <button class="btn btn-success" onclick="add_person()"><i class="glyphicon glyphicon-plus"></i> Add Person</button>
    <br />
    
    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Gender</th>
          <th>Address</th>
          <th>Date of Birth</th>
          <th style="width:125px;">Action</th>
        </tr>
      </thead>
      <tbody>
      </tbody>

      
    </table>
  </div>

  
             
              <form role="form">
                <div class="form-body">
                <div class="form-group">
                      <label class="control-label col-md-8">sub total  </label>
                      <div class=" form-group input-group">
                       
                        <span class="input-group-addon">$</span>
                        <input name="firstName8" placeholder="por horas trabajadas" class="form-control" type="text">
                      </div>
                    </div>

                     <div class="form-group">
                      <label class="control-label col-md-8">Descuentos  </label>
                        <div class=" form-group input-group">
                       
                        <span class="input-group-addon">$</span>
                        <input name="firstName8" placeholder="Descuentos varios" class="form-control" type="text">
                      </div>
                    </div>



                  <div class="form-group">
                      <label class="control-label col-md-8">IVA </label>
                      <div class=" form-group input-group">
                       
                        <span class="input-group-addon">$</span>
                        <input name="firstName8" placeholder="Iva Incluido" class="form-control" type="text">
                      </div>
                    </div>

                </div>


                 <div class="form-group">
                      <label class="control-label col-md-8">Total a Pagar </label>
                        <div class=" form-group input-group">
                       
                        <span class="input-group-addon">$</span>
                        <input name="firstName8" placeholder="Total a pagar" class="form-control" type="text">
                      </div>
                    </div>

            </form>
          
                                   
        

  <script src="<?php echo base_url('assets/jquery/jquery-2.1.4.min.js')?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
  <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>


  <script type="text/javascript">

    var save_method; //for save method string
    var table;
    $(document).ready(function() {
      table = $('#table').DataTable({ 
        
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('person/ajax_list')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
          "targets": [ -1 ], //last column
          "orderable": false, //set not orderable
        },
        ],

      });
    });

    function add_person()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
      $('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

    function edit_person(id)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('person/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
           
            $('[name="id"]').val(data.id);
            $('[name="firstName"]').val(data.firstName);
            $('[name="lastName"]').val(data.lastName);
            $('[name="gender"]').val(data.gender);
            $('[name="address"]').val(data.address);
            $('[name="dob"]').val(data.dob);
            
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Person'); // Set title to Bootstrap modal title
            
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }

    function reload_table()
    {
      table.ajax.reload(null,false); //reload datatable ajax 
    }

    function save()
    {
      var url;
      if(save_method == 'add') 
      {
          url = "<?php echo site_url('person/ajax_add')?>";
      }
      else
      {
        url = "<?php echo site_url('person/ajax_update')?>";
      }

       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
               reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }

    function delete_person(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data to database
          $.ajax({
            url : "<?php echo site_url('person/ajax_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               //if success reload ajax table
               $('#modal_form').modal('hide');
               reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
         
      }
    }

  </script>

  <!-- Bootstrap modal -->
  <div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Person Form</h3>
      </div>
      <div class="modal-body form">
        <form action="#" id="form" class="form-horizontal">
          <input type="hidden" value="" name="id"/> 
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">First Name</label>
              <div class="col-md-9">
                <input name="firstName" placeholder="First Name" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Last Name</label>
              <div class="col-md-9">
                <input name="lastName" placeholder="Last Name" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Gender</label>
              <div class="col-md-9">
                <select name="gender" class="form-control">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Address</label>
              <div class="col-md-9">
                <textarea name="address" placeholder="Address"class="form-control"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Date of Birth</label>
              <div class="col-md-9">
                <input name="dob" placeholder="yyyy-mm-dd" class="form-control" type="text">
              </div>
            </div>
          </div>
        </form>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  <!-- End Bootstrap modal -->



            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    
   

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('bower_components/metisMenu/dist/metisMenu.min.js')?>"></script>
   

    <!-- Morris Charts JavaScript -->
    
    <script src="<?php echo base_url('bower_components/raphael/raphael-min.js')?>"></script>

    
    <script src="<?php echo base_url('bower_components/morrisjs/morris.min.js')?>"></script>

    
    <script src="<?php echo base_url('js/morris-data.js')?>"></script>

    <!-- Custom Theme JavaScript -->
  
    <script src="<?php echo base_url('dist/js/sb-admin-2.js')?>"></script>

</body>

</html>
