<div class="cont">
    <div class="div">
        <a href="/prod" class="ret"> <img style="cursor: pointer;" class="ret" src="{{asset('images/retour.png')}}"></a>
        <h2> AJOUT:PRODUIT</h2>
    </div>

    <form enctype="multipart/form-data" method="POST">
        @csrf
        <div class="message"></div>
        <div class="message1"></div>
        <p><span> CATEGORIEN</span> <input type="text" name='categorie' class='categorie' placeholder='Entrer categorie'
                required></p>

        <p><span> NOM PRODUIT</span> <input type="text" class='nomProduit' name='nomProduit'
                placeholder='Entrer nom produit' required>
        </p>
        <p><span> PRIX</span> <input type="text" class='prix' name='prix' placeholder='Entrer prix' required></p>
        <p><span> NOMBRE</span> <input type="text" class='nombre' name='nombre' placeholder='Entrer nombre' required>
        </p>
        <p><span> DESCRIPTION</span> <input type="text" class='description' name='description'
                placeholder='Entrer description' required>
        </p>
        <p class="ab"> <span>IMAGE </span>
            <input class='titre image' name='image' type="file" required>
        </p>
        <button class='btn' type='submit'>Enregistrer</button>
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

.message {
    display: none;
    padding: 5px;
    animation: 2s mlm alternate;
}

.message1 {
    display: none;
    padding: 5px;
    animation: 2s mlm alternate;
}

@keyframes mlm {
    0% {
        transform: scalex(0);
    }

    100% {
        transform: scalex(1);
    }

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
$('form').submit(function(e) {
    e.preventDefault()

    $.ajax({
        url: "ajout-produit",
        data: new FormData(this),
        dataType: 'json',
        method: "POST",
        contentType: false,
        caches: false,
        processData: false,
        success: function(res) {


            if (res.contenu) {

                var counter = 0;
                var c = 0;
                var i = setInterval(function() {

                    $('.message1').css('display', 'block').html(res.message).css('color',
                        'white').css(
                        'background', 'green')
                    counter++;
                    c++;
                    if (counter == 20) {
                        clearInterval(i);
                        $(".message1").animate({
                            'opacity': '1',


                        }, 1000, function() {
                            $(this).css({
                                'display': 'none'
                            });
                        });
                    }
                }, 300);
                $('.message').css('display', 'none')
                $('.categorie').val('')
                $('.nomProduit').val('')
                $('.prix').val('')
                $('.nombre').val('')
                $('.description').val('')
                $('.image').val('')
            } else {
                $('.message').css('display', 'block').html(res.message).css('color', 'white').css(
                    'background', 'red')


            }


        }
    })


})


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