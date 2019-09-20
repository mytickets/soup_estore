<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'site title') }}</title>

        <!-- Scripts -->
        {{-- <script src="{{ asset('js/site.js') }}" defer></script> --}}
        {{-- <script src="{{ asset('sss/bar.js') }}" defer></script> --}}

        <!-- Fonts -->
        {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

        <!-- Styles -->
        {{-- <link href="{{ asset('sss/bar.css') }}" rel="stylesheet"> --}}
        {{-- <link href="{{ asset('css/site.css') }}" rel="stylesheet"> --}}


        <!-- CSS Plugins -->
        <link rel="stylesheet" href="/soup2_files/bootstrap.min.css">
        <link rel="stylesheet" href="/soup2_files/slick.css">
        <link rel="stylesheet" href="/soup2_files/animate.min.css">
        <link rel="stylesheet" href="/soup2_files/animsition.min.css">

        <!-- CSS Icons -->
        <link rel="stylesheet" href="/themify-icons.css">
        {{-- <link rel="stylesheet" href="/soup2_files/font-awesome.min.css"> --}}

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/v4-shims.css">        
        <script defer src="https://use.fontawesome.com/releases/v5.10.1/js/all.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.10.1/js/v4-shims.js"></script>

        <!-- CSS Theme -->
        <link id="theme" rel="stylesheet" href="/soup2_files/theme-beige.min.css">
        <link id="theme" rel="stylesheet" href="/soup2_files/overcss.css">
        <link id="theme" rel="stylesheet" href="/Gallery-master/css/blueimp-gallery.css">
        <script src="/Gallery-master/js/blueimp-gallery.min.js"></script>

        <!-- f:\ga\prjs\Rkeeper7\laravel\lara_admin\public\Gallery-master\css\ -->
        {{-- <link rel="stylesheet" type="text/css" href="/soup2_files/styleswitcher.css"> --}}

        <!-- JS Plugins -->
        <script src="/soup2_files/jquery.min.js"></script>
        <script src="/soup2_files/tether.min.js"></script>
        <script src="/soup2_files/bootstrap.min.js"></script>
        <script src="/soup2_files/slick.min.js"></script>
        <script src="/soup2_files/jquery.appear.js"></script>
        <script src="/soup2_files/jquery.scrollTo.min.js"></script>
        <script src="/soup2_files/jquery.localScroll.min.js"></script>
        <script src="/soup2_files/jquery.validate.min.js"></script>
        <script src="/soup2_files/jquery.mb.YTPlayer.min.js"></script>
        <script src="/soup2_files/twitterFetcher_min.js"></script>
        <script src="/soup2_files/skrollr.min.js"></script>
        {{-- <script src="/soup2_files/animsition.min.js"></script> --}}

    </head>
    <body>


<!-- The Gallery as lightbox dialog, should be a document body child element -->
<div id="blueimp-gallery" class="blueimp-gallery">
  <div class="slides"></div>
  <h3 class="title"></h3>
  <a class="prev">‹</a>
  <a class="next">›</a>
  <a class="close">×</a>
  <a class="play-pause"></a>
  <ol class="indicator"></ol>
</div>

    <!-- Body Wrapper -->
    {{-- <div id="body-wrapper" class="animsition" style="animation-duration: 800ms; opacity: 1;"> --}}
    <div id="body-wrapper">

        <!-- Header -->
        <header id="header" class="light">

            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <!-- Logo -->
                        <div class="module module-logo dark">
                            <a href="http://themes.suelo.pl/soup/index.html">
                                {{-- <img src="/soup2_files/logo-light.svg" alt="" width="88"> --}}
                                <h1>Лого</h1>
                                <h4>Слоган</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <!-- Navigation -->
                        <nav class="module module-navigation left mr-4">
                            <ul id="nav-main" class="nav nav-main">
                                <li>
                                    <a href="/main">Главная</a>
                                </li>
                                <li>
                                    <a href="/about">О Нас</a>
                                </li>

                                <li>
                                    <a href="/cats" >Меню</a>
                                </li>
                                {{-- <li><a href="http://themes.suelo.pl/soup/page-offers.html">Заказыs</a></li> --}}
                                <li><a href="/contact">Контакты</a></li>

                            </ul>
                        </nav>
                        <div class="module left">
                            @if ($user)
                                
                                <a href="/admin" class="btn btn-outline-secondary"><span>{{ $user->name }}</span></a>
                                
                            @else
                                {{-- {{ Auth::user()->id }} --}}
                                <a href="/admin" class="btn btn-outline-secondary"><span>Войти</span></a>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="#" class="module module-cart right" data-toggle="panel-cart">
                            <span class="cart-icon">
                                <i class="ti ti-shopping-cart"></i>
                                {{-- <span class="notification">2</span> --}}
                            </span>
                            {{-- <span class="cart-value">$32.98</span> --}}
                            <span class="cart-value">пусто</span>
                        </a>
                    </div>
                </div>
            </div>

        </header>
        <!-- Header / End -->

        <!-- Header mobile -->
        <header id="header-mobile" class="light">

            <div class="module module-nav-toggle">
                <a href="#" id="nav-toggle" data-toggle="panel-mobile"><span></span><span></span><span></span><span></span></a>
            </div>

            <div class="module module-logo">
                <a href="http://themes.suelo.pl/soup/index.html">
                    <img src="/soup2_files/logo-horizontal-dark.svg" alt="">
                </a>
            </div>

            <a href="#" class="module module-cart" data-toggle="panel-cart">
                <i class="ti ti-shopping-cart"></i>
                <span class="notification">2</span>
            </a>

        </header>
        <!-- Header mobile / End -->

        <!-- Content -->
        <div id="content">
            @yield('content')

            <!-- Footer -->
            <footer id="footer" class="bg-dark dark">

                <div class="container">
                    <!-- Footer 1st Row -->
                    <div class="footer-first-row row">
                        <div class="col-lg-3 text-center">
                            <a href="http://themes.suelo.pl/soup/index.html"><img src="/soup2_files/logo-light.svg" alt="" width="88" class="mt-5 mb-5"></a>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <h5 class="text-muted">Новости</h5>
                            <ul class="list-posts">
                                <li>
                                    <a href="http://themes.suelo.pl/soup/blog-post.html" class="title">Запуск онлайн меню</a>
                                    <span class="date">Июль 14, 2019</span>
                                </li>
                                <li>
                                    <a href="http://themes.suelo.pl/soup/blog-post.html" class="title">Добро пожаловать!</a>
                                    <span class="date">Август 21, 2019</span>
                                </li>
                                <li>
                                    <a href="http://themes.suelo.pl/soup/blog-post.html" class="title">Крутые закуски на вынос.</a>
                                    <span class="date">Август 14, 2019</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <h5 class="text-muted">Будьте всегда вкурсе последних событий!</h5>
                            <!-- MailChimp Form -->
                            <form action="http://suelo.us12.list-manage.com/subscribe/post-json?u=ed47dbfe167d906f2bc46a01b&amp;id=24ac8a22ad" id="sign-up-form" class="sign-up-form validate-form mb-3" method="POST">
                                <div class="input-group">
                                    <input name="EMAIL" id="mce-EMAIL" type="email" class="form-control" placeholder="Укажите Ваш e-mail..." required="">
                                    <span class="input-group-btn">
                                    <button class="btn btn-primary btn-submit" type="submit">
                                        <span class="description">Подписаться</span>
                                    <span class="success">
                                            <svg x="0px" y="0px" viewBox="0 0 32 32"><path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path></svg>
                                        </span>
                                    <span class="error">Попробывать снова...</span>
                                    </button>
                                    </span>
                                </div>
                            </form>
                            <h5 class="text-muted mb-3">Социальные сети</h5>
                            <a href="#" class="icon icon-social icon-circle icon-sm icon-facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="icon icon-social icon-circle icon-sm icon-google"><i class="fa fa-google"></i></a>
                            <a href="#" class="icon icon-social icon-circle icon-sm icon-twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="icon icon-social icon-circle icon-sm icon-youtube"><i class="fa fa-youtube"></i></a>
                            <a href="#" class="icon icon-social icon-circle icon-sm icon-instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                    <!-- Footer 2nd Row -->
                    <div class="footer-second-row">
                        <span class="text-muted">Copyright Soup 2019©.</span>
                    </div>
                </div>

                <!-- Back To Top -->
                <a href="#" id="back-to-top2" class=""><i class="ti ti-angle-up"></i></a>

            </footer>
            <!-- Footer / End -->

        </div>
        <!-- Content / End -->

        <!-- Panel Cart -->
        <div id="panel-cart" class="">
            <div class="panel-cart-container">
                <div class="panel-cart-title">
                    <h5 class="title">Корзина</h5>
                    <button class="close" data-toggle="panel-cart"><i class="ti ti-close"></i></button>
                </div>
                <div class="panel-cart-content">
                    <table class="table-cart" style="display: none;">
                        <tbody>
                            <tr>
                                <td class="title">
                                    <span class="name"><a href="#productModal" data-toggle="modal">Pizza Chicked BBQ</a></span>
                                    <span class="caption text-muted">26”, deep-pan, thin-crust</span>
                                </td>
                                <td class="price">$9.82</td>
                                <td class="actions">
                                    <a href="#productModal" data-toggle="modal" class="action-icon"><i class="ti ti-pencil"></i></a>
                                    <a href="#" class="action-icon"><i class="ti ti-close"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="title">
                                    <span class="name"><a href="#productModal" data-toggle="modal">Beef Burger</a></span>
                                    <span class="caption text-muted">Large (500g)</span>
                                </td>
                                <td class="price">$9.82</td>
                                <td class="actions">
                                    <a href="#productModal" data-toggle="modal" class="action-icon"><i class="ti ti-pencil"></i></a>
                                    <a href="#" class="action-icon"><i class="ti ti-close"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="title">
                                    <span class="name"><a href="#productModal" data-toggle="modal">Extra Burger</a></span>
                                    <span class="caption text-muted">Small (200g)</span>
                                </td>
                                <td class="price text-success">$0.00</td>
                                <td class="actions">
                                    <a href="#productModal" data-toggle="modal" class="action-icon"><i class="ti ti-pencil"></i></a>
                                    <a href="#" class="action-icon"><i class="ti ti-close"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="title">
                                    <span class="name">Weekend 20% OFF</span>
                                </td>
                                <td class="price text-success">-$8.22</td>
                                <td class="actions"></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="cart-summary" >
                        <div class="row">
                            <div class="col-7 text-right text-muted">Заказ:</div>
                            <div class="col-5"><strong>$21.02</strong></div>
                        </div>
                        <div class="row">
                            <div class="col-7 text-right text-muted">Доставка:</div>
                            <div class="col-5"><strong>$3.99</strong></div>
                        </div>
                        <hr class="hr-sm">
                        <div class="row text-lg">
                            <div class="col-7 text-right text-muted">Итого:</div>
                            <div class="col-5"><strong>$24.21</strong></div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/checkout" class="panel-cart-action btn btn-secondary btn-block btn-lg"><span>Оформить заказ</span></a>
        </div>

        <!-- Panel Mobile -->
        <nav id="panel-mobile">
            <div class="module module-logo bg-dark dark">
                <a href="#">
                    <img src="/soup2_files/logo-light.svg" alt="" width="88">
                </a>
                <button class="close" data-toggle="panel-mobile"><i class="ti ti-close"></i></button>
            </div>
            <nav class="module module-navigation">
            </nav>
            <div class="module module-social">
                <h6 class="text-sm mb-3">Мы в сети!</h6>
                <a href="#" class="icon icon-social icon-circle icon-sm icon-facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="icon icon-social icon-circle icon-sm icon-google"><i class="fa fa-google"></i></a>
                <a href="#" class="icon icon-social icon-circle icon-sm icon-twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="icon icon-social icon-circle icon-sm icon-youtube"><i class="fa fa-youtube"></i></a>
                <a href="#" class="icon icon-social icon-circle icon-sm icon-instagram"><i class="fa fa-instagram"></i></a>
            </div>
        </nav>

        <!-- Body Overlay -->
        {{-- <div id="body-overlay" style="display: none;"></div> --}}

    </div>

    <!-- Modal / Product -->
    <div class="modal fade" id="productModal" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header modal-header-lg dark bg-dark">
                    <div class="bg-image" style="background-image: url(&quot;assets/img/photos/modal-add.jpg&quot;);"><img src="/soup2_files/modal-add.jpg" alt="" style="display: none;"></div>
                    <h4 class="modal-title">Specify your dish</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ti-close"></i></button>
                </div>
                <div class="modal-product-details">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h6 class="mb-0">Boscaiola Pasta</h6>
                            <span class="text-muted">Pasta, Cheese, Tomatoes, Olives</span>
                        </div>
                        <div class="col-3 text-lg text-right">$9.00</div>
                    </div>
                </div>
                <div class="modal-body panel-details-container">
                    <!-- Panel Details / Size -->
                    <div class="panel-details">
                        <h5 class="panel-details-title">
                        <label class="custom-control custom-radio">
                            <input name="radio_title_size" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"><svg class="icon" x="0px" y="0px" viewBox="0 0 32 32"><path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="4" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path></svg></span>
                        </label>
                        <a href="#panelDetailsSize" data-toggle="collapse" aria-expanded="false" class="collapsed">Size</a>
                    </h5>
                        <div id="panelDetailsSize" class="collapse" aria-expanded="false" style="">
                            <div class="panel-details-content">
                                <div class="form-group">
                                    <label class="custom-control custom-radio">
                                        <input name="radio_size" type="radio" class="custom-control-input" checked="">
                                        <span class="custom-control-indicator"><svg class="icon" x="0px" y="0px" viewBox="0 0 32 32"><path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="4" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path></svg></span>
                                        <span class="custom-control-description">Small - 100g ($9.99)</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="custom-control custom-radio">
                                        <input name="radio_size" type="radio" class="custom-control-input">
                                        <span class="custom-control-indicator"><svg class="icon" x="0px" y="0px" viewBox="0 0 32 32"><path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="4" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path></svg></span>
                                        <span class="custom-control-description">Medium - 200g ($14.99)</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="custom-control custom-radio">
                                        <input name="radio_size" type="radio" class="custom-control-input">
                                        <span class="custom-control-indicator"><svg class="icon" x="0px" y="0px" viewBox="0 0 32 32"><path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="4" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path></svg></span>
                                        <span class="custom-control-description">Large - 350g ($21.99)</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Panel Details / Additions -->
                    <div class="panel-details">
                        <h5 class="panel-details-title">
                        <label class="custom-control custom-radio">
                            <input name="radio_title_additions" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"><svg class="icon" x="0px" y="0px" viewBox="0 0 32 32"><path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="4" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path></svg></span>
                        </label>
                        <a href="#panelDetailsAdditions" data-toggle="collapse" class="collapsed" aria-expanded="false">Additions</a>
                    </h5>
                        <div id="panelDetailsAdditions" class="collapse" aria-expanded="false" style="">
                            <div class="panel-details-content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"><svg class="icon" x="0px" y="0px" viewBox="0 0 32 32"><path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="4" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path></svg></span>
                                                <span class="custom-control-description">Tomato ($1.29)</span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"><svg class="icon" x="0px" y="0px" viewBox="0 0 32 32"><path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="4" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path></svg></span>
                                                <span class="custom-control-description">Ham ($1.29)</span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"><svg class="icon" x="0px" y="0px" viewBox="0 0 32 32"><path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="4" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path></svg></span>
                                                <span class="custom-control-description">Chicken ($1.29)</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"><svg class="icon" x="0px" y="0px" viewBox="0 0 32 32"><path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="4" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path></svg></span>
                                                <span class="custom-control-description">Cheese($1.29)</span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-indicator"><svg class="icon" x="0px" y="0px" viewBox="0 0 32 32"><path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="4" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path></svg></span>
                                                <span class="custom-control-description">Bacon ($1.29)</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Panel Details / Other -->
                    <div class="panel-details">
                        <h5 class="panel-details-title">
                        <label class="custom-control custom-radio">
                            <input name="radio_title_other" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"><svg class="icon" x="0px" y="0px" viewBox="0 0 32 32"><path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="4" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"></path></svg></span>
                        </label>
                        <a href="#panelDetailsOther" data-toggle="collapse" class="" aria-expanded="true">Other</a>
                    </h5>
                        <div id="panelDetailsOther" class="collapse show" aria-expanded="true" style="">
                            <textarea cols="30" rows="4" class="form-control" placeholder="Put this any other informations..."></textarea>
                        </div>
                    </div>
                </div>
                <button type="button" class="modal-btn btn btn-secondary btn-block btn-lg" data-dismiss="modal"><span>Add to Cart</span></button>
            </div>
        </div>
    </div>

    <!-- JS Plugins -->
{{--     <script src="/soup2_files/jquery.min.js"></script>
    <script src="/soup2_files/tether.min.js"></script>
    <script src="/soup2_files/bootstrap.min.js"></script>
    <script src="/soup2_files/slick.min.js"></script>
    <script src="/soup2_files/jquery.appear.js"></script>
    <script src="/soup2_files/jquery.scrollTo.min.js"></script>
    <script src="/soup2_files/jquery.localScroll.min.js"></script>
    <script src="/soup2_files/jquery.validate.min.js"></script>
    <script src="/soup2_files/jquery.mb.YTPlayer.min.js"></script>
    <script src="/soup2_files/twitterFetcher_min.js"></script>
    <script src="/soup2_files/skrollr.min.js"></script>
 --}}    {{-- <script src="/soup2_files/animsition.min.js"></script> --}}

    <!-- JS Core -->
    <script src="/soup2_files/core.js"></script>

    <!-- JS Stylewsitcher -->
    {{-- <script src="/soup2_files/styleswitcher.js"></script> --}}
{{-- 
    <div id="style-switcher-wrapper"><span id="style-switcher-toggle"><img src="/soup2_files/settings.svg" alt=""></span>
        <div id="style-switcher">
            <div class="style-switcher-title">Color</div>
            <ul id="color-switcher" class="style-switcher-list list-colors">
                <li>
                    <a href="#" data-color="beige" class="active">
                        <span class="color" style="background-color: #ddae71;"></span>
                    </a>
                </li>
                <li>
                    <a href="#" data-color="blue">
                        <span class="color" style="background-color: #497ece;"></span>
                    </a>
                </li>
                <li>
                    <a href="#" data-color="green">
                        <span class="color" style="background-color: #56a75f;"></span>
                    </a>
                </li>
                <li>
                    <a href="#" data-color="mint">
                        <span class="color" style="background-color: #47a782;"></span>
                    </a>
                </li>
                <li>
                    <a href="#" data-color="orange">
                        <span class="color" style="background-color: #d66b52;"></span>
                    </a>
                </li>
                <li>
                    <a href="#" data-color="red">
                        <span class="color" style="background-color: #d15454;"></span>
                    </a>
                </li>
                <li>
                    <a href="#" data-color="teal">
                        <span class="color" style="background-color: #58adb7;"></span>
                    </a>
                </li>
            </ul>
            <div class="style-switcher-bottom">
                <a href="http://themeforest.net/user/suelo/portfolio?ref=suelo" target="_blank" class="btn btn-sm btn-outline-primary"><span>Check other products</span></a>
            </div>
            <a class="style-switcher-close"><img src="/soup2_files/close.svg" alt=""></a>
        </div>
    </div>        
 --}}

    </body>
</html>
