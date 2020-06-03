<?php 

	$ip_address = $_SERVER['REMOTE_ADDR']; //My IP Address 106.206.0.50
	$browser = $_SERVER['HTTP_USER_AGENT'];
	$date_created = date('d-m-Y');
	$form_data = array($_POST['output'],$ip_address, $date_created,$browser );
	$file_open  =fopen('file.csv','a');
	$no_rows = count(file("file.csv"));
	if($no_rows > 1)
	{
	$no_rows = ($no_rows - 1) + 1;
	}
    fputcsv($file_open,$form_data );
	
	

?>