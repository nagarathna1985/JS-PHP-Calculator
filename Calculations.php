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
    if(fputcsv($file_open,$form_data ))
	{
		$output = '';
		$output .= '<table><thead>
                    	<tr>
						<th>DATA</th>
                        <th>IP</th>
						<th>DATE</th>
						<th>BROWSER</th>
						</tr></thead><tbody>'; 
		$f_pointer = fopen("file.csv","r");
		while(! feof($f_pointer)){
		$ar=fgetcsv($f_pointer);
		//print_r($ar); 
		
				
			$output .= '<tr>
						<td>'.$ar[0].'</td>
						<td>'.$ar[1].'</td>
						<td>'.$ar[2].'</td>
						<td>'.$ar[3].'</td> </tr>';
					//	echo $output;
				}
				$output .= '</tbody></table>';
		echo $output;
		//fclose($f_pointer);
	}else {
		echo "error";
	}
	

?>