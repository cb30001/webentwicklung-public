<html>
<?php?>

<head>
    <meta charset="UTF-8">
    <title>Aufgabenplaner</title>
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://unpkg.com/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/e31a6dd713.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="container-fluid">

    <div class="bg-light">
        <h2 class="header display-6">Aufgabenplaner: Aufgaben</h2>
    </div>

    <div class="row">
        <div class="col-2">
            <ul class="list-group">
                <li class="list-group-item"><a href="http://karlie-hund.de">Login</a></li>
                <li class="list-group-item"><a href="http://karlie-hund.de">Projekte</a></li>
                <li class="list-group-item"><a href="http://karlie-hund.de">Aktuelles Projekt</a></li>

                <ul>
                    <li class="list-group-item"><a href="http://karlie-hund.de">Reiter</a></li>
                    <li class="list-group-item"><a href="http://karlie-hund.de">Aufgaben</a></li>
                    <li class="list-group-item"><a href="http://karlie-hund.de">Mitglieder</a></li>
                </ul>
            </ul>
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
                        <td>HTML Datei erstellen</td>
                        <td>HTML Datei erstellen</td>
                        <td>ToDo</td>
                        <td>Max Mustermann</td>
                        <td><a href="http://karlie-hund.de"><i class="fa-regular fa-pen-to-square"></i></a></td>
                        <td><a href="http://karlie-hund.de"><i class="fa-solid fa-trash"></i></a></td>

                    </tr>
                    <tr>
                        <td>CSS Datei erstellen</td>
                        <td>CSS Datei erstellen</td>
                        <td>ToDo</td>
                        <td>Max Mustermann</td>
                        <td><a href="http://karlie-hund.de"><i class="fa-regular fa-pen-to-square"></i></a></td>
                        <td><a href="http://karlie-hund.de"><i class="fa-solid fa-trash"></i></a></td>

                    </tr>
                    <tr>
                        <td>PC eingeschaltet</td>
                        <td>PC eingeschaltet</td>
                        <td>Erledigt</td>
                        <td>Max Mustermann</td>
                        <td><a href="http://karlie-hund.de"><i class="fa-regular fa-pen-to-square"></i></a></td>
                        <td><a href="http://karlie-hund.de"><i class="fa-solid fa-trash"></i></a></td>

                    </tr>
                    <tr>
                        <td>Kaffee trinken</td>
                        <td>Kaffee trinken</td>
                        <td>Erledigt</td>
                        <td>Petra Müller</td>
                        <td><a href="http://karlie-hund.de"><i class="fa-regular fa-pen-to-square"></i></a></td>
                        <td><a href="http://karlie-hund.de"><i class="fa-solid fa-trash"></i></a></td>

                    </tr>
                    <tr>
                        <td>Für die Uni lernen</td>
                        <td>Für die Uni lernen</td>
                        <td>Verschoben</td>
                        <td>Max Mustermann</td>
                        <td><a href="http://karlie-hund.de"><i class="fa-regular fa-pen-to-square"></i></a></td>
                        <td><a href="http://karlie-hund.de"><i class="fa-solid fa-trash"></i></a></td>

                    </tr>
                    </thead>
                </table>
            </div>
            <div class="row"></div>
            <div class="row"><h4 class="p-1 my-2">Bearbeiten/Erstellen</h4></div>
            <div class="row p-1">Aufgabenbezeichnung:</div>
            <form>
                <div class="row">
                    <input type="email" class="form-control mx-1" placeholder="Reiter">
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
                        <option>ToDo</option>
                        <option>Erledigt</option>
                        <option>Verschoben</option>
                    </select>
                </div>
                <div class="row my-1"><label for="Mitarbeiter" class="p-1">Zugehöriger Mitarbeiter:</label></div>
                <div class="row">
                    <select class="form-control form-control-md mx-1" id="Mitarbeiter">
                        <option>Max Mustermann</option>
                        <option>Petra Müller</option>
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