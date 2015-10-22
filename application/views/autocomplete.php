<!--
The MIT License

Copyright 2013 Alexey Gordeyev <aleksej@gordejev.lv>.

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.
http://startbootstrap.com/bootstrap-resources/#ui

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
-->
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
  
        <script src="<?php echo base_url('assets/jquery-1.8.0.min.js')?>"></script>  
       <script src="<?php echo base_url('assets/bootstrap.min.js')?>"></script>      
        <script src="<?php echo base_url('assets/jquery.mockjax.js')?>"></script>      
        <script src="<?php echo base_url('assets/bootstrap-typeahead.js')?>"></script>      
       

        
    
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
                                          <label class="control-label col-md-3">Saldo </label>
                                          <div class="col-md-9">
                                            <input name="Name1" placeholder="Nombre" class="form-control" type="text"  required >
                                          </div>
                                          </div>
        </div>
        <div class="row">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab-demo1" data-toggle="tab">Demo #1</a></li>
                <li><a href="#tab-demo2" data-toggle="tab">Demo #2</a></li>
                <li><a href="#tab-demo3" data-toggle="tab">Demo #3</a></li>
                <li><a href="#tab-demo4" data-toggle="tab">Demo #4</a></li>
                <li><a href="#tab-demo5" data-toggle="tab">Demo #5</a></li>
                <li><a href="#tab-demo6" data-toggle="tab">Demo #6</a></li>
				<li><a href="#tab-demo7" data-toggle="tab">Demo #7</a></li>
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
                <div class="tab-pane" id="tab-demo5">
                    <h3>Demo #5</h3>
                    <div class="well col-md-5">
                        <input id="demo5" type="text" class="col-md-12 form-control" placeholder="Search cities..." autocomplete="off" />
                    </div>
                    <div class="col-md-7">
                        <pre class="prettyprint">

    $('#demo5').typeahead({
        ajax: { 
                url: '/cities/list',
                triggerLength: 1 
              }
    });
                        </pre>
                    </div>
                </div>
               


            </div>
        </div>

        <script>
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

                $('#demo2').typeahead({
                    source: [
                        {ID: 1, Name: 'Toronto'},
                        {ID: 2, Name: 'Montreal'},
                        {ID: 3, Name: 'New York'},
                        {ID: 4, Name: 'Buffalo'},
                        {ID: 5, Name: 'Boston'},
                        {ID: 6, Name: 'Columbus'},
                        {ID: 7, Name: 'Dallas'},
                        {ID: 8, Name: 'Vancouver'},
                        {ID: 9, Name: 'Seattle'},
                        {ID: 10, Name: 'Los Angeles'}
                    ],

                    displayField: 'Name',                

                    valueField: 'ID',
                    onSelect: displayResult
                });

                $('#demo3').typeahead({
                    source: [
                        {id: 1, full_name: 'Toronto', first_two_letters: 'To'},
                        {id: 2, full_name: 'Montreal', first_two_letters: 'Mo'},
                        {id: 3, full_name: 'New York', first_two_letters: 'Ne'},
                        {id: 4, full_name: 'Buffalo', first_two_letters: 'Bu'},
                        {id: 5, full_name: 'Boston', first_two_letters: 'Bo'},
                        {id: 6, full_name: 'Columbus', first_two_letters: 'Co'},
                        {id: 7, full_name: 'Dallas', first_two_letters: 'Da'},
                        {id: 8, full_name: 'Vancouver', first_two_letters: 'Va'},
                        {id: 9, full_name: 'Seattle', first_two_letters: 'Se'},
                        {id: 10, full_name: 'Los Angeles', first_two_letters: 'Lo'}
                    ],
                    displayField: 'full_name',
                    onSelect: displayResult
                });

                // Mock an AJAX request
                $.mockjax({
                    url: '/cities/list',
                    response: function() {
                        this.responseText = [
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
                        ];
                    }
                });

                $('#demo4').typeahead({
                  


                    ajax: '<?php echo site_url('prueba/get_office')?>',
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
                $('#demo6').typeahead({
                    source: [
                        'Toronto',
                        'Montreal',
                        'New York',
                        'Buffalo',
                        'Boston',
                        'Columbus',
                        'Dallas',
                        'Vancouver',
                        'Seattle',
                        'Los Angeles'],
                    onSelect: displayResult
                });
				$('#demo7').typeahead({
                    source: [
                        'Toronto',
						'Toronto1',
						'Toronto2',
						'Toronto3',
						'Toronto4',
						'Toronto5',
						'Toronto6',
						'Toronto7',
						'Toronto8',
						'Toronto9',
						'Toronto10',
                        'Montreal',
                        'New York',
                        'Buffalo',
                        'Boston',
                        'Columbus',
                        'Dallas',
                        'Vancouver',
                        'Seattle',
                        'Los Angeles'],
					scrollBar:true,
                    onSelect: displayResult
                });




            });
        </script>
   
</html>