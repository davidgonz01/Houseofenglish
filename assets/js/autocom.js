var readUrl   = 'get_office',
    delHref,
    updateHref,
    updateId;




      $(function() {
                function displayResult(item) {
                    $('.alert').show().html('You selected <strong>' + item.value + '</strong>: <strong>' + item.text + '</strong>');
                    $('[name="Name1"]').val(item.text);
                    $('[name="id_city1"]').val(item.value);
                }
               

                $('#demo4').typeahead({
                  

                    ajax: readUrl,
                      displayField: 'Name'  ,
                      valueField: 'id_city',
                     
                    onSelect: displayResult
                    
                });

                
            });





  function reset()
    {
      alert('prueba exitosa');

      }