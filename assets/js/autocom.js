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
                $('#demo1').typeahead({
                    source: [
                        {id: 1, name: 'Toronto'},
                        {id: 2, name: 'Montreal'},
                        {id: 3, name: 'New York'},
                        {id: 4, name: 'Buffalo'},
                        {id: 5, name: 'Boston'},
                        {id: 6, name: 'Columbus'},
                        {id: 7, name: 'Dallas'},
                        {id: 8, name: 'Vancouver'},
                        {id: 9, name: 'Seattle'},
                        {id: 10, name: 'Los Angeles'}
                    ],
                    onSelect: displayResult
                });

                $('#demo4').typeahead({
                  

                    ajax: readUrl,
                      displayField: 'Name'  ,
                      valueField: 'id_city',
                     
                    onSelect: displayResult
                    
                });

                $('#demo5').typeahead({
                    ajax: {
                      
                        url: '/cities/list',
                        method: 'post',
                        triggerLength: 1
                    },
                    onSelect: displayResult
                });

            });





  function reset()
    {
      alert('prueba exitosa');

      }