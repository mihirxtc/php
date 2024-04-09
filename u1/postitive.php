<html>
    <body>
        <form action="postitive.php" method="post">
            <input type="number" name="n" placeholder="enter a number">  <br>
            <input type="submit" value="submit">
        </form>
        <?php 
        
        $n = $_POST['n'];
        
        if ($n > 0) {
            echo "number is positive";
        } else {
            echo "number is negative";
        }

        ?>
    </body>
</html>