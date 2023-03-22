<link rel="stylesheet" href="./views/styles/login.css">

<div class="login">
    <div class="login_container">
        <div class="brand-logo"><img src="./assets/logo_transp.png" alt=""></div>
        <div class="brand-title">Thinkimmo</div>
        <div class="inputs">
            <form action="/index.php?action=adminLogin" method="post">
                <?php if ($error == true) {
                ?> <label for="error" class="error">Email ou mot de passe incorect</label> <?php
                                                                                        }
                                                                                            ?>
                <label>EMAIL</label>
                <input type="email" placeholder="example@test.com" />
                <label>Mot de passe</label>
                <input type="password" placeholder="Min 6 charaters long" />
                <input class="btn_form_login" type="submit" value="Se connecter"></input>
            </form>
        </div>
    </div>
</div>