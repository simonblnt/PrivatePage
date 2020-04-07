<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Private Page</title>
    <link rel="stylesheet" type="text/css" href="/PrivatePage/public/stylesheets/main.css">
    <link rel="stylesheet" type="text/css" href="/PrivatePage/public/stylesheets/nav_bar.css">
    <link rel="stylesheet" type="text/css" href="/PrivatePage/public/stylesheets/studies.css">
    <link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/399f7f7414.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper-main">
        <?php
            include 'partials/main_menu.php'
        ?>
        <main>
            <div class="wrapper-table">
                <div class="title-table">
                    <h1 class="noselect">Subjects</h1>
                    
                    <button id="add_subject" href="add.php"><i class="fas fa-plus"></i>Add Subject</button>
                </div>
                
                <div class="content-table">
                    <table id="subjects_table" class="studies">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Class dates</th>
                                            <th>Homework deadline</th>
                                            <th>Next test</th>
                                            <th>Next exam</th>
                                            <th>Next assignment</th>
                                            <th>Current result</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Diszkrét matek</td>
                                            <td>H 10-12, K 14-16</td>
                                            <td>-</td>
                                            <td>2 Days</td>
                                            <td>?</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td><a href="edit"></a><i class="fas fa-pencil-alt"></i><a href="delete"></a><i class="fas fa-trash-alt"></i></td>
                                        </tr>
                                        <tr>
                                            <td>HIA</td>
                                            <td>Cs 8-10</td>
                                            <td>-</td>
                                            <td>4</td>
                                            <td>-</td>
                                            <td>May 5th</td>
                                            <td>43/28 (3)</td>
                                            <td><a href="edit"></a><i class="fas fa-pencil-alt"></i><a href="delete"></a><i class="fas fa-trash-alt"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                </div>
            </div>
            


        </main>
    </div>
    <footer>
        <div>Icons made by <a href="https://www.flaticon.com/authors/pixel-perfect" title="Pixel perfect">Pixel perfect</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
    </footer>
</body>


</html>