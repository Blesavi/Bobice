@extends('web.app')
@section('content')
	<div id="main">
		<div class="section section-bg-10 pt-11 pb-17">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="page-title text-center">Džem</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="section border-bottom pt-2 pb-2">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<ul class="breadcrumbs">
							<li><a href="{{ route('home') }}">Početna</a></li>
							<li><a href="{{ route('products') }}">Proizvodi</a></li>
							<li>Džem</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="section pt-7 pb-7">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-md-push-3">
						<div class="single-product">
							<div class="col-md-6">
								<div class="image-gallery">
									<div class="image-gallery-inner">
										<div>
											<div class="image-thumb">
												<a href="{{ asset('web/images/products/jam/01.jpg') }}" data-rel="prettyPhoto[gallery]">
													<img src="{{ asset('web/images/products/jam/01.jpg') }}" alt="" />
												</a>
											</div>
										</div>
										<div>
											<div class="image-thumb">
												<a href="{{ asset('web/images/products/jam/02.jpg') }}" data-rel="prettyPhoto[gallery]">
													<img src="{{ asset('web/images/products/jam/02.jpg') }}" alt="" />
												</a>
											</div>
										</div>
										<div>
											<div class="image-thumb">
												<a href="{{ asset('web/images/products/jam/03.jpg') }}" data-rel="prettyPhoto[gallery]">
													<img src="{{ asset('web/images/products/jam/03.jpg') }}" alt="" />
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="image-gallery-nav">
									<div class="image-nav-item">
										<div class="image-thumb">
											<img src="{{ asset('web/images/products/jam/01.jpg') }}" alt="" />
										</div>
									</div>
									<div class="image-nav-item">
										<div class="image-thumb">
											<img src="{{ asset('web/images/products/jam/02.jpg') }}" alt="" />
										</div>
									</div>
									<div class="image-nav-item">
										<div class="image-thumb">
											<img src="{{ asset('web/images/products/jam/03.jpg') }}" alt="" />
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="summary">
									<h1 class="product-title">Džem</h1>
									<h5 style="margin-top: -10px; color: gray" class="pb-2"><i>od crvenih godži bobica</i></h5>
									<div class="mb-3">
										<p> Zasladite dan džemom i uživajte u dobrobiti ručno odabranih godži bobica sa naše organske plantaže.<br>
											Za jednu teglicu džema potrebno je 630g svežeg ploda.<br>
											Neto: 314ml <br><br>
											<strong>Džem pakujemo i šaljemo bezbedno brzom poštom na Vašu adresu!</strong></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					@include('web.products.allSideMenu', ['product' => 'jam'])
				</div>
			</div>
		</div>
	</div>
@endsection
