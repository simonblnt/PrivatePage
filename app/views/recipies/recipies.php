<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Private Page</title>
    <link rel="stylesheet" type="text/css" href="/PrivatePage/public/stylesheets/main.css">
    <link rel="stylesheet" type="text/css" href="/PrivatePage/public/stylesheets/nav_bar.css">
    <link rel="stylesheet" type="text/css" href="/PrivatePage/public/stylesheets/recipies.css">
    <link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet'>

    <script src="https://kit.fontawesome.com/399f7f7414.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include '../partials/header.php'
    ?>
    <div class="wrapper-main">
        <?php
            include '../partials/main_menu.php'
        ?>

        <main>
        <div class="wrapper-table">
                <div class="title-table">
                    <h1 class="noselect">Recipies</h1>
                    
                    <button id="add_subject" href="add.php"><i class="fas fa-plus"></i>Add Subject</button>
                </div>

                <div class="recipies-list">
                    <ul id="accordion">
                        <li class="accordionItem">
                            <div class="main-row">
                                <p class="col-title">Fokhagymás tészta</p>
                                <p class="col-category">Tészta</p>
                                <p class="col-time">10 + 15</p>
                                <p class="col-link"><a href="www.gooogle.com" class="recipie-link"></a>to recipie</p>
                                <p class="col-actions"><a href="edit"></a><i class="fas fa-pencil-alt"></i><a href="delete"></a><i class="fas fa-trash-alt"></i></p>
                            </div>
                            <div class="sub-row">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Quaerat consequatur illum amet consequuntur quae quod temporibus placeat error officiis facilis?</p>
                            </div>
                        </li>
                        <li class="accordionItem">
                            <div class="main-row">
                                <p class="col-title">Krumplis tészta</p>
                                <p class="col-category">Krumpli, tészta</p>
                                <p class="col-time">30 + 15</p>
                                <p class="col-link"><a href="www.gooogle.com" class="recipie-link"></a>to recipie</p>
                                <p class="col-actions"><a href="edit"></a><i class="fas fa-pencil-alt"></i><a href="delete"></a><i class="fas fa-trash-alt"></i></p>
                            </div>
                            <div class="sub-row">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Quaerat consequatur illum amet consequuntur quae quod temporibus placeat error officiis facilis?</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
            </main>
        <?php
            include '../partials/footer.php'
        ?>
        <script src="/PrivatePage/public/javascripts/recipies.js"></script>
</body>


</html>