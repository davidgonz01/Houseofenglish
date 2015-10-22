<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>jQuery Validate Demo | aLittleCode</title>

	  <meta name="viewport" content="width=device-width">

     <!-- MetisMenu CSS http://startbootstrap.com/bootstrap-resources/#ui -->
    
     <link href="<?php echo base_url('style.css')?>" rel="stylesheet">

      <link href="<?php echo base_url('assets/css/bootstrap.min2.css')?>" rel="stylesheet">
       <link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css')?>" rel="stylesheet">
    

  
  
	

  </head>
  <body>
		<div class="container">
		    <div class="page-header">
			    <h1>jQuery Validate Demo</h1>
			    <p>with styles from Twitter Bootstrap</p>
			    <div class="alert alert-info"><p>Now updated to remove or add error or success classes when user changes a field. (<a href="http://alittlecode.com/jquery-form-validation-with-styles-from-twitter-bootstrap/#comment-461">Thanks Giedrius</a>!)</p></div>
		    </div>
				<div class="row">
				<div id="maincontent" class="span8">

				<div class="tabbable">
				  <ul class="nav nav-pills">
				    <li class="active"><a href="#demo" data-toggle="tab">Demo</a></li>
				    <li><a href="#html" data-toggle="tab">the HTML</a></li>
				    <li><a href="#css" data-toggle="tab">the CSS</a></li>
				    <li><a href="#jquery" data-toggle="tab">the jQuery</a></li>
				  </ul>
					<div class="tab-content">
				    <div id="demo" class="tab-pane active">
				    	<div class="alert alert-success">
				    		<h4>NOTES</h4>
				    		<ul>
				    			<li>To receive feedback, fill in a field and tab to the next. To get negative feedback, only enter one character.</li>
						    	<li>For explanations, see the tabs above for the code, and of course <a href="http://docs.jquery.com/Plugins/Validation/"><strong>check out the plugin documentation</strong></a>.</li>
						    </ul>
				    	</div><!-- notes .alert -->
						<form action="" id="contact-form" class="form-horizontal">
						  <fieldset>
						    <legend>Sample Contact Form <small>(will not submit any information)</small></legend>

						    <div class="control-group">
						      <label class="control-label" for="name">Your Name</label>
						      <div class="controls">
						        <input type="text" class="input-xlarge" name="name" id="name">
						      </div>
						    </div>
						    <div class="control-group">
						      <label class="control-label" for="email">Email Address</label>
						      <div class="controls">
						        <input type="text" class="input-xlarge" name="email" id="email">
						      </div>
						    </div>
						    <div class="control-group">
						      <label class="control-label" for="subject">Subject</label>
						      <div class="controls">
						        <input type="text" class="input-xlarge" name="subject" id="subject">
						      </div>
						    </div>
						    <div class="control-group">
						      <label class="control-label" for="message">Your Message</label>
						      <div class="controls">
						        <textarea class="input-xlarge" name="message" id="message" rows="3"></textarea>
						      </div>
						    </div>
	              <div class="form-actions">
			            <button type="submit" class="btn btn-primary btn-large">Submit</button>
	    			      <button type="reset" class="btn">Cancel</button>
	        			</div>
						  </fieldset>
						</form>

						<form data-toggle="validator" role="form">
  <div class="form-group">
    <label for="inputName" class="control-label">Name</label>
    <input type="text" class="form-control" id="inputName" placeholder="Cina Saffary" required>
  </div>
  <div class="form-group has-feedback">
    <label for="inputTwitter" class="control-label">Twitter</label>
    <div class="input-group">
      <span class="input-group-addon">@</span>
      <input type="text" pattern="^[_A-z0-9]{1,}$" maxlength="15" class="form-control" id="inputTwitter" placeholder="1000hz" required>
    </div>
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    <span class="help-block with-errors">Hey look, this one has feedback icons!</span>
  </div>
  <div class="form-group">
    <label for="inputEmail" class="control-label">Email</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
    <div class="help-block with-errors"></div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="control-label">Password</label>
    <div class="form-group col-sm-6">
      <input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
      <span class="help-block">Minimum of 6 characters</span>
    </div>
    <div class="form-group col-sm-6">
      <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
      <div class="help-block with-errors"></div>
    </div>
    </div>
  </div>
  <div class="form-group">
    <div class="radio">
      <label>
        <input type="radio" name="underwear" required>
        Boxers
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="underwear" required>
        Briefs
      </label>
    </div>
  </div>
  <div class="form-group">
    <div class="checkbox">
      <label>
        <input type="checkbox" id="terms" data-error="Before you wreck yourself" required>
        Check yourself
      </label>
      <div class="help-block with-errors"></div>
    </div>
  </div>
  <div class="form-group">
    <button type="submit"    class="btn btn-primary" >Submit</button>
  </div>

  
