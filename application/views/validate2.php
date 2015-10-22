   <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>jQuery Validate</title>

      <meta name="viewport" content="width=device-width">
      <script src="//oss.maxcdn.com/momentjs/2.8.2/moment.min.js"></script>
   
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"></link>
    <link href="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" rel="stylesheet"></link>


  
    

  </head>
  <body>


    
    <form id="registrationForm" method="post" class="form-horizontal mitad" action="#">
                
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
                                <input type="text" class="form-control" name="email" />
                            </div>
                     </div>
     
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Password</label>
                            <div class="col-lg-3">
                                <input type="password" class="form-control" name="password" />
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
                                <input type="text" class="form-control" name="telefono_cel" />
                            </div>
                     </div> 
     
                 <div class="form-group">
                            <div class="col-lg-9 col-lg-offset-3">
                                <button type="submit"   class="btn btn-success left">Registrarse</button>
                               
                            </div>
                        </div>
                    </form>
                     <div class="col-xs-6">
                      <p class="lead">Datos Para Ingresar <span class="text-success"></span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> Usuario: user2550@netosolis.com</li>
                          <li><span class="fa fa-check text-success"></span> Password: pass990</li>
                      </ul>
                  </div>

                        <script src="//oss.maxcdn.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
     
    
        <script src="<?php echo base_url('assets/js/validate.js')?>"></script>






     </body>