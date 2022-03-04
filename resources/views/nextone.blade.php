<br><br><br>
<div class="nextone">
    @if(count($logos)>0)

    <h2>{{$logos[0]->logo}}</h2>

    @else


    <p>Nom</p>

    @endif
    <br>
    <hr>
    <br>
    <p class="p"><span class="s">S</span>ociété est présent dans le secteur des témécoms à Madagasikara depis plus d'une
        vingtaine d'années, spécialisée dans le domaine de la Voix (standard téléphonique et postes) des
        Données(visioconférence , video), dans le cabling filaire et fibre optique et autre domaine.</p>
    <br>
    <p>Auparavant ALCATEL, de 1990 à 2002, elle a ensuite intégré le Groupe NextiraOne en 2003.</p>

    <p>Actuellement, après son rebranding en mars 2018, Nextiraone est devenu <span class="couleur">NEXT ONE</span> et
        reflète une nouvelle image pour une continuité à vos côtés</p>

    <p>Une Culture clairement centrée sur la satisfaction du client</p>

    <p>.Clairement indépendant vis-à-vis des constructeurs.</p>
    <br>
    <br>
    <h2>Carte d'identité Next One</h2>
    <br>
    <hr>
    <br>
    <!--<input type='range' min='1' max="100" value="80">-->
    <p><span class="ti"> Dénomination actuelle :</span><span class="couleur"> NEXT ONE </span></P>
    <P><span class="ti">Date de création : </span>1er février 1990</P>
    <P> <span class="ti">Statut juridique :</span> SARLU au capital de 291 500 000 Ariary</P>
    @if(count($adresses )>0)
    @foreach($adresses as $adresse)
    <P><span class="ti"> Adresse : </span> {{$adresse->adresse}}</P>
    <P> <span class="ti">Tél.</span> {{$adresse->tel}} <br></p>
    <p><span class="ti"> E-mail : </span><span style="color: blue  ; text-decoration: underline">
            {{$adresse->mail}}</span></p>
    @endforeach
    @else
    <P><span class="ti"> Adresse : </span>vide</P>
    <P> <span class="ti">Tél.</span> vide <br></p>
    <p><span class="ti"> E-mail : </span><span style="color: blue  ; text-decoration: underline"> vide</span></p>
    @endif

    <p><span class="ti">Dirigeant :</span> Madame RALAMBONDRAINY J. Mamy General Manager</p>
    <p> <span class="ti">Effectif du Personnel : </span>11</p>
    <p> <span class="ti">Id.Stat:</span>47415 11 1990 0 1 0028<br></p>
    <p> <span class="ti">NIF: </span>1000033408<br></p>
    <p> <span class="ti">Registre de commerce : </span> RCS N°2003B00635</p>
    <br>
    <br>

    <p class="p"><span class="ti couleure ">Une Force de Vente et de Services</span> agissant sur l'ensemble du
        territoire , s'occupant de plus de 200 clients répartis dans l'île</p>
    <p>Axé dans le traitement et réalisation de diverses solutions de communications dans la Voix-Donnée-image</p>
    <p> <span class="ti couleure">Une Service Technique </span>très réactif assurant un <span class="couleur">SAV de
            qualité,</span> la coordination des chantiers, et un accompagnement optimum client</p>
    <p> <span class="ti couleure">Une Service d'Astreinte</span> disponible 24/24h et 7/7J,centré sur les interventions
        chez les clients sous contrat et sous garantie</p>
    <br>
    <br>
    <h2>Un savoir-faire unique sur le marché</h2>
    <br>
    <hr>
    <br>
    <br>
    <div class="savoir">
        <div class="image">
            <p><img src="{{asset('images/ilndex.jpg')}}" alt="fdfd"></p>
            <p>Application de communication</p>
            <p><img src="{{asset('images/51zdsrq20LL.png')}}" alt=""></p>
            <p>Infrastructure sécurisée</p>
            <p><img src="{{asset('images/indsex.jpg')}}" alt=""></p>
        </div>
        <div class="cercle">
            <p>Nos silutions et services vous garentissent</p>
        </div>
        <div class="rect">
            <p>DISPONIBILITE</p>
            <P>PERFORMANCE</P>
            <P>SECURITE</P>
        </div>
    </div>
    <br><br><br>
    <h2>Notre savoir-faire "service" </h2>
    <br>
    <hr>
    <br>
    <div class="styl">
        <div>
            <p> <span class="carre vert">ggg</span> Optimiser</p>
            <p><span class="carre mavokely">ggg</span> Exploiter</p>
            <p><span class="carre violet">ggg</span> Déployer</p>
        </div>

        <img class="my" width="150px" height="150px" style="border-radius: 100%;"
            src="{{asset('images/depositphotos_88425532-stock-illustration-6-part-arrow-wheel-diagram.jpg')}}" alt="">
        <div>
            <p><span class="carre bleu">ggg</span> Définir</p>
            <p><span class="carre jaunne">ggg</span> Concevoire</p>
            <p><span class="carre red">ggg</span> Intégrer</p>
        </div>
    </div>
    <br>



</div>

<style>
.rond2 {
    position: absolute;
    top: 89%;
    right: 5%;
    display: inline;
    align-items: center;
    display: inline-block;
    position: fixed;
}

.rond2 a {
    color: rgb(82, 78, 78);
    width: 40px;
    margin-top: 3px;
    height: 40px;
    background-color: #e73b3bc7;
    border-radius: 100%;
    display: flex;
    align-items: center;
    justify-content: space-around;
}

.rond2 a:hover {
    background-color: red;
    color: white;
}

@media screen and (max-width:765px) {
    .nextone .styl {
        flex-direction: column;
        justify-content: space-between;
        margin: 10px;
        padding: 0px;

        align-items: center;
    }

    .styl img {
        margin: 5px 0;
    }

    .nextone .styl div {
        display: flex;
        align-items: left;
        justify-content: space-between;
        flex-direction: column;
    }

    .nextone {
        padding: 10px;
    }

    .nextone h2 {
        font-size: 13px;
    }

    .nextone .cercle {
        margin: 8px 0;
    }

    .nextone p {
        font-size: 12px;
    }

    .nextone .savoir {
        flex-direction: column;
        align-items: center;
    }

    .nextone .savoir p {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-direction: column;
    }

    .savoir img {
        width: 200px;
    }
}
</style>