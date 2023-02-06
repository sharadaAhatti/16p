<html>
 <head>
    
</head>  
<body>
    <form action="" method="POST">
        <input type="text" name="num">
        <input type="submit" name="submit1" value="submit">
    </form>
</body>
<?php
if(isset($_POST["submit1"]))
{
    $num = $_POST["num"];
$fact = 1;
for($i=$num; $i>0; $i--)
{
    $fact = $fact * $i;
}
echo "factorial of number $num is: $fact";
}
?>
 </html>