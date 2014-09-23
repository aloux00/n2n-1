<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.css" />
	<link rel="stylesheet" href="themes/Neighborly.min.css">    
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
    <div class="uwrap">
      <div id="viewProfile" data-role="page" data-theme="a"><!-- mainpage -->
        <div class="upage-outer">
          
          <div data-role="header" style="overflow:hidden;">
            <a href="#" data-icon="carat-l" class="ui-btn-left" style="background-color:#000000;" data-transition="fade" data-rel="back">Back</a>
            <h1>View Profile</h1>
            <a href="logout.php" data-icon="action" class="ui-btn-right" style="background-color:#000000">Sign Out</a>
         </div><!--/header-->
          
         <div id="uib_page_2sub" class="upage-content ">
            <div class="grid grid-pad urow uib_row_15 row-height-15" data-uib="layout/row" data-ver="0">
              <div class="col uib_col_29 col-0_12-12" data-uib="layout/col" data-ver="0">
                <div class="widget-container content-area vertical-col">
                          
                <div class="widget-container content-area vertical-col">
                 	<div style="margin-left:30px; margin-right: 30px;">
                      <h4>Kheprw</h4>
            	  	</div>
                 </div>

                  <div class="widget uib_w_70 scale-image d-margins" data-uib="media/img" data-ver="0">
                    <figure class="figure-align" align="left" style="margin-left:30px; margin-top:10px;">
                     <img src="images/ki_trsp.png" width="128" height="128" alt="KI Logo">
                    </figure>
                  </div>
                  
                  <div class="widget uib_w_73 d-margins phone" data-uib="media/text" data-ver="0">
                    <div style="margin-left:30px; margin-right: 30px;">
                      <p> <a href="http://www.kieocenter.org">www.kieocenter.org</a></p>
                      <a href="#popupContact" data-rel="popup" data-position-to="window" class="ui-btn ui-corner-all ui-shadow ui-btn-mini ui-btn-a" data-transition="pop" data-theme="a">Contact Us</a>
                    </div>
                  </div>
                </div>
              </div>
              <span class="uib_shim"></span>
            </div>

            <div class="grid grid-pad urow uib_row_16 row-height-16" data-uib="layout/row" data-ver="0">
              <div class="col uib_col_30 col-0_12-12" data-uib="layout/col" data-ver="0">
                <div class="widget-container content-area vertical-col">

                  <div class="widget uib_w_72 d-margins" data-uib="media/text" data-ver="0">
                    <div class="widget-container left-receptacle"></div>
                    <div class="widget-container right-receptacle"></div>
                    <div style="margin-left:30px;">
                      <p> 3549 Boulevard Place<br>
                          P.O. Box 88856<br>
                          Indianapolis, IN 46208<br>
                          info@kheprw.org</p>
                    </div>
                    <div class="widget uib_w_94 d-margins iframe-size" data-uib="media/iframe" data-ver="0" style="margin-left:30px; margin-right:30px;"><!-- map only shown for organizations -->
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3064.4096585690654!2d-86.16358089999999!3d39.82023199999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886b514675002ba7%3A0x767a2b5646e17170!2s3549+Boulevard+Pl!5e0!3m2!1sen!2sus!4v1400644897818" height="300" width="100%" frameborder="0" style="border:0" align="left"></iframe>
                  <span class="uib_shim"></span>
                  </div>
                </div>
              </div>
            </div>
            </div>
             
                        
            <div class="grid grid-pad urow uib_row_18 row-height-18" data-uib="layout/row" data-ver="0" style="margin-left:20px; margin-right:20px; margin-top: 50px;">
              <div class="col uib_col_33 col-0_12-12" data-uib="layout/col" data-ver="0">
                <div class="widget-container content-area vertical-col">
                 	<div style="height=50px;">
                      <h5 style="margin-top:30px; text-align:center;">What Would You Like to Do Now?</h5>
                      <span class="uib_shim"></span>
            	  	</div>
                 </div>
                 
                 <div style="margin-bottom:20px; margin-left:10px; margin-right:10px;"> 
                    	<fieldset data-role="controlgroup">
        					<a href="addOffering.html" class="ui-btn ui-corner-all ui-shadow ui-btn-mini ui-btn-a" data-transition="pop" data-theme="a">Add An Offering</a>
                            <a href="providerUpdate.php" class="ui-btn ui-corner-all ui-shadow ui-btn-mini ui-btn-a" data-transition="pop" data-theme="a">Update Provider Info</a>
        					<a href="index.html" class="ui-btn ui-corner-all ui-shadow ui-btn-mini ui-btn-a" data-transition="pop" data-theme="a" >Search Providers/Offerings</a>
    					</fieldset>
					</div>
              
          <div data-role="footer" style="overflow:hidden;" data-position="fixed">
			<div data-role="navbar">
        		<ul>
            		<li style="width: 25%;"><a href="index.html" style="background-color:#000000">Home</a></li>
                    <li style="width: 25%;"><a href="#" style="background-color:#000000">FAQ</a></li>
            		<li style="width: 50%;"><a href="ReportProblem.html" style="background-color:#000000">Report Problem</a></li>
        		</ul>
    		</div><!-- /navbar -->
		  </div><!-- /footer -->
          </div>
          </div>
          </div>
      </div>
      
      <div data-role="popup" id="popupContact" class="ui-corner-all">
			<form action="contact.php" id="contactForm" method="post" style="background-color:#666666; color:#ffffff">
        		<div style="padding:10px 20px;">
            		<h3 align="center">Contact Form</h3>
            		<a href="#" data-rel="back" data-role="button" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
            		<label for="cfname">Name:</label>
            		<input type="text" name="cfname" id="cfname" data-clear-btn="true" />
            		<input type="hidden" value="$cfname"/>
            		<label for="cfemail">Email Address:</label>
            		<input type="email" name="cfemail" id="cfemail" data-clear-btn="true" />
            		<input type="hidden" value="$cfemail"/>
            		<label for="textarea">Message:</label>
					<textarea cols="40" rows="8" name="cfmessage" value="$cfmessage"></textarea>
            		<button type="submit" class="ui-btn ui-corner-all ui-shadow ui-btn-a" style="margin-top: 10px;">Submit</button>
        		</div>
    		</form>
		</div>
      
    </div><!-- /upage-outer -->
    </div><!-- /mainpage -->
    </div><!-- /uwrap -->  
  </body>
</html>