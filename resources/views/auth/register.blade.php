<div class="cont">


    <x-slot name="logo">

    </x-slot>

    <!-- Validation Errors -->


    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        @csrf

        <div class="bfv">
            <a href="/"> <img style="cursor: pointer;" class="ret" src="{{asset('images/next_one1.jpg')}}" width="50px"
                    height="50px"></a>


            <p style="font-family: cursive;color: brown;">S'Inscrire</p>
        </div>

        <!-- Name -->
        <hr>
        <div class="qw">

            <div class="dv1">

                <div>
                    <x-label for="name" :value="__('Nom')" /><br>

                    <x-input id="name" type="text" name="name" :value="old('name')" />
                </div>

                <div>
                    <x-label for="prenom" :value="__('Prenom')" /><br>

                    <x-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" />
                </div>
                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="email" :value="__('E-mail')" /><br>

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" />
                </div>

                <div>
                    <x-label for="ville" :value="__('Ville')" /><br>

                    <x-input id="ville" class="block mt-1 w-full" type="text" name="ville" :value="old('ville')" />
                </div>

                <div>
                    <x-label for="tel" :value="__('Tel')" /><br>

                    <x-input id="tel" class="block mt-1 w-full" type="text" name="tel" :value="old('tel')" />
                </div>
            </div>
            <div class="dv2">
                <div>
                    <x-label for="adresse" :value="__('Adresse')" /><br>

                    <x-input id="adresse" class="block mt-1 w-full" type="text" name="adresse"
                        :value="old('adresse')" />
                </div>

                <div>
                    <x-label for="pays" :value="__('Pays')" /><br>

                    <x-input id="pays" class="block mt-1 w-full" type="text" name="pays" :value="old('pays')" />
                </div>

                <div>
                    <x-label for="image" :value="__('Photo')" /><br>

                    <x-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('pays')" />
                </div>


                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Mot de passe')" /><br>

                    <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                        autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-label for="password_confirmation" :value="__('Confirme mot de passe')" /><br>

                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" />
                </div>
            </div>
        </div>
        <hr>
        <div class="mat flex items-center justify-end mt-4">
            <a href="{{ route('login') }}">
                {{ __('déja inscrire?') }}
            </a>

            <x-button class="btn ml-4">
                {{ __('S\'INSCRIRE') }}
            </x-button>
        </div>
    </form>
    <br><br><br>

</div>
<script>

</script>
<style>
hr {
    color: red;
    font-size: 20px;
    width: 98%;
}

x-label {
    width: 200px;
}

.bfv {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}

.qw {
    display: flex;
    flex-wrap: wrap;

}

.dv1,
.dv2 {
    width: 50%;
}

.cont {
    padding: 10px;
}

.cont p {

    font-size: 25px;
    text-align: center;
    font-weight: bold;
    padding: 5px;
}

.cont form {
    display: flex;
    flex-direction: column;
    padding: 15px;
    margin: auto;
    padding-top: 15px;
    background-color: white;
    text-align: left;
    box-shadow: 3px 7px 8px #888888;
    animation: anim 2s alternate;
}

.cont form:hover {}



.cont input {
    width: 99%;
    height: 50px;
    margin: 5px 0px;
    padding: 5px;
    color: gray;


}

.cont input:focus {
    box-shadow: 0px 0px 20px #f58080;
    outline: none;
    border: none;

}

.cont input:hover {
    box-shadow: 3px 7px 8px #ecbaba;


}

.cont .btn {
    padding: 9px;
    font-family: cursive;
    font-weight: bold;
    border: none;
    opacity: 0.7;
    border-radius: 5px;
    color: white;
    background-color: rgb(204, 128, 128);
}

.cont button:hover {
    opacity: 1;
    color: white;

}

.cont .mat {
    text-align: center;
    margin: 9px;
}

.cont a {
    padding: 7px;
    font-family: cursive;
    font-weight: bold;
    border: none;
    margin-right: 5px;
    opacity: 0.7;
    color: tomato;
    border-radius: 5px;

}

.cont a:hover {}

.ret:hover {
    transform: scale(1.2);

    border: none;
}

@media screen and (max-width:617px) {

    .dv1,
    .dv2 {
        width: 100%;

    }
}
</style>