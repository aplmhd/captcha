<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	

	<form action="" method="post">
		<input type="text" name="captcha">
		 <input type="submit">
	
	<?php
				$captcha = str_shuffle("ab");
				echo "<br>Captcha:".$captcha."<br>";
				
				if(!empty($_POST)){
				
					if($captcha == $_POST['captcha']){
						echo "login successfully";
					}
					else{
						echo "login fail";
					}
				
				}
				
				
		?>
	
		
</body>
</html>