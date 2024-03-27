<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/output.css">
    <title>Output</title>
</head>
<body>
    <?php
    $connection = mysqli_connect("localhost","root","","tickets" );
    $sql2 = "SELECT * FROM `notes`";
    $result2 = mysqli_query($connection,$sql2);
    ?>
<h2>Notes</h2>
    <div class="grid-container">
        <?php
        while($fetch = mysqli_fetch_assoc($result2)){
            ?>            
            <div class="card">              
                <img src="./image/<?php echo $fetch['image'] ?>" alt="">             
              <div><?php echo $fetch['title']; ?></div>
                <div><?php echo $fetch['description']; ?></div>
              
            </div>
            <?php
        }
        ?>
    </div>
</body>
</html>
