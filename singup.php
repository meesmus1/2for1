<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>

    <script></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<h1>Signup</h1>

<div class="container mt-4">
    <div class="row">
        <div class="col-6 mb-4">
            <label for="form-label">voornaam</label>
            <input type="text" id="voornaam" class="form-control" placeholder="voornaam">
        </div>
        <div class="col-6 mb-4">
            <label for="form-label">achternaam</label>
            <input type="text" id="achternaam" class="form-control" placeholder="achternaam">
        </div>
        <div class="col-6 mb-4">
            <label for="form-label">gebruikersnaam</label>
            <input type="text" id="gebruikersnaam" class="form-control" placeholder="gebruikersnaam">
        </div>
        <div class="col-6 mb-4">
            <label for="form-label">emailadres</label>
            <input type="text" id="emailadres" class="form-control" placeholder="emailadres">
        </div>
        <div class="col-6 mb-4">
            <label for="form-label">wachtwoord1</label>
            <input type="text" id="wachtwoord1" class="form-control" placeholder="wachtwoord1">
        </div>
        <div class="col-6 mb-4">
            <label for="form-label">wachtwoord2</label>
            <input type="text" id="wachtwoord2" class="form-control" placeholder="wachtwoord2">
        </div>
        <div class="col-12">
            <button class="btn btn-primary" onclick="registreer()">Registreer</button>
            <p class="alert alert-danger mt-3" id="errormessage" style="display: none;">Niet alle velden zijn ingevuld</p>

        </div>

    </div>

</div>


    
</body>
</html>
<script src="./js/gip js/signup.js"></script>