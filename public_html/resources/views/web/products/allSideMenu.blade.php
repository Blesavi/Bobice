<div class="col-md-3 col-md-pull-9">
	<div class="sidebar">
		<div class="widget widget-products">
			<h3 class="widget-title">Proizvodi</h3>
			<ul class="product-list-widget">
				@if($product != 'seedling1')
					<li>
						<a href="{{ route('products.seedling.1') }}">
							<img src="{{ asset('web/images/products/product_seedling_1.jpg') }}" alt="" />
							<span class="product-title">Sadnica - crveni godži</span>
						</a>
					</li>
				@endif
				@if($product != 'seedling2')
					<li>
						<a href="{{ route('products.seedling.2') }}">
							<img src="{{ asset('web/images/products/product_seedling_2.jpg') }}" alt="" />
							<span class="product-title">Sadnica - crni godži</span>
						</a>
					</li>
				@endif
				@if($product != 'seedling3')
					<li>
						<a href="{{ route('products.seedling.3') }}">
							<img src="{{ asset('web/images/products/product_seedling_3.jpg') }}" alt="" />
							<span class="product-title">Sadnica - bordo (žuti) godži</span>
						</a>
					</li>
				@endif
				@if($product != 'berry1')
					<li>
						<a href="{{ route('products.berry.1') }}">
							<img src="{{ asset('web/images/products/product_berry_1.jpg') }}" alt="" />
							<span class="product-title">Crvene godži bobice - 1kg</span>
						</a>
					</li>
				@endif
				@if($product != 'berry2')
					<li>
						<a href="{{ route('products.berry.2') }}">
							<img src="{{ asset('web/images/products/product_berry_2.jpg') }}" alt="" />
							<span class="product-title">Crne godži bobice - 100g</span>
						</a>
					</li>
				@endif
				@if($product != 'jam')
					<li>
						<a href="{{ route('products.jam') }}">
							<img src="{{ asset('web/images/products/product_1.jpg') }}" alt="" />
							<span class="product-title">Džem</span>
						</a>
					</li>
				@endif
				@if($product != 'sweet')
					<li>
						<a href="{{ route('products.sweet') }}">
							<img src="{{ asset('web/images/products/product_2.jpg') }}" alt="" />
							<span class="product-title">Slatko</span>
						</a>
					</li>
				@endif
			</ul>
		</div>
	</div>
</div>