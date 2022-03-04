<div class="conta">
    <div class="lop">
        <div class="div">
            <h2> NEXT ONE : PRODUITS COMMERCIALISES</h2>
            <div class="cer">
                <button class="e"><i class="fas fa-search"></i></button>
                <a href="{{route('ajout-produit')}}" class="b"> AJOUTER</a>
                <a href="" class="c"> SUPPRIMER </a>
            </div>

        </div>
        <style>
        .b {
            background-color: cornflowerblue;
            padding: 5px;
            border-radius: 5px;
        }

        .c {
            background-color: rebeccapurple;
            padding: 5px;
            border-radius: 5px;
            margin-left: 15px;
        }

        .cer {

            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }

        .div button {
            height: 30px;
            cursor: pointer;
            width: 30px;
            border-radius: 100%;
            border: none;
            margin-right: 15px;
            display: flex;

            align-items: center;
            justify-content: center;
        }

        .div i {
            height: 35px;
            cursor: pointer;
            width: 35px;
            border-radius: 100%;
            border: none;

            display: flex;

            align-items: center;
            justify-content: center;
        }

        .b:hover {
            box-shadow: 3px 7px 8px cornflowerblue;

            padding: 5px;
        }

        .c:hover {
            box-shadow: 3px 7px 8px rebeccapurple;

            padding: 5px;
        }
        </style>

        <form class="rech">
            @csrf
            <input class='val' type="text">

            <div class="resulta">
                <div class="result">

                </div>
            </div>
        </form>
        <style>
        .rech {

            padding: 5px;
        }

        .rech input {
            width: 50%;
            height: 50px;
            border: none;
            border-radius: 50px;
            padding-left: 15px;
            box-shadow: 0px 0px 20px gray;
        }

        .rech input:focus {
            outline: none;
            box-shadow: 0px 0px 20px red;
        }
        </style>
        @if(count($produits)>0)
        @foreach($produits as $produit)
        <ul class="product_data">
            <input type="hidden" value="{{$produit->id}}" class="pro_id">
            <li>
                <h6 class="num">{{$produit->id}}</h6><span>Nom</span><br><br>{{$produit->nomProduit}}
            </li>

            <li><span> Image</span> <br><br><img class='imag' src="{{$produit->image}}" alt="ff">
            </li>

            <li>
                <span>Catégorie</span><br><br>{{$produit->categorie}}
            </li>

            <li> <a class='voir pl' href="{{route('voir-produit',['id'=>$produit->id])}}">VOIR</a> <a class="ed bb pl"
                    href="{{route('update-produit',['id'=>$produit->id])}}">EDITER</a> <br>
                <a id="sup" class="supp" href="{{route('supprimer-produit',['id'=>$produit->id])}}"
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
    height: 85px;
    padding: 5px;
    font-family: cursive;
    font-size: 13px;
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
    position: fixed;
    top: 50px;
    left: 5px;
    margin: auto;
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
    color: brown;
    text-align: center;
    font-family: cursive;
    background: linear-gradient(10deg, burlywood, rgba(224, 200, 200, 1));
    font-size: 12px;
    z-index: 20;
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
    padding-top: 70px;

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
$('.c').click(function(e) {
    e.preventDefault()
    $('.ok').css('display', 'none')

    $.ajax({
        url: '/supp-tous',
        method: 'GET',
        success: function(re) {
            alert(re.status)

        }

    })
})




$('ul').click(function() {
    var bg = $(this).css('background')

    $(this).css('background', 'white').addClass('ok')
    if (bg == 'rgba(0, 0, 0, 0) none repeat scroll 0% 0%') {
        var id = $(this).closest('.product_data').find('.num').html()
        var _token = $(this).closest('.product_data').find('input[type="hidden"]').attr('value');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var val = '1'
        $.ajax({
            url: "supp-all",
            data: {
                id,
                _token,
                val,
            },
            dataType: 'json',
            method: "get",
            success: function(data) {

            }
        })

    } else {
        $(this).css('background', 'white').removeClass('ok')
        var val = '0'
        var id = $(this).closest('.product_data').find('.num').html()
        $(this).css('background', 'rgba(0, 0, 0, 0) none repeat scroll 0% 0%')
        var id = $(this).closest('.product_data').find('.num').html()
        var _token = $(this).closest('.product_data').find('input[type="hidden"]').attr('value');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "supp-all",
            data: {
                id,
                _token,
                val,
            },
            dataType: 'json',
            method: "get",
            success: function(data) {

            }
        })
    }

})




$('form').submit(function(e) {
    e.preventDefault()
    cont = $('form input.val').val()
    var _token = $('input[type="hidden"]').attr('value');

    $.ajax({
        url: "/recher",
        data: {
            cont,
            _token
        },
        dataType: 'json',
        method: "POST",
        beforeSend: function() {
            $('.result').html(
                '<img width="100px" style="border-radius:100%" heigth="100px" src="images/MEBIB.gif" alt=""> '
            );
        },

        success: function(data) {

            $('.result').html(' ');
            $('.resultat').show();
            if (data.length <= 0) {
                $('.result').append(
                    '<p style="color:red;"> Accun resultat corepond au "' + cont +
                    '"</p>');
            } else {
                for (let index = 0; index < data.length; index++) {
                    $('.result').append(
                        ` <ul style='background:gray;'>

<li>
    <h6 class="num">` + data[
                            index].id + `</h6><span>Nom</span><br><br>` + data[
                            index].nomProduit + `
</li>

<li><span> Image</span> <br><br><img class='imag' src="` + data[
                            index].image + `" alt="ff">
</li>

<li>
    <span>Catégorie</span><br><br>` + data[
                            index].categorie + `
</li>

<li> <a onclick="   var page = $(this).attr('href');
    $('#dbod').load(page);
    return false;
    " class='voir pl' href="voir-produit/` + data[
                            index].id + `">VOIR</a> <a onclick="   var page = $(this).attr('href');
    $('#dbod').load(page);
    return false;
    " class="ed bb pl"
        href="update-produit/` + data[
                            index].id + `">EDITER</a> <br>
    <a id="sup" class="supp" href="supp-produit/` + data[
                            index].id + `"
        class="delete">SUPPRIMER</a>
</li>
</ul>
<hr><hr>`
                    );
                }
            }





        }





    })
})
$('.rech').hide()
$('.div i').click(function() {
    $(".lop").animate({
                scrollTop: "0"
            });

    $('.rech').toggle()
    var counter = 0;
    var c = 0;
    var i = setInterval(function() {
        counter++;
        c++;
        if (counter == 20) {
            clearInterval(i);

            $('input').trigger('focus');
        }
    }, 30);
})
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