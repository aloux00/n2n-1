<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
	<link rel="stylesheet" href="themes/Neighborly.min.css">
<?php
/* username and password validated prior to see this page */
?>       
    <title>Welcome Back</title>
	<script src="intelxdk.js"></script>
    <script src="cordova.js"></script>
    <script type="application/javascript" src="js/jquery.min.js"></script>
    <script type="application/javascript" src="jqm/jquery.mobile-min.js" data-ver="0"></script>
    <script type="application/javascript" src="sidebar/js/jquery.event.move.js"></script>
    <script type="application/javascript" src="sidebar/js/jquery.event.swipe.js"></script>
    <script type="application/javascript" src="sidebar/js/sidebar.js"></script>
    <script type="application/javascript" src="sidebar/js/swipe.js"></script>
    <script type="application/javascript" src="popup/popup.min.js"></script>
    <script type="application/javascript" src="js/index_user_scripts.js"></script>
    <script type="application/javascript" src="justgage/js/raphael.min.js"></script>
    <script type="application/javascript" src="justgage/js/justgage.min.js"></script>
    <script type="application/javascript" src="justgage/gauges.js"></script>
    <script type="application/javascript" src="js/jqm_subpage.js"></script>
<title>Offering</title>
</head>

<body>
  <div class="uwrap"><!-- uwrap -->
      <div id="createOffrng" data-role="page" data-theme="a"><!-- page -->
          
          <div data-role="header" style="overflow:hidden;" data-position="fixed">
            <h1 style="vertical-align: middle; text-align: center;">Welcome Back</h1>
            <a href="logout.php" data-icon="action" class="ui-btn-right" style="background-color:#000000;" data-transition="fade" data-rel="back">Sign Out</a>
         </div><!--/header-->
         
           <div class="upage-content" id="mainsub" style="margin-left:20px; margin-right:20px;"><!-- upage-content -->
           	
					<div style="margin-top:20px; margin-bottom:20px;"> 
                    	<fieldset data-role="controlgroup">
        					<legend style="margin-bottom:20px;">What Would You Like to Do?</legend>
        					<a href="providerUpdate.php" class="ui-btn">Update Provider Profile</a>
        					<a href="offeringUpdate.php" class="ui-btn">Update Offering Details</a>
        					<a href="home.html" class="ui-btn">Return to Home Page</a>
    					</fieldset>
					</div>	
                        
					
                    </div><!-- /upage-content -->

					<div data-role="footer" style="overflow:hidden;">
						<div data-role="navbar">
        					<ul>
            					<li><a href="" style="background-color:#000000">FAQ</a></li>
            					<li><a href="ReportProblem.html" style="background-color:#000000">Report A Problem</a></li>
        					</ul>
    					</div><!-- /navbar -->
		  			</div><!-- /footer -->
                    
        
        </div><!-- /page -->
        </div><!-- /uwrap -->
    </body>
</html>