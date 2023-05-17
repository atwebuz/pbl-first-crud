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
                        <h2 class="content-header-title float-left mb-0">Checkout</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">{{__('Home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{__('eCommerce')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{__('Shop')}}</a>
                                </li>
                             
                                <li class="breadcrumb-item active">{{__('Checkout')}}
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
            <form action="#" class="icons-tab-steps checkout-tab-steps wizard-circle">
                <!-- Checkout Place order starts -->
                <h6><i class="step-icon step feather icon-shopping-cart"></i>Cart</h6>
                <fieldset class="checkout-step-1 px-0">
                    <section id="place-order" class="list-view product-checkout">
                        <div class="checkout-items">
 
                            @php $total = 0 @endphp 
                            @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                    @php $total += $details['price'] * $details['quantity'] @endphp
                            {{-- @dd($details) --}}
                            <div class="card ecommerce-card" data-id="{{ $id }}">
                                <div class="card-content">
                                    <div class="item-img text-center">
                                        <a href="{{$id}}">
                                            
                                                {{-- @dd(session('cart')) --}}
                                               <img class="w-100" src="{{asset('image/' . $details['image'])}}" alt="image not-found" width="100" height="100" class="img-responsive" /> 
                                           
                                        </a> 
                                      </div>
                                    <div class="card-body">
                                        <div class="item-name">
                                            <a href="{{$id}}">{{ $details['name'] }}</a>
                                            <span></span>
                                            <p class="item-company">By <span class="company-name">Amazon</span></p>
                                            <p class="stock-status-in">In Stock</p>
                                        </div>
                                        <div class="item-quantity">
                                            <p class="quantity-title">Quantity</p>
                                            <div class="input-group quantity-counter-wrapper">
                                                <input type="text" class="quantity-counter" value="{{ $details['quantity'] }}">
                                            </div>
                                        </div>
                                        <p class="delivery-date">Delivery by, Wed Apr 25</p>
                                        <p class="offers">17% off 4 offers Available</p>
                                    </div>
                                    <div class="item-options text-center">
                                        <div class="item-wrapper">
                                            <div class="item-rating">
                                                <div class="badge badge-primary badge-md">
                                                    4 <i class="feather icon-star ml-25"></i>
                                                </div>
                                            </div>
                                            <div class="item-cost">
                                                <h6 class="item-price">
                                                    ${{ $details['price'] }}
                                                </h6>
                                                <p class="shipping">
                                                    <i class="feather icon-shopping-cart"></i> Free Shipping
                                                </p>
                                            </div>
                                        </div>

                                        <div class="wishlist remove-from-cart" >
                                            <i class="feather icon-x align-middle"></i> Remove
                                        </div>

                                     
                                        {{-- <td class="actions" data-th="">
                                            <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>
                                        </td> --}}

                                        <div class="cart remove-wishlist">
                                            <i class="fa fa-heart-o mr-25"></i> Wishlist
                                        </div>
                                        {{-- <div class="" id="remove-from-cart" style="background:red">
                                            <i class="feather icon-x align-middle"></i> Removerr
                                        </div> --}}

                                    </div>
                                </div>
                            </div>
                              {{-- @endforeach --}}
                            @endforeach
                            @endif

                            
                             {{-- <td data-th="Price">${{ $details['price'] }}</td>
                            <td data-th="Quantity">
                                <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
                            </td>
                            <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                            <td class="actions" data-th="">
                                <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>
                            </td>  --}}
                        </div>

                        
                        <div class="checkout-options">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="options-title">Options</p>
                                        <div class="coupons">
                                            <div class="coupons-title">
                                                <p>Coupons</p>
                                            </div>
                                            <div class="apply-coupon">
                                                <p>Apply</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="price-details">
                                            <p>Price Details</p>
                                        </div>
                                        <div class="detail">
                                            <div class="detail-title">
                                                Total MRP
                                            </div>
                                            <div class="detail-amt">
                                                ${{ $details['price'] * $details['quantity'] }}
                                            </div>
                                        </div>
                                      
                                        <div class="detail">
                                            <div class="detail-title">
                                                EMI Eligibility
                                            </div>
                                            <div class="detail-amt emi-details">
                                                Details
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <div class="detail-title">
                                                Delivery Charges
                                            </div>
                                            <div class="detail-amt discount-amt">
                                                Free
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="detail">
                                            <div class="detail-title detail-total">Total</div>
                                            <div class="detail-amt total-amt">
                                                {{-- <td data-th="Price">${{ $details['price'] }}</td> --}}
                                         
                                                <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                                           
                                            </div>
                                        </div>
                                        <div class="btn btn-primary btn-block place-order">PLACE ORDER</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                  
                    </section>
                </fieldset>
                <!-- Checkout Place order Ends -->

           
            </form>

        </div>
        
    </div>
</div>

<!-- END: Content-->

@endsection

@section('scripts')

    <script type="text/javascript">
    
    // console.log(123);
        $(".update-cart").change(function (e) {
            e.preventDefault();
    
            var ele = $(this);
    
            $.ajax({
                url: '{{ route('update.cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id"), 
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function (response) {
                window.location.reload();
                }
            });
        });
    
        $("#remove-from-cart").click(function (e) {
            alert('wedwe');
            e.preventDefault();
    
            var ele = $(this);
    
            if(confirm("Are you sure want to remove?")) {
                $.ajax({

                    alert('sadas');
                    url: '{{ route('remove.from.cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}', 
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
    
    </script>
@endsection