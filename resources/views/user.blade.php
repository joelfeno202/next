<div class="conta">
    <div class="lop">
        <div class="div">
            <h2> NEXT ONE : LISTES UTILISATEURS</h2>

            <!-- <a href="{{route('ajout-produit')}}" class="b"> AJOUTER</a>-->

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


        @if(count($users)>0)
        @foreach($users as $produit)
        <ul>

            <li>
                <h6 class="num">{{$produit->id}}</h6><span>Nom</span><br><br>{{$produit->name}}
            </li>


            <li>
                <span>Prenom</span><br><br>{{$produit->prenom}}
            </li>


            <li><span> IMAGE</span> <br> <br><img class="imgg" src="{{asset($produit->image)}}" height='70%' width='50%'
                    alt="ff">
            </li>
            <li>
                <span>Tel</span><br><br>{{$produit->tel}}
            </li>

            <li>
                <span>Pays</span><br><br>{{$produit->pays}}
            </li>


            <li>
                <span>E-mail</span><br><br>{{$produit->email}}
            </li>

            <!--  <li> <a class='voir pl' href="{{route('voir-produit',['id'=>$produit->id])}}">VOIR</a> <a
                               class="ed bb pl" href="{{route('update-produit',['id'=>$produit->id])}}">EDITER</a> <br>
                           <a id="sup" class="supp" href="{{route('supprimer-produit',['id'=>$produit->id])}}"
                               class="delete">SUPPRIMER</a>
                       </li>-->
        </ul>
        <hr>
        @endforeach
        @else
        <ul>
            <li>
                auccun..
            </li>
        </ul>
        @endif

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

.conta hr {
    width: 90%;
    color: brown;
}

.abs:hover {
    box-shadow: 3px 7px 8px tomato;
}

.conta .imag {
    width: 50px;
    height: 50px;
    border-radius: 5px;
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
    width: 290px;
    text-align: center;
    height: 200px;
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

.conta ul li .ed {
    color: green;
    font-size: 13px;
    background-color: rgba(224, 200, 200, 0.467);
    padding: 5px;
}

.conta ul li .voir {
    color: dodgerblue;
    font-size: 13px;
    background-color: rgba(224, 200, 200, 0.467);
    padding: 5px;
}

.conta ul li .voir:hover {

    background-color: rgba(224, 200, 200, 0.967);
}

.conta ul li .supp {
    color: red;
    padding: 5px;
    font-size: 13px;
    background-color: rgba(224, 200, 200, 0.467);
}

.conta ul li .ed:hover {

    background-color: rgba(224, 200, 200, 0.967);
}

.conta ul li .supp:hover {

    background-color: rgba(224, 200, 200, 0.967);
}

.num {
    position: absolute;
    top: -12px;
    border-radius: 50%;
    width: 20PX;
    height: 20px;
    left: 5px;
    border: 1px solid brown;
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>
<script>
var act = window.innerHeight;
var wid = window.innerWidth;
var go = act - 60
$('.conta').css('height', go)
$('.conta').css('width', wid - 200)
$('.abs,.b,.bb,.pl').click(function() {
    var page = $(this).attr('href');
    $('#dbod').load(page);
    return false;
})
</script>