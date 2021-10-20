<!-- Creation d'un nouveau juré -->
<div class="container-fluid p-4">
    <h2>Ajout d'un juré</h2>
    <form method="POST" action=''>
        <label for="nomContact"> Nom : </label>
        <input type="text" name="nomContact" value="Pimentel de Andrade">

        <br>

        <label for="prenomContact"> Prenom : </label>
        <input type="text" name="prenomContact" value="Amandine">

        <br>

        <label for="tel">Numéro de téléphone : </label>
        <input type="tel" name="tel" value="0768774674">

        <br>

        <label for="mail"> Adresse mail : </label>
        <input type="email" name="mail" value = "amandine.pda@gmail.com">

        <br>

        <label for="numAdresse"> Numéro de rue : </label>
        <input type="number" name="numAdresse" value="6">

        <br>

        <label for="libelAdresse"> Nom de rue : </label>
        <input type="text" name="libelAdresse" value="rue des marronniers">

        <br>

        <label for="compAdresse"> Complément d'adresse : </label>
        <input type="text" name="comAdresse">

        <br>

        <label for="vilAdresse"> Ville : </label>
        <input type="text" name="vilAdresse" value="Saint Gervais le forêt">

        <br>

        <label for="CPAdresse"> Code Postal : </label>
        <input type="number" name="CPAdresse" value="41350">

        <br>

        <label for="entreprise"> Entreprise : </label>
        <input type="text" name="entreprise" value="Bliblu">

        <br>

        <label for="specialite1"> Première spécialité :</label>
        <input type="text" name="specialite1" value="SQL">

        <p>Avez vous une habilitation pour cette spécialité ?</p>
        <input type="radio" name="choixHab1" id="ouiHab1" >
        <label for="ouiHab1">Oui</label>
        <input type="radio" name="choixHab1" id="nonHab1">
        <label for="nonHab1">Non</label>

        <label for="dateDebHabilitation1">Début de validité : </label>
        <input type="date" name="dateDebHabilitation1" value="1993-11-24">

        <label for="dateFinHabilitation1">Fin de validité : </label>
        <input type="date" name="dateFinHabilitation1" value="2023-11-24">

        <div>
            <input type="reset" class="btn btn-danger" value="Annuler">
            <input type="submit" class="btn btn-success" value="Valider">
        </div>
</form>
</div>