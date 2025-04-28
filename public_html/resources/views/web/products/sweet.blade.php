@extends('web.app')
@section('content')
	<div id="main">
		<div class="section section-bg-10 pt-11 pb-17">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="page-title text-center">Slatko</h2>
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
							<li>Slatko</li>
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
												<a href="{{ asset('web/images/products/sweet/01.jpg') }}" data-rel="prettyPhoto[gallery]">
													<img src="{{ asset('web/images/products/sweet/01.jpg') }}" alt="" />
												</a>
											</div>
										</div>
										<div>
											<div class="image-thumb">
												<a href="{{ asset('web/images/products/sweet/02.jpg') }}" data-rel="prettyPhoto[gallery]">
													<img src="{{ asset('web/images/products/sweet/02.jpg') }}" alt="" />
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="image-gallery-nav">
									<div class="image-nav-item">
										<div class="image-thumb">
											<img src="{{ asset('web/images/products/sweet/01.jpg') }}" alt="" />
										</div>
									</div>
									<div class="image-nav-item">
										<div class="image-thumb">
											<img src="{{ asset('web/images/products/sweet/02.jpg') }}" alt="" />
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="summary">
									<h1 class="product-title">Slatko</h1>
									<h5 style="margin-top: -10px; color: gray" class="pb-2"><i>od crvenih godži bobica</i></h5>
									<div class="mb-3">
										<p> Ovakav originalni proizvod predstavlja pravi specijalitet kojim ćete iznenaditi svoje goste nesvakidašnjim ukusom.<br>
                                            Za jednu teglicu je potrebno 630g svežih bobica.<br>
                                            Neto: 314ml <br><br>
											<strong>Slatko pakujemo i šaljemo bezbedno brzom poštom na Vašu adresu!</strong></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					@include('web.products.allSideMenu', ['product' => 'sweet'])
				</div>
			</div>
		</div>
	</div>
@endsection
