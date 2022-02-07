@extends('layouts.master')
@section('content')

    @include(isset(getSetting()['slider_style']) ? 'includes.sliders.slider-'.getSetting()['slider_style'] :
    'includes.sliders.slider-style1')

    <div id="sub_body">
        <!--========================== RECOMMENDED START  -->
        <section id="recommended" class="section_bg padding">
            <div class="container">
                <div class="section_title">
                    <h1 class="mb-5 position-relative font-weight-bold">
                        Featured Products
                    </h1>
                </div>
                <div class="row">
                    <div class="col-md-12">


                        @include('includes.loader')
                        <div class="slick_slider" id="featured-product-section">



                            {{-- <div class="item_block bg-white position-relative p-3">
                                <div class="img_block">
                                    <a href="product.product.htmlhtml">
                                        <img src="https://demo2.madrasthemes.com/cartzilla/grocery/wp-content/uploads/sites/5/2020/03/1.jpg"
                                            alt="imageimg" class="img-fluid" /></a>
                                </div>
                                <div class="content_block pb-3">
                                    <small>Lotions and Creams</small>
                                    <h4>Moisture Body Lotion (250ml)</h4>
                                    <span class="font-weight-bold">$10 </span>
                                </div>
                                <div class="wish_list_block">
                                    <a href=""><i class="fa fa-heart" aria-hidden="true"></i></a>
                                </div>
                                <div class="dis_block">
                                    <h5>New</h5>
                                </div>
                                <div class="icon_group">
                                    <div class="cart_blocks">
                                        <a href="">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="cart_block">
                                        <a href="">
                                            <i class="fa fa-eye" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="cart_blockss">
                                        <a href="">
                                            <i class="fa fa-exchange" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div> --}}

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="full_banner" id="banner-section">
                            {{-- <img src="https://demo.xpeedstudio.com/marketov2/grocery/wp-content/uploads/sites/12/2018/10/ad-min.png"
                                alt="image" class="img-fluid" /> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--========================== RECOMMENDED END  -->

        <!--========================== SHOP CATEGORY START  -->
        <section id="shop_category" class="section_bg">
            <div class="container">
                <div class="section_title">
                    <h1 class="mb-5 position-relative font-weight-bold">
                        Shop by Category
                    </h1>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @include('includes.loader')
                        <div class="category_list" id="category-section">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--========================== SHOP CATEGORY END  -->

        <!--======================== FEATURE START  -->
        <section id="recommended" class="section_bg padding">
            <div class="container">
                <div class="section_title">
                    <h1 class="mb-5 position-relative font-weight-bold">
                        Latest Products
                    </h1>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @include('includes.loader')
                        <div class="latest_product_slider" id="latest-product-section">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--======================== FEATURE END  -->
        <!--======================== DISCOUNTED START  -->
        <section id="recommended" class="section_bg padding_button discounted_section">
            <div class="container">
                <div class="section_title">
                    <h1 class="mb-5 position-relative font-weight-bold">
                        Discounted Products
                    </h1>
                </div>
                @include('includes.loader')
                <div class="row" id="product-list-section">

                    {{-- <div class="col-md-4">
                        <div class="item_block bg-white position-relative p-3 mb-lg-0 mb-4">
                            <div class="img_block">
                                <a href="product.html">
                                    <img src="https://demo2.madrasthemes.com/cartzilla/grocery/wp-content/uploads/sites/5/2020/03/1.jpg"
                                        alt="imageimg" class="img-fluid" /></a>
                            </div>
                            <div class="content_block pb-3">
                                <small>Lotions and Creams</small>
                                <h4>Moisture Body Lotion (250ml)</h4>
                                <span class="">$10 </span>
                            </div>
                            <div class="wish_list_block">
                                <a href=""><i class="fa fa-heart" aria-hidden="true"></i></a>
                            </div>
                            <div class="dis_block">
                                <h5>Sale</h5>
                            </div>
                            <div class="icon_group">
                                <div class="cart_blocks">
                                    <a href="" tabindex="0">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                                </div>
                                <div class="cart_block">
                                    <a href="" tabindex="0">
                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                </div>
                                <div class="cart_blockss">
                                    <a href="" tabindex="0">
                                        <i class="fa fa-exchange" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}


                </div>
                <div class="row">
                    <div class="col-md-12">

                        <div class="img_big_sale pt-md-5 pt-3" id="banner-section2">
                            {{-- <img src="https://montechbd.com/shopist/demo/public/images/promo3.png" class="img-fluid"
                                alt="image" /> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--======================== DISCOUNTED END  -->
        <!--============================= TESTIMONIAL  START============================ -->
        {{-- <section id="testimonial" class="section_bg position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_title">
                            <h1 class="mb-5 position-relative font-weight-bold">
                                Testimonial
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 m-auto">
                        <div class="slick_testimonial">
                            <div class="text-center active m-auto">
                                <p class="our-services-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Architecto aliquid saepe quibusdam soluta dolore dolor quas
                                    voluptatibus. Recusandae tempora aspernatur, dolor quas
                                    voluptatibus. Recusandae, consequatur neque.
                                </p>

                                <div
                                    class="
                    testimonial-image-content
                    d-block d-lg-flex
                    justify-content-center
                  ">
                                    <div class="image-block mr-0 mr-lg-4">
                                        <img src="https://montechbd.com/shopist/demo/public/uploads/1616786115-h-100-1.png"
                                            class="m-auto img-fluid" alt="imageee" />
                                    </div>
                                    <div
                                        class="
                      testimonial-content
                      d-flex
                      justify-content-center
                      flex-column
                      mt-3 mt-md-4 mt-lg-0
                    ">
                                        <h3 class="testimonial-title font-weight-bold">
                                            Jessya Inn
                                        </h3>
                                        <p class="dark-text">Lorem ipsum dolor</p>
                                        <ul
                                            class="
                        d-flex
                        justify-content-center
                        social-icon-testimonial
                      ">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center active m-auto">
                                <p class="our-services-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Architecto aliquid saepe quibusdam soluta dolore dolor quas
                                    voluptatibus. Recusandae tempora aspernatur, dolor quas
                                    voluptatibus. Recusandae, consequatur neque.
                                </p>

                                <div
                                    class="
                    testimonial-image-content
                    d-block d-lg-flex
                    justify-content-center
                  ">
                                    <div class="image-block mr-0 mr-lg-4">
                                        <img src="https://montechbd.com/shopist/demo/public/uploads/1616786115-h-100-1.png"
                                            class="m-auto img-fluid" alt="imageee" />
                                    </div>
                                    <div
                                        class="
                      testimonial-content
                      d-flex
                      justify-content-center
                      flex-column
                      mt-3 mt-md-4 mt-lg-0
                    ">
                                        <h3 class="testimonial-title font-weight-bold">
                                            Jessya Inn
                                        </h3>
                                        <p class="dark-text">Lorem ipsum dolor</p>
                                        <ul
                                            class="
                        d-flex
                        justify-content-center
                        social-icon-testimonial
                      ">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <!--============================= TESTIMONIAL  END ============================ -->
        <!--============================= FACILITIES  START ============================ -->
        <section id="facilities" class="padding section_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section_title">
                            <h1 class="mb-5 position-relative font-weight-bold">
                                Latest From The Blog
                            </h1>
                        </div>
                    </div>
                </div>
                @include('includes.loader')
                <div class="row" id="blog-section">
                    {{-- <div class="col-md-4 col-12">
                        <div class="destination-block position-relative">
                            <div class="image-block">
                                <img class="img-fluid w-100"
                                    src="https://demo.xpeedstudio.com/marketo/grocery/wp-content/uploads/sites/13/2018/04/news-3-e1594817509353.jpg"
                                    alt="image" />
                            </div>
                            <div class="content-block">
                                <a href="">
                                    <h2 class="text-dark mb-0">
                                        Introducing Summer Dresses
                                    </h2>
                                </a>
                                <p class="mb-0">
                                    <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                        &nbsp;21-March 2021</span>
                                    &nbsp; &nbsp;
                                    <span><i class="fa fa-comment-o" aria-hidden="true"></i>&nbsp;Comments</span>
                                </p>
                            </div>
                        </div>
                    </div> --}}


                </div>
            </div>
        </section>
        <!--============================= FACILITIES  END ============================ -->
    </div>

    @foreach (homePageBuilderJson() as $template)
        @if (!$template['skip'] && $template['display'])
            @include('sections.home-'.$template['template_postfix'].'-section')
        @endif
    @endforeach

@endsection
@section('script')
    <script>
        $(document).ready(function() {
            sliderMedia();
            categorySlider();
            pageMedia();
            pageMedia2();
            var url = "{{ url('') }}" +
                '/api/client/products?limit=12&getCategory=1&getDiscount=1&getDetail=1&language_id=' + 1 +
                '&sortBy=id&sortType=DESC&currency=' + 1;
            appendTo = 'product-list-section';
            
            fetchProduct(url, appendTo);


            // var url = "{{ url('') }}" +
            //     '/api/client/products?limit=12&getCategory=1&getDetail=1&language_id=' + 1 +
            //     '&sortBy=id&sortType=DESC&currency=' + 1;
            var url = "{{ url('') }}" +
                '/api/client/products?limit=10&getCategory=1&getDetail=1&language_id=' +
                1 + '&currency=' + 1;
            appendTo = 'featured-product-section';
            
            fetchProduct(url, appendTo);

            var url = "{{ url('') }}" +
                '/api/client/products?limit=12&getCategory=1&getDetail=1&language_id=' + 1 +
                '&sortBy=id&sortType=DESC&currency=' + 1;
            appendTo = 'latest-product-section';
            
            fetchProduct(url, appendTo);

            blogNews();
        });

        function fetchProduct(url, appendTo) {
            $.ajax({
                type: 'get',
                url: url,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },

                beforeSend: function() {
                    $('.section-loading').css('display', 'block');
                },

                beforeSend: function() {},

                success: function(data) {
                    if (data.status == 'Success') {
                        for (i = 0; i < data.data.length; i++) {

                            if (data.data[i].product_gallary != null && data.data[i].product_gallary != 'null' && data.data[i].product_gallary != '') {
                                if (data.data[i].product_gallary.detail != null && data.data[i].product_gallary
                                    .detail != 'null' && data.data[i].product_gallary.detail != '') {
                                    imgSrc = data.data[i].product_gallary.detail[1].gallary_path;
                                }
                            }
                            if (data.data[i].detail != null && data.data[i].detail != 'null' && data.data[i]
                                .detail != '') {
                                imgAlt = data.data[i].detail[0].title;
                            }
                            if (data.data[i].category != null && data.data[i].category != 'null' && data.data[i]
                                .category != '') {
                                if (data.data[i].category[0].category_detail != null && data.data[i].category[0]
                                    .category_detail != 'null' && data.data[i].category[0].category_detail != ''
                                ) {
                                    if (data.data[i].category[0].category_detail.detail != null && data.data[i]
                                        .category[0].category_detail.detail != 'null' && data.data[i].category[
                                            0].category_detail.detail != '') {
                                        itemName = data.data[i].category[0].category_detail.detail[0].name;
                                    }
                                }
                            }
                            if (data.data[i].detail != null && data.data[i].detail != 'null' && data.data[i]
                                .detail != '') {
                                title = data.data[i].detail[0].title;
                                href = '/product/' + data.data[i].product_id + '/' + data.data[i].product_slug;
                                var desc = data.data[i].detail[0].desc;
                                desc = desc.substring(0, 50);
                            }

                            if (data.data[i].product_type == 'simple') {
                                if ((data.data[i].product_discount_price_symbol == '' || data.data[i]
                                        .product_discount_price_symbol == null || data.data[i]
                                        .product_discount_price_symbol ==
                                        'null') ) {

                                    productCardPrice = data.data[i].product_discount_price_symbol;
                                } else if (data.data[i].product_discount_price == 0) {
                                    productCardPrice = data.data[i].product_price_symbol;
                                } else {
                                    productCardPrice = data.data[i].product_discount_price_symbol + ' <b>' +
                                        data.data[i].product_price_symbol + '</b>';
                                }
                            } else {
                                if (data.data[i].product_combination != null && data.data[i]
                                    .product_combination != 'null' && data.data[i].product_combination != '') {
                                    productCardPrice = data.data[i].product_combination[0].product_price_symbol;
                                } else {
                                    productCardPrice = data.data[i].product_discount_price_symbol + ' <b>' +
                                        data.data[i].product_price_symbol + '</b>';
                                }
                            }
                            
                            switch (appendTo) {
                                case 'product-list-section':

                                    // product = '<div class="item_block bg-white position-relative p-3">' +
                                    //     '<div class="img_block">' +
                                    //     '<a href="' + href + '">' +
                                    //     '<img src="' + imgSrc + '" alt="imageimg" class="img-fluid" /></a>' +
                                    //     '</div>' +
                                    //     '<div class="content_block pb-3">' +
                                    //     '<small>' + data.data[i].category[0].category_detail.detail[0].name +
                                    //     '</small>' +
                                    //     '<h4>' + title + '</h4>' +
                                    //     '<span class="font-weight-bold">' + productCardPrice + '</span>' +
                                    //     '</div>' +
                                    //     '<div class="wish_list_block">' +
                                    //     '<a href=""><i class="fa fa-heart" aria-hidden="true"></i></a>' +
                                    //     '</div>' +
                                    //     '<div class="dis_block">' +
                                    //     '<h5>New</h5>' +
                                    //     '</div>' +
                                    //     '<div class="icon_group">' +
                                    //     '<div class="cart_blocks">' +
                                    //     '<a href="">' +
                                    //     '<i class="fa fa-cart-plus" aria-hidden="true"></i></a>' +
                                    //     '</div>' +
                                    //     '<div class="cart_block">' +
                                    //     '<a href="">' +
                                    //     '<i class="fa fa-eye" aria-hidden="true"></i></a>' +
                                    //     '</div>' +
                                    //     '<div class="cart_blockss">' +
                                    //     '<a href="">' +
                                    //     '<i class="fa fa-exchange" aria-hidden="true"></i></a>' +
                                    //     '</div>' +
                                    //     '</div>' +
                                    //     '</div>';

                                    product = '<div class="">' +
                                        '<div class="item_block bg-white position-relative p-3 mb-lg-0 mb-4">' +
                                        '<div class="img_block">' +
                                        '<a href="' + href + '">' +
                                        '<img src="' + imgSrc + '" alt="imageimg" class="img-fluid" /></a>' +
                                        '</div>' +
                                        '<div class="content_block pb-3">' +
                                        // '<small>' + data.data[i].category[0].category_detail.detail[0].name +
                                        // '</small>' +
                                        '<h4>' + title + '</h4>' +
                                        '<span class="font-weight-bold">' + productCardPrice + '</span>' +
                                        '</div>' +
                                        '<div class="wish_list_block">' +
                                        '<a href="javascript:void(0)" onclick="addWishlist(this)" data-id="' +
                                        data.data[i].product_id + '" data-type="' + data.data[i].product_type +
                                        '" data-tip="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>' +
                                        '</div>' +
                                        '<div class="dis_block">' +
                                        '<h5>Sale</h5>' +
                                        '</div>' +
                                        '<div class="icon_group">' +
                                        '<div class="cart_blocks">' +
                                        '<a href="javascript:void(0)" onclick="addToCart(this)" data-id="' +
                                        data.data[i].product_id + '" data-type="' + data.data[i].product_type +
                                        '" data-tip="Add to Cart">' +
                                        '<i class="fa fa-cart-plus" aria-hidden="true"></i></a>' +
                                        '</div>' +
                                        '<div class="cart_block">' +
                                        '<a href="' + href + '"">' +
                                        '<i class="fa fa-eye" aria-hidden="true"></i></a>' +
                                        '</div>' +
                                        '<div class="cart_blockss">' +
                                        '<a href="">' +
                                        '<i class="fa fa-exchange" aria-hidden="true"></i></a>' +
                                        '</div>' +
                                        '</div>' +
                                        '</div>' +
                                        '</div>';


                                    if (i == 6) {
                                        return false
                                    };
                                    break;


                                case 'latest-product-section':
                                    // 
                                    
                                    // product =
                                    //     '<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12  mt-4 mb-3">' +
                                    //     '<div class="product-grid-item">' +
                                    //     '<div class="product-grid-image">' +
                                    //     '<a href="' + href + '">' +
                                    //     '<img class="pic-1 img-fluid" src="' + imgSrc + '">' +
                                    //     '</a>' +
                                    //     '<ul class="social">' +
                                    //     '<!-- <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li> -->' +
                                    //     '<li><a href="javascript:void(0)" onclick="addWishlist(this)" data-id="' +
                                    //     data.data[i].product_id + '" data-type="' + data.data[i].product_type +
                                    //     '" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>' +
                                    //     '<li><a href="javascript:void(0)" onclick="addToCart(this)" data-id="' +
                                    //     data.data[i].product_id + '" data-type="' + data.data[i].product_type +
                                    //     '" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>' +
                                    //     '</ul>' +
                                    //     '</div>' +
                                    //     '<div class="product-content">' +
                                    //     '<h4 class="title mt-2"><a href="' + href + '">' + title + '</a></h4>' +
                                    //     '<div class="price">' +
                                    //     productCardPrice +
                                    //     '</div>' +
                                    //     '<a class="add-to-cart" href="javascript:void(0)" onclick="buyNow(this)" data-id="' +
                                    //     data.data[i].product_id + '" data-type="' + data.data[i].product_type +
                                    //     '">Buy Now</a>' +
                                    //     '</div>' +
                                    //     '</div>' +
                                    //     '</div>';

                                    product = '<div class="item_block bg-white position-relative p-3">' +
                                        '<div class="img_block">' +
                                        '<a href="' + href + '">' +
                                        '<img src="' + imgSrc + '" alt="imageimg" class="img-fluid" /></a>' +
                                        '</div>' +
                                        '<div class="content_block pb-3">' +
                                        '<small>' + data.data[i].category[0].category_detail.detail[0].name +
                                        '</small>' +
                                        '<h4>' + title + '</h4>' +
                                        '<span class="font-weight-bold">' + productCardPrice + '</span>' +
                                        '</div>' +
                                        '<div class="wish_list_block">' +
                                        '<a href="javascript:void(0)" onclick="addWishlist(this)" data-id="' +
                                        data.data[i].product_id + '" data-type="' + data.data[i].product_type +
                                        '" data-tip="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>' +
                                        '</div>' +
                                        '<div class="dis_block">' +
                                        '<h5>New</h5>' +
                                        '</div>' +
                                        '<div class="icon_group">' +
                                        '<div class="cart_blocks">' +
                                        '<a href="javascript:void(0)" onclick="addToCart(this)" data-id="' +
                                        data.data[i].product_id + '" data-type="' + data.data[i].product_type +
                                        '" data-tip="Add to Cart">' +
                                        '<i class="fa fa-cart-plus" aria-hidden="true"></i></a>' +
                                        '</div>' +
                                        '<div class="cart_block">' +
                                        '<a href="' + href + '">' +
                                        '<i class="fa fa-eye" aria-hidden="true"></i></a>' +
                                        '</div>' +
                                        '<div class="cart_blockss">' +
                                        '<a href="">' +
                                        '<i class="fa fa-exchange" aria-hidden="true"></i></a>' +
                                        '</div>' +
                                        '</div>' +
                                        '</div>';
                                    if (i == 6) {
                                        return false
                                    };
                                    break;
                                case 'featured-product-section':
                                    // product = '<div class="slick-item mx-3 ">' +
                                    //     '<div class="product-grid-item">' +
                                    //     '<div class="product-grid-image">' +
                                    //     '<a href="' + href + '">' +
                                    //     '<img class="pic-1 img-fluid" src="' + imgSrc + '">' +
                                    //     '</a>' +
                                    //     '<ul class="social">' +
                                    //     '<!-- <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li> -->' +
                                    //     '<li><a href="javascript:void(0)" onclick="addWishlist(this)" data-id="' +
                                    //     data.data[i].product_id + '" data-type="' + data.data[i].product_type +
                                    //     '" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>' +
                                    //     '<li><a href="javascript:void(0)" onclick="addToCart(this)" data-id="' +
                                    //     data.data[i].product_id + '" data-type="' + data.data[i].product_type +
                                    //     '" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>' +
                                    //     '</ul>' +
                                    //     '</div>' +
                                    //     '<div class="product-content">' +
                                    //     '<h4 class="title mt-2"><a href="' + href + '">' + title + '</a></h4>' +
                                    //     '<div class="price">' +
                                    //     productCardPrice +
                                    //     '</div>' +
                                    //     '<a class="add-to-cart" href="javascript:void(0)" onclick="buyNow(this)" data-id="' +
                                    //     data.data[i].product_id + '" data-type="' + data.data[i].product_type +
                                    //     '">Buy Now</a>' +
                                    //     '</div>' +
                                    //     '</div>' +
                                    //     '</div>';

                                    product = '<div class="item_block bg-white position-relative p-3">' +
                                        '<div class="img_block">' +
                                        '<a href="' + href + '">' +
                                        '<img src="' + imgSrc + '" alt="imageimg" class="img-fluid" /></a>' +
                                        '</div>' +
                                        '<div class="content_block pb-3">' +
                                        '<small>' + data.data[i].category[0].category_detail.detail[0].name +
                                        '</small>' +
                                        '<h4>' + title + '</h4>' +
                                        '<span class="font-weight-bold">' + productCardPrice + '</span>' +
                                        '</div>' +
                                        '<div class="wish_list_block">' +
                                        '<a href="javascript:void(0)" onclick="addWishlist(this)" data-id="' +
                                        data.data[i].product_id + '" data-type="' + data.data[i].product_type +
                                        '" data-tip="Add to Wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a>' +
                                        '</div>' +
                                        '<div class="dis_block">' +
                                        '<h5>Featured</h5>' +
                                        '</div>' +
                                        '<div class="icon_group">' +
                                        '<div class="cart_blocks">' +
                                        '<a href="javascript:void(0)" onclick="addToCart(this)" data-id="' +
                                        data.data[i].product_id + '" data-type="' + data.data[i].product_type +
                                        '" data-tip="Add to Cart">' +
                                        '<i class="fa fa-cart-plus" aria-hidden="true"></i></a>' +
                                        '</div>' +
                                        '<div class="cart_block">' +
                                        '<a href="' + href + '">' +
                                        '<i class="fa fa-eye" aria-hidden="true"></i></a>' +
                                        '</div>' +
                                        '<div class="cart_blockss">' +
                                        '<a href="">' +
                                        '<i class="fa fa-exchange" aria-hidden="true"></i></a>' +
                                        '</div>' +
                                        '</div>' +
                                        '</div>';

                                    break;


                            }

                            $("#" + appendTo).append(product);
                        }

                    





                        // if (appendTo != 'new-arrival' && appendTo != 'weekly-sale')
                        //     getSliderSettings(appendTo);
                    }
                    // appendTo == 'latest-product-section' ? productListInit() : '';
                    

                },

                complete: function() {
                    $('.section-loading').css('display', 'none');
                },


                error: function(data) {
                    $('#event-loading').css('display', 'none');
                },
            });
        }

        function fetchFeaturedWeeklyProduct(url, appendTo) {
            $.ajax({
                type: 'get',
                url: url,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },

                beforeSend: function() {
                    $('.section-loading').css('display', 'block');
                },

                beforeSend: function() {},

                success: function(data) {
                    if (data.status == 'Success') {
                       
                        var htmlToRender =
                            "<article><div class='badges'><span class='badge badge-success'>Featured</span></div><div class='detail'>";

                        htmlToRender += '<h5 class="title"><a  href="/product/' + data
                            .data[0].product_id + '/' + data
                            .data[0].product_slug + '">' + data.data[0].detail[0]
                            .title + '</a></h5>';


                        htmlToRender += '<p class="discription">' + data.data[0].detail[0]
                            .desc + '</p>';




                        if (data.data[0].product_type == 'simple') {
                            if (data.data[0].product_discount_price == '' || data.data[0]
                                .product_discount_price == null || data.data[0].product_discount_price ==
                                'null') {
                                htmlToRender += '<div class="price">' + data.data[0]
                                    .product_price_symbol + '</div>';
                            } else {
                                htmlToRender += '<div class="price">' + data.data[0]
                                    .product_discount_price_symbol + '<span>' + data.data[0]
                                    .product_price_symbol + '</span></div>';
                            }
                        } else {
                            if (data.data[0].product_combination != null && data.data[0]
                                .product_combination != 'null' && data.data[0].product_combination != '') {
                                htmlToRender += '<div class="price">' + data.data[0]
                                    .product_combination[0].product_price_symbol + '</div>';
                            }
                        }

                        htmlToRender +=
                            '<div class="pro-sub-buttons"><div class="buttons"><button type="button" class="btn  btn-link " data-id=' +
                            data.data[0]
                            .product_id + ' onclick="addWishlist(this)" data-type=' + data.data[0]
                            .product_type + '><i class="fas fa-heart"></i>Add to Wishlist</button>';

                        htmlToRender += '<button type="button" class="btn btn-link" data-id=' + data.data[0]
                            .product_id + ' data-type=' + data.data[0]
                            .product_type +
                            ' onclick="addCompare(this)" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add to Compare"><i class="fas fa-align-right"></i>Add to Compare</button></div></div></div>';
                        htmlToRender += '<picture><div class="product-hover">';
                        if (data.data[0].product_type == 'simple') {

                            htmlToRender +=
                                '<button type="button" onclick="addToCart(this)" class="btn btn-block btn-secondary cart swipe-to-top" >Add To Cart</button>';

                        } else {

                            htmlToRender += '<a href="/product/' + data
                                .data[0].product_id + '/' + data
                                .data[0].product_slug +
                                '" onclick="addToCart(this)" class="btn btn-block btn-secondary cart swipe-to-top" >View Detail</a>';

                        }

                        htmlToRender += '</div>';

                        if (data.data[0].product_gallary != null && data.data[0].product_gallary !=
                            'null' && data.data[0].product_gallary != '') {
                            if (data.data[0].product_gallary.detail != null && data.data[0].product_gallary
                                .detail != 'null' && data.data[0].product_gallary.detail != '') {
                                htmlToRender += '<img class="img-fluid" src="' + data.data[0]
                                    .product_gallary.detail[1].gallary_path +
                                    '" alt="Men"s Cotton Classic Baseball Cap">';

                            }
                        }
                        htmlToRender += '</picture></article>';


                        $('#weekly-sale-first-div').html(htmlToRender);
                    }
                },

                complete: function() {
                    $('.section-loading').css('display', 'none');
                },


                error: function(data) {
                    $('#event-loading').css('display', 'none');
                },
            });
        }

        function blogNews() {
            $.ajax({
                type: 'get',
                url: "{{ url('') }}" +
                    '/api/client/blog_news?getGallaryDetail=1&limit=3&sortBy=id&language_id=' + 1 +
                    '&getDetail=1&getBlogCategory=1&sortType=DESC',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },

                beforeSend: function() {
                    $('.section-loading').css('display', 'block');
                },

                beforeSend: function() {},

                success: function(data) {
                    if (data.status == 'Success') {
                        var blogSection = '';
                        $.each(data.data, function(i, e) {
                            // blogSection += '<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">' +
                            //     '<div class="content">' +
                            //     '<div class="image">' +
                            //     '<img src="{{ asset('gallary') }}/' + e.gallary.gallary_name +
                            //     '" class="img-fluid">' +
                            //     '</div>' +
                            //     '<div class="discription text-center p-3 m-auto bg-light">' +
                            //     '<a href="/blog-detail/' + e.slug + '">' +
                            //     '<h3 class="font-weight-bold">' +
                            //     e.detail[0].name +
                            //     '</h3>' +
                            //     '</a>' +
                            //     '<p>' + e.detail[0].description.replace(/<[^>]*>?/gm, '').substring(0,
                            //         85) + '...</p>' +
                            //     '</div>' +
                            //     '</div>' +
                            //     '</div>';

                            blogSection += '<div class="col-md-4 col-12 margin-bottom-40">' +
                                '<div class="destination-block position-relative">' +
                                '<div class="image-block">' +
                                '<img src="{{ asset('gallary') }}/' + e.gallary.gallary_name +
                                '" class="img-fluid w-100">' +
                                '</div>' +
                                '<div class="content-block">' +
                                '<a href="/blog-detail/' + e.slug + '">' +
                                '<h2 class="text-dark mb-0">' +
                                e.detail[0].name +
                                '</h2>' +
                                '</a>' +
                                // '<p>' + e.detail[0].description.replace(/<[^>]*>?/gm, '').substring(0,
                                //     85) + '...</p>' +
                                // '<span><i class="fa fa-calendar-check-o" aria-hidden="true"></i> &nbsp; ' + e.detail[0].date + ' </span>' +
                                // '&nbsp; &nbsp;' +
                                // '<span><i class="fa fa-comment-o" aria-hidden="true"></i> ' + e.detail[0].name + ' </span>' +

                                '</div>' +
                                '</div>' +
                                '</div>';

                            //         blogSection += '<div class="col-md-4 col-12">' +
                            // '<div class="destination-block position-relative">' +
                            //     '<div class="image-block">' +
                            //         '<img src="{{ asset('gallary') }}/' + e.gallary.gallary_name +
                            //         '" class="img-fluid">' +
                            //     '</div>' +
                            //     '<div class="content-block">' +
                            //         '<a href="/blog-detail/' + e.slug + '">' +
                            //             '<h2 class="text-dark mb-0">' +
                            //                 + e.detail[0].name + 
                            //             '</h2>' +
                            //             '</a>' +
                            //         '<p class="mb-0">' +
                            //             '<span><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            //                 '</span>' +

                            //             '<span><i class="fa fa-comment-o" aria-hidden="true"></i></span>' +
                            //         '</p>' +
                            //         '</div>' +
                            //         '</div>' +
                            //          '</div>';

                            if (i == 2) {
                                return false;
                            }
                        });
                        $('#blog-section').html(blogSection);
                    }
                },

                complete: function() {
                    $('.section-loading').css('display', 'none');
                },


                error: function(data) {
                    $('#event-loading').css('display', 'none');
                },
            });
        }

        function sliderMedia() {
            var sliderType = "{{ getSetting()['slider_style'] ? getSetting()['slider_style'] : '' }}";
            if (sliderType == "style1") {
                sliderType = 1;
            }
            if (sliderType == "style2") {
                sliderType = 2;
            }
            if (sliderType == "style3") {
                sliderType = 3;
            }
            if (sliderType == "style4") {
                sliderType = 4;
            }
            if (sliderType == "style5") {
                sliderType = 5;
            }
            $.ajax({
                type: 'get',
                url: "{{ url('') }}" +
                    '/api/client/slider?getLanguage=' + 1 +
                    '&getSliderType=1&getSliderNavigation=1&getSliderGallary=1&limit=5&sortBy=id&sortType=DESC&sliderType=' +
                    sliderType + '&language_id=' + 1,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },

                beforeSend: function() {
                    $('.section-loading').css('display', 'block');
                },

                beforeSend: function() {},

                success: function(data) {
                    if (data.status == 'Success') {
                        var sliderSection = '';
                        $.each(data.data, function(i, e) {
                            // sliderSection += '<div class="slick-item">' +
                            //     '<img src="{{ asset('gallary') }}/' + e.gallary +
                            //     '" class="img-fluid w-100">' +
                            //     '<div class="discription">' +
                            //     '<h1 class="font-weight-bold"> ' + e.slider_title + '</h1>' +
                            //     '<div class="ban-content">' +
                            //     '<p>' + e.slider_description + '</p>' +
                            //     '</div>' +
                            //     '<a href="' + e.slider_url + '" class="btn anchor-btn">Learn More</a>' +
                            //     '</div>' +
                            //     '</div>';

                            sliderSection +=
                                '<div class="slider_item position-relative">' +
                                '<img src="{{ asset('gallary') }}/' + e.gallary +
                                '" class="d-block w-100 img-fluid" alt="image...">' +
                                '</div>';

                        });
                        $('#slider-section').html(sliderSection);

                        $(".your-class").slick({
                            dots: true,
                            arrows: true,
                            autoplay: true,
                            autoplaySpeed: 3000,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }, 100);

                    }

                },

                complete: function() {
                    $('.section-loading').css('display', 'none');
                },



                error: function(data) {
                    $('#event-loading').css('display', 'none');
                },
            });
        }


        function pageMedia() {
            var sliderType = "{{ getSetting()['slider_style'] ? getSetting()['slider_style'] : '' }}";
            if (sliderType == "style1") {
                sliderType = 2;
            }
            if (sliderType == "style2") {
                sliderType = 1;
            }
            if (sliderType == "style3") {
                sliderType = 3;
            }
            if (sliderType == "style4") {
                sliderType = 4;
            }
            if (sliderType == "style5") {
                sliderType = 5;
            }
            $.ajax({
                type: 'get',
                url: "{{ url('') }}" +
                    '/api/client/slider?getLanguage=' + 1 +
                    '&getSliderType=1&getSliderNavigation=1&getSliderGallary=1&limit=5&sortBy=id&sortType=DESC&sliderType=' +
                    sliderType + '&language_id=' + 1,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },

                beforeSend: function() {
                    $('.section-loading').css('display', 'block');
                },

                beforeSend: function() {},

                success: function(data) {
                    if (data.status == 'Success') {
                        var bannerSection = '';
                        if (data.data[0]) {
                            bannerSection +=

                                '<img src="{{ asset('gallary') }}/' + data.data[0].gallary +
                                '" class="d-block w-100 img-fluid" alt="image...">';
                            $('#banner-section').html(bannerSection);
                        }



                    }

                },

                complete: function() {
                    $('.section-loading').css('display', 'none');
                },



                error: function(data) {
                    $('#event-loading').css('display', 'none');
                },
            });
        }

        function pageMedia2() {
            var sliderType = "{{ getSetting()['slider_style'] ? getSetting()['slider_style'] : '' }}";
            if (sliderType == "style1") {
                sliderType = 2;
            }
            if (sliderType == "style2") {
                sliderType = 1;
            }
            if (sliderType == "style3") {
                sliderType = 3;
            }
            if (sliderType == "style4") {
                sliderType = 4;
            }
            if (sliderType == "style5") {
                sliderType = 5;
            }
            $.ajax({
                type: 'get',
                url: "{{ url('') }}" +
                    '/api/client/slider?getLanguage=' + 1 +
                    '&getSliderType=1&getSliderNavigation=1&getSliderGallary=1&limit=5&sortBy=id&sortType=DESC&sliderType=' +
                    sliderType + '&language_id=' + 1,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },

                beforeSend: function() {
                    $('.section-loading').css('display', 'block');
                },

                beforeSend: function() {},

                success: function(data) {
                    
                    if (data.status == 'Success') {

                        var bannerSection = '';
                        if (data.data[1]) {
                            bannerSection +=

                                '<img src="{{ asset('gallary') }}/' + data.data[1].gallary +
                                '" class="d-block w-100 img-fluid" alt="image...">';
                            $('#banner-section2').html(bannerSection);
                        }



                    }

                },

                complete: function() {
                    $('.section-loading').css('display', 'none');
                },



                error: function(data) {
                    $('#event-loading').css('display', 'none');
                },
            });
        }

        function categorySlider() {
            $.ajax({
                type: 'get',
                url: "{{ url('') }}" +
                    '/api/client/category?getDetail=1&page=1&limit=10&getGallary=1&language_id=' + 1 +
                    '&sortBy=category_name&sortType=DESC',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },

                beforeSend: function() {
                    $('.section-loading').css('display', 'block');
                },

                beforeSend: function() {},

                success: function(data) {
                    
                    var category = '';
                    if (data.status == 'Success') {
                        $.each(data.data, function(i, e) {

                            // category += '<div class="slick-item mx-3">' +
                            //     '<div class="content text-center bg-light">' +
                            //     '<a href="/shop?category=' + e.id + '">' +
                            //     '<div class="box m-auto"> <i class="' + icon +
                            //     '" aria-hidden="true"></i></div>' +
                            //     '<div class="title mt-3">' +
                            //         '<img src="{{ asset('gallary') }}/' + e.gallary +
                            //     '" class="img-fluid">' +
                            //     '</div>' +
                            //     '<h6 class="m-0">' + e.name + '</h6>' +
                            //     '</div>' +
                            //     '</a>' +
                            //     '</div>' +
                            //     '</div>';

                            category += '<a href="/shop?category=' + e.id + '">' +
                                '<div class="category_block bg-white">' +
                                '<div class="category_img">' +
                                '<img src="{{ asset('gallary') }}/' + e.gallary +
                                '" class="img-fluid W-100">' +
                                '</div>' +
                                '<div class="category_content">' +
                                '<h2 class="text-center">' + e.name + '</h2>' +
                                '</div>' +
                                '</div>' +
                                '</a>';

                        });
                        $('#category-section').html(category);
                        $(".category_list").slick({
                            dots: false,
                            arrows: true,
                            autoplay: true,
                            autoplaySpeed: 3000,
                            slidesToShow: 5,
                            slidesToScroll: 1,
                            responsive: [{
                                    breakpoint: 1399,
                                    settings: {
                                        slidesToShow: 4,
                                        slidesToScroll: 1,
                                    },
                                },
                                {
                                    breakpoint: 1080,
                                    settings: {
                                        slidesToShow: 4,
                                        slidesToScroll: 1,
                                    },
                                },
                                {
                                    breakpoint: 780,
                                    settings: {
                                        slidesToShow: 3,
                                        slidesToScroll: 1,
                                    },
                                },
                                {
                                    breakpoint: 600,
                                    settings: {
                                        slidesToShow: 2,
                                        slidesToScroll: 1,
                                    },
                                },
                            ],
                        });
                    }
                },

                complete: function() {
                    $('.section-loading').css('display', 'none');
                },

                error: function(data) {
                    $('#event-loading').css('display', 'none');
                },
            });
        }

        function bannerMedia() {
            var bannerType = "{{ getSetting()['banner_style'] ? getSetting()['banner_style'] : 'style1' }}";
            if (bannerType == "style1") {
                bannerType = 'banner1';
            }
            if (bannerType == "style2" || bannerType == "style3" || bannerType == "style4") {
                bannerType = "banner2";
            }
            if (bannerType == "style5" || bannerType == "style6") {
                bannerType = "banner5";
            }
            if (bannerType == "style7" || bannerType == "style8") {
                bannerType = "banner7";
            }
            if (bannerType == "style9") {
                bannerType = "banner9";
            }
            if (bannerType == "style10" || bannerType == "style11" || bannerType == "style12") {
                bannerType = "banner10";
            }

            if (bannerType == "style13" || bannerType == "style14" || bannerType == "style15") {
                bannerType = "banner13";
            }

            if (bannerType == "style16" || bannerType == "style17") {
                bannerType = "banner16";
            }

            if (bannerType == "style18" || bannerType == "style19") {
                bannerType = "banner18";
            }
            $('.banner_div').css('display', 'none');
            $.ajax({
                type: 'get',
                url: "{{ url('') }}" + '/api/client/constant_banner?getLanguage=' + languageId + '&title=' +
                    bannerType +
                    '&language_id=' + languageId + '&getGallary=1',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },

                beforeSend: function() {
                    $('.section-loading').css('display', 'block');
                },

                beforeSend: function() {},

                success: function(data) {
                    if (data.status == 'Success') {
                        if (typeof data.data[0] !== 'undefined') {
                            $('.banner-link1').attr('href', data.data[0]
                                .banner_url);

                            $('.banner-image1').attr('src', "/gallary/" + data.data[0].gallary
                                .gallary_name);
                        }



                        if (typeof data.data[1] !== 'undefined') {
                            $('.banner-link2').attr('href', data.data[1]
                                .banner_url);

                            $('.banner-image2').attr('src', "/gallary/" + data.data[1].gallary
                                .gallary_name);
                        }




                        if (typeof data.data[2] !== 'undefined') {
                            $('.banner-link3').attr('href', data.data[2]
                                .banner_url);
                            $('.banner-image3').attr('src', "/gallary/" + data.data[2].gallary
                                .gallary_name);
                        }

                        if (typeof data.data[3] !== 'undefined') {
                            $('.banner-link4').attr('href', data.data[3]
                                .banner_url);
                            $('.banner-image4').attr('src', "/gallary/" + data.data[3].gallary
                                .gallary_name);
                        }

                        if (typeof data.data[4] !== 'undefined') {

                            $('.banner-link5').attr('href', data.data[4]
                                .banner_url);
                            $('.banner-image5').attr('src', "/gallary/" + data.data[4].gallary
                                .gallary_name);
                        }
                        if (typeof data.data[5] !== 'undefined') {
                            $('.banner-link6').attr('href', data.data[5]
                                .banner_url);
                            $('.banner-image6').attr('src', "/gallary/" + data.data[5].gallary
                                .gallary_name);

                        }
                        $('.banner_div').css('display', 'block');
                    }
                },

                complete: function() {
                    $('.section-loading').css('display', 'none');
                },

                error: function(data) {
                    $('#event-loading').css('display', 'none');
                },
            });
        }


        // function slickInit(){
        //     $(".your-class").slick({
        //         dots: true,
        //         arrows: true,
        //         autoplay: true,
        //         autoplaySpeed: 3000,
        //         slidesToShow: 1,
        //         slidesToScroll: 1,
        //     });
        // }


        function productListInit() {

            $(".latest_product_slider").slick({
                dots: false,
                arrows: true,
                autoplay: true,
                autoplaySpeed: 3000,
                slidesToShow: 5,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1399,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 1080,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 780,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        },
                    },
                ],
            });
            $(".slick_slider").slick({
                dots: false,
                arrows: true,
                autoplay: true,
                autoplaySpeed: 3000,
                slidesToShow: 5,
                slidesToScroll: 1,

                responsive: [{
                        breakpoint: 1399,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 1080,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 780,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        },
                    },
                ],
            });
            $("#product-list-section").slick({
                dots: false,
                arrows: true,
                autoplay: true,
                autoplaySpeed: 3000,
                slidesToShow: 4,
                slidesToScroll: 1,

                responsive: [{
                        breakpoint: 1399,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 1080,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 780,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        },
                    },
                ],
            });

        }

        $(document).ajaxStop(function() {
            productListInit();
        });
    </script>
@endsection
