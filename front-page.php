<?php get_header('front_page'); ?>

<section id="about" class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <h2 class="text-center">Polecane produkty</h2>
                <p class="about-us-p mt-2 text-center">
					Wybierz wysokiej jakości jednorazową odzież ochronną i dołącz do grona zadowolonych klientów.
				</p>
				
				<div class="home-products d-flex flex-column">
					<div class="home-product-slider mt-5">
					<?php echo do_shortcode("[featured_products_slider slide_to_show='4' dots='false' arrows='true' outofstock='true' limit=4]"); ?>
					</div>
					
					<div class="d-flex flex-row justify-content-center mt-1">
						<a href="/sklep" class="btn rinome-button btn-bigger">Zobacz wszystkie produkty</a>
					</div>
					
				
					
				</div>
				
				
				

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <?php the_content(); ?>

                <?php endwhile;
                else : endif; ?>








            </div>
        </div>
    </div>
</section>
<section id="offer" class="offer-section content-section text-center">
    <div class="container">
        <div class="col-lg-8 mx-auto text-left">
            <h1 class="text-center">Oferta</h1>
            <p>Włóknina polipropylenowa w pełni podlega recyklingowi co stanowi jeden
                z powodów, dlaczego stosujemy ją przy produkcji naszych wyrobów. Materiał ten
                wykazuje wysoką elastyczność jest wytrzymały i odporny na przepuszczanie innych
                substancji (pyłów oraz cieczy). Właściwości polipropylenu zapewniają zatem
                szczelność, swobodne ruchy i jednocześnie dzięki ergonomicznym krojom jest
                wygodna i estetyczna. Ze względu na niewielką zdatność do prania(wirowanie),
                nasze produkty to artykuły głównie jednorazowego użytku.</p>
            <p>Produkty wykonane z włóknin nieszkodliwych dla skóry człowieka, miękkich i zapewniających komfort
                fizjologiczny. Wyjątkowa jakość: łączenie szwów metodą ultradźwiękową zapewnia szczelność, odzież
                nie ograniczająca ruchów i jednocześnie dzięki ergonomicznym krojom wygodna i estetyczna.</p>
            <h3>Przeznaczenie</h3>
            <ul>
                <li>Personel zakładów świadczących usługi medyczne</li>
                <li>Pacjenci placówek medycznych /min. dla kobiet podczas porodu i po porodzie, inna odzież
                    zabiegowa dla dzieci i dorosłych</li>
                <li>Pracownicy i klienci gabinetów medycyny estetycznej, kosmetologicznych, fryzjerskich</li>
                <li>Pracownicy zakładów oczyszczania ścieków i usuwania odpadów</li>
                <li>Pracujący ze zwierzętami</li>
                <li>Pracownicy sektorów rolniczych, spożywczych, usługowych</li>
                <li>Dzieci szkolne i przedszkolne: ochrona podczas zajęć np. z farbami, gliną podczas zajęć
                    plastycznych</li>
            </ul>
            <h3>Cel</h3>
            <p>Artykuły ochrony osobistej zapobiegają przedostawaniu się czynników infekcyjnych do skóry i na inne
                osoby. Odzież jednorazowa stanowi barierę ochronną dla całości lub części ciała, chroni przed
                zabrudzeniem odzieży własnej, zapewnia higienę w przebiegu produkcji i dystrybucji np. spożywczej,
                zapewnia intymność podczas zabiegów medycznych i kosmetycznych.</p>
            <h3>Usługi</h3>
            <ul>
                <li>Łączenie, zgrzewanie włóknin metodą ultradźwiękową</li>
                <li>Produkcja na indywidualne zamówienie takich rzeczy jak: torebki, euti, filtry, pokrowce ochronne
                    na fotele samochodowe itp.</li>
            </ul>
            <p>
                Zapraszamy do naszego sklepu, gdzie znajdą państwo nasze produkty.
                W przypadku większej ilości prosimy o kontakt w celu ustalenia terminu realizacji
                oraz możliwego rabatu. Miłego dnia! :)
            </p>
        </div>
    </div>
</section>
<section id="contact" class="content-section text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading">Kontakt</h2>
                <p class="mb-5">RINOME spółka cywilna Katarzyna i Piotr Nowak<br>NIP: 7851808728</p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-3 ml-auto text-center"><i class="fas fa-map-marked-alt fa-4x mb-3" data-aos="zoom-in" data-aos-duration="300" data-aos-once="true"></i>
                <p>ul. Gogolewska 10<br>63-130 Zakrzewice</p>
            </div>
            <div class="col-lg-3 text-center"><i class="fa fa-phone fa-4x mb-3" data-aos="zoom-in" data-aos-duration="300" data-aos-once="true"></i>
				<p><a href="tel:505663107">505 663 107</a></p>
            </div>
            <div class="col-lg-3 mr-auto text-center"><i class="fa fa-envelope-o fa-4x mb-3" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="300" data-aos-once="true"></i>
                <p><a href="mailto:kontakt@rinome.net">kontakt@rinome.net</a></p>
            </div>
        </div>
		
		
			<div class="col-lg-9 mx-auto text-center mt-5">
				<h2 class="section-heading mt-5">Formularz kontaktowy</h2>
				<p>
					Pozostańmy w kontakcie!
				</p>
				
				<?php echo do_shortcode("[contact-form-7 id='476' title='Formularz 1']"); ?>
			</div>

		
		
</section>
<div class="map-clean"><iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAbODsGcyVYRKrqDsxn7Lt4wM6q-OF-ToE&amp;q=RINOME+sp%C3%B3%C5%82ka+cywilna+Katarzyna+i+Piotr+Nowak%2C+Gogolewska+10%2C+63-130+Zakrzewice&amp;zoom=13" width="100%" height="450"></iframe></div>

<?php get_footer(); ?>