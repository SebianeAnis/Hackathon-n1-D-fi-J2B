@extends('layouts.default')
@section('contenu')

<div class="contenutexte">

    <h1>La formation {{$formation->name}} : </h1>

<hr>

  <p> Nom : {{$formation->nom_formation}}  </p>
    <br>
  <p> Prix : {{$formation->prix}}  </p>
    <br>
  <p>  Durée : {{$formation->duree}}  </p>
    <br>
  <p>  Description : {{$formation->description}}  </p>
    <br>
   <p> Création :créé le {{$formation->created_at->format('d/m/Y')}} </p>
</div>

@endsection


