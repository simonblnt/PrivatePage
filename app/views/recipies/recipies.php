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
                
                <div class="recipies-table">
                    <table class="recipies">
                                    <!-- <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Time needed</th>
                                            <th>Link</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead> -->
                                    <tbody>
                                        <tr>
                                            <td>Fokhagymás tészta</td>
                                            <td>Tészta</td>
                                            <td>10 + 15</td>
                                            <td><a href="" class="recipie-link"></a>to recipie</td>
                                            <td><a href="edit"></a><i class="fas fa-pencil-alt"></i><a href="delete"></a><i class="fas fa-trash-alt"></i></td>
                                        </tr>
                                        <tr>
                                        <td>Póréhagymás tepsis krumpli</td>
                                            <td>Krumpli</td>
                                            <td>20 + 35</td>
                                            <td><a href="" class="recipie-link"></a>to recipie</td>
                                            <td><a href="edit"></a><i class="fas fa-pencil-alt"></i><a href="delete"></a><i class="fas fa-trash-alt"></i></td>                                        </tr>
                                    </tbody>
                                </table>
                </div>
            </div>
        </div>
            </main>
        <?php
            include '../partials/footer.php'
        ?>
</body>


</html>