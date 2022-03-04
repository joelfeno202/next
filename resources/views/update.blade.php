<!--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{asset('images/next_one1.jpg')}}" type="image/icon type">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEXT ONE | mije à jour post</title>

</head>

<body>
    <div class="cont">
        <a href="/post">
            <img width='100px' src="{{asset('images/next_one.jpg')}}" alt="logo">
        </a>
        <h1>MISE JOUR POST</h1>
        <form action="{{route('updat-post',['id'=>$post->id])}}" method='post' enctype="multipart/form-data">
            @csrf
            <p class='titre'><span>ID:</span>
                {{$post->id}} </p>
            <p class='titre'><span> NOM POST:</span> <input type="text" name='nom' required value='{{$post->nom}}'></p>
            <p class='titre'><span>CHOISIR UN IMAGE :</span></p>
            <input type="file" required name="image"><br><br>
            <p><img src="{{$post->image}}" width='100px' alt="img"> </p>
            <input class='btn' type="submit" value='enregistrer'>
        </form>

    </div>
</body>

</html>-->
<div class="cont">
    <div class="div">
        <a href="/post" class="ret"> <img style="cursor: pointer;" class="ret" src="{{asset('images/retour.png')}}"></a>
        <h2> MISE A JOUR :Carousel</h2>
    </div>

    <form action="{{route('updat-post',['id'=>$post->id])}}" method='post' enctype="multipart/form-data">
        @csrf

        <p><span> NOM</span> <input type="text" name='nom' required value='{{$post->nom}}'></p>

        <p class="ab"> <span>IMAGE </span><input class='titre' type="file" required name="image"><img class='right'
                src="{{$post->image}}" alt="img"></p>
        <br> <br> <input class='btn' type="submit" value='enregistrer'>
    </form>
</div>
<style>
.cont {
    background: linear-gradient(10deg, burlywood, rgba(224, 200, 200, 0.267));

}

.cont img {
    width: 80px;
    height: 80px;
    text-align: l;

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