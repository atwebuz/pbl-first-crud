@extends('layouts.layout')

@section('section__content')
    
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
                                <li class="breadcrumb-item"><a href="#">{{__('Shop')}}</a>
                                </li>
                             
                                <li class="breadcrumb-item active">{{__('Edit')}}
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
        <div class="content-detached ">
            <div class="content-body">
                <!-- Basic Inputs start -->
                <section id="basic-input">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="card" style="">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Form</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal" action="{{route('posts.update',$post->id)}}" method="POST" enctype="multipart/form-data">
                                            @method('put')
                                            @csrf
                                            <div class="form-body">

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{__('Title')}}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="contact-info"
                                                                    class="form-control py-2" value="{{$post->title}}"
                                                                    name="title">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{__('Category')}}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <select class="custom-select form-control" id="location"
                                                                    name="category_id" aria-invalid="false">
                                                                    @foreach($categories as $category)
                                                                    <option value="{{$category->id}}">
                                                                        {{$category->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                 


                                                   
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{__('Color')}}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="contact-info"
                                                                    class="form-control py-2" value="{{$post->color}}"
                                                                    name="color">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{__('Price')}}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="contact-info"
                                                                    class="form-control py-2" value="{{$post->price}}"
                                                                    name="price">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{__('Date')}}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="date" id="contact-info"
                                                                    class="form-control py-2"
                                                                    name="date_of_year" value="{{$post->date_of_year}}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{__('Millage')}}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="number" id="contact-info"
                                                                    class="form-control py-2"
                                                                    name="millage" value="{{$post->millage}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                 
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{__('Transmission')}}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                               <select class="form-control" name="transmission" id="" value="{{$post->transmission}}">
                                                                <option value="Mexanika">Mexanika</option>
                                                                <option value="Avtomat">Avtomat</option>
                                                               </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{__('Oil Type')}}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                               <select class="form-control" name="oil_type" id="" value="{{$post->oil_type}}">
                                                                <option value="Benzin">Benzin</option>
                                                                <option value="Gaz">Gaz</option>
                                                                <option value="Dizel">Dizel</option>
                                                                <option value="Elektron">Elektron</option>
                                                               </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{__('Condition')}}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                               <select class="form-control" name="condition" id="" value="{{$post->condition}}">
                                                                <option value="Alo">Alo</option>
                                                                <option value="Yaxshi">Yaxshi</option>
                                                                <option value="Yomon">Yomon</option>
                                                               </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{__('Address')}}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="contact-info"
                                                                    class="form-control py-2"
                                                                    name="address" value="{{$post->address}}">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{__('Paragraph')}}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <textarea class="form-control py-2"" name="paragraph" id="contact-info" cols="30" rows="6">
 {{$post->paragraph}}
                                                                </textarea>

                                                                {{-- <input type="text" id="contact-info"
                                                                    class="form-control py-2"
                                                                    value="{{old('paragraph')}}" name="paragraph"
                                                                    placeholder="paragraph"> --}}
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{__('Image')}}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                {{-- @dd($post->images[0]->images) --}}
                                                                <input type="file" name="images[]" id="formFile" value="{{$post->images[0]->images}}" multiple>
                                                            </div>
                                                        </div>
                                                    </div>

                                                 
                                                
                                                    <div class="col-md-8 offset-md-4">
                                                        <button type="submit"
                                                            class="btn btn-primary mr-1 mb-1 waves-effect waves-light">{{__('Submit')}}</button>
                                                        <button type="reset"
                                                            class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">{{__('Reset')}}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @include('../inc/__messages')
                        </div>
                    </div>
                </section>
                <!-- Basic Inputs end -->
              
           

            </div>
        </div>
       

    </div>

   
</div>
 

@endsection
