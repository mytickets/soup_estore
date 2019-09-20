@extends('layouts.bar')


@section('content')

            <!-- Page Title -->
            <div class="page-title bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 push-lg-4">
                            <h1 class="mb-0">Наше меню</h1>
                            <h4 class="text-muted mb-0">Приятного выбора</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Page Content -->
            <div class="page-content">
                <div class="container">


                    <div class="row no-gutters">
                        <div class="col-md-3">
                            <!-- Menu Navigation -->
                            <nav id="menu-navigation" class="stick-to-content" data-local-scroll="" style="">
                                <ul class="nav nav-menu bg-dark dark">
                                    {{-- menu_left --}}
                                    <li><a href="#Burgers">Burgers</a></li>
                                    <li><a href="#Burgers2">Pasta</a></li>
                                    <li><a href="#Pizza">Pizza</a></li>
                                    <li><a href="#Sushi">Sushi</a></li>
                                    <li><a href="#Desserts">Desserts</a></li>
                                    <li><a href="#Drinks">Drinks</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-md-9">
                            <!-- Menu Category / Burgers -->
                            <div id="Burgers" class="menu-category">
                                <div class="menu-category-title">
                                    <div class="bg-image" style="background-image: url(&quot;/uploads/menu-title-burgers.jpg&quot;);"><img src="/uploads/menu-title-burgers.jpg" alt="" style="display: none;"></div>
                                    <h2 class="title">Burgers</h2>
                                </div>
                                <div class="menu-category-content">
                                    {{-- menu_list --}}
                                    <!-- Menu Item -->
                                    <div class="menu-item menu-list-item">
                                        <div class="row align-items-center">
                                            <div class="col-sm-6 mb-2 mb-sm-0">
                                                <h6 class="mb-0">Beef Burger</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                            </div>
                                            <div class="col-sm-6 text-sm-right">
                                                <span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Menu Item -->
                                    <div class="menu-item menu-list-item">
                                        <div class="row align-items-center">
                                            <div class="col-sm-6 mb-2 mb-sm-0">
                                                <h6 class="mb-0">Broccoli</h6>
                                                <span class="text-muted text-sm">Chicken, cheese, potato, onion, fries</span>
                                            </div>
                                            <div class="col-sm-6 text-sm-right">
                                                <span class="text-md mr-4"><span class="text-muted">from</span> $11.00</span>
                                                <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Menu Item -->
                                    <div class="menu-item menu-list-item">
                                        <div class="row align-items-center">
                                            <div class="col-sm-6 mb-2 mb-sm-0">
                                                <h6 class="mb-0">Chicken Burger</h6>
                                                <span class="text-muted text-sm">Chicken, cheese, potato, onion, fries</span>
                                            </div>
                                            <div class="col-sm-6 text-sm-right">
                                                <span class="text-md mr-4"><span class="text-muted">from</span> $11.00</span>
                                                <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Menu Item -->
                                    <div class="menu-item menu-list-item">
                                        <div class="row align-items-center">
                                            <div class="col-sm-6 mb-2 mb-sm-0">
                                                <h6 class="mb-0">Creste di Galli</h6>
                                                <span class="text-muted text-sm">Pasta, cheese, potato, onion, fries</span>
                                            </div>
                                            <div class="col-sm-6 text-sm-right">
                                                <span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Menu Category / Burgers -->
                            <div id="Burgers2" class="menu-category">
                                <div class="menu-category-title">
                                    <div class="bg-image" style="background-image: url(&quot;/uploads/menu-title-burgers.jpg&quot;);"><img src="/uploads/menu-title-burgers.jpg" alt="" style="display: none;"></div>
                                    <h2 class="title">Burgers</h2>
                                </div>
                                <div class="menu-category-content">
                                    {{-- menu_list --}}
                                    <!-- Menu Item -->
                                    <div class="menu-item menu-list-item">
                                        <div class="row align-items-center">
                                            <div class="col-sm-6 mb-2 mb-sm-0">
                                                <h6 class="mb-0">Beef Burger</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                            </div>
                                            <div class="col-sm-6 text-sm-right">
                                                <span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Menu Item -->
                                    <div class="menu-item menu-list-item">
                                        <div class="row align-items-center">
                                            <div class="col-sm-6 mb-2 mb-sm-0">
                                                <h6 class="mb-0">Broccoli</h6>
                                                <span class="text-muted text-sm">Chicken, cheese, potato, onion, fries</span>
                                            </div>
                                            <div class="col-sm-6 text-sm-right">
                                                <span class="text-md mr-4"><span class="text-muted">from</span> $11.00</span>
                                                <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Menu Item -->
                                    <div class="menu-item menu-list-item">
                                        <div class="row align-items-center">
                                            <div class="col-sm-6 mb-2 mb-sm-0">
                                                <h6 class="mb-0">Chicken Burger</h6>
                                                <span class="text-muted text-sm">Chicken, cheese, potato, onion, fries</span>
                                            </div>
                                            <div class="col-sm-6 text-sm-right">
                                                <span class="text-md mr-4"><span class="text-muted">from</span> $11.00</span>
                                                <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Menu Item -->
                                    <div class="menu-item menu-list-item">
                                        <div class="row align-items-center">
                                            <div class="col-sm-6 mb-2 mb-sm-0">
                                                <h6 class="mb-0">Creste di Galli</h6>
                                                <span class="text-muted text-sm">Pasta, cheese, potato, onion, fries</span>
                                            </div>
                                            <div class="col-sm-6 text-sm-right">
                                                <span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
























{{-- cats --}}

                </div>
            </div>


@endsection

