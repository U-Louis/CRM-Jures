<!-- GESTION DES JURES -->
<div class="container-fluid p-4">
        <h2>Gestion des jurés</h2>
        <input type="text" name="search-bar" placeholder="Tapez ici..." disabled>
        <input type="button" id="search-button" value="Rechercher" disabled>
        <table id="tableGestionJures" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Spécialité</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Gestion</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <form method="$_GET" action="index.php">
                <input class="btn btn-success" type="submit" name="route" value="Ajouter un juré">
                </form>
            </tr>
            <tr>
                <?php
                    $newMgrJure = new JureMgr();
                    $list = $newMgrJure->read_all();
// var_dump($_POST);
                    
                    foreach($list as $item){
                        echo "<tr>
                            <td>".$item["Nom_contact"].'</td>
                            <td>'.$item["Prenom_contact"].'</td>
                            <td>'.$item["libelle_specialite"].'</td>
                            <td>'.$item["Mail_contact"].'</td>
                            <td>
                                <div class="d-flex flex-row justify-content-around">
                                    <form method="POST">
                                        <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                                        <input name="deleteJureId" type="hidden" value ="'.$item["ID_Contact"].'">

                                    </form>
                                    <form method="POST">
                                        <button type="submit" class="btn btn-success" disabled>Modifier</button>
                                        <input name="deleteJure" type="hidden" value ="'.$item["ID_Contact"].'">
                                    </form>
                                    <button class="btn btn-outline-secondary me-2 rounded-circle p-2" type="button" disabled><img src="assets/img/logos/loupe.png" alt="loupe" style="max-height: 25px;"></button>
                                </div>
                            </td>
                        </tr>';
                    }
                ?>
            </tbody>
        </table>

    </div>