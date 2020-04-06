<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>

<nav class="top-nav">
    <div class="title-nav">
        <h1 class="noselect">Private Page</h1>
    </div>
    <div class="content-nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="">Calendar</a></li>
            <li><a href="studies.php">Studies</a></li>
            <li><a href="">Work</a></li>
            <li><a href="">Recipies</a></li>
        </ul>
    </div>
     
    
</nav>
</body>
</html>