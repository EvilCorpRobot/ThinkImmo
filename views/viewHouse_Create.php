<?php

$this->titre = "Creation Maison";

?>
<link rel="stylesheet" href="./views/styles/housecreate.css">

<div class="form_house_create">
    <form action="./index.php?action=addHouse" method="post">
        <div class="house_area">
            <label for="contract">Contrat</label><br>
            <input type="radio" name="contract" value="location">
            <label for="location">Location</label>
            <input type="radio" name="contract" value="achat">
            <label for="achat">Achat</label><br>

            <label for="title">Titre</label><br>
            <input type="text" name="title"><br>

            <!-- <input type="file" name="picture" multiple><br> -->
            <!-- <img src="https://placehold.it/480x430" alt="Image 1">
    <img src="https://placehold.it/480x430" alt="Image 1">
    <img src="https://placehold.it/480x430" alt="Image 1"><br> -->

            <label for="address">Adresse</label><br>
            <input type="text" name="address"><br>

            <label for="description">Description</label><br>
            <textarea name="description"></textarea><br>
        </div>
        <!-- --- -->
        <div class="house_area_1">
            <div>
                <label for="area">Surface m2</label>
                <input type="number" name="area">
            </div>
            <div>
                <label for="charge">Charge/mois</label>
                <input type="number" name="charge">
            </div>
            <div>
                <label for="rooms">Nombre de pièces</label>
                <input type="number" name="rooms">
            </div>
        </div>

        <!-- --- -->
        <div class="house_area_1">
            <div>
                <label for="epd">Note environementale</label>
                <input type="text" name="epd">
            </div>
            <div>
                <label for="kitchen">Cuisine</label>
                <input type="text" name="kitchen">
            </div>
            <div>
                <label for="parking">Parking</label>
                <input type="number" name="parking">
            </div>
        </div>
        <!-- --- -->
        <div class="house_area_1">
            <div>
                <label for="exterior">Exterieur</label>
                <input type="text" name="exterior">
            </div>
            <div>
                <label for="pool">Piscine</label>
                <input type="radio" name="pool" value="oui">
                <label for="oui" class="radio">Oui</label>
                <input type="radio" name="pool" value="non">
                <label for="non" class="radio">Non</label>
            </div>
            <div class="after_radio">
                <label for="landArea">Terrain m2</label>
                <input type="number" name="landArea">
            </div>
        </div>
        <!-- --- -->
        <div class="house_area_1">
            <div>
                <label for="floor">Etage</label>
                <input type="number" name="floor">
            </div>
            <div>
                <label for="outbuilding">Dependance</label>
                <input type="number" name="outbuilding">
            </div>
        </div>
        <!-- --- -->
        <div class="house_area_1">
            <div>
                <label for="price">Price</label>
                <input type="number" name="price">
            </div>
            <div>
                <input type="hidden" name="type" value="Maison">
            </div>
            <div>
                <input type="submit" value="Creation" class="create_house_btn">
            </div>
        </div>
    </form>
</div>