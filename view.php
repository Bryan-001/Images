<?php
include 'connect.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title></title>
        <body>
            <?php
            $sql = "SELECT * FROM image ORDER BY id DESC";
            $result = mysqli_query($conn,$sql);
            
            if(mysqli_num_rows($result) > 0){
                
                while($image = mysqli_fetch_assoc($result)){
                    ?>
            <div class="alb">
                <img style="width:20%;height:20%;" src="uploads/<?=$image['image_url']?>">
            </div>
            <?php
                }
            }
            ?>
        </body>
    </head>
</html>