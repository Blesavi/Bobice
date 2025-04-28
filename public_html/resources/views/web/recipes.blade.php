@extends('web.app')
@section('content')
	<div id="main">
		<div class="section section-bg-9 pt-11 pb-17">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="page-title text-center">Upotreba godžija</h2>
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
							<li>Upotreba godžija</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
        <div class="section pt-10 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="text-center section-title mtn-2">Upotreba godžija</h2>
                        <div class="organik-seperator mb-5 center">
                            <span class="sep-holder"><span class="sep-line"></span></span>
                            <div class="sep-icon"><i class="organik-flower"></i></div>
                            <span class="sep-holder"><span class="sep-line"></span></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <p style="text-align: justify">
                            Godži bobice zbog svog prijatnog ukusa mogu se konzumirati u svežem i sušenom stanju, u
                            obliku soka ili čaja ili kao dodatak raznim pićima i jelima. Najzdravija konzumacija je u svežem stanju.<br>
                            Dnevna unos crvenih godži bobica je od 20-50 g.<br>
                            Dnevni unos crnog godžija za odrasle zdrave osobe je oko 200mg antocijanina što iznosi 6 g (5-10 bobica),
                            a u slučaju bolesti ne manje od 300 mg što iznosi 10 g crnog godžija (oko 15-20 bobica).
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <p><br>&#9679; Najbolje je miksati sveže bobice sa ostalim voćem ili povrćem, praviti razne kombinacije nutritivno
                            bogate sastojcima i piti kao ''smoothie'' napitke. Tako se najbolje svi sastojci oslobađaju i apsorbuju u naš organizam i dolazi do lekovitog delovanje.</p>
                        <p>&#9679; Godži bobice se dodaju kao ukusni i aromatični dodatak u jela od kuvanog pirinča, u osvežavajuće supe,
                            salate, jela sa svinjetinom, piletinom i povrćem, razna dinstana, pržena i pečena jela od zeleniša,
                            mesa i morskih plodova. Specijalitet je dodati ih u jagnjeću čorbu.</p>
                        <p>&#9679; Kao dodatak kolačima, sladoledu i slatkišima. Koriste se za pravljenje džemova, marmelada,
                            slatka, sokova, jogurta, kao začin (mlevene sušene bobice) i kao sos.</p>
                        <p>&#9679; Hleb sa raženim, spletinim ili heljdinim brašnom sa dodacima susama, lana, semenki, suncokreta
                            i sušenim godži  bobicama, daju najzradviji hleb pun minerala, vitamina i raznih korisnih nutrijenata.</p>
                        <p>&#9679; Čaj od godži bobica (Antistres čaj): U šolju staviti šaku godži bobica, par komada crnog godžija,
                            med, malo limuna, i iseckanog đumbira, doliti prokuvanu mlaku vodu i piti dva puta dnevno.
                            Ovakav čaj sa godži bobicama je bogat antioksidantima, podstiče imunitet i dovodi u ravnotežu stresom „napadnut“ organizam.</p>
                        <p>&#9679; Espresso kafa sa šakom godži bobica i kašičicom meda, daje fantastičan ukus.</p>
                        <p>&#9679; Mladi izdanci (lastari) i lišće koje uklanjate sa stabla godžija mogu se dodati kao prilog pečenoj svinjetini,
                            kao sastav mnogih salata, dodatak supama i čorbama. Sa lastarima se mogu praviti razne pite u
                            kombinaciji sa spanaćem, zeljem itd. Potrebno ih je dobro oprati i termički obraditi.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 pb-2 pt-2">
                        <div class="text-center">
                            <img src="{{ asset('web/images/app/recipes_goji.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
@endsection
