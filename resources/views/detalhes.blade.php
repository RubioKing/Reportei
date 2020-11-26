@extends('layouts.app')


@section('content')
<div class="card bg-dark text-light mx-auto col-sm-3">
    <div class="card-header">
      <b>Planeta:</b> {{$planetas->name}}
    </div>
    <div class="card-body">
        <table class="table table-dark">
            <thead>
              <link href="{{ asset('css/app.css') }}" rel="stylesheet">
              <tr>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">População:</th>
                <td class="col-md-6" >{{$planetas->population}}</td>
              </tr>
              <tr>
                <th scope="row">Diametro:</th>
                <td class="col-md-6" >{{$planetas->diameter}}</td>
              </tr>
              <tr>
                <th scope="row">Clima:</th>
                <td class="col-md-6" >{{$planetas->climate}}</td>
              </tr>
              <tr>
                <th scope="row">Gravidade:</th>
                <td class="col-md-6" >{{$planetas->gravity}}</td>
              </tr>
              <tr>
                <th scope="row">Terreno:</th>
                <td class="col-md-6" >{{$planetas->terrain}}</td>
              </tr>
            </tbody>
          </table>
        <br><div>
            <a href="/home" class="btn btn-outline-light">Voltar</a>
            <a href="#" class="btn btn-outline-light ">Salvar</a>
            </div>
    </div>
</div>
@endsection
