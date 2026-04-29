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
    <div class="container py-2">
      <div class="row py-4 pb-0 pb-sm-4 align-items-center ">

        <div class="col-sm-4 col-lg-3 text-center text-sm-start">
          <div class="main-logo">
            <a href="index.html">
              <img src="images/lg2.png" alt="logo" class="img-fluid">
            </a>
          </div>
        </div>

       
        
      </div>
    </div>

    <div class="container-fluid">
      <hr class="m-0">
    </div>

    <div class="container">
     <nav class="main-menu navbar navbar-expand-lg  px-3">

  

 
  <button class="navbar-toggler" type="button" 
          data-bs-toggle="offcanvas" 
          data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
    
    <div class="offcanvas-header">
      <h5 class="offcanvas-title">Menu</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">

      <!-- Texto principal -->
      <div class="me-auto text-center text-lg-start mb-3 mb-lg-0">
        <h5 class="mb-0">Acessórios para animais de estimação</h5>
      </div>

      <!-- Menu -->
      <ul class="navbar-nav mx-auto mb-3 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"
             href="#"
             role="button"
             data-bs-toggle="dropdown">
            Categorias Acessórios
          </a>

          <ul class="dropdown-menu">
            <li><a href="/lacos" class="dropdown-item">Laços</a></li>
            <li><a href="/bandanas" class="dropdown-item">Bandanas</a></li>
            <li><a href="/roupas" class="dropdown-item">Roupas</a></li>
             <li><a href="/" class="dropdown-item">Home</a></li>
          </ul>
        </li>
      </ul>

      <!-- Contatos -->
      <div class="d-flex flex-column flex-lg-row gap-3 text-center text-lg-end">
        <div class="support-box">
          <span class="text-muted small">Telefone</span>
          <h6 class="mb-0">+553798736534</h6>
        </div>

        <div class="support-box">
          <span class="text-muted small">Email</span>
          <h6 class="mb-0">aumigos@gmail.com</h6>
        </div>
      </div>

      <!-- Ícone usuário -->
      <div class="ms-lg-3 text-center mt-3 mt-lg-0">
        <a href="/usuario">
          <iconify-icon 
            icon="healthicons:person" 
            class="fs-4">
          </iconify-icon>
        </a>
      </div>

    </div>
  </div>
</nav>
 <div class="isotope-container row">

       


              </div>

            </div>
          </div>
        </div>

    

      

            </div>
          </div>
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