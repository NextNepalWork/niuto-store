<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    @if (isset($user))
        <script>
            localStorage.setItem("customerToken", '{{ $user->token }}');
            localStorage.setItem("loginSuccessMessage", "Welcome {{ $user->first_name }} {{ $user->last_name }}");
            localStorage.setItem("customerHash", '{{ $user->hash }}');
            localStorage.setItem("customerLoggedin", '1');
            localStorage.setItem("customerId", '{{ $user->id }}');
            localStorage.setItem("customerFname", '{{ $user->first_name }}');
            localStorage.setItem("customerLname", '{{ $user->last_name }}');
            localStorage.setItem("cartSession", '');
            window.location.href = '/';
        </script>
    @endif
    <meta charset="UTF-8">
    <title>{{ isset(getSetting()['seo_title']) ? getSetting()['seo_title'] : 'Seo Title' }}</title>
    <meta name="description"
        content="{{ isset(getSetting()['seo_description']) ? getSetting()['seo_description'] : 'Seo Description' }}">
    <meta name="keywords"
        content="{{ isset(getSetting()['seo_keywords']) ? getSetting()['seo_keywords'] : 'Seo Keywords' }}">
    <meta name="author" content="">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png"
        ref="{{ isset(getSetting()['favicon']) ? getSetting()['favicon'] : '01-fav.png' }}">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta http-equiv="Content-Security-Policy" content="block-all-mixed-content">
    {{-- <link rel="icon" type="image/png"
        href="{{ isset(getSetting()['favicon']) ? getSetting()['favicon'] : '01-fav.png' }}"> --}}

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;500;600;700;800&family=DM+Serif+Display:ital@0;1&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700&family=Vidaloka&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.minn.css') }}" />
    <title>Niuto Store</title>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/jssocials/jssocials.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/jssocials/jssocials-theme-flat.css') }}">
    @yield('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .price-through {
            text-decoration: line-through;
            font-size: 0.9rem;
            padding: 6px;
        }

        .section-loading {
            z-index: 999999;
            text-align: center;
        }

        #loading {
            position: fixed;
            text-align: center;
            width: 100%;
            height: 100vh;
            z-index: 99999;
        }

    </style>
</head>

<body>
    <?php
$categories = App\Models\Admin\Category::where('parent_id', null)
    ->with('detail')
    ->with('subcategory')
    ->take(9)
    ->get();
