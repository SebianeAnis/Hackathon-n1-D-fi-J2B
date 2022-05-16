@extends('layouts.default')
@section('contenu')

@auth
@can('access-admin')


<h1>Enregistrer une entreprise</h1>

<form method="POST" action="/creerentreprise" >

@csrf

<label>  Nom de l'entreprise :  </label>
<input type="text" name="nom_entreprise">
<br>

<label> Numéro de téléphone de l'entreprise :  </label>
<input type="text" name="telephone">
<br>

<label>  Numéro de Siret :  </label>
<input type="text" name="siret">
<br>

<label>  Adresse :  </label>
<input type="text" name="adresse">
<br>

<button type="submit" value="ajouter"> Enregistrer </button>

<br><br><br>
<a href="/profils">Entreprises</a>

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

