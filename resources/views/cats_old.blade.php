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

	@foreach ($cats as $cat)
                            <!-- Menu Category / Drinks -->

                            {{-- @if ( $cat->parent_id  == 0) --}}
                            @if ( $cat->menu == 1)

                            <div id="book_{{ $cat->id }}" class="menu-category">
                                <div class="menu-category-title collapse-toggle" role="tab" data-target="#menuDrinksContent{{ $cat->id }}" data-toggle="collapse" aria-expanded="false">
                                    <div class="bg-image" style="background-image: url('{{ $cat->image }}');"><img src="{{ $cat->image }}" alt="" style="display: none;"></div>
                                    <h2 class="title">{{ $cat->name }}</h2>
                                    {{-- id:{{ $cat->id }}  --}}
                                </div>
                                <div id="menuDrinksContent{{ $cat->id }}" class="menu-category-content padded collapse">
                                    <div class="row gutters-sm">
                                        
                                        {{-- @foreach ($cat->ancestors as $a) --}}
                                        @foreach (\App\Cat::where('parent_id',$cat->id)->get() as $a)
                                           
                                            {{-- @if ( $cat->ident == $a->parent_id ) --}}

                                                <div class="col-lg-4 col-6">
                                                    <a href="/cat/{{ $a->id }}" class="filla">
                                                        
                                                    <div class="menu-item menu-grid-item">
                                                        <img class="mb-4" src="{{ $a->image }}" alt="">
                                                        <h6 class="mb-0 center">{{ $a->name }}</h6>
                                                        {{-- <span class="text-muted text-sm">Beef, cheese, potato, onion, fries</span> --}}
{{--                                                         <div class="row align-items-center mt-4">
                                                            <div class="col-sm-6"><span class="text-md mr-4"><span class="text-muted">from</span> $9.00</span>
                                                            </div>
                                                            <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                                <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Add to cart</span></button>
                                                            </div>
                                                        </div> --}}
                                                    </div>
                                                    </a>
                                                </div>

                                            {{-- @endif --}}

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

