@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Planetas</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>{{$planetas[0]->name}}</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>{{$planetas[1]->name}}</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>{{$planetas[2]->name}}</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>{{$planetas[3]->name}}</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>{{$planetas[4]->name}}</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>{{$planetas[5]->name}}</td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>{{$planetas[6]->name}}</td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td>{{$planetas[7]->name}}</td>
                  </tr>
                  <tr>
                    <th scope="row">9</th>
                    <td>{{$planetas[8]->name}}</td>
                  </tr>
                  <tr>
                    <th scope="row">10</th>
                    <td>{{$planetas[9]->name}}</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
