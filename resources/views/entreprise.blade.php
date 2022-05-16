@extends('layouts.default')
@section('contenu')


<div class="contenutexte">
   <h1>Entreprise {{$entreprise->nom_entreprise}} : </h1>

<hr>

 <p> Nom :  {{$entreprise->adresse}} </p>
    <br>
  <p> Téléphone : {{$entreprise->telephone}} </p>
    <br>
<p>Création : créé le {{$entreprise->created_at->format('d/m/Y')}}</p>

</div>
@endsection
