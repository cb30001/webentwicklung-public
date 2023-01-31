<!--Gruppe 6-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://unpkg.com/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="C:\xampp\htdocs\ci\public\css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container-fluid">

    <div class="bg-light">
        <h2 class="header display-6">Login: </h2>
    </div>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">

            <form>
                <div class="form-group p-2">
                    <label for="EmailInput">Email Adresse: </label>
                    <input type="email" class="form-control" id="EmailInput" placeholder="Email eingeben">
                </div>
                <div class="form-group p-2">
                    <label for="Passwort">Passwort:</label>
                    <input type="password" class="form-control" id="Passwort" placeholder="Passwort eingeben">
                </div>
                <div class="row mx-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            AGBs und Nutzungsbedingungen akzeptieren?
                        </label>
                    </div>
                </div>
                <div class="form-group p-2">
                    <button type="submit" class="btn btn-primary">Einloggen</button>
                </div>
            </form>
            <p class="mx-2">Noch nicht registriert? <a href="http://localhost/we-ueb03/AufgabenplanerAufgaben.php">Registrierung</a></p>
            <p class="mx-2">Da der Login noch nicht realisiert wurde: <a href="http://localhost/we-ueb03/Todos.php">Überspringen</a>
            </p>
        </div>
        <div class="col-3"></div>
    </div>
</div>
</body>
</html>
