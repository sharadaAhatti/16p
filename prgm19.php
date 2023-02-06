<html>
    <head>
        <title>electricity bill</title>
</head>
<body>
    <form action="" method="POST">
        <input type="number" name="units" placeholder="electricity bill"/>
        <input type="submit" name="submit1" value="electricity bill">
    </form>
    <?php
    if(isset($_POST["submit1"]))
    {
        $units = $_POST['units'];
        $unit_cost_first = 3.00;
        $unit_cost_second = 4.50;
        $unit_cost_third = 5.20;
        $unit_cost_fourth = 6.50;

    
    if($units <= 50)
    {
        $bill = $units * $unit_cost_first;
    }
    else if($units > 50 && $units <= 100)
    {
        $temp = 50 * $unit_cost_first;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $unit_cost_second );
    }
    else if($units > 100 && $units <= 200)
    {
        $temp = (50 * 3.5) + (100 * $unit_cost_second);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $unit_cost_third);
    }
    else{
        $temp = (50 * 3.5) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
        $ramaining_units = $units - 200;
        $bill = $temp + ($remaining_units * $unit_cost_fourth);
    }
    echo '<h1>Electricity bill ' . $bill ."</h1>"; 
}

    ?>
</body>
    
</html>