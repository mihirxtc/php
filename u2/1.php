<html>
	<body>
		<!--- step 1 -->
		<form action="1.php" method="post">
			<input type="number" name="pid" placeholder="product id"> <br>
			<input type="text" name="pname" placeholder="product name"> <br>
			<input type="number" name="pprice" placeholder="product price"> <br>
			<input type="number" name="qoh" placeholder="product quantity"> <br>
			<input type="submit" name="submit">
		</form>
		<?php 
		
		if (isset($_POST)) {
			
			// step 2
			$con = mysqli_connect("localhost", "root", "", "db_1");
			if (!$con) {
				die("could not connect".mysqli_connect_error());
			}
			echo "connection suceessfull <br>";
			
			// step 3
			$pro_id = $_POST['pid'];
			$pro_name = $_POST['pname'];
			$pro_price = $_POST['pprice'];
			$qoh = $_POST['qoh'];
			
			// step 4
			$query = mysqli_query($con, "INSERT INTO product (pro_id, pro_name, pro_price, qoh) values ($pro_id, '$pro_name', $pro_price, $qoh)");
			$result = mysqli_affected_rows($con);
			
			if ($result == 1) {
				echo "record inserted successfully";
			} else {
				echo "record error".mysqli_error($con);
			}
			mysqli_close($con);
		}
		
		?>
	</body>
</html>