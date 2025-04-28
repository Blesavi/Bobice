@extends('web.app')
@section('content')
	<div id="main">
		<div class="section section-bg-9 pt-11 pb-17">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="page-title text-center">Gallery Grid</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="section border-bottom pt-2 pb-2">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<ul class="breadcrumbs">
							<li><a href="./">Home</a></li>
							<li>Gallery Grid</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="section pt-10 pb-9">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 p-0">
						<div class="text-center">
							<ul class="masonry-filter">
								<li><a href="#" data-filter="" class="active">All</a></li>
								<li><a href="#" data-filter=".dried">Dried</a></li>
								<li><a href="#" data-filter=".fruits">Fruits</a></li>
								<li><a href="#" data-filter=".vegetables">Vegetables</a></li>
								<li><a href="#" data-filter=".juice">Juice</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="gallery-grid masonry-grid-post">
						<div class="col-md-4 col-sm-6 gallery-item masonry-item text-center fruits juice">
							<div class="gallery-image">
								<a href="images/gallery/gallery_960x640.jpg" data-rel="prettyPhoto[gallery]">
									<img src="images/gallery/gallery_370x230.jpg" alt="" />
									<div class="desc-wrap">
										<div class="desc">
											<span class="icon ion-android-search"></span>
											<div class="title"> Oranges</div>
											<div class="cates"> Fruits, Juices</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 gallery-item masonry-item text-center dried vegetables">
							<div class="gallery-image">
								<a href="images/gallery/gallery_960x640.jpg" data-rel="prettyPhoto[gallery]">
									<img src="images/gallery/gallery_370x230.jpg" alt="" />
									<div class="desc-wrap">
										<div class="desc">
											<span class="icon ion-android-search"></span>
											<div class="title"> Oranges</div>
											<div class="cates"> Dried, Vegetables</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 gallery-item masonry-item text-center fruits">
							<div class="gallery-image">
								<a href="images/gallery/gallery_960x640.jpg" data-rel="prettyPhoto[gallery]">
									<img src="images/gallery/gallery_370x230.jpg" alt="" />
									<div class="desc-wrap">
										<div class="desc">
											<span class="icon ion-android-search"></span>
											<div class="title"> Oranges</div>
											<div class="cates"> Fruits</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 gallery-item masonry-item text-center fruits">
							<div class="gallery-image">
								<a href="images/gallery/gallery_960x640.jpg" data-rel="prettyPhoto[gallery]">
									<img src="images/gallery/gallery_370x230.jpg" alt="" />
									<div class="desc-wrap">
										<div class="desc">
											<span class="icon ion-android-search"></span>
											<div class="title"> Oranges</div>
											<div class="cates"> Fruits</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 gallery-item masonry-item text-center juice">
							<div class="gallery-image">
								<a href="images/gallery/gallery_960x640.jpg" data-rel="prettyPhoto[gallery]">
									<img src="images/gallery/gallery_370x230.jpg" alt="" />
									<div class="desc-wrap">
										<div class="desc">
											<span class="icon ion-android-search"></span>
											<div class="title"> Oranges</div>
											<div class="cates"> Juices</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 gallery-item masonry-item text-center dried juice">
							<div class="gallery-image">
								<a href="images/gallery/gallery_960x640.jpg" data-rel="prettyPhoto[gallery]">
									<img src="images/gallery/gallery_370x230.jpg" alt="" />
									<div class="desc-wrap">
										<div class="desc">
											<span class="icon ion-android-search"></span>
											<div class="title"> Oranges</div>
											<div class="cates"> Dried, Juices</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 gallery-item masonry-item text-center fruits vegetables">
							<div class="gallery-image">
								<a href="images/gallery/gallery_960x640.jpg" data-rel="prettyPhoto[gallery]">
									<img src="images/gallery/gallery_370x230.jpg" alt="" />
									<div class="desc-wrap">
										<div class="desc">
											<span class="icon ion-android-search"></span>
											<div class="title"> Oranges</div>
											<div class="cates"> Fruits, Vegetables</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 gallery-item masonry-item text-center fruits">
							<div class="gallery-image">
								<a href="images/gallery/gallery_960x640.jpg" data-rel="prettyPhoto[gallery]">
									<img src="images/gallery/gallery_370x230.jpg" alt="" />
									<div class="desc-wrap">
										<div class="desc">
											<span class="icon ion-android-search"></span>
											<div class="title"> Oranges</div>
											<div class="cates"> Fruits</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 gallery-item masonry-item text-center dried">
							<div class="gallery-image">
								<a href="images/gallery/gallery_960x640.jpg" data-rel="prettyPhoto[gallery]">
									<img src="images/gallery/gallery_370x230.jpg" alt="" />
									<div class="desc-wrap">
										<div class="desc">
											<span class="icon ion-android-search"></span>
											<div class="title"> Oranges</div>
											<div class="cates"> Dried</div>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="pagination">
						<a class="prev page-numbers" href="#">Prev</a>
						<a class="page-numbers" href="#">1</a>
						<span class="page-numbers current">2</span>
						<a class="page-numbers" href="#">3</a>
						<a class="next page-numbers" href="#">Next</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
