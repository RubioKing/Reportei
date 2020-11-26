@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="">            
            <table class="table table-dark">
                <thead>
                  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
                  <tr>
                    <th scope="col">Planetas</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    foreach ($planetas as $key => $value){?>
                      <tr>
                        <td>{{$value->name}}</td>
                      <td><a href="/detalhes/{{$key+1}}" class="btn btn-outline-light">Detalhes</a></td>
                      </tr>
                  <?php } ?>
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
