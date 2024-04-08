<!--- accept a string from user & reverse string -->

<html>
	<body>
		<form action="3.php" method="post">
			<input type="text" name="s" placeholder="enter string"> <br>
			<input type="submit" name="submit">
		</form>
		<?php 
			$s = $_POST['s'];
			echo strrev($s);
		?>
	</body>
</html>