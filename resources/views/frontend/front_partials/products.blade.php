<!-- product section -->
<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>products</span>
            </h2>
        </div>
        <div class="row">

            @php
                $limit = 9;
                $count = 0;
            @endphp
            @foreach ($products as $product)
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="{{ route("products.show", $product->id) }}" class="option1">
                                    {{ $product->title }}
                                </a>
                                <form method="get" action="{{ route("addtocart", $product->id) }}">
                                    <input type="number" name="quantity" value="1" min="1" max="5">
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                       Add to cart
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="/productimages/{{ $product->image }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                {{ $product->category }}
                            </h5>
                            <h6 style="@if ($product->discount_price) text-decoration: line-through @endif">
                                {{ $product->price }}
                            </h6>
                            @if ($product->discount_price)
                                <h6>
                                    {{ $product->discount_price }}
                                </h6>
                            @endif
                        </div>
                    </div>
                </div>
                @php
                    $count++;
                    if ($count === $limit) {
                        break;
                    }
                @endphp
            @endforeach

            {{-- <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="" class="option1">
                                Men's Shirt
                            </a>
                            <a href="" class="option2">
                                Buy Now
                            </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="frontend/images/p1.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Men's Shirt
                        </h5>
                        <h6>
                            $75
                        </h6>
                    </div>
                </div>
            </div>


            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="" class="option1">
                                Add To Cart
                            </a>
                            <a href="" class="option2">
                                Buy Now
                            </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="frontend/images/p2.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Men's Shirt
                        </h5>
                        <h6>
                            $80
                        </h6>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="" class="option1">
                                Add To Cart
                            </a>
                            <a href="" class="option2">
                                Buy Now
                            </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="frontend/images/p3.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Women's Dress
                        </h5>
                        <h6>
                            $68
                        </h6>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="" class="option1">
                                Add To Cart
                            </a>
                            <a href="" class="option2">
                                Buy Now
                            </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="frontend/images/p4.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Women's Dress
                        </h5>
                        <h6>
                            $70
                        </h6>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="" class="option1">
                                Add To Cart
                            </a>
                            <a href="" class="option2">
                                Buy Now
                            </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="frontend/images/p5.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Women's Dress
                        </h5>
                        <h6>
                            $75
                        </h6>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="" class="option1">
                                Add To Cart
                            </a>
                            <a href="" class="option2">
                                Buy Now
                            </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="frontend/images/p6.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Women's Dress
                        </h5>
                        <h6>
                            $58
                        </h6>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="" class="option1">
                                Add To Cart
                            </a>
                            <a href="" class="option2">
                                Buy Now
                            </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="frontend/images/p7.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Women's Dress
                        </h5>
                        <h6>
                            $80
                        </h6>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="" class="option1">
                                Add To Cart
                            </a>
                            <a href="" class="option2">
                                Buy Now
                            </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="frontend/images/p8.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Men's Shirt
                        </h5>
                        <h6>
                            $65
                        </h6>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="" class="option1">
                                Add To Cart
                            </a>
                            <a href="" class="option2">
                                Buy Now
                            </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="frontend/images/p9.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Men's Shirt
                        </h5>
                        <h6>
                            $65
                        </h6>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="" class="option1">
                                Add To Cart
                            </a>
                            <a href="" class="option2">
                                Buy Now
                            </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="frontend/images/p10.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Men's Shirt
                        </h5>
                        <h6>
                            $65
                        </h6>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="" class="option1">
                                Add To Cart
                            </a>
                            <a href="" class="option2">
                                Buy Now
                            </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="frontend/images/p11.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Men's Shirt
                        </h5>
                        <h6>
                            $65
                        </h6>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="" class="option1">
                                Add To Cart
                            </a>
                            <a href="" class="option2">
                                Buy Now
                            </a>
                        </div>
                    </div>
                    <div class="img-box">
                        <img src="frontend/images/p12.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Women's Dress
                        </h5>
                        <h6>
                            $65
                        </h6>
                    </div>
                </div>
            </div> --}}

        </div>
        <div class="btn-box">
            <a href="">
                View All products
            </a>
        </div>
    </div>
</section>
<!-- end product section -->
