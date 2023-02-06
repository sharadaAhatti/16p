<html>
    <head>
        <title>prgm to create simple calculater using php</title>
</head>
<body>
    <form action="" enctype="multipart/form-data" method="POST">
        enter first value: <input type="text" name="a"><br></br>
        enter second value: <input type="text" name="b"><br></br>

        <input type="radio" name="arithmetic" value="add">addition
        <input type="radio" name="arithmetic" value="sub">substraction
        <input type="radio" name="arithmetic" value="mult">multipalication
        <input type="radio" name="arithmetic" value="div">division <br>

        <input type="submit" name="submit1" value="submit"><br>
    </form>
    <?php
    if(isset($_POST['submit1']))
    {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $arithmetic = $_POST["arithmetic"];

        switch($arithmetic)
        {
            case 'add' : echo "Addition of two numbers is : " .($a + $b);
            break;
            case 'sub' : echo "Substraction of two number is : " .($a - $b);
            break;
            case 'mult' : echo "Miltiplication of two numbers is : " .($a * $b);
            break;
            case 'div' : echo "Division of two number is : " .($a / $b);
            break;
        }
    }
    ?>
</body>
</html>