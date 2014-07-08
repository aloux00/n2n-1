<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
	<link rel="stylesheet" href="themes/Neighborly.min.css">   
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
	<div class="uwrap">
      <div id="mainpage" data-role="page" data-theme="a"><!-- mainpage -->
        <div class="upage-outer" id="uib_page_2">
            
          <div data-role="header" data-theme="a">
             <h1 style="vertical-align: middle; text-align: center;">Offering</h1>
            <a href="#" data-icon="carat-l" class="ui-btn-left" style="background-color:#000000;" data-transition="fade" data-rel="back">Back</a>
            <a href="logout.php" data-icon="action" class="ui-btn-right" style="background-color:#000000;" data-transition="fade">Sign Out</a>
            </div><!--/header-->
          
          <div id="uib_page_2sub" class="upage-content ">

            <div class="grid grid-pad urow uib_row_37 row-height-37" data-uib="layout/row" data-ver="0">
              <div class="col uib_col_63 col-0_12-12 pageBkgrd" data-uib="layout/col" data-ver="0">
                <div class="widget-container content-area vertical-col">

                  <div class="widget uib_w_138 d-margins" data-uib="media/img" data-ver="0">
                    <figure class="figure-align" style="margin-left: 20px; margin-right: 20px;">
                      <img src="images/NuMedia Logo.png" alt="Logo" longdesc="images/NuMedia Logo.png" width="100%" />
                      <figcaption data-position="bottom"></figcaption>
                    </figure>
                  </div>
                  <div class="widget uib_w_139" data-uib="media/img" data-ver="0">
                    <figure class="figure-align" style="margin-left: 20px; margin-right: 20px;">
                      <img src="images/NuMediaBackgroundsml.jpg" height="40%" width="100%">
                      <figcaption data-position="bottom"></figcaption>
                    </figure>
                  </div>
                  <div class="widget uib_w_140 d-margins" data-uib="media/text" data-ver="0">
                    <div class="widget-container left-receptacle"></div>
                    <div class="widget-container right-receptacle"></div>
                    <div style="margin-left: 20px; margin-right: 20px;">
                      <p>We offer graphic design, web/mobile development, social media management and branding services. Design with a cause. Visit our website to view our portfolio.</p>
                      <p>Fee: Call us to discuss your needs.</p>
                      <p>Contact: 317.329.4803 x 700</p>
                      <p><a href="http://www.kinumedia.org">www.kinumedia.org</a></p>
                    </div>
                  </div>
                  <div class="widget uib_w_141 d-margins" data-uib="media/iframe" data-ver="0" style="margin-left: 20px; margin-right: 20px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3064.409658569073!2d-86.16358090000001!3d39.82023199999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886b514675002ba7%3A0x767a2b5646e17170!2s3549+Boulevard+Pl!5e0!3m2!1sen!2sus!4v1402026665912"
                    width="100%" height="300" frameborder="0" style="border:0"></iframe>
                  </div>
                  <div style="height:20px;"></div>
                  <a href="#popupInquiry" data-rel="popup" data-position-to="window" class="ui-btn ui-corner-all ui-shadow ui-btn-mini ui-btn-a" data-transition="pop" data-theme="a" style="margin-left:30px; margin-right:30px;">Make Inquiry</a>
                  <div style="height:20px;"></div>
                </div>
              </div>
              <span class="uib_shim"></span>
            </div>
          </div>

           <div data-role="footer" style="overflow:hidden;" data-position="fixed">
			<div data-role="navbar">
        		<ul>
                    <li style="width: 50%;"><a href="#" style="background-color:#000000">FAQ</a></li>
            		<li style="width: 50%;"><a href="ReportProblem.html" style="background-color:#000000">Report A Problem</a></li>
        		</ul>
    		</div><!-- /navbar -->
		  </div><!-- /footer -->
        </div>
        <!-- /upage-outer -->

        
        <div data-role="popup" id="popupInquiry" class="ui-corner-all">
			<form action="contact.php" id="inquiryForm" method="post" style="background-color:#666666; color:#ffffff">
        		<div style="padding:10px 20px;">
            		<h3 align="center">Inquiry Form</h3>
            		<a href="#" data-rel="back" data-role="button" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
            		<label for="name">Name:</label>
            		<input type="text" name="user" id="name" data-clear-btn="true" />
            		<input type="hidden" value="$name"/>
            		<label for="email" >Email Address:</label>
            		<input type="email" name="email" id="email" data-clear-btn="true" />
            		<input type="hidden" value="$email"/>
            		<label for="textarea">Message:</label>
					<textarea cols="40" rows="8" name="message" value="$message"></textarea>
            		<button type="submit" class="ui-btn ui-corner-all ui-shadow ui-btn-a" style="margin-top: 10px;">Submit</button>
        		</div>
    		</form>
		</div>

      </div><!-- /uib_page2 -->
      </div><!-- /mainpage -->
      </div><!-- /uwrap -->
</body>
</html>