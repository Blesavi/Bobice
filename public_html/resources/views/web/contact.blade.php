@extends('web.app')
@section('content')
	<div id="main">
		<div class="section section-bg-10 pt-11 pb-17">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="page-title text-center">Kontakt</h2>
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
							<li>Kontakt</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="section pt-10 pb-10">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="text-center mb-1 section-pretitle">Pronađite nas!</div>
						<h2 class="text-center section-title mtn-2">RASADNIK I PLANTAŽA</h2>
						<div class="organik-seperator mb-6 center">
							<span class="sep-holder"><span class="sep-line"></span></span>
							<div class="sep-icon"><i class="organik-flower"></i></div>
							<span class="sep-holder"><span class="sep-line"></span></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 pb-5">
                        <style>
                            #map {
                                height: 450px;
                            }
                            html, body {
                                height: 100%;
                                margin: 0;
                                padding: 0;
                            }
                        </style>
                        <div id="map"></div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3">
						<div class="contact-info">
							<div class="contact-icon">
								<i class="fa fa-map-marker-alt"></i>
							</div>
							<div class="contact-inner">
								<h6 class="contact-title">ADRESA</h6>
								<div class="contact-content">
									Radivoja Dinulovića 4, <br />Deveti maj 18250 – Niš
									<br />
									Opština Palilula, Republika Srbija
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="contact-info">
							<div class="contact-icon">
								<i class="fa fa-phone"></i>
							</div>
							<div class="contact-inner">
								<h6 class="contact-title">TELEFON</h6>
								<div class="contact-content">
                                    <p><a href="tel:00381184262990">+381 18 4262990</a><br><a href="tel:00381604262990">+381 60 4262990</a><br><a href="tel:00381616897824">+381 61 6897824</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="contact-info">
							<div class="contact-icon">
								<i class="fa fa-envelope"></i>
							</div>
							<div class="contact-inner">
								<h6 class="contact-title">EMAIL</h6>
								<div class="contact-content">
									sadnicegoji@gmail.com
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="contact-info">
							<div class="contact-icon">
								<i class="fab fa-viber"></i>
							</div>
							<div class="contact-inner">
								<h6 class="contact-title">VIBER</h6>
								<div class="contact-content">
									+381 61 6897824
								</div>
							</div>
						</div>
					</div>
				</div>
				{{--<div class="row">--}}
					{{--<div class="col-sm-12">--}}
						{{--<hr class="mt-4 mb-7" />--}}
						{{--<div class="text-center mb-1 section-pretitle">Pišite nam!</div>--}}
						{{--<div class="organik-seperator mb-6 center">--}}
							{{--<span class="sep-holder"><span class="sep-line"></span></span>--}}
							{{--<div class="sep-icon"><i class="organik-flower"></i></div>--}}
							{{--<span class="sep-holder"><span class="sep-line"></span></span>--}}
						{{--</div>--}}
						{{--<div class="contact-form-wrapper">--}}
							{{--<form class="contact-form">--}}
								{{--<div class="row">--}}
									{{--<div class="col-md-6">--}}
										{{--<label>Ime <span class="required">*</span></label>--}}
										{{--<div class="form-wrap">--}}
											{{--<input type="text" name="your-name" value="" size="40" />--}}
										{{--</div>--}}
									{{--</div>--}}
									{{--<div class="col-md-6">--}}
										{{--<label>Email <span class="required">*</span></label>--}}
										{{--<div class="form-wrap">--}}
											{{--<input type="email" name="your-email" value="" size="40" />--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}
								{{--<div class="row">--}}
									{{--<div class="col-md-12">--}}
										{{--<label>Naslov</label>--}}
										{{--<div class="form-wrap">--}}
											{{--<input type="text" name="your-subject" value="" size="40" />--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}
								{{--<div class="row">--}}
									{{--<div class="col-md-12">--}}
										{{--<label>poruka</label>--}}
										{{--<div class="form-wrap">--}}
											{{--<textarea name="your-message" cols="40" rows="10"></textarea>--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}
								{{--<div class="row">--}}
									{{--<div class="col-md-12">--}}
										{{--<div class="form-wrap text-center">--}}
											{{--<input type="submit" value="POŠALJI" />--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}
							{{--</form>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			</div>
		</div>
	</div>
@endsection

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANyxEPrFVX8HXzFrXZAJAcR7FwqnS5XgE&callback=initMap"></script>
<script>
    function initMap() {
        var myLatLng = {lat: 43.316063, lng: 21.823204};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: myLatLng
        });

        var contentString = 'GOJI - LJUBA I SINOVI DOO NIŠ<br /><br /> Radivoja Dinulovića 4<br /> Deveti maj 18250 – Niš';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
			icon: "web/images/contact/icon_location.png",
				{{--{{ asset('web/images/contact/icon_location.png') }},--}}
            map: map,
            title: 'Hello World!'
        });
        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });
    }
</script>
