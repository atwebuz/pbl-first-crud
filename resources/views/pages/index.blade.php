@extends('layouts.layout')

@section('section__content')

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Shop</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">eCommerce</a>
                                    </li>
                                    <li class="breadcrumb-item active">Shop
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-detached content-right">
                <div class="content-body">
                    <!-- Ecommerce Content Section Starts -->
       

                    <section id="ecommerce-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="ecommerce-header-items">
                                    <div class="result-toggler">
                                        <button class="navbar-toggler shop-sidebar-toggler" type="button" data-toggle="collapse">
                                            <span class="navbar-toggler-icon d-block d-lg-none"><i class="feather icon-menu"></i></span>
                                        </button>
                                        <div class="search-results">
                                            16285 results found
                                        </div>
                                    </div>
                                    <div class="view-options">
                                        <select class="price-options form-control" id="ecommerce-price-options">
                                            <option selected>Featured</option>
                                            <option value="1">Lowest</option>
                                            <option value="2">Highest</option>
                                        </select>
                                        <div class="view-btn-option">
                                            <button class="btn btn-white view-btn grid-view-btn active">
                                                <i class="feather icon-grid"></i>
                                            </button>
                                            <button class="btn btn-white list-view-btn view-btn">
                                                <i class="feather icon-list"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Ecommerce Content Section Starts -->
                    <!-- background Overlay when sidebar is shown  starts-->
                    <div class="shop-content-overlay"></div>
                    <!-- background Overlay when sidebar is shown  ends-->

                    <!-- Ecommerce Search Bar Starts -->
                    <section id="ecommerce-searchbar">
                        <div class="row mt-1">
                            <div class="col-sm-12">
                                <fieldset class="form-group position-relative">
                                    <input type="text" class="form-control search-product" id="iconLeft5" placeholder="Search here">
                                    <div class="form-control-position">
                                        <i class="feather icon-search"></i>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </section>
                    <!-- Ecommerce Search Bar Ends -->
               
                    <!-- Ecommerce Products Starts -->
                    <section id="ecommerce-products" class="grid-view">
                        @if(count($posts) > 1)
                        @foreach($posts as $post)
                             <div class="card ecommerce-card">
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="{{route('posts.show', $post->id)}}">
                                        <img class="img-fluid" src="{{$post->image ? asset('image/' . $post->image) : asset('assets/images/no-image.png')}}" alt="image not-found" />
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>{{$post->rating}}</span> <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="item-price">
                                                ${{$post->price}}
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="item-name">
                                        <a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a>
                                        <p class="item-company">By <span class="company-name">Google</span></p>
                                    </div>
                                    <div>
                                        <p class="item-description">
                                          {{$post->paragraph}}
                                        </p>
                                    </div>
                                </div>
                                <div class="item-options text-center">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                                <span>4</span> <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                        <div class="item-cost">
                                            <h6 class="item-price">
                                                $39.99
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="wishlist">
                                        <i class="fa fa-heart-o"></i> <span>Wishlist</span>
                                    </div>
                                    <div class="cart">
                                        <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Add to cart</span> <a href="app-ecommerce-checkout.html" class="view-in-cart d-none">View In Cart</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        @endforeach

                        @else
                         <p>No listings found</p>
                        @endif
                            
                       
                      
                    </section>
                    <!-- Ecommerce Products Ends -->

                    <!-- Ecommerce Pagination Starts -->
                    <section id="ecommerce-pagination">
                        <div class="row">
                            <div class="col-sm-12">

                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center mt-2">
                                        {{$posts->links()}}
                                       
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </section>
                    <!-- Ecommerce Pagination Ends -->

                </div>
            </div>
            @include('../inc/__sidebar')
            
        </div>
    </div>
    @include('../inc/__messages')
    
    <!-- END: Content-->
@endsection