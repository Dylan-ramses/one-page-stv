<!doctype html>
<html lang="en">

<head>
    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="99pixel" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Symtechven - Soluciones"  />
    <meta name="description" content="Symtechven - Soluciones" />
    <!-- title -->
    <title>Symtechven - Soluciones</title>
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"> -->
    <!-- plugin CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="{{ asset('static/plugin/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <!-- <link href="static/plugin/et-line/style.css" rel="stylesheet">
    <link href="static/plugin/themify-icons/themify-icons.css" rel="stylesheet">
    <link href="static/plugin/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="static/plugin/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap');
        </style>
    <!-- theme css -->
    <link rel="stylesheet" href="{{ asset('static/style/master.css') }}">
    
</head>
<!-- Body Start -->

<body data-spy="scroll" data-target="#navbar-collapse-toggle" data-offset="98">
    <!-- Preload -->
    <!-- <div id="loading">
        <div class="load-circle"><span class="one"></span></div>
    </div> -->
    <!-- End Preload -->
       <!-- Header -->
       <header class="header-nav header-dark header-transparent">
        <div class="fixed-header-bar">
            <!-- Header Nav -->
            <div class="container">
                <div class="navbar navbar-main navbar-expand-lg">
                    <a class="navbar-brand" href="index.html">
                        <img alt="logo de la empresa" title="" src="{{ asset('static/img/logo.svg')}}">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"> <img src="../public/static/img/menu.png" alt="menu hamburguesa"></span>
                    </button>
                    <div class="collapse navbar-collapse navbar-collapse-overlay" id="navbar-main-collapse">
                        
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item mm-in px-dropdown">
                                <a class="nav-link" href="#11">Productos y servicios</a>
                                <i class="fa fa-angle-down px-nav-toggle"></i>
                                <ul class="px-dropdown-menu mm-dorp-in">
                                    <li><a href="#1">Hardware AIDC</a></li>
                                    <li><a href="#2">Suministos</a></li>
                                    <li><a href="#3">Soluciones AIDC</a></li>
                                    <li><a href="#4">Servicio técnico especializado</a></li>

                                </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#5">Partner</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="#6">Portal de Servicios STV</a>
                                </li> -->
                                
                                </ul>
                        <a class="d-none d-lg-inline-block ml-auto m-btn m-btn-radius m-btn-theme2nd m-btn-sm" href="#6">Contactanos</a>
                    </div>
                </div>
            </div>
            <!-- End Header Nav -->
        </div>
    </header>
    @if(session('status'))
    <p>{{session('status')}}</p>
    @endif
    <!-- Header End -->
    <!-- Main -->
    <main>
        <!-- Home Banner -->
        <section class="effect-section">
            <div class="container-margin">
                <div class="row justify-content-between align-items-center p-100px-tb full-screen ">
                    <div class="col-lg-6">
                        <div class="p-30px-tb">
                            <h2 class="display-4 m-25px-b">Soluciones de identificación y captura automatizada de datos</h2>
                           <p class="lead">Adapta la tecnología AIDC en tu operación, con respaldo y garantía local.</p>
                            <!--<div class="p-10px-t">
                                <a class="m-btn m-btn-theme m-btn-radius m-btn-wide m-5px-lr" href="#"><i class="fab fa-apple"></i><span class="btn-inner--text">App Store</span></a>
                                <a class="m-btn m-btn-t-theme m-btn-radius m-btn-wide m-5px-lr" href="#"><i class="fab fa-google-play"></i><span class="btn-inner--text">Play Store</span></a>
                            </div>-->
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <div id="demo" class="carousel slide" data-ride="carousel">
                            <ul class="carousel-indicators">
                              <li data-target="#demo" data-slide-to="0" class="active"></li>
                              <li data-target="#demo" data-slide-to="1"></li>
                              <li data-target="#demo" data-slide-to="2"></li>
                            </ul>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="static/img/1.svg" alt="impresora y etiquetado" width="1100" height="500">
                                <div class="carousel-caption">

                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="static/img/2.svg" alt="escaneo de codigo de barra" width="1100" height="500">
                                <div class="carousel-caption">
                                  <h3></h3>
                                  <p></p>
                                </div>
                              </div>
                              <div class="carousel-item">
                                <img src="static/img/3.svg" alt="tranzabilidad de operaciones" width="1100" height="500">
                                <div class="carousel-caption">
                                  <h3></h3>
                                  <p></p>
                                </div>
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                              <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                              <span class="carousel-control-next-icon"></span>
                            </a>
                          </div>
                        <!--<img src="static/img/ai-11.svg" class="max-width-100" title="" alt="">-->
                    </div>
                </div>
            </div>

        </section>
        <!-- End Home Banner -->
        <!-- Section -->

        @if(session('status'))
            <p>{{session('status')}}</p>

        @endif

        <section id="11" name="11" class="section gray-bg s1" >
            <div class="container">
                <div class="row md-m-25px-b m-45px-b justify-content-center text-center">
                    <div class="col-lg-7">
                        <h3 class="h1 m-15px-b p-15px-b font-alt after-50 theme-after">Productos y servicios</h3>
                        <p class="">
                          Proveemos tecnología de identificación y captura automatizada de datos (tecnología AIDC).
                        <br> Somos el canal de comercialización y asesoría para adquirir hardware especializado, consumibles, servicio técnico autorizado Zebra Technologies y soluciones integradas.
                        <br>
                        <br>
                        Ofrecemos -como parte de nuestra atención diferenciada- servicio de inducción, instalación y garantía local en Venezuela.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 m-15px-tb">
                        <div  class="p-50px-tb p-25px-lr hover-top hover-rotate white-bg text-center border-radius-5 card align-items-center">
                             <a href="#1" >
                            <img src="{{ asset('static/img/chip.gif')}}"  width="100" alt="equipos" >
                            <h5 class="h6 m-10px-b">Hardware AIDC.</h5>
                        </a>
                            <p class="m-0px">Impresoras de códigos de barra/trasferencia térmica, scanners, handhelds, kioscos, tablets, computadoras móviles.</p>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 m-15px-tb">
                        <div class="p-50px-tb p-25px-lr hover-top hover-rotate white-bg text-center border-radius-5 card align-items-center">
                            <a href="#2" >
                            <img src="{{ asset('static/img/impresora.gif')}}" width="100" alt="suministros zebra">
                            <h5 class="h6 m-10px-b">Suministros</h5>
                        </a>
                            <p class="m-0px">Etiquetas, cinta de transferencia térmica, recibos, tags, brazaletes, PVCards.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 m-15px-tb">
                        <div class="p-50px-tb p-25px-lr hover-top hover-rotate white-bg text-center border-radius-5 card align-items-center">
                            <a href="#3">
                                <img src="{{ asset('static/img/presentacion.gif ')}}" width="100" alt="soluciones digitales">
                                <h5 class="h6 m-10px-b">Soluciones AIDC</h5>
                            </a>

                            <p class="m-0px">Diseño conceptual, desarrollo de software, asesoría, consultoría y soporte.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 m-15px-tb">
                        <div class="p-50px-tb p-25px-lr hover-top hover-rotate white-bg text-center border-radius-5 card align-items-center">
                           <a href="#4">
                            <img src="{{ asset('static/img/engranaje.gif ')}}"  width="100" alt="llave de servicio tecnico">
                            <h5 class="h6 m-10px-b">Servicio técnico especializado</h5>
                           </a>
                            <p class="m-0px">Nuestro exclusivo portal de servicios garantiza la gestión transparente de sus requerimientos. ¡Contáctenos!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section -->
         <!-- Section -->
         <section id="1" name="1" class="section p-10px-t">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <img src="{{ asset('static/img/a1.svg ')}}" title="" alt="equipos e impresoras zebra">
                    </div>
                    <div class="col-lg-5 align-self-center">
                        <h3 class="h2 m-15px-b">Hardware  AIDC.</h3>
                        <p class="m-0px font-2">Ofrecemos equipos especializados en la lectura e impresión de códigos de barra 1D y 2D, inducción de uso según buenas prácticas y estándares del fabricante así como puesta en marcha de los equipos.</p>
                        <div class="p-5px-t">
                            <div class="media align-items-center p-15px-t">
                                <div class="icon-30 green-bg-alt green-color border-radius-50">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="p-15px-l media-body">
                                    <h6 class="m-0px font-w-600">Impresoras TT y DT (industriales, escritorio, móviles, PVCards)</h6>
                                </div>
                            </div>
                            <div class="media align-items-center p-15px-t">
                                <div class="icon-30 pink-bg-alt pink-color border-radius-50">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="p-15px-l media-body">
                                    <h6 class="m-0px font-w-600">Scanners 1D y 2D</h6>
                                </div>
                            </div>
                            <div class="media align-items-center p-15px-t">
                                <div class="icon-30 blue-bg-alt blue-color border-radius-50">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="p-15px-l media-body">
                                    <h6 class="m-0px font-w-600">Terminales móviles (handhelds, kioscos, tablets)</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section -->
