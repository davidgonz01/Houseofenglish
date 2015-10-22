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
                                    <input type="hidden" value="" name="id">
                                      
                                      <div class="form-body">
                                        <div class="form-group col-md-6">
                                          <label class="control-label col-md-3">First Name</label>
                                          <div class="col-md-9">
                                            <input name="firstName1" placeholder="First Name" class="form-control" type="text" required />
                                          </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label class="control-label col-md-3">Last Name1</label>
                                          <div class="col-md-9">
                                            <input name="lastName1" placeholder="Last Name" class="form-control" type="text"  max="10" required />
                                          </div>
                                        </div>
                                        <div class="form-group col-md-6 ">
                                          <label class="control-label col-md-3">Gender</label>
                                          <div class="col-md-9">
                                            <select name="gender1" class="form-control" required>
                                              <option value="male">Male</option>
                                              <option value="female">Female</option>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label class="control-label col-md-3">Address</label>
                                          <div class="col-md-9">
                                            <textarea  name="address1" placeholder="Address"class="form-control" required/></textarea>
                                          </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label class="control-label col-md-3">Date of Birth</label>
                                          <div class="col-md-9">
                                            <input name="dob1" placeholder="yyyy-mm-dd" class="form-control" type="text" required/>
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
          
                                   
        
<script src="<?php echo base_url('assets/js/jquery-1.9.1.js')?>"></script>
  
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
            $('[name="firstName1"]').val(data.firstName);
            $('[name="lastName1"]').val(data.lastName);
            $('[name="gender1"]').val(data.gender);
            $('[name="address1"]').val(data.address);
            $('[name="dob1"]').val(data.dob);
            
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



    function reset()
    {
      $('#form')[0].reset(); // reset form on modals

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

  



            </div>
            <!-- /.row -->