@extends('layouts.default')
@section('contenu')

@auth
@can('access-admin')


<h1>Génerer une Facture </h1>

<form  method="POST" action="/creerfacture" >

@csrf

<label>  Numéro d'affaire : </label>
<input type="text" name="numero_affaire">
<br>



<label>  Numéro de stage : </label>
<input type="text" name="numero_stage">
<br>


<label>  Numéro BDC : </label>
<input type="text" name="numero_bdc">
<br>


<label>  Numéro de la facture : </label>
<input type="text" name="numero_facture">
<br>


<label>  Nom de la formation : </label>
<input type="text" name="nom_formation">
<br>

<label>  Ville de la formation : </label>
<input type="text" name="ville_formation">
<br>

<label>  Nom du comédien : </label>
<input type="text" name="nom_comedien">
<br>


<label>  Nom de l'entreprise : </label>
<input type="text" name="nom_entreprise">
<br>


<label>  Adresse de l'entreprise : </label>
<input type="text" name="adresse_entreprise">
<br>


<label>  Objet de la facture : </label>
<input type="text" name="objet_facture">
<br>


<button type="submit"> Enregistrer </button>
<br><br><br>
<a href="/profils">Factures</a>

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

