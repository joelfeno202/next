<div class="cont">
    <div class="div">
        <a href="adresse" class="ret"> <img style="cursor: pointer;" class="ret"
                src="{{asset('images/retour.png')}}"></a>
        <h2> AJOUT: Image,Adresse,Tel et E-mail</h2>
    </div>

    <form action="{{route('ajout-adresse')}}" method='post' enctype="multipart/form-data">
        @csrf

        <p><span> ADRESSE</span> <input class='add' type="text" name='adresse' placeholder='Entrer Adresse' required>
        </p>
        <p><span> TEL</span> <input type="text" class='tel' name='tel' placeholder='Entrer TEL required'></p>
        <p><span> E-MAIL </span> <input type="text" class='mail' name='mail' placeholder='Entrer mail' required></p>
        <p class="ab"> <span>IMAGE </span><input class='titre img' type="file" required name="image"></p>
        <br> <br> <input class='btn' type="submit" value='enregistrer'>
    </form>
</div>
<script>
/*$('.btn').click(function() {
    var add = $('.add').val()
    var tel = $('.tel').val()
    var mail = $('.mail').val()

    let forma = new FormData($('.img')[0])

    var _token = $('input[type="hidden"]').attr('value');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        method: 'POST',
        url: 'ajout-adresse',
        data: {
            'adresse': add,
            'tel': tel,
            'mail': forma[0],
            'image': img,
            _token
        },
        success: function(re) {
            alert(re.status)

        }

    })
})*/
</script>
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