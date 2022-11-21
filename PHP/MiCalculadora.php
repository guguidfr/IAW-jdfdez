<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$num1=$_POST['n1'];
	$num2=$_POST['n2'];
	$oprnd=$_POST['sub'];
	if($oprnd=="+"){
		$ans=$num1+$num2;
	}else if($oprnd=="-"){
		$ans=$num1-$num2;
	}else if($oprnd=="x"){
		$ans=$num1*$num2;
	}else if($oprnd=="/"){
		$ans=$num1/$num2;
	}
}else{
	$ans="";
}?>
<html>
<head>
	<style type="text/css">
		.contenedor
		{
			left: 25%;
			padding: 100px;
			text-align: center;
			border: 2px solid #e01515;
			
		}
		input, select {
  			width: 40%;
  			padding: 12px 20px;
  			margin: 8px 0;
  			display: inline-block;
  			border: 1px solid #ccc;
  			border-radius: 4px;
  			box-sizing: border-box;
		}

		input[type=submit] {
  			width: 5%;
 		 	background-color: #e01515;
  			color: white;
  			padding: 14px 20px;
  			margin: 8px 0;
  			border: none;
	 	 	border-radius: 4px;
  			cursor: pointer;
}
	</style>
</head>
<body>
<div class="contenedor">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h1>Mi calculadora</h1>
<br>
Primer número:<input name="n1" value="">
<br>
Segundo número:<input name="n2" value="">
<br>
<input type="submit" name="sub" value="+">
<input type="submit" name="sub" value="-">
<input type="submit" name="sub" value="x">
<input type="submit" name="sub" value="/">
<br>
<br>Total: <input type='text' value="<?php echo $ans; ?>"><br>
</form>
	</div>
</body>
</html>