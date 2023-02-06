<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Length of string</title>
    </head>
    <body>
        <h1>write a php prg to find lenght of string  and count the word in the string </h1>
        <form action="" method="POST">
            <h1>Enter a string :  <input type="text" name="a"></h1>
            <input type="submit" name="submit1" value="check length">

        </form>
        <?php
           if(isset($_POST["submit1"]))
           {
            $str1 = $_POST['a'];
            echo "<h2>";
            echo "Given string is :" . $str1;
            echo "<br>length of string:" . strlen($str1);
            echo "<br>no of words in string:" . str_word_count($str1);
            echo "</h2>";
           }

        ?>
        
    </body>
    

</html>