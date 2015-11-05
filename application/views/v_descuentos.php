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

                                              <div class="form-group col-md-6">
                                         <input type="text" name="idtest" value='<?php $name ?>'  />
                                          <div class="col-md-9">
                                            <input name="id_profesora" placeholder="id profesor" value="70" class="form-control" type="text"  required >
                                          </div>
                                        </div>
        </div>
        <div class="row">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab-demo1" data-toggle="tab">Demo #1</a></li>
                
                <li><a href="#tab-demo3" data-toggle="tab">Demo #3</a></li>
                <li><a href="#tab-demo4" data-toggle="tab">Demo #4</a></li>
               
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane" id="tab-demo3">
                    <h3>Demo #3</h3>
                    <div class="well col-md-5">
                       <h2>Typehead.js8888888</h2>
                                    <br>
                                    <div id="remote">
                                        <input type="text" class="form-control typeahead" name="office">
                                    </div>
                    </div>
                    <div class="col-md-7">
                     
                    </div>
                </div>
                <div class="tab-pane" id="tab-demo4">
                    <h3>Demo #4</h3>
                    <div class="well col-md-5">
                        <input id="demo4" type="text" class="col-md-12 form-control" placeholder="Search cities..." autocomplete="off" />
                    </div>
                    <div class="col-md-7">
                        <pre class="prettyprint">

                                $('#demo4').typeahead({
                                    ajax: '/cities/list'
                                });
                        </pre>
                    </div>
                </div>
           
               


            </div>
        </div>

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

                                      <input type="hidden" value="70" name="id_descuento">
                                       <input type="hidden" value="70" name="id_descuento88">
                                      
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
                                                <button type="button" class="btn btn-danger" onclick="recargar_post()"  data-dismiss="modal">Cancel</button>
                                            
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
          
    
           <script src="<?php echo base_url('assets/js/jquery-1.9.1.js')?>"></script>
     
        <script src="<?php echo base_url('assets/bootstrap-typeahead.js')?>"></script>                                  
        
 <script src="<?php echo base_url('assets/js/descuentos.js')?>"></script>

  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
  <script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>


  <script type="text/javascript">

    


  
  </script>

  



            </div>
            <!-- /.row -->