<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('storage/assets/css/main.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>@yield('titre')</title>
    
</head>

<body class="d-flex h-100 text-center text-white bg-perso" cz-shortcut-listen="true">
    
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="mb-auto">
        <div>
          <h3 class="float-md-start mb-0">Portfolio</h3>
          <nav class="nav nav-masthead justify-content-center float-md-end">
              <a class="nav-link" href="{{url('realisations')}}">Mes réalisations</a>
              <a class="nav-link" href="{{url('contact')}}">Contact</a>
          </nav>
        </div>
      </header>
    
      @yield('contenu')
    
      <footer class="mt-auto text-white-50 home-footer">
        <a href="https://github.com/ilatimy/portfolio" class="nav-link" target="_blank"><i class="fab fa-github"></i></a>
        <a href="https://fr.linkedin.com/in/indira-latimy" class="nav-link" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        <a class="nav-link" href="{{url('mentionslegales')}}">Mentions Légales</a>
      </footer>
    </div>

    
    <script src="https://kit.fontawesome.com/e46106e117.js" crossorigin="anonymous"></script>
    </body>
</html>