<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">

    <title>CRM jurés</title>
</head>

<body>

    <nav class="navbar bg-primary">
        <form class="container-fluid justify-content-between" method="$_GET" action="index.php">
            <img class="col-1" src="assets/img/logos/fire.png" alt="logo ">
            <input class="btn btn-info" type="submit" name="route" value="Gestion des modèles de formation">
            <input class="btn btn-info" type="submit" name="route" value="Gestion des formations" disabled>
            <input class="btn btn-info" type="submit" name="route" value="Gestion des formateurs" disabled>
            <input class="btn btn-success" type="submit" name="route" value="Gestion des sessions d'examen"disabled>
            <input class="btn btn-success" type="submit" name="route" value="Gestion des jurés">

            <div class="d-flex flex-column border p-1 rounded">
                <input class="btn btn-warning m-1" name="route" type="submit" value="Mon compte" disabled>
                <input class="btn btn-danger" name="route" type="submit" value="Deconnexion" disabled>
            </div>
        </form>
    </nav>