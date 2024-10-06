<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layout')
@section('content')
<div class="row" style="margin-top: 5rem;">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Liste des Etudiants</h2>
        </div>
        <div class="pull-right">
             <a class="btn btn-success" href="#">Create New Student</a>
        </div>
    </div>
</div>
<table class="table table-bordered table-hover">
  <tr>
      <th>Numéro</th>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Actions</th> <!-- Added Actions column -->
  </tr>
  @foreach ($liste as $value) <!-- Fixed 'ad' to 'as' -->
  <tr>
      <td>{{$loop->index}}</td>
      <td>{{$value->nom}}</td>
      <td>{{$value->prenom}}</td>
      <td>
          <a class="btn btn-info" href="#">Show</a>
          <a class="btn btn-primary" href="#">Edit</a>
          <button type="submit" class="btn btn-danger">Delete</button>
      </td>
  </tr>
  @endforeach
</table>
@endsection
</body>
</html>
