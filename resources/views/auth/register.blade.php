@extends('layouts.layout')

@section('section__content')

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-12 my-4 col-10 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                                    <img src="{{asset('assets/images/pages/register.jpg')}}" alt="branding logo">
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 p-2">
                                        <div class="card-header pt-50 pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">{{__('Create Account')}}</h4>
                                            </div>
                                        </div>
                                        <p class="px-2">{{__('Fill the below form to create a new account.')}}</p>
                                        <div class="card-content">
                                            <div class="card-body pt-0">
                                                <form action="{{route('register_store')}}" method="POST">
                                                    @csrf
                                                    <div class="form-label-group">
                                                        <input name="name" type="text" id="inputName" class="form-control" placeholder="Ismingiz">
                                                        <label for="inputName">{{__('Name')}}</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Emailingiz">
                                                        <label for="inputEmail">{{__('Email')}}</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Parolingiz">
                                                        <label for="inputPassword">{{__('Password')}}</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="password" name="password_confirmation" id="inputConfPassword" class="form-control" placeholder="Parolni Tasdiqlang">
                                                        <label for="inputConfPassword">{{__('Confirm Password')}}</label>
                                                    </div>

                                                    {{-- <div class="form-label-group">
                                                        <input type="file" name="image" id="image" class="" placeholder="Image">
                                                    </div> --}}
                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            <fieldset class="checkbox">
                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                    <input type="checkbox" checked>
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class=""> {{__('I accept the terms & conditions.')}}</span>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                    <a href="/login" class="btn btn-outline-primary float-left btn-inline mb-50">{{__('Login')}}</a>
                                                    <button type="submit" class="btn btn-primary float-right btn-inline mb-50">{{__('Register')}}</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                @include('../inc/__messages')


            </div>
        </div>
    </div>
    
    <!-- END: Content-->
@endsection