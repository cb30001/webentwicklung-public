<!--Gruppe 6-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todos</title>
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"> </script>

</head>

<body>

<!--Hier wird der Arrays.php in diese PHP Datei eingesetzt-->
<?php
include ("Arrays.php");
?>

<div class="container-fluid">

    <div class="bg-light header">
        <h2 class="display-6">Aufgabenplaner: ToDo's</h2>

    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col">
            <nav class="navbar navbar-expand navbar-light bg-light">
                <span class="navbar-brand mb-0">Projekt</span>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">Webentwicklung</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item " href="#">Projektübersicht</a></li>
                                <li><a class="dropdown-item" href="#">Reiter</a></li>
                                <li><a class="dropdown-item" href="#">Aufgaben</a></li>
                                <li><a class="dropdown-item" href="#">Mitglieder</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="row">
        <!-- Hier wird die Sidemenu.php in den Html Code eingefügt -->
        <div class="col-2 p-2">

        </div>


        <div class="col">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col p-3">
                            <div class="card">
                                <!--Ich glaub das die das meinen bei 2b-->
                                <div class="card-header"><?php if (!empty($ToDo)) {echo $ToDo[0][0];} ?></div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><?php if (!empty($ToDo)) {echo $ToDo[0][1];} ?></li>
                                    <li class="list-group-item"><?php if (!empty($ToDo)) {echo $ToDo[0][2];} ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="row">
                        <div class="col p-3">
                            <div class="card">
                                <!--Aus dem Array welcher oben deklariert wurde wird aus dem ersten Elementarray das erste Element aufgerufen -->
                                <div class="card-header"><?php if (!empty($ToDo)) {echo $ToDo[1][0];} ?></div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><?php if (!empty($ToDo)) {echo $ToDo[1][1];} ?></li>
                                    <li class="list-group-item"><?php if (!empty($ToDo)) {echo $ToDo[1][2];} ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="row">
                        <div class="col p-3">
                            <div class="card">
                                <div class="card-header"><?php if (!empty($ToDo)) {echo $ToDo[2][0];} ?></div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><?php if (!empty($ToDo)) {echo $ToDo[2][1];} ?></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>

    </div>
</div>



</body>

</html>