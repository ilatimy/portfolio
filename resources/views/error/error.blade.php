@extends('template')
 
@section('contenu')
    <div class="container">
        <div class="row">
             <section class="hero w-100">
                <div class="container">
                     <h1 class="display-1 mb-1">404!</h1>
                     <h5 class="text-gray-soft text-regular">Page non trouvée.</h5>
                      <a class="btn btn-brand btn-primary" href="{{url('')}}">Retour à l'accueil</a>
                  </div>
              </section>
           </div>
      </div>
@endsection