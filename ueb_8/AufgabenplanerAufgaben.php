<!--Potentiell wäre es möglich die Reset und Speichern Buttons auszulagern, aber das wäre praktisch ungünstig, da sich die Speicherorte auf verschiedenen
Seitem ändern
Gruppe 6
-->
<html>
<?php?>

<head>
    <meta charset="UTF-8">
    <title>Aufgabenplaner</title>
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://unpkg.com/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/e31a6dd713.js" crossorigin="anonymous"></script>
    <script src="Delete_alert.js"></script>
</head>

<body>
<!--Einsetzen der ausgelagerten Arrays-->
<?php include "Arrays.php"?>
<div class="container-fluid">

    <div class="bg-light">
        <h2 class="header display-6">Aufgabenplaner: Aufgaben</h2>
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
        <div class="col-2">

        </div>

        <div class="col">
            <div class="row">
                <table class="table mx-2">
                    <thead>
                    <tr class="table-light">
                        <th scope="col">Aufgabenbezeichnung:</th>
                        <th scope="col">Beschreibung der Aufgabe:</th>
                        <th scope="col">Reiter</th>
                        <th scope="col">Zuständig</th>
                        <th scope="col"></th>
                        <th scope="col"></th>

                    </tr>
                    <tr>

                        <td><?php if (!empty($Aufgaben)) {echo $Aufgaben[0];} ?></td>
                        <td><?php if (!empty($Aufgaben)) {echo $Aufgaben[0];} ?></td>
                        <td><?php if (!empty($Reiter)) {echo $Reiter[0][0];} ?></td>
                        <td><?php if (!empty($Mitarbeiter)) {echo $Mitarbeiter[0];} ?></td>
                        <td><a href="#"><i class="fa-regular fa-pen-to-square"></i></a></td>
                        <td><a href="#" onclick="delete_alert_alt();"><i class="fa-solid fa-trash"></i></a></td>

                    </tr>
                    <tr>
                        <td><?php if (!empty($Aufgaben)) {echo $Aufgaben[1];} ?></td>
                        <td><?php if (!empty($Aufgaben)) {echo $Aufgaben[1];} ?></td>
                        <td><?php if (!empty($Reiter)) {echo $Reiter[0][0];} ?></td>
                        <td><?php if (!empty($Mitarbeiter)) {echo $Mitarbeiter[0];} ?></td>
                        <td><a href="#"><i class="fa-regular fa-pen-to-square"></i></a></td>
                        <td><a href="#" onclick="delete_alert_alt();"><i class="fa-solid fa-trash"></i></a></td>

                    </tr>
                    <tr>
                        <td><?php if (!empty($Aufgaben)) {echo $Aufgaben[2];} ?></td>
                        <td><?php if (!empty($Aufgaben)) {echo $Aufgaben[2];} ?></td>
                        <td><?php if (!empty($Reiter)) {echo $Reiter[1][0];} ?></td>
                        <td><?php if (!empty($Mitarbeiter)) {echo $Mitarbeiter[0];} ?></td>
                        <td><a href="#"><i class="fa-regular fa-pen-to-square"></i></a></td>
                        <td><a href="#" onclick="delete_alert_alt();"><i class="fa-solid fa-trash"></i></a></td>

                    </tr>
                    <tr>
                        <td><?php if (!empty($Aufgaben)) {echo $Aufgaben[3];} ?></td>
                        <td><?php if (!empty($Aufgaben)) {echo $Aufgaben[3];} ?></td>
                        <td><?php if (!empty($Reiter)) {echo $Reiter[1][0];} ?></td>
                        <td><?php if (!empty($Mitarbeiter)) {echo $Mitarbeiter[1];} ?></td>
                        <td><a href="#"><i class="fa-regular fa-pen-to-square"></i></a></td>
                        <td><a href="#" onclick="delete_alert_alt();"><i class="fa-solid fa-trash"></i></a></td>

                    </tr>
                    <tr>
                        <td><?php if (!empty($Aufgaben)) {echo $Aufgaben[4];} ?></td>
                        <td><?php if (!empty($Aufgaben)) {echo $Aufgaben[4];} ?></td>
                        <td><?php if (!empty($Reiter)) {echo $Reiter[2][0];} ?></td>
                        <td><?php if (!empty($Mitarbeiter)) {echo $Mitarbeiter[0];} ?></td>
                        <td><a href="#"><i class="fa-regular fa-pen-to-square"></i></a></td>
                        <td><a href="#" onclick="delete_alert_alt();"><i class="fa-solid fa-trash"></i></a></td>

                    </tr>
                    </thead>
                </table>
            </div>
            <div class="row"></div>
            <div class="row"><h4 class="p-1 my-2">Bearbeiten/Erstellen</h4></div>
            <div class="row p-1">Aufgabenbezeichnung:</div>
            <form>
                <div class="row">
                    <input type="email" class="form-control mx-1" placeholder="Aufgabe">
                </div>
                <div class="row p-1">Beschreibung der Aufgabe:</div>
                <div class="row">
                    <textarea class="form-control mx-1" id="Produktbeschreibung" aria-label="Beschreibung"></textarea>
                </div>
                <div class="row">
                    <label class="p-1" for="Einstellungsdatum">Einstellungsdatum:</label>
                </div>
                <div class="row">
                    <input type="date" id="Einstellungsdatum" class="form-control mx-1" placeholder="01.01.2022">
                </div>
                <div class="row my-1">
                    <label for="Frist" class="p-1" placeholder="01.01.2022">Fällig bis:</label>
                </div>
                <div class="row">
                    <input type="date" id="Frist" class="form-control mx-1" placeholder="01.01.2022">
                </div>
                <div class="row my-1"><label for="Reiter" class="p-1">Zugehöriger Reiter:</label></div>
                <div class="row">
                    <select class="form-control form-control-md mx-1" id="Reiter">
                        <option><?php if (!empty($Reiter)) {echo $Reiter[0][0];} ?></option>
                        <option><?php if (!empty($Reiter)) {echo $Reiter[1][0];} ?></option>
                        <option><?php if (!empty($Reiter)) {echo $Reiter[2][0];} ?></option>
                    </select>
                </div>
                <div class="row my-1"><label for="Mitarbeiter" class="p-1">Zugehöriger Mitarbeiter:</label></div>
                <div class="row">
                    <select class="form-control form-control-md mx-1" id="Mitarbeiter">
                        <option><?php if (!empty($Mitarbeiter)) {echo $Mitarbeiter[0];} ?></option>
                        <option><?php if (!empty($Mitarbeiter)) {echo $Mitarbeiter[1];} ?></option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-2 p-1 my-1">
                        <button type="submit" class="btn btn-primary">Speichern</button>
                        <button type="submit" class="btn btn-info">Reset</button>
                    </div>
                </div>

            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>
</body>
</html>