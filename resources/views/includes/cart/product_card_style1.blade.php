<div class="row">
   <form class="w-100 text-right"> 
      <div class="form-block">
         <label for="sorting" class="m-0">Sort by:</label>
         <select class="custom-select w-25 mb-0 ml-3 sortBy">
          <option value="">choose</option>
          <option disabled><b>Price</b></option>
          <option value="low-high" data-sort-by="price" data-sort-type="asc">Low To High</option>
          <option value="high-to" data-sort-by="price" data-sort-type="desc">High To Low</option>
          <option disabled><b>Name</b></option>
          <option value="A-Z" data-sort-by="title" data-sort-type="asc">A-Z</option>
          <option value="Z-A" data-sort-by="title" data-sort-type="desc">Z-A</option>
      </select>
      </div>
  </form>
</div>
<div class="row mt-5" id="shop_page_product_card">
    {{-- <div class="col-md-4 col-12">
       <div class="item_block bg-white position-relative p-3 mb-3">
          <div class="img_block">
             <a href="product-detail.html">
             <img
                src="https://demo2.madrasthemes.com/cartzilla/grocery/wp-content/uploads/sites/5/2020/03/1.jpg"
                alt="img"
                class="img-fluid"
                /></a>
          </div>
          <div class="content_block pb-3">
             <small>Lotions and Creams</small>
             <h4>Moisture Body Lotion (250ml)</h4>
             <span class="">$10 </span>
          </div>
          <div class="wish_list_block">
             <a href=""
                ><i class="fa fa-heart" aria-hidden="true"></i
                ></a>
          </div>
          <div class="icon_group">
             <div class="cart_blocks">
                <a href="" tabindex="0">
                <i class="fa fa-cart-plus" aria-hidden="true"></i
                   ></a>
             </div>
             <div class="cart_block">
                <a href="product-detail.html" tabindex="0">
                <i class="fa fa-eye" aria-hidden="true"></i
                   ></a>
             </div>
             <div class="cart_blockss">
                <a href="" tabindex="0">
                <i class="fa fa-exchange" aria-hidden="true"></i
                   ></a>
             </div>
          </div>
       </div>
    </div> --}}
    
 </div>
 @include('includes.loader')
 <div class="col-md-12 text-center">
   <div class="pagination pt-5">
      {{-- <a href="#">&laquo;</a>
      <a href="#">1</a>
      <a href="#" class="active">2</a>
      <a href="#">3</a>
      <a href="#">4</a>
      <a href="#">&raquo;</a> --}}
   </div>
</div>