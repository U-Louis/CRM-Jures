    <!-- GESTION DES FORMATIONPATTERN -->
    <div class="container-fluid p-4">
        <h2>Gestion des modèles de formation</h2>
        <input type="text" name="search-bar" placeholder="Tapez ici...">
        <input type="button" id="search-button" value="Rechercher">
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

                if(isset($_POST['modifyFormationPattern'])){
                    $item = $list[array_search($_POST['modifyFormationPattern'],array_column($list, 'ID_formationPattern'))];
                    echo '<tr>' .
                        '<td>' . $item['Libelle_formationPatern'] . '</td>'.
                        '<td>' . $item['Descriptif_formation'] . '</td>'.
                        '<td>
                        <form method="POST">
                        <button name="modifyFormationPattern" value="'.$item['ID_formationPattern'].'" class="btn btn-info"';
                    if(isset($_POST['modifyFormationPattern'])){
                        echo 'disabled';
                    }
                    echo '>Modifier</button>
                        </form>'.
                        '<td><form method="POST">
                        <button name="delFormationPattern" value="'.$item['ID_formationPattern'].'" class="btn btn-outline-danger"';
                    if(isset($_POST['modifyFormationPattern'])){
                            echo 'disabled';
                    }
                    echo '    
                        >Supprimer</button>
                        </form>'
                    ;
                    if(isset($_POST['modifyFormationPattern'])){
                        echo '
                        <tr>
                            <form method="POST">
                                <td>
                                    <input type="text" name="libelleNew">
                                </td>
                                <td>
                                    <input type="text" name="descriptifNew">
                                </td>
                                <td colspan="2">
                                    <form>
                                        <input type="submit" name="modificationToConfirm" class="btn btn-success" value="Confirmer">
                                        <input type="hidden" name="modifyFormationPattern" value="'.$_POST['modifyFormationPattern'].'">
                                    </form>
                                </td>
                            </form>
                        </tr>
                        '
                        ;
                    }
                }
                else{
                    foreach($list as $item){
                        echo '<tr>' .
                        '<td>' . $item['Libelle_formationPatern'] . '</td>'.
                        '<td>' . $item['Descriptif_formation'] . '</td>'.
                        '<td>
                        <form method="POST">
                            <button name="modifyFormationPattern" value="'.$item['ID_formationPattern'].'" class="btn btn-info">Modifier</button>
                        </form>'.
                        '<td>
                        <form method="POST">
                            <button name="delFormationPattern" value="'.$item['ID_formationPattern'].'" class="btn btn-outline-danger">Supprimer</button>
                        </form>'
                        ;    
                    }
                }



                if(!isset($_POST['modifyFormationPattern'])){
                echo '
                <tr>
                    <form method="POST">
                        <td><input type="text" name="libelle"></td>
                        <td><input type="text" name="descriptif"></td>
                        <td colspan="2">
                            <input type="submit" name="addFormationPattern" class="btn btn-success" value="Ajouter">
                        </td>
                    </form>
                </tr>
                ';
                }
                ?>


            </tbody>
        </table>
    </div>
