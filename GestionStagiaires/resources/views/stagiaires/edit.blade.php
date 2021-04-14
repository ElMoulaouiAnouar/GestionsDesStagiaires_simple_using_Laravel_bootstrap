@extends('master_page')
@section('content')
<form action="{{route('stagiaire.update',$stagiaire->id)}}" method="POST" class="m-5">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="cin">CIN :</label>
        <input type="text" name="cin" id="cin" class="form-control" value="{{old('cin',$stagiaire->cin)}}" placeholder="Enter cin">
    </div>
    <div class="form-group">
        <label for="nom">NOM :</label>
        <input type="text" name="nom" id="nom" class="form-control" value="{{$stagiaire->nom}}" placeholder="Enter nom">
    </div>
    <div class="form-group">
        <label for="prenom">PRENOM :</label>
        <input type="text" name="prenom" id="prenom" class="form-control" value="{{$stagiaire->prenom}}"  placeholder="Enter prenom">
    </div>
    <div class="form-group">
        <label for="age">AGE :</label>
        <input type="text" name="age" id="age" class="form-control" value="{{$stagiaire->age}}" placeholder="Enter age">
    </div>
    <div class="form-group">
        <label for="ville">Ville :</label>
        <input type="text" name="ville" id="ville" class="form-control" value="{{$stagiaire->Ville}}" placeholder="Enter ville">
    </div>
    <div class="form-group">
        <label for="Specialite">Specialite :</label>
        <input type="text" name="specialite" id="Specialite" class="form-control" value="{{$stagiaire->specialite}}" placeholder="Enter specialite">
    </div>
    <div class="form-group">
        <input type="submit" value="Modifier" class="btn btn-primary  mt-3 ">
        <a href="{{route('stagiaire.index')}}" class="btn btn-primary  mt-3 ">Annuler</a>
    </div>
</form>
@endsection