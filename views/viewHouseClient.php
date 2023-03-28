<?php

$idProperty = $_GET['id_property'];

// echo $idProperty;

?>

<?php

$this->titre = "Description House Client";

?>

<link rel="stylesheet" href="./views/styles/descriptionhouse.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />

<div class="house_create_container">
    <div class="form_house_create">
        <form action="" method="post">
            <div class="house_area">
                <label for="contract" class="contract"><?= $houseAllInfo[0]['contract'] ?></label><br>

                <label for="title" class="title"><?= $houseAllInfo[0]['title'] ?></label><br>

                <div class="grid-container">
                    <div class="grid-item">
                        <img src="<?= $houseAllPictures[0]['path']?>" alt="Image 1" class="image_1 popup-trigger">
                    </div>
                    <div class="grid-item">
                        <img src="<?= $houseAllPictures[1]['path']?>" alt="Image 2" class="image_2 popup-trigger">
                        <img src="<?= $houseAllPictures[2]['path']?>" alt="Image 3" class="image_3 popup-trigger">
                    </div>
                </div>

                <label for="address"><?= $houseAllInfo[0]['address'] ?></label><br>
                <span class="info"></span>
                <div>

                    <span class="info" id="price"><?= $houseAllInfo[0]['price'] ?> €</span>
                </div>
                <label for="description" class="description">Description</label><br>
                <textarea name="description"><?= $houseAllInfo[0]['description'] ?></textarea><br>
            </div>
            <!-- --- -->
            <div class="house_area_1">
                <div>
                    <label for="area">Superficie</label>
                    <span class="info"><?= $houseAllInfo[0]['area'] ?></span>
                </div>
                <div>
                    <label for="charge">Charge</label>
                    <span class="info"><?= $houseAllInfo[0]['charge'] ?></span>
                </div>
                <div>
                    <label for="rooms">Nombre de chambres</label>
                    <span class="info"><?= $houseAllInfo[0]['rooms'] ?></span>
                </div>
            </div>
            <!-- --- -->
            <div class="house_area_2">
                <div>
                    <label for="epd">Classe énergétique</label>
                    <span class="info"><?= $houseAllInfo[0]['epd'] ?></span>
                </div>
                <div>

                    <label for="kitchen">Cuisine</label>
                    <span class="info"><?= $houseAllInfo[0]['kitchen'] ?></span>
                </div>
                <div>

                    <label for="parking">Parking</label>
                    <span class="info"><?= $houseAllInfo[0]['parking'] ?></span>
                </div>
            </div>
            <!-- --- -->
            <div class="house_area_3">
                <div>
                    <label for="exterior">Extérieur</label>
                    <span class="info"><?= $houseAllInfo[0]['exterior'] ?></span>
                </div>
                <div>
                    <label for="pool">Piscine</label>
                    <span class="info"><?= $houseAllInfo[0]['pool'] ?></span>
                </div>
                <div>
                    <label for="landArea">Surface du terrain</label>
                    <span class="info"><?= $houseAllInfo[0]['landArea'] ?></span>
                </div>
            </div>
            <!-- --- -->
            <div class="house_area_4">
                <div>
                    <label for="floor">Nombre de niveau</label>
                    <span class="info"><?= $houseAllInfo[0]['floor'] ?></span>
                </div>
                <div>
                    <label for="outbuilding">Dépendance</label>
                    <span class="info"><?= $houseAllInfo[0]['outbuilding'] ?></span>
                </div>
            </div>
            <!-- --- -->
            <div class="house_area_5">



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
<?php

    var_dump($houseAllPictures);

?>
