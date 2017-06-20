@extends('layouts.app')

@section('content')
<header class="header-collections no-image">
    <div class="content-banner-tittle">
        <h1>Suscripciones</h1>
    </div>
</header>

<main class="product-grid">
@foreach($subscriptions as $subscription)
<section class="b-lazy product-thumbnail">
    <div class="image-title-wrapper">
        <a href="/checkout?subscription={{$subscription['id']}}" class="">
            <div class="hover-content">
                <img class="b-lazy" src="{{$subscription['image']}}"/>
                <span class="title">{{$subscription['description']}}</span>
                <span class="shortened-description">Descripcion larga de la subscripción.</span>
            </div>
            <div class="discount-ribbon"></div>
            <div class="product-badge">
                <span></span>
            </div>
            <img class="b-lazy" src="{{$subscription['image']}}" />
        </a>
        <h2 class="title">{{$subscription['description']}}</h2>
    </div>
    <div class="details">
        <span class="volume"> 
            <!-- Snippet for rendering Product Details (such as 'Colour') from tags -->
            <div class="meta-detail volume">
                <div class="detail-title">Volumen</div>
                <div class="value 355ml">355ML</div>
            </div>
        </span>
        <div class="price-wrapper">
            <span class="price">${{number_format($subscription['price'],2)}}</span>
            <span class="compare-price"></span>
        </div>
    </div>
    <div data-quick-add class="quick-add-to-cart">
         <a href="/checkout?subscription={{$subscription['id']}}" class="add-button">
            Suscribirme
        </a>
    </div>
</section>
@endforeach

</main>


@endsection



<!-- Styles -->
