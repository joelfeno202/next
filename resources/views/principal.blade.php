<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if ($logos->count() > 0)
        <title class='qu'>

            {{ $logos[0]->logo }}
        </title>
    @else
        <title>titre</title>
    @endif





    <!--logo-->
    @if (count($adresses) > 0)
        @foreach ($adresses as $adresse)
            <link class='qu' rel="shortcut icon" href="{{ asset($adresse->image) }}" type="image/x-icon">
            <!--icon-->
        @endforeach
    @else
        <link rel="shortcut icon" href="" type="image/x-icon">

    @endif
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web\css\all.css">
    <!--lien css-->
    <link rel="stylesheet" href="css/styleb.css">
</head>

<body id='tar'>

    <div class="alertd">
        <div class="headerr">
            <p class="titre">titre titre titre titre</p>
            <i class="fermerr far fa-times-circle"></i>
        </div>
        <div class="bodyy">
            <img class="zzz" style="border-radius: 5px;" width="448px" height="298px" scr=''>
            <p class="des">aaaaaaa aaaaaaa aaaaaaaa aaaaaaaaaaa aaaaaaaaaaaaa aaaaaaaaaa aaaaaaaa aaaaaaaaaaa
                aaaaaaaaaaaaa
                aaaaaaaaaa aaaaaa aaaaa</p>
        </div>
        <p class="datee">date .. </p>
    </div>

    <style>
        .alertd {
            position: relative;
            position: absolute;
            position: fixed;
            display: none;
            background-color: white;
            top: 70px;
            left: 1%;
            right: 1%;
            bottom: 50PX;
            opacity: 0;
            /*  z-index: 24;*/
            border-radius: 15PX;
            box-shadow: 3px 7px 8px #888888;
            animation: map 1s alternate;
        }

        .alertd img {
            width: 60%;
            height: 90%;
        }

        @keyframes map {
            0% {
                transform: scale(0);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .datee {
            position: absolute;
            z-index: 24;
            bottom: 5px;
            left: 5px;
            padding: 5px;
            font-family: cursive;
            font-size: 10px;
            color: gray;
            background-color: aliceblue;
        }

        .alertd .bodyy {
            display: flex;
            justify-content: space-around;
            align-items: center;
            box-shadow: 3px 7px 8px #888888;
            background-color: white;
            border-bottom-left-radius: 15PX;
            border-bottom-right-radius: 15px;
            height: 95%;
            flex-wrap: wrap;
        }

        .alertd .bodyy .des {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 35%;
            height: 90%;
            font-family: cursive;
            color: #888888;
            overflow: auto;
            scrollbar-color: rgb(71, 68, 68) transparent;
            scrollbar-width: thin;
            scroll-behavior: smooth;
            font-size: 13px;
            padding: 15px;
            background-color: wheat;
            border-radius: 15PX;

        }

        .alertd .headerr .fermerr:hover {
            transform: scale(1.1);
        }

        .alertd .headerr {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 20px;
            background-color: gray;
            padding: 15px;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            height: 5%;
        }

        .alertd .headerr p {
            margin: 5px 5px;
            font-family: cursive;
            color: white;
        }

        .alertd .headerr .fermerr {
            color: red;
            font-size: 40px;
        }

        @media screen and (max-width:509px) {
            .alertd {
                flex-direction: column;
                overflow: auto;
                scrollbar-color: rgb(71, 68, 68) transparent;
                scrollbar-width: thin;
                scroll-behavior: smooth;
                margin: 0;
                padding: 0;
            }

            .alertd .bodyy {
                flex-direction: column;
                overflow: auto;
                scrollbar-color: rgb(71, 68, 68) transparent;
                scrollbar-width: thin;
                scroll-behavior: smooth;
                width: auto;
                height: auto;
                margin: 0;
                padding: 0;
                justify-content: center;
                align-items: center;
            }
        }

        @media screen and (max-width:893px) {
            .alertd .bodyy {
                flex-direction: column;
                overflow: auto;
                scrollbar-color: rgb(71, 68, 68) transparent;
                scrollbar-width: thin;
                scroll-behavior: smooth;
            }

            .alertd .bodyy .des {
                width: 100%;
                transform: scale(0.9);
                padding: auto;
                margin: 0;
            }

            .alertd img {
                width: 100%;
                margin: 0;
                padding: 0;
            }
        }

    </style>
    <!--corp-->
    <div class="contenu">
        <div class="navigation">
            <div class="recherche">
                @if (count($adresses) > 0)
                    <a href=""> <img class='pou' src="{{ asset($adresse->image) }}" alt="next one"></a>
                @endif
                <button class="e"><i class="fas fa-search"></i></button>
                <style>
                    .recherche button {
                        height: 30px;
                        cursor: pointer;
                        width: 30px;
                        border-radius: 100%;
                        border: none;
                        margin-left: 5px;
                    }

                </style>
            </div>
            <div class="menu">
                <i class="joi fas fa-bars"></i>
                <ul>

                    <li><a name='aaa' class="active poi" href="{{ md5('car') }}"><i
                                class="fas fa-home"></i>Accueil</a>
                    </li>
                    <li><a class="po  apros" href="/contac"><i class="fas fa-book"></i>A propos</a></li>
                    <li><a class="poo e" href="/produit"><i class="fas fa-cubes"></i>Produit</a></li>
                    <li><a class="pooo e" href="/contact"><i class="fas fa-address-book"></i>Contact</a></li>
                </ul>
            </div>
            <div class="connexion">
                <svg viewBox="0 0 20 20" width="1em" height="1em"
                    class=" k a8c37x1j ms05siws hwsy1cff b7h9ocf4 rs22bh7c fzdkajry jnigpg78 odw8uiq3">
                    <path
                        d="M10 14a1 1 0 0 1-.755-.349L5.329 9.182a1.367 1.367 0 0 1-.205-1.46A1.184 1.184 0 0 1 6.2 7h7.6a1.18 1.18 0 0 1 1.074.721 1.357 1.357 0 0 1-.2 1.457l-3.918 4.473A1 1 0 0 1 10 14z">
                    </path>
                </svg>

                <ul>
                    <li class="md"><a class="a az e" href="/card">
                            @auth
                                <span class='do card_count'>0</span>
                            @else
                                <span class='do'>0</span>
                            @endauth

                            <i style="color:brown;padding:5px; border-radius:50px;"
                                class="fas fa-shopping-cart"></i></a></li>

                    <style>
                        .md {
                            box-shadow: inset 0px 0px 10px gray;
                            display: flex;
                            justify-content: space-around;
                            align-items: center;
                            padding: 5px;
                            border-radius: 15px;
                        }

                        .az {
                            position: relative;
                        }

                        .az .do {
                            position: absolute;
                            color: white;
                            background-color: red;
                            width: 18px;
                            height: 18px;
                            top: -2px;
                            right: -10px;

                            border: none;
                            border-radius: 100%;
                            display: flex;
                            justify-content: space-around;
                            align-items: center;
                        }

                        @media screen and (max-width:417px) {
                            .az .do {
                                position: static;

                            }
                        }

                    </style>


                    @auth

                        <li class='addj' style="  padding:5px;cursor:pointer;  font-size:10px; color: gray; ">
                            <img style="padding:0px 5px;width:25px; height:25px; border-radius: 100%;"
                                src="  {{ Auth::user()->image }}" alt=""><span> {{ Auth::user()->name }}</span>
                        </li>
                        <div class="admin">
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit">Déconnexion </button>
                                </form>
                            </li>
                            @if (Auth::user()->usertype == 1)
                                <li>
                                    <a href="{{ md5('dashboard') }}">Dashboard</a>
                                </li>
                            @endif
                        </div>
                    @else
                        <li style="color: brown;"><a style="color: brown;padding:5px; border-radius: 15px;"
                                class="a" href="/register">S'inscrir</a></b>
                        <li><a style="color: brown; padding:5px;border-radius: 15px" class="a" href="/login">Se
                                connecter
                            </a></li>
                    @endauth
                </ul>
            </div>
        </div>
        <style>
            .addj {
                display: flex;
                align-items: center;
                justify-content: space-between;
                border: 1px solid gray;
                border-radius: 55px;
                font-size: 13px;
                transform: scale(0.9);
                box-shadow: inset 0px 0px 10px gray;
            }

            .addj:hover {
                background: rgba(10, 10, 10, 0.1);
            }



            .admin {
                position: absolute;
                top: 60px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                display: none;
                box-shadow: 3px 5px 10px #dfc6c6;
                border-radius: 15px;

            }

        </style>
        <div class="reseau">


            <div class="rond">
                <a target="_blank" href=""><i class="fab fa-instagram"></i></a>
            </div>
            <div class="rond">
                <a target="_blank" href="https://web.facebook.com/profile.php?id=100078244592418&_rdc=1&_rdr"><i
                        class="fab fa-facebook-f"></i></a>
            </div>
            <div class="rond">
                <a target="_blank" href=""><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <!--corps-->
        <div class="corps">


            <div class="droit" id="content">

            </div>
        </div>
        <div class="fotter"><br><br><br><br>
            <div class="foot">
                <div class="maa"><br>
                    <H4>NEXT ONE</H4><br>
                    <p><a class="poi" href="/">Accueil</a></p>
                    <p><a class="za apros" href="/">Apropos</a></p>
                    <p><a class="zaa" href="/">Produits</a></p>
                    <p><a class="zaaa" href="/">Contactez-nous</a></p>
                </div>
                <script>

                </script>

                <div class="marne"><br>
                    <h4>PRODUITS</h4><br>
                    <p><a class="ze" href="/produit">Routeur</a></p>
                    <p><a class="zee" href="/produit">Switch</a></p>
                    <p><a class="zeee" href="/Point_d_accès_wifi">Point d'acces wifi</a></p>
                    <p><a class="zeeee" href="/Câblage">cablage</a></p>
                </div>
                <div class="apap"><br>
                    <h4>RESEAU SOCIAUX</h4><br>
                    <p><a target="_blank"
                            href="https://web.facebook.com/profile.php?id=100078244592418&_rdc=1&_rdr">faceboock</a></p>
                    <p><a href="">twitter</a></p>
                    <p><a href="">instagramm</a></p>
                    @if ($adresses->count() > 0)
                        <p><a class="zaaa" href="/">E-mail {{ $adresses[0]->mail }}</a> </p>
                    @endif
                </div>
                <div class="ddd"><br>
                    <h4>AUTHENTIFICATION</h4><br>


                    @auth
                        <P>{{ Auth::user()->name }}</P>
                        <p>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                {{ __('Deconnexion') }}
                            </x-dropdown-link>
                        </form>
                        </p>
                        <p style="text-decoration: underline;font-family:cursive;opacity:0.5;"> Connecter</p>
                    @else
                        <p><a href="/login">se connectr</a></p>
                        <P><a href="/register">s'incrire</a></P>
                        <p style="text-decoration: underline;font-family:cursive;opacity:0.5;">Non Connecter</p>
                    @endauth
                </div>
            </div><br><br>
            @if ($adresses->count() > 0)
                <p>Adresse:{{ $adresses[0]->adresse }}</p>
            @endif
            <p>© {{ date('Y-m-d H:i:s') }}</p>
            @if ($adresses->count() > 0)
                <p>Tél: {{ $adresses[0]->tel }} </p>
            @endif

        </div>
        <div id="loading-page">
            <div class="counter">
                <img width="100px" style="border-radius:100%" heigth="100px" src="images/MEBIB.gif" alt="">
            </div>
        </div>
        <style>
            #loading-page {
                position: absolute;
                top: 30%;
                left: 50%;
                right: 50%;
            }


            .fotter a {
                font-family: cursive;
                color: white;
                font-size: 17px;
                text-decoration: underline;
            }

            .fotter H4 {
                color: salmon;
                font-family: cursive;
                font-weight: bold;
            }

            .fotter a:hover {
                color: tomato;
            }

            .foot {
                width: 100%;
                height: auto;
                align-items: center;
                background: gray;
                text-align: center;
                flex-wrap: wrap;
                display: flex;
                justify-content: space-around;
                padding: 30px 0px;
            }

            .fotter {
                width: 100%;
                height: auto;
                align-items: center;
                background: gray;
                color: white;
                text-align: center;
                flex-wrap: wrap;
                display: flex;
                justify-content: space-around;
                padding: 30px 0px;
                flex-direction: column;
                animation: 1s plo;
                transition: 2s;
            }

            @keyframes plo {
                0% {
                    transform: translatey(500vh);
                    opacity: 0;
                }

                100% {
                    transform: translatey(0vh);
                    opacity: 1;
                }
            }


            .active {

                transition: 1s;
                border-bottom: 2px solid tomato;
                color: tomato;
            }

        </style>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/caro.js"></script>
    <script src="js/ui.js"></script>
    <script type="text/javascript">
        /*page de chargement */

        $(window).on('load', function() {
            $('.fotter').css('display', 'none')
            $("html, body").animate({
                scrollTop: "0"
            });

            var counter = 0;
            var c = 0;
            var i = setInterval(function() {

                $("#loading-page .counter h1").html(c + "%");

                counter++;
                c++;
                if (counter == 20) {
                    clearInterval(i);

                    $("#loading-page").animate({
                        'opacity': '0',
                        'z-index': '30'

                    }, 1000, function() {
                        $(this).css({
                            'display': 'none'
                        });

                    });
                }
            }, 50);
        });

        /*page pret */

        $(document).ready(function() {

            $('.apros').click(function() {
                $('.fotter').hide()

            })
            $('.e').click(function() {
                $('.fotter').show()
            })
            $('.alertd').hide()
            $('.fermerr').click(function() {

                $('.alertd').hide()
            })
            $('.droit').click(function() {
                $('.admin').hide();
            })
            $('.addj').click(function() {
                $('.admin').toggle();
            })

            loadcard()

            function loadcard() {
                $.ajax({
                    url: '/load_card',
                    method: 'GET',
                    success: function(re) {
                        $('.card_count').html(' ')
                        $('.card_count').html(re.count)

                    }

                })
            }
            /*carrousel */
            /*        $('#carrousel').caroufredsel({
                        scroll: {
                            items: 1,

                            duration: 700,
                            pauseOnHover: true
                        },
                        direction: "up",
                    });
                    $('#carrouseel').caroufredsel({
                        scroll: {
                            items: 1,

                            duration: 1000,
                            pauseOnHover: true
                        },
                        direction: "up",
                    });*/
            $('.za').click(function() {

                $('.menu li a ').removeClass("active");
                $('.po').addClass("active");

                $('#content').load('/contac');
                return false;
            });
            $('.zaa').click(function() {

                $('.menu li a ').removeClass("active");
                $('.poo').addClass("active");

                $('#content').load('/produit');

                return false;
            });
            $('.zaaa').click(function() {

                $('.menu li a ').removeClass("active");
                $('.pooo').addClass("active");

                $('#content').load('/contact');
                return false;
            });
            $('.ze').click(function() {

                $('.menu li a ').removeClass("active");
                $('.poo').addClass("active");
                var page = $(this).attr('href');
                $('#content').load(page);


                var counter = 0;
                var c = 0;
                var i = setInterval(function() {


                    counter++;
                    c++;
                    if (counter == 20) {
                        clearInterval(i);
                        $('.cc').load('/routeur');

                    }
                }, 30);







                return false;
            });
            $('.zee').click(function() {

                $('.menu li a ').removeClass("active");
                $('.poo').addClass("active");
                var page = $(this).attr('href');
                $('#content').load(page);


                var counter = 0;
                var c = 0;
                var i = setInterval(function() {


                    counter++;
                    c++;
                    if (counter == 20) {
                        clearInterval(i);
                        $('.cc').load('/switch');
                    }
                }, 30);


                return false;
            });


            $('.zeee').click(function() {

                $('.menu li a ').removeClass("active");
                $('.poo').addClass("active");
                var page = $(this).attr('href');
                $('#content').load('produit');


                var counter = 0;
                var c = 0;
                var i = setInterval(function() {


                    counter++;
                    c++;
                    if (counter == 20) {
                        clearInterval(i);
                        $('.cc').load(page);
                    }
                }, 30);


                return false;
            });
            $('.zeeee').click(function() {

                $('.menu li a ').removeClass("active");
                $('.poo').addClass("active");
                var page = $(this).attr('href');
                $('#content').load('produit');


                var counter = 0;
                var c = 0;
                var i = setInterval(function() {


                    counter++;
                    c++;
                    if (counter == 20) {
                        clearInterval(i);
                        $('.cc').load(page);
                    }
                }, 30);


                return false;
            });
            /*lien dynamique */
            $('#content').load("{{ md5('car') }}");
            $('.menu a').click(function() {

                var page = $(this).attr('href');
                $('#content').load(page);
                return false;
            });

            $('.recherche button').click(function() {
                $('#content').load('/recher');
                $('li a').removeClass("active");

                return false;
            })
            /*menu active */
            $('.menu a').click(function() {
                $('li a ').removeClass("active");
                $(this).addClass("active");

            });
            $('.connexion a').click(function() {
                $('li a ').removeClass("active");
                $(this).addClass("active");

            });
            $('.connexion .az').click(function() {
                var page = $(this).attr('href');
                $('#content').load(page);
                return false;

            });
            /*scroll */
            var act = window.innerHeight;
            var wid = window.innerWidth;

            $(window).scroll(function() {

                let top = $(this).scrollTop();

                console.log(top)
                $('.pou').css('rotate', top + 'deg');



                /*  if (top >= 475) {

                      $('.gauche').css('display', 'none')


                  }
                  if ($('#content').attr('href') == '{{ md5('car') }}') {
                      $('.gauche').css('display', 'block')
                  }
                  if (wid < 1000) {
                      $('.gauche').css('display', 'none')
                  }*/
                if (top >= act / 2.9 && wid > 699) {

                    $('.actuali img').css('opacity', 1)
                    $('.actuali .diva p').css('opacity', 1)
                    $('.actuali img').css('transform', 'rotateX(0deg)')
                    $('.actuali .diva p').css('transform', 'scale(1)')

                } else if (wid > 699) {
                    $('.actuali img').css('opacity', 0)
                    $('.actuali .diva p').css('opacity', 0)
                    $('.actuali img').css('transform', 'rotateX(180deg)')
                    $('.actuali p').css('transform', 'scale(0)')
                }


                if (top >= act && wid > 699) {
                    $('.gam p').css('transform', 'scale(1)')
                    $('.gam p').css('opacity', 1)
                    $('.gam img').css('transform', 'scale(1)')
                    $('.gam img').css('opacity', 1)
                } else if (wid > 699) {
                    $('.gam img').css('opacity', 0)
                    $('.gam img').css('transform', 'scale(0)')
                    $('.gam p').css('transform', 'scale(1.5)')
                    $('.gam p').css('opacity', 0)
                }




                if (top >= act + 570 && wid > 699) {
                    $('.stra p').show();
                    $('.stra img').css('opacity', 1).css('box-shadow', ' 0px 0px 20px gray').css(
                        'border-radius', '50%')
                } else if (wid > 699) {
                    $('.stra p').hide();
                    $('.stra img').css('opacity', 0)
                }

                $('.fotter').show()

                if (top >= act + 1080 && wid > 699 && top < act + 3450) {

                } else if (wid > 699) {

                }


                if (top > act + 1450 && wid > 699) {
                    $('.op2').css('transform', 'rotate(0deg)')
                    $('.op3').css('transform', 'rotate(0deg)')
                    $('.op2').css('opacity', 1)
                    $('.op3').css('opacity', 1)
                } else if (wid > 699) {
                    $('.op2').css('transform', 'rotate(90deg)')
                    $('.op3').css('transform', 'rotate(-90deg)')
                    $('.op2').css('opacity', 0)
                    $('.op3').css('opacity', 0)
                }

            });


            if (wid < 809) {
                $('.navigation .menu a').click(function() {
                    $('.navigation .menu ul').hide()
                })

                $('.navigation .menu .joi').click(function() {
                    $('.navigation .menu ul').toggle()

                })
            }
            if (wid < 417) {
                $('.navigation .menu .joi').click(function() {
                    $('.navigation .connexion ul').hide()
                })
            }
            if (wid < 417) {
                $('.navigation .connexion a').click(function() {
                    $('.navigation .connexion ul').hide()
                })
                $('.navigation .connexion .k').click(function() {
                    $('.navigation .connexion ul').toggle()
                    $('.navigation .menu ul').hide()
                })
            }
        });
    </script>
</body>

</html>
