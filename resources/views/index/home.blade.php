@extends('index.layouts.app')
@section('content')

<div class="container-row ">
    <div class="main">
        <div class="main-categories display-on-not-mobile">categories</div>
        <div class="main-search">
            <form class="main-search-form" action="" method="GET">
                <div>
                    <select name="" id="">
                        <option value="All">All Categories</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category }}">{{ $category }}</option>
                        @endforeach
                    </select>

                </div>
                <div>
                    <input type="text" name="search" placeholder="Enter keywords here...">
                </div>
                <li class="fa fa-search"></li>
            </form>
        </div>
        <div class="main-menu">
            <ul class="main-menu-items">
                <li class="main-menu-item"><span class="fa fa-th-large"></span><a href="#">All Categories</a>
                </li>
                @foreach ($categories as $category)
                    <li class="main-menu-item"><span class="fa fa-th-large"></span>
                        <a href="/category/{{ $category }}">{{ $category }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="card">
                <div class="card-header">
                    <span class="fa fa-blog"></span>
                    <div class="">Recent Blog Posts</div>
                </div>
                <div class="card-body">
                    <div class="card-body-padding">
                        @foreach ($recentPosts as $recentPost)
                            <a href="">{{ $recentPost }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- main content start -->
        <!-- main content start -->
        <div class="main-content">
            <!-- top slider start-->
            <div class="main-content-header">
                <div class="main-content-header-slider">
                    <a href="">
                        <img src="/images/1.jpg" alt="">
                    </a>
                </div>

                <div class="main-content-header-under-slider">
                    <a href=""><img src="/images/banner_home1_t1.jpg" alt=""></a>
                    <a href=""><img src="/images/banner_home1_t2.jpg" alt=""></a>
                    <a href=""><img src="/images/banner_home1_t3.jpg" alt=""></a>
                </div>
            </div>
            <!-- top slider end-->

            <div class="main-card">

                <!-- card start -->
                <div class="card">
                    <div class="card-header">
                        <span class="fa fa-chart-line"></span>
                        <div class="">Most views</div>
                        <a href="" class="card-btn-more-products">
                            <div> more products</div>
                        </a>
                    </div>
                    <div class="card-body beauty-scroll">

                        <div class="card-item-container">

                            @foreach ($mostViewProducts as $product)
                            <a href="{{ route('index.productSinglePage', optimizeProductUrl($product->id, $product->name)) }}" class="card-item-link">
                                <div class="card-item">
                                    {{-- @php
                                        dd($product->images);
                                    @endphp --}}
                                    {{-- <div class="card-item-image"><img src="/images/0a0a1826f33eb6482ab0d604faf11e07.jpg" alt=""></div> --}}
                                    <div class="card-item-image"> <img src="{{ $product->images->where('type', 'card')->first()->url }}" alt=""></div>
                                    <div class="card-item-name">{{ $product->name }}</div>
                                    <div class="card-item-prices">
                                        <div class="card-item-old-price">{{ $product->price }}</div>
                                        <div class="card-item-price">{{ $product->price - $product->discount }}</div>
                                    </div>
                                    <div class="card-btn-show-product">  Show product</div>
                                </div>
                            </a>    
                            @endforeach
                            
                            

                        </div>

                    </div>
                </div>
                <!-- card end -->

                <!-- card start -->
                {{-- <div class="card">
                    <div class="card-header">
                        <span class="fa fa-chart-line"></span>
                        <div class="">Most views</div>
                        <a href="" class="card-btn-more-products">
                            <div> more products</div>
                        </a>
                    </div>
                    <div class="card-body beauty-scroll">

                        <div class="card-item-container">

                            <a href="" class="card-item-link">
                                <div class="card-item">
                                    <div class="card-item-image"><img src="/images/0a0a1826f33eb6482ab0d604faf11e07.jpg" alt=""></div>
                                    <div class="card-item-name">Cited Mikva Pica</div>
                                    <div class="card-item-prices">
                                        <div class="card-item-old-price">100.000</div>
                                        <div class="card-item-price">90.000</div>
                                    </div>
                                    <div class="card-btn-show-product">Show product</div>
                                </div>
                            </a>
                            <a href="" class="card-item-link">
                                <div class="card-item">
                                    <div class="card-item-image"><img src="/images/0a0a1826f33eb6482ab0d604faf11e07.jpg" alt=""></div>
                                    <div class="card-item-name">Cited Mikva Pica Cited Mikva Pica Cited Mikva
                                        Pica
                                        Cited
                                        Mikva Pica</div>
                                    <div class="card-item-prices">
                                        <div class="card-item-old-price">100.000</div>
                                        <div class="card-item-price">90.000</div>
                                    </div>
                                    <div class="card-btn-show-product">Show product</div>
                                </div>
                            </a>
                            <a href="" class="card-item-link">
                                <div class="card-item">
                                    <div class="card-item-image"><img src="/images/0a0a1826f33eb6482ab0d604faf11e07.jpg" alt=""></div>
                                    <div class="card-item-name">Cited Mikva Pica Cited Mikva Pica Cited Mikva
                                        Pica
                                        Cited
                                        Mikva PicaPica
                                        Cited
                                        Mikva PicaPica
                                        Cited
                                        Mikva Pica</div>
                                    <div class="card-item-prices">
                                        <div class="card-item-old-price">100.000</div>
                                        <div class="card-item-price">90.000</div>
                                    </div>
                                    <div class="card-btn-show-product">Show product</div>
                                </div>
                            </a>
                            <a href="" class="card-item-link">
                                <div class="card-item">
                                    <div class="card-item-image"><img src="/images/0a0a1826f33eb6482ab0d604faf11e07.jpg" alt=""></div>
                                    <div class="card-item-name">Cited Mikva Pica Cited Mikva Pica Cited Mikva
                                        Pica
                                        Cited
                                        Mikva Pica</div>
                                    <div class="card-item-prices">
                                        <div class="card-item-old-price">100.000</div>
                                        <div class="card-item-price">90.000</div>
                                    </div>
                                    <div class="card-btn-show-product">Show product</div>
                                </div>
                            </a>
                            <a href="" class="card-item-link">
                                <div class="card-item">
                                    <div class="card-item-image"><img src="/images/0a0a1826f33eb6482ab0d604faf11e07.jpg" alt=""></div>
                                    <div class="card-item-name">Cited Mikva Pica Cited Mikva Pica Cited Mikva
                                        Pica
                                        Cited
                                        Mikva Pica</div>
                                    <div class="card-item-prices">
                                        <div class="card-item-old-price">100.000</div>
                                        <div class="card-item-price">90.000</div>
                                    </div>
                                    <div class="card-btn-show-product">Show product</div>
                                </div>
                            </a>
                            <a href="" class="card-item-link">
                                <div class="card-item">
                                    <div class="card-item-image"><img src="/images/0a0a1826f33eb6482ab0d604faf11e07.jpg" alt=""></div>
                                    <div class="card-item-name">Cited Mikva Pica Cited Mikva Pica Cited Mikva
                                        Pica
                                        Cited
                                        Mikva Pica</div>
                                    <div class="card-item-prices">
                                        <div class="card-item-old-price">100.000</div>
                                        <div class="card-item-price">90.000</div>
                                    </div>
                                    <div class="card-btn-show-product">Show product</div>
                                </div>
                            </a>

                        </div>

                    </div>
                </div> --}}
                <!-- card end -->

                <!-- card start -->
                {{-- <div class="card">
                    <div class="card-header">
                        <span class="fa fa-chart-line"></span>
                        <div class="">Most views</div>
                        <a href="" class="card-btn-more-products">
                            <div> more products</div>
                        </a>
                    </div>
                    <div class="card-body beauty-scroll">

                        <div class="card-item-container">

                            <a href="" class="card-item-link">
                                <div class="card-item">
                                    <div class="card-item-image"><img src="/images/0a0a1826f33eb6482ab0d604faf11e07.jpg" alt=""></div>
                                    <div class="card-item-name">Cited Mikva Pica</div>
                                    <div class="card-item-prices">
                                        <div class="card-item-old-price">100.000</div>
                                        <div class="card-item-price">90.000</div>
                                    </div>
                                    <div class="card-btn-show-product">Show product</div>
                                </div>
                            </a>
                            <a href="" class="card-item-link">
                                <div class="card-item">
                                    <div class="card-item-image"><img src="/images/0a0a1826f33eb6482ab0d604faf11e07.jpg" alt=""></div>
                                    <div class="card-item-name">Cited Mikva Pica Cited Mikva Pica Cited Mikva
                                        Pica
                                        Cited
                                        Mikva Pica</div>
                                    <div class="card-item-prices">
                                        <div class="card-item-old-price">100.000</div>
                                        <div class="card-item-price">90.000</div>
                                    </div>
                                    <div class="card-btn-show-product">Show product</div>
                                </div>
                            </a>
                            <a href="" class="card-item-link">
                                <div class="card-item">
                                    <div class="card-item-image"><img src="/images/0a0a1826f33eb6482ab0d604faf11e07.jpg" alt=""></div>
                                    <div class="card-item-name">Cited Mikva Pica Cited Mikva Pica Cited Mikva
                                        Pica
                                        Cited
                                        Mikva PicaPica
                                        Cited
                                        Mikva PicaPica
                                        Cited
                                        Mikva Pica</div>
                                    <div class="card-item-prices">
                                        <div class="card-item-old-price">100.000</div>
                                        <div class="card-item-price">90.000</div>
                                    </div>
                                    <div class="card-btn-show-product">Show product</div>
                                </div>
                            </a>
                            <a href="" class="card-item-link">
                                <div class="card-item">
                                    <div class="card-item-image"><img src="/images/0a0a1826f33eb6482ab0d604faf11e07.jpg" alt=""></div>
                                    <div class="card-item-name">Cited Mikva Pica Cited Mikva Pica Cited Mikva
                                        Pica
                                        Cited
                                        Mikva Pica</div>
                                    <div class="card-item-prices">
                                        <div class="card-item-old-price">100.000</div>
                                        <div class="card-item-price">90.000</div>
                                    </div>
                                    <div class="card-btn-show-product">Show product</div>
                                </div>
                            </a>
                            <a href="" class="card-item-link">
                                <div class="card-item">
                                    <div class="card-item-image"><img src="/images/0a0a1826f33eb6482ab0d604faf11e07.jpg" alt=""></div>
                                    <div class="card-item-name">Cited Mikva Pica Cited Mikva Pica Cited Mikva
                                        Pica
                                        Cited
                                        Mikva Pica</div>
                                    <div class="card-item-prices">
                                        <div class="card-item-old-price">100.000</div>
                                        <div class="card-item-price">90.000</div>
                                    </div>
                                    <div class="card-btn-show-product">Show product</div>
                                </div>
                            </a>
                            <a href="" class="card-item-link">
                                <div class="card-item">
                                    <div class="card-item-image"><img src="/images/0a0a1826f33eb6482ab0d604faf11e07.jpg" alt=""></div>
                                    <div class="card-item-name">Cited Mikva Pica Cited Mikva Pica Cited Mikva
                                        Pica
                                        Cited
                                        Mikva Pica</div>
                                    <div class="card-item-prices">
                                        <div class="card-item-old-price">100.000</div>
                                        <div class="card-item-price">90.000</div>
                                    </div>
                                    <div class="card-btn-show-product">Show product</div>
                                </div>
                            </a>

                        </div>

                    </div>
                </div> --}}
                <!-- card end -->

            </div>

                    {{-- <div class="card">
                        <div class="card-header">
                            <span class="fa fa-tags"></span>
                            <div class="">Offers</div>
                            <a href="" class="card-btn-more-products">
                                <div> more products</div>
                            </a>

                        </div>
                        <div class="card-body">
                            <a href="">Gget more with our 10th Anniversary sale guide!</a>
                            <a href="">7 items to make your work wardrobe more fun</a>
                            <a href="">Insanely cute pet costumes for cats & dogs</a>
                            <a href="">Stay fashionably chill</a>
                            <a href="">4 swimsuit styles you can wear as outfits</a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <span class="fa fa-heart"></span>
                            <div class="">Most Loved</div>
                            <a href="" class="card-btn-more-products">
                                <div> more products</div>
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="">Get more with our 10th Anniversary sale guide!</a>
                            <a href="">7 items to make your work wardrobe more fun</a>
                            <a href="">Insanely cute pet costumes for cats & dogs</a>
                            <a href="">Stay fashionably chill</a>
                            <a href="">4 swimsuit styles you can wear as outfits</a>
                        </div>
                    </div> --}}

            <div>

            </div>

        </div>
        <!-- main content end -->
        <!-- main content end -->

    </div>
</div>
    
@endsection