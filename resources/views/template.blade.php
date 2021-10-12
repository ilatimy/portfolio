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
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white nav-perso">
            <div class="container">
              <!-- Brand -->
              <a class="navbar-brand" href="{{url('')}}">
                <img src="{{ asset('storage/assets/img/logo_indira.png') }}" class="navbar-brand-img" alt="logo">
              </a>
              <!-- Toggler -->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <!-- Collapse -->
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fe fe-x"></i>
                </button>

                <!-- Navigation -->
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item dropdown">
                    <a class="nav-link realisations" href="{{url('realisations')}}">
                      Mes réalisations
                    </a>
                  </li>
                  <!-- Button -->
                  <li>
                    <a class="navbar-btn nav-link btn btn-sm btn-primary lift ms-auto btn-perso" href="{{url('contact')}}">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>

    @yield('contenu')

    <footer class="py-8 py-md-11 bg-gray-200 footer-perso">
        <div class="container">
          <div class="row footer-ligne">
            <div class="col-12 col-md-4 col-lg-3">
              <!-- Social -->
              <ul class="list-unstyled list-inline list-social mb-6 mb-md-0">
                <li class="list-inline-item list-social-item me-3">
                  <a href="https://fr.linkedin.com/in/indira-latimy" class="text-decoration-none" target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
                <li class="list-inline-item list-social-item">
                  <a href="https://github.com/ilatimy/portfolio" class="text-decoration-none" target="_blank">
                    <i class="fab fa-github"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
              <!-- Heading -->
              <h6 class="fw-bold text-uppercase text-gray-700">
                Liens utiles
              </h6>
              <!-- List -->
              <ul class="list-unstyled text-muted mb-6 mb-md-8 mb-lg-0">
                <li class="mb-3">
                  <a href="{{ url('mentionslegales') }}" class="text-reset">
                    Mentions légales
                  </a>
                </li>
              </ul>
            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </footer>
      <script src="https://kit.fontawesome.com/e46106e117.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>