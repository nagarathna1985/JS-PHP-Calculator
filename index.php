<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, initial-scale=1.0">
	<title>Change the title</title>
	<link href="style.css"
				rel="stylesheet">
				<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="index.js"
					defer></script>
</head>

<body>

	<main class="calculator">
		<section class="display">
			<div class="history"></div>
			<div class="input"></div>
		</section>

		<section class="buttons">
		<article class="btn-wrapper">
			<button class="btn-clear" onClick="allClear()">AC</button>
			<button class="btn-save" >SAVE</button>
		</article>
			<button class="btn-operator"
							data-num="/">&divide;</button>
    	<button class="btn-number"
							data-num=".">.</button>
			<button class="btn-number"
							data-num="0">0</button>
			<button class="btn-number"></button>
			<button class="btn-operator"
							data-num="*">&times;</button>
			<button class="btn-number"
							data-num="1">1</button>
			<button class="btn-number"
							data-num="2">2</button>
			<button class="btn-number"
							data-num="3">3</button>
			<button class="btn-operator"
							data-num="-">-</button>
			<button class="btn-number"
							data-num="4">4</button>
			<button class="btn-number"
							data-num="5">5</button>
			<button class="btn-number"
							data-num="6">6</button>
			<button class="btn-operator"
							data-num="+">+</button>
			<button class="btn-number"
							data-num="7">7</button>
			<button class="btn-number"
							data-num="8">8</button>
			<button class="btn-number"
							data-num="9">9</button>
			<button class="btn-operator"
							data-num="=" onClick="equal()">=</button>
		</section>
	</main>

	<?php
        if(array_key_exists('button1', $_POST)) { 
            button1(); 
        } 
        else if(array_key_exists('button2', $_POST)) { 
						button2(); 
						
        } 
        function button1() { 
            echo "This is Button1 that is selected"; 
        } 
        function button2() { 
						echo "This is Button2 that is selected"; 
						$IP = $_SERVER['REMOTE_ADDR'];
						// $date = date('Format String');
						$browser = get_browser(null, true);
						print_r($browser);
						$date = date("d-m-Y");

							echo "IP is $IP";
							$fp = fopen("file.csv", 'w');

            fputcsv($fp,array($IP,$browser,$date, $display));

            fclose($fp);
						return $IP;
	
        } 
    ?> 
		
  
    <form method="post"> 
        <input type="submit" name="button1"
                class="button" value="Button1" /> 
          
        <input type="submit" name="button2"
                class="button" value="Button2" /> 
    </form> 

</body>

<div id="hide-history"></div>

</html>