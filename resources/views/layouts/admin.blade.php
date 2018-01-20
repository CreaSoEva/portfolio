<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
         <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Portfolio</title>

        <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      
@yield('style')
      
    </head>
    <body>
        <main>
            <header>
                <p class="container">
                    <article class="row col-xs-5 col-sm-6 col-md-7 col-lg-8">
                        <h1 id="TitreHeader">CREASOEVA</h1>
                    </article>

                    <article class="row col-xs-1 col-sm-2 col-md-3 col-lg-4 float-right navstyle">
                        <ul class="nav navbar-nav navbar-right links">                           
                        @auth
                            <li class="dropdown">
                                <a href="{{ url('/home') }}" class="dropdown-toggle fond" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                         <a href="{{ route('home') }}">
                                            Administration
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li><a class="fond" href="{{ route('login') }}"><i class="fa fa-user-circle" aria-hidden="true"></i></a></li> 
                        @endauth
                        </ul>    
                    </article>
                </p> 
            </header>            

            <p class="container">
                <hr class="style-seven">
            </p>

                
            <p class="container">

                <!--début du menu de navigation  --> 

                <nav  id="menularge" class="container inputbasic navstyleA">   
                    <a class="charte col-xs-4 col-sm-4 col-md-4 col-lg-3" href="{{ route('accueil') }}">Home</a>   
                    <a class="charte col-xs-4 col-sm-4 col-md-4 col-lg-3" href="{{ route('profil') }}">About Me</a>
                    <a class="charte col-xs-4 col-sm-4 col-md-4 col-lg-3" href="{{ route('contact') }}">Contact</a>
                    <a class="fond col-xs-4 col-sm-4 col-md-4 col-lg-3" href="{{ route('adminprojects') }}">A-projects</a>
                    <a class="fond col-xs-4 col-sm-4 col-md-4 col-lg-3" href="{{ route('adminstudies') }}">A-studies</a>
                    <a class="fond col-xs-4 col-sm-4 col-md-4 col-lg-3" href="{{ route('adminskills') }}">A-skills</a>
                    <a class="fond col-xs-4 col-sm-4 col-md-4 col-lg-3" href="{{ route('admininformations') }}">A-infos</a> 
                    <a class="fond col-xs-4 col-sm-4 col-md-4 col-lg-3" href="{{ route('admincontact') }}">A-contacts</a>       
                </nav> 

               <!--menu court  -->

                <nav id="menucourt" class="btn-group container-fluid center block"> 
                    <button class="dropdown-toggle inputbasic" data-toggle="dropdown"><a class="fond" href="{{ url('/') }}"><i class="fa fa-bars" aria-hidden="true"></i></button>
                        <ul class="dropdown-menu inputbasic">
                            <li><a class="fond" href="{{ route('accueil') }}">Home</a></li>
                            <li><a class="fond" href="{{ route('profil') }}">About Me</a></li>
                            <li><a class="fond" href="{{ route('contact') }}">Contact</a></li>
                            <li><a class="fond" href="{{ route('adminprojects') }}">A-projects</a></li>
                            <li><a class="fond" href="{{ route('adminstudies') }}">A-studies</a></li>
                            <li><a class="fond" href="{{ route('adminskills') }}">A-skills</a></li>
                            <li><a class="fond" href="{{ route('admininformations') }}">A-infos</a></li>
                            <li><a class="fond" href="{{ route('admincontact') }}">A-contacts</a></li>

                        </ul>
                </nav>
            </p>

   <!-- corps de page -->
@yield('content')
 <!-- fin corps de page -->   
  <footer class="footer container text-center">
    <article class="container">
      <p class="col-xs-8 col-sm-8 col-md-6 col-lg-4 justify-content-center">&copy; CréaSoEva 2017</p>
      <p class="col-xs-8 col-sm-8 col-md-6 col-lg-4 justify-content-center"><a class="fond" href="{{ route('contact') }}">Contact</a></p>
      <p class="col-xs-8 col-sm-8 col-md-6 col-lg-4 justify-content-center">
        <a href=""><i class="fab fa-github fond"></i></a>
        <a href=""><i class="fab fa-facebook-square fond"></i></a>
        <a href=""><i class="fab fa-twitter fond"></i></a>
      </p>
    </article>
  </footer>
  </main>
  
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" ></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>   

    
</body>

 
</html>