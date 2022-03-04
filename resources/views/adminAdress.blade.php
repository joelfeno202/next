<div class="conta">
    <div class="lop">
        <div class="div">

            <h2> NEXT ONE : Image,Adresse,Tel et E-mail</h2>
            @if(count($adresses )==0)
            <a href="{{route('ajout-adresse')}}" class="b"> AJOUTER</a>
            @endif
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
            @if(count($adresses )>0)
            @foreach($adresses as $adresse)

            <li><span> ADRESSE</span><br><br>{{$adresse->adresse}}</li>
            <li><span> TEL</span> <br><br>{{$adresse->tel}}</li>
            <li><span> E-MAIL</span> <br><br>{{$adresse->mail}}</li>
            <li><span> IMAGE</span> <br> <br><img class="imgg" src="{{asset($adresse->image)}}" height='50%'
                    width='100%' alt="ff">
            </li>
            <!-- <a href="{{route('voir-adresse',['id'=>$adresse->id])}}" class="see">VOIR</a>-->
            <a class="abs" href="{{route('update-adresse',['id'=>$adresse->id])}}">EDITER</a> <br>
            @if(count($adresses )>1)
            <li> <a id="sup" href="{{route('supprimer-adresse',['id'=>$adresse->id])}}" class="delete">SUPPRIMER</a>
            </li>
            @endif
            @endforeach
            @else
            <li>
                auccun..
            </li>
            @endif
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
    border-radius: 50%;
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
</style>
<script>
var act = window.innerHeight;
var wid = window.innerWidth;
var go = act - 60
$('.conta').css('height', go)
$('.conta').css('width', wid - 200)
$('.abs,.b').click(function() {
    var page = $(this).attr('href');
    $('#dbod').load(page);
    return false;
})
</script>