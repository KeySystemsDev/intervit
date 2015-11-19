@extends('base-cliente')

@section('content')

<div id="page-container" class="fade">
    
	@include('layouts/navbar-cliente')
    
    <div class="content-top">
        <br>
        <h2 class="content-title">Productos</h2>

        <div id="action-box" class="content has-bg" data-scrollview="true">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="{{ url('thema/assets/img/action-bg.jpg') }}" alt="Action">
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container fadeInRight contentAnimated" data-animation="true" data-animation-type="fadeInRight">
                <!-- begin row -->
                <div class="row action-box">
                    <!-- begin col-9 -->
                    <div class="col-md-9 col-sm-9">
                        <div class="icon-large text-theme">
                            <i class="fa fa-list-ol"></i>
                        </div> 
                        <h3>Realice su pedido</h3>
                        <p>
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus magna eu lacinia eleifend.
                        </p>
                    </div>
                    <!-- end col-9 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3">
                        <a href="{{ url ('/cotizacion') }}" class="btn btn-outline btn-block">Lista de Pedidos</a>
                    </div>
                    <!-- end col-3 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>

    </div>


    <!-- begin #contact -->
    <div class="content bg-silver-lighter">
        <!-- begin container -->
        <div class="container">
            <div id="gallery" class="gallery">
                
                <div class="image gallery-group-1">
                    <div class="image-inner">
                        <a href="{{ url('/producto-detalle') }}">
                            <img src="{{ url('img/block.jpg')}}" alt="" />
                        </a>
                        <p class="image-caption">
                            N° 23
                        </p>
                    </div>
                    <div class="image-info">
                        <h5 class="title">Producto</h5>
                        <div class="pull-center">
                            <button class="btn btn-agregar btn-danger m-r-5 m-b-5" data-toggle="modal" data-target="#ModalAgregar"><i class="fa fa-plus"></i> Agregar</button>
                        </div>
                    </div>
                </div>


                <div class="image gallery-group-1">
                    <div class="image-inner">
                        <a href="{{ url('/producto-detalle') }}">
                            <img src="{{ url('img/block.jpg')}}" alt="" />
                        </a>
                        <p class="image-caption">
                            N° 23
                        </p>
                    </div>
                    <div class="image-info">
                        <h5 class="title">Producto</h5>
                        <div class="pull-center">
                            <button class="btn btn-agregar btn-danger m-r-5 m-b-5" data-toggle="modal" data-target="#ModalAgregar"><i class="fa fa-plus"></i> Agregar</button>
                        </div>
                    </div>
                </div>


                <div class="image gallery-group-1">
                    <div class="image-inner">
                        <a href="{{ url('/producto-detalle') }}">
                            <img src="{{ url('img/block.jpg')}}" alt="" />
                        </a>
                        <p class="image-caption">
                            N° 23
                        </p>
                    </div>
                    <div class="image-info">
                        <h5 class="title">Producto</h5>
                        <div class="pull-center">
                            <button class="btn btn-agregar btn-danger m-r-5 m-b-5" data-toggle="modal" data-target="#ModalAgregar"><i class="fa fa-plus"></i> Agregar</button>
                        </div>
                    </div>
                </div>


                <div class="image gallery-group-1">
                    <div class="image-inner">
                        <a href="{{ url('/producto-detalle') }}">
                            <img src="{{ url('img/block.jpg')}}" alt="" />
                        </a>
                        <p class="image-caption">
                            N° 23
                        </p>
                    </div>
                    <div class="image-info">
                        <h5 class="title">Producto</h5>
                        <div class="pull-center">
                            <button class="btn btn-agregar btn-danger m-r-5 m-b-5" data-toggle="modal" data-target="#ModalAgregar"><i class="fa fa-plus"></i> Agregar</button>
                        </div>
                    </div>
                </div>


                <div class="image gallery-group-1">
                    <div class="image-inner">
                        <a href="{{ url('/producto-detalle') }}">
                            <img src="{{ url('img/block.jpg')}}" alt="" />
                        </a>
                        <p class="image-caption">
                            N° 23
                        </p>
                    </div>
                    <div class="image-info">
                        <h5 class="title">Producto</h5>
                        <div class="pull-center">
                            <button class="btn btn-agregar btn-danger m-r-5 m-b-5" data-toggle="modal" data-target="#ModalAgregar"><i class="fa fa-plus"></i> Agregar</button>
                        </div>
                    </div>
                </div>


                <div class="image gallery-group-1">
                    <div class="image-inner">
                        <a href="{{ url('/producto-detalle') }}">
                            <img src="{{ url('img/block.jpg')}}" alt="" />
                        </a>
                        <p class="image-caption">
                            N° 23
                        </p>
                    </div>
                    <div class="image-info">
                        <h5 class="title">Producto</h5>
                        <div class="pull-center">
                            <button class="btn btn-agregar btn-danger m-r-5 m-b-5" data-toggle="modal" data-target="#ModalAgregar"><i class="fa fa-plus"></i> Agregar</button>
                        </div>
                    </div>
                </div>


                <div class="image gallery-group-1">
                    <div class="image-inner">
                        <a href="{{ url('/producto-detalle') }}">
                            <img src="{{ url('img/block.jpg')}}" alt="" />
                        </a>
                        <p class="image-caption">
                            N° 23
                        </p>
                    </div>
                    <div class="image-info">
                        <h5 class="title">Producto</h5>
                        <div class="pull-center">
                            <button class="btn btn-agregar btn-danger m-r-5 m-b-5" data-toggle="modal" data-target="#ModalAgregar"><i class="fa fa-plus"></i> Agregar</button>
                        </div>
                    </div>
                </div>

                
                <div class="image gallery-group-1">
                    <div class="image-inner">
                        <a href="{{ url('/producto-detalle') }}">
                            <img src="{{ url('img/block.jpg')}}" alt="" />
                        </a>
                        <p class="image-caption">
                            N° 23
                        </p>
                    </div>
                    <div class="image-info">
                        <h5 class="title">Producto</h5>
                        <div class="pull-center">
                            <button class="btn btn-agregar btn-danger m-r-5 m-b-5" data-toggle="modal" data-target="#ModalAgregar"><i class="fa fa-plus"></i> Agregar</button>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
        <!-- #contact -->
    </div>
    <!-- container -->

    @include('modals/agregar')
    
    @include('layouts/footer-cliente')
    
</div>
@endsection
