<?php

$this->titre = "Accueil";

?>


<link rel="stylesheet" href="./views/styles/clientHome.css">
<main class="home_container">
    <img class="home_container_img" src="./assets/ThinkImmoBackgroundImage.jpg" alt="dessin immobilier">
    <form action="./index.php?action=filterPropertyClient" method="post">

        <div class="grid_container">
            <div class="grid">
                <label class="card">
                    <input class="card__input" name="purchase" type="checkbox" />
                    <div class="card__body">
                        <div class="card__body-cover"><img class="card__body-cover-image" src="./assets/euro.jpg" /><span class="card__body-cover-checkbox">
                                <svg class="card__body-cover-checkbox--svg" viewBox="0 0 12 10">
                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                </svg></span></div>
                        <header class="card__body-header">
                            <h2 class="card__body-header-title">Vente</h2>

                        </header>
                    </div>
                </label>
                <label class="card">
                    <input class="card__input" name="rent" type="checkbox" />
                    <div class="card__body">
                        <div class="card__body-cover"><img class="card__body-cover-image" src="./assets/clé.jpg" /><span class="card__body-cover-checkbox">
                                <svg class="card__body-cover-checkbox--svg" viewBox="0 0 12 10">
                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                </svg></span></div>
                        <header class="card__body-header">
                            <h2 class="card__body-header-title">Location</h2>

                        </header>
                    </div>
                </label>
                <label class="card">
                    <input class="card__input" name="house" type="checkbox" />
                    <div class="card__body">
                        <div class="card__body-cover"><img class="card__body-cover-image" src="./assets/house.jpg" /><span class="card__body-cover-checkbox">
                                <svg class="card__body-cover-checkbox--svg" viewBox="0 0 12 10">
                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                </svg></span></div>
                        <header class="card__body-header">
                            <h2 class="card__body-header-title">Maison</h2>
                        </header>
                    </div>
                </label>
                <label class="card">
                    <input class="card__input" name="flat" type="checkbox" />
                    <div class="card__body">
                        <div class="card__body-cover"><img class="card__body-cover-image" src="./assets/immeuble.jpg" /><span class="card__body-cover-checkbox">
                                <svg class="card__body-cover-checkbox--svg" viewBox="0 0 12 10">
                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                </svg></span></div>
                        <header class="card__body-header">
                            <h2 class="card__body-header-title">Appartement</h2>
                        </header>
                    </div>
                </label>

            </div>
            <div class="input">
                <div class="form__group field">
                    <input type="input" class="form__field" placeholder="Nombre de chambres" name="room" id='room' required />
                    <label for="room" class="form__label">Nombre de chambres</label>
                </div>
                <div class="form__group field">
                    <input type="input" class="form__field" placeholder="Superficie" name="area" id='area' required />
                    <label for="area" class="form__label">Superficie</label>
                </div>
                <div class="form__group field">
                    <input type="input" class="form__field" placeholder="Prix minimum" name="pricemin" id='pricemin' required />
                    <label for="pricemin" class="form__label">Prix minimum</label>
                </div>
                <div class="form__group field">
                    <input type="input" class="form__field" placeholder="Prix maximum" name="pricemax" id='pricemax' required />
                    <label for="pricemax" class="form__label">Prix maximum</label>
                </div>
                <div class="form__group field">
                    <input type="input" class="form__field" placeholder="Localisation" name="location" id='location' required />
                    <label for="location" class="form__label">Localisation</label>
                </div>
            </div>

            <button class="button_choice" type="submit">Valider mes choix</button>

        </div>
    </form>

    <div class="container_card_home">
    <?php $i = 0;
    ?>

    <?php foreach($properties as $propertie) {?>
    <?php foreach($pictures as $picture) {?>
        <?php if($propertie['type'] == 'Maison') { ?>
                <div class="card_home">
                    <a href="./index.php?action=displayHouseClient&id_property=<?= $propertie['id_property'] ?>" method="post">
                        <div class="card_header">
                            <img src="<?=$pictures[$i]['first_url']?>" alt="Image 1">
                        </div>
                        <div class="card_body_home">
                            <span class="tag tag-teal"><?= $propertie['title'] ?></span>
                        </div>
                    </a>
                </div>
        <?php break; ?>
        <?php } else { ?>
                <div class="card_home">
                    <a href="./index.php?action=displayFlatClient&id_property=<?= $propertie['id_property'] ?>" method="post">
                        <div class="card_header">
                            <img src="<?= $pictures[$i]['first_url']?>" alt="Image 1">
                        </div>
                        <div class="card_body_home">
                            <span class="tag tag-teal"><?= $propertie['title'] ?></span>
                        </div>
                    </a>
                </div>
        <?php break; ?>
        <?php } ?>
    <?php } $i++; ?>
    <?php } ?>

    </div>
</main>

</div>
</main>