@extends('layouts.app')
  
@section('content')
 
 
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="{{ url('/')}}">Home</a> <span class="mx-2 mb-0">/</span> <a href="{{ url('/shop')}}">Shop</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">{{$product->name}}</strong></div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="item-entry">
              <a href="#" class="product-item md-height bg-gray d-block">
                <img src="{{ asset('storage/images/' . $product->id . '.png') }}" alt="Image" class="img-fluid">
              </a>
              
            </div>

          </div>
          <div class="col-md-6">
            <h2 class="text-black">{{$product->name}}</h2>
            <p>{{$product->description}}</p>
            <p><strong class="text-primary h4">${{$product->price}}</strong></p>
            <div class="mb-1 d-flex">
              <label for="option-sm" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-sm" name="shop-sizes"></span> <span class="d-inline-block text-black">Small</span>
              </label>
              <label for="option-md" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-md" name="shop-sizes"></span> <span class="d-inline-block text-black">Medium</span>
              </label>
              <label for="option-lg" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-lg" name="shop-sizes"></span> <span class="d-inline-block text-black">Large</span>
              </label>
              <label for="option-xl" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-xl" name="shop-sizes"></span> <span class="d-inline-block text-black"> Extra Large</span>
              </label>
            </div>
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
              <div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div>
              <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
              <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
              </div>
            </div>

            </div>
            <p><a href="cart.html" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Add To Cart</a></p>

          </div>
        </div>
      </div>
    </div>

    <!--<div class="site-section block-3 site-blocks-2">-->
    <!--  <div class="container">-->
    <!--    <div class="row justify-content-center">-->
    <!--      <div class="col-md-7 site-section-heading text-center pt-4">-->
    <!--        <h2>Featured Products</h2>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--    <div class="row">-->
    <!--      <div class="col-md-12 block-3">-->
    <!--        <div class="nonloop-block-3 owl-carousel">-->
    <!--          <div class="item">-->
    <!--            <div class="item-entry">-->
    <!--              <a href="#" class="product-item md-height bg-gray d-block">-->
    <!--                <img src="images/model_1.png" alt="Image" class="img-fluid">-->
    <!--              </a>-->
    <!--              <h2 class="item-title"><a href="#">Smooth Cloth</a></h2>-->
    <!--              <strong class="item-price"><del>$46.00</del> $28.00</strong>-->
    <!--              <div class="star-rating">-->
    <!--                <span class="icon-star2 text-warning"></span>-->
    <!--                <span class="icon-star2 text-warning"></span>-->
    <!--                <span class="icon-star2 text-warning"></span>-->
    <!--                <span class="icon-star2 text-warning"></span>-->
    <!--                <span class="icon-star2 text-warning"></span>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--          <div class="item">-->
    <!--            <div class="item-entry">-->
    <!--              <a href="#" class="product-item md-height bg-gray d-block">-->
    <!--                <img src="images/prod_3.png" alt="Image" class="img-fluid">-->
    <!--              </a>-->
    <!--              <h2 class="item-title"><a href="#">Blue Shoe High Heels</a></h2>-->
    <!--              <strong class="item-price"><del>$46.00</del> $28.00</strong>-->

    <!--              <div class="star-rating">-->
    <!--                <span class="icon-star2 text-warning"></span>-->
    <!--                <span class="icon-star2 text-warning"></span>-->
    <!--                <span class="icon-star2 text-warning"></span>-->
    <!--                <span class="icon-star2 text-warning"></span>-->
    <!--                <span class="icon-star2 text-warning"></span>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--          <div class="item">-->
    <!--            <div class="item-entry">-->
    <!--              <a href="#" class="product-item md-height bg-gray d-block">-->
    <!--                <img src="images/model_5.png" alt="Image" class="img-fluid">-->
    <!--              </a>-->
    <!--              <h2 class="item-title"><a href="#">Denim Jacket</a></h2>-->
    <!--              <strong class="item-price"><del>$46.00</del> $28.00</strong>-->

    <!--              <div class="star-rating">-->
    <!--                <span class="icon-star2 text-warning"></span>-->
    <!--                <span class="icon-star2 text-warning"></span>-->
    <!--                <span class="icon-star2 text-warning"></span>-->
    <!--                <span class="icon-star2 text-warning"></span>-->
    <!--                <span class="icon-star2 text-warning"></span>-->
    <!--              </div>-->

    <!--            </div>-->
    <!--          </div>-->
    <!--          <div class="item">-->
    <!--            <div class="item-entry">-->
    <!--              <a href="#" class="product-item md-height bg-gray d-block">-->
    <!--                <img src="images/prod_1.png" alt="Image" class="img-fluid">-->
    <!--              </a>-->
    <!--              <h2 class="item-title"><a href="#">Leather Green Bag</a></h2>-->
    <!--              <strong class="item-price"><del>$46.00</del> $28.00</strong>-->
    <!--              <div class="star-rating">-->
    <!--                <span class="icon-star2 text-warning"></span>-->
    <!--                <span class="icon-star2 text-warning"></span>-->
    <!--                <span class="icon-star2 text-warning"></span>-->
    <!--                <span class="icon-star2 text-warning"></span>-->
    <!--                <span class="icon-star2 text-warning"></span>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--          <div class="item">-->
    <!--            <div class="item-entry">-->
    <!--              <a href="#" class="product-item md-height bg-gray d-block">-->
    <!--                <img src="images/model_7.png" alt="Image" class="img-fluid">-->
    <!--              </a>-->
    <!--              <h2 class="item-title"><a href="#">Yellow Jacket</a></h2>-->
    <!--              <strong class="item-price">$58.00</strong>-->
    <!--              <div class="star-rating">-->
    <!--                <span class="icon-star2 text-warning"></span>-->
    <!--                <span class="icon-star2 text-warning"></span>-->
    <!--                <span class="icon-star2 text-warning"></span>-->
    <!--                <span class="icon-star2 text-warning"></span>-->
    <!--                <span class="icon-star2 text-warning"></span>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->

    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->

@endsection