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
                <label for="contract"><?= $flatAllInfo[0]['contract']; ?></label><br>

                <label for="title"><?= $flatAllInfo[0]['title']; ?></label><br>

                <div>
                    <img src="https://placehold.it/480x430" alt="Image 1">
                   <!--  <img src="https://placehold.it/480x430" alt="Image 1">
                    <img src="https://placehold.it/480x430" alt="Image 1">-->
                </div>

                <label for="address"><?= $flatAllInfo[0]['address']; ?></label><br>
                <span class="info"></span>

                <label for="description">Description</label><br>
                <textarea name="description"><?= $flatAllInfo[0]['description']; ?></textarea><br>
            </div>
            <!-- --- -->
            <div class="flat_area_1">
                <div>
                    <label for="area"><?= $flatAllInfo[0]['area']; ?></label>
                    <span class="info"></span>
                </div>
                <div>
                    <label for="charge"><?= $flatAllInfo[0]['charge']; ?></label>
                    <span class="info"></span>
                </div>
                <div>
                    <label for="rooms"><?= $flatAllInfo[0]['rooms']; ?></label>
                    <span class="info"></span>
                </div>
            </div>
            <!-- --- -->
            <div class="flat_area_2">
                <div>
                    <label for="epd"><?= $flatAllInfo[0]['epd']; ?></label>
                    <span class="info"></span>
                </div>
                <div>

                    <label for="kitchen"><?= $flatAllInfo[0]['kitchen']; ?></label>
                    <span class="info"></span>
                </div>
                <div>

                    <label for="parking"><?= $flatAllInfo[0]['parking']; ?></label>
                    <span class="info"></span>
                </div>
            </div>

            <!-- --- -->
            <div class="flat_area_3">
                <div>
                    <label for="exterior"><?= $flatAllInfo[0]['exterior']; ?></label>
                    <span class="info"></span>
                </div>
                <div>
                    <label for="parcel"><?= $flatAllInfo[0]['parcel']; ?></label>
                    <span class="info"></span>
                </div>
                <div>
                    <label for="floorNumber"><?= $flatAllInfo[0]['floorNumber']; ?></label>
                    <span class="info"></span>
                </div>
            </div>
            <!-- --- -->
            <div class="flat_area_4">

                <div>
                    <label for="price"><?= $flatAllInfo[0]['price']; ?></label>
                    <span class="info"></span>
                </div>
            </div>
        </form>
    </div>
</div>