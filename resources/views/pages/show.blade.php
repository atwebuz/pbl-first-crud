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
                            <h2 class="content-header-title float-left mb-0">Product Details</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">eCommerce</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="app-ecommerce-shop.html">Shop</a>
                                    </li>
                                    <li class="breadcrumb-item active">Details
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
                <!-- app ecommerce details start -->
                <section class="app-ecommerce-details">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-5 mt-2">
                                <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img class="img-fluid" src="{{$post->image ? asset('image/' . $post->image) : asset('assets/images/no-image.png')}}" alt="image not-found" />
                                        {{-- <img class="img-fluid" src="{{$post->image ? asset('image/' . $post->image) : asset('assets/images/no-image.png')}}" alt="image not-found" /> --}}
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <h5>{{$post->title}}</h5>
                                    <p class="text-muted">by {{$post->user->name}}</p> 

                                    {{-- @dd($post->user) --}}
                                    <div class="ecommerce-details-price d-flex flex-wrap">

                                        <p class="text-primary font-medium-3 mr-1 mb-0">${{$post->price}}</p>
                                        <span class="pl-1 font-medium-3 border-left">
                                            <i class="feather icon-star text-warning"></i>
                                            <i class="feather icon-star text-warning"></i>
                                            <i class="feather icon-star text-warning"></i>
                                            <i class="feather icon-star text-warning"></i>
                                            <i class="feather icon-star text-secondary"></i>
                                        </span>
                                        <span class="ml-50 text-dark font-medium-1">{{$post->rating}} ratings</span>
                                    </div>
                                    <hr>
                                    <p>{{$post->paragraph}}</p>
                                    <p class="font-weight-bold mb-25"> <i class="feather icon-truck mr-50 font-medium-2"></i>Free Shipping
                                    </p>
                                    <p class="font-weight-bold"> <i class="feather icon-dollar-sign mr-50 font-medium-2"></i>EMI options available
                                    </p>
                                    <hr>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Color</label>
                                        {{$post->color}}
                                    </div>

                                    <b>Tags: </b> <ul class="d-flex m-0 p-0">
                                       
                                        @foreach ($post->tags as $tag)
                                            <li class="my-1" style="list-style-type: none;"><a class="btn btn-primary mr-1" href="#">{{$tag->name}}</a></li>
                                        @endforeach
                                      </ul>

                                   

                                    <p><b>Created at:</b> {{$post->created_at}}</p>
                                    <p><b>Category Type: </b> {{$post->category->name}}</p>
                                    <hr>
                                    <p>Available - <span class="text-success">In stock</span></p>

                                    <div class="d-flex flex-column flex-sm-row">
                                        <button class="btn btn-primary mr-0 mr-sm-1 mb-1 mb-sm-0"><i class="feather icon-shopping-cart mr-25"></i>ADD TO CART</button>
                                        <button class="btn btn-outline-danger"><i class="feather icon-heart mr-25"></i>WISHLIST</button>
                                    </div>
                                    <hr>
                                    
                                    @auth
                                        <form class="my-3" action="{{ route('posts.destroy',$post->id) }}" method="POST">
                                            
                                            @csrf
                                            @method('DELETE')
                                            
                                            <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                            {{-- <button type="submit" class="btn btn-outline-primary mb-2 waves-effect waves-light">Delete</button> --}}
                                            
                                        </form>
                                    @endauth
                                    <button type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i class="feather icon-facebook"></i></button>
                                    <button type="button" class="btn btn-icon rounded-circle btn-outline-info mr-1 mb-1"><i class="feather icon-twitter"></i></button>
                                    <button type="button" class="btn btn-icon rounded-circle btn-outline-danger mr-1 mb-1"><i class="feather icon-youtube"></i></button>
                                    <button type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i class="feather icon-instagram"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="card" style="">
                                <div class="card-header">
                                    <h4 class="card-title">Review Message Form</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        @auth    
                                            <form class="form form-horizontal" action="{{route('comments.store')}}" method="POST" >
                                                @csrf
                                                
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group row">
                                                            
                                                                <div class="col-md-8">
                                                                    {{-- <input type="text" id="contact-info" class="form-control py-2" value="" name="message" placeholder="message"> --}}
                                                                    <textarea name="message" id=" " class="form-control" cols="30" rows="3"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <input type="hidden" name="post_id" value="{{$post->id}}">
                                                
                                                        
                                                        <div class="col-md-8 ">
                                                            <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            @else
                                            <div class="d-flex align-items-center justify-content-between col-6">
                                                <p>For sending messages pleace   </p>
                                                <a href="/login" type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Log in</a>                                              
                                            </div>
                                        @endauth
                                    </div>
                                </div>
                            </div>
                     
                        <div class="row d-flex container">                       
                            <div class="col-lg-6 w-100 px-3">
                                <h2>Count of comments <span>{{ $post->comments()->count()}}</span></h2>
                                @foreach ($post->comments as $comment)
                                    <span class="d-flex">
                                         <img class="round" src="{{asset('assets/images/portrait/small/avatar-s-11.jpg')}}" alt="avatar" height="40" width="40">
                                         <div class="user-nav p-1"><span class="user-name text-bold-600 pr-1">{{$comment->user->name}}</span>{{$comment->created_at}}</div>
                                 </span> 
                                 <span class="d-flex">
                                     <p>{{ $comment->message}}</p>
                                 </span> 
                                @endforeach
                                 
                             </div> 
                     </div>
                    </div>

                    </div>
                     
                    
                    </div>
                </section>
                <!-- app ecommerce details end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection