@extends('layouts.default')
@section('contenu')

@auth
@can('access-admin')

<div class="enregistrements">

<div class="liste">
    <h3>Liste des utilisateurs enregistrés :  <a href="/creeruser">(+)</a> </h3>

   
 @foreach($users as $user) 

 
 <a href="profil/{{$user->id}}">{{$user->name}}</a>
<hr>

 @endforeach
</div>

<div class="liste">
 <h3>Liste des entreprises enregistrées : <a href="/creerentreprise">(+)</a></h3>


 @foreach($entreprises as $entreprise) 

<a href="entreprise/{{$entreprise->id}}">{{$entreprise->nom_entreprise}}</a>
<hr>
@endforeach
</div>


<div class="liste">
<h3>Liste des formations enregistrées : <a href="/creerformation">(+)</a></h3>


@foreach($formations as $formation) 

<a href="formation/{{$formation->id}}">{{$formation->nom_formation}}</a>
<hr>
@endforeach
</div>

<div class="liste">

<h3>Liste des factures créées : <a href="/creerfacture">(+)</a></h3>


<div class="liste">
@foreach($factures as $facture) 


<a href="facture/{{$facture->id}}">Facture n°{{$facture->id}} ({{$facture->nom_entreprise}})</a>
<hr>

@endforeach
 </div>


@endcan


@can(!'access-admin')


Vous n'avez pas accès à cette page.

@endcan

@endauth
@guest

Veuillez vous connecter

<a href="login">Connexion</a>
@endguest
</div>
@endsection


