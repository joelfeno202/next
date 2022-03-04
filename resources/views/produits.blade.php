<div class="produits">
    <div class="alt">

    </div>
    <style>
    .alt {

        position: absolute;
        position: fixed;
        bottom: 20px;
        left: 5px;
        box-shadow: 2px 2px 5px 2px green;
        width: 20vw;

        animation: 2s mo alternate;
        z-index: 23;
        display: flex;
        align-items: center;
        justify-content: space-around;
        display: none;
    }

    @keyframes mo {
        0% {
            transform: translateX(-500px);
        }

        100% {
            transform: translateX(5px);
        }
    }
    </style>
    <br>
    <div class='pr'>
        <a href="/routeur">Routeurs</a>
        <a href="/switch"> Switchs</a>
        <a href="/Point_d_accès_wifi">Point d'accès wifi</a>
        <a href="/Câblage">Câblages</a>
        <a href="/Armoires_et_accessoires ">Armoires et accessoires</a>
        <a href='/autre'>Autres</a>
    </div>
    <br><br>
    <div class='cc'>

    </div>
    <br><br>
    <br><br>
    <h1>Next One :Voix, Données , images</h1>
    <br>

    <div class="equipment">
        <div class="comm">
            <p style="color:gray">Next One ,évoluant dans le domaine de la voix - Données - image.</p>
            <p> * Le choix des meilleurs technologies (ALCATEL - CISCO - POLYCOM - HP - DELL - IBM - ASSMANN- PORTECH -
                FORTNET - HIKVISION ect)</p>
            <p> * L'exploitation de vos réseaux.</p>
            <p style="color:gray">Nos domaines de compétance</p>
            <p>Une compétance reconnue dans le déploiement et mise en oeuvre des infrastructures de réseaux et la
                fourniture d'équipements informatiques; et visioconférence . A titre d 'example : </p>
            <p> . Interconnexion en réseaux lan des 6 Universités de Madagasikara
                (ANTANANARIVO,FIANARANTSOA,TOAMASINA,DIEGO,MAHAJANGA,TOLIARA) :</p>
            <p> - Déploiement de 22 000 m de fibre optique</p>
            <p> - Fourniture de 123 switches CISCO</p>
            <p> . Fourniture de serveurs DELL PowerEdge R730 à la Banque Centrale de Madagasikara , à MGIX, etc ..</p>
            <p> . Fourniture de visioconférence à BNI MADAGASCAR,Groupe TELMA,Groupe HOLCIM,ISCAM,ISCAE,ect..</p>

        </div>
        <div class="hhh">
            <img src="{{(asset('images/images.png'))}}" alt="jojoj">
            <img src="{{(asset('images/cisco.jpg'))}}" alt="jojoj">
            <img src="{{(asset('images/brand.gif'))}}" alt="jojoj">
            <img src="{{(asset('images/Dell-Logo.png'))}}" alt="jojoj">
            <img src="{{(asset('images/index.png'))}}" alt="jojoj">
            <img src="{{(asset('images/tt.jpg'))}}" alt="jojoj">
            <img src="{{(asset('images/u.png'))}}" alt="jojoj">
            <img src="{{(asset('images/jj.jpg'))}}" alt="jojoj">
            <img src="{{(asset('images/Fortinet-Logo.wine.png'))}}" alt="jojoj">
        </div>
    </div>
    <br><br>
    <style>
    .equipment {
        background-color: white;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: left;
        box-shadow: 0px 0px 20px gray;
        width: 95%;
        margin: 15px 0;
        border-radius: 15PX;
    }

    .equipment .hhh {
        display: flex;
        flex-wrap: wrap;
        padding: 5px;
        background-color: white;
        justify-content: space-around;
        width: 45%;
        align-items: center;
    }

    .equipment .hhh img {
        height: 90px;
        margin-top: 10px;
        width: 200px;
    }

    .equipment .comm {
        display: flex;
        width: 45%;
        flex-direction: column;
        justify-content: space-around;
        align-items: left;

        padding: 5px;
    }

    .equipment .comm p {
        text-align: left;

    }

    .produits h1 {
        font-size: 17px;
        color: tomato;
        background: white;
        padding: 5px;
        box-shadow: 0px 0px 20px gray;
        font-family: cursive;
        color: gray;
        width: 95%;
        border-radius: 15PX;
        margin-top: 20px;
        transition: 2s;
    }

    .produits {
        display: flex;
        align-items: center;
        justify-content: space-around;
        flex-direction: column;
        padding-top: 90px;
        height: auto;
        overflow: auto;
        overflow-x: hidden;
    }
    </style>
    <!--  <div class="archi">
        <h2>Architecture Réseau</h2>
        <ul>
            <li><a href="">Installation LAN/Wifi</a></li>
            <li><a href="">Interconnexion sites distants</a></li>

        </ul>
    </div>
    <div class="system">
        <h2>Systèmes Annexes</h2>
        <ul>
            <li><a href="">Interfaces GSM(analogiques)</a></li>
            <li><a href="">Interface SIP(audiocode)</a></li>
            <li><a href="">Visio conférence</a></li>
            <li><a href="">Audio conférence/soundstration</a></li>
            <li><a href="">Enregistreur</a></li>
            <li><a href="">Affichage dynamique</a></li>
        </ul>
    </div>
    <div class="autre">
        <h2>Autres équipements</h2>
        <ul>
            <li><a href="">Caméras de surveillance(Analogiques & IP)</a></li>
            <li><a href="">Video projecteurs</a></li>
            <li><a href="">Panneaux solaires</a></li>
            <li><a href="">Onduleurs</a></li>
            <li><a href="">Imprimantes</a></li>
            <li><a href="">Connectiques</a></li>
            <li><a href="">Consommables Informatiques</a></li>
        </ul>
    </div>
    <div class="Infr">
        <h2>Infrastructure IT & Sécurité</h2>
        <ul>
            <li><a href="">Virtualisation</a></li>
            <li><a href="">Suprevision et Administration</a></li>
            <li><a href="">Serveur</a></li>
            <li><a href="">Onduleurs</a></li>
            <li><a href="">Desktop,laptop</a></li>
            <li><a href="">Firewall</a></li>
        </ul>
    </div>
    <div class="Infr">
        <h2>Communications Unifiées</h2>
        <ul>
            <li><a href="">PABX(Central téléphonique analogique)</a></li>
            <li><a href="">IPBX(Central téléphonique IP)</a></li>
            <li><a href="">Post analogiques tél. & IP</a></li>
            <li><a href="">Postes DECT</a></li>
        </ul>
    </div>
