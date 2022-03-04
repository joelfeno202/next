<div class="mav">
    <div class="alert">
        <div class="tete">
            <p class="message">Message</p>
            <p class="fermer"><i class="far fa-times-circle"></i></p>
        </div>
        <div class="corps">
            <span class="contenu">ddd</span>
        </div>

    </div>
    <style>
    .alert .tete {
        background-color: gray;
        height: 30%;
        display: flex;
        justify-content: space-between;
        padding: 10px 15px;
        align-items: center;

        border: none;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    .alert .fermer {
        color: rgb(230, 42, 42);
        font-size: 40px;
        padding: 5px;
        font-family: cursive;
        opacity: 0.5;

    }

    .alert .fermer:hover {
        opacity: 1;
        cursor: pointer;
    }

    .alert .message {
        color: tomato;
        font-family: cursive;
    }

    .alert .corps .contenu {
        color: green;
    }

    .alert .corps {
        justify-content: center;
        display: flex;
        align-items: center;

        background-color: rgb(235, 223, 225);
        height: 70%;
        border: none;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;

    }

    .alert {
        background-color: rgba(206, 153, 54, 0.8);
        font-weight: bold;

        position: absolute;
        position: fixed;

        top: 30%;
        left: 40%;
        width: 300px;
        z-index: 20;
        border-radius: 15px;
        height: 100px;
    }
    </style>

    <!--   <a href="/produit" class="ret"> <img style="cursor: pointer;" class="ret" src="{{asset('images/retour.png')}}"
            width="40px" height="40px"></a>
    <style>
    .ret {
        position: absolute;
        position: fixed;
        left: 22%;
        z-index: 20;
    }

    .ret:hover {

        transform: scale(1.2);

    }
    </style>-->
    <script>
    $('.ret').click(function() {
        var page = $(this).attr('href');
        $('#content').load(page);
        return false;
    })
    </script><br>
    <h1>Armoires et accessoires</h1><br><br>
    <div class="rou ime product_data">
        @if(count($produits)>0)
        @foreach($produits as $produit)

        <input type="hidden" style="display:none" value="{{$produit->id}}" class="pro_id">

        <div class="route">

            <div class="imf"> <a href="{{route('voir-produit-routeur',['id'=>$produit->id])}}"><img
                        src="{{$produit->image}}" alt=""></a></div>
            <a href="{{route('voir-produit-routeur',['id'=>$produit->id])}}">
                <h2 class="oi">{{$produit->nomProduit}}</h2>
            </a><br>
            <div class="boutt">
                <input class="loo" style='display:none' type="text" value="{{$produit->id}}">

                <a href="{{route('voir-produit-routeur',['id'=>$produit->id])}}" class="im"><i
                        class="fas fa-eye"></i></a>
                <button>Ajouter<i class="fas fa-shopping-cart"></i></button>
                <input class="roo" style='display:none' type="text" value="{{$produit->prix}}">
            </div>
        </div>

        @endforeach
        @else
        <div class="route">
            <div class="imf"> <img src="{{asset('images/infdefx.jpg')}}" alt="vide"></div>
            <div class="boutt">



            </div>
        </div>
        @endif
    </div>
</div>
<style type="text/css">
.mav {
    position: relative;

    padding-top: 15px;
    animation: 2s sq alternate;
}

@keyframes sq {
    0% {
        transform: scaley(0);
        opacity: 0;
    }

    100% {
        transform: scaley(1);
        opacity: 1;
    }
}

.boutt {
    display: flex;

}

.boutt a:hover {
    box-shadow: 0px 0px 10px red;
}

.imf {
    overflow: hidden;
    width: 190px;
    height: 190px;
    box-shadow: 0px 0px 10px gray;
    border-radius: 10px;
    margin-bottom: 10px;
    transition: 1s;
}

.imf:hover {
    box-shadow: 0px 0px 10px red;


}

.boutt a {
    width: 50%;
    border-radius: 5px;
    padding: 5px;

}

.rou {

    flex-wrap: wrap;
    display: flex;

    align-items: initial;
    justify-content: center;
}

.route {
    margin: 15px;

}

.route img {
    width: 190px;
    height: 190px;
    box-shadow: 0px 0px 10px gray;
    border-radius: 10px;
    transition: 1s;
}

.route img:hover {
    box-shadow: 0px 0px 10px red;
    transform: scale(1.2);
}

.mav h1 {
    text-align: center;
    font-family: cursive;
    color: teal;
    margin: 9px;
    margin-bottom: 19px;
    font-size: 15px;
    border-radius: 5px;
    background-color: white;
    width: 20%;
    margin: auto;
    padding: 5px;
    box-shadow: 0px 0px 10px gray;

}

.mav h2 {
    text-align: center;
    font-family: cursive;
    color: grey;
    margin: 9px;
    margin-bottom: 19px;
    font-size: 13px;
    height: 50px;
    width: 190px;
    margin: auto;
    padding: 5px;
    opacity: 0.7;
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;

}

.mav h2:hover {
    box-shadow: 0px 0px 10px red;
}

.im {
    background-color: green;
    opacity: 0.7;
    color: red;
    width: 50%;
    font-family: cursive;
}

.im:hover {
    opacity: 1;
    color: white;
}

.boutt button {
    background-color: rgb(243, 170, 33);
    opacity: 0.5;
    font-family: cursive;
    margin-left: 4px;
    width: 50%;
    border-radius: 5px;
    border: none;
}


.boutt button:hover {
    opacity: 1;
    color: white;
    box-shadow: 0px 0px 10px red;

}
</style>
<script>
$(document).ready(function() {
    $("html, body").animate({
        scrollTop: "0"
    });
    $('.alert').hide()
    $('.fermer').click(function() {
        $('.alert').hide()
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
    $('.ime a').click(function() {
        var page = $(this).attr('href');
        $('.cc').load(page);

        return false;
    })
    $('.boutt button').click(function(e) {

        e.preventDefault()
        var product_id = $(this).parent().children().first().val();
        var product_prix = $(this).parent().children().last().val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: 'POST',
            url: 'add_cart',
            data: {
                'product_id': product_id,
                'product_qty': '1',
                'product_prix': product_prix
            },
            success: function(res) {
                $('.alert .contenu').html(res.status)
                $('.alert').show()
            }
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

    })


})
</script>