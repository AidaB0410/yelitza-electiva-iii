@extends('layouts.app')

@section('content')
 <div class="page-holder" style="min-height: 100vh">
      <!-- navbar-->
      <header class="header bg-white">
        <div class="container px-0 px-lg-3">
          <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="{{ url('/') }}"><span class="font-weight-bold text-uppercase text-dark">JudoStore</span></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <!-- Link--><a class="nav-link" href="{{ url('/') }}">Inicio</a>
                </li>
                <li class="nav-item">
                  <!-- Link--><a class="nav-link active" href="{{ route('products') }}">Productos</a>
                </li>
                
                
              </ul>
              <ul class="navbar-nav ml-auto">               
                <li class="nav-item"><a class="nav-link" href="{{ route('cart') }}"> <i class="fas fa-dolly-flatbed mr-1 text-gray"></i>Carrito<small class="text-gray"></small></a></li>
               
                <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}"> <i class="fas fa-user-alt mr-1 text-gray"></i>Iniciar sesión</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </header>



      <div class="container">
        <!-- HERO SECTION-->
        <section class="py-5 bg-light">
          <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
              <div class="col-lg-6">
                <h1 class="h2 text-uppercase mb-0">Productos</h1>
              </div>
              <div class="col-lg-6 text-lg-right">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
                    <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Todos los productos</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <section class="py-5" style="min-height: calc(100vh - 320px);">
          <div class="container p-0">
            <div class="row">
              <!-- SHOP SIDEBAR-->
              <div class="col-lg-3 order-2 order-lg-1">
                <h5 class="text-uppercase mb-4">Categorias</h5>
                <div class="py-2 px-4 bg-dark text-white mb-3"><strong class="small text-uppercase font-weight-bold">Ropa</strong></div>
                
                <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase font-weight-bold">Zapatos</strong></div>
                
                <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase font-weight-bold">Relojes</strong></div>

                <div class="py-2 px-4 bg-light mb-3"><strong class="small text-uppercase font-weight-bold">Electronica</strong></div>
                
              </div>
              <!-- SHOP LISTING-->
              <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
                
                <div class="row">
                  <!-- PRODUCT-->

                   @foreach($products as $item)
                  <div class="col-lg-4 col-sm-6">
                    <div class="product text-center">
                      <div class="mb-3 position-relative">
                        <div class="badge text-white badge-"></div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="{{ asset($item->photo) }}" alt="..."></a>
                        <div class="product-overlay">
                          <ul class="mb-0 list-inline">
                            <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="#" style="cursor: pointer;" onclick="addCart('{{ asset($item->photo) }}', '{{ ($item->name) }}', '{{ ($item->price) }}' )">Añadir al carrito</a></li>
                            
                          </ul>
                        </div>
                      </div>
                      <h6> <a class="reset-anchor" href="detail.html">{{ $item->name }}</a></h6>
                      <p class="small text-muted">{{ $item->price }} Bs.</p>
                    </div>
                  </div>
                  @endforeach


                </div>

              </div>
            </div>
          </div>
        </section>
      </div>

      <footer class="bg-dark text-white">
        <div class="container py-4">
          
          <div >
            <div class="row">
              <div class="col-lg-6">
                <p class="small text-muted mb-0">&copy; 2021 Electiva.</p>
              </div>
              <div class="col-lg-6 text-lg-right">
                <p class="small text-muted mb-0">JudoStore</p>
              </div>
            </div>
          </div>
        </div>
      </footer>

      <script>
        let listCart = [];

        function addCart(photo, name, price) {
          listCart.push({photo, name, price})
          localStorage.setItem('cart', JSON.stringify(listCart));
          alert("Producto añadido al carrito")
        }
      </script>
@endsection