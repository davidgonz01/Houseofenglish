   <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>jQuery Validate 2</title>

      <meta name="viewport" content="width=device-width">
     
       <link href="<?php echo base_url('bower_components/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
     <!-- MetisMenu CSS http://startbootstrap.com/bootstrap-resources/#ui -->
     <link href="<?php echo base_url('assets/css/bootstrapValidator.min.css')?>" rel="stylesheet">
     
  

  
    

  </head>
  <body>
 <link href="<?php echo base_url('bower_components/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">


    
    <form id="registrationForm"  class="form-horizontal mitad" >
                
                    <h2>Formulario de Registro</h2>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Nombres</label>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" name="nombre" />
                            </div>
                        </div>
     
                         <div class="form-group">
                            <label class="col-lg-3 control-label">Apellidos</label>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" name="apellido" />
                            </div>
                        </div>
     
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Correo Electrónico</label>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" name="email" id="email" />
                            </div>
                     </div>
     
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Password</label>
                            <div class="col-lg-3">
                                <input type="password" class="form-control" id="password" name="password"/>
                            </div>
                        </div>
     
                        <div class="form-group">
            <label class="col-lg-3 control-label">Fecha de Nacimiento</label>
            <div class="col-lg-3">
                    <input type="text" class="form-control" name="datetimepicker" id="datetimepicker" data-date-format="YYYY-MM-DD" />
             </div>
                </div>
     
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Sexo</label>
                            <div class="col-lg-9">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="sexo" value="M" /> Masculino
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="sexo" value="F" /> Femenino
                                    </label>
                                </div>
                            </div>
                        </div>
     
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Teléfono</label>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" name="telefono" />
                            </div>
                        </div>
     
                        <div class="form-group">
                         <label class="col-lg-3 control-label">1Teléfono Celular</label>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" name="telefono_cel" required />
                            </div>
                     </div> 
     
               <button type="submit" class="btn btn-success btn-block">Login</button>

                    </form>
                     <div class="col-xs-6">
                      <p class="lead">Datos Para Ingresar <span class="text-success"></span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> Usuario: user2550@netosolis.com</li>
                          <li><span class="fa fa-check text-success"></span> Password: pass990</li>
                      </ul>
                  </div>

                      <script src="<?php echo base_url('assets/js/jquery-1.9.1.js')?>"></script>
    
            <script src="<?php echo base_url('assets/js/validate.js')?>"></script>
             <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>

              <script src="<?php echo base_url('assets/js/bootstrapValidator.min.js')?>"></script>

            
               <script src="<?php echo base_url('assets/js/noty.js')?>"></script>

   




     </body>