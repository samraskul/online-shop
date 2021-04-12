@extends('index.layouts.app')
@section('content')

<style>
    #full-stars-example-two .rating-group {
        display: inline-flex;
    }

    #full-stars-example-two .rating__icon {
        pointer-events: none;
    }

    #full-stars-example-two .rating__input {
        position: absolute !important;
        left: -9999px !important;
    }

    #full-stars-example-two .rating__input--none {
        display: none;
    }

    #full-stars-example-two .rating__label {
        cursor: pointer;
        padding: 0 0.1em;
        font-size: 2rem;
    }

    #full-stars-example-two .rating__icon--star {
        color: orange;
    }

    #full-stars-example-two .rating__input:checked~.rating__label .rating__icon--star {
        color: #ddd;
    }

    #full-stars-example-two .rating-group:hover .rating__label .rating__icon--star {
        color: orange;
    }

    #full-stars-example-two .rating__input:hover~.rating__label .rating__icon--star {
        color: #ddd;
    }





    .single-product input[type=number]::-webkit-inner-spin-button,
    .single-product input[type=number]::-webkit-outer-spin-button {
        opacity: 1;
    }

    .single-product input[type=number]::-webkit-outer-spin-button,
    .single-product input[type=number]::-webkit-inner-spin-button {
        -webkit-appearance: inner-spin-button !important;
        width: 10px;
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
    }

    .single-product-content {
        /* grid-area: main; */
        position: relative;

    }

    .single-product-content-first {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: auto auto;
        grid-row-gap: 27px;
        grid-template-areas:
            "slider short-description"
            "long-description long-description"
        ;
    }

    .single-product-content-first-slider {
        grid-area: slider;
        display: grid;
        grid-template-rows: min(auto, 600px) 200px;
        align-items: start;
    }

    .single-product-content-first-slider-image>img {
        width: 100%;
        max-height: 100%;
    }

    .single-product-content-first-slider-slider {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
    }

    .single-product-content-first-slider-slider>img {
        width: 100%;
        max-height: 100%;
        cursor: pointer;
    }

    .single-product-content-first-content {
        grid-area: short-description;
        display: grid;

    }

    .single-product-content-first-content-rating {
        display: grid;
        grid-template-columns: auto auto;
        justify-content: start;
        align-items: baseline;
        grid-column-gap: 30px;
    }

    .single-product-content-second {
        grid-area: long-description;
    }
