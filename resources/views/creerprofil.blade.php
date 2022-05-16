@extends('layouts.default')
@section('contenu')


<h1>Enregistrez votre profil {{Auth::user()->name}} </h1>

<form method="POST" action="/creerprofil" >

@csrf

<label>   Numéro de télephone : </label>
<input value="{{Auth::user()->profil ? Auth::user()->profil->numberphone : 'pas de numero' }}" type="text" name="numberphone">
<br>


<label>  Adresse :  </label>
<input value="{{Auth::user()->profil ? Auth::user()->profil->adress : 'pas dadresse' }} type="text" name="adress">
<br>


<label> Photo :   </label>
<input value="{{Auth::user()->profil ? Auth::user()->profil->picture : 'pas de photo' }}" type="file" name="picture">
<br>


<input value="{{Auth::user()->id}}" type="hidden" name="user_id">
<br>


<button type="submit" value="ajouter"> Enregistrer </button>

<a href="/profil/{{Auth::user()->id}}">Mon profil</a>

</form>


@endsection