<hr>
         <!-- Section -->
         <section id="2" name="2" class="section p-10px-t">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <img src="{{ asset('static/img/a2.svg ')}}" title="" alt="suministros zebra">
                    </div>
                    <div class="col-lg-5 align-self-center">
                        <h3 class="h2 m-15px-b">Suministros</h3>
                        <p class="m-0px font-2">Consumibles -originales Zebra- especializados para la trazabilidad de sus operaciones.</p>
                        <div class="p-5px-t">
                            <div class="media align-items-center p-15px-t">
                                <div class="icon-30 green-bg-alt green-color border-radius-50">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="p-15px-l media-body">
                                    <h6 class="m-0px font-w-600">Etiquetas, recibos, tags y brazaletes (TT/ DT/ IQ color/ sintéticas/ papel/ RFID)<dt></dt></h6>
                                </div>
                            </div>
                            <div class="media align-items-center p-15px-t">
                                <div class="icon-30 pink-bg-alt pink-color border-radius-50">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="p-15px-l media-body">
                                    <h6 class="m-0px font-w-600">Cintas de transferencia térmica (ribbons de cera, resina y cera/resina)</h6>
                                </div>
                            </div>
                            <div class="media align-items-center p-15px-t">
                                <div class="icon-30 blue-bg-alt blue-color border-radius-50">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="p-15px-l media-body">
                                    <h6 class="m-0px font-w-600">PVCards (tarjetas de presentación/carnets)</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section -->
        <hr>
        <!-- Section -->
        <section id="3" name="3" class="section p-10px-t">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <img src="{{ asset('static/img/a3.svg ')}}" title="" alt="desarrollo web sofware y soluciones digitales">
                    </div>
                    <div class="col-lg-5 align-self-center">
                        <h3 class="h2 m-15px-b">Soluciones AIDC.</h3>
                        <p class="m-0px font-2">Desarrollamos integralmente soluciones en función de su requerimiento, garantizando un mejor rendimiento en su operación.</p>
                        <div class="p-5px-t">
                            <div class="media align-items-center p-15px-t">
                                <div class="icon-30 green-bg-alt green-color border-radius-50">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="p-15px-l media-body">
                                    <h6 class="m-0px font-w-600">Diseño conceptual enfocado en sus objetivos.</h6>
                                </div>
                            </div>
                            <div class="media align-items-center p-15px-t">
                                <div class="icon-30 pink-bg-alt pink-color border-radius-50">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="p-15px-l media-body">
                                    <h6 class="m-0px font-w-600">Desarrollo de software especializado y soporte del mismo.</h6>
                                </div>
                            </div>
                            <div class="media align-items-center p-15px-t">
                                <div class="icon-30 blue-bg-alt blue-color border-radius-50">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="p-15px-l media-body">
                                    <h6 class="m-0px font-w-600">Asesoría y/o consultoría en funcion de la mejora o resolución de eventos en sus operaciones</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section -->
        <hr>
        <!-- Section -->
        <section id="4" name="4" class="section p-10px-t">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <img src="{{ asset('static/img/a4.svg')}}" title="" alt="escudo de servicio tecnico">
                    </div>
                    <div class="col-lg-5 align-self-center">
                        <h3 class="h2 m-15px-b">Servicio técnico especializado.</h3>
                        <p class="m-0px font-2">Contamos con un centro especializado para mantenimiento y reparación (autorizado por Zebra); nuestros clientes pueden solicitar y monitorear cualquier servicio desde nuestro Portal (contáctanos para más información).</p>
                        <div class="p-5px-t">
                            <div class="media align-items-center p-15px-t">
                                <div class="icon-30 green-bg-alt green-color border-radius-50">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="p-15px-l media-body">
                                    <h6 class="m-0px font-w-600">Revisión, diagnóstico, mantenimiento preventivo y/o correctivo de sus equipos.</h6>
                                </div>
                            </div>
                            <div class="media align-items-center p-15px-t">
                                <div class="icon-30 pink-bg-alt pink-color border-radius-50">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="p-15px-l media-body">
                                    <h6 class="m-0px font-w-600">Servicio de mantenimiento y reparación en área de operación (in situ).</h6>
                                </div>
                            </div>
                            <div class="media align-items-center p-15px-t">
                                <div class="icon-30 blue-bg-alt blue-color border-radius-50">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="p-15px-l media-body">
                                    <h6 class="m-0px font-w-600">Contratos de mantenimiento extendidos, asegure su flota de equipos AIDC.</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section -->

        <!-- encabezado de mercados verticales  -->
        <section id="5" class="section gray-bg grid-par">
            <div class="container certi-z">
                <div class="row md-m-25px-b m-45px-b ">
                        <h3 class="h1 m-15px-b p-15px-b font-alt after-50 theme-after">Somos especialistas en tecnología de identificación
