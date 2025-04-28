@extends('web.app')
@section('content')
	<div id="main">
		<div class="section section-bg-10 pt-11 pb-17">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="page-title text-center">Proizvodi</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="section border-bottom pt-2 pb-2">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<ul class="breadcrumbs">
							<li><a href="./">Početna</a></li>
							<li>Proizvodi</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="section pt-12 pb-9">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="text-center mb-1 section-pretitle">Poručite!</div>
						<h2 class="text-center section-title mtn-2">Naši proizvodi</h2>
						<div class="organik-seperator center">
							<span class="sep-holder"><span class="sep-line"></span></span>
							<div class="sep-icon"><i class="organik-flower"></i></div>
							<span class="sep-holder"><span class="sep-line"></span></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 p-0">
						<div class="text-center">
							<ul class="masonry-filter">
								<li><a href="#" data-filter="" class="active">Sve</a></li>
								<li><a href="#" data-filter=".seedling">Sadnice</a></li>
								<li><a href="#" data-filter=".berry">Sveže bobice</a></li>
								{{--<li><a href="#" data-filter=".products">Proizvodi</a></li>--}}
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="product-grid masonry-grid-post">
						<div class="col-md-3 col-sm-6 product-item masonry-item text-center seedling">
							<div class="product-thumb">
								<a href="{{ route('products.seedling.1') }}">
									<img src="{{ asset('web/images/products/product_seedling_1.jpg') }}" alt="" />
								</a>
							</div>
							<div class="product-info">
								<a href="{{ route('products.seedling.1') }}">
									<h2 class="title">Sadnica - crveni godži</h2>
								</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 product-item masonry-item text-center seedling">
							<div class="product-thumb">
								<a href="{{ route('products.seedling.2') }}">
									<img src="{{ asset('web/images/products/product_seedling_2.jpg') }}" alt="" />
								</a>
							</div>
							<div class="product-info">
								<a href="{{ route('products.seedling.2') }}">
									<h2 class="title">Sadnica - crni godži</h2>
								</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 product-item masonry-item text-center seedling">
							<div class="product-thumb">
								<a href="{{ route('products.seedling.3') }}">
									<img src="{{ asset('web/images/products/product_seedling_3.jpg') }}" alt="" />
								</a>
							</div>
							<div class="product-info">
								<a href="{{ route('products.seedling.3') }}">
									<h2 class="title">Sadnica - bordo (žuti) godži</h2>
								</a>
							</div>
						</div>
                        <div class="col-md-3 col-sm-6 product-item masonry-item text-center berry">
                            <div class="product-thumb">
                                <a href="{{ route('products.berry.1') }}">
                                    <img src="{{ asset('web/images/products/product_berry_1.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="{{ route('products.berry.1') }}">
                                    <h2 class="title">Crvene godži bobice - 1kg</h2>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 product-item masonry-item text-center berry">
                            <div class="product-thumb">
                                <a href="{{ route('products.berry.2') }}">
                                    <img src="{{ asset('web/images/products/product_berry_2.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="{{ route('products.berry.2') }}">
                                    <h2 class="title">Crne godži bobice - 100g</h2>
                                </a>
                            </div>
                        </div>
                        {{--<div class="col-md-3 col-sm-6 product-item masonry-item text-center products">
                            <div class="product-thumb">
                                <a href="{{ route('products.jam') }}">
                                    <img src="{{ asset('web/images/products/product_1.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="{{ route('products.jam') }}">
                                    <h2 class="title">Džem</h2>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 product-item masonry-item text-center products">
                            <div class="product-thumb">
                                <a href="{{ route('products.sweet') }}">
                                    <img src="{{ asset('web/images/products/product_2.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="{{ route('products.sweet') }}">
                                    <h2 class="title">Slatko</h2>
                                </a>
                            </div>
                        </div>--}}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
