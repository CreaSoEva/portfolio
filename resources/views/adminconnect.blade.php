@extends('layouts.app')

@section('content')

    
              <input type="mail" name="mail" id="mail" placeholder="Votre Email" size="20" maxlength="30" class="inputbasic"/><br> 
              
              <input type="password" name="password" id="password" placeholder="Votre Mot de passe" size="20" maxlength="30" class="inputbasic"/><br>

              <input  id= "envoi" type="submit" name="valider" value="Envoyer" class="inputbasic ml-4 mr-4"/> 
     
      
    </section>

@endsection