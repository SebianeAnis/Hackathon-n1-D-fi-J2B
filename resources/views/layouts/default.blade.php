<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{ asset ('css/style.css')}}">

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>J2B</title>
</head>
<body>

<ul>

<div class="content"> 
<header class="header">

<div class="liens">

@auth
<div>

</div>
<a class="liens" href="/">Accueil </a>

<a class="liens" href="/contact">Contacts </a>
<a class="liens" href="/profil/{{Auth::user()->id}}">Mon profil </a>

@can('access-admin')

<a class="liens" href="/creeruser">Créer un Utilisateur </a>

<a class="liens" href="/creerentreprise">Créer une Entreprise </a> 
<a class="liens" href="/creerformation">Créer une Formation </a>
<a class="liens" href="/creerfacture">Génerer une facture </a>


<a class="liens" href="/profils">Enregistrements </a>

@endcan
<a class="liens" href="/dashboard">Deconnexion</a>
@endauth

@guest
<a class="liens" href="/">Accueil </a>

<a class="liens" href="/login">Se connecter</a>
@endguest

</ul>
</div>
<hr>



</header>

<div class="page">

@yield('contenu')
</div>


<hr>
<footer class="footer" >


<div>CONTACT :</div>
<br>

<div>Site officiel :<a href="www.agence.j2b.com">www.j2b.com</a></div>
<br>

<div>Contacter Emma Brunat  :</div>
<br>
<div>Mail : emma@agencej2b.com</div>
<br>
<div>Numéro de téléphone : +33 6 81 76 95 03 </div>

</footer>
</div>
</body>
</html>


