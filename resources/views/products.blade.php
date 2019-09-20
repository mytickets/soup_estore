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


{{-- 

                                    <div class="row gutters-sm">
                                    
                                    @foreach ($products as $a)
                                            <div class="col-lg-4 col-6">
                                       
                                                
                                                <div class="menu-item menu-grid-item">
                                                    <img class="mb-4" src="/soup2_files/product-burger.jpg" alt="">
                                                    <h6 class="mb-0">{{ $a->name }}</h6>
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
                                            
                                    @endforeach
                                    </div> --}}

	@foreach ($cats as $cat)
                            <!-- Menu Category / Drinks -->

                            {{-- @if ( $book->parent_id  == 0) --}}

                            <div id="book_{{ $cat->id }}" class="menu-category">
                                <div class="menu-category-title collapse-toggle" role="tab" data-target="#menuDrinksContent{{ $cat->id }}" data-toggle="collapse" aria-expanded="false">
                                    <div class="bg-image" style="background-image: url('{{ $cat->image }}');"><img src="{{ $cat->image }}" alt="" style="display: none;"></div>
                                    <h2 class="title">id:{{ $cat->id }} {{ $cat->name }}</h2>
                                </div>
                                <div id="menuDrinksContent{{ $cat->id }}" class="menu-category-content padded collapse">
                                    <div class="row gutters-sm">

                                    @if ( true )
                                    @foreach (\App\Product::where('cat_id',$cat->id)->get() as $a)

                                            <div class="col-lg-4 col-6">
                                       
                                                <div class="menu-item menu-grid-item">
                                                    <img class="mb-4" src="{{ $a->image }}" alt="">
                                                    <h6 class="mb-0">{{ $a->name }}</h6>
                                                    {{-- <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span> --}}
                                                    <div class="row align-items-center mt-4">

                                                        <div class="col-sm-6"><span class="text-md mr-4">
                                                            <span class="text-md mr-4">{{ $a->price_amount }} руб.</span>
                                                            
                                                        </div>
                                                        <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                            <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Добавить</span></button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                    @endforeach
                            @else
                            @endif

                                    </div>
                                </div>

                            </div>

	@endforeach


                        </div>
                    </div>
                </div>
            </div>


@endsection

