<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aufgabenplaner</title>
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://unpkg.com/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container-fluid">

    <div class="bg-light">
        <h2 class="header display-6">Aufgabenplaner: Projekte</h2>
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
            <form>
                <div class="row">
                    <label class="" for="Selektor"> <h4>Projekt Auswählen:</h4></label>
                </div>
                <div class="row">
                    <select class="custom-select mx-2" id="Selektor">
                        <option selected="">-Bitte auswählen-</option>
                        <option value="1">Projekt a</option>
                        <option value="2">Projekt b</option>
                    </select>
                </div>
                <div class="row">
                    <div class="form-group p-2">
                        <button type="submit" class="btn btn-primary">Auswählen</button>
                        <button type="submit" class="btn btn-primary">Bearbeiten</button>
                        <button type="submit" class="btn btn-danger">Löschen</button>
                    </div>
                </div>
                <div class="row">
                    <h4 class="p-2">Projekt bearbeiten/erstellen:</h4>
                </div>
                <div class="row">
                    <div class="form-group row">
                        <label for="Namensfeld">Projektname:</label>
                        <input type="text" id="Namensfeld" class="mx-2" placeholder="Name">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group row p-2">
                        <label for="Produktbeschreibung">Produktbeschreibung:</label>
                        <textarea class="form-control mx-2" id="Produktbeschreibung" aria-label="Produktbeschreibung"></textarea>
                        <div class="col p-2">
                            <button type="submit" class="btn btn-primary">Speichern</button>
                            <button type="submit" class="btn btn-info">Reset</button>
                        </div>
                    </div>
                </div>
                <div class="row">

                </div>
            </form>
        </div>

        <div class="col-3">

        </div>
    </div>
</div>
</body>
</html>
