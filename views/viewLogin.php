<link rel="stylesheet" href="./views/styles/login.css">


<div class="container">
    <div class="brand-logo"><img src="../assets/logo_transp.png" alt=""></div>
    <div class="brand-title">Thinkimmo</div>
    <div class="inputs">
        <form action="/index.php?action=adminLogin" method="post">
            <?php if($error == true) {
                ?> <label for="error" class="error">Email ou mot de passe incorect</label> <?php
            }
            ?>
            <label>EMAIL</label>
            <input type="email" name="email" placeholder="example@test.com" />
            <label>Mot de passe</label>
            <input type="password" name="password" placeholder="Min 6 charaters long" />
            <input type="submit" value="Se Connecter">
        </form>
    </div>
</div>