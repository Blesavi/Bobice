@extends('web.app')
@section('content')
	<div id="main">
		<div class="section section-bg-9 pt-11 pb-17">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="page-title text-center">Gajenje</h2>
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
							<li>Gajenje</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="section pt-10 pb-5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="text-center mb-1 section-pretitle">Organsko</div>
						<h2 class="text-center section-title mtn-2">GAJENJE GODŽIJA</h2>
						<div class="organik-seperator mb-9 center">
							<span class="sep-holder"><span class="sep-line"></span></span>
							<div class="sep-icon"><i class="organik-flower"></i></div>
							<span class="sep-holder"><span class="sep-line"></span></span>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<p>&#9679; Godži je najbolje posaditi na mestu koje je celi dan obasjano suncem. Sadnja se vrši tokom cele godine.
							Postoji sadnja iz ''kontejnera '' tokom leta  i ''golog korena'' jesen, proleće. Ako hoćete dobre rezultate vodu
                            tokom sušnih dana ne smete štedeti. Tokom leta zalivati češće u zavisnosti od vlažnosti zemljišta (2x nedeljno).
                            Svaka porodica bi za svoje domaćinstvo trebala u bašti da ima 10-20 biljaka. Sadi se u okućnicama, pored ograda i na plantažama.</p>
						<p>&#9679; Zemljište može da bude od 2 do 6 klase. Godži voli neutralna i alkalna zemljišta pH = 5,5 do 8,5 (kiselost).</p>
						<p>&#9679; Odgovara mu naše klimatsko područje. Uspeva na nadmorskim visinama od 300 – 1500 m.
                            Najbolje su visoravni sa blagim nagibom jer su tada dobro osunčane. Podnosi visoke temperature i otporan je na mrazeve.</p>
						<p>&#9679; Bela divlja detelina se zatravljuje kod plantaža između redova kako bi održavala vlažnost
                            zemlje tokom sušnih dana, hranila zemljište azotom sto je bitno za godži i plantaža bila uredna i čista.</p>
					</div>
				</div>

				<div class="row">
                    <div class="col-sm-2"></div>
					<div class="col-sm-8 pb-5 pt-4">
						<div class="text-center">
							<img src="{{ asset('web/images/protection/plantaza_goji.jpg') }}" alt="">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<p style="text-align: justify">
                            <strong>REZIDBA:</strong> vrši se pol. februara i početkom marta meseca. Prve godine ne orezivati biljku da bi
                            se razgranala i ojačao korenov sistem. Naredne godine se biljka oblikuje i orezuje po volji
                            (kao kišobran, trospratni ili cilindrični model). Bočne grane treba orezati na 20-30 cm, ukloniti
                            lastare (izdanke) na stablu do 40 cm visine od zemlje, kao i mrtve grane. Tokom leta, korenove izdanke uklanjati mesečno jednom.
						</p>
					</div>
				</div>

                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 pb-5 pt-4">
                        <div class="text-center">
                            <img src="{{ asset('web/images/protection/plantaza_rezidba.jpg') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <p style="text-align: justify">
                            <strong>PRIHRANA:</strong> Biljke najbolje prihranjivati organskim đubrivima – pregoreli STAJNJAK (ovčiji, kozji,
                            kravlji, kokošji, golublji izmet, zečji) ali u određenim granicama kako ne bi izgoreli biljku.
                            Rastopiti neko od ovih djubriva u vodi i time zalivati. Za đubrenje može poslužiti i kompost, treset, humus-glistenjak.
                            <br>Takođe, Italpollina (4-4-4) organsko peletirano živinsko đubrivo (u polj. apotekama, džak od 25 kg).
                            <br>TEČNA ĐUBRIVA - folijarno preko lista preparatima na organskoj bazi kao što su: Slavol, Uniker, Fitofert
                            (mikrobiološka đubriva), Treiner (aminokiseline). Biljke prskati kada se primeti žutilo, kovrđavost lista td.
                            <br>Tečno azotno đubrivo od KOPRIVE: u 10 L vode ubaciti 1 kg koprive, svakog dana promešati. Kada se završi
                            fermentacija posle 2-3 nedelje, đubrivo procediti, razrediti 1L na 10L vode i prskati (može i 2x mesečno).
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 pb-5 pt-4">
                        <div class="text-center">
                            <img src="{{ asset('web/images/protection/plantaza_prihrana.jpg') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <p style="text-align: justify">
                            <strong>ZAŠTITA:</strong>  Zimsko i prolećno prskanje: polovinom novembra meseca i posle rezidbe marta kada počinje vegetacija,
                            preparatom na bazi bakra – PLAVI KAMEN ili FUNGURAN OH zbog prezimljavanja štetočina i bolesti,
                            prskati i tokom leta ako se pojavi plamenjača (kada imamo dosta povezanih kišnih i sunčanih dana).
                            <br>PERFIT - EKOLOŠKI BIOCID – insekticid, fungicid, virucid, baktericid širokog dejstva i primene.
                            100 ml na 10 L vode. Naručiti: 011/8301-871,  011/8301-870,  063/8753-989.  PRSKANJE se vrši UJUTRU ili PRIDVEČE.
                            <br>Sredstvo za prskanje od KOPRIVE: protiv lisnih vaši, grinja, mrava… Kopriva daje otpornost i
                            đubri biljku. U 10L vode 1kg sveže koprive, nakon 24h procediti i prskati sa svih strana biljku.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 pb-5 pt-4">
                        <div class="text-center">
                            <img src="{{ asset('web/images/protection/plantaza_prskanje.jpg') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <p style="text-align: justify">
                            <strong>BERBA:</strong>  Godži cveta i rađa od juna do novembra meseca, što znači da bobice sukcesivno zru.
                            Crveni godži se bere isključivo ručno, dok branje crnog godžija zahteva preciznost jer se bere
                            sa peteljkom PINCETOM zbog curenja soka iz bobice i oksidacije. Beru se u plastičnim koficama,
                            nakon branja se pročiste i zamrzavaju u hladnjaku. Mogu se čuvati u zamrzivaču duže vreme.
                            Mogu se sušiti na suncu u tankom sloju kao i u sušarama na 40-60 oC.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8 pb-5 pt-4">
                        <div class="text-center">
                            <img src="{{ asset('web/images/protection/plantaza_berba.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
@endsection

