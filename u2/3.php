<html>
	<body>
		<form action="3.php" method="post">
			<input type="number" name="pid" placeholder="enter product id"> <br>
			<input type="submit" name="submit">
		</form>
		<?php 
			
			$con = mysqli_connect("localhost", "root", "", "db_1");
			if (!$con) {
				die("could not connect".mysqli_connect_error()); 
			}
			echo "connection successful <br>";
			
			$id = $_POST['pid'];
			
			if ($id < 0) {
				echo "cannot use negative number";
			} else {
				$query = mysqli_query($con, 'DELETE FROM product WHERE pro_id='.$id);
				$result = mysqli_affected_rows($con);
				
				if ($result == 1) {
					echo "record deleted successfully";
				} else {
					echo "could not delete";
				}
			}
			
			mysqli_close($con);
			
		?>
	</body>
<html>