<!-- GESTION DES JURES -->
<div class="container-fluid p-4">
        <h2>Gestion des jurés</h2>
        <input type="text" name="search-bar" placeholder="Tapez ici...">
        <input type="button" id="search-button" value="Rechercher">
        <table id="tableGestionJures" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Habilitation</th>
                    <th scope="col">Spécialité</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Détail</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php print_r(JureMgr::read_all_jureName(PDO::FETCH_CLASS)) ?></td>
                    <td><?php print_r(JureMgr::read_all_jureHabilitation(PDO::FETCH_CLASS)) ?></td>
                    <td>machin</td>
                    <td>@mdo</td>
                    <td><button class="btn btn-outline-secondary me-2 rounded-circle p-2" type="button"><img src="assets/img/logos/loupe.png" alt="loupe" style="max-height: 25px;"></button></td>

                </tr>
                <tr>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>tretere</td>
                    <td>@fat</td>
                    <td><button class="btn btn-outline-secondary me-2 rounded-circle p-2" type="button"><img src="assets/img/logos/loupe.png" alt="loupe" style="max-height: 25px;"></button></td>

                </tr>
                <tr>
                    <td>Larry the Bird</td>
                    <td>twitter</td>
                    <td>Brouette</td>
                    <td>@ici</td>
                    <td><button class="btn btn-outline-secondary me-2 rounded-circle p-2" type="button"><img src="assets/img/logos/loupe.png" alt="loupe" style="max-height: 25px;"></button></td>
                </tr>
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