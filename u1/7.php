<!--- 7. check whether a number is armstrong of not  using function -->

<html>
	<body>
		<form action="7.php" method="post">
			<input type="number" name="n" placeholder="enter a number">
			<input type="submit" name="submit">
		</form>
		<?php 
			function checkNum($n) {
				$total = 0;
				$x = $n;
				while ($x!=0) {
					$rem = $x%10;
					$total = $total + $rem * $rem * $rem;
					$x = $x/10;
				}
				if ($n == $total) {
					echo "yes it's armstrong number";
				} else {
					echo "no it's not armstrong number";
				}
			}
			$n = $_POST['n'];
			$result = checkNum($n);
			echo $result;
		?>
	</body>
</html>