@extends('layouts.app')
@section('style')
    <link href="{{ asset('css/styleindex.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('lightbox2/css/lightbox.css') }}" rel="stylesheet">
@endsection
@section('content')
    <section id="firstligne" class="container col-xs-10 col-sm-10 col-md-10 col-lg-10">  
      <ul id="hexGrid"> 
        @foreach($projets as $index=>$projet)
          <li class="hex">
            <div class="hexIn">
              <a class="hexLink" data-lightbox="projets" data-title="{{$projet->description}}" href="{{url('img/'.$projet->image)}}" >
                <img src="{{url('img/'.$projet->image)}}" alt="Image"/>  <h1>{{ $projet->title }}</h1>
                <p>{{ $projet->description }}</p>
              </a>
            </div>
          </li>

        @if( ($index+1) % 4==0)
      </ul>
    </section>
    <section id="{{ (($index+1) % 3==0) ? 'firstligne' : 'twoligne' }}" class="container col-xs-10 col-sm-10 col-md-10 col-lg-10">
      <ul id="hexGrid">
        @endif
        @endforeach        
      </ul>
      <article class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
        <h1 class="TitreCentral">PoRtFoLiO</h1>
      </article>
    </section>
@endsection

@section('scripts')
  <script src="{{ asset('lightbox2/js/lightbox.js') }}"></script>
@endsection


