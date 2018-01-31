@extends('layouts.app')
@section('style')
     <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
    
    <section class="container">
      <h2 class="charte">Contacts</h2>
      <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 justify-content-center">
        
        @foreach($contact as $contacts)
        
        <p class="position">
          <h3>Numero d'enregistrement: </h3><span class="charte">{{ $c->id }} </span>  
          <h3>Nom: </h3><span class="charte"> {{ $c->name }} </span>
          <h3>Prenom: </h3><span class="charte"> {{ $c->firstname }} </span>
          <h3>Email: </h3><span class="charte"> {{ $c->email }} </span>
          <h3>Message: </h3><span class="charte"> {{ $c->contents }} </span>
        </p>        

        <button class="btn entourage hvr-float-shadow col-xs-2 col-sm-2 col-md-2 col-lg-2 m-lg-2" type="submit">Supprimer</button></br>

        @endforeach

      </article>

      
    </section>

@endsection