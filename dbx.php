<?php
 
            $hostname = '127.0.0.1';
            $username = 'root';
           	$password = 'xampp159';
			$dbname = 'n2ntalent';
            
			

			$con = new mysqli($hostname, $username, $password, $dbname);
			

			if(mysqli_connect_errno())
			{
    			printf("Connect failed: %s\n", mysqli_connect_error());
				exit();
			} else 
			// if connection successful
			{
			//printf("Host Information: %s\n", mysqli_get_host_info($con));
			
			}
?>