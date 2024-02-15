<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a
                                class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                    class="ficon feather icon-menu"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav bookmark-icons">
                        <!-- li.nav-item.mobile-menu.d-xl-none.mr-auto-->
                        <!--   a.nav-link.nav-menu-main.menu-toggle.hidden-xs(href='#')-->
                        <!--     i.ficon.feather.icon-menu-->

                        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i
                            class="ficon feather icon-search"></i></a>
                    <div class="search-input">
                        <div class="search-input-icon"><i class="feather icon-search primary" ></i></div>
                        <input class="input" class="form-controller" type="text" placeholder="Explore Vuexy..." tabindex="-1"
                            data-search="template-list" id="search" name="search">
                        <div class="search-input-close"><i class="feather icon-x"></i></div>
                        <ul class="search-list search-list-main">
                            <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr> 
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    </tr>
                                    </thead>
                            <tbody>
                            
                            </tbody>
                        </table>

                        </ul>
                    </div>
                </li>
                    </ul>

                </div>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-language nav-item">
                        <a class="dropdown-toggle nav-link"
                            id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">

                            @switch(session()->get('locale') ?? 'uz')
                            @case('uz')
                            <i class="flag-icon flag-icon-uz"></i>
                            <span
                                class="selected-language">Uzbek</span>
                            @break
                            @case('ru')
                            <i class="flag-icon flag-icon-ru"></i>
                            <span
                                class="selected-language">Russian</span>
                            @break                        
                            @case('en')
                            <i class="flag-icon flag-icon-us"></i>
                            <span
                                class="selected-language">English</span>
                            @break
                            @endswitch

                        
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag">

                                <a class="dropdown-item" href="?lang=uz"
                                data-language="uz"><i class="flag-icon flag-icon-uz"></i> Uzbek</a>

                                <a class="dropdown-item" href="?lang=en"
                                data-language="en"><i class="flag-icon flag-icon-us"></i> English</a>

                                <a class="dropdown-item" href="?lang=ru"
                                data-language="ru"><i class="flag-icon flag-icon-ru"></i> Russian</a>

                               
                                
                        </div>
                    </li>

                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i
                                class="ficon feather icon-maximize"></i></a>
                    </li>
                      @auth
                        <li class="dropdown dropdown-notification nav-item">

                            @php $total = 0 @endphp
                            @foreach((array) session('cart') as $id => $details)
                                @php $total += $details['quantity'] @endphp
                            @endforeach
                            <a class="nav-link nav-link-label" href="#"
                                data-toggle="dropdown">
                                <i class="ficon feather icon-shopping-cart"></i>
                                <span
                                    class="badge badge-pill badge-primary badge-up cart-item-count">{{ $total }}</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-cart dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header m-0 p-2">
                                        <h3 class="white">
                                                    <span class="cart-item-count">{{$total}}</span>                          
                                                    <span class="mx-50">{{__('Items')}}</span>
                                        </h3>
                                    
                                       

                                            <span class="notification-title">{{_('In Your Cart')}}</span>
                                    

                                   
                                    </div>
                                </li>
                                @if(session('cart') )
                                @foreach(session('cart') as $id => $details)
                                <li class="scrollable-container media-list">
                                        <a class="cart-item"
                                            href="#!">
                                            <div class="media">
                                            
                                                        <img class="media-left d-flex justify-content-center align-items-center" src="{{$details['image'] ? asset('image/' . $details['image']) : asset('assets/images/no-image.png')}}" alt="image not-found" width="75" />
                                                <div class="media-body"><span
                                                        class="item-title text-truncate text-bold-500 d-block mb-50">{{ $details['name'] }}</span><span
                                                        class="item-desc font-small-2 text-truncate d-block"> {{ $details['paragraph'] }}</span>
                                                    <div class="d-flex justify-content-between align-items-center mt-1"><span
                                                            class="align-middle d-block">:{{ $details['quantity'] }} x ${{ $details['price'] }}</span>
                                                            <i class="remove-cart-item feather icon-x danger font-medium-1"></i>
                                                    </div> 
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center text-primary"
                                        href="{{route('posts.checkout')}}"><i
                                        class="feather icon-shopping-cart align-middle"></i><span
                                        class="align-middle text-bold-600">{{__('Checkout')}}</span></a></li>
                                        <li class="empty-cart d-none p-2">{{__('Your Cart Is Empty.')}}</li>
                                        @endforeach
                                        @endif
                            </ul>
                        </li>
                      @endauth
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link"
                            href="#" data-toggle="dropdown">

                            @auth
                            <div class="user-nav d-sm-flex d-none"><span
                                    class="user-name text-bold-600">{{auth()->user()->name}}</span><span
                                    class="user-status">{{__('Available')}}</span></div><span>
                                        <img class="round" src="{{auth()->user()->image ? asset('image/' . auth()->user()->image) : asset('assets/images/no-image.png')}}" alt="avatar"
                                    height="40" width="40"></span>

                                    @else
                                 
                                        
                                  <form action="{{route('login')}}">

                                      <button type="submit" class="btn btn-primary" href="">
                                          <i class="feather icon-power"></i> {{__('Login')}}
                                      </button>

                                  </form>
                                  
                            @endauth

                            {{-- <div class="user-nav d-sm-flex d-none"><span
                                    class="user-name text-bold-600">Guest</span><span
                                    class="user-status">Available</span></div><span><img class="round"
                                    src="{{asset('assets/images/portrait/small/avatar-s-11.jpg')}}" alt="avatar"
                                    height="40" width="40"></span> --}}
                        </a>
                        @auth
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                href="{{route('profile.edit')}}"><i class="feather icon-user"></i> {{__('Edit Profile')}}</a><a
                                class="dropdown-item" href="app-chat.html"><i class="feather icon-message-square"></i>
                                {{__('Chats')}}</a>

                            <div class="dropdown-divider"></div>
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item" href="">
                                    <i class="feather icon-power"></i> {{__('Logout')}}
                                </button>
                            </form>

                        </div>
                        @endauth
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<ul class="main-search-list-defaultlist d-none">
    <li class="d-flex align-items-center"><a class="pb-25" href="#">
            <h6 class="text-primary mb-0">Files</h6>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="{{asset('assets/images/icons/xls.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing
                        Manager</small>
                </div>
            </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="{{asset('assets/images/icons/jpg.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="{{asset('assets/images/icons/pdf.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
                        Marketing Manager</small>
                </div>
            </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between w-100" href="#">
            <div class="d-flex">
                <div class="mr-50"><img src="{{asset('assets/images/icons/doc.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                </div>
            </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
        </a></li>
    <li class="d-flex align-items-center"><a class="pb-25" href="#">
            <h6 class="text-primary mb-0">Members</h6>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="{{asset('assets/images/portrait/small/avatar-s-8.jpg')}}" alt="png"
                        height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="{{asset('assets/images/portrait/small/avatar-s-1.jpg')}}" alt="png"
                        height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="{{asset('assets/images/portrait/small/avatar-s-14.jpg')}}" alt="png"
                        height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing
                        Manager</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
            class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
            <div class="d-flex align-items-center">
                <div class="avatar mr-50"><img src="{{asset('assets/images/portrait/small/avatar-s-6.jpg')}}" alt="png"
                        height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                </div>
            </div>
        </a></li>
</ul>
<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a
            class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>No results found.</span></div>
        </a></li>
</ul>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('posts.index')}}">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">Auto Shop</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                        class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                        data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">



            <li class=" nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title"
                        data-i18n="Ecommerce">{{__('Ecommerce')}}</span></a>
                <ul class="menu-content">
                    <li class="{{ (request()->is('posts')) ? 'active' : '' }} "><a href="{{route('posts.index')}}"><i
                                class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">{{__('Shop')}}</span></a>
                    
                    @auth
                    @if(auth()->user()->id == 2 || 1 && 2 > auth()->user()->id)
                    <li class="{{ (request()->is('posts/create')) ? 'active' : '' }}"><a
                            href="{{route('posts.create')}}"><i class="feather icon-circle"></i><span class="menu-item"
                                data-i18n="Wish List">{{__('Create')}}</span></a>
                    </li>

                   
                    @endif
                    {{-- <li class="{{ (request()->is('login')) ? 'active' : '' }}"><a href="{{route('login')}}"><i
                        class="feather icon-circle"></i><span class="menu-item"
                        data-i18n="Login">{{__('Login')}}</span></a>
            </li> --}}

                    @endauth
                    {{-- @else
                            <li><a
                                href="#"><i class="feather icon-circle"></i><span class="menu-item"
                                    data-i18n="Wish List">{{__('ERROR')}}</span></a>
                        </li> --}}

                    <li class="{{ (request()->is('posts/wishlist')) ? 'active' : '' }}"><a
                            href="{{route('posts.wishlist')}}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="Wish List">{{__('Wish List')}}</span></a>
                    </li>
                    @php $total = $details['quantity'] @endphp

                    <li class="{{ (request()->is('posts/checkout')) ? 'active' : '' }}"><a
                        href="{{route('posts.checkout')}}"><i class="feather icon-circle"></i><span
                            class="menu-item" data-i18n="Wish List">{{__('Savat')}}</span><span class="mx-2 px-1 text-danger bg-white" style="border-radius: 50px">{{$total}}</span></a>
                </li>

                    @if(isset($cart)) {
                    <li class="{{ (request()->is('posts/checkout')) ? 'active' : '' }}"><a
                            href="{{route('posts.checkout')}}"><i class="feather icon-circle"></i><span
                                class="menu-item" data-i18n="Checkout">{{__('Checkout')}}</span></a>
                    </li>
                    @endif
                 
                </ul>
            </li>
            {{-- <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title"
                        data-i18n="User">{{__('User')}}</span></a>
                <ul class="menu-content">
                    <li><a href="app-user-list.html"><i class="feather icon-circle"></i><span class="menu-item"
                                data-i18n="List">{{__('List')}}</span></a>
                    </li>
                    <li><a href="app-user-view.html"><i class="feather icon-circle"></i><span class="menu-item"
                                data-i18n="View">{{__('View')}}</span></a>
                    </li>
                    <li><a href="app-user-edit.html"><i class="feather icon-circle"></i><span class="menu-item"
                                data-i18n="Edit">{{__('Edit')}}</span></a>
                    </li>
                </ul>
            </li> --}}






            <li class=" navigation-header"><span>{{__('pages')}}</span>
            </li>
            {{-- <li class=" nav-item"><a href="page-user-profile.html"><i class="feather icon-user"></i><span
                        class="menu-title" data-i18n="Profile">{{__('Profile')}}</span></a>
            </li> --}}

            @auth
            <li class="{{ (request()->is('/profile')) ? 'nav-item active' : '' }}"><a
                    href="{{route('profile.edit')}}"><i class="feather icon-settings"></i><span class="menu-title"
                        data-i18n="Account Settings">{{__('Account Settings')}}</span></a>
            </li>
            @endauth
            <li class="{{ (request()->is('posts/faq')) ? 'nav-item active' : '' }}"><a href="{{route('posts.faq')}}"><i
                        class="feather icon-help-circle"></i><span class="menu-title" data-i18n="FAQ">{{__('FAQ')}}</span></a>
            </li>

{{-- 
            <li class="disabled nav-item"><a href="#"><i class="feather icon-eye-off"></i><span class="menu-title"
                        data-i18n="Disabled Menu">{{__('Disabled Menu')}}</span></a>
            </li> --}}


        </ul>
    </div>
</div>

<script type="text/javascript">
    $('#search').on('keyup',function(){
    $value=$(this).val();
    $.ajax({
    type : 'get',
    url : '{{URL::to('search')}}',
    data:{'search':$value},
    success:function(data){
        console.log(data);
    $('tbody').html(data);
    }
    });
    })
    </script>
    <script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>

<!-- END: Main Menu-->