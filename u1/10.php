<!--- 10. print table -->
<html>
	<body>
		<form action="10.php" method="post">
			<input type="number" name="n" placeholder="enter a number">
			<input type="submit" name="submit">
		</form>
		<?php 
		$n = $_POST['n'];
		for ($i=1; $i<11; $i++) {
			$no = $n * $i;
			echo "$n * $i = $no <br>";
		}
		echo "<br>";
		?>
	</body>
</html>