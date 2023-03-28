<?php

$this->titre = "Modification Appartement";

?>

<?php

$idProperty = $_GET["id_property"];

// echo $idProperty;

?>
<link rel="stylesheet" href="./views/styles/flatUpdate.css">
<div class="flat_update_container">
    <div class="form_flat_update">
    <form action="./index.php?action=updateFlat&id_property=<?= $idProperty ?>" method="post" enctype="multipart/form-data">

    <?php foreach($flatInfo as $info) { ?>

        <?php if($info['contract'] == "location") { ?>
            <label for="contract">Contrat</label><br>
            <input type="radio" name="contract" value="location" checked>
            <label for="location">Location</label>
            <input type="radio" name="contract" value="achat">
            <label for="achat">Achat</label><br>
        <?php } else { ?>
            <label for="contract">Contrat</label><br>
            <input type="radio" name="contract" value="location">
            <label for="location">Location</label>
            <input type="radio" name="contract" value="achat" checked>
            <label for="achat">Achat</label><br>
        <?php } ?>

        <label for="title">Titre</label><br>
        <input type="text" name="title" value="<?= $info['title'] ?>"><br>

        <label for="file">Inserez 3 images</label><br>
        <input type="file" name="picture1"><br>
        <input type="file" name="picture2"><br>
        <input type="file" name="picture3"><br>


                <label for="address">Adresse</label><br>
                <input type="text" name="address" value="<?= $info['address'] ?>"><br>

                <label for="description">Description</label><br>
                <textarea name="description" class="update_description"><?= $info['description'] ?></textarea><br>
                <!-- --- -->
                <div class="flat_area_1">
                    <div>
                        <label for="area">Surface m2</label><br>
                        <input type="number" name="area" value="<?= $info['area'] ?>">
                    </div>
                    <div>
                        <label for="charge">Charge/mois</label><br>
                        <input type="number" name="charge" value="<?= $info['charge'] ?>">
                    </div>
                    <div>
                        <label for="rooms">Nombre de pieces</label><br>
                        <input type="number" name="rooms" value="<?= $info['rooms'] ?>">
                    </div>
                </div>
                <!-- --- -->
                <div class="flat_area_2">
                    <div>
                        <label for="epd">Note environementale</label>
                        <input type="text" name="epd" value="<?= $info['epd'] ?>">
                    </div>
                    <div>
                        <label for="kitchen">Cuisine</label>
                        <input type="text" name="kitchen" value="<?= $info['kitchen'] ?>">
                    </div>
                    <div>
                        <label for="parking">Parking</label>
                        <input type="number" name="parking" value="<?= $info['parking'] ?>">
                    </div>
                </div>
                <!-- --- -->
                <div class="flat_area_3">
                    <div>
                        <label for="exterior">Exterieur</label>
                        <input type="text" name="exterior" value="<?= $info['exterior'] ?>">
                    </div>
                    <div>
                        <label for="parcel">Parcelle m2</label>
                        <input type="number" name="parcel" value="<?= $info['parcel'] ?>">
                    </div>
                    <div>
                        <label for="floorNumber">Numero d'Etage</label>
                        <input type="number" name="floorNumber" value="<?= $info['floorNumber'] ?>">
                    </div>
                </div>
                <!-- --- -->
                <div class="flat_area_4">
                    <div>
                        <label for="price">Prix en €</label><br>
                        <input type="number" name="price" value="<?= $info['price'] ?>"><br>
                    </div>
                    <div>
                        <input type="hidden" name="type" value="Appartement">
                    </div>
                    <div>
                        <input type="submit" value="Modifier">
                    <?php
                    break;
                }
                    ?>
                    </div>
                </div>
        </form>
        <a href="./index.php?action=deleteFlat&id_property=<?= $idProperty ?>">
            <button>Supprimer</button>
    </div>
</div>