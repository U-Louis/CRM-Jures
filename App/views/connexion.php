<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <title>CRM jurés</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row align-items-center justify-content-center clearfix connectDiv">
        <form action="" class="d-flex flex-column w-50 justify-content-center align-items-center rounded connectForm ">
            <img class="w-25" src="assets/img/logos/chef.png" alt="cooker">
            <div class="row w-50">
                <label for="connectID">Identifiant : </label>
                <input type="email" placeholder="mail@exemple.fr" id="connectID">
            </div>
            <div class="row w-50">
                <label for="connectPswd">Mot de passe : </label>
                <input type="text" placeholder="*************" id="connectPswd">
            </div>
            <div>
                <button class="btn btn-warning me-2 m-1" type="button " id="connectBtn">Connexion</button>
            </div>
        </form>
        <!-- <img class="w-25 position-absolute bottom-0 end=0"src="/assets/img/logos/fire.png" alt="Fire">
            <img class="w-25 position-absolute bottom-0 start-0"src="/assets/img/logos/fire.png" alt="Fire"> -->
    </div>
</div>

<script src="assets/script/connexion.js"></script>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>