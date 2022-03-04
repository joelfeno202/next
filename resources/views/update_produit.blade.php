<div class="cont">
    <div class="div">
        <a href="/prod" class="ret"> <img style="cursor: pointer;" class="ret" src="{{asset('images/retour.png')}}"></a>
        <h2> MISE A JOUR : PRODUIT</h2>
    </div>

    <form action="{{route('updat-produit',['id'=>$produit->id])}}" method='post' enctype="multipart/form-data">
        @csrf

        <p><span> NOM PRODUIT</span> <input type="text" name='nomProduit' value='{{$produit->nomProduit}}' required
                value='{{$produit->nomProduit}}'></p>
        <p><span> CATEGORIE</span> <input type="text" name='categorie' required value='{{$produit->categorie}}'></p>
        <p><span> PRIX </span> <input type="text" name='prix' required value='{{$produit->prix}}'></p>
        <p><span> NOMBRES</span> <input type="text" name='nombre' required value='{{$produit->nombre}}'></p>
        <p><span> DESCRIPTION</span> <input type="text" name='description' required value='{{$produit->description}}'>
        </p>
        <p class="ab"> <span>IMAGE </span><input class='titre' required type="file" name="image"><img class='right'
                src="{{$produit->image}}" alt="img"></p>
        <br> <br> <input class='btn' type="submit" value='enregistrer'>
    </form>
</div>
<style>
.cont {
    background: linear-gradient(10deg, burlywood, rgba(224, 200, 200, 0.267));
    overflow-x: hidden;
    scrollbar-color: rgb(71, 68, 68) transparent;
    scrollbar-width: thin;
    scroll-behavior: smooth;
}

.cont img {
    width: 80px;
    height: 80px;


}

.cont .ret {
    cursor: pointer;
    width: 30px;
    height: 30px;
}

.cont .ret:hover {
    transform: scale(1.1);
}

.cont form p {

    padding-left: 5px;
    font-family: cursive;
    font-size: 13px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    padding: 5px;
}

.cont .titre {

    border: none;
    color: beige;
}

.cont .btn {
    border: none;
    width: 100px;
    background-color: brown;
    color: white;
    text-transform: uppercase;
    border-radius: 5px;
    padding: 5px;
    margin-left: 30%;

    cursor: pointer;
    font-family: cursive;
    font-size: 13px;
}

.cont .btn:hover {
    transform: scale(1.1);
}


.cont .ab {
    position: relative;
}

.cont .right {
    position: absolute;
    top: 0px;
    left: 60%;

}

.cont input {
    width: 70%;
    padding: 5px;
    border: none;
    background-color: inherit;
    border-bottom: solid 2px brown;

}

.cont input:focus {
    outline: none;
    box-shadow: 3px 7px 1px brown;
    padding-left: 10px;
}

.cont span {
    width: 5%;

    color: brown;

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
</style>
<script>
var act = window.innerHeight;
var wid = window.innerWidth;
var go = act - 60
$('.cont').css('height', go)
$('.cont').css('width', wid - 200)
$('.abs,.ret').click(function() {
    var page = $(this).attr('href');
    $('#dbod').load(page);
    return false;
})
</script>