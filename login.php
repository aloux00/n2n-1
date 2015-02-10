<?php 
	if (isset($_SESSION["userId"])) {
		$userId = $_SESSION["userId"];
		$userRoleId = $_SESSION["userRoleId"];
		$userFirstName = $_SESSION["userFirstName"];
		
		$dsProviders = getProvidersByUserId($userId);
		
		if ($dsProviders) {
			if (mysql_num_rows($dsProviders) == 0) {
				$userProviderCount = 0;
			} elseif (mysql_num_rows($dsProviders) == 1) {
				$userProviderCount = 1;
				$row = mysql_fetch_array($dsProviders); 
				foreach($row AS $key => $value) { $row[$key] = stripslashes($value); }
				$providerId = $row['ProviderId'];
			} else { /* more than one provider */
				$userProviderCount = mysql_num_rows($dsProviders);
				$providerOptions = '<option value="">Select...</option>';
				while($row = mysql_fetch_array($dsProviders)){ 
					foreach($row AS $key => $value) { $row[$key] = stripslashes($value); }
					$providerOptions .= "<option value=" . $row['ProviderId'] . ">" . $row['Name'] . "</option>";
				} 
			}
		} else {
			/* error */		
		}
		
	} else {
		/* session has expired */
		/* header('Location: sessionExpired.php'); */
		/* <p><a href=""index.php"">Try again</a></p> */
	}
		
		
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.css" />
	<link rel="stylesheet" href="themes/Neighborly.min.css">
    <title>Welcome Back</title>
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
            <h1 style="text-align:left; margin-left:10px;">Welcome Back, <?php echo $userFirstName; ?>!</h1>
            <a href="logout.php" data-icon="action" class="ui-btn-right" style="background-color:#000000;" data-transition="fade" data-rel="back">Sign Out</a>
         </div><!--/header-->
         
           <div class="upage-content" id="mainsub" style="margin-left:20px; margin-right:20px;"><!-- upage-content -->
           	
					<div style="margin-top:20px; margin-bottom:20px;"> 
                    	<fieldset data-role="controlgroup">
        					<legend style="margin-bottom:20px;">What Would You Like to Do?</legend>

<?php 

if ($userRoleId == "3"){  /* admin */
	$listOptions = '<a href="providerUpdate.php" class="ui-btn">Review Pending Providers/Offerings</a>';
	$listOptions .= '<a href="offeringUpdate.php" class="ui-btn">Review Contact Log</a>';
	$listOptions .= '<a href="offeringUpdate.php" class="ui-btn">Maintain Users</a>';
	$listOptions .= '<a href="offeringUpdate.php" class="ui-btn">Maintain System Data</a>';
	$listOptions .= '<a href="home.html" class="ui-btn">Search Providers</a>';
	
} elseif ($userRoleId == "2"){  /* editor */
	$listOptions = '<a href="createProfile.php" class="ui-btn">Create Provider Profile</a>';
	$listOptions .= '<a href="home.html" class="ui-btn">Search Providers</a>';
	
} elseif ($providerCount == 0){ /* patron */
	$listOptions = '<a href="createProfile.php" class="ui-btn">Create Provider Profile</a>';
	$listOptions .= '<a href="home.html" class="ui-btn">Search Providers</a>';
	
} elseif ($providerCount == 1){ /* provider (one) */
	$listOptions = '<a href="viewProfile.php?id=' . $providerId . '" class="ui-btn">View My Provider/Offerings</a>';
	$listOptions .= '<a href="providerUpdate.php?id=' . $providerId . '" class="ui-btn">Update My Provider/Offerings</a>';
	$listOptions .= '<a href="createProfile.php" class="ui-btn">Create Another Provider Profile</a>';
	$listOptions .= '<a href="home.html" class="ui-btn">Search Providers</a>';

} else { /* more than one provider profile */ 

	$selViewProfile = '<div class="ui-field-contain" style="margin-left:30px; margin-right:30px;">';
	$selViewProfile .= '<label for="selViewProfile" style="font-size:12px;">View Profile:</label>';
	$selViewProfile .= '<input type="hidden" value="$selViewProfile">';
	$selViewProfile .= '<select name="selViewProfile" id="selViewProfile" data-mini="true"';
	$selViewProfile .= ' onChange="window.location=' . "'viewProfile.php?id='" . '+this.value" >';
	$selViewProfile .= $providerOptions;
	$selViewProfile .= '</select></div>';

	$selUpdateProfile = '<div class="ui-field-contain" style="margin-left:30px; margin-right:30px;">';
	$selUpdateProfile .= '<label for="selUpdateProfile" style="font-size:12px;">Update Profile:</label>';
	$selUpdateProfile .= '<input type="hidden" value="$selUpdateProfile">';
	$selUpdateProfile .= '<select name="selUpdateProfile" id="selUpdateProfile" data-mini="true"';
	$selUpdateProfile .= ' onChange="window.location=' . "'providerUpdate.php?id='" . '+this.value" >';
	$selUpdateProfile .= $providerOptions;
	$selUpdateProfile .= '</select></div>';

	$listOptions = $selViewProfile;
	$listOptions .= $selUpdateProfile;
	$listOptions .= '<a href="createProfile.php" class="ui-btn">Create Another Provider Profile</a>';
	$listOptions .= '<a href="home.html" class="ui-btn">Search Providers</a>';
}

echo $listOptions;

?>
    					</fieldset>
					</div>	
                        
					
                    </div><!-- /upage-content -->

					<div data-role="footer" style="overflow:hidden;" data-position="fixed">
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