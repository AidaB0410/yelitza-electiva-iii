@extends('layouts.app')

@section('content')
    <div class="page-holder">
      <!-- navbar-->
      <header class="header bg-white">
        <div class="container px-0 px-lg-3">
          <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="{{ url('/')}}"><span class="font-weight-bold text-uppercase text-dark">JudoStore</span></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <!-- Link--><a class="nav-link active" href="{{ url('/')}}">Inicio</a>
                </li>
                <li class="nav-item">
                  <!-- Link--><a class="nav-link" href="{{ route('products') }}">Productos</a>
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

      <!-- HERO SECTION-->
      <div class="container">
        <section class="hero pb-3 bg-cover bg-center d-flex align-items-center" style="background: url(img/hero-banner-alt.jpg)">
          <div class="container py-5">
            <div class="row px-4 px-lg-5">
              <div class="col-lg-6">
                <p class="text-muted small text-uppercase mb-2">Nuevos productos 2021</p>
                <h1 class="h2 text-uppercase mb-3">20% de descuento en tu primera compra</h1><a class="btn btn-dark" href="{{ route('products') }}">Ver productos</a>
              </div>
            </div>
          </div>
        </section>
        <!-- CATEGORIES SECTION-->
        <section class="pt-5">
          <header class="text-center">
            <p class="small text-muted small text-uppercase mb-1">Categorias hechas para ti</p>
            <h2 class="h5 text-uppercase mb-4">Busca en nuestras categorias</h2>
          </header>
          <div class="row">
            <div class="col-md-4 mb-4 mb-md-0"><a class="category-item" href="{{ route('products') }}"><img class="img-fluid" src="img/cat-img-1.jpg" alt=""><strong class="category-item-title">Ropa</strong></a></div>
            <div class="col-md-4 mb-4 mb-md-0"><a class="category-item mb-4" href="{{ route('products') }}"><img class="img-fluid" src="img/cat-img-2.jpg" alt=""><strong class="category-item-title">Zapatos</strong></a><a class="category-item" href="{{ route('products') }}"><img class="img-fluid" src="img/cat-img-3.jpg" alt=""><strong class="category-item-title">Relojes</strong></a></div>
            <div class="col-md-4"><a class="category-item" href="{{ route('products') }}"><img class="img-fluid" src="img/cat-img-4.jpg" alt=""><strong class="category-item-title">Electronica</strong></a></div>
          </div>
        </section>

        <!-- SERVICES-->
        <section class="py-5 bg-light" style="margin: 40px 0;">
          <div class="container">
            <div class="row text-center">
              <div class="col-lg-4 mb-3 mb-lg-0">
                <div class="d-inline-block">
                  <div class="media align-items-end">
                    <svg class="svg-icon svg-icon-big svg-icon-light">
                      <use xlink:href="#delivery-time-1"> </use>
                    </svg>
                    <div class="media-body text-left ml-3">
                      <h6 class="text-uppercase mb-1">Envio gratuito</h6>
                      <p class="text-small mb-0 text-muted">A todo el mundo</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-3 mb-lg-0">
                <div class="d-inline-block">
                  <div class="media align-items-end">
                    <svg class="svg-icon svg-icon-big svg-icon-light">
                      <use xlink:href="#helpline-24h-1"> </use>
                    </svg>
                    <div class="media-body text-left ml-3">
                      <h6 class="text-uppercase mb-1">Soporte 24 x 7</h6>
                      <p class="text-small mb-0 text-muted">Estamos para apoyarte</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="d-inline-block">
                  <div class="media align-items-end">
                    <svg class="svg-icon svg-icon-big svg-icon-light">
                      <use xlink:href="#label-tag-1"> </use>
                    </svg>
                    <div class="media-body text-left ml-3">
                      <h6 class="text-uppercase mb-1">Grandes ofertas</h6>
                      <p class="text-small mb-0 text-muted">Los mejores precios</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

      </div>

            <footer class="bg-dark text-white" >
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
@endsection