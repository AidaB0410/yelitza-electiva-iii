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
                  <!-- Link--><a class="nav-link" href="{{ url('/')}}">Inicio</a>
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

      <div class="container">
        <!-- HERO SECTION-->
        <section class="py-5 bg-light">
          <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
              <div class="col-lg-6">
                <h1 class="h2 text-uppercase mb-0">Pagar</h1>
              </div>
              <div class="col-lg-6 text-lg-right">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="cart.html">Carrito</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pagar</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <section class="py-5">
          <!-- BILLING ADDRESS-->
          <h2 class="h5 text-uppercase mb-4">Detalles de factura</h2>
          <div class="row">
            <div class="col-lg-8">
              <form action="{{ route('checkoutStore') }}" method="POST">
                
                <input type="hidden" name="_token" value="{{ csrf_token() }}">


                <div class="row">
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" for="firstName">Nombre</label>
                    <input class="form-control form-control-lg" name="name" id="firstName" type="text" placeholder="Introduzca su nombre" required>
                  </div>
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" for="lastName">Apellido</label>
                    <input class="form-control form-control-lg" required name="lastname" required id="lastName" type="text" placeholder="Introduzca su apellido">
                  </div>
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" for="email">Correo electronico</label>
                    <input class="form-control form-control-lg" required name="email" id="email" type="email" placeholder="Introduzca su correo">
                  </div>
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" for="phone">Numero de telefono</label>
                    <input class="form-control form-control-lg" required name="phone" id="phone" type="tel" placeholder="Introduzca su numero telefonico">
                  </div>
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" for="city">Estado</label>
                    <input class="form-control form-control-lg" required name="state" id="city" type="text" placeholder="Introduzca el estado donde vive">
                  </div>
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" for="state">Ciudad</label>
                    <input class="form-control form-control-lg" required name="city" id="state" type="text" placeholder="Introduzca la ciudad donde vive">
                  </div>
                  <div class="col-lg-12 form-group">
                    <label class="text-small text-uppercase" for="address">Dirección</label>
                    <input class="form-control form-control-lg" required name="direction" id="address" type="text" placeholder="Dirección de su casa">
                  </div>

                  <div id="items"></div>

                  <div class="col-lg-12 form-group">
                    <button class="btn btn-dark" type="submit">Hacer orden</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- ORDER SUMMARY-->
            <div class="col-lg-4">
              <div class="card border-0 rounded-0 p-lg-4 bg-light">
                <div class="card-body">
                  <h5 class="text-uppercase mb-4">Tu orden</h5>
                  <ul class="list-unstyled mb-0" id="cartList">
                   
                  </ul>
                  <ul class="list-unstyled mb-0">
                    
                    <li class="d-flex align-items-center justify-content-between"><strong class="text-uppercase small font-weight-bold">Total</strong><span id="total">0 Bs.</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

            <footer class="bg-dark text-white" style="margin-top: 100px" >
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
        const $total = document.getElementById("total")
        
        if(JSON.parse(localStorage.getItem('cart'))){
          listCart.innerHTML = '';
        let  listLocalStorage = JSON.parse(localStorage.getItem('cart'))
        let total = 0

        listLocalStorage.map(item => {

          total += parseInt(item.price)

          let product = `<li class="d-flex align-items-center justify-content-between"><strong class="small font-weight-bold">${item.name}</strong><span class="text-muted small">${item.price}</span></li>
                    <li class="border-bottom my-2"></li>`

          listCart.innerHTML += product  

          items.innerHTML += ` <input name="itemName[]" hidden type="text" value="${item.name}"><input name="itemPrice[]" hidden type="text" value="${item.price}"> <input hidden name="itemPhoto[]" type="text" value="${item.photo}">`       


        })


        $total.innerHTML = `${total} Bs.`;
        items.innerHTML += ` <input name="total" hidden type="text" value="${total}">` 

      }
  



      </script>
@endsection