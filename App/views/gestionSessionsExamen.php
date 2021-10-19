<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">

    <title>Gestion des sessions d'examen</title>
</head>

<body>

    <nav class="navbar bg-primary">
        <form class="container-fluid justify-content-between">
            <img class="col-1" src="../assets/img/logos/fire.png" alt="logo ">
            <button class="btn btn-info me-2" type="button">Gestion des modèles de formation</button>
            <button class="btn btn-info me-2" type="button">Gestion des formations</button>
            <button class="btn btn-info me-2" type="button">Gestion des formateurs</button>
            <button class="btn btn-success me-2" type="button">Gestion des sessions d'examen</button>
            <button class="btn btn-success me-2" type="button">Gestion des jurés</button>
            <button class="btn btn-success me-2" type="button" disabled>Import VALCES/CERES</button>

            <div class="d-flex flex-column border p-1 rounded">
                <button class="btn btn-warning me-2 m-1" type="button ">Mon compte</button>
                <button class="btn btn-danger me-2 " type="button ">Deconnexion</button>
            </div>
        </form>

    </nav>


    <!-- GESTION DES SESSIONSEXAMEN -->
    <div class="container-fluid p-4">
        <h2>Gestion des sessions d'examen</h2>
        <table id="tableGestionSessionsExamen" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Formation</th>
                    <th scope="col">Libellé</th>
                    <th scope="col">date de début</th>
                    <th scope="col">Date de fin</th>
                    <th scope="col">Jurés</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>DWWM-4</td>
                    <td>Mark</td>
                    <td>06/12/24</td>
                    <td>07/12/24</td>
                    <td><button class="btn btn-outline-secondary me-2 rounded-circle p-2" type="button"><img src="../assets/img/logos/juror.png" alt="juré" style="max-height: 25px;"></button></td>
                    <td><a href="#" class="btn btn-info">Modifier</a></td>
                    <td><a href="#" class="btn btn-outline-danger">Supprimer</a>
                </tr>
                <tr>
                    <td>DWWM-4</td>
                    <td>Jacob</td>
                    <td>06/12/24</td>
                    <td>07/12/24</td>
                    <td><button class="btn btn-outline-secondary me-2 rounded-circle p-2" type="button"><img src="../assets/img/logos/juror.png" alt="juré" style="max-height: 25px;"></button></td>
                    <td><a href="#" class="btn btn-info">Modifier</a></td>
                    <td><a href="#" class="btn btn-outline-danger">Supprimer</a>
                </tr>
                <tr>
                    <td>DWWM-4</td>
                    <td>Larry the Bird</td>
                    <td>06/12/24</td>
                    <td>07/12/24</td>
                    <td><button class="btn btn-outline-secondary me-2 rounded-circle p-2" type="button"><img src="../assets/img/logos/juror.png" alt="juré" style="max-height: 25px;"></button></td>
                    <td><a href="#" class="btn btn-info">Modifier</a></td>
                    <td><a href="#" class="btn btn-outline-danger">Supprimer</a>
                        <tr>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td colspan="2"><a href="#" class="btn btn-success">Ajouter</a></td>
                        </tr>
            </tbody>
        </table>

    </div>


    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>