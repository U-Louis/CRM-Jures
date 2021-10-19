    <!-- GESTION DES FORMATIONPATTERN -->
    <div class="container-fluid p-4">
        <h2>Gestion des modèles de formation</h2>
        <table id="tableGestionModelesFormation" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Libellé</th>
                    <th scope="col">Descriptif</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $tempInstance = new mgr_formationPattern();
                $list = $tempInstance->read_all('formationpattern');
                foreach($list as $item){
                    echo '<tr>' .
                    '<td>' . $item['Libelle_formationPatern'] . '</td>'.
                    '<td>' . $item['Descriptif_formation'] . '</td>'.
                    '<td><a href="#" class="btn btn-info">Modifier</a></td>
                    <td><a href="#" class="btn btn-outline-danger">Supprimer</a>'
                    ;                    
                }
                ?>
                <tr>
                    <form method="POST">
                        <td><input type="text" name="libelle"></td>
                        <td><input type="text" name="descriptif"></td>
                        <td colspan="2">
                            <input type="submit" class="btn btn-success" value="Ajouter">
                        </td>
                    </form>
                </tr>
            </tbody>
        </table>
    </div>
