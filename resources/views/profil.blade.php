@extends('layouts.default')
@section('contenu')

<div class="contenutexte">

<h1>Le profil de {{$user->name}} : </h1>
<hr>

<p> <p>Nom : {{$user->name}} </p>
<br>
<p> Email : {{$user->email}} </p>
<br>
<p>  Role : {{$user->role}} </p>
<br>

<p>  Photo : {{$user->profil ? $user->profil->picture : "pas de photo renseignée"  }} </p>
<br>
<p>  Adresse : {{$user->profil ? $user->profil->adress : "pas d'adresse renseignée" }} </p>
<br>
<p>  Téléphone : {{$user->profil ? $user->profil->numberphone : "pas de téléphone renseigné" }} </p>
<br>



<p>Création : créé le {{$user->created_at->format('d/m/Y')}}</p>

<hr>

<p>Profil non complété ? Veuillez le compléter.</p> <br>
<a href="/creerprofil"> Compléter  </a>
</div>
@endsection

