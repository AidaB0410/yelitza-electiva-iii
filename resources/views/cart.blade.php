@extends('layouts.app')

@section('content')
 <div class="page-holder" style="min-height: 100vh;
    position: relative;">
      <!-- navbar-->
       <header class="header bg-white">
        <div class="container px-0 px-lg-3">
          <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="{{ url('/') }}"><span class="font-weight-bold text-uppercase text-dark">JudoStore</span></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <!-- Link--><a class="nav-link " href="{{ url('/') }}">Inicio</a>
                </li>
                <li class="nav-item">
                  <!-- Link--><a class="nav-link" href="{{ route('products') }}">Productos</a>
                </li>
                
                
              </ul>
              <ul class="navbar-nav ml-auto">               
                <li class="nav-item"><a class="nav-link active" href="{{ route('cart') }}"> <i class="fas fa-dolly-flatbed mr-1 text-gray"></i>Carrito<small class="text-gray"></small></a></li>
               
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
                <h1 class="h2 text-uppercase mb-0">Carrito</h1>
              </div>
              <div class="col-lg-6 text-lg-right">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
                    <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tus compras</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <section class="py-5">
          <h2 class="h5 text-uppercase mb-4">Carrito de compras</h2>
          <div class="row">
            <div class="col-lg-8 mb-4 mb-lg-0">
              <!-- CART TABLE-->
              <div class="table-responsive mb-4">
                <table class="table">
                  <thead class="bg-light">
                    <tr>
                      <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Producto</strong></th>
                     
                      
                      <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Precio</strong></th>

                      <th class="align-middle border-light"><a class="reset-anchor" href="#"><i class="fas fa-trash-alt small text-muted" id="resetCart"></i></a></th>
                     
                    </tr>
                  </thead>
                  <tbody id="cartList">
                    

                  </tbody>
                </table>
              </div>
              <!-- CART NAV-->
              <div class="bg-light px-4 py-3">
                <div class="row align-items-center text-center">
                  <div class="col-md-6 mb-3 mb-md-0 text-md-left"><a class="btn btn-link p-0 text-dark btn-sm" href="shop.html"><i class="fas fa-long-arrow-alt-left mr-2"> </i>Continuar comprando</a></div>
                  <div class="col-md-6 text-md-right"><a class="btn btn-outline-dark btn-sm" href="{{ route('checkout') }}">Proceder a pagar<i class="fas fa-long-arrow-alt-right ml-2"></i></a></div>
                </div>
              </div>
            </div>
            <!-- ORDER TOTAL-->
            <div class="col-lg-4">
              <div class="card border-0 rounded-0 p-lg-4 bg-light">
                <div class="card-body">
                  <h5 class="text-uppercase mb-4">Total</h5>
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex align-items-center justify-content-between"><strong class="text-uppercase small font-weight-bold">Subtotal</strong><span class="text-muted small" id="subtotal">0</span></li>
                    <li class="border-bottom my-2"></li>
                    <li class="d-flex align-items-center justify-content-between mb-4"><strong class="text-uppercase small font-weight-bold">Total</strong><span id="total">0 Bs.</span></li>

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

            <footer class="bg-dark text-white" style="position: absolute;
    bottom: 0;
    left: 0;
    right: 0;">
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
        const listCart = document.getElementById("cartList")
        const resetCart = document.getElementById("resetCart")
        const subtotal = document.getElementById("subtotal")
        const $total = document.getElementById("total")
        
        if(JSON.parse(localStorage.getItem('cart'))){
        let  listLocalStorage = JSON.parse(localStorage.getItem('cart'))
        let total = 0

        listLocalStorage.map(item => {

          total += parseInt(item.price)

          let product = `<tr>
                      <th class="pl-0 border-0" scope="row">
                        <div class="media align-items-center"><a class="reset-anchor d-block animsition-link" href="#"><img src="${item.photo}" alt="..." width="70"/></a>
                          <div class="media-body ml-3"><strong class="h6"><a class="reset-anchor animsition-link" href="#">${item.name}</a></strong></div>
                        </div>
                      </th>
                      

                      <td class="align-middle border-0">
                        <p class="mb-0 small">${item.price} Bs.</p>
                      </td>
                      
                    </tr>`

          listCart.innerHTML += product         


        })

         subtotal.innerHTML = total;
        $total.innerHTML = `${total} Bs.`;
      }
  
        resetCart.addEventListener("click", () => {

          localStorage.clear();
          window.location.reload();

        })


      </script>
@endsection