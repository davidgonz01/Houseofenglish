<div class="row">   
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">

                                 <!-- Bootstrap modal -->
                              <div class="" >
                              <div class="">
                                <div class="">
                                  
                                  <div class="modal-body form">
                                    <form  id="form" class="form-horizontal" data-toggle="validator" role="form">
                                      

                                      <input type="hidden" value="" name="id_prueba">
                                       <input type="hidden" value="" name="id_alumno1">
                                      
                                      <div class="form-body">
                                        <div class="form-group col-md-6">
                                          <label class="control-label col-md-3">alumno</label>
                                          <div class="col-md-9">
                                            <input name="nombre1" placeholder="Nombre del alumno " class="form-control" type="text" required  >
                                          </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label class="control-label col-md-3">Saldo </label>
                                          <div class="col-md-9">
                                            <input name="saldo_cuenta1" placeholder="saldo_cuenta s" class="form-control" type="text"  required >
                                          </div>
                                        </div>
                                            
                                              
                                         
                                             

                                       
                                      </div>
                                      <div class="col-lg-12">
                                         <div class="col-md-6 col-md-offset-3" >
                                              <div class="modal-footer">
                                                <div class="form-group">
                                                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                                                <button type="submit"  class="btn btn-danger"  onclick="pruebaexitosa()"     > Cancel </button>
                                            
                                            </div>
                                             
                                        </div>
                                       </div> 
                                       
                                    </form>
                                      </div>
                                  </br>

                                     

                                    </div><!-- /.modal-content -->

                                  </div><!-- /.modal-dialog -->
                                    
                                </div><!-- /.modal -->
                              <!-- End Bootstrap modal -->
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
             <div class="row">

                                              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
                                                <div class="col-md-4 col-md-offset-4" style="margin-top: 200px;">
                                                   <label class="control-lable">Country Name</label>
                                                   <div id="bloodhound">
                                                     <input type="text" id="country" autocomplete="off" name="country"    class="form-control typeahead" placeholder="Start typing and see the magic! :P">        
                                                     <ul class="dropdown-menu txtcountry" style="margin-left:15px;margin-right:0px;"  onclick="pruebaexitosa()" role="menu" aria-labelledby="dropdownMenu"  id="DropdownCountry">
                                                     </ul>
                                                     </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                          <label class="control-label col-md-3">Saldo </label>
                                          <div class="col-md-9">
                                            <input name="apellido1" placeholder="apellido s" class="form-control" type="text"  required >
                                          </div>
                                        </div>
                                             <div class="form-group col-md-6">
                                          <label class="control-label col-md-3">Saldo </label>
                                          <div class="col-md-9">
                                            <input name="telefono1" placeholder="telefono s" class="form-control" type="text"  required >
                                          </div>
                                        </div>




                                           </div>
            

          


            <div class="row">
                <div class="col-lg-12">
                                <!-- /.row -->
   <div class="row">
      <div class="">
    
    <button class="btn btn-success" onclick="add_prueba()"><i class="glyphicon glyphicon-plus"></i> Add prueba</button>
    <br />
    
    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>id alumno</th>
          <th>concepto</th>
          <th style="width:125px;">Action</th>

        </tr>
      </thead>
      <tbody>
      </tbody>

      
    </table>
  </div>

            
          <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>           
          <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
             <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>

                <script type="text/javascript">

                  var save_method; //for save method string
                  var table;
                  var dato1;
                  var dato2;
                  $(document).ready(function() {
                    table = $('#table').DataTable({ 
                      
                      "processing": true, //Feature control the processing indicator.
                      "serverSide": true, //Feature control DataTables' server-side processing mode.
                      
                      // Load data for the table's content from an Ajax source
                      "ajax": {
                          "url": "<?php echo site_url('prueba/ajax_list')?>",
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

                     $("#country").keyup(function () {
                        $.ajax({
                            type: "POST",
                            url: "<?php echo site_url('prueba/GetCountryName')?>",
                            data: {
                                keyword: $("#country").val()
                            },
                            dataType: "json",
                            success: function (data) {
                              
                                if (data.length > 0) {
                                    $('#DropdownCountry').empty();
                                    $('#country').attr("data-toggle", "dropdown");
                                    $('#DropdownCountry').dropdown('toggle');
                                }
                                else if (data.length == 0) {
                                    $('#country').attr("data-toggle", "");
                                }
                                $.each(data, function (key,value) {
                                    
                                    if (data.length >= 0)
                                      
                                        $('#DropdownCountry').append('<li role="presentation" >' + value['nombre'] + " " + value['apellido'] + '</li>');
                                         $('[name="nombre1"]').val(value['nombre']);
                                         $('[name="apellido1"]').val(value['apellido']);



                                        
                                });


                            }
                        });
                    });

                   $('ul.DropdownCountry').on('click', 'li a', function () {
                       alert('Prueba exitosa4');
                        $('#country').val($(this).text());
                    });
 
                  });


     function add_prueba()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
      $('.modal-title').text('Add prueba'); // Set Title to Bootstrap modal title
    }

    function edit_prueba(id)
    {
      save_method = 'update';
     $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('prueba/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
           
            $('[name="id_prueba"]').val(data.id_prueba);
            $('[name="nombre1"]').val(data.nombre);
            $('[name="id_alumno1"]').val(data.id_alumno);
            $('[name="saldo_cuenta1"]').val(data.saldo_cuenta);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit prueba'); // Set title to Bootstrap modal title
            
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

   

    function pruebaexitosa()
    {
 

    }

    function save()
    {
        
      var url;
      if(save_method == 'add') 
      {
          url = "<?php echo site_url('prueba/ajax_add')?>";
      }
      else
      {
        url = "<?php echo site_url('prueba/ajax_update')?>";
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

    function delete_prueba(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data to database
          $.ajax({
            url : "<?php echo site_url('prueba/ajax_delete')?>/"+id,
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

  



            </div>
            <!-- /.row -->