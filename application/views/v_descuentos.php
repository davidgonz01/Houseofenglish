<div class="row">   
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">

                                 <!-- Bootstrap modal -->
                              <div class="" >
                              <div class="">
                                <div class="">
                                  
                                  <div class="modal-body form">
                                    <form action="#" id="form"class="form-horizontal">
                                      <form>

                                      <input type="hidden" value="" name="id_descuento">
                                      
                                      <div class="form-body">
                                        <div class="form-group col-md-6">
                                          <label class="control-label col-md-3">Profesor</label>
                                          <div class="col-md-9">
                                            <input name="id_profesor1" placeholder="Nombre del Profesor " class="form-control" type="text" required />
                                          </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label class="control-label col-md-3">Concepto </label>
                                          <div class="col-md-9">
                                            <input name="concepto_detalle1" placeholder="Concepto detalle" class="form-control" type="text"  max="10" required />
                                          </div>
                                        </div>
                                        <div class="form-group col-md-6 ">
                                          <label class="control-label col-md-3">Precio Unitario</label>
                                          <div class="col-md-9">
                                              <input name="precio_unitario1" placeholder="Precio Unitario" class="form-control" type="text"  max="10" required />
                                          </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label class="control-label col-md-3">Cantidad</label>
                                          <div class="col-md-9">
                                            <textarea  name="cantidad_hs1" placeholder="Cantidad de horas"class="form-control" required/></textarea>
                                          </div>
                                        </div>


                                          <div class="form-group col-md-6 ">
                                          <label class="control-label col-md-3">sub total</label>
                                          <div class="col-md-9">
                                              <input name="sub_total_descuento1" placeholder="sub total" class="form-control" type="text"  max="10" required />
                                          </div>
                                        </div>
                                         <div class="form-group col-md-6">
                                          <label class="control-label col-md-3">Date of Birth</label>
                                          <div class="col-md-9">
                                            <input name="fecha_detalle1" placeholder="yyyy-mm-dd" class="form-control" type="text" required/>
                                          </div>
                                        </div>

                                        <div class="form-group col-md-6 ">
                                          <label class="control-label col-md-3">Estado</label>
                                          <div class="col-md-9">
                                              <input name="id_estado1" placeholder="Estado" class="form-control" type="text"  max="10" required />
                                          </div>
                                        </div>

                                       
                                      </div>
                                      <div class="col-lg-12">
                                         <div class="col-md-6 col-md-offset-3" >
                                              <div class="modal-footer">
                                                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                                                <button type="button" class="btn btn-danger" onclick="reset()"  data-dismiss="modal">Cancel</button>
                                            
                                              </div>
                                        </div>
                                       </div> 
                                        </form>
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
                <div class="col-lg-12">
                                <!-- /.row -->
   <div class="row">
      <div class="">
    
    <button class="btn btn-success" onclick="add_descuentos()"><i class="glyphicon glyphicon-plus"></i> Add Descuentos</button>
    <br />
    
    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>id profesor</th>
          <th>concepto</th>
          <th>precio</th>
          <th>cantidad </th>
          <th>sub totalo</th>
          <th>fecha</th>
          <th>id estado</th>
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
            "url": "<?php echo site_url('descuentos/ajax_list')?>",
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

 


    function add_descuentos()
    {

      
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
      $('.modal-title').text('Add descuentos'); // Set Title to Bootstrap modal title
    }

    function edit_descuentos(id)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('descuentos/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
           
            $('[name="id_descuento"]').val(data.id_descuento);
            $('[name="id_profesor1"]').val(data.id_profesor);
            $('[name="concepto_detalle1"]').val(data.concepto_detalle);
            $('[name="precio_unitario1"]').val(data.precio_unitario);
            $('[name="cantidad_hs1"]').val(data.cantidad_hs);
             $('[name="sub_total_descuento1"]').val(data.sub_total_descuento);
            $('[name="fecha_detalle1"]').val(data.fecha_detalle);
             $('[name="id_estado1"]').val(data.id_estado);
            
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit descuentos'); // Set title to Bootstrap modal title
            
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



    function reset()
    {
      $('#form')[0].reset(); // reset form on modals

      }

    function save()
    {

       


      var url;
      if(save_method == 'add') 
      {
          url = "<?php echo site_url('descuentos/ajax_add')?>";
      }
      else
      {
        url = "<?php echo site_url('descuentos/ajax_update')?>";
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

    function delete_descuentos(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data to database
          $.ajax({
            url : "<?php echo site_url('descuentos/ajax_delete')?>/"+id,
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