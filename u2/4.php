<html>
	<body>
		<form action="4.php" method="post">
			<input type="number" name="pid" placeholder="enter id"> <br>
			<input type="submit" name="submit">
		</form>
		<?php 
		
		if (isset($_POST)) {
			
			$con = mysqli_connect("localhost", "root", "", "db_1");
			if (!$con) {
				die("could not connect".mysqli_connect_error());
			}
			echo "connection successfully";
			
			
			$id = $_POST['pid'];
			

			if ($id < 0) {
				echo "cannot use negative number";
			} else {
				$query = mysqli_query($con, 'SELECT * FROM product WHERE pro_id='.$id);
				if (mysqli_num_rows($query) > 0) {
					while ($row = mysqli_fetch_array($query)) {
						echo "product id: {$row['pro_id']}<br>".
						"product name: {$row['pro_name']}<br>".
						"product price: {$row['pro_price']}<br>".
						"quantity on hand: {$row['qoh']}<br>";
					}
				}
				else {
					echo "no record found";
				}
			}
			
		}
	
		mysqli_close($con);
		
		?>
	</body>
</html>