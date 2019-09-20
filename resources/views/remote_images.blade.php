@extends('layouts.bar')


@section('content')

            <!-- Page Title -->
            <div class="page-title bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 push-lg-4">
                            <a href="/admin/product">
                                <h1 class="mb-0"><-Меню</h1>
                            </a>
                                <h4 class="text-muted mb-0">{{ $p->name }}</h4>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Page Content -->
            <div class="page-content">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-md-10 push-md-1 center">
							<a id="size14" class="btn" style="color:red;">Размеры < 1.5</a>
							<a id="size15" class="btn" style="color:red;">Размеры = 1.5</a>
							<a id="size16" class="btn" style="color:red;">Размеры > 1.5</a>

							<br>
							<!-- <button id="select" class="btn btn-sm">Save</button> -->
                        </div>
                        <div class="col-md-10 push-md-1" role="tablist">


                            <div class="row gutters-sm">

                                    <div class="col-lg-4 col-6">
                               
                                        <div class="menu-item menu-grid-item">
                                            
                                            <img class="mb-4 main_image" id="main_image" src="{{ $p->image }}" alt="">
                                            <h6 class="mb-0">{{ $p->name }}</h6>
                                            <span class="text-muted text-sm custom_v" id="main_image_v">{{ $p->name }}</span>
                                            <div class="row align-items-center mt-4">
                                                <div class="col-sm-6">
                                                	<span class="text-md mr-4">
                                                	{{ $p->price_amount }} руб.
                                                </span>
                                                </div>
                                                <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                    <a class="btn btn-outline-secondary btn-sm" ><span>В заказ</span></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                            
                            {{-- $remote_images --}}
                            @if ($remote_images)
                            @foreach (json_decode($remote_images,TRUE) as $indexKey => $img_src)
                                    <div class="col-lg-4 col-6" data-ident={{ $indexKey }}>
                               
                                        <div class="menu-item menu-grid-item links">
                                            
                                            <span class="close">X</span>
                                            <img class="mb-4 custom" src="{{ $img_src }}" alt="">
                                            <h6 class="mb-0">{{ $p->name }}</h6>
                                            <span class="text-muted text-sm custom_v"></span>
                                            <div class="row align-items-center mt-4">
                                                <div class="col-sm-6">
                                                	<span class="text-md mr-4">
                                                	{{ $p->price_amount }} руб.
                                                </span>
                                                </div>
                                                <div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
                                                    <a class="btn btn-outline-secondary btn-sm" href="/product/{{ $p->id }}/set_main_image/{{ $indexKey }}"><span>Выбрать</span></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                            @endforeach
                            @endif


							<script type="text/javascript">


                                $(".close").click(function(e){
                                    // console.log(e)
                                    // $(this).parent().hide()
                                    $.ajax({
                                      url: location+"/"+$(this).parent().parent().data('ident')+"/remove_image",
                                      context: document.body,
                                      success: function(){
                                        console.log( $(this).parent().parent().data('ident') )
                                        // $(this).addClass("done");
                                      }
                                    });    

                                    $(this).parent().parent().remove()
    
                                })


								$("#size15").click(function(){

									 $(".custom").each(function(event) {  
							            var realWidth = this.naturalWidth;
							            var realHeight = this.naturalHeight;
							            var ddd = realWidth/realHeight
							            if (ddd.toFixed(2)==1.5) {
							            	$(this).parent().find('.custom_v').html("<b style='color:red;'>"+realWidth + "x" + realHeight + "</b> = <b style='color:orange;'>"+ddd.toFixed(2)+"</b>")
							            	$(this).parent().parent().show("slow");
							            } else {
											$(this).parent().parent().hide("slow");
											// .hide("slow");
							            }
									  });

							            // var realWidth = $('.main_image').naturalWidth;
							            // var realHeight = $('.main_image').naturalHeight;
							            // var ddd = realWidth/realHeight
						            	// $('#main_image_v').html("<b style='color:red;'>"+realWidth + "x" + realHeight + "</b> = <b style='color:orange;'>"+ddd.toFixed(2)+"</b>")


								})

								$("#size14").click(function(){

									 $(".custom").each(function(event) {  
							            var realWidth = this.naturalWidth;
							            var realHeight = this.naturalHeight;
							            var ddd = realWidth/realHeight
							            if (ddd.toFixed(1)<1.5) {
							            	$(this).parent().find('.custom_v').html("<b style='color:red;'>"+realWidth + "x" + realHeight + "</b> = <b style='color:orange;'>"+ddd.toFixed(2)+"</b>")
							            	$(this).parent().parent().show("slow");
							            } else {
											$(this).parent().parent().hide("slow");
							            }
									  });
								})

								$("#size16").click(function(){

									 $(".custom").each(function(event) {  
							            var realWidth = this.naturalWidth;
							            var realHeight = this.naturalHeight;
							            var ddd = realWidth/realHeight
							            if (ddd.toFixed(1)>1.5) {
							            	$(this).parent().find('.custom_v').html("<b style='color:red;'>"+realWidth + "x" + realHeight + "</b> = <b style='color:orange;'>"+ddd.toFixed(2)+"</b>")
							            	$(this).parent().parent().show("slow");
							            } else {
											$(this).parent().parent().hide("slow");
							            }
									  });

								})

							</script>

                            </div>



                        </div>
                    </div>
                </div>
            </div>


@endsection


