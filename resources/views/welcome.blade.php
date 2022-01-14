@extends('layouts.app')

@section('content')
<h1 class="text-center mt-5">WELCOME IN MYTRAVELAGENCY</h1>
<div class="container">
    <div class="row my-5">
        @foreach($packages as $package)
        <div class="col text-center">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$package->name}}</h5>
                    <p class="card-text">{{$package->description}}</p>
                </div>
  
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Destinazione: <strong>{{$package->destination}}</strong></li>
                    <li class="list-group-item">Partenza da: <strong>{{$package->departure_from}}</strong></p></li>
                    <li class="list-group-item">Data di Partenza: <strong>{{$package->departure_date}}</strong> </li>
                    <li class="list-group-item">Data di Ritorno: <strong>{{$package->return_date}}</strong> </li>
                    <li class="list-group-item">Prezzo: <strong>{{$package->price}}€</strong></li>

                </ul>
  
</div>
            

            

        </div>
    @endforeach
    </div>
</div>




    
    
@endsection

