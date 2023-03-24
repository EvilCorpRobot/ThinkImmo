<?php

$this->titre = "Flat";

?>

<link rel="stylesheet" href="./views/styles/descriptionflat.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />

<div class="flat_create_container">
    <div class="form_flat_create">
        <form action="./index.php?action=addFlat" method="post">
            <div class="flat_area">
                <label for="contract">Location</label><br>

                <label for="title">Titre</label><br>

<div>>
                <img src="https://placehold.it/480x430" alt="Image 1">
                <img src="https://placehold.it/480x430" alt="Image 1">
                <img src="https://placehold.it/480x430" alt="Image 1">
</div>

                <label for="address">Adresse</label><br>


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

            </div>
        </form>
    </div>
</div>