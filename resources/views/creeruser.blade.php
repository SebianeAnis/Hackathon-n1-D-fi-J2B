@extends('layouts.default')
@section('contenu')

@auth
@can('access-admin')

<h1>Créer un Utilisateur</h1>


<form method="POST" action="/creeruser" >

@csrf

<label>  Nom : </label>
<input type="text" name="name">
<br>


<label>  Email :  </label>
<input type="mail" name="email">
<br>


<label> Mot de Passe :   </label>
<input type="password" name="password">
<br>

<label>Selectionnez un rôle :</label>
<select name="role">
<option>Rôles
<option value="comédien ">Comédien</option>
<option value="entreprise">Entreprise</option>
</select><br>

<button type="submit" value="ajouter"> Enregistrer </button>

<br><br><br>
<a href="/profils">Utilisateurs</a>

</form>




@endcan

@can(!'access-admin')


Vous n'avez pas accès à cette page.

@endcan

@endauth

@guest
<p>
Veuillez vous connecter
</p>
<a href="login">Connexion</a>
@endguest

@endsection

