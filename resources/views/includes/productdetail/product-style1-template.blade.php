<!--========================== DETAIL START  --->
<section id="product_detail" class="section_bg padding">
    <div class="container">
        <div class="row no-gutters bg-white">
            <div class="col-lg-6 col-md-12 col-12 _boxzoom d-flex align-items-center justify-content-around">
                <div class="zoom-thumb order-lg-1 order-md-2 order-2">
                    <div class="product-detail-slider d-flex flex-column position-relative" id="side-gallery">

                    </div>
                </div>
                <div class="_product-images order-lg-1 order-md-1 order-1">
                    <div class="picZoomer" id="zoomGallery">
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="_product-detail-content">
                    <p class="_p-name" id="pro-title"></p>
                    <span id="display-rating">
                        <div class="rating">
                            <div class="rating-upper" style="width: 0%">
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            </div>
                            <div class="rating-lower">
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </span>
                    <div class="_p-price-box">
                        <div class="p-list">
                            <span>
                                M.R.P. : <del id="cut-product-card-price"> </del>
                            </span>
                            <span class="price" id="product-card-price"> </span>
                            <input type="hidden" id="product_combination_id">
                        </div>
                        <div class="_p-add-cart">
                            <div class="_p-qty">
                                <h5>Add Quantity</h5>
                                <div class="quantity_input">
                                    <div class="value-button decrease_" id=""
                                        onclick="decreaseCartInput($(this).next())" value="Decrease Value">
                                        -
                                    </div>
                                    <input type="number" id="quantity-input" value="1" />
                                    <div class="value-button increase_" id="" value="Increase Value"
                                        onclick="increaseCartInput($(this).prev())">
                                        +
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span id="variant"></span>
                        {{-- <form action="" method="post" accept-charset="utf-8"> --}}
                        <ul class="spe_ul"></ul>
                        <div class="_p-qty-and-cart">
                            <div class="_p-add-cart d-md-block d-flex">
                                <button type="button" id="buyNow" class="btn-theme btn buy-btn" tabindex="0">
                                    <i class="fa fa-shopping-cart"></i> Buy Now
                                </button>
                                <button type="button" class="btn-theme btn btn-success" id="add-to-cart" tabindex="0">
                                    <i class="fa fa-shopping-cart"></i> Add to Cart
                                </button>
                                <button type="button" class="btn-theme btn btn-success" id="add-to-wishlist"
                                    tabindex="0">
                                    <i class="fa fa-heart"></i> Add to Wishlist
                                </button>
                            </div>
                            <div id="share"></div>
                        </div>
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--========================== DETAIL END  --->
<!--========================== TAB START  --->
<section id="product_tab" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="tabs bg_section">
                    <div class="tab-button-outer">
                        <ul id="tab-button">
                            <li><a href="#tab01">Reviews (<span class="review-count">0</span>)</a></li>
                            <li><a href="#tab02">Additional Information</a></li>
                        </ul>
                    </div>
                    <div class="tab-select-outer">
                        <select id="tab-select" class="tab_mobile">
                            <option value="#tab01">
                                <h1>Reviews (<span class="review-count">0</span>)</h1>
                            </option>
                            <option value="#tab02">Additional Information</option>
                        </select>
                    </div>

                    <div id="tab01" class="tab-contents">
                        <h4 class="pt-2">User Comment</h4>
                        <div class="card border-0">
                            <div class="card-body" id="review-rating-show">
                                {{-- <div class="row">
                                    <div class="col-md-2">
                                        <div class="user_product">
                                            <img src="https://image.ibb.co/jw55Ex/def_face.jpg"
                                                class="img img-rounded img-fluid" />
                                        </div>
                                        <p class="text-secondary text-md-center text-left pt-md-0 pt-3">
                                            15 Minutes Ago
                                        </p>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="clearfix"></div>
                                        <p>
                                        <div class="rating">
                                            <div class="rating-upper" id="product-rating" style="width: 0%">
                                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                            </div>
                                            <div class="rating-lower">
                                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                                <span><i class="fa fa-star" aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                        </p>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the pr make but
                                            also the leap into electronic typesetting, remaining
                                            essentially unchanged. It was popularised in the 1960s
                                            with the release of Letraset sheets containing Lorem
                                            Ipsum passages, and more recently with desktop
                                            publishing software like Aldus PageMaker including
                                            versions of Lorem Ipsum.
                                        </p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <form>
                            <label>
                                <input type="hidden" name="prodRating" id="prodRating" value="">
                                <div class="rating-select d-flex justify-content-center mb-4">
                                    <div class="btn btn-light btn-sm" data-rating_value="1"><span
                                            class="fa fa-star"></span></div>
                                    <div class="btn btn-light btn-sm" data-rating_value="2"><span
                                            class="fa fa-star"></span></div>
                                    <div class="btn btn-light btn-sm" data-rating_value="3"><span
                                            class="fa fa-star"></span></div>
                                    <div class="btn btn-light btn-sm" data-rating_value="4"><span
                                            class="fa fa-star"></span></div>
                                    <div class="btn btn-light btn-sm" data-rating_value="5"><span
                                            class="fa fa-star"></span></div>
                                </div>
                            </label>
                            <label>
                                <div class="col-text-area d-flex justify-content-center">
                                    <textarea class="w-100 p-3 border-0 rounded-0" placeholder="Add Comment" id="prodComment"></textarea>
                                </div>
                            </label>
                            <button type="submit" id="reviewSend">submit</button>
                        </form>
                    </div>
                    <div id="tab02" class="tab-contents">
                        <div class="tab-pane fade show active p-3 w-md-75 w-100 mx-auto pro-desc" id="first"
                            role="tabpanel" aria-labelledby="first-tab">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--========================== TAB END  --->
