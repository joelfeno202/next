<div class="cards ">


    @auth
    <h1 style="display:none"> {{$total = 0}} </h1>
    @if(count($produits)>0)
    @foreach($produits as $produit)
    <div class="card product_data">
        <img src="{{$produit->products->image}}" width="70px" height="90px" alt="">
        <p class="oko">{{$produit->products->nomProduit}}</p>
        <p class="oko">Prix : {{$produit->products->prix}} $</p>
        <div class="qu">
            <p>Quatité(s)</p>
            <div class="kay">
                <input type="text" name="quantite" value="{{$produit->prod_qty}}" class="qty">

                <button class="moins change">-</button>

                <button class="plus change">+</button>
                <input style="display: none;" type='text' class="produc_id" value="{{$produit->id}}">
            </div>
        </div>
        <button class="supp"><i class=" fa fa-trash"></i> supprimer</button>
        <input style="position:absolute;opacity:0" type="text" value="{{$produit->id}}">
    </div>
    <h1 style="display:none"> {{ $total +=$produit->prod_qty * $produit->products->prix}}</h1>
    @endforeach
    @else
    <p style="color:tomato;padding:40px 10px 70vh 10px;font-size:20px; font-weight:bold;">Pagnier vide !</p>
    @endif

    <div class="caru card ">
        <h1>Pagnier <i class="fas fa-shopping-cart"></i></h1>
        @if(count($produits)>0) <p id="hoho"> <span style="color:white ;">Prix total :</span> <span
                style="color:tomato ;background:white ;padding:5px;" class="vall"> {{$total}}
                $</span> </p>

        <button style="background-color:rgba(206, 153, 54, 0.842);;">Valider</button>@endif
    </div>
    <br>
    @else
    <p style="color:tomato;padding:10px 10px 70vh 10px;font-size:20px;font-weight:bold;">Inscrivez-vous pour ajouter des
        produits !!!
    </p>
    @endauth
</div>
<style>

</style>
<script>
$('.supp').click(function(e) {

    $("html, body").animate({
        scrollTop: "0"
    });
    var lu = window.confirm('Vous-voulez supprimer ?')
    if (lu) {

        $(this).parent().hide()


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var id = $(this).parent().children().last().val();
        id = parseInt(id)

        $.ajax({
            method: 'POST',
            url: 'delete_card',
            data: {
                'prod_id': id
            },
            success: function(re) {
                alert(re.status)
                var toto = 0
                for (var i = 0; i < re.prix.length; i++) {
                    toto += parseFloat(re.prix[i].product_prix, 10) *
                        parseInt(
                            re.prix[i].prod_qty, 10)

                }
                console.log(re.prix.length);
                $('.vall').html(toto + ' $')



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
    }


})
$('.caru button').click(function() {

    $('#content').load('/achat');
    return false;
})
</script>
<script>
$(document).ready(function() {
    $("html, body").animate({
        scrollTop: "0"
    });
    $('.plus').click(function(e) {
        e.preventDefault()
        var $vaeur = $(this).parent().children().first().val();
        var $valu = parseInt($vaeur, 10)
        $valu = isNaN($valu) ? 0 : $valu
        if ($valu < 100) {
            $valu++
            $(this).parent().children().first().val($valu);
        }
        var id = $(this).closest('.product_data').find('.produc_id').val()
        var vaeur = $(this).closest('.product_data').find('.qty').val()
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        data = {
            'idd': id,
            'vaeur': vaeur
        }
        $.ajax({
            method: 'POST',
            url: 'update_total',
            data: data,
            success: function(re) {

                for (var i = 0, toto = 0; i < re.status.length; i++) {
                    toto += parseFloat(re.status[i].product_prix, 10) *
                        parseInt(
                            re.status[i].prod_qty, 10)
                }

                $('.vall').html(toto + ' $')
            }
        })
    })
    $('.moins').click(function(e) {
        e.preventDefault()
        var $vaeur = $(this).parent().children().first().val();
        var $valu = parseInt($vaeur, 10)
        $valu = isNaN($valu) ? 0 : $valu
        if ($valu > 1) {
            $valu--
            $(this).parent().children().first().val($valu);
        }
        var id = $(this).closest('.product_data').find('.produc_id').val()
        var vaeur = $(this).closest('.product_data').find('.qty').val()
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        data = {
            'idd': id,
            'vaeur': vaeur
        }
        $.ajax({
            method: 'POST',
            url: 'update_total',
            data: data,
            success: function(re) {
                var toto = 0
                for (var i = 0; i < re.status.length; i++) {
                    toto += parseFloat(re.status[i].product_prix, 10) *
                        parseInt(
                            re.status[i].prod_qty, 10)
                }
                $('.vall').html(toto + ' $')
            }
        })
    })
})
</script>
<style>
.cards {
    margin-top: 70px;
    transition: 2s;
    margin-bottom: 50vh;

}



.cards h1 {


    padding: 5px;
    font-size: 15px;
    font-family: cursive;
    color: green;
    opacity: 0.7;

}

.card {
    margin-top: 20px;
    display: flex;
    justify-content: space-around;
    align-items: center;
    box-shadow: 0px 0px 10px gray;
    background-color: white;
    padding: 5px 0px;
}

.card:hover {
    box-shadow: 0px 0px 10px red;
}

.qu {
    display: flex;
    justify-content: space-around;
    align-items: center;

}

.kay {
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.card input {
    width: 30px;
    text-align: center;
    height: 30px;
}

.card button {
    padding: 5px;
    border-radius: 5px;
    background-color: tomato;
    color: sienna;
    font-weight: bold;
    font-family: cursive;
    height: 30px;
}

.card button:hover {
    color: white;
}

.qu button {
    background-color: white;
    margin: 0px 5px;
    height: 35px;
}

.qu button:hover {
    color: tomato;
}

.card p {
    font-family: cursive;
    opacity: 0.5;
}

.caru {
    background-color: rgba(206, 153, 54, 0.8);
    font-weight: bold;

    position: absolute;
    position: fixed;

    top: 52px;
    width: 100%;
}

.oko {
    width: 200px;
}
</style>