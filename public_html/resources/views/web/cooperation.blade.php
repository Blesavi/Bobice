@extends('web.app')
@section('content')
	<div id="main">
		<div class="section section-bg-9 pt-11 pb-17">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="page-title text-center">Kooperacija</h2>
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
							<li>Kooperacija</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
        <div class="section pt-10 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="text-center section-title mtn-2">Pokreni biznis</h2>
                        <h4 class="text-center section-title mtn-2 pt-1 pb-2">zasad crnog godžija</h4>
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
                            Projekat  "ORGANSKIH PLANTAŽA CRNOG GODŽIJA ZA BOLJI ŽIVOT U SRBIJI" je najbolji projekat
                            u oblasti poljoprivrede i voćarstva, koji ima za cilj da poboljša organsku proizvodnju u Srbiji
                            sa najprofitabilnijom i po zdravlje najkorisnijom biljkom, koja uložena sredstva višestruko i neverovatno brzo vraća – još u godini sadnje.
                        </p>
                        <p style="text-align: justify; color: red">
                            <strong>Većina ljudi zna za sušeni Crveni Godži, a malo ko i za CRNI GODŽI i njegove varijetete, zato što ga praktično na svetskom tržištu i NEMA.</strong>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10 pb-2 pt-2">
                        <div class="text-center">
                            <img src="{{ asset('web/images/cooperation/goji_varieties.jpg') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <p><strong><br>NAJBITNIJE KARAKTERISTIKE UGOVORA I PROJEKTA SU:</strong></p>
                        <p>&#9679; Plantaže formirane ovom biljkom do aprila i maja daju prvi rod već krajem juna pa sve
                            do kraja oktobra tako da ona samu sebe otplati u godini sadnje, a novac uložen u konstrukciju i druge rashode u narednoj godini.</p>
                        <p>&#9679; Sva upustva od sadnje do berbe dobijate od firme ''Goji-Ljuba i sinovi'' sa kojom potpisujete ugovor o otkupu ploda.</p>
                        <p>&#9679; Sadnice se sade 1m jedna od druge i 2m između redova, gde se između redova zatravljuje bela divlja detelina. Za 1ha potrebno je 5.000 sadnica.</p>
                        <p>&#9679; Sadnice se mogu saditi na nadmorskoj visini od 300 do 1500 m. Najbolje su visoravni sa blagim nagibom jer su tada dobro osunčane.</p>
                        <p>&#9679; Da bi se sa plantažerom potpisao ugovor (kooperativni) potrebno je da ima:
                            registrovano poljoprivredno gazdinstvo ili firmu, parcelu sa obezbeđenom vodom i sredstva za avanst sadnica. Sadnice su organske i sertifikovane.</p>
                        <p>&#9679; Cena sadnice crnog godžija je jednaka otkupnoj ceni 1kg ploda odnosno 20 €.</p>
                        <p>&#9679; <strong>Prilikom potpisivanja ugovora isplaćuje se samo AVANSNA CENA sadnice od 5 €, a ostatak se isplaćuje kroz ROD u naredne dve godine.</strong></p>
                        <p>&#9679; Sadnica sebe otplati u prvoj godini još u fazi formiranja. Plantaža od 1ha može u prvoj
                            godini roditi oko 5.000 kg ploda što iznosi oko 100.000 €.</p>
                        <p>&#9679; Svaka naredna godina donosi najmanje duplirani profit. Ovakav profit zahteva veliku posvećenost, odgovornost i pedantnost od same sadnje do kraja života.</p>
                        <p>&#9679; U projekat se mogu uključiti i manji plantažeri koji imaju sredstva za plantažu od 20 do 50
                            ari koji su locirani u jednoj opštini pa mogu uz moju i pomoć ostalih plantažera formirati zadrugu
                            što je ozbiljna prednost za dobijanje sredstava od države i EU. To svakako treba iskoristiti jer obezbeđuje
                            hladnjaču za skladištenje ploda i sigurnost za otkup istog.</p>
                        <p>&#9679; Kompletnu edukaciju: od sadnje, zalivanja, orezivanja, prihrane i zaštite,  do berbe i skladištenja
                            dobijaće blagovremeno od naše firme. Naš agronom će prisustvovati na svakoj plantaži prilikom sadnje.
                            NAPOMENA: Plantažerima je pored finansija za sadnice potrebno uložiti sredstva za metalne stubove, najlon,
                            mrežu, đubrivo i radnu snagu u samom početku odnosno pri sadnji. A mi im dajemo skicu i stručnu pomoć za sve te aktivnosti.</p>
                        <p><strong><br>EKONOMSKI DEO I TROŠKOVI ZASADA CRNOG GODŽIJA</strong></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <p><strong><br>Ekonomska isplativost</strong></p>
                        <p>Predviđeni količinski prinosi za 1ha:</p>
                        <p>&#9679; U godini sadnje (2019) – u proseku 0,3 kg/sadnici. = 30.000 €</p>
                        <p>&#9679; U prvoj godini (2020) – u proseku 1,4 kg/sadnici. = 140.000 €</p>
                        <p>&#9679; U drugoj godini (2021) – u proseku 2,5 kg/sadnici. = 250.000 €</p>
                        <p>&#9679; U trećoj godini (2022) – u proseku 5,0 kg/sadnici. = 500.000 €</p>
                        <p>&#9679; U četvrtoj godini (2023) – u proseku 8,0 kg/sadnici. = 800.000 €</p>
                        <p>&#9679; U petoj godini (2024) – u proseku 10,0 kg/sadnici. = 1.000.000 €</p>
                    </div>
                    <div class="col-sm-6">
                        <p><strong><br>Troškovi podizanja zasada</strong></p>
                        <p>Za plantažu od 1ha potrebno je izdvojiti:</p>
                        <p>&#9679; za sadnice - 25.000 €</p>
                        <p>&#9679; nalivni sistem, stubovi i žice, konstrukcija, najlon, mreža -  15.000 €</p>
                        <p>&#9679; radove oko formiranja plantaže, sadnje, organsko đubrivo za sadnju i radnu snagu predlažemo
                            da plantažeri u sopstvenoj režiji odrade sami uz našu edukaciju jer će ih tada najmanje koštati</p>
                        <p><strong>UKUPNO</strong>: oko 40.000-50.000 €</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10 pb-2 pt-2">
                        <div class="text-center">
                            <img src="{{ asset('web/images/cooperation/black_goji.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <a class="organik-btn arrow" href="{{ route('goji.black') }}">Pročitajte više o lekovitosti crnog godžija</a>

            </div>
        </div>
	</div>
@endsection
