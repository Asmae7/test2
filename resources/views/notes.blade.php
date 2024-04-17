<center>
    @if(empty($etudiants))
     <p>Tableau vide</p>
     @else
     <h1>le moyenne de classe est:{{$moyenne=array_sum(array_column($etudiants,'note'))/count($etudiants);}}</h1>
   
     <h1>Liste des Étudiants</h1>
     <p>Nombre total d'étudiants : {{ count($etudiants) }}</p>
     <h2>Étudiants ayant des notes supérieures :</h2>
     <ul>
     @foreach($etudiants as $etudiant)
     @if($etudiant['note'] > $moyenne)
     <li>{{ $etudiant['nom'] }} -Note: {{ $etudiant['note'] }}</li>
     @endif
    
    @endforeach
     </ul>
     @endif
    
    
    </center>