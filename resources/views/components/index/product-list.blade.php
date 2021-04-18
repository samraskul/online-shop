<div class="card">
    <div class="card-header">
        <span class="fa fa-chart-line"></span>
        <div class="">{{ $cardTitle }}</div>
        <a href="{{ $cardLink }}" class="card-btn-more-products">
            <div>more products</div>
        </a>
    </div>

    <div class="card-body beauty-scroll">
        <div class="card-item-container">
            @foreach ($products as $product)
                <a href="{{ route('index.productSinglePage', optimizeUrl($product->id, $product->name)) }}"
                    class="card-item-link">
                    <div class="card-item">
                        <div class="card-item-image"> <img
                                src="{{ $product->images->where('type', 'card')->first()->url }}" alt=""></div>
                        <div class="card-item-name">{{ $product->name }}</div>
                        <div class="card-item-prices">
                            <div class="card-item-old-price">{{ $product->price }}</div>
                            <div class="card-item-price">{{ $product->price - $product->discount }}</div>
                        </div>
                        <div class="card-btn-show-product">Show product</div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>