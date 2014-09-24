<!DOCTYPE  doctype-->
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.css" />
	<link rel="stylesheet" href="themes/Neighborly.min.css">       
    <title>Success</title>
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.js"></script>
	<script type="text/javascript" src="utils.js"></script>
	<script type="application/javascript" src="js/jquery.min.js"></script>
	<script type="application/javascript" src="js/index_user_scripts.js"></script>
    <script type="text/javascript"></script>
    <script src="jquery.validate.js"></script>
<!-- this is Google Analytics Script -->    
<!--[if lt IE 9]>
<script src="html5shiv.js"></script>
<![endif]-->

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
  
<body><!-- content goes here -->
    <div class="uwrap"><!-- uwrap -->
      <div id="success" data-role="page" data-theme="a"><!-- mainpage -->

          <div data-role="header" style="overflow:hidden;" data-position="fixed">
            <a href="#" data-icon="carat-l" class="ui-btn-right" style="background-color:#000000;" data-transition="fade" data-rel="back">Back</a>
            <h1>Status</h1>
            <a href="index.html" data-icon="home" class="ui-btn-left" style="background-color:#000000">Home</a>
         </div><!--/header-->
         
           <div data-role="content" style="margin-left:20px; margin-right:20px;"><!-- upage-content -->
           	
            <div style="height:50px; margin-top:10px;">
            	<h4 style="text-align:center"> Success, account created!</h4>
            </div>
            <div>
                  <form action="Redirect.php" method="post" id="redirect" data-theme="a">
                  <fieldset data-role="controlgroup">
    				<legend>Would you like to offer any products or services to the community?</legend>
        			<input type="radio" name="provideOffrng" id="OffrngY" value="1" checked="checked">
        			<label for="OffrngY">Yes</label>
        			<input type="radio" name="provideOffrng" id="OffrngN" value="2">
        			<label for="OffrngN">No</label>
				 </fieldset>
                
               <div align="center" style="margin-top: 20px;">
               		<input type="submit" data-mini="true" value="Submit" data-inline="true">
                </div>
               </form>
             </div> 
             </div><!-- /upage-content -->

          <div data-role="footer" style="overflow:hidden;"data-position="fixed">
			<div data-role="navbar">
        		<ul>
            		<li><a href="" style="background-color:#000000">FAQ</a></li>
            		<li><a href="ReportProblem.html" style="background-color:#000000">Report A Problem</a></li>
        		</ul>
    		</div><!-- /navbar -->
		  </div><!-- /footer -->
          </div>
         </div><!-- /mainpage -->
        </div><!-- /uwrap -->          
</body>
</html>

      