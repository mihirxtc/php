<html>
    <body>
        <form action="update_quantity.php" method="post">
            <input type="number" name="pid" placeholder="product id"> <br>
            <input type="number" name="qoh" placeholder="quantity"> <br>
            <input type="submit" value="submit">
        </form>
        <?php
        if (isset($_POST)) {

            $con = mysqli_connect("localhost", "root", "", "db_1");
            if (!$con) {
                die("could not connect".mysqli_connect_error());
            }
            echo "connection successfull <br>";

            $pid = $_POST['pid'];
            $qoh = $_POST['qoh'];

            $query = mysqli_query($con, 'UPDATE product SET qoh='.$qoh.' WHERE pro_id='.$pid);
            $result = mysqli_affected_rows($con);

            if ($result == 1) {
                echo "record updated successfully";
            } else {
                echo "record update error".mysqli_error($con);
            }

            mysqli_close($con);
        }
        ?>
    </body>
</html>