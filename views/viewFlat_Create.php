<?php

$this->titre = "Creation Appartement";

?>

<link rel="stylesheet" href="./views/styles/flatCreate.css">
<div class="flat_create_container">
    <div class="form_flat_create">
        <form action="./index.php?action=addFlat" method="post" enctype="multipart/form-data">
            <div class="flat_area">
                <label for="contract">Contrat</label><br>
                <input type="radio" name="contract" value="location">
                <label for="location">Location</label>
                <input type="radio" name="contract" value="achat">
                <label for="achat">Achat</label><br>

                <label for="title">Titre</label><br>
                <input type="text" name="title"><br>

                <label for="file">Inserez 3 images</label><br>
                <input type="file" name="picture1"><br>
                <input type="file" name="picture2"><br>
                <input type="file" name="picture3"><br>
                <!-- <img src="https://placehold.it/480x430" alt="Image 1">
    <img src="https://placehold.it/480x430" alt="Image 1">
    <img src="https://placehold.it/480x430" alt="Image 1"> -->


                <label for="address">Adresse</label><br>
                <input type="text" name="address"><br>

                <label for="description">Description</label><br>
                <textarea name="description"></textarea><br>
            </div>
            <!-- --- -->
            <div class="flat_area_1">
                <div>
                    <label for="area">Surface m2</label>
                    <input type="number" name="area">
                </div>
                <div>
                    <label for="charge">Charge/mois</label>
                    <input type="number" name="charge">
                </div>
                <div>
                    <label for="rooms">Nombre de pieces</label>
                    <input type="number" name="rooms">
                </div>
            </div>
            <!-- --- -->
            <div class="flat_area_1">
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
            <div class="flat_area_1">
                <div>
                    <label for="exterior">Exterieur</label>
                    <input type="text" name="exterior">
                </div>
                <div>
                    <label for="parcel">Parcelle m2</label>
                    <input type="number" name="parcel">
                </div>
                <div>
                    <label for="floorNumber">Numero d'Etage</label>
                    <input type="number" name="floorNumber">
                </div>
            </div>
            <!-- --- -->
            <div class="flat_area_1">
                <div>
                    <label for="price">Prix en €</label>
                    <input type="number" name="price">
                </div>
                <div>
                    <input type="hidden" name="type" value="Appartement">
                </div>
                <div>
                    <input type="submit" value="Creation" class="create_flat_btn">
                </div>
            </div>
        </form>
    </div>
</div>
