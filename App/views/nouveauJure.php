<!-- Creation d'un nouveau juré -->
<div class="container-fluid p-4">
    <h2>Ajout d'un juré</h2>
    <form action="" method="">
        <label for="nomContact"> Nom : </label>
        <input type="text" name="nomContact" value="Pimentel de Andrade">
        <br>
        <label for="prenomContact"> Prenom : </label>
        <input type="text" name="prenomContact" value="Amandine">
        <br>
        <label for="tel">Numéro de téléphone : </label>
        <input type="tel" name="tel" value="0768774674">
        <br>
        <label for="tel2"> Autre numéro : </label>
        <input type="tel" name="tel2">
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
        <input type="text" name="entreprise" value="Aplle">
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
        <!-- <br>
        <p>Avez vous une autre spécialité ? </p>
        <input type="radio" name="choixSpe1" id="ouiSpe1">
        <label for="ouiSpe1">Oui</label>
        <input type="radio" name="choixSpe1" id="nonSpe1">
        <label for="nonSpe1">Non</label>
        <br>
        <br>
        <label for="specialite2"> Deuxième spécialité :</label>
        <input type="text" name="specialite2">
        <p>Avez vous une habilitation pour cette spécialité ?</p>
        <input type="radio" name="choixHab2" id="ouiHab2">
        <label for="ouiHab2">Oui</label>
        <input type="radio" name="choixHab2" id="nonHab2">
        <label for="nonHab2">Non</label>
        <label for="dateDebHabilitation2">Début de validité : </label>
        <input type="date" name="dateDebHabilitation2">
        <label for="dateFinHabilitation2">Fin de validité : </label>
        <input type="date" name="dateFinHabilitation2">
        <br>
        <p>Avez vous une autre spécialité ? </p>
        <input type="radio" name="choixSpe1" id="ouiSpe1">
        <label for="ouiSpe1">Oui</label>
        <input type="radio" name="choixSpe1" id="nonSpe1">
        <label for="nonSpe1">Non</label> -->
        <div>
            <input type="submit" class="btn btn-success" value="Valider">
            <input type="reset" class="btn btn-outline-danger" value="Annuler">
        </div>
</form>
</div>