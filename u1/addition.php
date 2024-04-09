<html>
    <body>
        <form action="addition.php" method="post">
            <input type="number" name="n1" placeholder="enter first number"> <br>
            <input type="number" name="n2" placeholder="enter second number"> <br>
            <input type="text" name="sign" placeholder="+, *">
            <input type="submit" value="submit">
        </form>
        <?php 
        
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];

        $sum = $n1 + $n2;
        echo "Addition is ".$sum;
        $min = $n1 - $n2;
        echo "minus is ".$min;

        

        ?>
    </body>
</html>