</div>

<style>
      #ccarousell {
        width: 100%;
    }
.produits {

    padding-top: 9px;
    height: auto;
    overflow: auto;
    animation: nim 1s;
    overflow-x:hidden;
}

.produits div ul {
    text-align: left;
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-wrap: wrap;
}

.produits li {
    width: 20%;
    padding: 5%;


    align-items: center;
}

.produits a {
    padding: 25%;
    background-color: gray;
    text-align: center;
    display: flex;
    border-radius: 8px;
    height: 50px;
    box-shadow: 0px 0px 20px gray;
    align-items: center;
    justify-content: space-around;
}

.produits a:hover {
    box-shadow: 0px 0px 20px red;
}

.produits h1 {
    color: brown;
    font-family: cursive;
    text-align: center;
    opacity: 0.9;

}

.produits h2 {
    font-family: cursive;
    color: yellowgreen;
}
</style>-->
    <style>
    .pr {
        display: flex;
        align-items: center;
        margin: auto;
        top: 75px;
        width: 100vw;
        position: fixed;
        left: 0;
        right: 0;
        z-index: 20;
        justify-content: center;
    }

    .pr a {
        background: white;
        padding: 0;
        margin: 0 5px;
        width: 190px;
        color: burlywood;
        height: 50px;

        text-align: center;
        display: flex;
        border-radius: 8px;

        box-shadow: 0px 0px 20px gray;
        align-items: center;
        justify-content: space-around;
    }

    .produits a:hover {
        box-shadow: 0px 0px 20px red;
    }
    </style>
    <script>
    $('#cccarousell').carouFredSel({


        items: 5,
        prev: ".left",
        next: ".right",
        scroll: {
            items: 1,
            duration: 1000,
        }
    });
    $("html, body").animate({
        scrollTop: "0"
    });

    $('.equipment a,.pr a').click(function() {

        var page = $(this).attr('href');
        $('.cc').load(page);
        return false;
    });
    </script>