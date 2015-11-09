@extends('base-cliente')

@section('content')

<div id="page-container" class="fade">
    
	@include('layouts/navbar-cliente')
    
    <div class="content-top">
        <br>
        <h2 class="content-title">Cotización</h2>

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
                            <i class="fa fa-list"></i>
                        </div> 
                        <h3>Lista de Productos a Cotizar</h3>
                        <p>
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus magna eu lacinia eleifend.
                        </p>
                    </div>
                    <!-- end col-9 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3">
                        <a href="#" class="btn btn-outline btn-block">Enviar Cotización</a>
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

            <ul class="result-list">
                
                <li>
                    <div class="result-image">
                        <a href="javascript:;"><img src="http://www.test-wanaitravel.com.ve/uploads/paquetes/img_high/e6641ed1037ac493-29_9_2015-16:15:40.jpg" alt=""></a>
                    </div>
                    <div class="result-info">
                        <h4 class="title-estado-list"><i class="fa fa-cube"></i> Producto</h4>
                        
                        <p class="location"><i class="fa fa-calendar-o"></i> 2015-09-30</p>
                        
                        <p class="desc">
                            Descripcion : Nunc et ornare ligula. Aenean commodo lectus turpis, eu laoreet risus lobortis quis. Suspendisse vehicula mollis magna vel aliquet. Donec ac tempor neque, convallis euismod mauris. Integer dictum dictum ipsum quis viverra.
                        </p>
                    </div>
                    <div class="result-price">
                        $92,101 <small>COSTO</small>
                        <button type="button" class="btn btn-danger button-eliminar btn-sm"><i class="fa fa-trash"></i></button>
                    </div>
                </li>

                <li>
                    <div class="result-image">
                        <a href="javascript:;"><img src="http://www.test-wanaitravel.com.ve/uploads/paquetes/img_high/e6641ed1037ac493-29_9_2015-16:15:40.jpg" alt=""></a>
                    </div>
                    <div class="result-info">
                        <h4 class="title-estado-list"><i class="fa fa-cube"></i> Producto</h4>
                        
                        <p class="location"><i class="fa fa-calendar-o"></i> 2015-09-30</p>
                        
                        <p class="desc">
                            Descripcion : Nunc et ornare ligula. Aenean commodo lectus turpis, eu laoreet risus lobortis quis. Suspendisse vehicula mollis magna vel aliquet. Donec ac tempor neque, convallis euismod mauris. Integer dictum dictum ipsum quis viverra.
                        </p>
                    </div>
                    <div class="result-price">
                        $92,101 <small>COSTO</small>
                        <button type="button" class="btn btn-danger button-eliminar btn-sm"><i class="fa fa-trash"></i></button>
                    </div>
                </li>

                <li>
                    <div class="result-image">
                        <a href="javascript:;"><img src="http://www.test-wanaitravel.com.ve/uploads/paquetes/img_high/e6641ed1037ac493-29_9_2015-16:15:40.jpg" alt=""></a>
                    </div>
                    <div class="result-info">
                        <h4 class="title-estado-list"><i class="fa fa-cube"></i> Producto</h4>
                        
                        <p class="location"><i class="fa fa-calendar-o"></i> 2015-09-30</p>
                        
                        <p class="desc">
                            Descripcion : Nunc et ornare ligula. Aenean commodo lectus turpis, eu laoreet risus lobortis quis. Suspendisse vehicula mollis magna vel aliquet. Donec ac tempor neque, convallis euismod mauris. Integer dictum dictum ipsum quis viverra.
                        </p>
                    </div>
                    <div class="result-price">
                        $92,101 <small>COSTO</small>
                        <button type="button" class="btn btn-danger button-eliminar btn-sm"><i class="fa fa-trash"></i></button>
                    </div>
                </li>

            </ul>

        </div>
        <!-- #contact -->
    </div>
    <!-- container -->
    
    @include('layouts/footer-cliente')

</div>
@endsection
