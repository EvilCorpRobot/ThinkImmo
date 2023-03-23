<?php 

$this->titre = "Creation Maison";

?>

<form action="./index.php?action=addHouse" method="post">
    <label for="contract">Contrat</label><br>
    <input type="radio" name="contract" value="location">
    <label for="location">Location</label>
    <input type="radio" name="contract" value="achat">
    <label for="achat">Achat</label><br>

    <label for="title">Titre</label><br>
    <input type="text" name="title"><br>

    <label for="address">Adresse</label><br>
    <input type="text" name="address"><br>
    
    <label for="description">Description</label><br>
    <textarea name="description"></textarea><br>
    <!-- --- -->
    <label for="area">Surface m2</label><br>
    <input type="number" name="area"><br>

    <label for="charge">Charge/mois</label><br>
    <input type="number" name="charge"><br>

    <label for="rooms">Nombre de pieces</label><br>
    <input type="number" name="rooms"><br>
    <!-- --- -->
    <label for="epd">Note environementale</label><br>
    <input type="text" name="epd"><br>

    <label for="kitchen">Cuisine</label><br>
    <input type="text" name="kitchen"><br>

    <label for="parking">Parking</label><br>
    <input type="number" name="parking"><br>
    <!-- --- -->
    <label for="exterior">Exterieur</label><br>
    <input type="text" name="exterior"><br>

    <label for="pool">Piscine</label><br>
    <input type="radio" name="pool" value="oui">
    <label for="oui">Oui</label>
    <input type="radio" name="pool" value="non">
    <label for="non">Non</label><br>

    <label for="landArea">Terrain m2</label><br>
    <input type="number" name="landArea"><br>
    <!-- --- -->
    <label for="floor">Etage</label><br>
    <input type="number" name="floor"><br>

    <label for="outbuilding">Dependance</label><br>
    <input type="number" name="outbuilding"><br>
    <!-- --- -->
    <label for="price">Price</label><br>
    <input type="number" name="price"><br>

    <input type="submit" value="Creation">
</form>