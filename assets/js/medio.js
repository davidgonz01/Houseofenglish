
    var save_method; //for save method string
    var table;
    var ajax_list = 'index.php/person/ajax_list'; 
    var ajax_edit = 'index.php/person/ajax_edit/'; 
    var ajax_add = 'index.php/person/ajax_add'; 
    var ajax_update = 'index.php/person/ajax_update'; 
     var ajax_delete = 'index.php/person/ajax_delete/';


    $(document).ready(function() {
      table = $('#table').DataTable({ 
        
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": ajax_list,
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
    });


    function add_person()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
      $('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

    function edit_person(id)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
         url: 'index.php/person/ajax_edit/'+id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
           
            $('[name="id"]').val(data.id);
            $('[name="firstName1"]').val(data.firstName);
            $('[name="lastName1"]').val(data.lastName);
            $('[name="gender1"]').val(data.gender);
            $('[name="address1"]').val(data.address);
            $('[name="dob1"]').val(data.dob);
            
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Person'); // Set title to Bootstrap modal title
            
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax - function edit_person ');
        }
    });

    }

    function reload_table()
    {
      table.ajax.reload(null,false); //reload datatable ajax 
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
               reload_table();
               nota("success","Se agrego correctamente.");
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data- function save()');
                nota("error","Se agrego correctamente.");
            }
        });



    }

    function delete_person(id)
    {

      if(confirm(' Are you sure delete this data?'))
      {
        // ajax delete data to database
          $.ajax({
            url : 'index.php/person/ajax_delete/'+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               //if success reload ajax table
               $('#modal_form').modal('hide');
               reload_table();
               nota("success","Se han eliminado correctamente");
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data -  function delete_person');
            }
        });
         
      }
    }

function nota(op,msg,time){
    if(time == undefined)time = 5000;
    var n = noty({text:msg,maxVisible: 1,type:op,killer:true,timeout:time,layout: 'top'});
     $('#form')[0].reset(); // reset form on modals
}