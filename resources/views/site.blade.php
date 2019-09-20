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
                        <div class="col-md-10 push-md-1" role="tablist">
                            <!-- Menu Category / Burgers -->
                            <div id="Burgers" class="menu-category">
                                <div class="menu-category-title collapse-toggle collapsed" role="tab" data-target="#menuBurgersContent" data-toggle="collapse" aria-expanded="false">
                                    <div class="bg-image" style="background-image: url('/soup2_files/menu-title-burgers.jpg');"><img src="/soup2_files/menu-title-burgers.jpg" alt="" style="display: none;"></div>
                                    <h2 class="title">Бургеры</h2>
                                </div>
                                <div id="menuBurgersContent" class="menu-category-content padded collapse" aria-expanded="false" style="">
                                    <div class="row gutters-sm">
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-burger.jpg" alt="">
                                                <h6 class="mb-0">Beef Burger</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-pizza.jpg" alt="">
                                                <h6 class="mb-0">Broccoli</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-chicken-burger.jpg" alt="">
                                                <h6 class="mb-0">Chicken Burger</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-pasta.jpg" alt="">
                                                <h6 class="mb-0">Creste di Galli</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-chicken-wings.jpg" alt="">
                                                <h6 class="mb-0">Chicken wings</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-sushi.jpg" alt="">
                                                <h6 class="mb-0">Nigiri-sushi</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Menu Category / Pasta -->
                            <div id="Pasta" class="menu-category">
                                <div class="menu-category-title collapse-toggle" role="tab" data-target="#menuPastaContent" data-toggle="collapse" aria-expanded="false">
                                    <div class="bg-image" style="background-image: url('/soup2_files/menu-title-pasta.jpg');"><img src="/soup2_files/menu-title-pasta.jpg" alt="" style="display: none;"></div>
                                    <h2 class="title">Pasta</h2>
                                </div>
                                <div id="menuPastaContent" class="menu-category-content padded collapse">
                                    <div class="row gutters-sm">
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-burger.jpg" alt="">
                                                <h6 class="mb-0">Beef Burger</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-pizza.jpg" alt="">
                                                <h6 class="mb-0">Broccoli</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-chicken-burger.jpg" alt="">
                                                <h6 class="mb-0">Chicken Burger</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-pasta.jpg" alt="">
                                                <h6 class="mb-0">Creste di Galli</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-chicken-wings.jpg" alt="">
                                                <h6 class="mb-0">Chicken wings</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-sushi.jpg" alt="">
                                                <h6 class="mb-0">Nigiri-sushi</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Menu Category / Pizza -->
                            <div id="Pizza" class="menu-category">
                                <div class="menu-category-title collapse-toggle" role="tab" data-target="#menuPizzaContent" data-toggle="collapse" aria-expanded="false">
                                    <div class="bg-image" style="background-image: url('/soup2_files/menu-title-pizza.jpg');"><img src="/soup2_files/menu-title-pizza.jpg" alt="" style="display: none;"></div>
                                    <h2 class="title">Pizza</h2>
                                </div>
                                <div id="menuPizzaContent" class="menu-category-content padded collapse">
                                    <div class="row gutters-sm">
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-burger.jpg" alt="">
                                                <h6 class="mb-0">Beef Burger</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-pizza.jpg" alt="">
                                                <h6 class="mb-0">Broccoli</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-chicken-burger.jpg" alt="">
                                                <h6 class="mb-0">Chicken Burger</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-pasta.jpg" alt="">
                                                <h6 class="mb-0">Creste di Galli</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-chicken-wings.jpg" alt="">
                                                <h6 class="mb-0">Chicken wings</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-sushi.jpg" alt="">
                                                <h6 class="mb-0">Nigiri-sushi</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Menu Category / Sushi -->
                            <div id="Sushi" class="menu-category">
                                <div class="menu-category-title collapse-toggle" role="tab" data-target="#menuSushiContent" data-toggle="collapse" aria-expanded="false">
                                    <div class="bg-image" style="background-image: url('/soup2_files/menu-title-sushi.jpg');"><img src="/soup2_files/menu-title-sushi.jpg" alt="" style="display: none;"></div>
                                    <h2 class="title">Sushi</h2>
                                </div>
                                <div id="menuSushiContent" class="menu-category-content padded collapse">
                                    <div class="row gutters-sm">
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-burger.jpg" alt="">
                                                <h6 class="mb-0">Beef Burger</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-pizza.jpg" alt="">
                                                <h6 class="mb-0">Broccoli</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-chicken-burger.jpg" alt="">
                                                <h6 class="mb-0">Chicken Burger</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-pasta.jpg" alt="">
                                                <h6 class="mb-0">Creste di Galli</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-chicken-wings.jpg" alt="">
                                                <h6 class="mb-0">Chicken wings</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-sushi.jpg" alt="">
                                                <h6 class="mb-0">Nigiri-sushi</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Menu Category / Desserts -->
                            <div id="Desserts" class="menu-category">
                                <div class="menu-category-title collapse-toggle" role="tab" data-target="#menuDessertsContent" data-toggle="collapse" aria-expanded="false">
                                    <div class="bg-image" style="background-image: url('/soup2_files/menu-title-desserts.jpg');"><img src="/soup2_files/menu-title-desserts.jpg" alt="" style="display: none;"></div>
                                    <h2 class="title">Desserts</h2>
                                </div>
                                <div id="menuDessertsContent" class="menu-category-content padded collapse">
                                    <div class="row gutters-sm">
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-burger.jpg" alt="">
                                                <h6 class="mb-0">Beef Burger</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-pizza.jpg" alt="">
                                                <h6 class="mb-0">Broccoli</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-chicken-burger.jpg" alt="">
                                                <h6 class="mb-0">Chicken Burger</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-pasta.jpg" alt="">
                                                <h6 class="mb-0">Creste di Galli</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-chicken-wings.jpg" alt="">
                                                <h6 class="mb-0">Chicken wings</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-sushi.jpg" alt="">
                                                <h6 class="mb-0">Nigiri-sushi</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Menu Category / Drinks -->
                            <div id="Drinks" class="menu-category">
                                <div class="menu-category-title collapse-toggle" role="tab" data-target="#menuDrinksContent" data-toggle="collapse" aria-expanded="false">
                                    <div class="bg-image" style="background-image: url('/soup2_files/menu-title-drinks.jpg');"><img src="/soup2_files/menu-title-drinks.jpg" alt="" style="display: none;"></div>
                                    <h2 class="title">Drinks</h2>
                                </div>
                                <div id="menuDrinksContent" class="menu-category-content padded collapse">
                                    <div class="row gutters-sm">
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-burger.jpg" alt="">
                                                <h6 class="mb-0">Beef Burger</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-pizza.jpg" alt="">
                                                <h6 class="mb-0">Broccoli</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-chicken-burger.jpg" alt="">
                                                <h6 class="mb-0">Chicken Burger</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-pasta.jpg" alt="">
                                                <h6 class="mb-0">Creste di Galli</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-chicken-wings.jpg" alt="">
                                                <h6 class="mb-0">Chicken wings</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-6">
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-grid-item">
                                                <img class="mb-4" src="/soup2_files/product-sushi.jpg" alt="">
                                                <h6 class="mb-0">Nigiri-sushi</h6>
                                                <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span>
                                                <div class="row align-items-center mt-4">
                                                    <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                        <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



@endsection

