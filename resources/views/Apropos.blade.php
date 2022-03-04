<div class="mavu">
    <i class="joi fas fa-bars"></i>
    <ul class="sub">
        <li><a href="/nextone">NEXT ONE</a></li>
        <li><a href="/somme">QUI SOMMES-NOUS?</a></li>
        <li><a href="/service">SERVICES ET ATOUTS</a></li>
    </ul>
    <div id="contt">

    </div>


</div>
<style>
.mavu i {
    position: absolute;
    position: fixed;
    top: 70px;
    left: 15px;
    cursor: pointer;
    color: tomato;
    font-size: 18px;
    z-index: 20;
}

.mavu {
    position: relative;
    width: 100%;
    padding: 0px 10px;

    background: linear-gradient(130deg, rgb(219, 219, 205), rgb(187, 187, 235));
    font-size: 15px;
    font-family: cursive;

    box-shadow: 3px 7px 8px #888888;


    height: auto;
    overflow-y: auto;
    scrollbar-width: none;

}




#contt {
    height: auto;
    width: 100%;

}

.mavu .sub {

    display: flex;
    justify-content: space-around;
    align-items: center;


    position: fixed;
    top: 69px;
    left: 15%;
    width: 60%;

    padding: 5px;

    z-index: 20;
}


.sub a {
    color: chocolate;
    box-shadow: 3px 7px 8px #888888;
    padding: 3px;
    background-color: white;
    font-family: cursive;
    border-radius: 5px;
    width: 182px;
    text-align: center;
    margin: auto;
    margin-bottom: 10px;
}

.sub a:hover {
    background-color: #e73b3bc7;
    color: white;

}

.sub li {
    transition: 1s;
}

.sub li:hover {
    transform: scale(0.9);
}

@media screen and (max-width:765px) {
    .mavu {
        padding: 0 5px;
    }

    .sub li:hover {
        transform: scale(1);

    }

    .mavu ul.sub {
        flex-direction: column;
        position: absolute;
        position: fixed;
        background-color: #fcfafa;
        border-radius: 5px;
        top: 89px;
        left: 0;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        padding: 5px 0;
        transition: 2s;
        width: 100vw;
        display: none;
        margin: 0;
        padding: 5px 0;
    }

    .mavu ul li {
        display: flex;
        padding: 5px 0;
        align-items: center;
        justify-content: center;
    }

    .sub a {
        width: 100%;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: none;
        font-size: 13px;
    }

    .mavu ul li a:hover {
        background: gray;
    }

}
</style>
<script>
var act = window.innerHeight;
var wid = window.innerWidth;
if (wid < 765) {
    $('.mavu .sub a').click(function() {
        $('.mavu .sub ').hide()
    })
}
$('.mavu i ').click(function() {
    $('.mavu .sub').toggle()
})

$("html, body").animate({
    scrollTop: "0"
});
$('#contt').load('nextone');
$('.mavu a').click(function() {
    $("html, body,.mavu").animate({
        scrollTop: "0"
    });
    var pag = $(this).attr('href');
    $('#contt').load(pag);
    return false;
});
</script>