</form>

					</div><!-- .tab-pane -->
					<div id="html" class="tab-pane">
						<h3>the HTML</h3>
				
					</div><!-- .tab-pane -->
					<div id="css" class="tab-pane">
						<h3>the CSS</h3>
						<p>Found in <code>style.css</code>, these styles correspond to the labels generated by the Validate Plugin and provide the green check mark on success and the red message color on error.</p>
						<p>Note that Twitter Bootstrap (v.2.0.2) comes with styles for "success" and "error" that apply green or red, respectively, to the entire control group.</p>
						<p>The green checkmark icon (here named <code>valid.png</code>) is not a part of Twitter Bootstrap <a href="http://webdesign.tutsplus.com/freebies/exclusive-freebie-the-kudos-web-icon-set/">but rather from the free Kudos icon set</a>.</p>
						<pre>label.valid {
  width: 24px;
  height: 24px;
  background: url(assets/img/valid.png) center center no-repeat;
  display: inline-block;
  text-indent: -9999px;
}
label.error {
  font-weight: bold;
  color: red;
  padding: 2px 8px;
  margin-top: 2px;
}</pre>
					</div><!-- .tab-pane -->
					<div id="jquery" class="tab-pane">
						<h3>the jQuery</h3>
						<h4>Setup</h4>
						<p>Link jQuery and the Validate Plugin at bottom of the html file, like so:</p>
						<pre>&lt;!-- jQuery --&gt;
  &lt;script src=&quot;assets/js/jquery-1.7.1.min.js&quot;&gt;&lt;/script&gt;

&lt;!-- Validate Plugin --&gt;
  &lt;script src=&quot;assets/js/jquery.validate.min.js&quot;&gt;&lt;/script&gt;</pre>

						<h4>Initialize and Set Options</h4>
						<p>You'll find <a href="http://docs.jquery.com/Plugins/Validation/validate#toptions">other options at the plugin's documentation page</a>.</p>
						<p>Note that Twitter Bootstrap (v.2.0.2) comes with styles for the classes "success" and "error." I've added these classes to the closest parent control group using the success and highlight options below.</p>

						<pre>$(document).ready(function(){

 $('#contact-form').validate(
 {
  rules: {
    name: {
      minlength: 2,
      required: true
    },
    email: {
      required: true,
      email: true
    },
    subject: {
      minlength: 2,
      required: true
    },
    message: {
      minlength: 2,
      required: true
    }
  },
  highlight: function(element) {
    $(element).closest('.control-group').removeClass('success').addClass('error');
  },
  success: function(element) {
    element
    .text('OK!').addClass('valid')
    .closest('.control-group').removeClass('error').addClass('success');
  }
 });
}); // end document.ready</pre>
					</div><!-- .tab-pane -->

				</div><!-- .tab-content -->
				</div><!-- .tabbable -->

				</div><!-- .span -->
				<div id="sidebar" class="offset1 span3">
					<div class="well">
						<h2>Links</h2>
						<a href="http://alittlecode.com/">&laquo; Back to aLittleCode.com</a>
						<h3>jQuery Validate Plugin</h3>
						<ul>
							<li><a href="http://docs.jquery.com/Plugins/Validation/">jQuery Validate Plugin</a></li>
							<li><a href="http://docs.jquery.com/Plugins/Validation/validate#toptions">Plugin Options</a></li>
							<li><a href="http://bassistance.de/jquery-plugins/jquery-plugin-validation/">Author's Plugin Page</a></li>
							<li><a href="https://github.com/jzaefferer/jquery-validation">Github Repository</a></li>
						</ul>
						<h3>Other Assets</h3>
						<ul>
							<li><a href="http://webdesign.tutsplus.com/freebies/exclusive-freebie-the-kudos-web-icon-set/">Kudos Web Icons (free)</a></li>
							<li><a href="http://twitter.github.com/bootstrap/">Twitter Bootstrap</a></li>
						</ul>
						<h3>Other Credits</h3>
						<p>This demo builds upon an example provided in the excellent (and recommended) <a href="http://www.sitepoint.com/books/jquery2/">jQuery Novice to Ninja</a>.</p>
					</div><!-- .well -->
						<h3>Download</h3>
						<p>Grab a working sample:</p>
						<a class="btn btn-primary" href="http://alittlecode.com/files/jQuery-Validate-Example-COMPLETE.zip">jQuery-Validate-Example.zip <i class="icon-download icon-white"></i></a>
				</div><!-- .span -->
			</div><!-- .row -->

      <hr>

      <div class="alert alert-info"><p><a href="http://alittlecode.com/jquery-form-validation-with-styles-from-twitter-bootstrap/#comments">Care to leave a comment?</a></p></div>

      <footer>
        <p>By David Cochran of <a href="http://alittlecode.com/">aLittleCode.com</a>. Free for your use! (No warranties, no guarantees.)</p>
      </footer>


    </div> <!-- .container -->

<!-- ==============================================
		 JavaScript below! 															-->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>           
         

	 
  <script src="<?php echo base_url('assets/jquery-1.8.0.min.js')?>"></script>  


<!-- Validate plugin -->
		<script src="<?php echo base_url('assets/js/jquery.validate.min.js')?>"></script>
	

<!-- Prettify plugin -->
	<script src="<?php echo base_url('assets/js/prettify/prettify.js')?>"></script>
		

<!-- Scripts specific to this page -->
		<script src="script.js"></script>
		<script src="<?php echo base_url('script.js')?>"></script>
		

		<script>
			// Activate Google Prettify in this page
				addEventListener('load', prettyPrint, false);

			$(document).ready(function(){

				// Add prettyprint class to pre elements
					$('pre').addClass('prettyprint linenums');

			});

		</script>
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-22151549-3']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
  </body>
</html>
