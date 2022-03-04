            <div class="conta">
                <div class="lop">
                    <div class="div">
                        <h2> NEXT ONE : Nom et Slogon</h2>

                        <a href="{{route('ajout-logo')}}" class="b"> AJOUTER</a>

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


                    @if(count($logos)>0)
                    @foreach($logos as $logo)
                    <ul>

                        <li><span>Nom</span><br><br>{{$logo->logo}} </li>
                        <li><span> Slogon {{$logo->id}}</span> <br><br>{{$logo->slogon}}</li>

                        <!--  <a href="{{route('voir-logo',['id'=>$logo->id])}}">VOIR</a>-->
                        <li> <a class="ed bb" href="{{route('update-logo',['id'=>$logo->id])}}">EDITER</a> <br>
                            <a id="sup" class="supp" href="{{route('supprimer-logo',['id'=>$logo->id])}}"
                                class="delete">SUPPRIMER</a>
                        </li>
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
    height: 70px;
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
            </style>
            <script>
var act = window.innerHeight;
var wid = window.innerWidth;
var go = act - 60
$('.conta').css('height', go)
$('.conta').css('width', wid - 200)
$('.abs,.b,.bb').click(function() {
    var page = $(this).attr('href');
    $('#dbod').load(page);
    return false;
})
            </script>