@extends('web.app')
@section('content')
	<div id="main">
		<div class="section section-bg-9 pt-11 pb-17" style="background-image: {{ asset('web/images/app/bg_overlay.png') }} !important;">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="page-title text-center">O nama</h2>
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
							<li>O nama</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="section pt-10 pb-4">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="text-center mb-1 section-pretitle">Upoznajte nas!</div>
						<h2 class="text-center section-title mtn-2">GOJI-LJUBA I SINOVI</h2>
						<div class="organik-seperator mb-9 center">
							<span class="sep-holder"><span class="sep-line"></span></span>
							<div class="sep-icon"><i class="organik-flower"></i></div>
							<span class="sep-holder"><span class="sep-line"></span></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="about-main-img col-lg-6">
						<img src="{{ asset('web/images/about/slider/0.jpg') }}" alt="" />
					</div>
					<div class="about-content col-lg-6">
						<div class="about-content-title">
							<h4>Naša vizija</h4>
							<div class="about-content-title-line"></div>
						</div>
						<div class="about-content-text">
							<p>Našom "vizijom" smo zaokružili proizvodnju odličnog sadnog materijala
								kao i način plasiranja ploda.
								Do najsitnijih detalja smo predvideli način nastajanja organskih plantaža godžija,
								od kontrolisane i propisane sadnje do postavljanja nalivnog sistema i konstrukcije za protivgradnu mrežu.
								<br></p>
							<p>Firma "Goji-Ljuba i sinovi" vodi edukaciju plantažera od formiranja zasada do rezidbe,
								zaštite, prihrane, berbe, skladištenje i preradu ovih lekovitih bobica.
								Organska proizvodnja voća je naše opredeljenje i naša budućnost.</p>
						</div>
						<div class="about-carousel" data-auto-play="true" data-desktop="4" data-laptop="4" data-tablet="4" data-mobile="2">
							<a href="{{ asset('web/images/about/slider/1.jpg') }}" data-rel="prettyPhoto[gallery]">
								<img src="{{ asset('web/images/about/slider/1a.jpg') }}" alt="" />
								<span class="ion-plus-round"></span>
							</a>
							<a href="{{ asset('web/images/about/slider/2.jpg') }}" data-rel="prettyPhoto[gallery]">
								<img src="{{ asset('web/images/about/slider/2a.jpg') }}" alt="" />
								<span class="ion-plus-round"></span>
							</a>
							<a href="{{ asset('web/images/about/slider/3.jpg') }}" data-rel="prettyPhoto[gallery]">
								<img src="{{ asset('web/images/about/slider/3a.jpg') }}" alt="" />
								<span class="ion-plus-round"></span>
							</a>
							<a href="{{ asset('web/images/about/slider/4.jpg') }}" data-rel="prettyPhoto[gallery]">
								<img src="{{ asset('web/images/about/slider/4a.jpg') }}" alt="" />
								<span class="ion-plus-round"></span>
							</a>
							<a href="{{ asset('web/images/about/slider/5.jpg') }}" data-rel="prettyPhoto[gallery]">
								<img src="{{ asset('web/images/about/slider/5a.jpg') }}" alt="" />
								<span class="ion-plus-round"></span>
							</a>
							<a href="{{ asset('web/images/about/slider/6.jpg') }}" data-rel="prettyPhoto[gallery]">
								<img src="{{ asset('web/images/about/slider/6a.jpg') }}" alt="" />
								<span class="ion-plus-round"></span>
							</a>
							<a href="{{ asset('web/images/about/slider/7.jpg') }}" data-rel="prettyPhoto[gallery]">
								<img src="{{ asset('web/images/about/slider/7a.jpg') }}" alt="" />
								<span class="ion-plus-round"></span>
							</a>
							<a href="{{ asset('web/images/about/slider/8.jpg') }}" data-rel="prettyPhoto[gallery]">
								<img src="{{ asset('web/images/about/slider/8a.jpg') }}" alt="" />
								<span class="ion-plus-round"></span>
							</a>
							<a href="{{ asset('web/images/about/slider/9.jpg') }}" data-rel="prettyPhoto[gallery]">
								<img src="{{ asset('web/images/about/slider/9a.jpg') }}" alt="" />
								<span class="ion-plus-round"></span>
							</a>
							<a href="{{ asset('web/images/about/slider/10.jpg') }}" data-rel="prettyPhoto[gallery]">
								<img src="{{ asset('web/images/about/slider/10a.jpg') }}" alt="" />
								<span class="ion-plus-round"></span>
							</a>
						</div>
					</div>
				</div>
				<div class="row">
					<p style="margin-top: 40px; text-align: justify; padding: 20px">
						Firma GOJI-LJUBA I SINOVI D.O.O. NIŠ je osnovana 07.03.2013. godine u Nišu, kao firma koja se
						bavi proizvodnjom sertifikovanog sadnog materijala biljke Goji berry (Lycium barbarum) Ningxia
						No1 – crveni godži i Black goji berry (Lycium ruthenicum) – crni godži, kao i ostale
						varijetete: žuti, narandžasti, purpurni, bordo i ostale, što će biti veoma interesantno u narednim godinama.
						<br><br>
						Preduzeće "GOJI-LJUBA I SINOVI" D.O.O. je nosilac projekta pod nazivom "Organske
						plantaže godžija za bolji život u Srbiji". Projekat ima za cilj da poboljšta organsku proizvodnju
						u Srbiji i to sa vrlo profitabilnom i lekovitom biljkom koja uložena sredstva višestruko i
						neverovatno brzo vraća.
					</p>
				</div>
			</div>
		</div>
        <div class="section section-bg-3 pt-4 pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center mb-1 section-pretitle">Zašto baš godži?</div>

                        <div class="organik-seperator mb-9 center">
                            <span class="sep-holder"><span class="sep-line"></span></span>
                            <div class="sep-icon"><i class="organik-flower"></i></div>
                            <span class="sep-holder"><span class="sep-line"></span></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="icon-boxes">
                            <div class="icon-boxes-icon"><i class="fas fa-heartbeat"></i></div>
                            <div class="icon-boxes-inner">
                                <h6 class="icon-boxes-title">Lekovitost i rodnost</h6>
                                <p>Godži rađa tokom cele godine obilno i spada u red najmoćnijih antioksidanata.</p>
                            </div>
                        </div>
                        <div class="icon-boxes">
                            <div class="icon-boxes-icon"><i class="fab fa-pagelines"></i></div>
                            <div class="icon-boxes-inner">
                                <h6 class="icon-boxes-title">Organska proizvodnja</h6>
                                <p>Godži se isključivo organski gaji gde je obavezan sistem za navodnjavanje, stubovi, protivgradna mreža, bela divlja detelina.</p>
                            </div>
                        </div>
                        <div class="icon-boxes">
                            <div class="icon-boxes-icon"><i class="fas fa-hand-holding-usd"></i></div>
                            <div class="icon-boxes-inner">
                                <h6 class="icon-boxes-title">Profitabilnost</h6>
                                <p>Plod godžija je veoma cenjen i skup, te vraća uložena sredstva već u prvoj i drugoj godini.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="text-center">
                            <img src="{{ asset('web/images/home/red-goji.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="icon-boxes right">
                            <div class="icon-boxes-icon"><i class="fas fa-balance-scale"></i></div>
                            <div class="icon-boxes-inner">
                                <h6 class="icon-boxes-title">Siguran otkup</h6>
                                <p>Naša firma vrši po ugovoru garantovan otkup ploda.</p>
                            </div>
                        </div>
                        <div class="icon-boxes right">
                            <div class="icon-boxes-icon"><i class="fas fa-handshake"></i></div>
                            <div class="icon-boxes-inner">
                                <h6 class="icon-boxes-title">Kooperacija</h6>
                                <p>Nudimo sertifikovane sadnice, potpisujemo ugovor sa plantažerima o otkupu, preradi i plasmanu proizvoda od godžija.</p>
                            </div>
                        </div>
                        <div class="icon-boxes right">
                            <div class="icon-boxes-icon"><i class="fas fa-pencil-alt"></i></div>
                            <div class="icon-boxes-inner">
                                <h6 class="icon-boxes-title">Edukacija</h6>
                                <p>Pravovremeno vršimo edukaciju plantažera o gajenju godžija, načinu branja, pakovanja, skladištenja itd.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <a class="organik-btn small col-md-offset-5 col-md-2 col-sm-offset-4 col-sm-4 col-xs-offset-3 col-xs-6" href="{{ route('cooperation') }}">POKRENI BIZNIS</a>
                </div>
            </div>
        </div>
		<div class="section border-bottom pt-4 pb-10">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="text-center mb-1 section-pretitle">Naš tim</div>
						<h2 class="text-center section-title mtn-2">Mi smo Jovanovići</h2>
						<div class="organik-seperator center mb-8">
							<span class="sep-holder"><span class="sep-line"></span></span>
							<div class="sep-icon"><i class="organik-flower"></i></div>
							<span class="sep-holder"><span class="sep-line"></span></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-12">
						<div class="team-member">
							<div class="image">
								<img src="{{ asset('web/images/about/ljuba.jpg') }}" alt="Ljubiša jovanović" />
							</div>
							<div class="team-info">
								<h5 class="name">Ljubiša jovanović</h5>
								<p class="bio">Vlasnik i osnivač firme. Nosilac projekta "Organske plantaže godžija za bolji život u Srbiji".</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-12">
						<div class="team-member">
							<div class="image">
								<img src="{{ asset('web/images/about/nemanja.jpg') }}" alt="Nemanja Jovanović" />
							</div>
							<div class="team-info">
								<h5 class="name">Nemanja Jovanović</h5>
								<p class="bio">Dipl. inž. agronomije - voćarstvo i vinogradarstvo. Direktor i menadžer firme "Goji-Ljuba i sinovi".</p>
								<ul class="social-list">
									<li><a href="https://www.facebook.com/nemcakole" data-toggle="tooltip" data-placement="top" data-original-title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="https://www.instagram.com/nemanja_24_jovanovic/" data-toggle="tooltip" data-placement="top" data-original-title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-12">
						<div class="team-member">
							<div class="image">
								<img src="{{ asset('web/images/about/nikola.jpg') }}" alt="Nikola Jovanović" />
							</div>
							<div class="team-info">
								<h5 class="name">Nikola Jovanović</h5>
								<p class="bio">Dip. inž. agronomije - voćarstvo i vinogradarstvo. Stručni konsultant i organizator u rasadniku i plantaži.</p>
								<ul class="social-list">
									<li><a href="https://www.facebook.com/nemcakolee" data-toggle="tooltip" data-placement="top" data-original-title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="https://www.instagram.com/kole_kiler/" data-toggle="tooltip" data-placement="top" data-original-title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
                    <div class="col-md-3 col-sm-12">
                        <div class="team-member">
                            <div class="image">
                                <img src="{{ asset('web/images/about/slovenka.jpg') }}" alt="Slovenka Jovanović" />
                            </div>
                            <div class="team-info">
                                <h5 class="name">Slovenka Jovanović</h5>
                                <p class="bio">Zadužena oko edukacije branja. Inovator u preradi proizvoda i recepata od godžija.</p>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
@endsection