y captura automatizada de datos.</h3>
                        <p class="m-0px">Con más de 25 años de experiencia, hemos sido pioneros en Venezuela implantado soluciones de automatización, vitales para el desarrollo de su empresa en cualquier mercado vertical donde opere o apunte operar.</p>
                    </div>
                </div>
                  <div class="img-par">
                   <img src="{{ asset('/static/img/Asset 20.png')}}" alt="certificado de la empresa">   
                  </div>
               
        
            </div>
        </section>
   
        <!-- menu de seis mercados verticales escritorio  -->
        <div class="tab-style-3 m-dn1">
            <ul class="nav nav-fill nav-tabs box-shadow grid1">
                <li class="nav-item">
                    <a href="#tab3_sec0" data-toggle="tab"class="active">
                        <div class="icon"><img src="{{ asset('static/img/manufactura_industria.gif ')}}"  width="70" alt="industria"></i></div>
                        <span>WareHouse</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#tab3_sec1" data-toggle="tab" >
                        <div class="icon"><img src="{{ asset('static/img/mercado_minorista.gif ')}}" width="70" alt="carrito de compras"></div>
                        <span>Mercado <br>
                            minorista</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#tab3_sec2" data-toggle="tab">
                        <div class="icon"><img src="{{ asset('static/img/manufactura_industria.gif ')}}"  width="70" alt="fabrica"></i></div>
                        <span>Manufactura <br>
                            e industria</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#tab3_sec3" data-toggle="tab">
                        <div class="icon"><img src="{{ asset('static/img/salud.gif')}}" width="70" alt="botiquin de primeros auxilios"></div>
                        <span><br>Salud <br></span>
                      </a>
                  </li>
                <li class="nav-item">
                    <a href="#tab3_sec4" data-toggle="tab">
                        <div class="icon"><div class="icon"><img src="{{ asset('static/img/transporte_logistica.gif')}}"  width="70" alt="tranporte terrestre"></div></div>
                        <span>Transporte <br>
                            y logística</span>
                    </a>
                </li>

                  <li class="nav-item">
                      <a href="#tab3_sec5" data-toggle="tab">
                          <div class="icon"><img src="{{ asset('static/img/turismo.gif ')}}"  width="70" alt="institucion"></i></div>
                          <span>Instituciones y <br>
                            eventos</span>
                      </a>
                  </li>

            </ul>
        </div>


       
        <!-- tab-content for escrito (seis contenidos de mercados verticales)  -->
        <div class="tab-content ">
            <!-- start tab content -->
            <div id="tab3_sec0" class="tab-pane fade in active show ">
               <div class="row align-items-center  p-25px-t md-p-15px-t">
                   <div class="col-lg-6 text-center m-15px-tb">
                       <img src="static/img/ai-10-warehouse.svg" title="" alt="monta cargas y almacen" style="height: 300px;">
                   </div>
                   <div class="col-lg-5 m-15px-tb"  id="1-text">
                       <h2 class="h1 m-25px-b">Warehouse.</h2>
                       <p class="m-5px-b">El almacén es la clave del exito en el mercado global; mantenerlo al día se traduce en respuestas rápidas y oportunas para sus operaciones. Contamos con soluciones enfocadas en las operaciones -estáticas y danámicas- fundamentales de éste recinto.
                       </p>   
                   </div>
               </div>
           </div>
           <!-- end tab content -->
       <!-- start tab content -->
       <div id="tab3_sec1" class="tab-pane fade in ">
           <div class="row align-items-center  p-25px-t md-p-15px-t">
               <div class="col-lg-6 text-center m-15px-tb">
                   <img src="{{ asset('static/img/ai-9.svg')}}" title="" alt="es un escaner de supermercado" style="height: 300px;">
               </div>
               <div class="col-lg-5 m-15px-tb">
                   <h2 class="h1 m-25px-b">Mercado minorista.</h2>
                   <p class="m-5px-b">El retail requiere garantizar operaciones de venta rápidas, sencillas y en multiples plataformas. Contamos con experiencia, insumos, equipos y desarrollo para agilizar sus operaciones.
                   </p>
                </div>
           </div>
       </div>
       <!-- end tab content -->
       <!-- start tab content -->
       <div id="tab3_sec2" class="tab-pane fade in ">
           <div class="row align-items-center p-25px-t md-p-15px-t">
               <div class="col-lg-6 text-center m-15px-tb">
                   <img src="{{ asset('static/img/ai-11.svg')}}" title="" alt="manejo de robotica con sofware"style="height: 300px;">
               </div>
               <div class="col-lg-5 m-15px-tb">
                   <h2 class="h1 m-25px-b">Manufactura e Industria.</h2>
                   <p class="m-5px-b">El sector industrial presenta grandes desafíos en cuanto a la adaptación y traza de las operaciones. Ponemos a disposición nuestra amplia experiencia en el área para desarrollar soluciones convenientes e innovadoras.
                   </p>
                 </div>
           </div>
       </div>
       <!-- end tab content -->
       
