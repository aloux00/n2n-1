<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.css" />
	<link rel="stylesheet" href="themes/Neighborly.min.css">        
    <title>Update Offering</title>
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.js"></script>
	<script type="text/javascript" src="utils.js"></script>
	<script type="application/javascript" src="js/jquery.min.js"></script>
	<script type="application/javascript" src="js/index_user_scripts.js"></script>
	<script type="application/javascript" src="popup/popup.min.js"></script>
    <script type="text/javascript"></script>
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
  <div class="uwrap"><!-- uwrap -->
      <div id="createOffrng" data-role="page" data-theme="a"><!-- page -->
          
          <div data-role="header" style="overflow:hidden;" data-position="fixed">
            <a href="home.html" data-icon="home" class="ui-btn-left" style="background-color:#000000">Home</a>
            <h1>Update Offering Details</h1>
            <a href="#" data-icon="carat-l" class="ui-btn-right" style="background-color:#000000;" data-transition="fade" data-rel="back">Back</a>
         </div><!--/header-->
         
           <div class="upage-content" id="mainsub" style="margin-left:20px; margin-right:20px;"><!-- upage-content -->
           	<div>
            	<h4>Create Offering Profile</h4>
            </div>
           		<figure class="figure-align">
                	<img src="images/placeholder_image1.png" height="50%" width="100%">
                    <figcaption data-position="bottom"></figcaption>
                 </figure>
                 
              	<form action="offeringDetail.php" method="post" id="register" data-ajax="false" data-theme="a">
              		<div style="margin-top:20px;">
                    	<label for="file">Upload Image or Logo</label>
						<input type="file" name="provdrImg" id="provdrImg" value="" data-theme="a">
                        <input type="hidden" value="$provdrImg" />
                    </div>
                  	<div>
                    	<label for="offeringName">Offering Name</label>
                    	<input type="text" id="offeringName" name="offeringName" value="$offrngName">
                  	</div>
					<div>
                    	<label for="offrngDesc">Description</label>
    					<textarea name="offrngDesc" id="offrngDesc" placeholder="$offrngDesc" value="$offrngDesc"></textarea>
                    </div>
                    <div>
                    	<label for="offrngDesc">Fee - Product/Service Cost or Free</label>
    					<textarea name="fee" id="fee" value="$fee" placeholder="$fee" ></textarea>
                    </div>		
					<div> 
                    	<fieldset data-role="controlgroup">
        					<legend>Willing to Barter?</legend>
        					<input type="radio" name="barter" id="barter-a" value="on">
        					<label for="barter-a">Yes</label>
        					<input type="radio" name="barter" id="barter-b" value="off" checked="checked">
        					<label for="barter-b">No</label>
    					</fieldset>
					</div>	
                     <div>
                    	<label for="offrngURL">Web Address <br/>(if different from main website)</label>
    					<input type="text" id="offrngURL" name="offrngURL" value="$offrngURL">
                    </div>   
                        
					<div style="margin-top:10px;">
                  			<button type="submit" id="offrngSave" class="ui-shadow ui-btn ui-corner-all ui-mini">Save Offering Profile</button>
                  	</div>
                  </form>
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