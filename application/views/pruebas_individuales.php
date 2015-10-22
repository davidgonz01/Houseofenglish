<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>Hello, world!</h1>

  

     
         
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
      <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      

      <script type="text/javascript">

                
                  $(document).ready(function() {
                   
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
                                        

                                        
                                });


                            }




                        });
                    });

                   $('ul.DropdownCountry').on('click', 'li a', function () {
                       alert('Prueba exitosa4');
                        $('#country').val($(this).text());
                    });
 
                  });



 
   
   

    function pruebaexitosa1()
    {
 		 alert('Prueba exitosa99');
 		  $('[name="nombre1"]').val(value['nombre']);
          $('[name="apellido1"]').val(value['apellido']);

    }

   

   
    </script>

      								 <div class="col-md-9">
                                            <input name="nombre1" placeholder="Nombre del alumno " class="form-control" type="text" required  >
                                          </div>
                                                <div class="col-md-4 col-md-offset-4" style="margin-top: 200px;">
                                                   <label class="control-lable">Country Name</label>
                                                   <div id="bloodhound">
                                                     <input type="text" id="country" autocomplete="off" name="country"    class="form-control typeahead" placeholder="Start typing and see the magic! :P">        
                                                     <ul class="dropdown-menu txtcountry" style="margin-left:15px;margin-right:0px;"  onclick="pruebaexitosa()" role="menu" aria-labelledby="dropdownMenu"  id="DropdownCountry">
                                                     </ul>
                                                     </div>


                                                </div>
  
  </body>
</html>