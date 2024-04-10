<!--- update empname to 'ABC' where empnum is 3 -->
<html>
    <body>
        <form action="2.php" method="post">
            <input type="number" name="eid" placeholder="enter id"> <br>
            <input type="text" name="ename" placeholder="enter a name"> <br>
            <input type="submit" value="submit">
        </form>
        <?php 
        
        if (isset($_POST)) {

            $con = mysqli_connect("localhost", "root", "", "exam");
            if (!$con) {
                die("could not connect".mysqli_connect_error());
            }
            echo "connection successful <br>";

            $eid = $_POST['eid'];
            $ename = $_POST['ename'];

            $query = mysqli_query($con, "UPDATE emp SET empname='$ename' WHERE empnum=".$eid);
            $result = mysqli_affected_rows($con);

            if ($result == 1) {
                echo "record updated successfully";
            } else {
                echo "cannot update record".mysqli_error($con);
            }
        }

        mysqli_close($con);

        ?>
    </body>
</html>