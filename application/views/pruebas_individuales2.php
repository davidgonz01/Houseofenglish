!DOCTYPE html>
<html lang="en">
 
  <head>
    <link href="/assets/bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/bootstrap/2.3.2/css/bootstrap-responsive.min.css" rel="stylesheet">
  </head>
  <body>
 
    <div class="container">
      <input class="typeahead" type="text" data-provide="typeahead" autocomplete="off">
    </div><!-- /.container -->
 
    <!-- Le javascript -->
    <script src="/assets/jquery/jquery-1.10.2.min.js"></script>
    <script src="/assets/bootstrap/2.3.2/js/bootstrap-typeahead.js"></script>
 
    <script type="text/javascript">
      $(document).ready(function() {
        $('input.typeahead').typeahead({
          source: function (query, process) {
            $.ajax({
              url: 'data.php',
              type: 'POST',
              dataType: 'JSON',
              data: 'query=' + query,
              success: function(data) {
                console.log(data);
                process(data);
              }
            });
          }
        });
      });
    </script>
 
  </body>
</html>