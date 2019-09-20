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

	@foreach ($ntres as $book)
                            {{--
                            <pre>
                                {{ $book->ancestors   }}
                            </pre>
                            --}}

                            {{-- {{ $book->descendants }} --}}


                            <!-- Menu Category / Drinks -->

                            @if ( $book->parent_id  == 0)
                                

                            <div id="book_{{ $book->id }}" class="menu-category">
                                <div class="menu-category-title collapse-toggle" role="tab" data-target="#menuDrinksContent{{ $book->id }}" data-toggle="collapse" aria-expanded="false">
                                    <div class="bg-image" style="background-image: url('/soup2_files/menu-title-drinks.jpg');"><img src="/soup2_files/menu-title-drinks.jpg" alt="" style="display: none;"></div>
                                    <h2 class="title">{{ $book->id }} {{ $book->name }}</h2>
                                </div>
                                <div id="menuDrinksContent{{ $book->id }}" class="menu-category-content padded collapse">
                                    <div class="row gutters-sm">
                                        
                                        @foreach ($book->ancestors as $a)
                                           
                                            @if ( $book->id  == $a->parent_id )

                                                <div class="col-lg-4 col-6">
                                                    
                                                    <div class="menu-item menu-grid-item">
                                                        <img class="mb-4" src="/soup2_files/product-burger.jpg" alt="">
                                                        <h6 class="mb-0">{{ $a->name }}</h6>
                                                        {{-- <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span> --}}
                                                        <div class="row align-items-center mt-4">
                                                            <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                            </div>
                                                            <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                                <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            @endif

                                        @endforeach

                                    </div>
                                </div>

                            </div>

                            @else
                            @endif
	@endforeach


                        </div>
                    </div>
                </div>
            </div>


@endsection

