<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if(count($adresses )>0)
    @foreach($adresses as $adresse)
    <link rel="shortcut icon" href="{{asset($adresse->image)}}" type="image/x-icon">
    <!--icon--> @endforeach
    @else

    <link rel="shortcut icon" href="" type="image/x-icon">

    @endif
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web\css\all.css">
    <title></title>
</head>

<body>
    @if(session('status'))
    <p class="pop">{{session('status')}}</p>
    <script>
    var counter = 0;
    var c = 0;
    var i = setInterval(function() {

        $(".pop").html();
        counter++;
        c++;
        if (counter == 20) {
            clearInterval(i);
            $(".pop").animate({
                'opacity': '0',
                'z-index': '30'

            }, 1000, function() {
                $(this).css({
                    'display': 'none'
                });
            });
        }
    }, 300);
    </script>
    @else

    @endif

    <div class="dashboard">
        <div class="nad">
            <div class="link">
                <a href="/">
                    <p><i class="fas fa-home"></i> ACCUEIL</p>
                </a>
                <a class='eo' href="/commandes">
                    <p>COMMANDES</p>
                </a>
                <a class='eo' href="/user">
                    <p>LISTES UTILISATEURS</p>
                </a>

            </div>
            <div>
                <form class='df' method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                        {{ __('Deconnexion') }}
                    </x-dropdown-link>
                </form>
            </div>

        </div>
        <div class="dnav">
            <div>
                <p class="logo"> ADMIN NEXT ONE</p>
                <hr>
            </div>
            <div class="lien">

                <style>
                .pop {
                    position: absolute;
                    top: 10%;
                    left: 40%;
                    text-transform: uppercase;
                    font-family: cursive;
                    background-color: green;
                    color: white;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    z-index: 20;
                    width: 300px;
                    height: 70px;
                    padding: 5px;
                    font-size: 10px;

                    border-radius: 15px;
                    box-shadow: 3px 7px 8px green;
                }
                </style>
                <a href="/adresse">
                    <p>NEXT ONE</p>
                </a>
                <a href="/logo">
                    <p> SLOGONS</p>
                </a>

                <a href="/post">
                    <p>CAROUSELS</p>
                </a>
                <a href="/prod">
                    <p> PRODUITS</p>
                </a>


                <a href="/actual">
                    <p> ACTUALITES</p>
                </a>
            </div>
            <div>
                <p class="datt">{{date('Y/m/d H:i:s')}}</p>

            </div>
        </div>
        <div id='dbod' class="dbod">

        </div>
    </div>
    <style>
    body {
        background-color: burlywood;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
        scrollbar-color: rgb(71, 68, 68) transparent;
        scrollbar-width: thin;
        scroll-behavior: smooth;
    }

    .nad {
        position: absolute;
        position: fixed;
        display: flex;
        top: 0;
        left: 200px;
        right: 0;
        height: 60px;
        background-color: burlywood;
        justify-content: space-around;
        align-items: center;
        z-index: 20;
    }

    .nad .link {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 50%;

    }

    .nad p {
        background-color: brown;
        padding: 5px;
        border-radius: 5px;
        font-size: 13px;
    }

    .nad p:hover {
        box-shadow: 3px 7px 8px white;
    }

    body {
        margin: 0;
        padding: 0;
    }

    .dashboard .logo {
        color: brown;
        font-weight: bold;
        font-family: cursive;
        text-align: center;
    }

    .dashboard .datt {
        font-family: cursive;
        color: darkgrey;
        font-style: italic;
        text-decoration: underline;
        font-size: 13px;
    }

    .dashboard .lien {
        width: 90%;
    }

    .dashboard .lien p {
        background-color: brown;
        opacity: 0.8;
        padding: 5px 5px;
        border-radius: 5px;
        width: 100%;
    }

    .dashboard .lien p:hover {
        opacity: 1;
        box-shadow: 3px 7px 8px brown;
    }

    .dashboard a {
        text-decoration: none;
        color: white;
        font-family: cursive;

    }

    .dashboard {
        display: flex;
        margin: 0;
        padding: 0;
    }

    .dnav {

        position: absolute;
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        width: 200px;
        height: 100VH;
        margin: 0;
        background-color: burlywood;
    }

    .dbod {
        width: 80vw;
        height: 100VH;
        margin: 0;
        margin-left: 200px;
        margin-top: 60px;

    }

    .df a {
        color: darkred;
        opacity: 0.8;
        background-color: green;
        color: white;
        border-radius: 5px;
        padding: 5px;
        font-size: 13px;
    }

    .df a:hover {
        opacity: 1;
        box-shadow: 3px 7px 8px green;

    }
    </style>
</body>
<script src="js/jquery-3.6.0.min.js"></script>
<script>
$('.fermer').click(function() {
    $('.alert').hide()
})
$('#dbod').load('adresse');
$('.lien a,.eo').click(function() {

    var page = $(this).attr('href');
    $('#dbod').load(page);
    return false;
});
var act = window.innerHeight;
var wid = window.innerWidth;
var go = act - 60
$('.dbod').css('height', go)
</script>

</html>