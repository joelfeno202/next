<div class="cont">


    <x-slot name="logo">

    </x-slot>

    <!-- Session Status -->
    <x-auth-session-status :status="session('status')" />

    <!-- Validation Errors -->


    <form method="POST" action="{{ route('login') }}">
        @csrf
        <x-auth-validation-errors :errors="$errors" />
        <div class="bfv">
            <a href="/"> <img style="cursor: pointer;" class="ret" src="{{asset('images/next_one1.jpg')}}" width="50px"
                    height="50px"></a>
            <p style="font-family: cursive;color: brown;">Se Connecter</p>
        </div>
        <!-- Email Address -->
        <hr>
        <div class="qw">

            <div class="dv1">
                <div>
                    <x-label for="email" :value="__('E-mail')" />

                    <input id="email" class="" type="email" name="email" :value="old('email')" autofocus />
                </div>

                <!-- Password -->
                <div>
                    <label>Mot de passe</label>

                    <input id="password" class="l" type="password" name="password" autocomplete="current-password" />
                </div>

                <!-- Remember Me -->
                <div class="">
                    <label for="remember_me" class="mop">
                        <p style="font-size: 15px;"><input id="remember_me" type="checkbox" name="remember"> Me souvenir
                        </p>

                    </label>
                    <style>

                    </style>
                </div>
            </div>
        </div>
        <hr>
        <div class=" flex items-center  mt-4">
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                {{ __('Mot de passe oublier?') }}
            </a>
            @endif

            <x-button class="ml-3 btn">
                {{ __('CONNEXION') }}
            </x-button>
        </div>
    </form>
</div>
<style>
hr {
    color: red;
    font-size: 20px;
    width: 98%;
}


.bfv {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}

.flex {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}

.qw {
    display: flex;
    align-items: center;
    justify-content: center;
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