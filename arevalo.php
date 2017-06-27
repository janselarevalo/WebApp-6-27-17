<html>
<head>
	<title>J 1 </title>
</head>

<body>
	<div>
		<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" > 
			<b><center><p>Name: <input type="text" name="inputName"/> </p>
			<p><input type="submit" name="submit" value="=SUBMIT="/></p>

			

			<?php 
				if(isset($_POST['submit'])) {
					$name = $_POST['inputName'];

					date_default_timezone_set('Asia/Manila');
					$date = date("m/d/Y/ h:i:sa");
					echo $name . '<br>' .  " " . $date;
				}			
			?>

			<p><input type="submit" name="Delete" value="=DELETE="></p>


			<?php 
				if(isset($_POST['delete'])) {
					$name = null;
					$date = null;
				}
			
			?>
		</form>
	</div>
</body>
</html>