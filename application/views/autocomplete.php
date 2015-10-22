
<!DOCTYPE html>
<html>
    <head>
        <title>Twitter Bootstrap Ajax Typeahead Plugin Demo</title>
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
<script src="<?php echo base_url('assets/js/jquery-1.9.1.js')?>"></script>
        <script src="<?php echo base_url('assets/js/autocom.js')?>"></script>
       <script src="<?php echo base_url('assets/bootstrap.min.js')?>"></script>      
     
        <script src="<?php echo base_url('assets/bootstrap-typeahead.js')?>"></script>    
   
</html>