<!-- start tab content -->
       <div id="tab3_sec3" class="tab-pane fade in">
           <div class="row align-items-center  p-25px-t md-p-15px-t">
               <div class="col-lg-6 text-center m-15px-tb">
                   <img src="{{ asset('static/img/ai-12.svg')}}" title="" alt="es un bebe con brazalete de identificacion" style="height: 300px;">
               </div>
               <div class="col-lg-5 m-15px-tb">
                   <h2 class="h1 m-25px-b">Salud.</h2>
                   <p class="m-5px-b">Dar respuestas rápidas, asertivas y ágiles a sus pacientes, sea dentro de una consulta externa o un quirófano, hará la diferencia. Somos aliados poderosos en la modernización y mejoras de las instituciones de salud.
                   </p> 
               </div>
           </div>
       </div>
       <!-- end tab content -->
       <!-- start tab content -->
       <div id="tab3_sec4" class="tab-pane fade in">
           <div class="row align-items-center  p-25px-t md-p-15px-t">
               <div class="col-lg-6 text-center m-15px-tb">
                   <img src="{{ asset('static/img/ai-13.svg')}}" title="" alt="descargando multiples cajas" style="height: 300px;">
               </div>
               <div class="col-lg-5 m-15px-tb">
                   <h2 class="h1 m-25px-b">Transporte y Logística.</h2>
                   <p class="m-5px-b">La logistica y el transporte son las piedras angulares del mercado global. Contamos con interesantes soluciones desarrolladas para todas las operaciones vitales, no pierda la oportunidad de posicionar su empresa con las mejores herramientas.
                   </p>   
               </div>
           </div>
       </div>
       <!-- end tab content -->
        <!-- start tab content -->
        <div id="tab3_sec5" class="tab-pane fade in">
           <div class="row align-items-center p-25px-t md-p-15px-t">
               <div class="col-lg-6 text-center m-15px-tb">
                   <img src="{{ asset('static/img/ai-17.svg')}}" title="" alt="verificador de precio e identidad" style="height: 300px;">
               </div>
               <div class="col-lg-5 m-15px-tb">
                   <h2 class="h1 m-25px-b">Instituciones y Eventos.</h2>
                   <p class="m-5px-b">Garantice la mejor experiencia en sus instalaciones y eventos, la digitalización mejora los procesos organizacionales y aporta sentido de pertenencia. Del mismo modo, la experiencia en todo evento debe ser limpia y fácil para el disfrurte.
                   </p>
               
               </div>
           </div>
       </div>
       <!-- end tab content -->
        </div>
     
       <!-- contenido mobile -->
        <section id="mobile-content-mv">
             
            <div id="tabb_sec0" class="tab-pane  ">
                    <div class="row align-items-center justify-content-between p-25px-t md-p-15px-t">
                        <div class="col-lg-6 text-center m-15px-tb">
                            <img src="{{ asset('static/img/ai-10-warehouse.svg')}}" title="" alt="monta cargas y almacen" style="height: 227px;">
                        </div>
                        <div class="col-lg-5 m-15px-tb"  id="1-text">
                            <h2 class="h1 m-25px-b title-center-final">Warehouse.</h2>
                            <p class="m-5px-b title-center-final">El almacén es la clave del exito en el mercado global; mantenerlo al día se traduce en respuestas rápidas y oportunas para sus operaciones. Contamos con soluciones enfocadas en las operaciones -estáticas y danámicas- fundamentales de éste recinto.
                            </p>   
                        </div>
                    </div>
            </div>
           
            <div id="tabb3_sec1" class="tab-pane  ">
                <div class="row align-items-center justify-content-between p-25px-t md-p-15px-t">
                    <div class="col-lg-6 text-center m-15px-tb">
                        <img src="{{ asset('static/img/ai-9.svg ')}}" title="" alt="es un escaner de supermercado" style="height: 227px;">
                    </div>
                    <div class="col-lg-5 m-15px-tb title-center-final">
                        <h2 class="h1 m-25px-b title-center-final">Mercado minorista.</h2>
                        <p class="m-5px-b title-center-final">El retail requiere garantizar operaciones de venta rápidas, sencillas y en multiples plataformas. Contamos con experiencia, insumos, equipos y desarrollo para agilizar sus operaciones.
                        </p>
                     </div>
                </div>
            </div>
            
            <div id="tabb3_sec2" class="tab-pane ">
                <div class="row align-items-center justify-content-between p-25px-t md-p-15px-t">
                    <div class="col-lg-6 text-center m-15px-tb">
                        <img src="{{ asset('static/img/ai-11.svg')}}" title="" alt="manejo de robotica con sofware"style="height: 227px;">
                    </div>
                    <div class="col-lg-5 m-15px-tb">
                        <h2 class="h1 m-25px-b title-center-final">Manufactura e Industria.</h2>
                        <p class="m-5px-b title-center-final">El sector industrial presenta grandes desafíos en cuanto a la adaptación y traza de las operaciones. Ponemos a disposición nuestra amplia experiencia en el área para desarrollar soluciones convenientes e innovadoras.
                        </p>
                      </div>
                </div>
            </div>
    
            <div id="tabb3_sec3" class="tab-pane ">
                <div class="row align-items-center justify-content-between p-25px-t md-p-15px-t">
                    <div class="col-lg-6 text-center m-15px-tb">
                        <img src="{{asset('static/img/ai-12.svg')}}" title="" alt="es un bebe con brazalete de identificacion">
                    </div>
                    <div class="col-lg-5 m-15px-tb">
                        <h2 class="h1 m-25px-b title-center-final">Salud.</h2>
                        <p class="m-5px-b title-center-final">Dar respuestas rápidas, asertivas y ágiles a sus pacientes, sea dentro de una consulta externa o un quirófano, hará la diferencia. Somos aliados poderosos en la modernización y mejoras de las instituciones de salud.
                        </p> 
                    </div>
                </div>
            </div>
           
            <div id="tabb3_sec4" class="tab-pane ">
                <div class="row align-items-center justify-content-between p-25px-t md-p-15px-t">
                    <div class="col-lg-6 text-center m-15px-tb">
                        <img src="{{ asset('static/img/ai-13.svg')}}" title="" alt="descargando multiples cajas">
                    </div>
                    <div class="col-lg-5 m-15px-tb">
                        <h2 class="h1 m-25px-b title-center-final">Transporte y Logística.</h2>
                        <p class="m-5px-b title-center-final">La logistica y el transporte son las piedras angulares del mercado global. Contamos con interesantes soluciones desarrolladas para todas las operaciones vitales, no pierda la oportunidad de posicionar su empresa con las mejores herramientas.
                        </p>   
                    </div>
                </div>
            </div>
           
            <div id="tabb3_sec5" class="tab-pane ">
                <div class="row align-items-center justify-content-between p-25px-t md-p-15px-t">
                    <div class="col-lg-6 text-center m-15px-tb">
                        <img src="{{ asset('static/img/ai-17.svg')}}" title="" alt="verificador de precio e identidad">
                    </div>
                    <div class="col-lg-5 m-15px-tb">
                        <h2 class="h1 m-25px-b title-center-final">Instituciones y Eventos.</h2>
                        <p class="m-5px-b title-center-final">Garantice la mejor experiencia en sus instalaciones y eventos, la digitalización mejora los procesos organizacionales y aporta sentido de pertenencia. Del mismo modo, la experiencia en todo evento debe ser limpia y fácil para el disfrurte.
                        </p>
                    
                    </div>
                </div>
            </div>
        </section>  

         <!-- Section -->
         <section id ='6' class ="section gray-bg">
            <div class="container">
                <div class="row section-title justify-content-center text-center md-m-25px-b m-45px-b">
                    <div class="col-lg-7">
                        <h3 class="h1 m-10px-b">Contáctanos</h3>
                        <p class="lead">A través del siguiente formulario podras entrar en contacto con nuestras diferentes áreas de negocios, estaremos encantados de responder de manera receptiva y oportuna sus planteamientos.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-11 col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('contact') }}">
                                    @method("POST")
                                    @csrf 
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Nombre</label>
                                                <input type="text" class="form-control" name="name" placeholder="Ingrese Nombre">
                                                @error('name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Apellido</label>
                                                <input type="text" class="form-control" name="lastname" placeholder="Ingrese Apellido">
                                                @error('lastname')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Correo Electronico</label>
                                                <input type="email" class="form-control" name="email">
                                                @error('email')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Empresa</label>
                                                <input type="text" name="company" class="form-control">
                                                @error('company')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-control-label">En que lo podemos apoyar?</label>
                                                <textarea class="form-control" rows="6" name="answer" required></textarea>
                                                @error('answer')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center p-15px-t">
                                            <button type="submit" class="m-btn m-btn-radius m-btn-theme">Enviar</button>
                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section -->

    </main>
    <!-- End Main -->
    <!-- Footer-->
    <footer>
  <div class="container-footer">
    <img src="{{ asset('/static/img/icono stv.png ')}}" alt="logo de la empresa">
  </div>
</footer>
    <!-- End Footer -->
    <!-- jquery -->
    <script src="static/js/jquery-3.2.1.min.js"></script>
    
    <script src="static/js/jquery-migrate-3.0.0.min.js"></script>
    <!-- appear -->
    <!-- <script src="static/plugin/appear/jquery.appear.js"></script> -->
    <!-- end appear -->
    <!--bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--end bootstrap-->
    <!-- End -->
    <!-- custom js -->
    <script src="static/js/custom.js"></script>
    <!-- end -->
</body>
<!-- end body -->

</html>
