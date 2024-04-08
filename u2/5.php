<html>
	<body>
		<form action="5.php" method="post">
			<input type="text" name="pid" placeholder="product id"> <br>
			<input type="text" name="prate" placeholder="product rate"> <br>
			<input type="submit" name="submit">
		</form>
		<?php 
		
		if (isset($_POST)) 
			
			$con = mysqli_connect("localhost", "root", "", "db_1");
			if (!$con) {
				die("could not connect".mysqli_connect_error());
			}
			echo "connection successful <br>";
			
			$query1 = mysqli_query($con, "CREATE TABLE product (
			pro_id INT NOT NULL,
			pro_name VARCHAR(20) NOT NULL,
			rate FLOAT NOT NULL,
			qty INT NOT NULL
			)");
			
			if ($query1) {
				echo "product table is selected";
			} else {
				echo "table exits";
			}
			
			$id = $_POST['pid'];
			$rate = $_POST['prate'];
			
			$query2 = mysqli_query($con, 'UPDATE product set rate='.($rate*0.05)+$rate. 'WHERE pro_id='.$id);
			$result = mysqli_affected_rows($con);
			
			if ($result == 1) {
				echo "record updated";
			} else {
				echo "could not update";
			}
			mysqli_close($con);
		?>
	</body>
</html>