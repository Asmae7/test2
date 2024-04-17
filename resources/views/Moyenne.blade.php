<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <h1>Bulletin</h1>
        <tr>
            <td>nom etudiant</td>
            <td>{{ $nom }}</td>
            <td>Moyenne</td>
            <td>{{ $moy }}</td>
            <td>decision</td>
            <td> @if ($moy>=10)
                <h1>Admis</h1>
                @elseif ($moy>7 && $moy<=10)
                <h1>rattrapage</h1>
                @else 
                <h1>non admis</h1>
               
        
                
            @endif</td>
        </tr>
    </table>
</body>
</html>