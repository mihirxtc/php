<!-- factorial of number -->
<html>
    <body>
        <form action="1.php" method="post">
            <input type="number" name="n" placeholder="enter number"> <br>
            <input type="submit" value="submit">
        </form>
        <?php 
        
        $n = $_POST['n'];
        $fact = 1;

        while ($n > 0) {
            $fact = $fact * $n;
            $n--;
        }

        echo "factorial: ".$fact;

        ?>
    </body>
</html>