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

                            <a href="/cat/{{ $cat->id }}">
                                
                            <div id="book_{{ $cat->id }}" class="menu-category">
                                <div class="menu-category-title" >
                                    <div class="bg-image" style="background-image: url('{{ $cat->image }}');"><img src="{{ $cat->image }}" alt="" style="display: none;"></div>
                                    <h2 class="title">{{ $cat->name }}</h2>
                                    {{-- id:{{ $cat->id }}  --}}
                                </div>

                            </div>
                            </a>

                            @else
                            @endif
	@endforeach


                        </div>
                    </div>
                </div>
            </div>


@endsection

