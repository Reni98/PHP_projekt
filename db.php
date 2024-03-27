<?php
session_start();
$connection = mysqli_connect("localhost","root","","tickets" );

if(isset($_POST['insert']))
{
    $filename = $_FILES["image"]["name"];
    $tempfile = $_FILES["image"]["tmp_name"];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $folder = "image/".$filename;
    $sql = "INSERT INTO `notes` (`image`, `title`, `description`)VALUES('$filename','$title', '$description')";
    if($filename == "")
    {
        echo
        "
        <div class='alert alert-danger' role='alert'>
            <h4 class='text-center'>Blank not Allowed</h4>
        </div>
        ";
    }else
    {
        $result = mysqli_query($connection, $sql);
        move_uploaded_file($tempfile, $folder);

        if($result)
        {
            $_SESSION['status'] = "Data inserted successfully";
            header('location: output.php');
        }
        else
        {
            $_SESSION['status'] = "Data not inserted successfully";
            header('location: index.php');
        }
        
    }

    
   
}
?>
