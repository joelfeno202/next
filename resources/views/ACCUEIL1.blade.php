<div class="actual">
    <!--   <i class="joi fas fa-bars"></i>-->

    <div class="carol">
        <div class="gauche">
            <!-- <p class="texte">NOUVEAUTE</p>-->
            <style>
                p.texte:hover {
                    box-shadow: 0px 0px 20px #f58080;
                }

                .conu:hover {
                    box-shadow: 0px 0px 20px #f58080;
                }

                .conuu:hover {
                    box-shadow: 0px 0px 20px #f58080;
                }

            </style>
            <div class="conu">

                <div class="carrousel" id="carrousel">


                    @if (count($produits) > 0)
                        @foreach ($produits as $produit)
                            <a href="voir-produit-routeur/{{ $produit->id }}">

                                <img src="{{ $produit->image }}" alt="">
                            </a>
                        @endforeach
                    @else
                        <a>
                            <p class="info">info 1</p>
                            <img src="{{ asset('images/index.jpg') }}" alt="">
                        </a>
                    @endif

                </div>
            </div>
            <br>
            <!--  <p class="texte image1">ACTUALITE</p>

            <div class="conuu">

                <div class="carrouseel" id="carrouseel">
                    @if (count($actu) > 0)
@foreach ($actu as $produit)
<a>
                        <p style="text-transform: uppercase;" class=" info">{{ $produit->titre }}</p>
                        <img class="image1" src="{{ $produit->image }}" alt="">
                    </a>
@endforeach
@else
<a href="2">
                        <p class="info">info 2</p>
                        <img src="{{ asset('images/index.jpg') }}" alt="">
                    </a>
