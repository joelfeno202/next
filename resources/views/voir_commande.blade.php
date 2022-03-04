<div class="conta">
    <div class="lop">
        <div class="div">
            <a href="/commandes" class="ret"> <img class="rett" style="cursor: pointer;"
                    src="{{asset('images/retour.png')}}"></a>


        </div>
        <style>
        .b {
            background-color: cornflowerblue;
            padding: 5px;
            border-radius: 5px;
        }

        .b:hover {
            box-shadow: 3px 7px 8px cornflowerblue;
        }
        </style>

        <ul>


            <li><span> NOM </span> <br><br>{{$produit->nom}}</li>
            <li><span> PRENOM </span> <br><br>{{$produit->prenom}}</li>


            <li><span> EMAIL</span><br><br>{{$produit->email}}</li>
            <li><span> TEL</span><br><br>{{$produit->tel}}</li>
            <li><span> VILLE</span><br><br>{{$produit->ville}}</li>
            <li><span> ENTREPRISE</span><br><br>{{$produit->entreprise}}</li>
            <li><span> ADRESSE</span><br><br>{{$produit->adresse}}</li>
            <li><span> PAYS</span><br><br>{{$produit->pays}}</li>
            <li>
                <span>Date</span><br><br>{{$produit->created_at }}
            </li>
            <div class="order">
                <p style="background:brown;padding:5px;">PRODUITS </p>
                <br>
                <hr>
                <br>
                <div class="cards bg">
                    <p>Categorie</p>
                    <p>Nom</p>
                    <p>Qty</p>
                    <p>Prix</p>
                    <p>Date</p>

                </div>
                <h1 style="display:none"> {{$total = 0}} </h1>

                @if(count($entana)>0)
                @foreach($entana as $produit)
                <div class="cards ">
                    <p>{{$produit->products->categorie}}</p>
                    <p>{{$produit->products->nomProduit}}</p>

                    <p>{{$produit->prod_qty}}</p>


                    <p> {{$produit->products->prix}} $</p>
                    <p> {{$produit->created_at }} </p>


                </div>
                <h1 style="display:none"> {{ $total +=$produit->prod_qty * $produit->products->prix}}</h1>
                @endforeach
                @else
                <p style="color:tomato;padding:10px;">Pagnier vide</p>
                @endif

                <hr>
                <br>
                <div class="boit">
                    <div class="total">
                        <p class="valto">Prix totals: </p>
                        <p>{{$total}} $</p>
                    </div>
                </div>
                <br>
                <br>


            </div>
        </ul>
    </div>

</div>
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








.abs {
    position: absolute;
    background-color: darksalmon;
    top: 15px;
    right: 15px;
    padding: 5px;
    border-radius: 5px;
    opacity: 0.7;
    font-size: 13px;
}

.abs:hover {
    box-shadow: 3px 7px 8px tomato;
}

.conta {

    text-align: center;
    background: linear-gradient(10deg, burlywood, rgba(224, 200, 200, 0.267));
    position: relative;
    overflow-x: hidden;
    scrollbar-color: rgb(71, 68, 68) transparent;
    scrollbar-width: thin;
    scroll-behavior: smooth;

}

li span {
    position: absolute;
    top: 8px;
    left: 0;
    right: 0;
    color: brown;
}

ul {
    display: flex;
    list-style-type: none;
    align-items: flex-start;
    padding: 5px;
    flex-wrap: wrap;

    justify-content: space-around;
}

.see {
    background-color: mediumpurple;
    text-decoration: none;
}

.imgg {
    border-radius: 10%;
}


li {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
    position: relative;
    width: 40vw;
    text-align: center;
    height: 60px;
    padding: 5px;
    font-family: cursive;
    font-size: 14px;
    background: linear-gradient(10deg, burlywood, rgba(224, 200, 200, 0.267));
    justify-content: space-around;
    align-items: center;
    margin: 5px;
    border-radius: 0px 15px 0px 15px;
    transition: 1s;
}

.conta li.nge {
    width: 50%;

}

li:hover {
    transform: scale(0.9);
    box-shadow: 3px 7px 8px tomato;
}

.div {
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
    color: brown;
    text-align: center;
    font-family: cursive;
    background: linear-gradient(10deg, burlywood, rgba(224, 200, 200, 0.267));
    font-size: 12px;

    width: 100%;
}




.gg {
    margin: 10px;
}

.gg a {
    text-decoration: none;
    background-color: green;
    color: white;
    padding: 5px;

}

.gg a:hover {
    color: green;
    background-color: grey;
}

.lop {
    width: 100%;
}

.conta .rett {
    cursor: pointer;
    width: 30px;
    height: 30px;
}

.conta .rett:hover {
    transform: scale(1.1);
}
</style>
<script>
var act = window.innerHeight;
var wid = window.innerWidth;
var go = act - 60
$('.conta').css('height', go)
$('.conta').css('width', wid - 200)
$('.abs,.b,.ret').click(function() {
    var page = $(this).attr('href');
    $('#dbod').load(page);
    return false;
})
</script>