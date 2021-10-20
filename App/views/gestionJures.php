<!-- GESTION DES JURES -->
<div class="container-fluid p-4">
        <h2>Gestion des jurés</h2>
        <input type="text" name="search-bar" placeholder="Tapez ici...">
        <input type="button" id="search-button" value="Rechercher">
        <table id="tableGestionJures" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Spécialité</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Détail</th>
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
// var_dump($list);
                    
                    foreach($list as $item){
                        echo "<tr><td>".
                        $item["Nom_contact"].
                        '</td><td>'.
                        $item["Prenom_contact"]. 
                        '</td><td>'.
                        $item["libelle_specialite"].
                        '</td><td>'.
                        $item["Mail_contact"].
                        '</td><td><button class="btn btn-outline-secondary me-2 rounded-circle p-2" type="button"><img src="assets/img/logos/loupe.png" alt="loupe" style="max-height: 25px;"></button></td></tr>';
                    }
                ?>
            </tbody>
        </table>

    </div>