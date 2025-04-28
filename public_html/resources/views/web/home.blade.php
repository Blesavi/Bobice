@extends('web.app')
@section('content')
    <div id="main">
        {{--1. Main slider--}}
        <div class="section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 p-0">
                        <div id="rev_slider" class="rev_slider fullscreenbanner">
                            <ul>
                                <li data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide">
                                    <img src="{{ asset('web/images/home/top_background_1.jpg') }}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" />
                                    <div class="tp-caption rs-parallaxlevel-1"
                                         data-x="center" data-hoffset=""
                                         data-y="center" data-voffset="-80"
                                         data-width="['none','none','none','none']"
                                         data-height="['none','none','none','none']"
                                         data-type="image" data-responsive_offset="on"
                                         data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                         data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                        <img src="{{ asset('web/images/home/slider-overlay-1.png') }}" alt="" />
                                    </div>
                                </li>
                                <li data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide">
                                    <img src="{{ asset('web/images/home/top_background_2.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" />
                                    <div class="tp-caption rs-parallaxlevel-2"
                                         data-x="center" data-hoffset=""
                                         data-y="center" data-voffset="-80"
                                         data-width="['none','none','none','none']"
                                         data-height="['none','none','none','none']"
                                         data-type="image" data-responsive_offset="on"
                                         data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                         data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]">
                                        <img src="{{ asset('web/images/home/slider-overlay-2-1.png') }}" alt="" />
                                    </div>
                                    <div class="tp-caption rs-parallaxlevel-1"
                                         data-x="center" data-hoffset=""
                                         data-y="center" data-voffset="-80"
                                         data-width="['none','none','none','none']"
                                         data-height="['none','none','none','none']"
                                         data-type="image" data-responsive_offset="on"
                                         data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                         data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                        <img src="{{ asset('web/images/home/slider-overlay-2-2.png') }}" alt="" />
                                    </div>
                                    <div class="tp-caption rs-parallaxlevel-1"
                                         data-x="center" data-hoffset=""
                                         data-y="center" data-voffset="-80"
                                         data-width="['none','none','none','none']"
                                         data-height="['none','none','none','none']"
                                         data-type="image" data-responsive_offset="on"
                                         data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                         data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                        <img src="{{ asset('web/images/home/slider-overlay-2-2.png') }}" alt="" />
                                    </div>
                                    <div class="tp-caption desc-1 hidden-xs hidden-s"
                                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                         data-y="['top','top','top','top']" data-voffset="['700','700','700','700']"
                                         data-width="['699','699','699','699']" data-height="['125','125','125','none']"
                                         data-whitespace="normal" data-type="text" data-responsive_offset="on"
                                         data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":500,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                         data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                         data-paddingleft="[0,0,0,0]">
                                        Naš porodični rasadnik i organska plantaža godži bobica se nalazi u Nišu.
                                    </div>
                                    <a class="tp-caption btn-2 hidden-xs" href="{{ route('about') }}"
                                       data-x="['center','center','center','center']"
                                       data-y="['center','center','center','center']" data-voffset="['350','350','350','350']"
                                       data-width="['auto']" data-height="['auto']"
                                       data-type="button" data-responsive_offset="on"
                                       data-responsive="off"
                                       data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeIn","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(95,189,116);bg:rgba(51, 51, 51, 0);"}]'
                                       data-textAlign="['inherit','inherit','inherit','inherit']"
                                       data-paddingtop="[16,16,16,16]" data-paddingright="[30,30,30,30]"
                                       data-paddingbottom="[16,16,16,16]" data-paddingleft="[30,30,30,30]">Upoznajte nas!
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--2. Vrh lekovitosti--}}
        <div class="section section-bg-1 section-cover pt-10 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mt-3 mb-3">
                            <img src="{{ asset('web/images/home/black-goji.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-1 section-pretitle">Vrh lekovitosti!</div>
                        <h2 class="section-title mtn-2 mb-3">CRNI GODŽI <br>U BORBI PROTIV RAKA</h2>
                        <p class="mb-4">
                            Crni godži (Black goji berry) sadrži redak i veoma moćan antioksidant koji snažno deluje na ljudski organizam u uništavanju slobodnih radikala i celija raka, a to je <strong>oligomerni proantocijanidin (OPC).</strong> Efikasan je kod više od 70 oboljenja. Nivo šećera je jako mali pa je odličan za dijabetičare. Dnevni unos od 5-10 bobica.
                        </p>
                        <a class="organik-btn arrow" href="{{ route('goji.black') }}">Saznajte više</a>
                    </div>
                </div>
            </div>
        </div>
        {{--3. Sveze dodzi bobice--}}
        <div class="section section-bg-2 section-cover pt-14">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="text-center">
                            {{--<div class="mb-1 section-pretitle white">Novi proizvod</div>--}}
                            <h2 class="section-title mtn-2 mb-3">"IMUNO BOMBA"</h2>
                            <p class="white mb-1">
                                Ova mešavina je prava riznica vitamina, mikro-elemenata i antioksidanata.
                            <p class="white mb-1">
                                Preporučuje se postoperativnim pacijentima za brz oporavak organizma, <br>
                                jačanje imuniteta i kardiovaskularnog sistema. Nadoknađuje deficit vitamina, <br>
                                posebno u zimskom periodu, sezoni gripa i prehlada.
                            <p class="white mb-1">
                                Sadrži sve orašaste plodove, žitarice, obilje semenki, jezgra koštica kajsije i šljive, <br>
                                organski med i godži bobice.
                            {{--<p class="black mb-1">
                                Uz svaki naš proizvod dobijate ‘’PLAN ISHRANE’’ sa najboljim savetima i receptima <br>
                                za zdravu ishranu.--}}
                            <div class="countdown-wrap mb-4">

                            </div>
                            {{--<a class="organik-btn brown" href="{{ route('products') }}">naručite</a>--}}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-center floating">
                            <img src="{{ asset('web/images/home/energetski-med.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--4. Zasto bas godzi--}}
        <div class="section section-bg-3 pt-6 pb-6">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center mb-1 section-pretitle">Zašto baš godži?</div><h2 class="text-center section-title mtn-2">pokreni biznis</h2>

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
                                <p>Plod godžija je veoma cenjen i skup, vraća uložena sredstva već u prvoj i drugoj godini.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="text-center">
                            <img src="{{ asset('web/images/home/black-goji-3.png') }}" alt="">
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
                    <a class="organik-btn small col-md-offset-5 col-md-2 col-sm-offset-4 col-sm-4 col-xs-offset-3 col-xs-6" href="{{ route('cooperation') }}">KOOPERACIJA</a>
                </div>
            </div>
        </div>
        {{--5. Plantaza godzija--}}
        <div class="section pt-5 pb-10">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center mb-1 section-pretitle">Plantaža godžija</div>
                        <h2 class="text-center section-title mtn-2">naša organska proizvodnja</h2>
                        <div class="organik-seperator mb-9 center">
                            <span class="sep-holder"><span class="sep-line"></span></span>
                            <div class="sep-icon"><i class="organik-flower"></i></div>
                            <span class="sep-holder"><span class="sep-line"></span></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="about-main-img col-lg-6">
                        <img src="{{ asset('web/images/home/plantaza/0.jpg') }}" alt="" />
                    </div>
                    <div class="about-content col-lg-6 col-xs-12">
                        <div class="about-content-title">
                            <h4>gajenje godžija</h4>
                            <div class="about-content-title-line"></div>
                        </div>
                        <div class="about-content-text">
                            <p>Godži rađa od juna do novembra meseca. Voli dosta sunca.
                                Može da se sadi tokom cele godine, na svim tipovima zemljišta, potrebno je da su ocedljiva.
                                Za plantažno gajenje potrebni su stubovi, žice (spalir),
                                navodnjavanje "kap po kap", protivgradna mreža kao i bela divlja detelina između redova.
                                Prihranjuje se organskim đubrivima. Sadi se 1m u redu i 2m između redova.
                                Na 1 hektaru se sadi oko 5000 sadnica.
                                Crveni godži se bere ručno, a crne godži bobice pincetom. <br>Naša firma jedina poseduje 10 varijeteta godžija.</p>
                            <a class="organik-btn arrow" href="{{ route('cultivation') }}">Pročitajte više</a>
                        </div>
                        <div class="about-carousel" data-auto-play="true" data-desktop="4" data-laptop="4" data-tablet="4" data-mobile="2">
                            <a href="{{ asset('web/images/home/plantaza/1.jpg') }}" data-rel="prettyPhoto[gallery]">
                                <img src="{{ asset('web/images/home/plantaza/1a.jpg') }}" alt="" />
                                <span class="ion-plus-round"></span>
                            </a>
                            <a href="{{ asset('web/images/home/plantaza/2.jpg') }}" data-rel="prettyPhoto[gallery]">
                                <img src="{{ asset('web/images/home/plantaza/2a.jpg') }}" alt="" />
                                <span class="ion-plus-round"></span>
                            </a>
                            <a href="{{ asset('web/images/home/plantaza/3.jpg') }}" data-rel="prettyPhoto[gallery]">
                                <img src="{{ asset('web/images/home/plantaza/3a.jpg') }}" alt="" />
                                <span class="ion-plus-round"></span>
                            </a>
                            <a href="{{ asset('web/images/home/plantaza/4.jpg') }}" data-rel="prettyPhoto[gallery]">
                                <img src="{{ asset('web/images/home/plantaza/4a.jpg') }}" alt="" />
                                <span class="ion-plus-round"></span>
                            </a>
                            <a href="{{ asset('web/images/home/plantaza/5.jpg') }}" data-rel="prettyPhoto[gallery]">
                                <img src="{{ asset('web/images/home/plantaza/5a.jpg') }}" alt="" />
                                <span class="ion-plus-round"></span>
                            </a>
                            <a href="{{ asset('web/images/home/plantaza/6.jpg') }}" data-rel="prettyPhoto[gallery]">
                                <img src="{{ asset('web/images/home/plantaza/6a.jpg') }}" alt="" />
                                <span class="ion-plus-round"></span>
                            </a>
                            <a href="{{ asset('web/images/home/plantaza/7.jpg') }}" data-rel="prettyPhoto[gallery]">
                                <img src="{{ asset('web/images/home/plantaza/7a.jpg') }}" alt="" />
                                <span class="ion-plus-round"></span>
                            </a>
                            <a href="{{ asset('web/images/home/plantaza/8.jpg') }}" data-rel="prettyPhoto[gallery]">
                                <img src="{{ asset('web/images/home/plantaza/8a.jpg') }}" alt="" />
                                <span class="ion-plus-round"></span>
                            </a>
                            <a href="{{ asset('web/images/home/plantaza/9.jpg') }}" data-rel="prettyPhoto[gallery]">
                                <img src="{{ asset('web/images/home/plantaza/9a.jpg') }}" alt="" />
                                <span class="ion-plus-round"></span>
                            </a>
                            <a href="{{ asset('web/images/home/plantaza/10.jpg') }}" data-rel="prettyPhoto[gallery]">
                                <img src="{{ asset('web/images/home/plantaza/10a.jpg') }}" alt="" />
                                <span class="ion-plus-round"></span>
                            </a>
                            <a href="{{ asset('web/images/home/plantaza/11.jpg') }}" data-rel="prettyPhoto[gallery]">
                                <img src="{{ asset('web/images/home/plantaza/11a.jpg') }}" alt="" />
                                <span class="ion-plus-round"></span>
                            </a>
                            <a href="{{ asset('web/images/home/plantaza/12.jpg') }}" data-rel="prettyPhoto[gallery]">
                                <img src="{{ asset('web/images/home/plantaza/12a.jpg') }}" alt="" />
                                <span class="ion-plus-round"></span>
                            </a>
                            <a href="{{ asset('web/images/home/plantaza/13.jpg') }}" data-rel="prettyPhoto[gallery]">
                                <img src="{{ asset('web/images/home/plantaza/13a.jpg') }}" alt="" />
                                <span class="ion-plus-round"></span>
                            </a>
                            <a href="{{ asset('web/images/home/plantaza/14.jpg') }}" data-rel="prettyPhoto[gallery]">
                                <img src="{{ asset('web/images/home/plantaza/14a.jpg') }}" alt="" />
                                <span class="ion-plus-round"></span>
                            </a>
                            <a href="{{ asset('web/images/home/plantaza/15.jpg') }}" data-rel="prettyPhoto[gallery]">
                                <img src="{{ asset('web/images/home/plantaza/15a.jpg') }}" alt="" />
                                <span class="ion-plus-round"></span>
                            </a>
                            <a href="{{ asset('web/images/home/plantaza/16.jpg') }}" data-rel="prettyPhoto[gallery]">
                                <img src="{{ asset('web/images/home/plantaza/16a.jpg') }}" alt="" />
                                <span class="ion-plus-round"></span>
                            </a>
                            <a href="{{ asset('web/images/home/plantaza/17.jpg') }}" data-rel="prettyPhoto[gallery]">
                                <img src="{{ asset('web/images/home/plantaza/17a.jpg') }}" alt="" />
                                <span class="ion-plus-round"></span>
                            </a>
                            <a href="{{ asset('web/images/home/plantaza/18.jpg') }}" data-rel="prettyPhoto[gallery]">
                                <img src="{{ asset('web/images/home/plantaza/18a.jpg') }}" alt="" />
                                <span class="ion-plus-round"></span>
                            </a>
                            <a href="{{ asset('web/images/home/plantaza/19.jpg') }}" data-rel="prettyPhoto[gallery]">
                                <img src="{{ asset('web/images/home/plantaza/19a.jpg') }}" alt="" />
                                <span class="ion-plus-round"></span>
                            </a>
                            <a href="{{ asset('web/images/home/plantaza/20.jpg') }}" data-rel="prettyPhoto[gallery]">
                                <img src="{{ asset('web/images/home/plantaza/20a.jpg') }}" alt="" />
                                <span class="ion-plus-round"></span>
                            </a>
                            <a href="{{ asset('web/images/home/plantaza/21.jpg') }}" data-rel="prettyPhoto[gallery]">
                                <img src="{{ asset('web/images/home/plantaza/21a.jpg') }}" alt="" />
                                <span class="ion-plus-round"></span>
                            </a>
                            <a href="{{ asset('web/images/home/plantaza/22.jpg') }}" data-rel="prettyPhoto[gallery]">
                                <img src="{{ asset('web/images/home/plantaza/22a.jpg') }}" alt="" />
                                <span class="ion-plus-round"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--6. Proizvodi--}}
        <div class="section pt-2 pb-9">
            <div class="container">
                <div class="row pb-4">
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
                    <div class="product-grid masonry-grid-post">
                        <div class="col-md-4 col-sm-6 product-item masonry-item text-center">
                            <div class="product-thumb">
                                <a href="{{ route('products') }}">
                                    <img src="{{ asset('web/images/home/proizvod_sadnice.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="{{ route('products') }}">
                                    <h2 class="title">Sadnice</h2>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 product-item masonry-item text-center">
                            <div class="product-thumb">
                                <a href="{{ route('products') }}">
                                    <img src="{{ asset('web/images/home/proizvod_bobice.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="{{ route('products') }}">
                                    <h2 class="title">Sveže bobice</h2>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 product-item masonry-item text-center">
                            <div class="product-thumb">
                                <a href="{{ route('products') }}">
                                    <img src="{{ asset('web/images/home/proizvod_proizvodi.jpg') }}" alt="" />
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="{{ route('products') }}">
                                    <h2 class="title">Proizvodi</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="loadmore-contain">
                        <a class="organik-btn small" href="{{ route('products') }}"> SVI PROIZVODI </a>
                    </div>
                </div>
            </div>
        </div>
        {{--7. Alkalni napitak--}}
        <div class="section bg-light pt-6">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center mb-1 section-pretitle">Probajte!</div>
                        <h2 class="text-center section-title mtn-2">ALKALNI NAPITAK</h2>
                        <div class="organik-seperator center mb-6">
                            <span class="sep-holder"><span class="sep-line"></span></span>
                            <div class="sep-icon"><i class="organik-flower"></i></div>
                            <span class="sep-holder"><span class="sep-line"></span></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="accordion icon-left" id="accordion1">
                            <div class="accordion-group toggle">
                                <div class="accordion-heading toggle_title active">
                                    <a class="accordion-toggle" data-toggle="collapse" aria-expanded="true" aria-controls="collapse1" href="#collapse1">Najefikasniji čistač toksina</a>
                                    <span class="icon"><i class="ion-heart"></i></span>
                                </div>
                                <div id="collapse1" class="accordion-body collapse in" aria-expanded="true" style="">
                                    <div class="accordion-inner">
                                        <p>Ovaj napitak kada se pije na prazan stomak sa par bobica crnog godžija,
                                            limunom, medom i đumbirom stvara izuzento visoku pH vrednost u organizumu i <strong>deluje istog trenutka.</strong>
                                        <br> Neutrališe slobodne radikale i ubija tumorske ćelije.
                                        <br> Pojačava celokupan imuni sistem.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-4">
                                <a class="organik-btn small" href="{{ route('recipes') }}">Upotreba godži bobica</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-center app-desc floating">
                            <img src="{{ asset('web/images/home/goji-drink.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--8. Video galerija--}}
        <div class="section pt-8">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center mb-1 section-pretitle">Gostovanja</div>
                        <h2 class="text-center section-title mtn-2">Video galerija</h2>
                        <div class="organik-seperator center mb-6">
                            <span class="sep-holder"><span class="sep-line"></span></span>
                            <div class="sep-icon"><i class="organik-flower"></i></div>
                            <span class="sep-holder"><span class="sep-line"></span></span>
                        </div>
                    </div>
                </div>
                <script type="text/javascript" src="{{ asset('web/js/jssor.slider-27.5.0.min.js') }}"></script>
                <script type="text/javascript">
                    jssor_1_slider_init = function() {

                        var jssor_1_SlideshowTransitions = [
                            {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                            {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                            {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                            {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                            {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                            {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                            {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                            {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                            {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                            {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                            {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                            {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                            {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                            {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                            {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                            {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                            {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                            {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                            {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                            {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                            {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                            {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
                        ];

                        var jssor_1_options = {
                            $AutoPlay: 0,
                            $SlideshowOptions: {
                                $Class: $JssorSlideshowRunner$,
                                $Transitions: jssor_1_SlideshowTransitions,
                                $TransitionsOrder: 1
                            },
                            $ArrowNavigatorOptions: {
                                $Class: $JssorArrowNavigator$
                            },
                            $ThumbnailNavigatorOptions: {
                                $Class: $JssorThumbnailNavigator$,
                                $SpacingX: 5,
                                $SpacingY: 5
                            }
                        };

                        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                        /*#region responsive code begin*/

                        var MAX_WIDTH = 800;

                        function ScaleSlider() {
                            var containerElement = jssor_1_slider.$Elmt.parentNode;
                            var containerWidth = containerElement.clientWidth;

                            if (containerWidth) {

                                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                                jssor_1_slider.$ScaleWidth(expectedWidth);
                            }
                            else {
                                window.setTimeout(ScaleSlider, 30);
                            }
                        }

                        ScaleSlider();

                        $Jssor$.$AddEvent(window, "load", ScaleSlider);
                        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                        /*#endregion responsive code end*/
                    };
                </script>
                <style>
                    /*jssor slider loading skin spin css*/
                    .jssorl-009-spin img {
                        animation-name: jssorl-009-spin;
                        animation-duration: 1.6s;
                        animation-iteration-count: infinite;
                        animation-timing-function: linear;
                    }

                    @keyframes jssorl-009-spin {
                        from { transform: rotate(0deg); }
                        to { transform: rotate(360deg); }
                    }

                    /*jssor slider arrow skin 106 css*/
                    .jssora106 {display:block;position:absolute;cursor:pointer;}
                    .jssora106 .c {fill:#fff;opacity:.3;}
                    .jssora106 .a {fill:none;stroke:#000;stroke-width:350;stroke-miterlimit:10;}
                    .jssora106:hover .c {opacity:.5;}
                    .jssora106:hover .a {opacity:.8;}
                    .jssora106.jssora106dn .c {opacity:.2;}
                    .jssora106.jssora106dn .a {opacity:1;}
                    .jssora106.jssora106ds {opacity:.3;pointer-events:none;}

                    /*jssor slider thumbnail skin 101 css*/
                    .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
                    .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
                    .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
                    .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
                    .jssort101 .p:hover{padding:2px;}
                    .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
                    .jssort101 .p:hover.pdn{padding:0;}
                    .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
                    .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
                    .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
                    .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
                    .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}
                </style>
                <div class="row">
                    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:680px;overflow:hidden;visibility:hidden;">
                        <!-- Loading Screen -->
                        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
                        </div>
                        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:580px;overflow:hidden;">
                            <div>
                                <iframe data-u="video" width="560" height="560" src="https://www.youtube.com/embed/zcc9vYT4vt8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                {{--<img data-u="image" src="img/031.jpg" />--}}
                                <img data-u="thumb" src="http://img.youtube.com/vi/zcc9vYT4vt8/1.jpg" />
                            </div>
                            <div>
                                <iframe data-u="video" width="560" height="560" src="https://www.youtube.com/embed/YI9QT5C5BTw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                <img data-u="thumb" src="http://img.youtube.com/vi/YI9QT5C5BTw/2.jpg" />
                            </div>
                            <div>
                                <iframe data-u="video" width="560" height="560" src="https://www.youtube.com/embed/4ztzg1-BegY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                <img data-u="thumb" src="http://img.youtube.com/vi/4ztzg1-BegY/3.jpg" />
                            </div>
                            <div>
                                <iframe data-u="video" width="560" height="560" src="https://www.youtube.com/embed/6XuTkHwMLs4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                <img data-u="thumb" src="http://img.youtube.com/vi/6XuTkHwMLs4/1.jpg" />
                            </div>
                            <div>
                                <iframe data-u="video" width="560" height="560" src="https://www.youtube.com/embed/Lw5of3v6s0I" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                <img data-u="thumb" src="http://img.youtube.com/vi/Lw5of3v6s0I/1.jpg" />
                            </div>
                            <div>
                                <iframe data-u="video" width="560" height="560" src="https://www.youtube.com/embed/PSFpZdGOp1o" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                <img data-u="thumb" src="http://img.youtube.com/vi/PSFpZdGOp1o/1.jpg" />
                            </div>
                            <div>
                                <iframe data-u="video" width="560" height="560" src="https://www.youtube.com/embed/YopCSu4AkJ8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                <img data-u="thumb" src="http://img.youtube.com/vi/YopCSu4AkJ8/2.jpg" />
                            </div>
                        </div>
                        <!-- Thumbnail Navigator -->
                        <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#fff;" data-autocenter="1" data-scale-bottom="0.75">
                            <div data-u="slides">
                                <div data-u="prototype" class="p" style="width:190px;height:90px;">
                                    <div data-u="thumbnailtemplate" class="t"></div>
                                    <svg viewbox="0 0 16000 16000" class="cv">
                                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- Arrow Navigator -->
                        <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:262px;left:30px;" data-scale="0.75">
                            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                                <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                                <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
                            </svg>
                        </div>
                        <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:262px;right:30px;" data-scale="0.75">
                            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
                            </svg>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">jssor_1_slider_init();</script>
            </div>
        </div>
        {{--9. Novosti--}}
        {{--<div class="section pt-12">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-sm-12">--}}
                        {{--<div class="text-center mb-1 section-pretitle">Poslednje</div>--}}
                        {{--<h2 class="text-center section-title mtn-2">Nase novosti</h2>--}}
                        {{--<div class="organik-seperator center mb-6">--}}
                            {{--<span class="sep-holder"><span class="sep-line"></span></span>--}}
                            {{--<div class="sep-icon"><i class="organik-flower"></i></div>--}}
                            {{--<span class="sep-holder"><span class="sep-line"></span></span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="blog-grid-item">--}}
                            {{--<div class="post-thumbnail">--}}
                                {{--<a href="blog-detail.html">--}}
                                    {{--<img src="{{ asset('web/images/blog/blog_370x250.jpg') }}" alt="" />--}}
                                {{--</a>--}}
                            {{--</div>--}}
                            {{--<div class="post-content">--}}
                                {{--<div class="entry-meta">--}}
                                                {{--<span class="posted-on">--}}
                                                    {{--<i class="ion-calendar"></i>--}}
                                                    {{--<span>August 9, 2016</span>--}}
                                                {{--</span>--}}
                                    {{--<span class="comment">--}}
                                                    {{--<i class="ion-chatbubble-working"></i> 0--}}
                                                {{--</span>--}}
                                {{--</div>--}}
                                {{--<a href="blog-detail.html">--}}
                                    {{--<h1 class="entry-title">How to steam &amp; purée your sugar pie pumkin</h1>--}}
                                {{--</a>--}}
                                {{--<div class="entry-content">--}}
                                    {{--Cut the halves into smaller pieces and place in a large pot of water with a steam basket to keep the pumpkin pieces from touching…--}}
                                {{--</div>--}}
                                {{--<div class="entry-more">--}}
                                    {{--<a href="blog-detail.html">Read more</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="blog-grid-item">--}}
                            {{--<div class="post-thumbnail">--}}
                                {{--<a href="blog-detail.html">--}}
                                    {{--<img src="{{ asset('web/images/blog/blog_370x250.jpg') }}" alt="" />--}}
                                {{--</a>--}}
                            {{--</div>--}}
                            {{--<div class="post-content">--}}
                                {{--<div class="entry-meta">--}}
                                                {{--<span class="posted-on">--}}
                                                    {{--<i class="ion-calendar"></i>--}}
                                                    {{--<span>August 9, 2016</span>--}}
                                                {{--</span>--}}
                                    {{--<span class="comment">--}}
                                                    {{--<i class="ion-chatbubble-working"></i> 0--}}
                                                {{--</span>--}}
                                {{--</div>--}}
                                {{--<a href="blog-detail.html">--}}
                                    {{--<h1 class="entry-title">Great bulk recipes to help use all your organic vegetables</h1>--}}
                                {{--</a>--}}
                                {{--<div class="entry-content">--}}
                                    {{--A fridge full of organic vegetables purchased or harvested with the best of intentions, and then life gets busy, leaving no time to peel,--}}
                                {{--</div>--}}
                                {{--<div class="entry-more">--}}
                                    {{--<a href="blog-detail.html">Read more</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="blog-grid-item">--}}
                            {{--<div class="post-thumbnail">--}}
                                {{--<a href="blog-detail.html">--}}
                                    {{--<img src="{{ asset('web/images/blog/blog_370x250.jpg') }}" alt="" />--}}
                                {{--</a>--}}
                            {{--</div>--}}
                            {{--<div class="post-content">--}}
                                {{--<div class="entry-meta">--}}
                                                {{--<span class="posted-on">--}}
                                                    {{--<i class="ion-calendar"></i>--}}
                                                    {{--<span>August 9, 2016</span>--}}
                                                {{--</span>--}}
                                    {{--<span class="comment">--}}
                                                    {{--<i class="ion-chatbubble-working"></i> 0--}}
                                                {{--</span>--}}
                                {{--</div>--}}
                                {{--<a href="blog-detail.html">--}}
                                    {{--<h1 class="entry-title">How can salmon be raised organically in fish farms?</h1>--}}
                                {{--</a>--}}
                                {{--<div class="entry-content">--}}
                                    {{--Organic food consumption is rapidly increasing. The heightened interest in the global environment and a willingness to look--}}
                                {{--</div>--}}
                                {{--<div class="entry-more">--}}
                                    {{--<a href="blog-detail.html">Read more</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row">--}}
                    {{--<div class="col-sm-12">--}}
                        {{--<hr class="mt-7 mb-3" />--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--10. Partneri--}}
        <div class="section pb-2 pt-6">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5"></div>
                    <div class="col-sm-offset-0 col-sm-2 col-xs-offset-3 col-xs-6">
                        <div class="client-carousel" data-auto-play="true" data-desktop="1" data-laptop="1" data-tablet="1" data-mobile="1">
                            <div class="client-item">
                                <a href="https://www.facebook.com/smoothieshopnis" target="_blank">
                                    <img src="{{ asset('web/images/home/partneri_smoothie.png') }}" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4" style="text-align: center">
                        <p>Smoothie shop Niš</p>
                        <p>Radnja gde možete kupiti zdrave napitke sa godži bobicama i dobiti savete i plan ishrane nutricioniste.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
