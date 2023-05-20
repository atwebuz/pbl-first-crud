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
                        <h2 class="content-header-title float-left mb-0">WishList</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">eCommerce</a>
                                </li>
                                <li class="breadcrumb-item active">Wish List
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
        <div class="content-body">
            <!-- Wishlist Starts -->
            <section id="wishlist" class="grid-view wishlist-items">

                {{-- @dd(auth()->user()->posts->wishlist); --}}
                {{-- @dd(auth()->user()->posts); --}}
                {{-- @dd(auth()->user()->wishlist); --}}

                {{-- @dump(Auth::user()->wishlist->count()) --}}

                {{-- @dd(Auth::user()->wishlist[0]) --}}
                @if (Auth::user()->wishlist->count() )
                    @foreach (Auth::user()->wishlist as $item)

                            <div class="card ecommerce-card">
                    <div class="card-content">
                        <div class="item-img text-center">
                            <a href="{{route('posts.show', $item->post->id)}}">
                                {{-- @dd($item->post->images[0]->images) --}} 
                                <img src="{{asset('image/' . $item->post->images[0]->images)}}" class="img-fluid" alt="img-placeholder">
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="item-wrapper">
                                <div class="item-rating">
                                    <div class="badge badge-primary badge-md">
                                        {{$item->post->rating}} <i class="feather icon-star ml-25"></i>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="item-price">
                                        ${{$item->post->price}}
                                    </h6>
                                </div>
                            </div>
                            <div class="item-name">
                                <a href="app-ecommerce-details.html">
                                    {{$item->post->title}}   
                                </a>
                            </div>
                            <div>
                                <p class="item-description">
                                    {{$item->post->paragraph}}
                                </p>
                            </div>
                        </div>
                        <div class="item-options text-center">

                            <form action="{{ route('wishlist.remove') }}" method="POST">
                                @csrf
                                {{-- <button type="submit">Add to Wishlist</button> --}}

                                <div class="wishlist">
                                    <input type="hidden" name="id" value="{{$item->id}}">
                                   <button style="border: none;outline: none; background: transparent" type="submit">{{__('Remove')}}</button>
                                </div>
                            </form>

                            {{-- <div class="wishlist remove-wishlist">
                                <i class="feather icon-x align-middle"></i> Remove
                            </div> --}}
                            <div class="cart move-cart">
                                <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Move to cart</span>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
                @endif
       
      
                {{-- <div class="card ecommerce-card">
                    <div class="card-content">
                        <div class="item-img text-center">
                            <a href="app-ecommerce-details.html">
                                <img src="{{asset('assets/images/pages/eCommerce/1.png')}}" class="img-fluid" alt="img-placeholder">
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="item-wrapper">
                                <div class="item-rating">
                                    <div class="badge badge-primary badge-md">
                                        4 <i class="feather icon-star ml-25"></i>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="item-price">
                                        $19.99
                                    </h6>
                                </div>
                            </div>
                            <div class="item-name">
                                <a href="app-ecommerce-details.html">
                                    Sony - ZX Series On-Ear Headphones - Black
                                </a>
                            </div>
                            <div>
                                <p class="item-description">
                                    These Sony ZX Series MDRZX110/BLK headphones feature neodymium magnets and 30mm drivers for powerful,
                                    reinforced sound. Enjoy your favorite songs with lush bass response thanks to the Acoustic Bass Booster
                                    technology.
                                </p>
                            </div>
                        </div>
                        <div class="item-options text-center">
                            <div class="wishlist remove-wishlist">
                                <i class="feather icon-x align-middle"></i> Remove
                            </div>
                            <div class="cart move-cart">
                                <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Move to cart</span>
                            </div>
                        </div>
                    </div>
                </div> --}}

               
            </section>
            <!-- Wishlist Ends -->

        </div>
    </div>
</div>
<!-- END: Content-->

@endsection