<?php 
	require './database/category/functions.php';
	$dsCat = getCategories();
?>
<!DOCTYPE  doctype-->
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.css" />
	<link rel="stylesheet" href="themes/Neighborly.min.css">
    <link rel="stylesheet" href="N2N.css">
    <style>
	.n2d {
	   vertical-align: middle;
	   text-align: left;
	   margin-left: 10px;
    }
	</style>
    <?php
	require './database/user/functions.php';
	/* require('dbx.php'); */
	/* require('createUserAcct.php'); */
	?> 
	<title>Neighbor2Neighbor Directory</title>    
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.js"></script>
	<script type="text/javascript" src="utils.js"></script>
	<script type="application/javascript" src="js/jquery.min.js"></script>
	<script type="application/javascript" src="js/index_user_scripts.js"></script>
	<script type="application/javascript" src="popup/popup.min.js"></script>
    <script src="jquery.validate.js"></script>
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

  <body><!-- content goes here -->
    <div class="uwrap"><!-- uwrap -->
      <div id="mainpage" data-role="page" data-theme="a"><!-- mainpage -->
      
          <div data-role="header" data-position="fixed" style="overflow:hidden;">
            <h1 style="vertical-align:middle; text-align:left; margin-left:10px;">N2N Directory</h1>
            <a href="#popupSignIn" data-rel="popup" data-icon="gear" class="ui-btn-right" style="background-color:#000000">Sign In</a>
          </div>
          
          <div class="upage-content" id="mainsub"><!-- upage-content -->
                  <div>
                    <figure>
                      <img src="images/house1400ysky.jpg" width="100%" height="200px;" alt="house">
                    </figure>
                  </div>
                  
                    <div>
                      <p style="margin-left:30px;">Who are you looking for?</p>
                    </div>
                  
                  <div>
                  <form id="hmpgform" action="" method="post">
                  
                  <div class="ui-field-contain" style="margin-left:30px; margin-right:30px;">
         			<label for="search-1">Search by Name:</label>
         			<input type="hidden" value="$nmeSearch">
					<input type="search" name="search-1" id="nmeSearch" onChange="window.location='providerList.php?keyword='+this.value">
    			</div>
                    <div style="height: 25px"></div>
                  
                  <div class="ui-field-contain" style="margin-left:30px; margin-right:30px;">
                    <label for="pIndex" style="font-size:12px;">Index <?php echo "Testing"; ?></label>
                    <input type="hidden" value="$pIndex">
                      <select name="pIndex" id="pIndex" data-mini="true" data-ajax="true" onChange="window.location='providerList.php?index='+this.value" > 
                        <option value="">Select...</option>
                        <option value="A-D">A-D</option>
                        <option value="E-H">E-H</option>
                        <option value="I-L">I-L</option>
                        <option value="M-P">M-P</option>
                        <option value="Q-T">Q-T</option>
                        <option value="U-X">U-X</option>
                        <option value="Y-Z">Y-Z</option>
                      </select>
                  </div>
                  
                  <div></div>
                  
                    <div>
                      <p style="margin-left:30px;">What are you looking for?</p>
                    </div>
                  
                  <div class="ui-field-contain" style="margin-left:30px; margin-right:30px;">
                    <label for="pCat" style="font-size:12px;">Categories</label>
                    <input type="hidden" value="$pCat">
                      <select name="pCat" id="pCat" data-mini="true" onChange="window.location='providerList.php?category='+this.value" >
                        <option value="">Select...</option>
							<?php 
                                if ($dsCat) {
                                    while($row = mysql_fetch_array($dsCat)){ 
                                        foreach($row AS $key => $value) { $row[$key] = stripslashes($value); }
                                            $out .= "<option value=" . $row['CategoryId'] . ">" . $row['Name'] . "</option>";
                                    } 
                                } else {
                                    $out = 'Error.';
                                }
                            
                                echo $out;
                            ?>						
                      </select>
                    </div> 
                   
				</form>
          		</div>
          
          </div><!-- /upage-content -->

          <div style="height: 30px"></div>

          <div data-role="footer" style="overflow:hidden;" data-position="fixed">
			<div data-role="navbar">
        		<ul>
            		<li><a href="" style="background-color:#000000">FAQ</a></li>
            		<li><a href="reportProblem.html" style="background-color:#000000">Report A Problem</a></li>
        		</ul>
    		</div><!-- /navbar -->
		  </div><!-- /footer -->
          
          <div data-role="popup" id="popupSignIn" class="ui-corner-all" style="margin-bottom:30px; background-color:#666666; color:#ffffff;">
          <script type="text/javascript">
			$(document).ready(function() {
				$('#signIn').validate({
				rules: {
					email: {
						required: true,
						minlength: 6, 
					},
					loginUsrpasswrd: {
						required: true,
						minlength: 6, 
					}
				},
				messages: {
					loginUsrname: {
						required: "Please enter a username."
					},
					loginUsrpasswrd: {
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
        <form method="post" action="verifyLogin.php"  id="signIn" data-theme="a">
        	<div style="padding:10px 20px;">
            
            	<h3 align="center">Log In</h3>
            	<a href="#" data-rel="back" data-role="button" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
            
        	<h4>If you do not have an account, click <a href="userRegistration.html">here </a>to register. </h4>
            <div style="height:10px;"></div>
            <div>
            	<label for="loginEmailAddr" class="ui-hidden-accessible">Email Address*</label>
                <input type="email" id="email" name="email" placeholder="Email Address*">
                <input type="hidden" value="$loginEmailAddr">    	
            
    			<label for="loginUsrpasswrd" class="ui-hidden-accessible">Password*</label>
                <input type="password" id="loginUsrpasswrd" name="loginUsrpasswrd" placeholder="Password*">
             	<input type="hidden" value="$loginUsrpasswrd">       	
            </div>
            <div align="center">
            <input type="submit" data-mini="true" value="Submit" data-inline="true" data-role="button">
            </div>
        	</div><!-- /padding -->
    	</form>
	</div>
          
 </div><!-- /mainpage --> 
</div><!-- /uwrap --> 
</body>
</html>