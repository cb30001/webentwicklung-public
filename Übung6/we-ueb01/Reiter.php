<html>
    <?php?>

    <head>
        <meta charset="UTF-8">
        <title>Reiter</title>
        <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="https://unpkg.com/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
        <link href="style.css" rel="stylesheet" type="text/css">
        <script src="https://kit.fontawesome.com/e31a6dd713.js" crossorigin="anonymous"></script>
    </head>

    <body>
    <div class="container-fluid">

        <div class="bg-light">
            <h2 class="header display-6">Aufgabenplaner: Reiter</h2>
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
                            <th scope="col-2">Name</th>
                            <th scope="col-8">Beschreibung</th>
                            <th scope="col-1"></th>
                            <th scope="col-1"></th>


                        </tr>
                        <tr>
                            <td>ToDo</td>
                            <td>Dinge die erledigt werden sollen</td>
                            <td><a href="http://karlie-hund.de"><i class="fa-regular fa-pen-to-square"></i></a></td>
                            <td><a href="http://karlie-hund.de"><i class="fa-solid fa-trash"></i></a></td>

                        </tr>
                        <tr>
                            <td>Erledigt</td>
                            <td>Dinge die erledigt sind</td>
                            <td><a href="http://karlie-hund.de"><i class="fa-regular fa-pen-to-square"></i></a></td>
                            <td><a href="http://karlie-hund.de"><i class="fa-solid fa-trash"></i></a></td>

                        </tr>
                        <tr>
                            <td>Verschoben</td>
                            <td>Dinge die sp??ter erledigt werden sollen</td>
                            <td><a href="http://karlie-hund.de"><i class="fa-regular fa-pen-to-square"></i></a></td>
                            <td><a href="http://karlie-hund.de"><i class="fa-solid fa-trash"></i></a></td>

                        </tr>
                        </thead>
                    </table>
                </div>
                <div class="row"></div>
                <div class="row"><h4 class="p-1 my-2">Bearbeiten/Erstellen</h4></div>
                <div class="row p-1">Bezeichnung des Reiters</div>
                <form>
                    <div class="row">
                        <input type="email" class="form-control mx-1" placeholder="Reiter">
                    </div>
                    <div class="row p-1">Beschreibung:</div>
                    <div class="row">
                        <textarea class="form-control mx-1" id="Produktbeschreibung" aria-label="Beschreibung"></textarea>
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
    </body>
</html>