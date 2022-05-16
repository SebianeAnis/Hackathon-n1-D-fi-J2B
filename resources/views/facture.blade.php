<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{ asset ('css/style.css')}}">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Facture </title>
</head>
<body id="bill">
<div class="BLOC">
<div class="hg">
<img src="{{ asset ('pictures/logo.png')}}" class="logo"></img>
<div class="coor">
<p>17, rue Louis</p>
<p>92160 ANTONY</p>
<p>emma.brunat@gmail.com</p>
<p>06 81 76 95 03</p>
<p>N° TVA Intra. FR17481413847</p>
<br><br><br><br><br><br><br><br><br><br><br><br>
<p>Numéro de facture : 000{{$facture->numero_facture}}</p>
</div>
</div> 
<div class="hd">
<p>{{$facture->nom_entreprise}}</p>
<p>{{$facture->adresse_entreprise}}</p>
<p>{{$facture->ville_formation}}</p>
<br><br><br><br><br><br><br><br>
<p>N° d'affaire : {{$facture->numero_affaire}}</p>
<p>N° de stage : <strong>{{$facture->numero_stage}}</strong></p>
<p>N° BDC : {{$facture->numero_bdc}}</p>
<br><br><br><br><br><br><br><br><br><br><br>
<div>
<p>Réalisé le :<font size="-3"> {{$facture->created_at->format('d/m/Y')}}</font></p>
</div>
</div>
</div>
<br><br><br>
<div class="recap">
<p> {{$facture->nom_formation}} - {{$facture->ville_formation}} – Affaire n° {{$facture->numero_affaire}} – {{$facture->created_at->format('d M Y')}} - {{$facture->nom_comedien}}</p>
</div> 
<table class= "tableau">
<thead class="ht">
<tr>
<th class="nombre">Désignation</th>
<th class="nombre">Prix Unitaire HT</th> 
<th class="nombre">Nombre<br>(Unité : Jour)</th> 
<th class="nombre">TVA</th> 
<th class="nombre">Montant HT</th>
</tr>
</thead>
<tbody class="bt">
<tr>
<td>{{$facture->nom_formation}} - {{$facture->ville_formation}} – Affaire n° <br>{{$facture->numero_affaire}} – {{$facture->created_at->format('d M Y')}}</td>
<td class="nombree">1,00 €</td>
<td class="nombree">1</td>
<td class="nombree">20 %</td>
<td class="nombree">1,00 €</td>
</tr> 
<tr>
<td>FORFAIT FRAIS (1 jours -<br>KILOMETRAGE AR 39 km)</td>
<td class="nombree">1,00 €</td>
<td class="nombree">1</td>
<td class="nombree">20 %</td>
<td class="nombree">1,00 €</td>
</tr> 
</tbody> 
</table>
<br><br><br><br><br><br>
<table class="total">
<tbody>
<tr class= "para">
<td rowspan=3 class= "ligne">En cas de retard de paiement, seront exigibles, conformément à<br>l'article L 441-6 du code de commerce, une indemnité calculée sur<br>la base de trois fois le taux de l'intérêt légal en vigueur ainsi qu'une<br>indemnité forfaitaire pour frais de recouvrement de 40€.</td>
<td class= "ligne">TOTAL HT</td>
<td class= "ligne">2,00 €</td>
</tr>
<tr class= "para">
<td class= "ligne">TVA 20%</td>
<td class= "ligne">0,40 €</td>
</tr>
<tr class= "para">
<td class= "ligne">TOTAL TTC</td>
<td class= "ligne">2,40 €</td>
</tr> 
</tbody>
</table>
<br><br>
<p class="recep">En votre aimable règlement à 30 jours en date de réception de notre facture.</p>
<br><br><br>
<div class= "écriture">
<p>SARL au capital de 10000 € inscrite au RCS de Nanterre – 481 413 847</p>
<p>N° TVA Intra. FR17481413847</p>
<div class="fin"> 
<script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>

<img src="{{ asset ('pictures/fin.png')}}" onclick="generatePDF()"></img>

</div>
</div>
<script>

function generatePDF() {
    const element = document.getElementById("bill");
    
    html2pdf()
    .from(element)
    .save();
}
</script> 
</body>
</html>