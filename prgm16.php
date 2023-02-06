<html>
<head>
    <title>upload and display images:
</title>
</head>
<body>
    <form action="" enctype="multipart/form-data" method="POST" >
        select images:
        <input type="file" name="file">
        <input type="submit" value="upload" name="submit1">
    </form>
    <?php
    if(isset($_POST['submit1']))
    {
        $filepath = "images/" .$_FILES["file"]["name"];
       
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath))
        
        {
            echo "<img src=".$filepath." height=200 width=300 />";
           
        }
        else{
            echo "error!!";
        }
    }
    ?>
</body>
</html>