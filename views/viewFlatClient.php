<?php

$idProperty = $_GET['id_property'];

echo $idProperty;

?>

<?php

$this->titre = "Description Flat Client";

?>

<link rel="stylesheet" href="./views/styles/descriptionflat.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />

<div class="flat_create_container">
    <div class="form_flat_create">
        <form action="" method="post">
            <div class="flat_area">
                <label for="contract" class="contract"><?= $flatAllInfo[0]['contract']; ?></label><br>

                <label for="title" class="title"><?= $flatAllInfo[0]['title']; ?></label><br>

                <div class="grid-container">
                    <div class="grid-item">
                        <img src="https://placehold.it/480x430" alt="Image 1">
                    </div>
                    <div class="grid-item">
                        <img src="https://placehold.it/480x215" alt="Image 2">
                        <img src="https://placehold.it/480x215" alt="Image 3">
                    </div>
                </div>

                <label for="address"></label><br>
                <span class="info"><?= $flatAllInfo[0]['address']; ?></span>
                <div>
                    <span class="info" id="price"><?= $flatAllInfo[0]['price']; ?> €</span>
                </div>
                <label for="description" class="description">Description</label><br>
                <textarea name="description"><?= $flatAllInfo[0]['description']; ?></textarea><br>
            </div>

            <!-- --- -->
            <div class="flat_area_1">
                <div>
                    <label for="area">Superficie</label>
                    <span class="info"><?= $flatAllInfo[0]['area']; ?></span>
                </div>
                <div>
                    <label for="charge">Charge/mois</label>
                    <span class="info"><?= $flatAllInfo[0]['charge']; ?></span>
                </div>
                <div>
                    <label for="rooms">Nombre de chambres</label>
                    <span class="info"><?= $flatAllInfo[0]['rooms']; ?></span>
                </div>
            </div>
            <!-- --- -->
            <div class="flat_area_2">
                <div>
                    <label for="epd">Classe énergétique</label>
                    <span class="info"><?= $flatAllInfo[0]['epd']; ?></span>
                </div>
                <div>

                    <label for="kitchen">Cuisine</label>
                    <span class="info"><?= $flatAllInfo[0]['kitchen']; ?></span>
                </div>
                <div>

                    <label for="parking">Parking</label>
                    <span class="info"><?= $flatAllInfo[0]['parking']; ?></span>
                </div>
            </div>

            <!-- --- -->
            <div class="flat_area_3">
                <div>
                    <label for="exterior">Extérieur</label>
                    <span class="info"><?= $flatAllInfo[0]['exterior']; ?></span>
                </div>
                <div>
                    <label for="parcel">Parcelle</label>
                    <span class="info"><?= $flatAllInfo[0]['parcel']; ?></span>
                </div>
                <div>
                    <label for="floorNumber">Numéro d'étage</label>
                    <span class="info"><?= $flatAllInfo[0]['floorNumber']; ?></span>
                </div>
            </div>
            <!-- --- -->
            <div class="flat_area_4">


            </div>
        </form>
    </div>
</div>