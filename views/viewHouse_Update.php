<?php

$this->titre = "Mofification Maison";

?>

<?php

$idProperty = $_GET['id_property'];

// echo $idProperty;

?>
<link rel="stylesheet" href="./views/styles/houseUpdate.css">

<div class="form_house_update">
    <form action="./index.php?action=updateHouse&id_property=<?= $idProperty ?>" method="post" enctype="multipart/form-data">

        <?php foreach ($houseInfo as $info) { ?>

            <?php if ($info['contract'] == "location") { ?>
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
            <div class="house_area_1">
                <div>
                    <label for="area">Surface m2</label>
                    <input type="number" name="area" value="<?= $info['area'] ?>">
                </div>
                <div>
                    <label for="charge">Charge/mois</label>
                    <input type="number" name="charge" value="<?= $info['charge'] ?>">
                </div>
                <div>
                    <label for="rooms">Nombre de pieces</label>
                    <input type="number" name="rooms" value="<?= $info['rooms'] ?>">
                </div>
            </div>
            <!-- --- -->
            <div class="house_area_2">
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
            <div class="house_area_3">
                <div>
                    <label for="exterior">Exterieur</label>
                    <input type="text" name="exterior" value="<?= $info['exterior'] ?>">
                </div>
                <div>
                    <?php if ($info['pool'] == "oui") { ?>
                        <label for="pool">Piscine</label>
                        <div class="form-check-inline">
                            <input type="radio" name="pool" value="oui" checked>
                            <label for="oui">Oui</label>
                            <input type="radio" name="pool" value="non">
                            <label for="non">Non</label>
                        </div>
                    <?php } else { ?>
                        <label for="pool">Piscine</label>
                        <div class="form-check-inline">
                            <input type="radio" name="pool" value="oui">
                            <label for="oui">Oui</label>
                            <input type="radio" name="pool" value="non" checked>
                            <label for="non">Non</label>
                        </div>
                    <?php } ?>
                </div>
                <div>
                    <label for="landArea">Terrain m2</label>
                    <input type="number" name="landArea" value="<?= $info['landArea'] ?>">
                </div>
            </div>
            <!-- --- -->
            <div class="house_area_4">
                <div>
                    <label for="floor">Etage</label>
                    <input type="number" name="floor" value="<?= $info['floor'] ?>">
                </div>
                <div>
                    <label for="outbuilding">Dependance</label>
                    <input type="number" name="outbuilding" value="<?= $info['outbuilding'] ?>">
                </div>
                <div>
                    <label for="price">Price</label>
                    <input type="number" name="price" value="<?= $info['price'] ?>">
                </div>
            </div>
            <!-- --- -->
            <div class="house_area_5">

                <div>
                    <input type="hidden" name="type" value="Maison">
                </div>
                <div>
                    <input type="submit" value="Modifier" class="action_btn">
                <?php
                break;
            }
                ?>
                </div>
            </div>
    </form>
    <a href="./index.php?action=deleteHouse&id_property=<?= $idProperty ?>">
        <button class="action_btn">Supprimer</button>
    </a>
</div>