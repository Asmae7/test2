@props(['users'])
<div>Bonjour {{$users}}
    <table>
        <tr>
            <th>id hh</th>
            <th>nom</th>
            <th>metier</th>
        </tr>
        @foreach ($users as $user)
              <tr>
                <td>{{ $user['id'] }}</td>
                <td>{{ $user['nom'] }}</td>
                <td>{{ $user['metier'] }}</td>
              </tr>
        @endforeach
       </table>
</div>


