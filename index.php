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
			<button class="btn-save">SAVE</button>
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

	
		
  
    <form method="post"> 
        <input type="submit" name="button1"
                class="button" value="Button1" /> 
          
        <input type="submit" name="button2"
                class="button" value="Button2" /> 
    </form> 

</body>

<div id="hide-history"></div>

</html>