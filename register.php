<!DOCTYPE  doctype-->
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
	<link rel="stylesheet" href="themes/Neighborly.min.css">       
	<title>Register</title>
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
      <div id="register" data-role="page" data-theme="a"><!-- page -->
          
          <div data-role="header" style="overflow:hidden;" data-position="fixed">
            <a href="index.html" data-icon="home" class="ui-btn-left" style="background-color:#000000">Home</a>
            <h1 style="vertical-align: middle; text-align: center;">Register</h1>
            <a href="#" data-icon="carat-l" class="ui-btn-right" style="background-color:#000000;" data-transition="fade" data-rel="back">Back</a>
         </div><!--/header-->
         
           <div class="upage-content" id="mainsub" style="margin-left:20px; margin-right:20px;"><!-- upage-content -->
           	<div>
            	<h4>Create Provider Profile</h4>
            </div>
           		<figure class="figure-align">
                	<img src="images/placeholder_image1.png" height="50%" width="100%">
                    <figcaption data-position="bottom"></figcaption>
                 </figure>
             <form action="createProfile.php" method="post" id="register" data-ajax="false" data-theme="a">
              		<div style="margin-top:20px;">
                    	<label for="file">Upload Image or Logo</label>
						<input type="file" name="provdrImg" id="provdrImg" data-theme="a">
                        <input type="hidden" value="$provdrImg">
                    </div>
                  	<div>
                    	<label for="profileName">Individual, Company or Organization</label>
                    	<input type="text" id="profileName" name="profileName" placeholder="Name" >
                    	<input type="hidden" value="$provdrName">
                  	</div>
                  	<div>
                    	<label for="address1">Address 1</label>
                    	<input type="text" id="address1" name="address1" >
                    	<input type="hidden" value="$address1"> 
                  	</div>
                  	<div>
                    	<label for="address2">Address 2</label>
                    	<input type="text" id="address2" name="address2" >
                    	<input type="hidden" value="$address2"> 
                  	</div>
                  	<div>
                    	<label for="city">City</label>
                    	<input type="text" id="city" name="city" >
                    	<input type="hidden" value="$city"> 
                  	</div>
                  	<div>
                    	<label for="state">State</label>
                    	<input type="text" id="state" name="state" >
                    	<input type="hidden" value="$state"> 
                  	</div>
                  	<div>
                    	<label for="state">Zip Code</label>
                    	<input type="text" id="zipcode" name="zipcode" >
                    	<input type="hidden" value="$zipcode"> 
                  	</div>
                  	<div>
                    	<label for="url">Website Address</label>
                    	<input type="url" id="url" name="url" >
                    	<input type="hidden" value="$url"> 
                  	</div>
                    <div>
                    	<label for="email">Email Address</label>
                    	<input type="email" id="email" name="email" >
                    	<input type="hidden" value="$email"> 
                  	</div>	
                  	<div>
                    	<label for="phone">Phone #</label>
                    	<input type="tel" id="phone" name="phone" >
                    	<input type="hidden" value="$phone"> 
                  	</div>
                  <div>
                    <label for="contact">Preferred Method of Contact</label>
                    <input type="hidden" value="$contact">
                      <select name="contact" id="contact"> 
                        <option value="">Select...</option>
                        <option value="e">Email</option>
                        <option value="p">Phone</option>
                      </select>
                  </div>
                  <div>
                    <label for="accType">Type of Account</label>
                    <input type="hidden" value="$accType">
                      <select name="accType" id="accType"> 
                        <option value="">Select...</option>
                        <option value="b">Business Provider</option>
                        <option value="i">Individual Provider</option>
                        <option value="o">Organizational Provider</option>
                        <option value="u">User--Not a Provider</option>
                      </select>
                  </div>
                  <div>
                    <label for="nhood">Neighborhood Location</label>
                    <input type="hidden" value="$nhood">
                      <select name="nhood" id="nhood"> 
                        <option>Select....</option>
                        <option>Crown Hill</option>
                        <option>Highland Vacinity</option>
                        <option>Historic Meridian Park</option>
                        <option>Mapleton-Fall Creek</option>
                        <option>Meridian-Highland</option>
                        <option>Watson-McCord</option>
                      </select>
                    </div>
                    
                    <div style="margin-top:20px;"><!-- this selection only shown if account type is organizational -->
                    	<label for="map">Enter Code for Embedded Map</label>
                    	<input type="url" id="map name="map">
                    	<input type="hidden" value="$map"> 
                  	</div>
                    
                    <div style="margin-top: 20px;">
                    	<a href="#popupAgreement" data-rel="popup" data-position-to="window" class="ui-btn ui-corner-all ui-shadow ui-btn-mini ui-btn-a" data-transition="pop" data-theme="a">View User Agreement</a>
                    </div>
                    
                    <div style="height:100%; text-align:justify;" >     
                        	<legend>Click button to agree</legend>
                        	<input type="checkbox" name="agree" id="agree" data-theme="a">
    						<label for="agree">I agree</label>
                            <input type="hidden" value="$agree">
                    </div>
                     
                  	<div style="margin-top:20px;>
                  			<button type="submit" id="profSave" class="ui-shadow ui-btn ui-corner-all ui-mini">Save Profile</button>
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
          
          <div data-role="popup" id="popupAgreement" style="text-align:justify;">
          	<div data-role="header">
            	<h3 align="center">USE TERMS</h3>
            	<a href="#" data-rel="back" data-role="button" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a></div>
<p>Copyright 2014 - Kheprw Institute Open Source Activism All Rights Reserved. The Neighbor2Neighbor App may be used and modified free of charge by anyone so long as this user agreement and copyright notice remains intact. By using this app you agree to indemnify the Kheprw Institute from any liability that might arise from its use. Selling the code for this app without prior written consent is expressly forbidden. In all cases copyright and header must remain intact. By checking below you agree to abide by these terms.</p>
			</div>
          </div>
         </div><!-- /page -->
        </div><!-- /uwrap -->
        
    </body>
</html>

      