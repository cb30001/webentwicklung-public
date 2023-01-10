<?php
?>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://unpkg.com/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="C:\xampp\htdocs\ci\public\css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
    <div class="col">

        <?= form_open('login/index', array('role' => 'form'))?>
        <legend class="card-header">Login</legend>

        <div class="form-group ">
            <input type="text" class="form-control" id="EmailInput" placeholder="Username eingeben">
        </div>

        <div class="form-group my-2">
            <input type="password" class="form-control" id="EmailInput" placeholder="Passwort eingeben">
        </div>



        <div class="form-group">
            <button type="submit" class="btn btn-primary">Einloggen</button>
            <button type="submit" class="btn btn-secondary">Abbrechen</button>
        </div>
        </form>
        </div>
    </div>

</div>
</body>