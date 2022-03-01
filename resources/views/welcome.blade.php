@extends('layouts.guest')
@section("page_title", "Home Page")

@section('content_header')

<div class="container">
    <div class="row vh-100 justify-content-center align-items-center">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="bar_search" id="ttSearch">
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')
<div class="container_home_guests">
    <div class="bg-violet pt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h2 class="text-center title">Vetrina</h2>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="carousel_apratments_swiper py-5">
                        <div class="blog-slider">
                            <div class="blog-slider__wrp swiper-wrapper">

                                <div class="blog-slider__item swiper-slide">
                                    <div class="blog-slider__img">

                                        <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759872/kuldar-kalvik-799168-unsplash.webp">
                                    </div>
                                    <div class="blog-slider__content">
                                        <span class="blog-slider__code">26 December 2019</span>
                                        <div class="blog-slider__title">Lorem Ipsum Dolor</div>
                                        <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? </div>
                                        <a href="#" class="blog-slider__button">READ MORE</a>
                                    </div>
                                </div>

                                <div class="blog-slider__item swiper-slide">
                                    <div class="blog-slider__img">
                                        <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759871/jason-leung-798979-unsplash.webp">
                                    </div>
                                    <div class="blog-slider__content">
                                        <span class="blog-slider__code">26 December 2019</span>
                                        <div class="blog-slider__title">Lorem Ipsum Dolor2</div>
                                        <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi?</div>
                                        <a href="#" class="blog-slider__button">READ MORE</a>
                                    </div>
                                </div>

                                <div class="blog-slider__item swiper-slide">
                                    <div class="blog-slider__img">
                                        <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759871/alessandro-capuzzi-799180-unsplash.webp">
                                    </div>
                                    <div class="blog-slider__content">
                                        <span class="blog-slider__code">26 December 2019</span>
                                        <div class="blog-slider__title">Lorem Ipsum Dolor</div>
                                        <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi?</div>
                                        <a href="#" class="blog-slider__button">READ MORE</a>
                                    </div>
                                </div>

                            </div>
                            <div class="blog-slider__pagination"></div>

                            <div id="mouse-scroll" class="icon-down">
                                <div class="mouse">
                                    <div class="mouse-in"></div>
                                </div>
                                <div>
                                    <span class="down-arrow-1"></span>
                                    <span class="down-arrow-2"></span>
                                    <span class="down-arrow-3"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container py-5">
        <div class="row py-5">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h2 class="text-center title">Perchè scegliere BooBnb?</h2>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                <div class="card_punti_focus">
                    <div class="card__side card__side--front">
                        <div>
                            <p><i class="fa-solid fa-certificate display-5"></i></p>
                            <br>
                            <h1>Host Certificati</h1>
                        </div>
                    </div>
                    <div class="card__side card__side--back card__side--back">
                        <p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore debitis ut illum, atque id quibusdam nihil dolorum veniam exercitationem odit natus possimus, quis, molestias accusamus doloremque fugiat minima unde fugit!</p>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                <div class="card_punti_focus">
                    <div class="card__side card__side--front">
                        <div>
                            <p><i class="fa-solid fa-piggy-bank display-5"></i></p>
                            <br>
                            <h1>Garanzia MoneyBack</h1>
                        </div>
                    </div>
                    <div class="card__side card__side--back card__side--back">
                        <p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore debitis ut illum, atque id quibusdam nihil dolorum veniam exercitationem odit natus possimus, quis, molestias accusamus doloremque fugiat minima unde fugit!</p>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                <div class="card_punti_focus">
                    <div class="card__side card__side--front">
                        <div>
                            <p><i class="fa-solid fa-circle-question display-5"></i></p>
                            <br>
                            <h1>Assistenza 24/7</h1>
                        </div>
                    </div>
                    <div class="card__side card__side--back card__side--back">
                        <p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore debitis ut illum, atque id quibusdam nihil dolorum veniam exercitationem odit natus possimus, quis, molestias accusamus doloremque fugiat minima unde fugit!</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-violet pt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h2 class="text-center title">Commenti</h2>
                </div>
            </div>
            <div class="row pt-3 container_comments_swiper">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="wrapper">
                        <!-- Slider main container -->
                        <div class="swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="content-wrapper">
                                        <div class="content">
                                            <div class="swiper-avatar"><img src="https://bikes-n-stuff.com/wp-content/uploads/sb-instagram-feed-images/julietelliott.jpg"></div>
                                            <p>"Utilizzo BoolBnB sia per ospitare che per viaggiare.
                                                Servizio perfetto da entrambe le parti.
                                                Come host sono tutelato alla grande, l'assistenza risponde all'istante e risolve sempre tutti i problemi.
                                                Dal lato dei viaggi non ho mai avuto problemi.
                                                Commissioni bassissime, assistenza perfetta, piattaforma eccellente. Non a caso BoolBnb è l'azienda leader nel settore"</p>
                                            <p class="cite">- Juliet Elliott, Cyclist</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content-wrapper">
                                        <div class="content">
                                            <div class="swiper-avatar"><img src="https://dgtzuqphqg23d.cloudfront.net/aqUDdv8fco91cPIeBAetAcpDfUEOIuaIrivU11PMnBs-2048x1942.jpg"></div>
                                            <p>"BoolBnb è un sito davvero facile da usare, in cui si possono trovare esperienze particolari a prezzi ottimi. Il servizio clienti poi è davvero cortese, preparato e sempre disponibile."</p>
                                            <p class="cite">- Katie Kookaburra, Cyclist</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content-wrapper">
                                        <div class="content">
                                            <div class="swiper-avatar"><img src="https://dgalywyr863hv.cloudfront.net/pictures/athletes/188112/45714/8/full.jpg"></div>
                                            <p>"Da qualche anno uso BoolBnb e mi trovo molto bene: le strutture scelte sono sempre coincidenti con le descrizioni presenti nel portale. Quando ho avuto problemi di salute ed ho dovuto annullare la prenotazione, sono sempre riuscita a recuperare la quota pattuita. Il call center funziona molto bene e mi ha saputo dare indicazioni molto utili, quando ne ho avuto bisogno."</p>
                                            <p class="cite">- Alison Tetrick, Cyclist</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content-wrapper">
                                        <div class="content">
                                            <div class="swiper-avatar"><img src="https://img.freepik.com/free-photo/pregnant-woman-taking-selfie_23-2148765138.jpg?w=826"></div>
                                            <p>"Esperienza di prenotazione semplice e veloce. Buona scelta di appartamenti di varie tipologie, con esaustiva descrizione e foto. Possibilità di disdetta entro un certo periodo con rimborso pagamento."</p>
                                            <p class="cite">- Alison Tetrick, Cyclist</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content-wrapper">
                                        <div class="content">
                                            <div class="swiper-avatar"><img src="https://img.freepik.com/free-photo/pregnant-woman-taking-selfie_23-2148765138.jpg?w=826"></div>
                                            <p>"Utilizzo questa applicazione da otto anni come viaggiatore e da quattro come host; mai avuto un problema con BoolBnb, è una certezza!"</p>
                                            <p class="cite">- Alison Tetrick, Cyclist</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- If we need pagination -->
                            <!-- If we need navigation buttons -->
                            <div class="swiper-nav-wrapper">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-image pt-3">
        <div class="container">
            <div class="row align-items-center vh-100">
                <div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
                    <div class="container_text">
                        <h3 class="text-center title pb-3">BoolBnb per l'ambiente</h3>
                        <p>Il mondo è un posto meraviglioso da visitare e scoprire, addentrandosi nelle culture straniere e nei luoghi più incredibili che la natura ci ha donato.<br>Quest'ultima ci ha regalato fantastici paesaggi mozzafiato costellati di alte montagne brunite e dai picchi innevati, oceani scintillanti pieni dei più meravigliosi colori ed ancora verdi foreste culla di fantastiche specie animale da ammirare, ma anche da proteggere. </p>
                        <p>BoolBnB ti permette di trovare sempre un posto che ti dia ospitalità per poter ammirare tutte le meraviglie del mondo.</p>
                        <p>Tuttavia, noi di BoolBnB siamo anche consapevoli che viaggiare inquina considerevolmente ed è necessario non lasciarsi fermare da ciò, ma anzi viaggiare con questa consapevolezza cercando di porre rimedio a tale inquinamento.</p>
                        <p>Per questo motivo, ogni prenotazione effettuata tramite BoolBnb presso i nostri Host certificati corrisponde a piantare un albero, grazie all'aiuto dei nostri amici di Treedom!</p>
                        <p>Per saperne di più visita il loro sito e, se vuoi, regala un albero, a te e al mondo.</p>
                        <br>
                        <p><a href="https://www.treedom.net/it/" class="btn btn-success" target="_blank">scopri di più</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<script type="module">
    import Swiper from 'https://unpkg.com/swiper@8/swiper-bundle.esm.browser.min.js'

    const swiper1 = new Swiper('.blog-slider', {
        spaceBetween: 30,
        effect: 'fade',
        loop: true,
        mousewheel: {
            invert: false,
        },
        // autoHeight: true,
        pagination: {
            el: '.blog-slider__pagination',
            clickable: true,
        }
    });

    const swiper2 = new Swiper(".swiper", {
        // Optional parameters
        direction: "horizontal",
        loop: true,
        autoHeight: false,
        centeredSlides: true,
        slidesPerView: 1,
        // Responsive breakpoints
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 40,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 40,
            }
        },

        // If we need pagination
        pagination: {
            el: ".swiper-pagination"
        },

        // Navigation arrows
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        }

        // And if we need scrollbar
        /*scrollbar: {
    el: '.swiper-scrollbar',
},*/
    });
</script>