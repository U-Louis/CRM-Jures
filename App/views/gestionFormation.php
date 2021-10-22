<!-- GESTION DES FORMATIONS -->
    <div class="container-fluid p-4">
        <h2>Gestion des formations</h2>
        <input type="text" name="search-bar" placeholder="Tapez ici...">
        <input type="button" id="search-button" value="Rechercher">
        <table id="tableGestionFormations" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Libellé</th>
                    <th scope="col">date de début</th>
                    <th scope="col">Date de fin</th>
                    <th scope="col">Formateur</th>
                    <th scope="col">Modèle de formation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $tempInstance = new mgr_formation();
                $list = $tempInstance->read_all('formation');


                foreach($list as $item){
                    echo '<tr>' .
                    '<td>' . $item['Libelle_Formation'] . '</td>'.
                    '<td>' . $item['Date_DebutFormation'] . '</td>'.
                    '<td>' . $item['Date_FinFormation'] . '</td>'.
                    '<td>' . $item['nom_contact'] . '</td>'.
                    '<td>' . $item['Libelle_formationPatern'] . '</td>'.

                    '<td>
                    <form method="POST">
                        <button name="modifyFormationPattern" value="'.$item['ID_formation'].'" class="btn btn-info">Modifier</button>
                    </form>'.
                    '<td>
                    <form method="POST">
                        <button name="delFormationPattern" value="'.$item['ID_formation'].'" class="btn btn-outline-danger">Supprimer</button>
                    </form>'
                    ;    
                }
                echo '
                <tr>
                    <form method="POST">
                        <td><input type="text" name="libelle"></td>
                        <td><input type="text" name="descriptif"></td>
                        <td><input type="text" name="descriptif"></td>
                        <td><input type="text" name="descriptif"></td>
                        <td><input type="text" name="descriptif"></td>
                        <td colspan="2">
                            <input type="submit" name="addFormationPattern" class="btn btn-success" value="Ajouter">
                        </td>
                    </form>
                </tr>
                ';
            ?>
            </tbody>
        </table>
    </div>