@extends('base')

@section('content')
<div class="product">
    <div class="product-detail">
        <div class="product-detail__image-container">
            <div class="main-image">
                <img src="" class="image">
            </div>
            <div class="carousel-images">
                <div class="carousel-content">
                    <div class="carousel-nav">
                        @for ($i = 1; $i <= 3; $i++) 
                        <img src="" class="miniature-image active">
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        <div class="main-image-mobile">
            <img src="" class="image-mobile">
        </div>
        <div class="product-detail__info-container">
            <span class="category-name">(category)</span>
            <span class="product-title margins">(product name)</span>
            <span class="product-subtitle margins">(subtitle)</span>
            <div class="product-description margins">
            <!-- product description -->
            </div>
            <span class="price margins">Total: (price)€</span>
            <!-- addItem component -->
        </div>
    </div>
</div>
@endsection