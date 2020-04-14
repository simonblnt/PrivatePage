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

<div class="main-nav">
    <div class="content-nav">
        <ul>
            <li class="item" id="home">
                <a href="/PrivatePage/app/views/main/index.php" class="menu-btn separate" >Home</a>
            </li>
            <li class="item" id="calendar">
                <a href="" class="menu-btn separate">Calendar</a>
            </li>
            <li class="item" id="studies">
                <p class="menu-title noselect">Studies</p>
                <a href="/PrivatePage/app/views/studies/subjects.php" class="menu-btn">Subjects</a>
                <a href="#" class="menu-btn">Exams</a>
                <a href="#" class="menu-btn">Tests</a>
                <a href="#" class="menu-btn">Averages</a>
                <a href="#" class="menu-btn separate">Contacts</a>
            </li>
            <li class="item" id="work">
                <p class="menu-title noselect">Work</p>
                <a href="subjects.php" class="menu-btn">Projects</a>
                <a href="#" class="menu-btn">Finances</a>
                <a href="#" class="menu-btn">Tasks</a>
                <a href="#" class="menu-btn">Ideas</a>
                <a href="#" class="menu-btn separate">Contacts</a>
            </li>
            <li class="item" id="recipies">
                <p class="menu-title noselect">Recipies</p>
                <a href="/PrivatePage/app/views/recipies/recipies.php" class="menu-btn">All</a>
                <a href="#" class="menu-btn separate">Favourites</a>
            </li>
        </ul>
    </div>
     
    
</div>
</body>
</html>