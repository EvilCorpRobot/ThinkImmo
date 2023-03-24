<?php 

    $idProperty = $_GET['id_property'];

    echo $idProperty;

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
                <label for="contract"><?= $houseAllInfo[0]['contract'] ?></label><br>

                <label for="title"><?= $houseAllInfo[0]['title'] ?></label><br>

                <!-- <div>
                    <img src="https://placehold.it/480x430" alt="Image 1">
                    <img src="https://placehold.it/480x430" alt="Image 1">
                    <img src="https://placehold.it/480x430" alt="Image 1">
                </div>-->

                <label for="address"><?= $houseAllInfo[0]['address'] ?></label><br>
                <span class="info"></span>

                <label for="description">Description</label><br>
                <textarea name="description"><?= $houseAllInfo[0]['description'] ?></textarea><br>
            </div>
            <!-- --- -->
            <div class="house_area_1">
                <div>
                    <label for="area"><?= $houseAllInfo[0]['area'] ?></label>
                    <span class="info"></span>
                </div>
                <div>
                    <label for="charge"><?= $houseAllInfo[0]['charge'] ?></label>
                    <span class="info"></span>
                </div>
                <div>
                    <label for="rooms"><?= $houseAllInfo[0]['rooms'] ?></label>
                    <span class="info"></span>
                </div>
            </div>
            <!-- --- -->
            <div class="house_area_1">
                <div>
                    <label for="epd"><?= $houseAllInfo[0]['epd'] ?></label>
                    <span class="info"></span>
                </div>
                <div>

                    <label for="kitchen"><?= $houseAllInfo[0]['kitchen'] ?></label>
                    <span class="info"></span>
                </div>
                <div>

                    <label for="parking"><?= $houseAllInfo[0]['parking'] ?></label>
                    <span class="info"></span>
                </div>
            </div>
            <!-- --- -->
            <div class="house_area_1">
                <div>
                    <label for="exterior"><?= $houseAllInfo[0]['exterior'] ?></label>
                    <span class="info"></span>
                </div>
                <div>
                    <label for="pool"><?= $houseAllInfo[0]['pool'] ?></label>
                    <span class="info"></span>
                </div>
                <div>
                    <label for="landArea"><?= $houseAllInfo[0]['landArea'] ?></label>
                    <span class="info"></span>
                </div>
            </div>
            <!-- --- -->
            <div class="house_area_1">
                <div>
                    <label for="floor"><?= $houseAllInfo[0]['floor'] ?></label>
                    <span class="info"></span>
                </div>
                <div>
                    <label for="outbuilding"><?= $houseAllInfo[0]['outbuilding'] ?></label>
                    <span class="info"></span>
                </div>
            </div>
            <!-- --- -->
            <div class="house_area_1">

                <div>
                    <label for="price"><?= $houseAllInfo[0]['price'] ?></label>
                    <span class="info"></span>
                </div>

            </div>
        </form>
    </div>
</div>