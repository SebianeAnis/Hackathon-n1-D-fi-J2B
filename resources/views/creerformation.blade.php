@extends('layouts.default')
@section('contenu')

@auth
@can('access-admin')

<h1>Enregistrer une formation</h1>

<form method="POST" action="/creerformation" >

@csrf

<label>   Nom de la formation : </label>
<input type="text" name="nom_formation">
<br>

<label> Prix de la formation :   </label>
<input type="text" name="prix">
<br>

<label>  Durée :  </label>
<input type="text" name="duree">
<br>

<label>  Description :  </label>
<input type="text" name="description">
<br>

<button type="submit" value="ajouter"> Enregistrer </button>
<br>

<a href="/profils">Formations</a>
</form>




@endcan


@can(!'access-admin')

<p>
Vous n'avez pas accès à cette page.
</p>
@endcan

@endauth

@guest

Veuillez vous connecter

<a href="login">Connexion</a>
@endguest
@endsection

