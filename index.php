<?php
require_once 'connect.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title></title>
        <body>
            <?php if(isset($_GET['error'])): ?>
            <?php echo $_GET['error']; ?>
            <?php endif ?>
            
            <form method="POST" enctype="multipart/form-data" action="upload.php"> 
                <input type="file" name="my_image">
                <input type="submit" name="submit" value="upload">
            </form>
        </body>
    </head>
</html>