 @extends('layouts.app')

@section('content')
      <div class="isotope-container row">
          @foreach($produtos as $produto)

        <div class="item cat col-md-4 col-lg-3 my-4">
        
          <div class="card position-relative">
          <img src="{{ asset('storage/' . $produto->imagem) }}"class="img-fluid rounded-4" alt="{{ $produto->nome }}">
            <div class="card-body p-0">
              
                <h3 class="card-title pt-4 m-0">  {{ $produto->nome }} </h3>
              <div class="card-text">
               
                <h3 class="secondary-font text-primary">  R$ {{ number_format($produto->precoReferencia,2,',','.') }}</h3>
                 <p class="card-title pt-4 m-0"> {{ $produto->descricaoCurta }}</p>
                 <p class="card-title pt-4 m-0"> {{ $produto->descricaoGeral }}
</p>
<p class="card-title pt-4 m-0"> <strong>Categoria:</strong>{{ $produto->categoria->nome }}</p>

                <div class="d-flex flex-wrap mt-3">
                  
                </div>
              </div>

            </div>
          </div>
        </div>
    @endforeach

      
    </div>

    @endsection
  