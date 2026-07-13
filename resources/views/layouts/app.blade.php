<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>AuMigos</title>

   
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="css/vendor.css">
<link rel="stylesheet" type="text/css" href="style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Montserrat:wght@300;400;500&display=swap"
  rel="stylesheet">
</head>

<body>
 <header>

  <div class="container py-3">
    <div class="row align-items-center">

    
      <div class="col-12 col-lg-3 text-center text-lg-start">
        <img src="images/lg2.png" class="img-fluid" style="max-height:60px;">
      </div>

      <!-- TEXTO -->
      <div class="col-lg-5 d-none d-lg-block text-center">
        <h5 class="mb-0">Acessórios Para Animais De Estimação</h5>
      </div>

      <!-- CONTATO -->
      <div class="col-lg-4 d-none d-lg-flex justify-content-end gap-4 text-end">
        <div>
          <small>Telefone</small>
          <div>+55 37 98736-534</div>
        </div>
        <div>
          <small>Email</small>
          <div>aumigos@gmail.com</div>
        </div>
      </div>
    </div>
  </div>

  <hr class="m-0">
  <!-- NAVBAR -->
  <div class="container">
    <nav class="navbar navbar-expand-lg">

      <!-- MOBILE TEXTO -->
      <span class="d-lg-none">Acessórios pets</span>

      <!-- BOTÃO -->
      <button class="navbar-toggler ms-auto"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#menuMobile">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- MENU DESKTOP -->
      <div class="collapse navbar-collapse justify-content-center">

        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
              Categorias
            </a>
            <ul class="dropdown-menu">
              <li><a href="/lacos" class="dropdown-item">Laços</a></li>
              <li><a href="/bandanas" class="dropdown-item">Bandanas</a></li>
              <li><a href="/roupas" class="dropdown-item">Roupas</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/" class="nav-link">Home</a>
          </li>
        </ul>
      </div>

      <!-- USUÁRIO -->
      <div class="d-none d-lg-block ms-auto">
          <a href="{{ route('login') }}">
        <iconify-icon icon="healthicons:person" class="fs-4"></iconify-icon>
         </a>
      </div>

    </nav>
  </div>

  <!-- MENU MOBILE -->
  <div class="offcanvas offcanvas-end" id="menuMobile">
    <div class="offcanvas-header">
      <h5>Menu</h5>
      <button class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">

      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            Categorias
          </a>

          <ul class="dropdown-menu">
            <li><a href="/lacos" class="dropdown-item">Laços</a></li>
            <li><a href="/bandanas" class="dropdown-item">Bandanas</a></li>
            <li><a href="/roupas" class="dropdown-item">Roupas</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="/" class="nav-link">Home</a>
        </li>
      </ul>

      <hr>

      <!-- CONTATO MOBILE -->
      <div class="text-center">
        <small>Telefone</small>
        <div>+55 37 98736-534</div>

        <small class="mt-2 d-block">Email</small>
        <div>aumigos@gmail.com</div>
      </div>

    </div>
  </div>

</header>
 
  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

@yield('content')



</body>
</html>