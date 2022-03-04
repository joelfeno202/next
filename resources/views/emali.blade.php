@component('mail::message')
<P class='p1'>NEXT ONE MESSAGE</P>
<style>
.p1 {
    color: red;
    background-color: gray;
}
</style>

<p>NOM : {{$data['nom']}}</p>
<P>SUJET: {{$data['sujet']}}</P>
<p>ADRESS E-MAIL: {{$data['mail']}}</p>
<p>DATE: {{date('d/m/y -H:i:s')}}</p>
<br>

<p>MESSAGE</p>
<p>{{$data['message']}}</p>
@component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
Next One
@endcomponent
MERCI ...
@endcomponent