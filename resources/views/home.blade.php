@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">            
            <table class="table table-dark">
                <thead>
                  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Planetas</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>{{$planetas[0]->name}}</td>
                  <td><a href="/detalhes" class="btn btn-outline-light">Detalhes</a></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>{{$planetas[1]->name}}</td>
                    <td><a href="" class="btn btn-outline-light">Detalhes</a></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>{{$planetas[2]->name}}</td>
                    <td><a href="" class="btn btn-outline-light">Detalhes</a></td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>{{$planetas[3]->name}}</td>
                    <td><a href="" class="btn btn-outline-light">Detalhes</a></td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>{{$planetas[4]->name}}</td>
                    <td><a href="" class="btn btn-outline-light">Detalhes</a></td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>{{$planetas[5]->name}}</td>
                    <td><a href="" class="btn btn-outline-light">Detalhes</a></td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>{{$planetas[6]->name}}</td>
                    <td><a href="" class="btn btn-outline-light">Detalhes</a></td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td>{{$planetas[7]->name}}</td>
                    <td><a href="" class="btn btn-outline-light">Detalhes</a></td>
                  </tr>
                  <tr>
                    <th scope="row">9</th>
                    <td>{{$planetas[8]->name}}</td>
                    <td><a href="" class="btn btn-outline-light">Detalhes</a></td>
                  </tr>
                  <tr>
                    <th scope="row">10</th>
                    <td>{{$planetas[9]->name}}</td>
                    <td><a href="" class="btn btn-outline-light">Detalhes</a></td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
