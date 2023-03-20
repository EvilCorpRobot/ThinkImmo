<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../views/styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Responsive Site Navbar</title>
</head>

<body>
    <header>
        <div class="navbar">

            <div class="logo">
                <img src="../assets/logo_transp.png" alt="logo de thinkimmo"><a href="#">Thinkimmo</a></div>
            <ul class="links">
                <li><a href="hero">Maison</a></li>
                <li><a href="about">Appartement</a></li>
                <li><a href="services">Vente</a></li>
                <li><a href="contact">Location</a></li>
            </ul>
            <a href="#" class="action_btn">Se connecter</a>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        <div class="dropdown_menu">
            <li><a href="hero">Maison</a></li>
            <li><a href="about">Appartement</a></li>
            <li><a href="services">Vente</a></li>
            <li><a href="contact">Location</a></li>
            <li><a href="#" class="action_btn">Se connecter</a></li>
        </div>
    </header>

    <main>
    </main>
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