var readUrl   = 'get_profesores',
    get_profesores2   = 'get_profesores2/',
    delHref   = 'ajax_list',
    delHref2   = 'ajax_list2',

    ajax_edit   = 'ajax_edit',
    ajax_add   = 'ajax_add',
    ajax_update   = 'ajax_update',
     ajax_delete   = 'ajax_delete',
    updateHref,
    updateId;

var save_method; //for save method string
    var table;
   // var id_pro;
    var id_pro;
    id_pro = 24;
    var usuario;
    
    $(document).ready(function() {
       usuario = $('#id_descuento88').val();
    

    });

        function recargar()
    { 
             if ( $.fn.dataTable.isDataTable( '#table' ) ) {
              table.destroy();
             table = $('#table').DataTable({ 
       
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": delHref,
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
          "targets": [ -1 ], //last column
          "orderable": false, //set not orderable
        },
        ],

      });
        }
        else {
             table = $('#table').DataTable({ 
       
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": delHref,
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
          "targets": [ -1 ], //last column
          "orderable": false, //set not orderable
        },
        ],

      });
        }
     

}

        function recargar_post(idFecha1)
    { 
      var saldo_total;

      $("input[id*=id_descuento88]").val(idFecha1);
        var nro = idFecha1;
    if(nro == "")
    {
        alert("No ha ingresado Cliente");
        return true;
    }
        //var fecha1 = 70;
         var fecha1 = nro;

             if ( $.fn.dataTable.isDataTable( '#table' ) ) {
              table.destroy();
              
               
             table = $('#table').DataTable({ 
       
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": delHref2 + "/" +idFecha1,
            "type": "POST",
            "dataType": "JSON"
           

        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
          "targets": [ -1 ], //last column
          "orderable": false, //set not orderable
        },
        ],

          "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // Total over all pages
            total = api
                .column( 4 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                } );
 
            // Total over this page
            pageTotal = api
                .column( 4, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

                saldo_total = pageTotal;
                 
                 $('[name="descuentos_profesor1"]').val(saldo_total);
           
            // Update footer
            $( api.column( 4 ).footer() ).html(
                '$'+pageTotal +' ( $'+ total +' total)'
            );
        }



      });
        }
        else {
          
        
             table = $('#table').DataTable({ 
       
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        
        // Load data for the table's content from an Ajax source
        "ajax": {

            "url": delHref2+ "/" +idFecha1,
            "type": "POST",
            "dataType": "JSON"
           




        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
          "targets": [ -1 ], //last column
          "orderable": false, //set not orderable
        },
        ],

          "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // Total over all pages
            total = api
                .column( 4 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                } );
 
            // Total over this page
            pageTotal = api
                .column( 4, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
             saldo_total = pageTotal;
             
              $('[name="descuentos_profesor1"]').val(saldo_total);
            // Update footer
            $( api.column( 4 ).footer() ).html(
                '$'+pageTotal +' ( $'+ total +' total)'
            );
        }




      });


        }
     
        
}

      function add_descuentos()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
      $('.modal-title').text('Add descuentos'); // Set Title to Bootstrap modal title
    }

    function edit_descuentos(id)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
        url : "ajax_edit/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
           
            $('[name="id_descuento"]').val(data.id_descuento);
            $('[name="id_profesor1"]').val(data.id_profesor);
            $('[name="concepto_detalle1"]').val(data.concepto_detalle);
            $('[name="precio_unitario1"]').val(data.precio_unitario);
            $('[name="cantidad_hs1"]').val(data.cantidad_hs);
             $('[name="sub_total_descuento1"]').val(data.sub_total_descuento);
            $('[name="fecha_detalle1"]').val(data.fecha_detalle);
             $('[name="id_estado1"]').val(data.id_estado);
            
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit descuentos'); // Set title to Bootstrap modal title
            
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }


    

    function reload_table()
    {
     // table.ajax.reload(null,false); //reload datatable ajax 
    }

    function reset()
    {
      $('#form')[0].reset(); // reset form on modals

      }

    function save()
    {
      var url;
      if(save_method == 'add') 
      {
          url = ajax_add;
      }
      else
      {
        url = ajax_update;
      }

       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
              // reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }

    function delete_descuentos(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data to database
          $.ajax({
            url : ajax_delete+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               //if success reload ajax table
               $('#modal_form').modal('hide');
               //reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
         
      }
    }


      $(function() {
                function displayResult(item) {
                    $('.alert').show().html('You selected <strong>' + item.value + '</strong>: <strong>' + item.text + '</strong>');
                    $('[name="Name1"]').val(item.text);
                  
                    $('[name="id_city1"]').val(item.value);
                     recargar_post(item.value);
                }
               

                $('#demo4').typeahead({
                  

                    ajax: readUrl,
                      displayField: 'nombre',
                      valueField: 'id_profesor',
                     
                    onSelect: displayResult
                    
                });

                
            });


 


  function actualizar_suma()
    {
      $('#table').DataTable( {
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // Total over all pages
            total = api
                .column( 4 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                } );
 
            // Total over this page
            pageTotal = api
                .column( 4, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Update footer
            $( api.column( 4 ).footer() ).html(
                '$'+pageTotal +' ( $'+ total +' total)'
            );
        }
    } );

      }