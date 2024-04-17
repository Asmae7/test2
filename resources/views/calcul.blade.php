<!DOCTYPE html>
<html>
<head>
    <title>Calcul de prix</title>
</head>
<body>
    
    <h1>Calcul de prix pour {{$nbrcopie}} copies</h1>
    @if($nbrcopie < 10)
        <p>Le prix est  {{ $nbrcopie * 0.5 }} DH </p>
    @elseif($nbrcopie >= 10 && $nbrcopie <= 20)
        <p>Le prix est {{ $nbrcopie * 0.4 }} DH </p>
    @else
        <p>Le prix est  {{ $nbrcopie * 0.3 }} DH </p>
    @endif
</body>
</html>
