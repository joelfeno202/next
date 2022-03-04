<div class="content">

    <div class="alert">
        <div class="tete">
            <p class="message">Message</p>
            <p class="fermer">x</p>
        </div>
        <div class="corps">
            <span class="contenu">ddd</span>
        </div>

    </div>
    <style>
    .alert .tete {
        background-color: gray;
        height: 30%;
        display: flex;
        justify-content: space-between;
        padding: 10px 15px;
        align-items: center;

        border: none;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    .alert .fermer {
        color: rgb(230, 42, 42);
        font-size: 40px;
        padding: 5px;
        font-family: cursive;
        opacity: 0.5;

    }

    .alert .fermer:hover {
        opacity: 1;
        cursor: pointer;
    }

    .alert .message {
        color: tomato;
        font-family: cursive;
    }

    .alert .corps .contenu {
        color: green;
    }

    .alert .corps {
        justify-content: center;
        display: flex;
        align-items: center;

        background-color: rgb(235, 223, 225);
        height: 70%;
        border: none;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;

    }

    .alert {
        background-color: rgba(206, 153, 54, 0.8);
        font-weight: bold;
        opacity: 0;
        position: absolute;
        position: fixed;
        display: none;
        top: 30%;
        left: 40%;
        width: 300px;
        z-index: 20;
        border-radius: 15px;
        height: 100px;
    }
    </style>
    <br>
    <br>
    <p class="tae">Recherche sur les Produits commercialisés (Routeur, Switch,......)</p>
    <form>
        @csrf
        <input id="te" type="text" placeholder="Recherche sur next one ..">
        <button style='color:gray' id="submit"><i class="fas fa-search"></i> <span> Recherche</span> </button>


    </form>
    <table id='resultat' style="display: none;">
        <thead><br>
            <th>Resultat(s)</th>
            <br>
        </thead>
        <tbody id="result">

        </tbody>
    </table>

    <br>
</div>
<style>
#result {

    display: flex;
    align-items: initial;
    justify-content: space-around;
}

.content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-direction: column;
    height: 100vh;


    width: 100%;



}

tbody {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    justify-content: center;
    align-items: center;
}

.content h1 {
    font-family: cursive;
    color: darksalmon;
    font-size: 18px;
    background-color: white;
    width: 95%;
    border-radius: 15PX;
    padding: 5px;
    box-shadow: 0px 0px 20px gray;
    margin-top: 25px;
}

.content form {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 85px 0;
    width: 95vw;
    transition: 1s;
    margin-bottom: 300px;
}

table {
    width: 100%;

}

.tae {
    margin-top: 40px;
}

.content input {
    padding: 10px;
    padding-left: 15px;
    width: 50%;
    border: none;
    border-radius: 15px;
    box-shadow: 0px 0px 20px gray;
}

.content input:focus {
    box-shadow: 0px 0px 20px skyblue;
}

.content button {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    padding: 10px;
    margin-left: 5px;
    width: 15%;
    font-weight: bold;
    border: none;
    border-radius: 15px;
    font-family: cursive;
    background-color: tan;
    opacity: 0.8;
}

@media screen and (max-width:741px) {
    button span {
        display: none;
    }
}

