@extends('layouts.bar')


@section('content')


            <!-- Page Title -->
            <div class="page-title bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 push-lg-4">
                            <a href="/cats">
                                <h1 class="mb-0"><-Меню</h1>
                            </a>
                                <h4 class="text-muted mb-0">{{ $cat->name }}</h4>
                            
                            <pre>
                                {{-- {{ var_dump($cat) }} --}}
                            </pre>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Page Content -->
            <div class="page-content">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-md-10 push-md-1" role="tablist">

<!-- 
                            <div class="row gutters-sm">
                            
                            @foreach ($products as $a)
                            {{-- cat --}}
                                    <div class="col-lg-4 col-6">
                               
                                        <div class="menu-item menu-grid-item">
                                            
                                            {{-- <img class="mb-4" src="{{ $a->image }}" alt=""> --}}
                                            <img class="mb-4" src="{{ $a->image }}" alt="">
                                            <h6 class="mb-0">{{ $a->name }}</h6>
                                            <span class="text-muted text-sm">{{ $a->name }}</span>
                                            <div class="row align-items-center mt-4">
                                                <div class="col-sm-6"><span class="text-md mr-4">{{-- <span class="text-muted"></span> --}} {{ $a->price_amount  }} руб.</span>
                                                </div>
                                                <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                    <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Добавить</span></button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                            @endforeach
                            </div>
-->

<script type="text/javascript" src="/Easy-Any-Content-Pagination-Plugin-jQuery-Paginate-js/src/jquery.paginate.js"></script>
<link rel="stylesheet" type="text/css" href="/Easy-Any-Content-Pagination-Plugin-jQuery-Paginate-js/src/jquery.paginate.css">

                            <div class="row no-gutters">
                                <div class="col-md-3" style="overflow-x: auto;">
                                    <!-- Menu Navigation -->
                                    {{-- <nav id="menu-navigation2" style=""> --}}
                                    <nav id="menu-navigation" class="stick-to-content" data-local-scroll="" style="">

                                        <ul class="nav nav-menu bg-dark dark" id="example">
                                            {{-- menu_left --}}
                                            {{-- <li><a href="javascript:history.back()"><- Назад</a></li> --}}
                                            <li><a href="/cats"><- Назад</a></li>
{{-- @if ($a->menu_left) --}}
{{-- @else --}}
{{-- @endif --}}
                                            @foreach ($childrens as $key => $a)

                                                <li><a href="#left{{ $key }}">{{ $a->name }}</a></li>
                                            @endforeach

                                        </ul>
                                    </nav>
                                </div>

                                <div class="col-md-9">
                                    <!-- Menu Category / Burgers -->
                                     @foreach ($childrens as $key => $a)
                                    {{-- <li><a href="#left{{ $key }}">{{ $a->name }}</a></li> --}}
{{-- @if ($a->menu_left) --}}

                                    <div id="left{{ $key }}" class="menu-category">
                                        <div class="menu-category-title">
                                            <div class="bg-image" style="background-image: url(&quot;/uploads/menu-title-burgers.jpg&quot;);"><img src="/uploads/menu-title-burgers.jpg" alt="" style="display: none;"></div>
                                            <h2 class="title">
                                                {{ $a->name }}
                                                @if ($user)
                                                    id : {{ $a->id }}
                                                @endif
                                            </h2>
                                        </div>
                                        <div class="menu-category-content">
                                            {{-- menu_list --}}
                                            @foreach (\App\Product::where('cat_id',$a->id)->get() as $aa)
                                            {{-- @foreach ($childrens as $key => $aa) --}}
                                            <!-- Menu Item -->
                                            <div class="menu-item menu-list-item">
                                                <div class="row align-items-center">
                                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                                        <h6 class="mb-0">{{ $aa->name }}</h6>
                                                        <span class="text-muted text-sm">{{ $aa->desc }}</span>
                                                    </div>
                                                    <div class="col-sm-6 text-sm-right">
                                                        <span class="text-md mr-4">{{ $aa->price_amount }} руб.</span>
                                                        {{-- <button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Добавить</span></button> --}}
                                                        <a class="btn btn-outline-secondary btn-sm to_cart" data-ident={{ $aa->id }}><span>Добавить</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Menu Item -->
                                            @endforeach

                                        </div>

                                    </div>
{{-- @else --}}
{{-- @endif --}}
                                    @endforeach

<script type="text/javascript">
    

    $(".to_cart").click(function(e){
        console.log( $(this).data('ident') )
        $.ajax({
          url: "/product/"+$(this).data('ident')+"/to_cart/1",
          context: document.body,
          success: function(qwe){
            console.log( qwe )
          }
        });    

    })
</script>

                                    <a href="#" id="back-to-top" class="visible" style="position: fixed;"><i class="ti ti-angle-up"></i></a>
                                </div>
                            </div>


                            {{-- @if ( !empty($childrens) ) --}}
                            @if ( false )
                            
                            <div id="book_{{ $cat->id }}" class="menu-category">
                                <div class="menu-category-title collapse-toggle" role="tab" data-target="#menuDrinksContent{{ $cat->id }}" data-toggle="collapse" aria-expanded="false">
                                    <div class="bg-image" style="background-image: url('/{{ $cat->image }}');"><img src="/{{ $cat->image }}" alt="" style="display: none;"></div>
                                    <h2 class="title">Категория: {{ $cat->name }}</h2>
                                </div>
                                <div id="menuDrinksContent{{ $cat->id }}" class="menu-category-content padded collapse">
                                    <div class="row gutters-sm">
                                        
                                        @foreach ($childrens as $a)
                                           
                                                <div class="col-lg-4 col-6">
                                                    <a href="/cat/{{ $a->id }}" class="filla">
                                                        <div class="menu-item menu-grid-item">
                                                            <img class="mb-4" src="/{{ $a->image }}" alt="">
                                                            <h6 class="mb-0">{{ $a->name }}</h6>
                                                        </div>
                                                    </a>
                                                </div>

                                        @endforeach

                                    </div>
                                </div>

                            </div>

                            @else
                            @endif


                        </div>
                    </div>
                </div>
            </div>


@endsection

