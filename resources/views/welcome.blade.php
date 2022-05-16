@extends('layouts.default')
@section('contenu')

<div class="imagetheatre" > 
<body class="antialiased">




<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
@if (Route::has('login'))
<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
@auth


<br><br>
<br><br>
<br><br><br>
<br><br>
<br>



@if (Route::has('register'))
@endif
@endauth
</div>
</div>
@endif

 <h1 >Bienvenue chez J2B :</h1>
 <br><br><br>
 <p class="presentationj2b">
     L’Agence J2B a été créée en 2005 par Jean-Bruno Brunat dans le but d’intégrer les techniques artistiques dans l’entreprise au bénéfice des collaborateurs et des entreprises, en renforçant le savoir-être, la créativité, l’audace, et la confiance de chacun.
     <br>
     <br>
D'abord incubée par l'entreprise Orange, l'Agence J2B s'est développée autour de trois filières : 
<br>
J2B Coaching, J2B Formation et J2B Évènement. Aujourd'hui elle compte plus de 50 artistes, formateurs et coachs pour délivrer le savoir-faire artistique en l'adaptant au monde de l'entreprise.
<br>
L'Agence J2B c'est avant tout l'application constante des valeurs bien ancrées au sein de l'agence : créativité, accompagnement, audace et expérience.
<br>
<br>
Nous travaillons avec des petites, moyennes et grandes entreprises pour former les collaborateurs aux techniques scéniques et adapter ces connaissances dans leur quotidien en entreprise.
<br>
<br>
Avec nos formations adaptées aux activités professionnelles, nos coachings personnalisés et en transformant l'entreprise en lieu de théâtre, l’Agence J2B met les Artistes au service de vos Audaces !</p>
</div>

<br><br><br>
<br><br><br>
<br><br>
<br>


<br><br><br>
<br><br>
<br>
<br><br><br>
<br><br><br>




<br><br>


@endsection
