<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!------------CSS-------------->
  <!-- Bootstrap CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Custom Styles -->
  <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}">

  <!-- Additional styles for responsiveness -->
  <style>
    .sf-menu li a {
      font-size: 20px;
      font-weight: bold;
      color: #3d6359;
      text-transform: uppercase;
      position: relative;
      display: inline-block;
      padding: 10px 20px;
      transition: color 0.3s ease;
      text-decoration: none !important;
    }

    .sf-menu li a:hover {
      color: #132923 !important; 
    }

    /* Custom Dropdown Styles */
    .dropdown-menu {
      padding: 10px;
      background-color: #ffffff;
      border: none;
      border-radius: 5px;
    }

    .dropdown-item {
      font-size: 16px;
      font-weight: normal;
      color: #3d6359;
      text-transform: uppercase;
      white-space: nowrap;
      transition: color 0.3s ease;
      text-decoration: none !important;
    }

    .dropdown-item:hover {
      color: #132923 !important;
    }

    /* Navbar Styling */
    .navbar-nav .nav-link {
      font-size: 20px;
      font-weight: bold;
      color: #3d6359;
      text-transform: uppercase;
      padding: 10px 20px;
      transition: color 0.3s ease;
      margin-right: 15px; /* Space between items */
    }

    .navbar-nav .nav-link:hover {
      color: #132923 !important;
    }

    /* Custom Button Styles */
    .btn-blue {
      font-size: 20px;
      font-weight: bold;
      color: #ffffff; /* White text */
      background-color: #3d6359; /* Light Green */
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
      text-decoration: none !important; /* Remove underline */
      text-transform: uppercase;
    }

    .btn-blue:hover {
      background-color: #132923;
    }

    /* Media Queries for Responsive Design */
    @media (max-width: 768px) {
      .sf-menu {
        display: none;
      }

      .navbar-nav {
        display: flex;
        flex-direction: column;
        width: 100%;
        align-items: flex-end; /* Align items to the right */
      }

      .navbar-nav .nav-item {
        margin: 0;
      }

      .navbar-nav .nav-link {
        padding: 10px;
        text-align: center;
        margin-right: 0;
      }
    }

    @media (min-width: 769px) {
      .navbar-toggler {
        display: none;
      }
    }
  </style>
</head>
<body style="min-height: 100vh; display: flex; flex-direction: column;">
  <!-- Start nav -->
  <div class="header-top">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 text-left fh5co-link">
          <a href="/contact">Contact</a>
          <a href="/terms">Terms and Conditions</a>
        </div>
        <div class="col-md-6 col-sm-6 text-right fh5co-social">
          <a href="#" class="grow"><i class="icon-facebook2"></i></a>
          <a href="#" class="grow"><i class="icon-twitter2"></i></a>
          <a href="#" class="grow"><i class="icon-instagram2"></i></a>
        </div>
      </div>
    </div>
  </div>

  <header id="fh5co-header-section" class="sticky-banner">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="/"><img src="{{ url('/images/company_logo.png') }}" alt="company logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto mb-2 mb-md-0"> <!-- Use ms-auto to push items to the right -->
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('volunteer#index') }}">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Menu
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="{{ route('volunteer#viewAllMenu') }}">View All Menu</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact</a>
            </li>
            <li class="nav-item">
              <button type="button" class="btn btn-blue dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth()->user()->name }}
              </button>
              <ul class="dropdown-menu dropdown-menu-end" style="min-width: auto;">
                <li><a class="dropdown-item" href="{{ route('volunteer#updateProfile', Auth()->user()->id) }}">Update</a></li>
                <li><a class="dropdown-item" href="{{ route('deliver#AllDeliveryForVolunteer') }}">Deliveries</a></li>
                <li>
                  <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">
                      <a>Logout</a>
                    </button>
                  </form>
                </li>
              </ul>                            
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- END nav -->

  <!-- Content -->
  @yield('content')
  <!-- End Content -->

  <footer class="bg-light py-5 mt-auto">
    <div class="container">
      <!-- Copyright and Legal Links -->
      <div class="row align-items-center">
        <div class="col-md-6 text-center text-md-start">
          <p class="text-muted mb-0">&copy; 2024 MerryMeal ~ Meals on Wheels Charity. All Rights Reserved.</p>
        </div>
        <div class="col-md-6 text-center text-md-end">
          <ul class="list-inline mb-0">
            <li class="list-inline-item"><a href="/terms" class="text-muted">Privacy Policy</a></li>
            <li class="list-inline-item"><a href="/terms" class="text-muted">Terms of Use</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="../js/sticky.js"></script>
  <!-- Stellar -->
  <script src="js/jquery.stellar.min.js"></script>
  <!-- Superfish -->
  <script src="js/hoverIntent.js"></script>
  <script src="js/superfish.js"></script>
  <!-- Main JS -->
  <script src="js/main.js"></script>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
