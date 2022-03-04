<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/next_one1.jpg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Next One</title>




    <link rel="stylesheet" href="bootstrap-4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web\css\all.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="contenu">
        <div class="navv">
            <div class="logo">
                <p class="sote"><img src="images/next_one1.jpg" alt=""></p>
                <span class="lo">
                    <p> <input type="text" id='recherche' placeholder='Recherche sur Next One...'></p>
                    <p><button id='rech'><i class="fas fa-search"></i></button></p>
                </span>
            </div>
            <div class="menu ">
                <nav>
                    <ul class="main">
                        <li>
                            <a href="/contac"><i class="fas fa-home"></i> ACCUEIL</a>

                        </li>
                        <li>
                            <a><i class="fas fa-book"></i> A PROPOS</a>
                            <ul class="sub">
                                <li><a href="/nextone">NEXT ONE</a></li>
                                <li><a href="/somme">QUI SOMMES-NOUS?</a></li>
                                <li><a href="/service">SERVICES ET ATOUTS</a></li>

                            </ul>
                        </li>
                        <li>
                            <a><i class="fas fa-cubes"></i> PRODUITS</a>
                            <ul class="sub">
                                <li><a href="">ARCHITECTURE RESEAU</a></li>
                                <li><a href="">INFRASTRUCTURE IT & SECURITE</a></li>
                                <li><a href="">COMMUNICATIONS UNIFIEES</a></li>
                                <li><a href="">EQUIPEMENT</a></li>
                                <li><a href="">SYSTEMES ANNEXES</a></li>
                                <li><a href="/contact">AUTRES EQUIPEMENTS</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/contact"><i class="fas fa-address-book"></i> CONTACT</a>

                        </li>
                    </ul>
                </nav>

            </div>
            <div class="reseau">
                <ul>
                    <li><a href=""><i class="fas fa-shopping-cart"></i></a></li>
                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter"></i></a></li>

                </ul>
            </div>
            <i class="tsipika fas fa-align-justify"></i>
            <div class="login">
                <ul>
                    <li id='jo'> <a href="{{ route('login') }}">Se connecter</a></li>
                </ul>
                <ul>
                    <li> <a href="{{ route('register') }}">S'inscrire</a></li>
                </ul>

            </div>
        </div>

        <div class="droit" id="content">

        </div>
        <div class="gauche">
            <div id='caro1'>

            </div>
            <div id="caro2">

            </div>

        </div>
        <div class="footer">
            <div class="l">
                <h1>UN EXEMPLE DE REUSSITE DANS LE DOMAINE DE LA VOIX</h1>
                <img src="images/air.png" alt="">
                <img src="images/bmoi.png" alt="">
                <img src="images/iscam.jpg" alt="">
                <img src="images/star.jpg" alt="">
                <img src="images/telma.png" alt="">

            </div>

            <div class="bas">
                <p><i class="fas fa-copyright"></i>2021-2022 NEXT ONE</p>
                <p> Adresee: Villa Fanambinitsoa - 2eme etage - Près Cenam-67 Ha Sud Antananarivo 101 - Madagascar</p>
                <p>E-mail: next-one@next-one.mg </p>
                <p>tel: 22 221 23 - 034 11 029 46</p>
            </div>
        </div>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                /*menu deroulant */
                $('.main li').hover(
                    function() {
                        $('>ul.sub', this).slideDown(500);
                    },
                    function() {
                        $('>ul.sub', this).slideUp(0.1);
                    }
                );
                /*dropdown */
                $('.tsipika').click(function() {
                    $('.login').toggle();
                });
                /*lien dynamique */
                $('#content').load('contac');
                $('.main a').click(function() {

                    var page = $(this).attr('href');
                    $('#content').load(page);
                    return false;
                });
                /*classe active */
                $('.main a').click(function() {
                    $('li a').removeClass("active");
                    $(this).addClass("active");
                });

                $('#caro1').load('car');
                /*carosel */


            });
        </script>
    </div>
</body>

</html>