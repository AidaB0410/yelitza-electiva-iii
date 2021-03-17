@extends('layouts.admin.app')

@section('content')
 <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item ">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link " href="{{ route('admin') }}"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Inicio</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link " href="{{ route('adminCart') }}"
                                aria-expanded="false">
                                <i class="fas fa-shopping-bag" aria-hidden="true"></i>
                                <span class="hide-menu">Ventas</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link active" href="{{ route('adminProducts') }}"
                                aria-expanded="false">
                                <i class="fas fa-tag" aria-hidden="true"></i>
                                <span class="hide-menu">Productos</span>
                            </a>
                        </li>
                        
                        
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" style="min-height: 250px;">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Home / Productos / Crear</h4>
                    </div>
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">Bienvenido administrador</h3>

                                <form action="{{ route('storeProduct') }}" method="POST" enctype="multipart/form-data">

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                <div class="mb-3">
                                  <label for="formFile" class="form-label">Foto del producto</label>
                                  <input required class="form-control" type="file" id="formFile" name="file">
                                </div>

                                <div class="mb-3">
                                  <label for="formFile" class="form-label">Categoría para el producto</label>
                                  <select class="form-select" aria-label="Selecciona una categoría" name="category">
                                  <option value="Ropa">Ropa</option>
                                  <option value="Zapatos">Zapatos</option>
                                  <option value="Relojes">Relojes</option>
                                  <option value="Electronica">Electronica</option>
                                </select>
                                </div>

                                <div class="mb-3">
                                    <label for="nameProduct" class="form-label">Nombre del producto</label>
                                    <input type="text" required class="form-control" id="nameProduct" name="name" aria-describedby="name">
                                  </div>

                                  <div class="mb-3">
                                    <label for="priceProduct" class="form-label">Precio del producto</label>
                                    <input type="number" required class="form-control" id="priceProduct" name="price" aria-describedby="name">
                                  </div>

                                  <div class="mb-3">
                                    <label for="descriptionProduct" class="form-label">Descripción del producto</label>
                                    <input type="text" required class="form-control" id="descriptionProduct" name="description" aria-describedby="name">                                   
                                  </div>

                                  <button type="submit" class="btn btn-primary">Guardar</button>
                                </form>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
@endsection
