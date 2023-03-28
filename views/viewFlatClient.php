<?php

$idProperty = $_GET['id_property'];

// echo $idProperty;

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
                        <img src="<?= $flatAllPictures[0]['path']?>" alt="Image 1" class="image_1 popup-trigger">
                    </div>
                    <div class="grid-item">
                        <img src="<?= $flatAllPictures[1]['path']?>" alt="Image 2" class="image_2 popup-trigger">
                        <img src="<?= $flatAllPictures[2]['path']?>" alt="Image 3" class="image_3 popup-trigger">
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
<div class="popup-container">
  <img class="popup-image" src="">
</div>
<script>
// Récupérer toutes les images avec la classe "popup-trigger"
const popupTriggers = document.querySelectorAll('.popup-trigger');

// Ajouter un événement "onclick" à chaque image
popupTriggers.forEach(trigger => {
  trigger.addEventListener('click', () => {
    // Récupérer l'URL de l'image cliquée
    const imageUrl = trigger.src;
    // Récupérer la pop-up et l'image à l'intérieur
    const popupContainer = document.querySelector('.popup-container');
    const popupImage = document.querySelector('.popup-image');
    // Afficher la pop-up et définir l'URL de l'image à l'intérieur
    popupImage.src = imageUrl;
    popupContainer.style.display = 'block';
  });
});

// Ajouter un événement "onclick" pour cacher la pop-up lorsque l'utilisateur clique à l'extérieur de l'image
const popupContainer = document.querySelector('.popup-container');
popupContainer.addEventListener('click', () => {
  popupContainer.style.display = 'none';
});
</script>