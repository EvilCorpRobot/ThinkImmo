<?php

$this->titre = "Flat";

?>

<link rel="stylesheet" href="./views/styles/descriptionflat.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />

<div class="flat_create_container">
    <div class="form_flat_create">
        <form action="" method="post">
            <div class="flat_area">
                <label for="contract">Location</label><br>

                <label for="title">Titre</label><br>

                <div>
                    <img src="https://placehold.it/480x430" alt="Image 1">
                   <!--  <img src="https://placehold.it/480x430" alt="Image 1">
                    <img src="https://placehold.it/480x430" alt="Image 1">-->
                </div>

                <label for="address">Adresse</label><br>
                <span class="info"></span>

                <label for="description">Description</label><br>
                <textarea name="description"></textarea><br>
            </div>
            <!-- --- -->
            <div class="flat_area_1">
                <div>
                    <label for="area">Surface m2</label>
                    <span class="info"></span>
                </div>
                <div>
                    <label for="charge">Charge/mois</label>
                    <span class="info"></span>
                </div>
                <div>
                    <label for="rooms">Nombre de pieces</label>
                    <span class="info"></span>
                </div>
            </div>
            <!-- --- -->
            <div class="flat_area_2">
                <div>
                    <label for="epd">Note environementale</label>
                    <span class="info"></span>
                </div>
                <div>

                    <label for="kitchen">Cuisine</label>
                    <span class="info"></span>
                </div>
                <div>

                    <label for="parking">Parking</label>
                    <span class="info"></span>
                </div>
            </div>

            <!-- --- -->
            <div class="flat_area_3">
                <div>
                    <label for="exterior">Exterieur</label>
                    <span class="info"></span>
                </div>
                <div>
                    <label for="parcel">Parcelle m2</label>
                    <span class="info"></span>
                </div>
                <div>
                    <label for="floorNumber">Numero d'Etage</label>
                    <span class="info"></span>
                </div>
            </div>
            <!-- --- -->
            <div class="flat_area_4">

                <div>
                    <label for="price">Prix en €</label>
                    <span class="info"></span>
                </div>

            </div>
        </form>
    </div>
</div>