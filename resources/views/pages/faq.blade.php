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
                            <h2 class="content-header-title float-left mb-0">FAQ</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item active">FAQ
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
              
                <section class="faq">
                    <div class="row">
                        
                        <div class="col-xl-9 col-md-7 col-12">
                            <div class="card bg-transparent border-0 shadow-none collapse-icon accordion-icon-rotate">
                                <div class="card-body p-0">
                                    <div class="accordion search-content-info" id="accordionExample">
                                        <div class="collapse-margin search-content mt-0">
                                            <div class="card-header" id="headingOne" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                <span class="lead collapse-title">
                                                    Presentatsiyani ko'rish
                                                </span>
                                            </div>
                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <a href="{{asset('assets/files/presentation.pdf')}}">presentation.pdf</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collapse-margin">
                                            <div class="card-header" id="headingTwo" role="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <span class="lead collapse-title collapsed">
                                                    Documentatsiyani ko'rish
                                                </span>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <a href="{{asset('assets/files/docs.docx')}}">Docs.docx</a>
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection