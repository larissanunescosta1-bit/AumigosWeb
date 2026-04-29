<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
  @extends('layouts.app')

@section('content')
  <div class="isotope-container row">

        <div class="item cat col-md-4 col-lg-3 my-4">
          <!-- <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
            New
          </div> -->
          <div class="card position-relative">
            <img src="https://images.tcdn.com.br/img/img_prod/1297546/bandana_para_pet_elo_com_elastico_verde_musgo_e_dourado_255_1_cb47a22dd0a0893fa5ba1434bf663aa7.jpg" class="img-fluid rounded-4" alt="image">
            <div class="card-body p-0">
              
                <h3 class="card-title pt-4 m-0">Bandanas </h3>
              <div class="card-text">
               
                <h3 class="secondary-font text-primary">$18.00</h3>
                 <p class="card-title pt-4 m-0">Produto lindo</p>
                 <p class="card-title pt-4 m-0">  Este produto foi desenvolvido pensando em qualidade, praticidade e durabilidade.
  Com um design moderno e funcional, ele se adapta facilmente às necessidades do dia a dia,
  oferecendo uma experiência confortável e eficiente.
</p>

                <div class="d-flex flex-wrap mt-3">
                  
                </div>
              </div>

            </div>
          </div>
        </div>


        <div class="item dog col-md-4 col-lg-3 my-4">
          <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
            New
          </div>
          <div class="card position-relative">
            <img src="https://images.tcdn.com.br/img/img_prod/1297546/bandana_para_pet_elo_ii_com_elastico_251_1_8968887ac8312ffc2625dbef7e17a5e9.jpg" class="img-fluid rounded-4" alt="image">
            <div class="card-body p-0">
              
                <h3 class="card-title pt-4 m-0">Bandana azul</h3>
              

              <div class="card-text">
                

                <h3 class="secondary-font text-primary">$18.00</h3>
                 <p class="card-title pt-4 m-0">Produto lindo</p>
                 <p class="card-title pt-4 m-0">  Este produto foi desenvolvido pensando em qualidade, praticidade e durabilidade.
  Com um design moderno e funcional, ele se adapta facilmente às necessidades do dia a dia,
  oferecendo uma experiência confortável e eficiente.
</p>

                <div class="d-flex flex-wrap mt-3">
                 
                </div>


              </div>

            </div>
          </div>
        </div>

        <div class="item dog col-md-4 col-lg-3 my-4">
          <!-- <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
            New
          </div> -->
          <div class="card position-relative">
            <img src="data:image/jpeg;base64,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jY1aeJ7s1MLRp062Srao9NqpYHNdrlXChm36yLrz6IEy8C5vwK4nu3qUwjYTCoK7EBM1MVM1F2a1vauL6X9bXtRxTA8QxeJpXpJSBwtVarhU700av69i1j4kIUdSFvtIkiWiX8E3DK+Fes1PDhXNc1v8FHp3Y9yq3YOhyZMoRTc+p1imvWpmnSC0sjqG7x85bvCTdTlOiWGmm/ylfF8Fr06VPEPRYUaoHd1PCVa+oF1OhPkbXn3D8BxD4epilpnuaRszkgC9wpAB1YgkXttAx4m69mnKP4/EB2S2HpZTU3PeMB7AJ2LHUgbDyuJrPAuD1MXXShSF2c29AP6mPoBqZ09y1wOng8PToUvZQak7ux9pz6kyDJU0AAAFgNABpYDYT1EQEREBERAREQEREBERAREQEREBERAREQLDjXC0xNJqT6A7MN1bow9f+u3Wcu8zcArYDENh6w21Rx7NROjr/cdDp8esZrnPHKlLiGHNNwA6606nVG+x6iBy9mnzNMhjOFPh8Q1CtTPeqyAISFV7sL3e62UjZgfiVmOJgfc0+z1Rp62KM1wbBdDtYNsbgG3x8xLjFYdtXyeDQZ0pslO9gLC6gXvofUHfeBN/I2Lz4DCZG9ikENjs6Eqw9NgfgQY7QsQ34CrTuz1KtkpqNS7FhoP+Uk//AJIb4Dx7EYRi1CplB9pD4kb1Knr66HptpJd7LsBWxjniWLbNa6YdLAKgv42VfiAM25y6nSWozPZjyR+ApM9XK2IqWzEahE3yAn1Fyeth5TeYiRSIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAnwifYgaD2qcjjHUe9oqPxNIHL07xetM9PUHofQmQNweolPE0WrL4EqoaisDcBXBcFd7ixuPS063kL9s/JOUniFBfCf8AzCAbHYVh6dG+R84GZ58d8Vww1MIC4ZUqB08LGmHVsoX2upbKB/QRuRNCwHOAHDcVhK1V64dQmHZluQxVTURiSdEJuCSdR0uonzlTn5KGF/CYig1amGuhQpe2bPlZagsQG1Bv/wBJiuaONvxPFJ3VHLe1OlSFixLNqzECxZja52AUeUtFPkvlmpxDErQW4QWarUH9FO+tv8x2Hr8DOnuH4NKNNKVNQqIoVVHQAWEwXIXKy4DCrTvmqtZqz/uewFh/lUCw/ncmbLIEREBERAREQEREBERAREQEREBERAREQEREBERAREQE81KYYEEAggggi4IO4I8p6iBzd2n8knh9bvKYvharHu//AI2OvdH/AHynqBbca752Ocjmiv43EJaq4/RQjWmhBBc+TMDb0H+oyT8VhkqLldFdbg5WAIuCGU2PUEA/KVRAAT7EQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQP/9k=" class="img-fluid rounded-4" alt="image">
            <div class="card-body p-0">
              
                <h3 class="card-title pt-4 m-0">Bandana preta</h3>
              

              <div class="card-text">
               

                <h3 class="secondary-font text-primary">$18.00</h3>
                 <p class="card-title pt-4 m-0">Produto lindo</p>
                 <p class="card-title pt-4 m-0">  Este produto foi desenvolvido pensando em qualidade, praticidade e durabilidade.
  Com um design moderno e funcional, ele se adapta facilmente às necessidades do dia a dia,
  oferecendo uma experiência confortável e eficiente.
</p>

                <div class="d-flex flex-wrap mt-3">
                 
                </div>


              </div>

            </div>
          </div>
        </div>

        <div class="item cat col-md-4 col-lg-3 my-4">
          
          <div class="card position-relative">
            <img src="data:image/jpeg;base64,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" class="img-fluid rounded-4" alt="image">
            <div class="card-body p-0">
              
                <h3 class="card-title pt-4 m-0">Bandana Rosa  </h3>
              

              <div class="card-text">
               

                <h3 class="secondary-font text-primary">$18.00</h3>
                 <p class="card-title pt-4 m-0">Produto lindo</p>
                 <p class="card-title pt-4 m-0">  Este produto foi desenvolvido pensando em qualidade, praticidade e durabilidade.
  Com um design moderno e funcional, ele se adapta facilmente às necessidades do dia a dia,
  oferecendo uma experiência confortável e eficiente.
</p>

                <div class="d-flex flex-wrap mt-3">
                 
                </div>


              </div>

            </div>
          </div>
        </div>

      


    </div>
  

  
@endsection
</body>
</html>