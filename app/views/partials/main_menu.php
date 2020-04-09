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
    <!-- <div class="title-nav">
        <h1 class="noselect">Private Page</h1>
    </div> -->
    <div class="content-nav">
        <ul>
            <li class="item" id="home">
                <a href="/PrivatePage/app/views/main/index.php" class="menu-btn" ><i class="fas fa-home"></i>Home</a>
            </li>
            <li class="item" id="calendar">
                <a href="" class="menu-btn"><i class="fas fa-calendar"></i>Calendar</a>
            </li>
            <li class="item" id="studies">
                <a href="#studies" class="menu-btn"><i class="fas fa-university"></i>Studies</a>
                    <div class="sub-menu">
                        <a href="/PrivatePage/app/views/studies/subjects.php">Subjects</a>
                        <a href="#">Exams</a>
                        <a href="#">Tests</a>
                        <a href="#">Averages</a>
                        <a href="#">Contacts</a>
                    </div>
            </li>
            <li class="item" id="work">
                <a href="#work" class="menu-btn"><i class="fas fa-briefcase"></i>Work</a>
                <div class="sub-menu">
                    <a href="subjects.php">Projects</a>
                    <a href="#">Finances</a>
                    <a href="#">Tasks</a>
                    <a href="#">Ideas</a>
                    <a href="#">Contacts</a>
                </div>
            </li>
            <li class="item" id="recipies">
                <a href="#recipies" class="menu-btn"><i class="fas fa-cookie-bite"></i>Recipies</a>
                <div class="sub-menu">
                    <a href="/PrivatePage/app/views/recipies/recipies.php">All</a>
                    <a href="#">Favourites</a>
                </div>
            </li>
        </ul>
    </div>
     
    
</div>
</body>
</html>