?>
    @include(isset(getSetting()['header_style']) ? 'includes.headers.header-'.getSetting()['header_style'] :
    'includes.headers.header-style1')
    <div id="loading" style="display:none;">
        <img src="{{ asset('loader/ajax-loader.gif') }}" alt="">
    </div>
    {{-- <div id="loading" style="background: #fff url('{{ asset('loader/ajax-loader.gif') }}') no-repeat center; display:none;"></div> --}}

    {{-- <div id="loading" style="display: none;">
        <img src="{{ asset('loader/ajax-loader.gif') }}" alt="">
    </div> --}}
    @yield('content')



    {{-- <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> --}}
    <script src="{{ asset('frontend/assets/js/jquery-3.5.1.min.js') }}"></script>
    @include(isset(getSetting()['Footer_style']) ? 'includes.footers.footer-'.getSetting()['Footer_style'] :
    'includes.footers.footer-style1')

    {{-- <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery-3.3.1.minn.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/font-awesom.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('/assets/jssocials/jssocials.min.js') }}"></script>

    <!-- Mobile Nav -->
    <div class="modal fade" id="rightsidebarfilter" tabindex="-1" role="dialog"
        aria-labelledby="rightsidebarfilterlabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content h-100">
                <div class="modal-header px-3 py-3 align-items-center">
                    <div class="cart-wishlist">
                        <div class="image">
                            <a class="navbar-brand" href="index.html">
                                <h2 class="m-0 font-weight-bold">
                                    <span>Niuto</span> Mart !
                                </h2>
                            </a>
                        </div>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body d-flex justify-content-between h-100 px-4">
                    <ul class="navbar-nav w-100">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html">
                                <span class="nav-indication mr-2"><i class="fa fa-eercast"
                                        aria-hidden="true"></i></span>
                                Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link add-on" data-toggle="modal" data-target="#nav-cart">
                                <span class="nav-indication mr-2"><i class="fa fa-eercast"
                                        aria-hidden="true"></i></span>My Cart
                                <span class="mx-2"><i class="fa fa-shopping-bag"
                                        aria-hidden="true"></i></span>
                                <sup class="cart-items text-white" id="mobile-total-menu-cart-product-count"></sup>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link add-on" data-toggle="modal" data-target="#nav-cart">
                                <span class="nav-indication mr-2"><i class="fa fa-eercast"
                                        aria-hidden="true"></i></span>Wishlist
                                <span class="mx-2"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                                <sup class="cart-items text-white wishlist-count"></sup>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ url('/shop') }}" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="nav-indication mr-2"><i class="fa fa-eercast"
                                        aria-hidden="true"></i></span>Shop<span class="ml-1">
                                   
                                </span>
                            </a>
                            
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="nav-indication mr-2"><i class="fa fa-eercast"
                                        aria-hidden="true"></i></span>Category<span class="ml-1">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="container d-block">
                                    <div class="row">
                                        @foreach ($categories as $k => $category)
                                        <div class="col-md-12">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link head font-weight-bold"
                                                        href="/shop?category={{ $category->id }}">{{ $category->detail[0]->category_name }}</a>
                                                </li>
                                                @foreach ($category->subcategory as $sub => $subcat)
                                                @if (!$category->subcategory->isEmpty())
                                                <li class="nav-item p-0">
                                                    <a class="nav-link" href="/shop?category={{ $subcat->id }}">{{ $subcat->detail[0]->category_name }}</a>
                                                </li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                       @endforeach
                                    </div>
                                </div>
                                <!--  /.container  -->
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ url('/contact-us') }}" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="nav-indication mr-2"><i class="fa fa-eercast"
                                        aria-hidden="true"></i></span>
                                Contact Us<span class="ml-1">
                                    
                                </span>
                            </a>
                         
                        </li>
                    </ul>
                </div>
                <div class="modal-footer without-auth-login py-3">
                    <a class="w-50 text-center" href="{{ url('/login') }}">
                        <span class="mr-2"><i class="fa fa-sign-in" aria-hidden="true"></i></span>Login</a>
                    <a class="w-50 text-center" href="{{ url('/register') }}">
                        <span class="mr-2"><i class="fa fa-paper-plane"
                                aria-hidden="true"></i></span>Register</a>
                </div>
                <div class="modal-footer auth-login py-3">
                    <a class="w-50 text-center log_out" href="javascript:void(0);">
                        <span class="mr-2"><i class="fa fa-sign-out"
                                aria-hidden="true"></i></span>Logout</a>
                    <a class="w-50 text-center" href="{{ url('/profile') }}">
                        <span class="mr-2"><i class="fa fa-user"
                                aria-hidden="true"></i></span>Profile</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Nav -->

    @php
        $language_id = $data['selectedLenguage'];
        $locale = session()->get('locale');
        //dd ($locale);
    @endphp
    <script>
        loginErrorMessage = localStorage.getItem("loginErrorMessage");

        if (loginErrorMessage != null) {
            toastr.error(loginErrorMessage);
            localStorage.removeItem("loginErrorMessage");
        }

        function getURLParameter(url, name) {
            return (RegExp(name + '=' + '(.+?)(&|$)').exec(url) || [, null])[1];
        }
    </script>
    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }

        loggedIn = $.trim(localStorage.getItem("customerLoggedin"));
        customerFname = $.trim(localStorage.getItem("customerFname"));
        customerLname = $.trim(localStorage.getItem("customerLname"));

        if (loggedIn != '1') {
            $(".auth-login").remove();
            $(".without-auth-login").removeAttr('hidden');
        } else {
            $(".auth-login").removeAttr('hidden');
            $(".without-auth-login").remove();
            $(".welcomeUsername").html(customerFname + " " + customerLname);
        }

        customerToken = $.trim(localStorage.getItem("customerToken"));

        languageId = localStorage.getItem("languageId");
        languageName = localStorage.getItem("languageName");

        if (languageName == null || languageName == 'null') {
            localStorage.setItem("languageId", $.trim("{{ $data['selectedLenguage'] }}"));
            localStorage.setItem("languageName", $.trim("{{ $data['selectedLenguageName'] }}"));
            $(".language-default-name").html($.trim("{{ $data['selectedLenguageName'] }}"));
            languageId = $.trim("{{ $data['selectedLenguage'] }}");
        } else {
            $(".language-default-name").html(localStorage.getItem("languageName"));
            $('.mobile-language option[value="' + localStorage.getItem("languageId") + '"]').attr('selected', 'selected');
        }

        currency = localStorage.getItem("currency");
        currencyCode = localStorage.getItem("currencyCode");
        if (currencyCode == null || currencyCode == 'null') {
            localStorage.setItem("currency", $.trim("{{ $data['selectedCurrency'] }}"));
            localStorage.setItem("currencyCode", $.trim("{{ $data['selectedCurrencyName'] }}"));
            $("#selected-currency").html($.trim("{{ $data['selectedCurrencyName'] }}"));
            currency = 1;
        } else {
            $("#selected-currency").html(localStorage.getItem("currencyCode"));
            $('.currency option[value="' + localStorage.getItem("languageId") + '"]').attr('selected', 'selected');
        }

        cartSession = $.trim(localStorage.getItem("cartSession"));
        if (cartSession == null || cartSession == 'null') {
            cartSession = '';
        }
        $(document).ready(function() {
            loginSuccessMessage = localStorage.getItem("loginSuccessMessage");
            if (loginSuccessMessage != null) {
                toastr.success(loginSuccessMessage);
                localStorage.removeItem("loginSuccessMessage");
            }

            if (loggedIn != '1') {
                localStorage.setItem("cartSession", cartSession);
                menuCart(cartSession);
            } else {
                menuCart('');
            }
            getWishlist();

            // if (loggedIn != '1') {
            //     
            //     $(".auth-login").remove();
            // } else {
            //     
            //     $(".without-auth-login").remove();
            //     $(".welcomeUsername").html(customerFname + " " + customerLname);
            // }
        });


        $(document).ready(function() {
            if (localStorage.cartSession == '') {
                $("#total-menu-cart-product-count").html(0);
                $("#mobile-total-menu-cart-product-count").html(0);
            }

            $(".proceed_checkout_modal").on('click', function(e) {
                e.preventDefault();

                if (loggedIn == 1 && $("#top-cart-product-template").html() ==
                    '<tr><td class="text-dark">No Items</td></tr>') {
                    window.location.href = "{{ url('/shop') }}";
                    toastr.error("No item in your cart. Please shop first");
                } else if (loggedIn == 1 && $("#top-cart-product-template").html() != '') {
                    window.location.href = "{{ url('/checkout') }}";
                } else {
                    window.location.href = "{{ url('/login') }}";
                    toastr.error('Please Login first');
                }
            });
        });

        function getSliderSettings(className) {
            jQuery(document).ready(function() {
                (function(jQuery) {
                    var tabCarousel = jQuery('.' + className);
                    if (tabCarousel.length) {

                        tabCarousel.each(function() {
                            var thisCarousel = jQuery(this),
                                item = jQuery(this).data('item'),
                                itemmobile = jQuery(this).data('itemmobile');



                            thisCarousel.slick({
                                lazyLoad: 'progressive',
                                dots: false,
                                arrows: true,
                                infinite: false,
                                // variableWidth: true,
                                //rtl:true,
                                speed: 300,
                                slidesToShow: item || 4,
                                slidesToScroll: item || 4,
                                adaptiveHeight: true,
                                responsive: [{
                                        breakpoint: 1025,
                                        settings: {
                                            slidesToShow: 3,
                                            slidesToScroll: 3
                                        }
                                    },
                                    {
                                        breakpoint: 992,
                                        settings: {
                                            slidesToShow: 2,
                                            slidesToScroll: 2
                                        }
                                    },
                                    {
                                        breakpoint: 768,
                                        settings: {
                                            slidesToShow: itemmobile || 1,
                                            slidesToScroll: itemmobile || 1
                                        }
                                    }
                                ]
                            });
                        });
                    };

                })(jQuery);
            });
        }

        function getWishlist() {
            if (loggedIn != '1') {
                $(".wishlist-count").html(0);
                return;
            }

            $.ajax({
                type: 'get',
                url: "{{ url('') }}" + '/api/client/wishlist',
                headers: {
                    'Authorization': 'Bearer ' + customerToken,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {
                    // $('#loading').css('display', 'block');
                },
                success: function(data) {
                    $('#loading').css('display', 'none');
                    if (data.status == 'Success') {
                        $(".wishlist-count").html(data.data.length);
                    }
                },
                error: function(data) {
                    $('#loading').css('display', 'none');
                },
            });
        }

        function addWishlist(input) {
            if (loggedIn != '1') {
                toastr.error('{{ trans('response.please_login_first') }}')
                return;
            }

            $.ajax({
                type: 'post',
                url: "{{ url('') }}" + '/api/client/wishlist?product_id=' + $(input).attr('data-id'),
                headers: {
                    'Authorization': 'Bearer ' + customerToken,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {
                    // $('#loading').css('display', 'block');
                },
                success: function(data) {
                    // console.log($(input).find('.fa-heart'))
                    $(input).find('.fa-heart').css({
                        color: "green",
                    });
                    // if($('.fa-heart').css('color') == 'red')
                    // {
                    //     $('.wish_list_block.i').css({color:"green"});
                    // }
                    // $('.wish_list_block.i').css({color:"green"});
                    $('#loading').css('display', 'none');
                    if (data.status == 'Success') {
                        // $('.wish_list_block > a[data-id="' + data.data.product_id + '"] > i').css({
                            
                        //     color: "green"
                        // });
                        $(".wishlist-count").html(data.data.length);
                        toastr.success('Product added to wishlist')
                    }
                },
                error: function(data) {
                    $('#loading').css('display', 'none');
                },
            });
        }

        function addCompare(input) {
            if (loggedIn != '1') {
                toastr.error('{{ trans('response.please_login_first') }}')
                return;
            }


            customerId = $.trim(localStorage.getItem("customerId"));
            $.ajax({
                type: 'post',
                url: "{{ url('') }}" + '/api/client/compare?product_id=' + $(input).attr('data-id') +
                    '&customer_id=' + customerId,
                headers: {
                    'Authorization': 'Bearer ' + customerToken,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {
                    $('#event-loading').css('display', 'block');
                },
                success: function(data) {
                    $('#event-loading').css('display', 'none');
                    if (data.status == 'Success') {
                        toastr.success('{{ trans('response.compare-add-success') }}')

                    }
                },
                error: function(data) {
                    $('#event-loading').css('display', 'none');
                },
            });
        }

        function quiclViewData(input) {
            product_type = $.trim($(input).attr('data-type'));
            product_id = $.trim($(input).attr('data-id'));
            $(".quick-view-modal-show").html('');
            $.ajax({
                type: 'get',
                url: "{{ url('') }}" + '/api/client/products/' + product_id +
                    '?getCategory=1&getDetail=1&language_id=' + languageId + '&currency=' + localStorage.getItem(
                        "currency"),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {
                    $('#event-loading').css('display', 'block');
                },
                success: function(data) {
                    $('#event-loading').css('display', 'none');
                    if (data.status == 'Success') {
                        const templ = document.getElementById("quick-view-template");
                        const clone = templ.content.cloneNode(true);
                        // clone.querySelector(".single-text-chat-li").classList.add("bg-blue-100");
                        if (data.data.product_gallary != null && data.data.product_gallary != 'null' && data
                            .data.product_gallary != '') {
                            if (data.data.product_gallary.detail != null && data.data.product_gallary.detail !=
                                'null' && data.data.product_gallary.detail != '') {
                                clone.querySelector(".quick-view-image").setAttribute('src', data.data
                                    .product_gallary.detail[1].gallary_path);
                            }
                        }
                        if (data.data.detail != null && data.data.detail != 'null' && data.data.detail != '') {
                            clone.querySelector(".quick-view-image").setAttribute('alt', data.data.detail[0]
                                .title);
                        }
                        if (data.data.category != null && data.data.category != 'null' && data.data.category !=
                            '') {
                            for (j = 0; j < data.data.category.length; j++) {
                                if (data.data.category[j].category_detail != null && data.data.category[j]
                                    .category_detail != 'null' && data.data.category[j].category_detail != '') {
                                    if (data.data.category[j].category_detail.detail != null && data.data
                                        .category[j].category_detail.detail != 'null' && data.data.category[j]
                                        .category_detail.detail != '') {
                                        clone.querySelector(".quick-view-categories").innerHTML =
                                            '<li><a href="javascript:void(0)">' + data.data.category[j]
                                            .category_detail.detail[0]
                                            .name + '</a></li>';
                                    }
                                }
                            }
                        }
                        if (data.data.detail != null && data.data.detail != 'null' && data.data.detail != '') {
                            clone.querySelector(".quick-view-product-name").innerHTML = data.data.detail[0]
                                .title;
                            clone.querySelector(".quick-view-desc").innerHTML = data.data.detail[0].desc
                                .replace(/<\/?[^>]+>/gi, '').substring(0, 250)
                        }
                        clone.querySelector(".quick-view-product-id").innerHTML = data.data.product_id;

                        if (data.data.product_type == 'simple') {
                            if (data.data.product_discount_price == '' || data.data.product_discount_price ==
                                null || data.data.product_discount_price == 'null') {
                                clone.querySelector(".quick-view-price").innerHTML = '<ins>' + data.data
                                    .product_price_symbol + '</ins>';
                            } else {
                                clone.querySelector(".quick-view-price").innerHTML = '<ins>' + data.data
                                    .product_discount_price + '</ins> <del>' + data.data
                                    .product_price_symbol +
                                    '</del>';
                            }

                            clone.querySelector(".quick-view-add-to-cart").setAttribute('onclick',
                                'addToCart(this)');
                            clone.querySelector(".quick-view-add-to-cart").setAttribute('data-id', data.data
                                .product_id);
                        } else {
                            if (data.data.product_combination != null && data.data.product_combination !=
                                'null' && data.data.product_combination != '') {
                                clone.querySelector(".quick-view-price").innerHTML = '<ins>' + data.data
                                    .product_combination[0].product_price_symbol + '</ins>';
                            }
                            clone.querySelector(".quick-view-qty").classList.add('d-none');
                            clone.querySelector(".quick-view-add-to-cart").setAttribute('href', '/product/' +
                                data
                                .data.product_id + '/' + data
                                .data.product_slug);
                            clone.querySelector(".quick-view-add-to-cart").innerHTML = 'View Detail';
                        }
                        $(".quick-view-modal-show").html('');
                        $(".quick-view-modal-show").append(clone);
                    }
                },
                error: function(data) {
                    $('#event-loading').css('display', 'none');
                },
            });
        }

        function buyNow(input) {
            if (loggedIn == '1') {
                addToCart(input);
                window.location.href = '{{ url('checkout') }}';
            } else {
                toastr.error('Please login');
            }
        }

        function addToCart(input) {
            product_type = $.trim($(input).attr('data-type'));
            product_id = $.trim($(input).attr('data-id'));
            product_combination_id = '';
            if (product_type == 'variable') {
                if ($.trim($("#product_combination_id").val()) == '' || $.trim($("#product_combination_id").val()) ==
                    'null') {
                    toastr.error("{{ trans('response.select-combination') }}")
                    return;
                }
                product_combination_id = $("#product_combination_id").val();
            }
            if ($(input).parents('tr').data('row') == 'wishlistRows') {
                $(input).parents('tr').find('.wishlistProductQty').attr('id', 'quantity-input');
            }
            qty = $.trim($("#quantity-input").val());
            $(input).parents('tr').find('.wishlistProductQty').removeAttr('id');
            if (qty == '' || qty == 'undefined' || qty == null) {
                qty = 1;
            }
            addToCartFun(product_id, product_combination_id, cartSession, qty);
        }

        function addToCartFun(product_id, product_combination_id, cartSession, qty, ik, len) {
            console.log("i =" + ik, "len =" + len);
            console.log(product_id, product_combination_id, cartSession, qty);
            if (loggedIn == '1') {
                url = "{{ url('') }}" + '/api/client/cart?session_id=' + cartSession + '&product_id=' + product_id +
                    '&qty=' + qty + '&product_combination_id=' + product_combination_id;
            } else {
                url = "{{ url('') }}" + '/api/client/cart/guest/store?session_id=' + cartSession + '&product_id=' +
                    product_id + '&qty=' + qty + '&product_combination_id=' + product_combination_id;
            }
            $.ajax({
                type: 'post',
                url: url,
                headers: {
                    'Authorization': 'Bearer ' + customerToken,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {},
                success: function(data) {
                    console.log('addToCartFun');
                    // console.log(data);
                    if (data.status == 'Success') {
                        if (loggedIn != '1') {
                            localStorage.setItem("cartSession", data.data.session);
                            menuCart(data.data.session);
                        } else {
                            menuCart('');
                        }
                        if (ik != null && len != null && ik == len - 1) {
                            toastr.success('Cart updated successfully');
                        } else if (ik == null && len == null) {
                            toastr.success('{{ trans('response.add-to-cart-success') }}');
                        }


                    } else if (data.status == 'Error') {
                        if (ik != null && len != null && ik == len - 1) {
                            toastr.error('{{ trans('response.some_thing_went_wrong') }}');
                        } else if (ik == null && len == null) {
                            toastr.error('{{ trans('response.some_thing_went_wrong') }}');
                        }

                    }
                },
                error: function(data) {
                    $('#loading').css('display', 'none');
                    if (data.responseJSON.status == 'Error') {
                        // toastr.error(data.responseJSON.message);
                        toastr.error('{{ trans('response.some_thing_went_wrong') }}');
                    }

                },
            });

        }

        function menuCart(cartSession) {
            if (loggedIn == '1') {
                url = "{{ url('') }}" + '/api/client/cart?session_id=' + cartSession + '&currency=' + localStorage
                    .getItem("currency");
            } else {
                url = "{{ url('') }}" + '/api/client/cart/guest/get?session_id=' + cartSession + '&currency=' +
                    localStorage.getItem("currency");
            }
            $.ajax({
                type: 'get',
                url: url,
                headers: {
                    'Authorization': 'Bearer ' + customerToken,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {
                    // $('#loading').css('display', 'block');
                },
                success: function(data) {
                    // console.log('menucart');
                    // console.log(data);
                    if (data.status == 'Success') {
                        total_price = 0;
                        price = 0;
                        discount = 0;
                        afterDiscountPrice = 0;
                        imageSrc = '';
                        imageAlt = '';
                        name = '';
                        currrency = '';
                        var qtyAmountRow = '';
                        var deleteRow = '';
                        var totalRow = '';
                        var clone = '';
                        for (i = 0; i < data.data.length; i++) {
                            var afterDiscountPrice = data.data[i].discount_price;
                            if (data.data[i].product_type == 'variable') {
                                for (k = 0; k < data.data[i].combination.length; k++) {
                                    if (data.data[i].product_combination_id == data.data[i].combination[k]
                                        .product_combination_id) {
                                        if(afterDiscountPrice > 0){
                                            price = afterDiscountPrice;
                                        }else{
                                            price = data.data[i].combination[k].price;
                                        }
                                        if (data.data[i].combination[k].gallary != null && data.data[i]
                                            .combination[k].gallary != 'null' && data.data[i].combination[k].gallary != '') {
                                            imageSrc = '/gallary/' + data.data[i].combination[k].gallary.gallary_name;
                                            imageAlt = data.data[i].combination[k].gallary.gallary_name;
                                            name = data.data[i].product_detail[0].title + ' ';
                                            for (loop = 0; loop < data.data[i].product_combination
                                                .length; loop++) {
                                                if (data.data[i].product_combination[loop].length - 1 == loop) {
                                                    name += data.data[i].product_combination[loop].variation
                                                        .detail[0].name;
                                                } else {
                                                    name += data.data[i].product_combination[loop].variation
                                                        .detail[0].name + '-';
                                                }
                                            }
                                        }
                                        k = data.data[i].combination.length;
                                    }
                                }
                                if (data.data[i].currency != '' && data.data[i].currency != 'null' && data.data[
                                        i]
                                    .currency != null) {
                                    if (data.data[i].currency.symbol_position == 'left') {
                                        qtyAmountRow = '<td class="border-0 cart-block-top">' +
                                            '<h5 class="text-dark">' + name + 'x <span class="cart-quantity">' +
                                            data.data[i].qty + '</span></h5>' +
                                            '<h6 class="text-dark">' + data.data[i].currency.code + ' ' +
                                                price + '</h6>' +
                                            '</td>';
                                    } else {
                                        qtyAmountRow = '<td class="border-0 cart-block-top">' +
                                            '<h5 class="text-dark">' + name + 'x <span class="cart-quantity">' +
                                            data.data[i].qty + '</span></h5>' +
                                            '<h6 class="text-dark">' + price + ' ' + data.data[i].currency
                                            .code + '</h6>' +
                                            '</td>';
                                    }
                                    deleteRow = '<td class="border-0 cart-block-top">' +
                                        '<a href="javascript:void(0);" data-id="' + data.data[i].product_id +
                                        '" data-combination-id="' + data.data[i].product_combination_id +
                                        '" onclick="removeCartItem(this)" class="gray_title">' +
                                        '<i class="fa fa-trash-o" aria-hidden="true"></i></a>' +
                                        '</td>';
                                }
                            } else {
                                if (data.data[i].product_gallary != null && data.data[i].product_gallary !=
                                    'null' && $.trim(data.data[i].product_gallary) != '') {
                                    if (data.data[i].product_gallary.detail != null && data.data[i]
                                        .product_gallary.detail != 'null' && $.trim(data.data[i].product_gallary
                                            .detail) != '') {
                                        imageSrc = data.data[i].product_gallary.detail[2].gallary_path;
                                    }
                                }
                                if (data.data[i].product_detail != null && data.data[i].product_detail !=
                                    'null' && $.trim(data.data[i].product_detail) != '') {
                                    imageAlt = data.data[i].product_detail[0].title;
                                    name = data.data[i].product_detail[0].title;
                                }
                                if(afterDiscountPrice > 0){
                                    price = afterDiscountPrice;
                                }else{
                                    price = data.data[i].price;
                                }
                                if (data.data[i].currency != '' && data.data[i].currency != 'null' && data.data[i]
                                    .currency != null) {
                                    if (data.data[i].currency.symbol_position == 'left') {
                                        qtyAmountRow = '<td class="border-0 cart-block-top">' +
                                            '<h5 class="text-dark">' + name + 'x <span class="cart-quantity">' +
                                            data.data[i].qty + '</span></h5>' +
                                            '<h6 class="text-dark">' + data.data[i].currency.code + ' ' +
                                                price + '</h6>' +
                                            '</td>';
                                    } else {
                                        qtyAmountRow = '<td class="border-0 cart-block-top">' +
                                            '<h5 class="text-dark">' + name + 'x <span class="cart-quantity">' +
                                            data.data[i].qty + '</span></h5>' +
                                            '<h6 class="text-dark">' + price + ' ' + data.data[i].currency
                                            .code + '</h6>' +
                                            '</td>';
                                    }
                                    deleteRow = '<td class="border-0 cart-block-top">' +
                                        '<a href="javascript:void(0);" data-id="' + data.data[i].product_id +
                                        '" data-combination-id="' + data.data[i].product_combination_id +
                                        '" onclick="removeCartItem(this)" class="gray_title">' +
                                        '<i class="fa fa-trash-o" aria-hidden="true"></i></a>' +
                                        '</td>';
                                }
                            }

                            total_price += (price * data.data[i].qty);

                            if (imageSrc.startsWith('/')) {
                                imageSrc = imageSrc.substring(1);
                            }

                            clone += '<tr class="d-flex align-items-center">' +
                                '<th scope="row">' +
                                '<div class="cart_img">' +
                                '<img src="{{ asset('/') }}' + imageSrc + '" alt="image">' +
                                '</div>' +
                                '</th>' +
                                qtyAmountRow +
                                deleteRow +
                                '</tr>';
                            $("#top-cart-product-template").html(clone);

                            currrency = data.data[i].currency;
                        }
                        if (currrency != '' && currrency != 'null' && currrency != null) {
                            if (currrency.symbol_position == 'left') {
                                total_price = currrency.code + ' ' + total_price;
                            } else {
                                total_price = total_price + ' ' + currrency.code;
                            }
                        }
                        if (data.data.length > 0) {
                            totalRow += '<h6 class="text-dark mr-1">' + total_price + '</h6>';
                            $("#total-menu-cart-product-count").html(data.data.length);
                            $("#mobile-total-menu-cart-product-count").html(data.data.length);
                            $("#top-cart-product-total").html(totalRow);
                        } else {
                            $("#mobile-total-menu-cart-product-count").html(data.data.length);
                            $("#top-cart-product-template").html(
                                '<tr><td class="text-dark">No Items</td></tr>');
                            $("#top-cart-product-total").html('');
                            $("#total-menu-cart-product-count").html(0);
                        }
                    } else {
                        toastr.error('{{ trans('response.some_thing_went_wrong') }}');
                    }
                },
                error: function(data) {
                    $('#loading').css('display', 'none');
                },
            });
        }

        $(document).on('click', '.quantity-plus', function() {
            var quantity = $('#quantity-input').val();
            $('#quantity-input').val(parseInt(quantity) + 1);
        })

        $(document).on('click', '.quantity-minus', function() {
            var quantity = $('#quantity-input').val();
            if (quantity > 1)
                $('#quantity-input').val(parseInt(quantity) - 1);
        });

        $(".language-default").click(function(e) {
            e.preventDefault();
            languageId = $(this).attr('data-id');
            languageName = $(this).attr('data-name');
            localStorage.setItem("languageId", languageId);
            localStorage.setItem("languageName", languageName);
            $(".language-default-name").html(languageName);
            var href = $(this).attr('href');
            window.location.href = href;
        });

        $(".mobile-language").change(function(e) {
            e.preventDefault();
            languageId = $(this).val();
            languageName = $(".mobile-language option:selected").text();
            localStorage.setItem("languageId", languageId);
            localStorage.setItem("languageName", languageName);
            var href = $(".mobile-language option:selected").attr('data-link');
            window.location.href = href;
        });


        $('.cat-dropdown').click(function() {
            var category_id = $(this).attr('data-id');
            var category_name = $(this).attr('data-name');
            $('.selected_category').attr('data-id', category_id);
            $('.selected_category').html(category_name);
        });

        $('#search-input').on('keyup', function(e) {
            if (e.key === 'Enter' || e.keyCode === 13) {
                var searchInput = $('#search-input').val();
                if (searchInput == "") {
                    toastr.error("Search input empty!!!")
                } else {
                    var url = "{{ url('/shop') }}" + '?search=' + searchInput;
                    var catgory_id = $('.selected_category').attr('data-id');
                    if (catgory_id != '' && catgory_id !== undefined)
                        url += "&category=" + catgory_id;
                    window.location.href = url;
                }
            }
        });


        $(".selected-currency").click(function(e) {
            e.preventDefault();
            currencyId = $(this).attr('data-id');
            currencycode = $(this).attr('data-code');
            localStorage.setItem("currency", currencyId);
            localStorage.setItem("currencyCode", currencycode);
            $("#selected-currency").html(currencycode);
            var href = $(this).attr('href');
            location.reload();
        });

        $(".currency").change(function(e) {
            e.preventDefault();
            lcurrencyId = $(this).attr('data-id');
            currencycode = $(this).attr('data-code');
            localStorage.setItem("currency", currencyId);
            localStorage.setItem("currencyCode", currencycode);
            location.reload();
        });

        $('.log_out').click(function() {
            // $('body').click(function() {
            url = "{{ url('') }}" + '/api/client/customer_logout';

            $.ajax({
                type: 'post',
                url: url,
                headers: {
                    'Authorization': 'Bearer ' + customerToken,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data.status == 'Success') {
                        localStorage.removeItem("customerToken");
                        localStorage.removeItem("loginErrorMessage");
                        localStorage.removeItem("loginSuccessMessage");
                        localStorage.removeItem("customerHash");
                        localStorage.removeItem("customerLoggedin");
                        localStorage.removeItem("customerId");
                        localStorage.removeItem("customerFname");
                        localStorage.removeItem("customerLname");
                        localStorage.removeItem("cartSession", '');
                        location.reload();
                    }
                },
                error: function(data) {},
            });
        });

        function cartItem(cartSession) {
            if (loggedIn == '1') {
                url = "{{ url('') }}" + '/api/client/cart?session_id=' + cartSession + '&language_id=' + languageId +
                    '&currency=' + localStorage.getItem("currency");
            } else {
                url = "{{ url('') }}" + '/api/client/cart/guest/get?session_id=' + cartSession + '&language_id=' +
                    languageId + '&currency=' + localStorage.getItem("currency");
            }

            $.ajax({
                type: 'get',
                url: url,
                headers: {
                    'Authorization': 'Bearer ' + customerToken,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {
                    // $('#loading').css('display', 'block');
                },
                success: function(data) {
                    if (data.status == 'Success') {
                        $("#cartItem-product-show").html('');
                        const templ = document.getElementById("cartItem-Template");
                        total_price = 0;
                        total_discount = 0;
                        total_sub_total = 0;
                        for (i = 0; i < data.data.length; i++) {
                            price = 0; discount = 0; afterDiscountPrice = 0; imgSrc = ''; imgAlt = ''; itemName = ''; subTotal = 0;
                            afterDiscountPrice = data.data[i].discount_price; 
                            $("#totalItems").val(i + 1);
                            if (data.data[i].product_type == 'variable') {
                                for (k = 0; k < data.data[i].combination.length; k++) {
                                    if (data.data[i].product_combination_id == data.data[i].combination[k]
                                        .product_combination_id) {
                                        subTotal = data.data[i].combination[k].price;
                                        if(afterDiscountPrice > 0){
                                            price = afterDiscountPrice;
                                            discount = data.data[i].combination[k].price - afterDiscountPrice;
                                        }else{
                                            price = data.data[i].combination[k].price;
                                        }
                                        if (data.data[i].combination[k].gallary != null) {
                                            imgSrc = '/gallary/' + data.data[i].combination[k].gallary.gallary_name;
                                            imageAlt = data.data[i].combination[k].gallary.gallary_name;
                                            itemName = data.data[i].product_detail[0].title;
                                            for (loop = 0; loop < data.data[i].product_combination
                                                .length; loop++) {
                                                if (data.data[i].product_combination.length - 1 == loop) {
                                                    itemName += data.data[i].product_combination[loop].variation
                                                        .detail[0].name;
                                                } else {
                                                    itemName += data.data[i].product_combination[loop].variation
                                                        .detail[0].name + '-';
                                                }
                                            }
                                        }
                                        k = data.data[i].combination.length;
                                    }
                                }
                                if (data.data[i].product_detail != null && $.trim(data.data[i]
                                        .product_detail) != '') {
                                    imgAlt = data.data[i].product_detail[0].title;
                                    itemName = data.data[i].product_detail[0].title;
                                }
                            } else {
                                if (data.data[i].product_gallary != null && $.trim(data.data[i]
                                        .product_gallary) != '') {
                                    if (data.data[i].product_gallary.detail != null && $.trim(data.data[i]
                                            .product_gallary.detail) != '') {
                                        imgSrc = data.data[i].product_gallary.detail[2].gallary_path;
                                    }
                                }
                                if (data.data[i].product_detail != null && $.trim(data.data[i]
                                        .product_detail) != '') {
                                    imgAlt = data.data[i].product_detail[0].title;
                                    itemName = data.data[i].product_detail[0].title;
                                }
                                subTotal = data.data[i].price;
                                if(afterDiscountPrice > 0){
                                    price = afterDiscountPrice;
                                    discount = data.data[i].price - afterDiscountPrice;
                                }else{
                                    price = data.data[i].price;
                                }
                            }
                            if (data.data[i].currency != '' && data.data[i].currency != 'null' && data.data[i]
                                .currency != null) {
                                if (data.data[i].currency.symbol_position == 'left') {
                                    sum = +data.data[i].qty * +price;
                                    cartItemTotal = data.data[i].currency.code + ' ' + sum.toFixed(2);
                                    cartItemPrice = data.data[i].currency.code + ' ' + (Number(price)).toFixed(2);
                                } else {
                                    sum = +data.data[i].qty * +price;
                                    cartItemTotal = sum.toFixed(2) + ' ' + data.data[i].currency.code;
                                    cartItemPrice = price.toFixed(2) + ' ' + data.data[i].currency.code;
                                }
                            } else {
                                cartItemPrice = (Number(price)).toFixed(2);
                            }
                            itemQty = +data.data[i].qty;
                            $(".cartItem-qty").attr('id', 'quantity' + i);

                            total_price += (price * itemQty);
                            total_discount += (discount * itemQty);
                            total_sub_total += (subTotal * itemQty);
                            
                            tbodyRow = '<tr class="cartItem-row" product_combination_id="' + data.data[i]
                                .product_combination_id + '" product_id="' + data.data[i].product_id +
                                '" product_type="' + data.data[i].product_type + '">' +
                                '<th scope="row">' +
                                '   <div class="cart_imgss">' +
                                '      <img src="' + imgSrc + '" alt="">' +
                                '   </div>' +
                                '</th>' +
                                '<td class="cart_td gray_title cart-product-name-info">' +
                                '   <div class="product_des">' +
                                '      <h3 class="cart-product-description cartItem-name">' + itemName +
                                '</h3>' +
                                '   </div>' +
                                '</td>' +
                                '<td class="gray_title cart-product-grand-total"><span class="cart-grand-total-price">' +
                                cartItemPrice + '</span></td>' +
                                '<td class="gray_title cart-product-quantity">' +
                                '   <div class="qty quant-input">' +
                                '      <span class="minus" onclick="decreaseCartInput($(this).next())">-</span>' +
                                '      <input type="number" class="count cartItem-qty cart_input_number" name="qty" value="' +
                                itemQty + '" id="input_cart_number">' +
                                '      <span class="plus" onclick="increaseCartInput($(this).prev())">+</span>' +
                                '   </div>' +
                                '</td>' +
                                '<td class="gray_title cart-product-grand-total"><span class="cart-grand-total-price">' +
                                cartItemTotal + '</span></td>' +
                                '<td class="gray_title remove-item"><a href="javascript:void(0)" class="gray_title cartItem-remove" onclick="removeCartItem(this)" data-id="' +
                                data.data[i].product_id + '" data-combination-id="' + data.data[i]
                                .product_combination_id +
                                '"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>' +
                                '</tr>';
                            $("#cartItem-product-show").append(tbodyRow);


                            // const temp1 = document.getElementById("cartItem-grandtotal-template");
                            // const clone1 = temp1.content.cloneNode(true);
                            if (data.data[i].currency != '' && data.data[i].currency != 'null' && data.data[i]
                                .currency != null) {
                                if (data.data[i].currency.symbol_position == 'left') {
                                    $(".caritem-subtotal").html(data.data[i].currency.code + ' ' + total_sub_total
                                        .toFixed(2));
                                    $(".caritem-discount-coupon").html(data.data[i].currency.code + ' ' + total_discount
                                        .toFixed(2));
                                    $(".caritem-subtotal").attr('price', total_price.toFixed(2));
                                    $(".caritem-subtotal").attr('price-symbol', data.data[i].currency.code +
                                        ' ' + total_price.toFixed(2));
                                    $(".caritem-grandtotal").html(data.data[i].currency.code + ' ' + total_price
                                        .toFixed(2));
                                } else {
                                    $(".caritem-subtotal").html(total_sub_total.toFixed(2) + ' ' + data.data[i]
                                        .currency.code);
                                    $(".caritem-discount-coupon").html(total_discount.toFixed(2) + ' ' + data.data[i]
                                        .currency.code);
                                    $(".caritem-subtotal").attr('price', total_price.toFixed(2));
                                    $(".caritem-subtotal").attr('price-symbol', data.data[i].currency.code +
                                        ' ' + total_price.toFixed(2));
                                    $(".caritem-grandtotal").html(total_price.toFixed(2) + ' ' + data.data[i]
                                        .currency.code);
                                }
                            }
                        }

                        if (data.data.length > 0) {
                            $("#updateAndCouponRow").removeClass('d-none');
                        } else {
                            $("#updateAndCouponRow").addClass('d-none');
                        }

                        couponCart = $.trim(localStorage.getItem("couponCart"));
                        if (couponCart != 'null' && couponCart != '') {
                            $("#coupon_code").val(couponCart);
                            couponCartItem();
                        }

                    } else {
                        toastr.error('{{ trans('response.some_thing_went_wrong') }}');
                    }
                },
                error: function(data) {
                    $('#loading').css('display', 'none');
                },
            });
        }

        function removeCartItem(input) {
            product_id = $.trim($(input).attr('data-id'));
            product_combination_id = $.trim($(input).attr('data-combination-id'));
            if (product_combination_id == null || product_combination_id == 'null') {
                product_combination_id = '';
            }

            if (loggedIn == '1') {
                url = "{{ url('') }}" + '/api/client/cart/delete?session_id=' + cartSession + '&product_id=' +
                    product_id +
                    '&product_combination_id=' + product_combination_id + '&language_id=' + languageId;
            } else {
                url = "{{ url('') }}" + '/api/client/cart/guest/delete?session_id=' + cartSession + '&product_id=' +
                    product_id + '&product_combination_id=' + product_combination_id + '&language_id=' + languageId;
            }

            $.ajax({
                type: 'DELETE',
                url: url,
                headers: {
                    'Authorization': 'Bearer ' + customerToken,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {
                    // $('#loading').css('display', 'block');
                },
                success: function(data) {
                    $('#event-loading').css('display', 'none');
                    if (data.status == 'Success') {
                        $(input).closest('tr').remove();
                        // cartItem(cartSession);
                        menuCart(cartSession);
                        toastr.error('Product removed from cart');
                    } else {
                        toastr.error('{{ trans('response.some_thing_went_wrong') }}');
                    }
                },
                error: function(data) {
                    $('#loading').css('display', 'none');
                },
            });
        }
    </script>



    <script>
        $(document).on('keyup', '#search-input', function() {
            var name = $(this).val();
            if (name.length > 0) {
                $.ajax({
                    url: '{{ route('search-product') }}',
                    dataType: 'json',
                    method: 'get',
                    data: {
                        name: name
                    },
                    success: function(response) {

                        if (response.length > 0) {
                            $('#searchBox > ul').html('');
                            var results = '';
                            $.each(response, function(i, e) {
                                price = e.price;
                                newPrice = e.discount_price;
                                results += '<a href="/product/' + e.id + '/' + e.product_slug +
                                    '" style="text-decoration: none;">' +
                                    '<li class="dropdown-item">' +
                                    '<img class="img-thumbnail" src="{{ asset('/gallary') }}/' +
                                    e.gallary_name +
                                    '" style="width: 70px; height: 60px;"> ' + e.title +
                                    ' (<del id="cut-product-card-price">Rs. ' + price + '</del> ' + ' Rs. ' + newPrice + ')'
                                    '</li>' +
                                    '</a>';
                            });

                            $('#searchBox > ul').html(results);
                            $('#searchBox').addClass('show');
                            $('#searchBox > ul').addClass('show');
                        } else {
                            $('#searchBox > ul').html('');
                            $('#searchBox').removeClass('show');
                            $('#searchBox > ul').removeClass('show');
                        }
                    },
                    error: function(error) {

                    }
                });
            } else {
                $('#searchBox > ul').html('');
                $('#searchBox').removeClass('show');
                $('#searchBox > ul').removeClass('show');
            }
        });

        $('#search-clear').on('click', function() {
            $('#search-input').val('');
        })

        $('body').click(function(e) {
            if (e.target.id == "searchBox" || e.target.id == "search-input") {
                return;
            }
            if ($(e.target).closest('#searchBox').length) {
                return;
            }
            $('#searchBox > ul').html('');
            $('#searchBox').removeClass('show');
            $('#searchBox > ul').removeClass('show');
        });


        function loaderOnLoad() {
            $("#loading").css('display', 'none');
        }



        function trackMyOrder(frompage){
            if(frompage == '' || frompage == null){
                var orderID = $("#headerTrackOrderID").val();
            } else if(frompage == 'trackpage'){
                var orderID = $("#trackPageOrderID").val();
            }
            
            if(orderID == '' || orderID == null){
                toastr.error("Please enter order Id");
                return false;
            } 
            var trackrurl = "{{ route('trackOrderStatus', ':order_id') }}";
            trackrurl = trackrurl.replace(':order_id', orderID);
            $.ajax({
                url: trackrurl,
                type: "get",
                data: {'order_id': orderID},
                success: function(response){
                    if(response.validation_error){
                        toastr.error(response.validation_error);
                    } else if(response.error){
                        toastr.error(response.error);
                    } else{
                        location.href = trackrurl;
                    }
                }
            });
        }
    </script>

    @yield('script')

    @yield('scripts')

    <script>
        // setTimeout(() => {

        //     $(".latest_slider").not('.slick-initialized').slick();
        //     }, 1000);
    </script>
</body>

</html>
