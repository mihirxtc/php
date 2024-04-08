<!--- check wheather the sum of 3 number is prime or not, accept 3 numbers -->

<html>
	<body>
		<form action="5.php" method="post">
			<input type="number" name="n1" placeholder="enter first number"> <br>
			<input type="number" name="n2" placeholder="enter second number"> <br>
			<input type="number" name="n3" placeholder="enter third number"> <br>
			<input type="submit" name="submit">
		</form>
		<?php 
			function checkPrime($n1, $n2, $n3) {
				$sum = $n1 + $n2 + $n3;
				if ($sum == 1) {
					return 0;
				}
				for ($i=2; $i<=$sum/2; $i++) {
					if ($sum % $i == 0) {
						return 0;
					}
				}
			return 1;
			}
			
			$n1 = $_POST['n1'];
			$n2 = $_POST['n2'];
			$n3 = $_POST['n3'];
			$sum = $n1 + $n2 + $n3;
			
			$result = checkPrime($n1, $n2, $n3);
			if ($result == 1) {
				echo "sum =".$sum."<br> it is prime";
			} else {
				echo "sum =".$sum."<br> it is not-prime";
			}
		?>
	</body>
</html>