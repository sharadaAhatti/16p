<html>
    <head>
        <title>prgm15</title>
</head>
<body>
    <center>
    <table border width="400" height="400"/>
    <?php
    for($row=1; $row<=8; $row++)
    {
        echo "<tr>";
        for($col=1; $col<=8; $col++)
        {
            $total = $row + $col;
            if(($total % 2)==0)
            {
                echo "<td width='30' height='30' bgcolor='black'></td>";
            }
            else{
                echo "<td width='30' height='30 bgcolor='white'></td>";
            }
        }
        echo "</tr>";
    }
    ?>
    </center>
</body>
</html>
