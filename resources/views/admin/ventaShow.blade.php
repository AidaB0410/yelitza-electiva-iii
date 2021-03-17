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
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin') }}"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Inicio</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link active" href="{{ route('adminCart') }}"
                                aria-expanded="false">
                                <i class="fas fa-shopping-bag" aria-hidden="true"></i>
                                <span class="hide-menu">Ventas</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('adminProducts') }}"
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
                        <h4 class="page-title">Home / Venta / Detalles</h4>
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
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h2>Comprador: {{ $comprador->name }} {{ $comprador->apellido }}</h2>
                            <h3 class="box-title">Productos Comprados</h3>

                           

                            <div class="table-responsive">
                                <table class="table text-nowrap" style="text-align: center">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Foto</th>
                                            <th class="border-top-0">Producto</th>
                                            <th class="border-top-0">Precio</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        @foreach($items as $item)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td><img src="{{ $item->photo }}" alt="Foto del producto {{ $item->name }}" style="width: 100px; height: 100px; object-fit: cover"></td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->price }} Bs.</td>
                                            </tr>
                                        @endforeach
                                       
                                    </tbody>
                                </table>
                            </div>
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
