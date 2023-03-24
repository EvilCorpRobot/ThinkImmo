<?php 

    $this->titre = "Mofification Maison";

?>

<?php

    $idProperty = $_GET['id_property'];

    // echo $idProperty;

?>

<form action="./index.php?action=updateHouse&id_property=<?= $idProperty ?>" method="post">

    <?php foreach($houseInfo as $info) { ?>

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

        <!-- <input type="file" name="picture" multiple><br> -->
        <!-- <img src="https://placehold.it/480x430" alt="Image 1">
        <img src="https://placehold.it/480x430" alt="Image 1">
        <img src="https://placehold.it/480x430" alt="Image 1"><br> -->

        <label for="address">Adresse</label><br>
        <input type="text" name="address" value="<?= $info['address'] ?>"><br>
        
        <label for="description">Description</label><br>
        <textarea name="description"><?= $info['description'] ?></textarea><br>
        <!-- --- -->
        <label for="area">Surface m2</label><br>
        <input type="number" name="area" value="<?= $info['area'] ?>"><br>

        <label for="charge">Charge/mois</label><br>
        <input type="number" name="charge" value="<?= $info['charge'] ?>"><br>

        <label for="rooms">Nombre de pieces</label><br>
        <input type="number" name="rooms" value="<?= $info['rooms'] ?>"><br>
        <!-- --- -->
        <label for="epd">Note environementale</label><br>
        <input type="text" name="epd" value="<?= $info['epd'] ?>"><br>

        <label for="kitchen">Cuisine</label><br>
        <input type="text" name="kitchen" value="<?= $info['kitchen'] ?>"><br>

        <label for="parking">Parking</label><br>
        <input type="number" name="parking" value="<?= $info['parking'] ?>"><br>
        <!-- --- -->
        <label for="exterior">Exterieur</label><br>
        <input type="text" name="exterior" value="<?= $info['exterior'] ?>"><br>

        <?php if($info['pool'] == "oui") { ?>
            <label for="pool">Piscine</label><br>
            <input type="radio" name="pool" value="oui" checked>
            <label for="oui">Oui</label>
            <input type="radio" name="pool" value="non">
            <label for="non">Non</label><br>
        <?php } else { ?>
            <label for="pool">Piscine</label><br>
            <input type="radio" name="pool" value="oui">
            <label for="oui">Oui</label>
            <input type="radio" name="pool" value="non" checked>
            <label for="non">Non</label><br>
        <?php } ?>

        <label for="landArea">Terrain m2</label><br>
        <input type="number" name="landArea" value="<?= $info['landArea'] ?>"><br>
        <!-- --- -->
        <label for="floor">Etage</label><br>
        <input type="number" name="floor" value="<?= $info['floor'] ?>"><br>

        <label for="outbuilding">Dependance</label><br>
        <input type="number" name="outbuilding" value="<?= $info['outbuilding'] ?>"><br>
        <!-- --- -->
        <label for="price">Price</label><br>
        <input type="number" name="price" value="<?= $info['price'] ?>"><br>

        <input type="hidden" name="type" value="Maison">

        <input type="submit" value="Modifier">
    <?php 
        break;
    }
    ?>
</form>