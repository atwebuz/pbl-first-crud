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
                            <h2 class="content-header-title float-left mb-0">{{__('Product Details')}}</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">{{__('Home')}}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">{{__('eCommerce')}}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="app-ecommerce-shop.html">{{__('Shop')}}</a>
                                    </li>
                                    <li class="breadcrumb-item active">{{__('Details')}}
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
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">{{__('Chat')}}</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
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
                                        

                                        
                                        {{-- @dd($post->images) --}}
                                    

                                        {{-- <img class="img-fluid" src="{{ asset('assets/images/no-image.png')}}" alt="image not-found" /> --}}
                                        <div class="card-body">
                                            <div id="carousel-keyboard" class="carousel slide" data-keyboard="true">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carousel-keyboard" data-slide-to="0" class="active"></li>
                                                    <li data-target="#carousel-keyboard" data-slide-to="1"></li>
                                                    {{-- <li data-target="#carousel-keyboard" data-slide-to="2"></li> --}}
                                                </ol>
                                                <div class="carousel-inner" role="listbox">0
                                                    @forelse($post->images as $image)
                                                        <div class="carousel-item active">
                                                            <img class="img-fluid w-100" src="{{$image->images ? asset('image/' . $image->images) : asset('assets/images/no-image.png')}}" alt="image not-found" />
                                                        </div>
                                                        <div class="carousel-item" style="z-index: 1000">
                                                            <img class="img-fluid w-100" src="{{$image->images ? asset('image/' . $image->images) : asset('assets/images/no-image.png')}}" alt="image not-found" />
                                                        </div>
                                  
                                                        @empty
                                                            
                                                        <img class="img-fluid" src="{{asset('assets/images/no-image.png')}}" alt="image not-found" />

                                                    @endforelse 
                                                </div>
                                                <a class="carousel-control-prev" href="#carousel-keyboard" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carousel-keyboard" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>

                                        {{-- @forelse($post->images as $image)
                                        <img class="img-fluid" src="{{$image->images ? asset('image/' . $image->images) : asset('assets/images/no-image.png')}}" alt="image not-found" />

                                        @empty
                                        <img class="img-fluid" src="{{asset('assets/images/no-image.png')}}" alt="image not-found" />

                                        @endforelse --}}

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
                                        <span class="ml-50 text-dark font-medium-1">{{$post->rating}} {{__('ratings')}}</span>
                                    </div>
                                    <hr>
                                    <p>{{$post->paragraph}}</p>
                                   
                                    <hr>
                                    <div class="form-group">
                                        <label class="font-weight-bold">{{__('Color')}}</label>
                                        {{$post->color}}
                                    </div>

                                    <b>Tags: </b> <ul class="d-flex m-0 p-0" style="flex-wrap: wrap">
                                       
                                        @foreach ($post->tags as $tag)
                                            {{-- <li class="my-1" style="list-style-type: none;"><a class="btn btn-primary mr-1" href="#">{{$tag->name}}</a></li> --}}
                                            <li class="my-0" style="list-style-type: none;"><a class="js-programmatic-close btn btn-outline-primary mr-1 mb-1 waves-effect waves-light" href="#">{{$tag->name}}</a></li>

                                            
                                        @endforeach
                                      </ul>

                                   

                                    <p><b>{{__('Created at')}}:</b> {{$post->created_at}}</p>
                                    <p><b>{{__('Category')}}: </b> {{$post->category->name}}</p>
                                    <hr>
                                    <p>{{__('Available')}} - <span class="text-success">{{__('In stock')}}</span></p>

                                    <div class="d-flex flex-column flex-sm-row">
                                        <a href="{{ route('add.to.cart', $post->id) }}" class="btn btn-primary mr-0 mr-sm-1 mb-1 mb-sm-0"><i class="feather icon-shopping-cart mr-25"></i>{{__('Add to cart')}}</a>
                                        <button class="btn btn-outline-danger"><i class="feather icon-heart mr-25"></i>{{__('Wishlist')}}</button>
                                    </div>
                                    <hr>
                                    
                                    @auth
                                        @canany(['update', 'delete'], $post)
                                            <form class="my-3" action="{{ route('posts.destroy',$post->id) }}" method="POST">
                                                
                                                @csrf
                                                @method('DELETE')
                                                
                                                <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">{{__('Edit')}}</a>
                                                <button type="submit" class="btn btn-danger">{{__('Delete')}}</button>
                                                {{-- <button type="submit" class="btn btn-outline-primary mb-2 waves-effect waves-light">Delete</button> --}}
                                                
                                            </form>
                                        @endcanany
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
                                    <h4 class="card-title">{{__('Review Message Form')}}</h4>
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
                                                            <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">{{__('Submit')}}</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            @else
                                            <div class="d-flex align-items-center justify-content-between col-6">
                                                <p>{{__('For sending messages pleace')}}   </p>
                                                <a href="/login" type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">{{__('Login')}}</a>                                              
                                            </div>
                                        @endauth
                                    </div>
                                </div>
                            </div>
                     
                            <div class="row d-flex container">                       
                                <div class="col-lg-6 w-100 px-3">
                                    <h2>{{__('Count of comments')}} <span>{{ $post->comments()->count()}}</span></h2>
                                    @foreach ($post->comments as $comment)
                                        <span class="d-flex">
                                            <img class="round" src="{{asset('assets/images/portrait/small/avatar-s-11.jpg')}}" alt="avatar" height="40" width="40">
                                            <div class="user-nav p-1">
                                                <span class="user-name text-bold-600 pr-1">{{$comment->user->name}}</span>
                                                {{$comment->created_at}}
                                            </div>
                                            @auth
                                                @can('delete', $comment)
                                                    
                                               
                                                    <form action="{{route('comments.destroy', $comment->id)}}" method="POST">          
                                                        @csrf
                                                        @method('DELETE')
                                                            <button class="btn btn-danger mx-2">{{__('Delete')}}</button>
                                                    </form>
                                                    @endcan
                                            @endauth
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

        <section id="component-swiper-pagination">
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Keyboard Option</h4>
                    </div>
                    <div class="card-content">
                      
                </div>
            </div>
            
        </section>
                <!-- app ecommerce details end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection