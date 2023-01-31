<!--Funktioniert aus mir unbekannten Gründen nur in Edge und nicht in Firefox-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todos</title>
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/public/css/style.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"> </script>
</head>

<body>
<div class="container-fluid">

    <div class="header bg-light">
        <h2 class="display-6">Aufgabenplaner: ToDo's</h2>

    </div>

    <div class="row">
        <div class="col-2 p-3">
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
                <div class="col">
                    <div class="row">
                        <div class="col p-3">
                            <div class="card">
                                <div class="card-header">ToDo:</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">HTML Datei erstellen (Max Mustermann)</li>
                                    <li class="list-group-item">CSS Datei erstellen (Max Mustermann)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="row">
                        <div class="col p-3">
                            <div class="card">
                                <div class="card-header">Erledigt:</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">PC eingeschaltet (Petra Müller)</li>
                                    <li class="list-group-item">Kaffee trinken (Petra Müller)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="row">
                        <div class="col p-3">
                            <div class="card">
                                <div class="card-header">Verschoben:</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Für Uni lernen (Max Mustermann)</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>