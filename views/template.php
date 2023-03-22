<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./views/styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Thinkimmo</title>
</head>

<body>
    <header>
        <div class="navbar">

            <div class="logo">
                <img src="./assets/logo_transp.png" alt="logo de thinkimmo">
                <h2>Thinkimmo</h2>
            </div>

            <a href="#" class="action_btn">Connexion</a>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        <div class="dropdown_menu">
            <li><a href="#" class="action_btn">Se connecter</a></li>
        </div>
    </header>

    <main>
        <div id="contenu">
            <?= $contenu ?>
        </div>
    </main>

    <footer>
        <div class="footer-top">
            <div class="container text-center">
                <div class="row align-items-start">
                    <div class="col">
                        <div class="widget footer_widget">
                            <h5 class="footer-title">Adresse</h5>
                            <div class="gem-contacts">
                                <div class="gem-contacts-item gem-contacts-address">Bureau principal :<br> 65 Rue Ordener, 75018 Paris
                                </div>
                                <div class="gem-contacts-item gem-contacts-phone"><i class="fa fa-phone" aria-hidden="true"></i> Téléphone: 01 53 38 28 00</div>

                                <div class="gem-contacts-item gem-contacts-address mt-2">Bureau de Grenoble :<br> 34 Av. de l'Europe Bâtiment D, 38100 Grenoble</div>
                                <div class="gem-contacts-item gem-contacts-phone"><i class="fa fa-phone" aria-hidden="true"></i> Phone: 04 38 45 49 56</div>

                            </div>
                        </div>

                    </div>
                    <div class="col">

                        <div class="wrapper centered">
                            <article class="letter">
                                <div class="side">
                                    <h2>Contactez-nous</h2>
                                    <p>
                                        <textarea class="line_area" placeholder="Votre message"></textarea>
                                    </p>
                                </div>
                                <div class="side">
                                    <p>
                                        <input type="text" placeholder="Votre nom" class="line_area">
                                    </p>
                                    <p>
                                        <input type="email" placeholder="Votre email" class="line_area">
                                    </p>
                                    <p>
                                        <button id="sendLetter">Envoyer</button>
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2813.3510368532816!2d5.730049915727814!3d45.15974096172753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478af5217cc07103%3A0x91b3b3f2fa58b3b4!2sSimplon%20Grenoble%20Alpes!5e0!3m2!1sfr!2sfr!4v1679315911216!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3">
                            <div class="footer-site-info">2023 © CDA Fullstack simplon, fait par Thibaud, Vianney et Théo</div>
                        </div>


                        <div class="col-md-3">
                            <div id="footer-socials">
                                <div class="socials inline-inside socials-colored">

                                    <a href="#" target="_blank" title="Facebook" class="socials-item">
                                        <i class="fab fa-facebook-f facebook"></i>
                                    </a>
                                    <a href="#" target="_blank" title="Twitter" class="socials-item">
                                        <i class="fab fa-twitter twitter"></i>

                                    </a>
                                    <a href="#" target="_blank" title="Instagram" class="socials-item">
                                        <i class="fab fa-instagram instagram"></i>
                                    </a>
                                    <a href="#" target="_blank" title="YouTube" class="socials-item">
                                        <i class="fab fa-youtube youtube"></i>
                                    </a>
                                    <a href="#" target="_blank" title="Telegram" class="socials-item">
                                        <i class="fab fa-telegram telegram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </footer>


    <script>
        const toggleBtn = document.querySelector('.toggle_btn')
        const toggleBtnIcon = document.querySelector('.toggle_btn i')
        const dropDownMenu = document.querySelector('.dropdown_menu')

        toggleBtn.onclick = function() {
            dropDownMenu.classList.toggle('open')
            const isOpen = dropDownMenu.classList.contains('open')

            toggleBtnIcon.classList = isOpen ?
                'fa-solid fa-xmark' :
                'fa-solid fa-bars'
        }
    </script>
</body>

</html>