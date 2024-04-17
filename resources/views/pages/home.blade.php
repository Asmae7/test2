@extends('layouts.default')
@section('content') 
   <h1>Ici c'est la page Home</h1>
   
   {{-- <table>
    <tr>
        <th>id</th>
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
   </table> --}}
   <x-users-table  :users="$users"/>
@stop
