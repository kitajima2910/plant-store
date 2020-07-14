@extends('layouts.guest.master')
@section('title', 'Trang Chủ')
@section('content')

<div class="row">
    <div class="col-sm-3">
        <div class="left-sidebar">
            <h2>Category</h2>
            <div class="panel-group category-products" id="accordian">
                <!--category-productsr-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                Sportswear
                            </a>
                        </h4>
                    </div>
                    <div id="sportswear" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul>
                                <li><a href="#">Nike </a></li>
                                <li><a href="#">Under Armour </a></li>
                                <li><a href="#">Adidas </a></li>
                                <li><a href="#">Puma</a></li>
                                <li><a href="#">ASICS </a></li>
                            </ul>
                        </div>
                    </div>
                </div>               
            </div>
            <!--/category-products-->

        </div>
    </div>

    <div class="col-sm-9 padding-right">
        <div class="features_items">
            <!--features_items-->
            <h2 class="title text-center">Features Items</h2>
            @foreach ($products->slice(0,6) as $product)
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                        <img src="{{$product->feature_image}}"
                                alt="" />
                        <h2>{{number_format($product->price)}} VND</h2>
                        <p>{{$product->name}}</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                                cart</a>
                        </div>
                        <div class="product-overlay">
                            <div class="overlay-content">
                                <h2>{{number_format($product->price)}} VND</h2>
                                <p>{{$product->name}}</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                    to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
       
        
        <!--features_items-->

        <div class="category-tab">
            <!--category-tab-->
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#category1" data-toggle="tab">Category 1</a></li>
                    <li><a href="#category2" data-toggle="tab">Category 2</a></li>
                   
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active in" id="category1">
                    @foreach ($products->slice(0,4) as $product)
                             <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                <img src="{{$product->feature_image}}"
                                        alt="" />
                                    <h2>$56</h2>
                                    <p>Easy Polo Black Edition</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i
                                            class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach       
                </div>

                <div class="tab-pane fade" id="category2">
                    @foreach ($products->slice(0,4) as $product)
                    <div class="col-sm-3">
               <div class="product-image-wrapper">
                   <div class="single-products">
                       <div class="productinfo text-center">
                       <img src="{{$product->feature_image}}"
                               alt="" />
                           <h2>$56</h2>
                           <p>Easy Polo Black Edition</p>
                           <a href="#" class="btn btn-default add-to-cart"><i
                                   class="fa fa-shopping-cart"></i>Add to cart</a>
                       </div>
                   </div>
               </div>
           </div>
           @endforeach     
                </div>

            
            </div>
        </div>
        <!--/category-tab-->

        <div class="recommended_items">
            <!--recommended_items-->
            <h2 class="title text-center">recommended items</h2>

            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">  
                          @foreach($products->slice(0,4) as $product)                   
                        <div class="col-sm-3">                       
                            <div class="product-image-wrapper">
                                <div class="single-products">           
                                  <div class="productinfo text-center">                                                            
                                        <img src="{{ $product->feature_image }}"   alt="" />
                                        <h2>{{number_format($product->price)}} VND</h2>
                                        <p>{{$product->name}}</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    
                                </div>
                            </div>
                    </div>
                    @endforeach
                    </div>
                    <div class="item">
                        @foreach($products->slice(0,4) as $product)                   
                        <div class="col-sm-3">                       
                            <div class="product-image-wrapper">
                                <div class="single-products">           
                                  <div class="productinfo text-center">                                                            
                                        <img src="{{ $product->feature_image }}"   alt="" />
                                        <h2>{{number_format($product->price)}} VND</h2>
                                        <p>{{$product->name}} </p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    
                                </div>
                            </div>
                    </div>
                    @endforeach
                    </div>
                </div>
                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
        <!--/recommended_items-->

    </div>
</div>

@endsection
