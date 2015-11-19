@extends('base-cliente')

@section('content')

<div id="page-container" class="fade">
    
    @include('layouts/navbar-cliente')
    
    <div class="content-top">
        <br>
        <h2 class="content-title">Producto Nombre</h2>

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
            <div class="row" id="real-estates-detail">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="box-detalle-publicidad">
                                <img class="img-detalle-publicidad img-2" src="http://test-tulocalidad.com.ve/uploads/publicidades_full/diego.carciente@gmail.com-27_7_2015-21:21:06.jpg">  
                            </div>
                        </div>
                    </div>
                </div>

          
                
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h2 class="content-title">Nombre Producto</h2>
                            <p class="content-desce">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                Vestibulum posuere augue eget ante porttitor fringilla. 
                                Aliquam laoreet, sem eu dapibus congue, velit justo ullamcorper urna, 
                                non rutrum dolor risus non sapien. Vivamus vel tincidunt quam. 
                                Donec ultrices nisl ipsum, sed elementum ex dictum nec. 
                            </p>
                            <div class="col-md-12 col-sm-12 milestone-col">
                                <div class="milestone">
                                    <div class="costo-producto">20.000 Bs</div>
                                    <div class="title">Costo</div>
                                </div>
                            </div>
                            <br><br>
                            
                                <div class="text-center button-agregar-producto">
                                    <button class="btn btn-agregar btn-danger m-r-5 m-b-5" data-toggle="modal" data-target="#ModalAgregar"><i class="fa fa-plus"></i> Agregar</button>
                                </div> 
                                                                                                                                    
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