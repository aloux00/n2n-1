<!DOCTYPE  doctype-->
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
	<link rel="stylesheet" href="themes/Neighborly.min.css">       
	<title>Update Profile</title>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
	<script type="text/javascript" src="utils.js"></script>
	<script type="application/javascript" src="js/jquery.min.js"></script>
	<script type="application/javascript" src="js/index_user_scripts.js"></script>
	<script type="application/javascript" src="popup/popup.min.js"></script>
    <script type="text/javascript"></script>
</head>
  
<body>
  <div class="uwrap"><!-- uwrap -->
      <div id="providerUpdate" data-role="page" data-theme="a"><!-- page -->
          
          <div data-role="header" style="overflow:hidden;" data-position="fixed">
            <a href="index.html" data-icon="home" class="ui-btn-left" style="background-color:#000000">Home</a>
            <h1 style="vertical-align: middle; text-align: center;">Update Profile</h1>
            <a href="#" data-icon="carat-l" class="ui-btn-right" style="background-color:#000000;" data-transition="fade" data-rel="back">Back</a>
         </div><!--/header-->
         
           <div class="upage-content" id="mainsub" style="margin-left:20px; margin-right:20px;"><!-- upage-content -->
           	<div>
            	<h4>Provider Name</h4>
            </div>
           		<figure class="figure-align">
                	<img src="images/placeholder_image1.png" height="50%" width="100%">
                    <figcaption data-position="bottom"></figcaption>
                 </figure>
             <form action="changeProfile.php" method="post" id="changeProfile" data-ajax="false" data-theme="a">
              		<div style="margin-top:20px;">
                    	<label for="file">Upload new Image or Logo</label>
						<input type="file" name="provdrImg" id="provdrImg" value="" data-theme="a">
                        <input type="hidden" value="$provdrImg">
                    </div>
                  	<div>
                    	<label for="profileName">Individual, Company or Organization</label>
                    	<input type="text" id="profileName" name="profileName" value="$provdrName">
                  	</div>
                  	<div>
                    	<label for="address1">Address 1</label>
                    	<input type="text" id="address1" name="address1" value="$address1">
                  	</div>
                  	<div>
                    	<label for="address2">Address 2</label>
                    	<input type="text" id="address2" name="address2" value="$address2"> 
                  	</div>
                  	<div>
                    	<label for="city">City</label>
                    	<input type="text" id="city" name="city" value="$city"> 
                  	</div>
                  	<div>
                    	<label for="state">State</label>
                    	<input type="text" id="state" name="state" value="$state"> 
                  	</div>
                  	<div>
                    	<label for="state">Zip Code</label>
                    	<input type="text" id="zipcode" name="zipcode" value="$zipcode"> 
                  	</div>
                  	<div>
                    	<label for="url">Website Address</label>
                    	<input type="url" id="url" name="url" value="$url"> 
                  	</div>
                    <div>
                    	<label for="email">Email Address</label>
                    	<input type="email" id="email" name="email" value="$email"> 
                  	</div>	
                  	<div>
                    	<label for="phone">Phone #</label>
                    	<input type="tel" id="phone" name="phone" value="$phone"> 
                  	</div>
                  <div>
                    <label for="contact">Preferred Method of Contact</label>
                    <input type="hidden" value="$contact">
                      <select name="contact" id="contact"> 
                        <option value="">Select...</option>
                        <option value="e" selected="selected">Email</option>
                        <option value="p">Phone</option>
                      </select>
                  </div>
                  <div>
                    <label for="accType">Type of Account</label>
                    <input type="hidden" value="$accType">
                      <select name="accType" id="accType"> 
                        <option value="">Select...</option>
                        <option value="b" selected="selected">Business Provider</option>
                        <option value="i">Individual Provider</option>
                        <option value="o">Organizational Provider</option>
                        <option value="u">User--Not a Provider</option>
                      </select>
                  </div>
                  <div>
                    <label for="nhood">Neighborhood Location</label>
                    <input type="hidden" value="$nhood">
                      <select name="nhood" id="nhood"> 
                        <option value="">Select....</option>
                        <option value="ch" selected="selected">Crown Hill</option>
                        <option value="hv">Highland Vacinity</option>
                        <option value="hm">Historic Meridian Park</option>
                        <option value="mf">Mapleton-Fall Creek</option>
                        <option value="mh">Meridian-Highland</option>
                        <option value="wm">Watson-McCord</option>
                      </select>
                    </div>
                    
                    <div style="margin-top:20px;"><!-- this selection only shown if account type is organizational -->
                    	<label for="map">Enter Code for Embedded Map</label>
                    	<input type="url" id="map name="map" value="$map">
                  	</div>
                  	<div style="margin-top:20px;>
                  			<button type="submit" id="updateSave" class="ui-shadow ui-btn ui-corner-all ui-mini">Save Profile</button>
                  	</div>
                  </form>
               </div> <!-- /upage content -->

          <div data-role="footer" style="overflow:hidden;">
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

      