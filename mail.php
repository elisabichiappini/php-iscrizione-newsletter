<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Iscrizione Newsletter</title>
    <!--CDN CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--/CDN CSS Bootstrap-->
</head>
<body>
    <main class="container">
        <form class="row align-items-center justify-content-center">
            <div class="mb-3">
                <label for="inputMail" class="form-label">Registrati alla newsletter</label>
                <input type="email" class="form-control" id="inputMail" placeholder="Esempio name@example.com" name="mail">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Confirm identity</button>
            </div>
        </form>
    <!--CDN JS Bootstrap-->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!--/CDN JS Bootstrap-->
</body>
</html>