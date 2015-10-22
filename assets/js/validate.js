$(document).ready(function () {


       $('#registrationForm').bootstrapValidator({
         feedbackIcons: {
             valid: 'glyphicon glyphicon-ok',
             invalid: 'glyphicon glyphicon-remove',
             validating: 'glyphicon glyphicon-refresh'
         },
         fields: {
             nombre: {
                 validators: {
                     notEmpty: {
                         message: 'El nombre es requerido'
                     }
                 }
             },
             apellido: {
                 validators: {
                     notEmpty: {
                         message: 'El apellido es requerido'
                     }
                 }
             },
             email: {
                 validators: {
                     notEmpty: {
                         message: 'El correo es requerido y no puede ser vacio'
                     },
                     emailAddress: {
                         message: 'El correo electronico no es valido'
                     }
                 }
             },
             password: {
                 validators: {
                     notEmpty: {
                         message: 'El password es requerido y no puede ser vacio'
                     },
                     stringLength: {
                         min: 8,
                         message: 'El password debe contener al menos 8 caracteres'
                     }
                 }
             },
             datetimepicker: {
                 validators: {
                     notEmpty: {
                         message: 'La fecha de nacimiento es requerida y no puede ser vacia'
                     },
                     date: {
                         format: 'YYYY-MM-DD',
                         message: 'La fecha de nacimiento no es valida'
                     }
                 }
             },
             sexo: {
                 validators: {
                     notEmpty: {
                         message: 'El sexo es requerido'
                     }
                 }
             },
             telefono: {
                 message: 'El teléfono no es valido',
                 validators: {
                     notEmpty: {
                         message: 'El teléfono es requerido y no puede ser vacio'
                     },
                     regexp: {
                         regexp: /^[0-9]+$/,
                         message: 'El teléfono solo puede contener números'
                     }
                 }
             },
             telefono_cel: {
                 message: 'El teléfono no es valido',
                 validators: {
                     regexp: {
                         regexp: /^[0-9]+$/,
                         message: 'El teléfono solo puede contener números'
                     }
                 }
             },

              submitHandler: function(validator, form, submitButton) {
            //AQUI PODEMOS ENVIAR LOS DATOS DEL FORMULARIO MEDIANTE AJAX A NUESTRO SERVIDOR Y RECIBIR UNA RESPUESTA...
            //PARA ESTE EJEMPLO NO SE UTILIZA AJAX...SI QUEIRES IMPLEMENTARLO PUEDES USAR LOS METODOS POST O GET DE JQUERY PARA ENVIAR EL FORMULARIO
 
            //Tomamos el valor de los cuadros de texto con JQEURY
            usuario = $('#usuario').val();
            pass = $('#password').val();
 
            //Comparamos si el usuario y la contraseña son correctos
            if(usuario == 'user2550@netosolis.com' && pass == 'pass990'){
                location.href = "principal.html"
            }
            //Si no son correctos mandamos un mensage de error...y limpiamos el cuandro de texto del password
           else{
                nota("error","Los Datos Son Incorrectos.");
                 $('#password').val('');
            }
        }
     
         }



    });



});

  function reset()
    {
      alert('prueba exitosa');

      }