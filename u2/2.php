<?php 

$con = mysqli_connect("localhost", "root", "", "mydb");
if (!$con) {
	die("connection error".mysqli_connect_error());
}
echo "connection successful <br>";


$query = mysqli_query($con, 'create table product(
	pro_id INT NOT NULL,
	pro_name VARCHAR(20) NOT NULL,
	pro_price INT NOT NULL,
	qty INT NOT NULL,
	rate INT NOT NULL
	)
	');
	
if ($query == 1) {
	echo "table created <br>";
} else {
	echo "table not created <br>";
}

$price = 100;
$id=4;

$query1 = mysqli_query($con, 'UPDATE product SET pro_price ='.$price.'  WHERE pro_id <='.$id);
$result = mysqli_affected_rows($con);

if ($result <= 4) {
	echo "no of record updated successfully: ".mysqli_affected_rows($con);
} else {
	echo "could not update".mysqli_connect_error();
}

mysqli_close($con);

?>