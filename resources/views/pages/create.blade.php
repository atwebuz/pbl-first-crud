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
                                <li class="breadcrumb-item"><a href="index.html">{{__('Home')}}</a>
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
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                class="feather icon-settings"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">{{__('Chat')}}</a><a
                                class="dropdown-item" href="#">{{__('Email')}}</a><a class="dropdown-item" href="#">{{__('Calendar')}}</a>
                        </div>
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
                                    <h4 class="card-title">{{__('Create')}}</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal" action="{{route('posts.store')}}"
                                            method="POST" enctype="multipart/form-data">
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
                                                                    class="form-control py-2"
                                                                    name="title" placeholder="Sarlavha">
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
                                                                <span>{{__('Tags')}}</span>
                                                            </div>
                                                            <div class="col-md-8">

                                                                {{-- <ul class="list-unstyled mb-0">
                                                                    @foreach($tags as $tag)           
                                                                        <div class="vs-checkbox-con vs-checkbox-primary">
                                                                            <input type="checkbox" value="{{$tag->id}}" name="tags[]">
                                                                            <span class="vs-checkbox vs-checkbox-sm">
                                                                                <span class="vs-checkbox--check">
                                                                                    <i class="vs-icon feather icon-check"></i>
                                                                                </span>
                                                                            </span>
                                                                            <span class="">{{$tag->name}}</span>
                                                                        </div>
                                                                    @endforeach
                                                                </ul> --}}


                                                                {{-- <select class="select form-control" id="location"
                                                                    name="tags[]" aria-invalid="false" multiple>
                                                                    <option value="">{{__('choose your tag')}}</option>
                                                                    @foreach($tags as $tag)
                                                                        <option value="{{$tag->id}}">{{$tag->name}}
                                                                        </option>

                                                                    @endforeach
                                                                    
                                                                 </select> --}}


                                                              
                                                                    @foreach($tags as $tag)
                                                                        <input type="checkbox" name="tags[]" value="{{$tag->id}}" id="{{$tag->name}}">
                                                                        <label for="hp">{{$tag->name}}</label>
                                                                    @endforeach
                                                                                                                                                                                      
                                                                                                                    

                                                                    {{-- <input type="checkbox" name="tags[]" value="1" id="hp">
                                                                    <label for="hp">Растаможена</label>
                                                                    <input type="checkbox" name="tags[]" value="2" id="dell">
                                                                    <label for="dell">Электрозеркала</label>
                                                                    <input type="checkbox" name="tags[]" value="3" id="asus">
                                                                    <label for="asus">стеклоподъемники</label>
                                                                    <input type="checkbox" name="tags[]" value="4" id="acer">
                                                                    <label for="acer">Кондиционер</label>
                                                                    <input type="checkbox" name="tags[]" value="5" id="sony">
                                                                    <label for="sony">Охранная</label>
                                                                    <input type="checkbox" name="tags[]" value="6" id="fujitsu">
                                                                    <label for="fujitsu">система</label>
                                                                    <input type="checkbox" name="tags[]" value="7" id="other_barnds">
                                                                    <label for="other_barnds">Парктроник</label> --}}

                                                                   
                                                          
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
                                                                    class="form-control py-2" 
                                                                    name="color" placeholder="Rangi">
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
                                                                    class="form-control py-2"
                                                                    name="price" placeholder="Narxi">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>{{__('Paragraph')}}</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <textarea class="form-control py-2"" name="paragraph" id="contact-info" cols="30" rows="6" placeholder="Describe yourself here...">
                                                                
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
                                                                <input type="file" name="images[]" id="formFile" multiple>
                                                            </div>
                                                        </div>
                                                    </div>

                                                 
                                                    <div class="form-group col-md-8 offset-md-4">
                                                        <fieldset class="checkbox">
                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                <input type="checkbox">
                                                                <span class="vs-checkbox">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                                <span class="">{{__('Remember me')}}</span>
                                                            </div>
                                                        </fieldset>
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