<!DOCTYPE html >
<head>
<meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
	<link rel="stylesheet" href="themes/Neighborly.min.css">
    <link rel="stylesheet" href="N2N.css">
	<title>Create User Account</title>
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
	<script type="text/javascript" src="utils.js"></script>
<!--	<script type="application/javascript" src="js/jquery.min.js"></script> -->
	<script type="application/javascript" src="js/index_user_scripts.js"></script> 
	<script type="application/javascript" src="popup/popup.min.js"></script>
    <script src="jquery.js"></script>
	<script src="jquery.validate.js"></script>
    <script type="text/javascript"></script>
    <!--[if lt IE 9]>
<script src="html5shiv.js"></script>
<![endif]-->
<!-- this is Google Analytics Script -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24864839-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
  </head>

  <body>
    <div class="uwrap">
      <div id="createUserAcct" data-role="page" data-theme="a"><!-- mainpage -->
      
<script type="text/javascript">
	$(document).ready(function() {
	$('#success').validate({
    rules: {
        userName: {
            required: true,
			minlength: 6, 
        },
        userPassword: {
            required: true,
			minlength: 6, 
			equalTo: "#verifyuserPassword",
        }
	},
    messages: {
        userName: {
            required: "Please enter a username."
        },
        userPassword: {
            required: "Please enter a password."
        },
    errorPlacement: function (error, element) {
        error.appendTo(element.parent().prev());
    }, 
    submitHandler: function (form) {
        $(':mobile-pagecontainer').pagecontainer('change', '#success', {
            reload: false
        });
        return false;
    }
	}
});
});
</script>                
      
        <div class="upage-outer">
          
          <div data-role="header" style="overflow:hidden;" data-position="fixed">
            <a href="index.html" data-icon="action" class="ui-btn-left" style="background-color:#000000">Home</a>
            <h1>Create Account</h1>
            <a href="#" data-icon="carat-l" class="ui-btn-right" style="background-color:#000000;" data-transition="fade" data-rel="back">Back</a>
         </div><!--/header-->
         
           <div data-role="content" style="margin-left:20px; margin-right:20px;"><!-- upage-content -->
             <form action="success.php" id="success" data-theme="a" method="post">
                  	<div style="margin-top:20px;">
                    	<label for="userName">Username*</label>
                    	<input type="text" id="userName" name="userName">
                    	<input type="hidden" value="$userName">
                  	</div>
                  	<div>
                    	<label for="password">Password*</label>
                    	<input type="password" id="userPassword" name="userPassword" placeholder="Create your password">
                    	<input type="hidden" value="$userPassword"> 
                  	</div>
                  	<div>
                    	<label for="password2">Confirm Password*</label>
                    	<input type="password" id="verifyuserPassword" name="verifyuserPassword">
                    	<input type="hidden" value="$verifyuserPassword"> 
                  	</div>   
            <div align="center"><input type="submit" data-mini="true" value="Submit" data-inline="true" data-role="button"></div>
            
                  </form>

               </div> <!-- /upage content -->

          <div data-role="footer" style="overflow:hidden;" data-position="fixed"> 
			<div data-role="navbar">
        		<ul>
            		<li><a href="" style="background-color:#000000">FAQ</a></li>
            		<li><a href="ReportProblem.html" style="background-color:#000000">Report A Problem</a></li>
        		</ul>
    		</div><!-- /navbar -->
		  </div><!-- /footer -->
          </div>
         </div><!-- /page -->
        </div><!-- /uwrap -->          
    </body>
</html>

      