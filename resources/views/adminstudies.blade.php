@extends('layouts.app')

@section('content')
    
    <section class="container">
      <h2 class="charte">Studies (liste)</h2>
      <p class="col-xs-8 col-sm-8 col-md-8 col-lg-8 justify-content-center">
        <article class="position"><h3>Nom: </h3><span class="charte"></span></article>
        <article class="position"><h3>Description: </h3><span class="charte"></span></article>
        <article class="position"><h3>Date d'entrée: </h3><span class="charte"></span></article> 
        <article class="position"><h3>Date de sortie: </h3><span class="charte"></span></article>
        <article class="position"><h3>Crée le: </h3><span class="charte"></span></article> 
        <article class="position"><h3>Modifié le: </h3><span class="charte"></span></article>        
      </p>

      <button class="btn entourage btn-lg col-xs-2 col-sm-2 col-md-2 col-lg-2 m-lg-5" type="submit">Supprimer</button>
      <button class="btn entourage btn-lg col-xs-2 col-sm-2 col-md-2 col-lg-2 m-lg-5" type="submit">Modifier</button>

      
    </section>

@endsection