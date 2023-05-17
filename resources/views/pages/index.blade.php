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
                            <h2 class="content-header-title float-left mb-0">{{__('Shop')}}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">{{__('Home')}}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">{{__('eCommerce')}}</a>
                                    </li>
                                    <li class="breadcrumb-item active">{{__('Shop')}}
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
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">{{__('Chat')}}</a><a class="dropdown-item" href="#">{{__('Email')}}</a><a class="dropdown-item" href="#">Calendar</a></div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- content-right --}}
            <div class="content-detached ">
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
                                            {{ $posts->total() }} {{__('results found')}}
                                        </div>
                                    </div>
                                    <div class="view-options d-flex">
                                        <form action="" method="GET">
                                            @csrf
                                         <select name="filter" class="price-options form-control" id="ecommerce-price-options">
                                            <option selected>{{__('Featured')}}</option>
                                            <option value="desc">{{__('Lowest')}}</option>
                                            <option value="asc">{{__('Highest')}}</option>
                                        </select>
                                        </form>
                                     
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
                              

                       
                            </div>
                        </div>
                    </section>


<script type="text/javascript">
    $('#search').on('keyup',function(){
        // alert('sa');
    $value=$(this).val();
    $.ajax({
    type : 'get',
    url : '{{URL::to('search')}}',
    data:{'search':$value},
    success:function(data){
    $('tbody').html(data);
    }
    });
    })
    </script>
    <script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>
                    <!-- Ecommerce Search Bar Ends -->
               
                    <!-- Ecommerce Products Starts -->
                    <section id="ecommerce-products" class="grid-view">
                        @if(count($posts) >= 1)
                        @foreach($posts as $post)
                             <div class="card ecommerce-card">
                            <div class="card-content">
                                <div class="item-img text-center">
                                    <a href="{{route('posts.show', $post->id)}}">
                                        {{-- @dd(asset('image/' . $post->images[0]->images)) --}}
                                      {{-- @dd($post->oneimage[0]->images)) --}}
                                      {{-- @dd($post->images[0]->images) --}}
                                        @php
                                            //  dd($post->oneimage)
                                            //  dd($post->oneimage->images)
                                            //  dd($post->oneimage[0]->images)
                                        @endphp
                                        <img class="img-fluid w-100" src="{{true ? asset('image/' . $post->images[0]->images) : asset('assets/images/no-image.png')}}" alt="image not-found" />
                                        {{-- <img class="img-fluid" src="{{count($post->oneimage)==1 ? asset('image/' . $post->oneimage[0]->images) : asset('assets/images/no-image.png')}}" alt="image not-found" /> --}}
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="item-wrapper">
                                        <div class="item-rating">
                                            <div class="badge badge-primary badge-md">
                                               
                                                <span >{{$post->rating}}</span> <i class="feather icon-star"></i>
                                            </div>
                                           
                                        </div>
                                        <div>
                                            <h6 class="item-price" style="font-size: 1.8rem !important">
                                                ${{$post->price}}
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="item-name">
                                        <a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a>
                                        <p class="item-company">By <span class="company-name">{{$post->user->name}}</span></p>
                                    </div>
                                    <div>
                                        <p class="item-description">
                                          {{$post->paragraph}}
                                        </p>
                                        <p><b>{{__('Category')}}: </b> {{$post->category->name}}</p>
                                        <p><b>{{__('Created at')}}:</b> {{$post->created_at}}</p>
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

                                    @auth
                                        
                                    {{-- <form method="POST" action="{{ route('wishlist.add') }}">
                                        @csrf
                                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                                        <button type="submit">Add to Wishlist</button>
                                    </form> --}}
                                    <form action="{{ route('wishlist.add') }}" method="POST">
                                        @csrf
                                        {{-- <button type="submit">Add to Wishlist</button> --}}

                                        <div class="wishlist">
                                            <input type="hidden" name="post_id" value="{{$post->id}}">
                                           <button style="border: none;outline: none; background: transparent" type="submit"> <i class="fa fa-heart-o"></i> {{__('Wishlist')}}</button>
                                  
                                        </div>
                                    </form>
                                    {{-- <div class="wishlist">
                                        <i class="fa fa-heart-o"></i> <span>{{__('Wishlist')}}</span>
                                    </div> --}}

                                 
                                    
                                    <a class="cart" href="{{ route('add.to.cart', $post->id) }}">
                                        <i class="feather icon-shopping-cart"></i> <span class="add-to-carts">{{__('Add to cart')}}</span> <a href="{{ route('posts.checkout') }}" class="view-in-cart d-none">{{__('View In Cart')}}</a>
                                    </a>

                                    @else
                                    {{-- <a class="cart" href="{{ route('add.to.cart', $post->id) }}">
                                        <i class="feather icon-shopping-cart"></i> <span class="add-to-carts">{{__('Add to cart')}}</span> <a href="{{ route('posts.checkout') }}" class="view-in-cart d-none">{{__('View In Cart')}}</a>
                                    </a> --}}
                                                            
                                    @endauth
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
            {{-- @include('../inc/__sidebar') --}}
            
        </div>
    </div>
    @include('../inc/__messages')
    
    <!-- END: Content-->
@endsection