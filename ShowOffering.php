<!DOCTYPE html PUBLIC>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">     
	<?php
	require('dbx.php');
	?>
    <title>Provider List</title>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
	<link rel="stylesheet" href="themes/Neighborly.min.css">      
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="utils.js"></script>
	<script type="application/javascript" src="js/jquery.min.js"></script>
	<script type="application/javascript" src="js/index_user_scripts.js"></script>
	<script type="application/javascript" src="popup/popup.min.js"></script> 
</head>

<body>
    <div class="uwrap"><!-- uwrap -->
      <div id="mainpage" data-role="page" data-theme="a"><!-- mainpage -->

 		<div data-role="header" style="overflow:hidden;">
            <a href="index.html" data-icon="carat-l" class="ui-btn-left" style="background-color:#000000;" data-transition="fade">Back</a>
            <h1 style="vertical-align: middle; text-align: center;">Providers</h1>
            <a href="#" data-icon="action" class="ui-btn-right" style="background-color:#000000">Sign Out</a>
         </div>
         
         <div class="upage-content" id="mainsub">

            <div class="grid grid-pad urow uib_row_8 row-height-8" data-uib="layout/row" data-ver="0">
              <div class="col uib_col_2 col-0_12-12" data-uib="layout/col" data-ver="0">
                <div class="widget-container content-area vertical-col center">
<?php
    <?php
if (action=='offprofile') { 
    showOneOffProfile($ProviderId,$Offering)
} else { 
    showOffProfile
}
 if ($action == 'addnew') {
   showOneTalent(-1);
} else if ($action == 'upsert') {
	if ($_REQUEST['id'] == '-1') {
		
	
	print("<div class=\"widget uib_w_14 ui-content no_wrap outset-margin d-margins\" data-rel=\"popup\">");
	  print("<ul data-role=\"listview\" data-filter=\"true\" data-mini=\"true\">");
		while($row = mysqli_fetch_row($result)) {
    	print("<li class=\"widget uib_w_15 img\" data-uib=\"jquery_mobile/listitem\" data-theme=\"a\">");
                        print("<a href=\"ShowOffering.php?action=offprofile&ProviderId=.$row[$ProviderId].'\" data-rel=\"popup\">");
                          print("<img src=\".$row[$ProfileImagePath].\">");
                          print("<h2>"); 
						  print('.$row[$Name].');
						  print("<\h2>"); 
						  print("<br>");
                          print("<p>");
						  print('.$row[$Description].');
						  print("</p>");
                        print("</a>");
         print("</li>\n");
		print("</ul>");
	print("</div>"); 
	}
   } else {
	print("No Records found");
	return;   
   }
}
?>	
                </div>
              </div>
  </div>

</div><!-- /upage-content -->
          
</body>
</html>