<div class="vuee product_data">
    <a style='z-index:20;' class="aaaa" href="{{$produit->categorie}}"><span id="retoure">
            <img width="30px" height="30px" src="{{asset('images/retour.png')}}"> </span></a>
    <style>
    #retoure {
        position: absolute;
        top: 5px;
        left: 20px;
        font-size: 50px;
        font-weight: bold;
        color: yellowgreen;
    }

    #retoure:hover {
        transform: scale(1.2);
    }
    </style>
    <div class="alert">
        <div class="tete">
            <p class="message">Message</p>
            <p class="fermer">x</p>
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
        background-color: rebeccapurple;
        margin: 0;
        padding: 0;
        height: 100PX;
        position: absolute;
        position: fixed;
        top: 30%;
        left: 40%;
        width: 300px;
        border: none;
        border-radius: 15px;
        z-index: 20;
    }
    </style>
    <input type="hidden" value="{{$produit->id}}" class="pro_id">
    <input style='display:none' type="text" value="{{$produit->prix}}" id="prix">
    <div class="image">

        <div id="imo">
            <img src="{{asset($produit->image)}}" width="90%" height="100%" />
        </div>
    </div>
    <div class="dettail">
        <h1>{{$produit->categorie}}: <span class="nom">{{$produit->nomProduit}}</span></h1>
        <hr>
        <p><span class="h1">Prix :</span> <span class="nom "> {{$produit->prix}}</span></p>
        <p>{{$produit->description}}</p>
        <hr>

        <div class="bot">

            <div class="qua">
                <p class="h2">quantité</p><br>
                <button id="moins">-</button>
                <input type="text" class="qty_inp " name="quantite" value="1" id="qty">
                <button id="plus">+</button>
            </div>

            <button class="im1 add">Ajouter <i class="fas fa-shopping-cart"></i></button><br><br>

        </div>
    </div>

</div>
<script>
$(document).ready(function() {
    $("html, body").animate({
        scrollTop: "80"
    });
    $('a.aaaa').click(function() {

        var page = $(this).attr('href');
        $('.cc').load(page);
        return false;
    });

    $(document).click(function() {
        $('.alert').hide()
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

    $('#plus').click(function(e) {
        e.preventDefault()
        var $vaeur = $('#qty').val()
        var $valu = parseInt($vaeur, 10)
        $valu = isNaN($valu) ? 0 : $valu
        if ($valu < 100) {
            $valu++
            $('#qty').val($valu)
        }
    })
    $('#moins').click(function(e) {
        e.preventDefault()
        var $vaeur = $('#qty').val()
        var $valu = parseInt($vaeur, 10)
        $valu = isNaN($valu) ? 0 : $valu
        if ($valu > 1) {
            $valu--
            $('#qty').val($valu)
        }
    })
    $('.add').click(function(e) {
        e.preventDefault()
        var product_id = $(this).closest('.product_data').find('.pro_id').val()
        var product_qty = $(this).closest('.product_data').find('.qty_inp').val()
        var product_prix = $(this).closest('.product_data').find('#prix').val()
        console.log(product_prix);
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
                'product_qty': product_qty,
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
<style>
.vuee {
    position: relative;
    display: flex;
    background: white;
    padding: 5px;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-around;

    box-shadow: 0px 0px 20px gray;
    height: 100vh;
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

.vuee .im1 {
    background-color: yellow;
    color: saddlebrown;
    border-radius: 5px;
    font-weight: bold;
    box-shadow: 0px 0px 20px gray;
    padding: 5px 10px;
}

.vuee .im1:hover {
    box-shadow: 0px 0px 10px red;
    color: white;
    background-color: rgb(243, 170, 33);
}

.qua {
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.vuee .bot {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    align-items: center;
}

.vuee .image {

    flex-direction: column;
    align-items: center;
    justify-content: space-around;
    display: flex;
    width: 60%;
    height: 650px;


}

.vuee .dettail {

    flex-direction: column;
    padding: 5px 15px;
    text-align: left;

    justify-content: space-around;
    display: flex;
    width: 30%;
    height: 350px;

}

.vuee input {
    margin: 0px 5px;
    width: 30px;
    padding: auto;
    text-align: center;
    height: 30px;
}

#imo {
    overflow: hidden;
    width: 90%;
    height: 70%;
}

.vuee h1 {
    font-family: cursive;
    color: gray;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 17px;
}

.vuee hr {
    opacity: 0.3;
}

.vuee .h1 {
    font-family: cursive;
    color: gray;
    font-size: 17px;
    text-transform: uppercase;
    font-weight: bold;
}

.vuee .h2 {
    font-family: cursive;
    color: gray;
    font-size: 12px;
    text-transform: uppercase;
    font-weight: bold;
}

.nom {
    font-family: cursive;
    color: tomato;
    font-size: 13px;
}

.vuee p {
    font-family: cursive;
    color: tomato;
    font-size: 13px;
}

.qua button {
    background-color: white;
    height: 30px;
    padding: 5px;
    margin: 0px 5px;
}

.qua button:hover {
    color: tomato;
}
</style>