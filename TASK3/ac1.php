<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/arr2.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Add Class</title>
</head>
<body>
    

  <div class="title">
        <h1>WELCOME ADMIN</h1>
    </div>


    <div class="main">
        <form action="" method="post">
            <fieldset>
                <h4>Add Class</h4>
                <input type="text" name="class_name" placeholder="Class Name">
                <input type="text" name="class_id" placeholder="Class ID">
                <input type="submit" value="Submit">
</fieldset>        
        </form>
    </div>

<div class="title2">
      <a href="logout.php"><h5>LOG OUT</h5></a>
   </div>

</body>
</html>

<?php 
	include('init.php');
    include('r1.php');

    if (isset($_POST['class_name'],$_POST['class_id'])) {
        $name=$_POST["class_name"];
        $id=$_POST["class_id"];

        if (empty($name) or empty($id) or preg_match("/[a-z]/i",$id)) {
            if(empty($name))
                echo '<p class="error">Please enter class</p>';
            if(empty($id))
                echo '<p class="error">Please enter class id</p>';
            if(preg_match("/[a-z]/i",$id))
                echo '<p class="error">Please enter valid class id</p>';
            exit();
        }

        $sql = "INSERT INTO `class` (`name`, `id`) VALUES ('$name', '$id')";
        $result=mysqli_query($conn,$sql);
        
        if (!$result) {
            echo '<script language="javascript">';
            echo 'alert("Invalid class name or class id")';
            echo '</script>';
        } else{
            echo '<script language="javascript">';
            echo 'alert("Successful)';
            echo '</script>';
        }
    }

?>


