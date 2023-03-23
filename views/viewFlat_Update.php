<?php 

$this->titre = "Modification Appartement";

?>

<form action="./index.php?action=updateFlat" method="post">

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

    <!-- <img src="https://placehold.it/480x430" alt="Image 1">
    <img src="https://placehold.it/480x430" alt="Image 1">
    <img src="https://placehold.it/480x430" alt="Image 1"> -->


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

    <label for="parcel">Parcelle m2</label><br>
    <input type="number" name="parcel" value="<?= $info['parcel'] ?>"><br>

    <label for="floorNumber">Numero d'Etage</label><br>
    <input type="number" name="floorNumber" value="<?= $info['floorNumber'] ?>"><br>
    <!-- --- -->
    <label for="price">Prix en €</label><br>
    <input type="number" name="price" value="<?= $info['price'] ?>"><br>

    <input type="hidden" name="type" value="Appartement">

    <input type="submit" value="Modifier">
    <?php 
        break;
    }
    ?>
</form>