.content button:hover {
    opacity: 1;
    box-shadow: 0px 0px 20px tomato;
}
</style>
<script>
$(document).ready(function() {
    $("html").animate({
        scrollTop: "0"
    });
    $('.alert').hide()
    $('.fermer').click(function() {
        $('.alert').hide()
    })
    $('.content input').trigger('focus');

    $('#submit').click(function(event) {

        event.preventDefault();
        $('.content form').css('margin', ' 20px 0')

        var cont = $('#te').val();
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
                $('#result').html(
                    '<img width="100px" style="border-radius:100%" heigth="100px" src="images/MEBIB.gif" alt=""> '
                );
            },
            success: function(data) {

                $('#result').html(' ');
                $('#resultat').show();
                if (data.length <= 0) {

                    $('#result').append(
                        '<p style="color:red;"> Accun resultat corepond au "' + cont +
                        '"</p>');
                } else
                    $('.content ').css('height', 'auto')
                for (let index = 0; index < data.length; index++) {

                    //  $('#result').append('<tr><td>' + data[index].id + '</td><td>' + data[index].categorie + '</td><td>' + data[index].nomProduit + '</td></tr>');
                    $('#result').append(
                        `<div class="mav  product_data">
                                        <input type="hidden" style="display:none"  value="` +
                        data[
                            index].id +
                        `" class="pro_id">
                                                    <h1 style='width:200px; border-radius:5px;'><span style="font-size:15px;">` +
                        data[index]
                        .categorie +
                        `</span> </h1>
                                                    <div class="rou ime">
                                                    <div class="route">
                                                
                                                    <input style="display: none;" type='text' class="produc_id" value="` +
                        data[
                            index]
                        .id +
                        `">
                                                    <input style="display: none;" type='text' class="produc_prix" value="` +
                        data[
                            index].prix + `">

                                            <div class="imf"> <a onclick="  var page = $(this).attr('href');
                                            $('#content').load('/produit');
                                            
       
                                            var counter = 0;
                                                        var c = 0;
                                                        var i = setInterval(function() {


                                                            counter++;
                                                            c++;
                                                            if (counter == 20) {
                                                                clearInterval(i);
                                                                $('.cc').load(page);

                                                            }
                                                        }, 30);
           
                                                return false; " href="voir-produit-routeur/` + data[index].id +
                        `"><img src="` +
                        data[index].image + `" alt=""></a></div>
                                                    <h2 class="oi">` + data[index].nomProduit + `</h2>
                                                    <div class="boutt">
                                                    <a onclick="  var page = $(this).attr('href');

                                                    $('#content').load('/produit');

                                                    var counter = 0;
                                                        var c = 0;
                                                        var i = setInterval(function() {


                                                            counter++;
                                                            c++;
                                                            if (counter == 20) {
                                                                clearInterval(i);
                                                                $('.cc').load(page);

                                                            }
                                                        }, 30);




                                            
                                                return false;"
                                                    href="voir-produit-routeur/` + data[index].id + `"  class="im voir"><i class="fas fa-eye"></i></a>
                                        
                                                </div>
                                                    </div>
                                                </div>
                                                    </div>
                                                    <style>
                                                        .mav {
                                                        padding-top: 15px;margin:5px;
                                                        }
                                                        .boutt {
                                                        display: flex;
                                                        }
                                                        .imf {
                                                            overflow: hidden;
                                                            width: 190px;
                                                            height: 190px;
                                                            box-shadow: 0px 0px 10px gray;
                                                            border-radius: 10px;
                                                            margin-bottom: 10px;
                                                            }

                                                            .imf:hover {
                                                            box-shadow: 0px 0px 10px red;
                                                            }

                                                            .boutt a {
                                                            width: 100%;
                                                            border-radius: 5px;
                                                            padding: 5px;

                                                            }

                                                            .rou {
                                                            display: flex;
                                                            align-items: center;
                                                            justify-content: space-around;
                                                            flex-wrap: wrap;

                                                            }

                                                            .route {
                                                                margin: 15px;
                                                            }

                                                            .route img {
                                                            width: 190px;
                                                            height: 190px;
                                                            box-shadow: 0px 0px 10px gray;
                                                            border-radius: 10px;
                                                            }

                                                            .route img:hover {
                                                            box-shadow: 0px 0px 10px red;
                                                            transform: scale(1.2);
                                                            }

                                                            .mav h1 {
                                                            text-align: center;
                                                            font-family: cursive;
                                                            color: teal;
                                                            margin: 9px;
                                                            margin-bottom: 19px;
                                                            font-size: 15px; box-shadow: 3px 7px 8px #888888;    background-color: white;

                                                            padding:5px;
                                                            }

                                                            .im {
                                                            background-color: green;
                                                            opacity: 0.7;
                                                            color: red;
                                                            font-family: cursive;marging-left:5px;
                                                            }

                                                            .im:hover {
                                                            opacity: 1;
                                                            color: white;
                                                            }

                                                            .im1 {
                                                            background-color: rgb(243, 170, 33);
                                                            opacity: 0.5;
                                                            font-family: cursive;
                                                            }

                                                            .im1:hover {
                                                            opacity: 1;
                                                            color: white;
                                                            }
                                                            .mav h2 {
                                                                        text-align: center;
                                                                        font-family: cursive;
                                                                        color: grey;
                                                                        margin: 9px;
                                                                        margin-bottom: 19px;
                                                                        font-size: 13px;
    height: 50px;
                                                                        width: 190px;
                                                                        margin: auto;
                                                                        padding: 5px;
                                                                        opacity: 0.7;
                                                                        border-radius: 5px;

                                                                    }
                                                                                                </style>
                                `);
                }
            }
        });
    });
})
</script>