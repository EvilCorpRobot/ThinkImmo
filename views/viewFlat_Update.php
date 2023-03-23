<?php 

$this->titre = "Modification Appartement";

?>

<form action="#">
    <label for="contrat">Contrat</label><br>
    <input type="radio" name="location" value="location">
    <label for="location">Location</label>
    <input type="radio" name="achat" value="achat">
    <label for="achat">Achat</label><br>

    <label for="titre">Titre</label><br>
    <input type="text"><br>

    <label for="Adresse">Adresse</label><br>
    <input type="text"><br>
    
    <label for="Description">Description</label><br>
    <textarea></textarea><br>
    <!-- --- -->
    <label for="Type">Type</label><br>
    <input type="radio" name="maison" value="maison">
    <label for="maison">Maison</label>
    <input type="radio" name="appartement" value="appartement">
    <label for="appartement">Appartement</label><br>

    <label for="surface">Surface m2</label><br>
    <input type="text"><br>

    <label for="surface">Charge/mois</label><br>
    <input type="text"><br>
    <!-- --- -->
    <label for="nbPiece">Nombre de pieces</label><br>
    <input type="text"><br>

    <label for="epd">Note environementale</label><br>
    <input type="text"><br>

    <label for="kitchen">Cuisine</label><br>
    <input type="text"><br>
    <!-- --- -->
    <label for="parking">Parking</label><br>
    <input type="text"><br>

    <label for="exterior">Exterieur</label><br>
    <input type="text"><br>

    <label for="pool">Piscine</label><br>
    <input type="radio" name="pool" value="oui">
    <label for="pool">Oui</label>
    <input type="radio" name="pool" value="non">
    <label for="pool">Non</label><br>
    <!-- --- -->
    <label for="landArea">Terrain m2</label><br>
    <input type="text"><br>

    <label for="floor">Etage</label><br>
    <input type="text"><br>

    <label for="outbuilding">Dependance</label><br>
    <input type="radio" name="outbuilding" value="oui">
    <label for="outbuilding">Oui</label>
    <input type="radio" name="outbuilding" value="non">
    <label for="outbuilding">Non</label><br>
    <!-- --- -->
    <label for="price">Price</label><br>
    <input type="text"><br>

    <input type="submit" value="Creation">
</form>