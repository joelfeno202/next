<div class="conta">
    <div class="lop">
        <div class="div">
            <a href="/prod" class="ret"> <img class="rett" style="cursor: pointer;"
                    src="{{asset('images/retour.png')}}"></a>
            <h2> {{$produit->nomProduit}} </h2>

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


            <li><span> NOM PRODUIT</span> <br><br>{{$produit->nomProduit}}</li>

            <li class="nge"><span> IMAGE</span> <br> <br><img class="imgg" src="{{asset($produit->image)}}" height='90%'
                    width='100%' alt="ff"></li>

            <li><span> CATEGORIE</span><br><br>{{$produit->categorie}}</li>

            <li class="nge"><span> DESCRIPTION</span> <br><br>{{$produit->description}}</li>
            <li><span> PRIX</span> <br><br>{{$produit->prix}} $</li>



        </ul>
    </div>

</div>
<style>
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
    align-items: center;
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
    width: 190px;
    text-align: center;
    height: 300px;
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