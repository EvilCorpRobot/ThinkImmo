
<link rel="stylesheet" href="./styles/clientHome.css">
<div class="toggle_button_content">
    <div class="toggle_container">
        <ul class="links">
            <input type="checkbox" id="cb1" /><label for="cb1">Maison</label>
            <input type="checkbox" id="cb2" /><label for="cb2">Appartement</label>
            <input type="checkbox" id="cb3" /><label for="cb3">Vente</label>
            <input type="checkbox" id="cb4" /><label for="cb4">Location</label>

        </ul>
        <div class="header_content">
            <img src="./assets/ThinkImmoBackgroundImage.jpg" alt="Image de recherche">
        </div>
        <div class="Card">
            <div class="CardInner">
                <label>Localisation</label>
                <div class="container">
                    <div class="Icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#657789" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                            <circle cx="11" cy="11" r="8" />
                            <line x1="21" y1="21" x2="16.65" y2="16.65" />
                        </svg>
                    </div>
                    <div class="InputContainer">
                        <input placeholder="Choisissez votre ville" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $contenu = ob_get_clean(); ?>
<?php require 'template.php'; ?>