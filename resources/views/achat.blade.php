<div class="achat">
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
    <div class="det">
        <p>INFORMATION</p>
        <br>
        <hr>
        <form>
            <div class="basic">

                @csrf
                <div class="one">
                    <p>Nom</p>
                    <p><input type="text" class="nom" required value='    {{ Auth::user()->name }}' id=""></p>
                    <p>Email</p>
                    <p><input type="text" class="email" required value='  {{  Auth::user()->email}}' id=""></p>
                    <p>Address </p>
                    <p><input type="text" class="adresse" required value='  {{  Auth::user()->adresse}}' id=""></p>
                    <p>Pays</p>
                    <p><input type="text" class="pays" required value='  {{  Auth::user()->pays}}' id=""></p>
                </div>
                <div class="tow">
                    <p>Prénom</p>
                    <p><input type="text" class="prenom " required value=' {{  Auth::user()->prenom }}' id=""></p>
                    <p>Ville</p>
                    <p><input type="text" class="ville" required value='  {{  Auth::user()->ville}}' id=""></p>
                    <p>Tél</p>
                    <p><input type="text" class="tel" required value='   {{ Auth::user()->tel }}' id=""></p>
                    <p>Entreprise</p>
                    <p><input type="text" class="entreprise" value='entreprise' required id=""></p>
                    <p style="display:none;"><input type="text" required class="user_id" value='{{Auth::user()->id}}'
                            id="">
                    </p>
                    <p style="display:none;"><input type="text" required class="image" value='{{Auth::user()->image}}'
                            id="">
                    </p>
                </div>

            </div>
        </form>
    </div>

    <div class="order">
        <p>PRODUITS </p>
        <br>
        <hr>
        <br>
        <div class="cards bg">
            <p>Nom</p>
            <p>Qty</p>
            <p>Prix</p>

        </div>
        <h1 style="display:none"> {{$total = 0}} </h1>
        @if(count($produits)>0)
        @foreach($produits as $produit)
        <div class="cards ">
            <p>{{$produit->products->nomProduit}}</p>

            <p>{{$produit->prod_qty}}</p>


            <p> {{$produit->products->prix}} $</p>


        </div>
        <h1 style="display:none"> {{ $total +=$produit->prod_qty * $produit->products->prix}}</h1>
        @endforeach
        @else
        <p style="color:tomato;padding:10px;">Pagnier vide</p>
        @endif

        <hr>
        <br> @if(count($produits)>0)
        <div class="boit">
            <div class="total">
                <p class="valto">Prix totals: </p>
                <p>{{$total}} $</p>
            </div>
        </div>
        <br>
        <br>


        <button id='commande'>Commander</button>
        @endif
    </div>
</div>
<script>
$('#commande').click(function(e) {

    e.preventDefault();

    var image = $('.image').val()
    var nom = $('.nom').val()
    var prenom = $('.prenom').val()
    var email = $('.email').val()
    var ville = $('.ville').val()
    var adresse = $('.adresse').val()
    var tel = $('.tel').val()
    var pays = $('.pays').val()
    var entreprise = $('.entreprise').val()
    var user_id = $('.user_id').val()
    var _token = $('input[type="hidden"]').attr('value');

    $.ajax({
        url: "/commande",
        data: {
            nom,
            prenom,
            email,
            ville,
            adresse,
            tel,
            pays,
            entreprise,
            user_id,
            image,
            _token
        },
        dataType: 'json',
        method: "POST",
        success: function(res) {

            $('.alt').html(res.status).css('background', 'green').css('padding', '15px').css(
                'border-radius', '15px').css('justify-content', 'center').css('display',
                'block')



            var counter = 0;
            var c = 0;
            var i = setInterval(function() {


                counter++;
                c++;
                if (counter == 20) {
                    clearInterval(i);
                    $('.alt').html(res.status).css('background', 'green').css('padding',
                        '15px').css(
                        'border-radius', '15px').css('justify-content', 'center').css(
                        'display',
                        'block')

                }
            }, 30);


            $('#commande').css('transform', 'scale(0)')
            $('.cards').css('transform', 'scale(0)')
            $('.order').css('transform', 'scale(0)')
            $('#content').load('/produit');
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
</script>
<style>
.boit {





    display: flex;
    align-items: center;
    justify-content: flex-start;

}

.total {
    text-align: right;
    background-color: rgba(10, 10, 10, 0.2);
    width: 100%;
    height: 50px;
    color: brown;

    display: flex;
    align-items: center;
    justify-content: space-around;
    border-radius: 5px;
}

.valto {
    text-decoration: underline;
}

.cards {
    display: flex;
    justify-content: space-around;
    align-items: initial;
    padding: 5px;
    background-color: aliceblue;
    transition: 2s;
}

.cards p {
    width: 200px;

}

.bg {
    background-color: gray;
    opacity: 0.5;
}

.basic .one {
    text-align: left;
    width: 50%;
}

.basic input {
    background-color: inherit;
    height: 30px;
    padding-left: 10px;
    width: 90%;
}

.basic .tow {
    text-align: left;
    width: 50%;
}

.order button {
    padding: 5px;
    color: saddlebrown;
    background-color: skyblue;
    border-radius: 5px;
    text-transform: uppercase;
    font-weight: bold;
    width: 100%;

}

.order button:hover {
    color: white;
    box-shadow: 0px 0px 10px red;
}

.achat {
    display: flex;
    margin-top: 20px;
    font-family: cursive;
    font-size: 14px;
    justify-content: space-around;
    background-color: white;
}

.det {

    width: 50%;
    padding: 10px;
    height: 100vh;
}

.basic {

    padding: 10px;
    line-height: 25px;
    display: flex;
}

.order {

    padding: 10px;
    width: 50%;
}

#commande {
    transition: 2s;
}
</style>