@endif



                </div>
            </div>-->
        </div>
        <div id="carousell">
            @if ($posts->count() > 0)
                @foreach ($posts as $post)
                    <img class='gcaro' src="{{ asset($post->image) }}" width="900px" height="450px" />
                @endforeach
            @endif
        </div>
        <div class="jus">
            @if ($adresses->count() > 0)
                <p> <i class="fas fa-map-marker-alt"></i> {{ $adresses[0]->adresse }}</p>
            @endif
            <hr>
            @if ($adresses->count() > 0)
                <p><i class="fas fa-envelope"></i> {{ $adresses[0]->mail }} </p>
            @endif

            <hr>
            @if ($adresses->count() > 0)
                <p><i class="fas fa-phone-volume"></i> {{ $adresses[0]->tel }} </p>
            @endif
            <hr>
            @if ($adresses->count() > 0)
                <p>{{ date('Y-m-d ') }}</p>
            @endif
        </div>
        <a class='by' href="/nos">Nos Services</a>
    </div>
    <style>
        .by {
            position: absolute;
            bottom: 10vh;
            left: 0;
            right: 0;
            width: 50vw;
            background: brown;
            padding: 10px;
            font-family: cursive;
            box-shadow: 0px 0px 20px gray;
            color: white;
            margin: auto;
            z-index: 23;
            border-radius: 15px;
            transition: 1s;

            animation: mll 1s alternate infinite;
        }

        @keyframes mll {
            0% {
                transform: scalex(1);
                box-shadow: 0px 0px 20px gray;
            }

            100% {
                transform: scalex(0.9);
                box-shadow: 0px 0px 20px tomato;
            }
        }

        .by:hover {

            box-shadow: 0px 0px 20px tomato;
        }

        .jus {
            width: 200px;
            position: absolute;
            top: 5%;
            right: 5%;
            color: #f58080;
            font-family: cursive;
            font-size: 13px;
            background-color: rgba(236, 231, 223, 0.5);
            padding: 5px;
            border-radius: 5px;
            box-shadow: 0px 0px 20px gray;
            z-index: 23;
            transition: 1s;
            transform: scale(0.8);
            animation: ml 2s;
        }

        @keyframes ml {
            0% {
                transform: scale(0);
            }

            100% {
                transform: scale(0.8);
            }
        }

        .jus i {
            color: #f58080;
        }

        .jus p {
            margin: 10px 5px;
            color: gray;
        }

        .jus hr {
            color: gray;
        }

        .jus:hover {
            box-shadow: 0px 0px 20px tomato;
            transform: scale(1);
            background: white;
        }

        .carol {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .gauche {
            z-index: 23;
            position: absolute;
            top: -15px;
            left: -200px;
        }

    </style>
    <br><br>
    @if ($logos->count() > 0)
        <h3>{{ $logos[0]->logo }}</h3>
        <div class="slogon">
            @foreach ($logos as $logo)
                <h6>{{ $logo->slogon }}</h6>
            @endforeach
    @endif
</div>
<h4>Actualités</h4>
<br>
<div class="actuali">
    <span style='color:brown; font-size:50px; border-radius:50%; ' class="left" width="30px" height="30px"><i
            class="fas fa-angle-left"></i></span>
    <span style='color:brown; font-size:50px; border-radius:50%; ' class="right" width="70px" height="70px"><i
            class="fas fa-angle-right"></i></span>
    <div id="ccarousell">
        @if (count($actu) > 0)
            @foreach ($actu as $produit)
                <div class="diva product_data">
                    <p class="titre">{{ $produit->titre }}</p>
                    <img src="{{ $produit->image }}" />
                    <p class="desc" style="display:none">{{ $produit->description }}</p>
                    <p class="datet" style="display:none">{{ $produit->created_at }}</p>
                </div>
            @endforeach
        @else
        @endif

    </div>
</div>
<script>
    $('.diva img').click(function() {
        var titre = $(this).closest('.product_data').find('.titre').html()
        var desc = $(this).closest('.product_data').find('.desc').html()
        var date = $(this).closest('.product_data').find('.datet').html()
        var img = $(this).closest('.product_data').find('img').attr('src')
        $('.alertd').show().css('opacity', '1')
        $('.alertd').css('z-index', '24')
        $('.alertd .titre').html(titre)
        $('.alertd .des').html(desc)
        $('.alertd .zzz').attr('src', img)
        $('p.datee').html(date)




    })
    $('#carrousel').caroufredsel({
        scroll: {
            items: 1,
            fx: 'fade',
            duration: 2500,
            pauseOnHover: true
        },


    });
    $('#carrouseel').caroufredsel({
        scroll: {
            items: 1,

            duration: 1000,

            pauseOnHover: true
        },
        direction: "up",

    });
</script>
<style>
    #ccarousell {
        width: 100%;
    }

    .actuali {

        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        width: 100%;
        padding: 5px;
        height: 300px;
        background-color: inherit;

        transition: 3s;
    }


    .actuali .diva {
        position: relative;
        display: block;
        float: left;
        width: 290px;
        height: 300px;
    }

    .actuali .diva img {
        width: 280px;
        height: 300px;
    }

    @media screen and (max-width:651px) {




        .actuali .diva {
            width: 100vw;
        }

        .actuali .diva img {
            width: 100vw;
        }

        .actuali {
            padding: 0;
        }

    }


    .actuali .diva p {
        position: absolute;
        z-index: 9;
        top: 20px;
        right: 8%;
        left: 8%;
        text-align: center;
        text-transform: uppercase;
        font-weight: bold;
        font-family: cursive;
        font-size: 13px;
        color: #f58080;
        background-color: rgba(204, 192, 175, 0.4);
        padding: 5px;
        border-radius: 10px;
        transition: 4s;
        transform: scale(0);
    }

    .actuali .left {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 5%;
        z-index: 9;
        cursor: pointer;

        height: 300px;
        width: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .actuali .right {
        position: absolute;
        top: 0%;
        right: 5%;
        cursor: pointer;
        z-index: 9;
        height: 300px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 300px;
        width: 50px;
    }




    .actuali img {
        border-radius: 15px;
        margin-right: 5px;

        transition: 3s;

        cursor: pointer;
    }

    .actuali {}

</style>
<script>
    $("html, body").animate({
        scrollTop: "0"
    });
    $('.image1').click(function() {




        $("html, body").animate({
            scrollTop: "481"
        });

    })
    $('#ccarousell').carouFredSel({


        items: 4,
        prev: ".left",
        next: ".right",
        scroll: {
            items: 4,
            duration: 1500,
        }
    });
    var act = window.innerHeight;
    var wid = window.innerWidth;

    $(window).scroll(function() {
        if (wid <= 651) {
            $('#ccarousell').carouFredSel({

                auto: false,
                items: 1,
                prev: ".left",
                next: ".right",
                scroll: {
                    items: 1,
                }
            });
        }
    })
</script>
<br>
<h4 style=" background:white;">Gammes de téléphones fixes
    Série 8 & 9</h4>
<br>
<div class='gam'>
    <div class="try">
        <img class='img' src="{{ asset('images/phon.jpg') }}" alt="">
        <div class="avt">
            <p class="av">AVANTAGES</p>
            <div class="fd">
                <P>- Confrt visuel : écran extra large et navigation rapide</P>
                <p> - Confort audio : audio HD sur combiné et main libre (HP)</p>
                <p>- Navigation rapide et consultation annuaire facile</p>
                <p>- Toute la téléphonie pro + tranfert sans coupure</p>
                <p>- Un poste moderne avec des fonctionnalité de communication avancées</p>
            </div>
        </div>
    </div>
    <div class="fry">
        <img class='fry1' src="{{ asset('images/seri.jpg') }}" alt=""> <img class='fry2'
            src="{{ asset('images/azer.jpg') }}" alt="">
    </div>
</div>
<br>
<style>
    .gam .av {
        font-family: cursive;
        color: tomato;
        text-shadow: 0px 0px 20px tomato;

    }

    .gam .fd {
        text-align: left;
        color: brown;
        font-weight: bolder;
        font-family: cursive;
        font-style: oblique;
    }

    .gam {
        background: white;
        height: 80vh;
        border-radius: 15px;
        box-shadow: 0px 0px 20px gray;
        overflow: hidden;
        background: url('images/2560px-Alcatel_Lucent_Logo.svg.png');
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-around;
    }

    .gam .try {
        display: flex;
        align-items: center;
        justify-content: space-around;
        padding: 10px;
        flex-wrap: wrap;
        width: 100%;

    }

    .gam .try img {
        width: 150px;
        height: 15 90px;
        border-radius: 50% 50% 0 50%;
        box-shadow: 0px 0px 20px gray;
    }

    .gam img {

        transition: 2s;
    }

    .gam img:hover {

        transform: rotate(30deg);
        box-shadow: 0px 0px 20px brown;
    }

    .gam .fry1 {
        width: 150px;
        height: 150px;
        border-radius: 50% 0 50% 50%;
        box-shadow: 0px 0px 20px gray;
    }

    .gam .fry2 {
        box-shadow: 0px 0px 20px gray;
        border-radius: 0 50% 50% 50%;
        width: 150px;
        height: 150px;
    }

    .gam .fry {
        display: flex;
        align-items: center;
        justify-content: space-around;
        padding: 10px;
        flex-wrap: wrap;
        width: 100%;
    }

    .gam p {
        transition: 2s;
    }

</style>
<h4 style=" background:white;"> Une
    stratégie
    centré sur la satisfaction client</h4>
<br>
<div class="stra">
    <p class="p1"> . Des solutions de communication claires</p>
    <P class="p2"> . Une offre globale de solutions et de servise de communication aux entreprises</P>
    <img src="{{ asset('images/vous.png') }}">
    <p class="p3"> . Des solutions et des services sisant à assurer le développement et à améliorer
        l"efficacité
        des
        entreprises
        ,administration et collectivités locales</p>
    <p class="p4"> . Une entreprise de services proche de vous</p>
    <p class="p5"> . Un intégrateur indépendant des constructeurs proposant les meilleures solutions
        technologiques
        développées
        par des partenaires de renom </p>
</div>
<br>

<h4 style="  background: linear-gradient(60deg, rgba(241, 241, 241, 0.479), rgba(138, 138, 228, 0.014));">Un
    exemples de réussite dans le domaine de la voix</h4>
<br>
<div class="clai">

    <div class="dr">
        <div class="ds">
            <p style="color:gray;font-size:18px">Voix / IP Communication</p>
            <p> - Dépoiement des autocoms de marque ALCATEL OMNIPCX OFFICE connect (OXO) et leurs applications;</p>
            <p> - Déploiement des autocoms de marque ALCATEL OMNIPCX ENTREPRISE (OXE) et leurs applications;</p>
            <p> - Installation téléphonie sur IP (ALCATEL & XIVO)</p>
        </div>
        <div class="dz">
            <img src="{{ asset('images/star.jpg') }}">
            <img src="{{ asset('images/telma.png') }}">
            <img src="{{ asset('images/iscam.jpg') }}">
            <img src="{{ asset('images/holcim.jpg') }}">
            <img src="{{ asset('images/air.png') }}">
            <img src="{{ asset('images/bmoi.png') }}">

        </div>

    </div>
</div>
<br>

<h4 style="  background: linear-gradient(60deg, rgba(231, 17, 17, 0.034), rgba(22, 22, 236, 0.014));">Des challenges
    pragmatiques</h4>
<br>
<div class="chall">
    <div class="op">

        <div class="op2 op21">
            <p> . Optimiser vos opérations</p>
            <p> - Réduire vos coûts</p>
            <p> - Sécuriser vos communications</p>
            <p> - Faciliter les opérations quotidiennes</p>
        </div>
        <div class="op1 x">
            <img src="{{ asset('images/indsex.jpg') }}" width='100%' height='100%' alt="">
        </div>
        <div class="op3 op22">
            <p> - Infrastructure IP</p>
            <p> - Communication IP</p>
            <p> - Intégration , Overture , Sécurité </p>
        </div>

    </div>

    <div class="op">

        <div class="op2 op24">
            <p> . L'exigence et l'efficacité de vos collaborations</p>
            <p> - Un environnement ergonomique</p>
            <p> - Efficacité n'importe ou</p>
            <p> - Collaborer</p>
        </div>
        <div class="op1 y">
            <img src="{{ asset('images/go.jpg') }}" width='100%' height='100%' alt="">
        </div>
        <div class="op3 op24">
            <p> - Communication mobile internet/externe</p>
            <p> - Collaboration multimédia</p>
            <p> - Intégration application métier </p>
        </div>

    </div>

    <div class="op">

        <div class="op2 op25">
            <p> . Améliorer vos relations clients</p>
            <p> - Accueillir vos clients</p>
            <p> - Avoir l'assurance</p>
            <p> - Générer plus de revenus</p>
        </div>
        <div class="op1 z">
            <img src="{{ asset('images/imhyages.jpg') }}" width='100%' height='100%' alt="">
        </div>
        <div class="op3 op25">
            <p> - Rapidité de la réponse</p>
            <p> - Fidélisation client : résolution au premier appel</p>
            <p> - Satisfaction client : personnalisation </p>
        </div>

    </div>
</div>
<br><br><br><br>
</div>
<style type="text/css">
    .chall {

        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        width: 100vw;
        flex-wrap: wrap;
        overflow: hidden;
        height: auto;
    }

    .op {
        display: flex;
        justify-content: space-around;
        align-items: center;
        width: 100%;
        height: 200px;
        margin: 20px 0px;
        flex-wrap: wrap;
        transition: 10s;
    }

    .x {}

    .y {}

    .z {}

    .op1 {
        width: 25%;
        height: 100%;
        overflow: hidden;
        border-radius: 20px 0 20px 0;
        box-shadow: inset 0px 0px 20px gray;

    }

    .op2 {
        display: flex;
        flex-wrap: wrap;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        background: white;
        height: 100%;
        width: 30%;
        box-shadow: inset 0px 0px 20px gray;
        border-radius: 20px 0 20px 0;
        font-family: cursive;
        transition: 2s;

    }

    .op2 p {
        padding: 10px 0px;
        color: burlywood;
        font-family: cursive;
        font-size: 13px;

    }

    .op3 p {
        padding: 10px 0px;
        font-family: cursive;
        color: gray;
        font-size: 13px;
    }

    .op3 {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        flex-wrap: wrap;
        background-color: white;
        height: 100%;
        box-shadow: inset 0px 0px 20px gray;
        width: 30%;
        font-size: 13px;
        border-radius: 20px 0 20px 0;
        transition: 2s;
    }

    .op21 {
        color: skyblue;
        background: white;
        font-size: 13px;
    }

    .op22 {

        background: white;
    }

    .op24 {
        color: greenyellow;
        background: white;
    }

    .op25 {
        background: white;
    }

    .clai {
        display: flex;
        flex-wrap: wrap;

        align-items: center;
        justify-content: center;

    }

    .clai .dr {
        background: white;
        padding: 0 10px;
        border: none;
        border-radius: 5px;
        box-shadow: inset 0px 0px 20px gray;

        border-radius: 15px;
        transition: 3s;
        height: 90vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        flex-wrap: wrap;
        justify-content: space-around;
        width: 98%;
        background-size: contain;
        text-align: justify;
    }

    .dz {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-around;
    }

    .ds p {
        font-family: cursive;
    }

    .ds {
        box-shadow: inset 0px 0px 20px #888888;
        padding: 10px;
        border-radius: 20px 0 20px 0;

    }

    .clai img {
        box-shadow: 0px 0px 20px #888888;
        border: none;
        border-radius: 100%;
        height: 150px;
        width: 150px;
        margin: 7px;
    }



    .stra {
        position: relative;
        background-color: white;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0px 0px 20px gray;
        background: url('images/reseaux-sociaux.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        transition: 2s;
        height: 80vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    @media screen and (max-width:675px) {
        .op {
            height: auto;
        }

        .gam {
            background: none;
            height: auto;
        }

        .op img {
            width: 50%;
            height: 50%;

        }

        .op p {
            transform: scale(0.7);
        }

        .op1,
        .op2,
        .op3,
        .op4 {
            width: 100%;
        }

        h4 {
            font-size: 11px;

        }

        .clai {
            justify-content: center;
        }

        .clai .dr {
            height: auto;
        }

        .clai .dr img {}


        .stra img {
            transform: scale(0.7);
        }


        .try img,
        .fry img,
        .try p {
            transform: scale(0.7);
        }

        .stra {
            padding: 5px;
            position: static;
            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-direction: column;
            height: auto;
        }

        .stra img {
            border-radius: 50%;
            box-shadow: 0px 0px 20px gray;
            width: 100px;
            height: 100px;

        }

        .stra P {

            position: static;
            transform: scale(0.6);
        }

        .stra .p1,
        .stra .p2,
        .stra .p3,
        .stra .p4,
        .stra .p5 {
            position: static;
            top: 0;
            left: 0;
            right: 0;
            padding: 5px;
        }
    }

    .stra P {
        color: orange;
        font-family: cursive;
        position: absolute;
        width: 300PX;
        font-weight: 55px;
        padding: 5px;
        border-radius: 15px;
        background-color: white;
        box-shadow: inset 0px 0px 10px gray;
    }

    .stra .p1 {
        top: 5%;
        left: 38vw;

        font-size: 17px;


    }

    .stra .p2 {
        top: 20%;
        left: 5%;
        animation: amm2 3s;

    }

    .stra .p3 {
        top: 50%;
        left: 5%;
        animation: amm3 3s;

    }

    .stra .p4 {
        right: 5%;
        top: 20%;
        animation: amm4 3s;

    }

    .stra .p5 {
        top: 50%;
        right: 5%;
        animation: amm5 3s;

    }

    @keyframes amm2 {
        0% {
            top: 5%;
            left: 32%;
            opacity: 0;
        }

        100% {
            opacity: 1;
            top: 20%;
            left: 5%;
        }
    }

    @keyframes amm3 {
        0% {
            top: 5%;
            left: 32%;
            opacity: 0;
        }

        100% {
            opacity: 1;
            top: 50%;
            left: 5%;
        }
    }

    @keyframes amm4 {
        0% {
            top: 5%;
            right: 32%;
            opacity: 0;
        }

        100% {
            opacity: 1;
            right: 5%;
            top: 20%;
        }
    }

    @keyframes amm5 {
        0% {
            top: 5%;
            right: 32%;
            opacity: 0;
        }

        100% {
            opacity: 1;
            right: 5%;
            top: 50%;
        }
    }


    .ima {
        overflow: hidden;
        position: relative;
        height: 300px;

    }

    .ter {
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        color: gray;
        text-transform: uppercase;
        font-weight: bold;

    }


    .ima .infos {
        position: absolute;
        height: 300px;
        animation: amin 3s alternate;
        font-family: cursive;
    }

    @keyframes amin {
        0% {
            top: -500px;
        }

        100% {
            top: 0;
        }
    }

    .ima .infos p {
        display: flex;
        align-items: center;
        color: gray;
        font-size: 13px;
        justify-content: space-around;
        height: 300px;

        font-family: cursive;
        transform: scale(0.5);
        transition: 2s;
    }



    .card {

        margin: 35px 0px;

        width: 450px;

        height: 300px;
        cursor: pointer;
    }

    .card img {
        width: 100%;
        height: 100%;
    }


    .card img:hover {
        box-shadow: yellow;
    }

    .slogon {

        position: absolute;
        top: 30vh;
        left: 0;
        right: 0;
        font-family: cursive;

        color: black;
        font-size: 35px;
        width: 57vw;
        flex-wrap: wrap;
        padding: auto;
        font-weight: bold;
        /* animation: mia 5s infinite alternate;*/

        margin: auto;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: space-around;
    }

    .slogon h6 {
        color: white;
        animation: mia 15s infinite;
    }

    @keyframes mia {
        0% {
            transform: translatex(-50vw);
            text-shadow: 0px 0px 20px gray;

        }

        40% {
            transform: translatex(5vw);
            text-shadow: 0px 0px 20px red;

        }

        50% {
            text-shadow: 0px 0px 20px gray;
        }

        60% {
            text-shadow: 0px 0px 20px red;
        }

        70% {
            text-shadow: 0px 0px 20px gray;
        }

        80% {
            transform: translatex(5vw);
            text-shadow: 0px 0px 20px red;

        }

        100% {
            transform: translatex(50vw);
            text-shadow: 0px 0px 20px gray;

        }
    }

    .actual h3 {
        position: absolute;
        top: 40px;
        left: 0;
        right: 0;
        font-family: cursive;
        color: brown;
        text-shadow: 0px 0px 20px brown;
        font-size: 50px;
        text-transform: uppercase;
        font-style: italic;
        animation: 4s titre;
    }

    @keyframes titre {
        0% {
            opacity: 0.5;
            transform: scale(1.9);
            transform: translateY(100vh);
        }

        100% {
            opacity: 1;
            transform: scale(1);
            transform: translateY(0);
        }
    }

    .carol {

        width: 100vw;


        margin: auto;
        box-shadow: 0px 0px 20px gray;

    }

    .actual {
        position: relative;
        width: 100%;

        padding: auto;
        height: auto;
        margin: auto;


        padding: 0px;

        animation: anim 2s alternate;

    }

    .actual h1 {
        color: #f58080;
        text-align: center;
        margin: auto;
        font-family: cursive;
    }

    .actual H4 {
        background-color: white;
        font-family: cursive;
        box-shadow: inset 0px 0px 20px gray;
        color: gray;
        padding: 5px;
        border-radius: 15px;
        font-size: 20px;
    }


    .actual h5 {
        color: gray;
        font-family: cursive;
    }

    @media screen and (max-width:900px) {
        .actual {
            margin: 0;
            padding: 0;
        }

        .actual h6 {

            font-size: 15px;

        }
    }

    @media screen and (max-width:500px) {
        .actual h3 {
            position: absolute;
            top: 40px;
            left: 0;
            right: 0;
            font-family: cursive;
            color: red;
            font-size: 30px;


        }



        .slogon {
            top: 100px;
        }

        .actual h6 {

            font-size: 10px;

        }

        .stra img {
            margin-top: 100px;
            border-radius: 50%;
            box-shadow: 0px 0px 20px gray;
            width: 300px;
            height: 300px;
            opacity: 1;
            transition: 3s;
        }
    }

</style>
<script type="text/javascript">
    var val = $('.stra').css('height')
  $('.by').click(function () {
    var page = $(this).attr('href');
        $('#content').load(page);
        return false;
  })
    $('.conu a').click(function() {
        $('.menu li a ').removeClass("active");
        $('.poo').addClass("active");
        var page = $(this).attr('href');
        $('#content').load('/produit');


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
    var hn = $('.navigation').css('height')
    var hw = window.innerHeight
    var ww = window.innerWidth
    var hc = hw - 60

    $('.carol').css('height', hc)
    $('.gcaro').css('height', hc)
    $('.gcaro').css('width', ww)
    // Using custom configuration
    $('#carousell').carouFredSel({
        items: 1,

        scroll: {

            responsive: true,
            duration: 2000,
            fx: 'fade',
        }
    });
    /*
    $('#carous').carouFredSel({
        items: 1,

        scroll: {

            responsive: true,
            duration: 1000,

        }
    });
    */
    $('.card').hover(
        function() {
            $('.ima .infos p', this).css('transform', 'scale(1.0)')

        },
        function() {
            $('.ima .infos p', this).css('transform', 'scale(0.5)')

        },

    );
    $('.card').click(
        function() {


        }

    );
</script>
