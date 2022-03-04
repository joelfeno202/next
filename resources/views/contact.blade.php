<div class="form1">
    <div class="dir">
        <div class="foru">
            <h2>Contactez-nous</h2>
            <br>

            <form action="{{route('mail')}}" method='post'>
                @csrf
                <p>Nom : </p><br>
                <p>
                    <input class='nom' type="text" name='nom' required placeholder='  Entrer le nom '>
                </p>
                <br>
                <p>Adresse e-mail : </p><br>
                <p>
                    <input type="text" name='email' required placeholder="  Entrer l' Adresse e-mail">
                </p>
                <br>
                <p>Sujet : </p><br>
                <p>
                    <input type="text" name='sujet' required placeholder='  Entrer le sujet'>
                </p>
                <br>
                <p>Message :</p>
                <br>
                <p> <textarea name="message" required placeholder='  Entrer le  Message......'></textarea></p>
                <br><br>
                <p class='centre'><button type="submit"><i class="fas fa-paper-plane"></i> Envoyer</button></p>

            </form>
            <script>

            </script>
        </div>
        <div class="ri">
            <p><span class="gr"> <i class="fas fa-envelope"></i> </span> next-one@next-one.mg </p><br>
            <p><span class="gr"><i class="fas fa-phone-volume"></i></span> 034 11 029 46 - 22 221 23 </p><br>
            <p><span class="gr"> <i class="fas fa-map-marker-alt"></i></span> Villa Fanambinitsoa - 2eme etage - Près
                Cenam-67 Ha Sud Antananarivo 101 - Madagascar</p>
        </div>
    </div>
</div>
<style>
.dir {
    text-align: center;
    align-items: center;
    display: flex;
    flex-wrap: wrap;
    width: 100%;

    justify-content: center;
    height: 100%;
}
</style>
<script>
$("html, body").animate({
    scrollTop: "0"
});
$('.nom').trigger('focus');
/*$('.ri').css('opacity', '0');
$('.foru').hover(function() {
    $('.ri').css('opacity', '1');
})*/
</script>