</style>
<style>
    .tab-wrap {
        -webkit-transition: 0.3s box-shadow ease;
        transition: 0.3s box-shadow ease;
        border-radius: 6px;
        max-width: 100%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        position: relative;
        list-style: none;
        background-color: #fff;
        margin: 40px 0;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    }

    .tab-wrap:hover {
        box-shadow: 0 12px 23px rgba(0, 0, 0, 0.23), 0 10px 10px rgba(0, 0, 0, 0.19);
    }

    .tab {
        display: none;
    }

    .tab:checked:nth-of-type(1)~.tab__content:nth-of-type(1) {
        opacity: 1;
        -webkit-transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
        transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
        transition: 0.5s opacity ease-in, 0.8s transform ease;
        transition: 0.5s opacity ease-in, 0.8s transform ease, 0.8s -webkit-transform ease;
        position: relative;
        top: 0;
        z-index: 100;
        -webkit-transform: translateY(0px);
        transform: translateY(0px);
        text-shadow: 0 0 0;
    }

    .tab:checked:nth-of-type(2)~.tab__content:nth-of-type(2) {
        opacity: 1;
        -webkit-transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
        transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
        transition: 0.5s opacity ease-in, 0.8s transform ease;
        transition: 0.5s opacity ease-in, 0.8s transform ease, 0.8s -webkit-transform ease;
        position: relative;
        top: 0;
        z-index: 100;
        -webkit-transform: translateY(0px);
        transform: translateY(0px);
        text-shadow: 0 0 0;
    }

    .tab:checked:nth-of-type(3)~.tab__content:nth-of-type(3) {
        opacity: 1;
        -webkit-transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
        transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
        transition: 0.5s opacity ease-in, 0.8s transform ease;
        transition: 0.5s opacity ease-in, 0.8s transform ease, 0.8s -webkit-transform ease;
        position: relative;
        top: 0;
        z-index: 100;
        -webkit-transform: translateY(0px);
        transform: translateY(0px);
        text-shadow: 0 0 0;
    }

    .tab:checked:nth-of-type(4)~.tab__content:nth-of-type(4) {
        opacity: 1;
        -webkit-transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
        transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
        transition: 0.5s opacity ease-in, 0.8s transform ease;
        transition: 0.5s opacity ease-in, 0.8s transform ease, 0.8s -webkit-transform ease;
        position: relative;
        top: 0;
        z-index: 100;
        -webkit-transform: translateY(0px);
        transform: translateY(0px);
        text-shadow: 0 0 0;
    }

    .tab:checked:nth-of-type(5)~.tab__content:nth-of-type(5) {
        opacity: 1;
        -webkit-transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
        transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
        transition: 0.5s opacity ease-in, 0.8s transform ease;
        transition: 0.5s opacity ease-in, 0.8s transform ease, 0.8s -webkit-transform ease;
        position: relative;
        top: 0;
        z-index: 100;
        -webkit-transform: translateY(0px);
        transform: translateY(0px);
        text-shadow: 0 0 0;
    }

    .tab:first-of-type:not(:last-of-type)+label {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .tab:not(:first-of-type):not(:last-of-type)+label {
        border-radius: 0;
    }

    .tab:last-of-type:not(:first-of-type)+label {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .tab:checked+label {
        background-color: #fff;
        box-shadow: 0 -1px 0 #fff inset;
        cursor: default;
    }

    .tab:checked+label:hover {
        box-shadow: 0 -1px 0 #fff inset;
        background-color: #fff;
    }

    .tab+label {
        box-shadow: 0 -1px 0 #eee inset;
        border-radius: 6px 6px 0 0;
        cursor: pointer;
        display: block;
        text-decoration: none;
        color: #333;
        -webkit-box-flex: 3;
        -ms-flex-positive: 3;
        flex-grow: 3;
        text-align: center;
        background-color: #eee;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        text-align: center;
        -webkit-transition: 0.3s background-color ease, 0.3s box-shadow ease;
        transition: 0.3s background-color ease, 0.3s box-shadow ease;
        height: 50px;
        box-sizing: border-box;
        padding: 15px;
    }

    .tab+label:hover {
        background-color: #f9f9f9;
        box-shadow: 0 1px 0 #f4f4f4 inset;
    }

    .tab__content {
        padding: 10px 25px;
        background-color: transparent;
        position: absolute;
        width: 100%;
        z-index: -1;
        opacity: 0;
        left: 0;
        -webkit-transform: translateY(-3px);
        transform: translateY(-3px);
        border-radius: 6px;
    }
</style>


<div class="container-row">
    <div class="single-product">

        <div>

            <!-- breadcrumb start -->
            <div class="breadcrumb">
                <a href="{{ route('index.homePage') }}">Home</a>
                <i class="fa fa-greater-than"></i>
                {{-- <!-- TODO:add the link or decide for the text and url --> --}}
                <a href="">Shop</a>
                <i class="fa fa-greater-than"></i>
                {{-- <!-- TODO:add the link to route for category --> --}}
                <a href="">Electronics</a>
                <i class="fa fa-greater-than"></i>
                {{ $product->name }}
            </div>
            <!-- breadcrumb end -->

            <!-- single product start -->
            <div class="single-product-content">
                <div class="single-product-content-first">

                    <div class="single-product-content-first-slider">
                        <div class="single-product-content-first-slider-image">
                            <img src="" id="single-product-main-slider-image" alt="">
                        </div>
                        <div class="single-product-content-first-slider-slider">
                            @php
                            @endphp
                            <img src="{{ $product->images->filter(function($item){return stristr($item, 'main-image-');})->first()->url }}" alt="{{ $product->name }}">
                            @foreach ($product->images as $image)
                                @if(stristr($image->type, 'other-images-') ?true: false)
                                    <img src="{{ $image->url }}" alt="">
                                @endif
                            @endforeach
                        </div>

                    </div>

                    <div class="single-product-content-first-content">

                        <h1>{{ $product->name }}</h1>

                        <div class="single-product-content-first-content-rating">
                            <div id="full-stars-example-two">
                                {{-- <!--TODO:priority low-> fix the stars some how --> --}}
                                <div class="rating-group">
                                    <input disabled checked class="rating__input rating__input--none" name="rating3" id="rating3-none" value="0" type="radio">
                                    <label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                    <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">
                                    <label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                    <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
                                    <label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                    <input class="rating__input" name="rating3" id="rating3-3" value="3" type="radio">
                                    <label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                    <input class="rating__input" name="rating3" id="rating3-4" value="4" type="radio" checked>
                                    <label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                    <input class="rating__input" name="rating3" id="rating3-5" value="5" type="radio">
                                </div>
                            </div>

                            <div>
                                5 Reviews |<a href=""> Submit Review</a>
                            </div>
                        </div>

                        <div class="single-product-content-first-content-availability">
                            @if($product->stock > 0)
                            <i class="fas fa-check-circle"></i>
                            @else
                            <i class="fa fa-times-circle"></i>
                            @endif
                            Product Available in stock
                        </div>
                        <div class="single-product-content-first-content-small-description">
                            chukan ante eu egestas. Morbi vulputate diam at nibh imperdiet pretium. Nulla euismod, nibh nec tincidunt maximus, elit sem ornare nunc, et dictum elit dui sed justo. Donec scelerisque, erat vel pharetra luctus, nibh tortor efficitur nibh, non euismod leo diam ut risus.
                        </div>
                        <div class="single-product-content-first-content-prices">
                            @if($product->discount>0)
                            <div class="single-product-content-first-content-price">
                                new price: {{ $product->price - $product->discount }}
                            </div>
                            <div class="single-product-content-first-content-price-old">
                                old price: {{ $product->price }}
                            </div>
                            @else
                            <div class="single-product-content-first-content-price">
                                price: {{ $product->price }}
                            </div>
                            @endif
                        </div>

                        <div class="single-product-content-first-content-prices">
                            <form action="">
                                Quantity:
                                <input type="number" value="1" step="1" min="1" max="{{ $product->stock }}" />
                                <button type="submit">ADD TO CART</button>
                            </form>
                        </div>
                        @if(! empty($product->brand))
                            <div class="single-product-content-first-content-prices">
                                Manufacturer: {{ $product->brand }}
                            </div>
                        @endif
                    </div>


                    <div class="single-product-content-second">

                        <div class="tab-wrap">

                            <!-- active tab on page load gets checked attribute -->
                            <input type="radio" id="tab1" name="tabGroup1" class="tab" checked>
                            <label for="tab1">Description</label>

                            <input type="radio" id="tab2" name="tabGroup1" class="tab">
                            <label for="tab2">Specification</label>

                            <input type="radio" id="tab3" name="tabGroup1" class="tab">
                            <label for="tab3">Reviews</label>

                            <div class="tab__content">
                                <h3>Description</h3>
                                <div>{!! $product->long_description !!}</div>
                            </div>

                            <div class="tab__content">
                                <h3>Specification</h3>
                                <div>{!! $product->specification !!}</div>
                                {{-- <table>
                                    <tbody>
                                        <tr>
                                            <td>NETWORK Technology</td>
                                            <td>GSM / CDMA / HSPA / EVDO / LTE / 5G</td>
                                        </tr>
                                        <tr>
                                            <td>LAUNCH Announced</td>
                                            <td>2021, January 14</td>
                                        </tr>
                                        <tr>
                                            <td>BODY Dimensions</td>
                                            <td>165.1 x 75.6 x 8.9 mm (6.5 x 2.98 x 0.35 in)</td>
                                        </tr>
                                        <tr>
                                            <td>BODY Weight</td>
                                            <td>227 g (Sub6), 229 g (mmWave) (8.01 oz)</td>
                                        </tr>
                                        <tr>
                                            <td>BODY Build</td>
                                            <td>Glass front (Gorilla Glass Victus), glass back (Gorilla Glass Victus), aluminum frame </td>
                                        </tr>
                                        <tr>
                                            <td>BODY SIM</td>
                                            <td>Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM and/or eSIM, dual stand-by)</td>
                                        </tr>
                                        <tr>
                                            <td>BODY</td>
                                            <td>IP68 dust/water resistant (up to 1.5m for 30 mins) Stylus support</td>
                                        </tr>
                                        <tr>
                                            <td>DISPLAY Type</td>
                                            <td>Dynamic AMOLED 2X, 120Hz, HDR10+, 1500 nits (peak)</td>
                                        </tr>
                                        <tr>
                                            <td>DISPLAY Size</td>
                                            <td>6.8 inches, 112.1 cm2 (~89.8% screen-to-body ratio)</td>
                                        </tr>
                                        <tr>
                                            <td>MAIN CAMERA Quad</td>
                                            <td>
                                                108 MP, f/1.8, 24mm (wide), 1/1.33", 0.8µm, PDAF, Laser AF, OIS
                                                <br>
                                                10 MP, f/4.9, 240mm (periscope telephoto), 1/3.24", 1.22µm, dual pixel PDAF, OIS, 10x optical zoom
                                                <br>
                                                10 MP, f/2.4, 70mm (telephoto), 1/3.24", 1.22µm, dual pixel PDAF, OIS, 3x optical zoom
                                                <br>
                                                12 MP, f/2.2, 13mm (ultrawide), 1/2.55", 1.4µm, dual pixel PDAF, Super Steady video
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>NETWORK Technology</td>
                                            <td>GSM / CDMA / HSPA / EVDO / LTE / 5G</td>
                                        </tr>
                                        <tr>
                                            <td>LAUNCH Announced</td>
                                            <td>2021, January 14</td>
                                        </tr>
                                        <tr>
                                            <td>BODY Dimensions</td>
                                            <td>165.1 x 75.6 x 8.9 mm (6.5 x 2.98 x 0.35 in)</td>
                                        </tr>
                                        <tr>
                                            <td>BODY Weight</td>
                                            <td>227 g (Sub6), 229 g (mmWave) (8.01 oz)</td>
                                        </tr>
                                        <tr>
                                            <td>BODY Build</td>
                                            <td>Glass front (Gorilla Glass Victus), glass back (Gorilla Glass Victus), aluminum frame </td>
                                        </tr>
                                        <tr>
                                            <td>BODY SIM</td>
                                            <td>Single SIM (Nano-SIM and/or eSIM) or Dual SIM (Nano-SIM and/or eSIM, dual stand-by)</td>
                                        </tr>
                                        <tr>
                                            <td>BODY</td>
                                            <td>IP68 dust/water resistant (up to 1.5m for 30 mins) Stylus support</td>
                                        </tr>
                                        <tr>
                                            <td>DISPLAY Type</td>
                                            <td>Dynamic AMOLED 2X, 120Hz, HDR10+, 1500 nits (peak)</td>
                                        </tr>
                                        <tr>
                                            <td>DISPLAY Size</td>
                                            <td>6.8 inches, 112.1 cm2 (~89.8% screen-to-body ratio)</td>
                                        </tr>
                                        <tr>
                                            <td>MAIN CAMERA Quad</td>
                                            <td>
                                                108 MP, f/1.8, 24mm (wide), 1/1.33", 0.8µm, PDAF, Laser AF, OIS
                                                <br>
                                                10 MP, f/4.9, 240mm (periscope telephoto), 1/3.24", 1.22µm, dual pixel PDAF, OIS, 10x optical zoom
                                                <br>
                                                10 MP, f/2.4, 70mm (telephoto), 1/3.24", 1.22µm, dual pixel PDAF, OIS, 3x optical zoom
                                                <br>
                                                12 MP, f/2.2, 13mm (ultrawide), 1/2.55", 1.4µm, dual pixel PDAF, Super Steady video
                                            </td>
                                        </tr>

                                    </tbody>
                                </table> --}}
                            </div>
                            <!--TODO:add reviews and review form-->
                            <div class="tab__content">
                                <h3>Reviews</h3>
                                <p>Praesent nonummy mi in odio. Nullam accumsan lorem in dui. Vestibulum turpis sem, aliquet
                                    eget, lobortis pellentesque, rutrum eu, nisl. Nullam accumsan lorem in dui. Donec pede
                                    justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>

                                <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Morbi mattis ullamcorper
                                    velit. Pellentesque posuere. Etiam ut purus mattis mauris sodales aliquam. Praesent nec nisl
                                    a purus blandit viverra.</p>

                                <p>Praesent nonummy mi in odio. Nullam accumsan lorem in dui. Vestibulum turpis sem, aliquet
                                    eget, lobortis pellentesque, rutrum eu, nisl. Nullam accumsan lorem in dui. Donec pede
                                    justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>

                                <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Morbi mattis ullamcorper
                                    velit. Pellentesque posuere. Etiam ut purus mattis mauris sodales aliquam. Praesent nec nisl
                                    a purus blandit viverra.</p>
                            </div>

                        </div>
                    </div>


                </div>






            </div>
            <!-- single product start -->
        </div>

    </div>
</div>

<!-- <div class="temp-for-margin" style="margin-top:1000px;">
</div> -->


<script>
    let singleProductMainImage = document.getElementById('single-product-main-slider-image')
    let singleProductImages = document.querySelectorAll('.single-product-content-first-slider-slider>img');
    singleProductMainImage.src = singleProductImages[0].src;
    singleProductImages.forEach((image) => {
        image.addEventListener('click', () => {
            singleProductMainImage.src = image.src;
        });
    });
</script>


@endsection