<div class="row">
            <div class="alert alert-block alert-success"></div>
        </div>
 <div class="row">
                                                <div class="form-group col-md-6">
                                          <label class="control-label col-md-3">Nombre </label>
                                          <div class="col-md-9">
                                            <input id="demo4" type="text" class="col-md-12 form-control" placeholder="Search names..." autocomplete="off" />
                                          </div>
                                        </div>
                                             <div class="form-group col-md-6">
                                          <label class="control-label col-md-3">Apellido </label>
                                          <div class="col-md-9">
                                            <input name="Name1" placeholder="Nombre" class="form-control" type="text"  required >
                                          </div>
                                          </div>


                                             <div class="form-group col-md-6">
                                          <label class="control-label col-md-3"> C.I </label>
                                          <div class="col-md-9">
                                            <input name="id_city1" placeholder="id city s" class="form-control" type="text"  required >
                                          </div>
                                        </div>
                                             <div class="form-group col-md-6">
                                          <label class="control-label col-md-3"> Codigo </label>
                                          <div class="col-md-9">
                                            <input name="Codigo1" placeholder="" class="form-control" type="text"  required >
                                          </div>
                                          </div>
                                         
        </div>


            <div class="row">
                <div class="col-lg-12">
                                <!-- /.row -->
   <div class="row">
      <div class="">
    
   
    
    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>Nombre  </th>
          <th>concepto</th>
          <th>precio</th>
          <th>cantidad </th>
          <th>sub total</th>
          <th>fecha</th>
          <th>id estado</th>
          <th style="width:125px;">Action</th>

        </tr>
      </thead>
      <tbody>
      </tbody>
      <tfoot>
            <tr>
                <th colspan="4" style="text-align:right">Total:</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
      
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
                        <input name="descuentos_profesor1" placeholder="Descuentos varios" class="form-control" type="text">
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
     
        <script src="<?php echo base_url('assets/bootstrap-typeahead.js')?>"></script>                                  
        
 <script src="<?php echo base_url('assets/js/descuentos_profesor.js')?>"></script>

  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
  <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>


  <script type="text/javascript">

    


  
  </script>

  



            </div>
            <!-- /.row -->