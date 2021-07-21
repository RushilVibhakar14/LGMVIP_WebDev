<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/ar3.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.css">
</head>
<body>
        
	<div class="pic1">
	    <img src="./css/pic3.jpg" class="slider-image" alt="img" width="700" height="350">
        </div>
    

    <div class="nav">
        <ul>
            <li class="dropdown" onclick="toggleDisplay('1')">
                <a href="" class="dropbtn"><p>Classes</p>
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="1">
                    <a href="ac1.php">Add Class</a>
                </div>
</li>
                <div class="dropdown-content" id="2">
                    <a href="as1.php">Add Students</a>
                    <a href="manage_students.php">Manage Students</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('3')">
                <a href="#" class="dropbtn"><p>Results</p>
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="3">
                    <a href="ar1.php">Add Results</a>
                    <a href="mac3.php">Manage Results</a>
                </div>
            </li>
        </ul>
    </div>
<div class="title">
        <a href="logout.php"><h5>LOG OUT</h5></a>
    </div>
   
</body>
</html>

<?php
   include('wwe.php');
?>