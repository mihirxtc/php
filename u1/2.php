 
<!-- 2. accept a number from user & print its square & cube -->

<html>
	<body>
		<form action="2.php" method="post">
			<input type="number" name="n" placeholder="enter a number"> <br>
			<input type="submit" name="submit">
		</form>
		<?php 
			$n = $_POST['n'];
			echo "square of $n is: ".$n * $n."<br>";
			echo "cube of $n is: ".$n * $n *$n."<br>";
		?>
	</body>
</html>