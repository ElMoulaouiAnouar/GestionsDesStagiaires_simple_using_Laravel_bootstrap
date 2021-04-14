@extends('master_page')
@section('content')
<table class="table">
    <thead class="table-light">
      <tr>
          <th scope="col">CIN</th>
          <th scope="col">Nom</th>
          <th scope="col">Prenom</th>
          <th scope="col">Age</th>
          <th scope="col">Ville</th>
          <th scope="col">Specialite</th>
          <th scope="col">Operation</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($stagiaires as $stagiaire)
        <tr>
            <td>{{$stagiaire->cin}}</td>
            <td>{{$stagiaire->nom}}</td>
            <td>{{$stagiaire->prenom}}</td>
            <td>{{$stagiaire->age}}</td>
            <td>{{$stagiaire->Ville}}</td>
            <td>{{$stagiaire->specialite}}</td>
            <td>
                <a href="{{route('stagiaire.edit',$stagiaire->id)}}" class="btn btn-sm btn-warning m-1">Modifier</a>
                <form style="display: inline-flex;" method="POST" action="{{route('stagiaire.destroy',$stagiaire->id)}}">
                @csrf
                @method("DELETE")
                <input type="submit" value="Supprimer" class="btn btn-sm btn-danger m-1">
                </form>
            </td>
        </tr>
        @empty
            <h1>data Vide</h1>
        @endforelse
      
    </tbody>
  </table>
@endsection