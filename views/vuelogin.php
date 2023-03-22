<link rel="stylesheet" href="./styles/login.css">

<div class="login">
    <div class="login_container">
        <div class="brand-logo"><img src="../assets/logo_transp.png" alt=""></div>
        <div class="brand-title">Thinkimmo</div>
        <div class="inputs">
            <label>EMAIL</label>
            <input type="email" placeholder="example@test.com" />
            <label>Mot de passe</label>
            <input type="password" placeholder="Min 6 charaters long" />
            <button type="submit">Se connecter</button>
        </div>
    </div>
</div>
<?php $contenu = ob_get_clean(); ?>
<?php require 'template.php'; ?>