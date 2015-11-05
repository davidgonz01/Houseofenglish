
<!DOCTYPE html>
<html>
    <head>
        <title>Demo</title>
        <meta name="description" content="Twitter Bootstrap Ajax Typeahead Plugin Demo">
        <meta name="keywords" content="Twitter Bootstrap, Ajax Typeahead, Plugin">
        <meta name="author" content="Alexey Gordeyev (aleksej@gordejev.lv)">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
          
    
    </head>
    
        <div class="row">
            <div class="alert alert-block alert-success"></div>
        </div>
 <div class="row">
                                                <div class="form-group col-md-6">
                                          <label class="control-label col-md-3">Saldo </label>
                                          <div class="col-md-9">
                                            <input name="id_city1" placeholder="id city s" class="form-control" type="text"  required >
                                          </div>
                                        </div>
                                             <div class="form-group col-md-6">
                                          <label class="control-label col-md-3">Saldo1 </label>
                                          <div class="col-md-9">
                                            <input name="Name1" placeholder="Nombre" class="form-control" type="text"  required >
                                          </div>
                                          </div>
        </div>
        <div class="row">
          
            
               
                
                    <h3>Demo #4</h3>
                    <div class="well col-md-5">
                        <input id="demo4" type="text" class="col-md-12 form-control" placeholder="Search cities..." autocomplete="off" />
                    </div>
                    
                
           
               


            
        </div>
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
                              <div class="panel panel-default">
                        <div class="panel-heading">
                            Modals
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Button trigger modal -->
                            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                                Launch Demo Modal
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                        </div>
                                        <div class="modal-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                        </div>
                        <!-- .panel-body -->
                    </div>
                                   
        

  

  



            </div>
            <!-- /.row -->


<script src="<?php echo base_url('assets/js/jquery-1.9.1.js')?>"></script>

        <script src="<?php echo base_url('assets/js/autocom.js')?>"></script>
       <script src="<?php echo base_url('assets/bootstrap.min.js')?>"></script> 
       
          
     
        <script src="<?php echo base_url('assets/bootstrap-typeahead.js')?>"></script>   
        
         <script src="<?php echo base_url('assets/js/medio.js')?>"></script>
        <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
         <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>

        <script src="<?php echo base_url('assets/js/noty.js')?>"></script>

 
   
</html>