@extends('layouts.guest')
@section("page_title", "Home Page")

@section('content_header')

<div class="container">
    <div class="row vh-100 justify-content-center align-items-center">
        <div class="col-md-6 col-sm-6 col-xs-12">
             <div class="bar_search">
                <form action="{{ route('search')}}" method="get" class="mb-5 d-flex">

                    <input style="font-size:30px;" type="text" placeholder="Dove vuoi andare?" name="search" value="">

                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')
<div class="container_home_guests">
    <div class="bg-violet pb-200 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h2 class="text-center title">Vetrina</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="carousel_apratments_swiper mt-150">
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

    <div class="container py-5">
        <div class="row py-5">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h2 class="text-center title">Perchè scegliere BooBnb?</h2>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                <h3 class="pb-3">Host Certificati</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore debitis ut illum, atque id quibusdam nihil dolorum veniam exercitationem odit natus possimus, quis, molestias accusamus doloremque fugiat minima unde fugit!</p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                <h3 class="pb-3">Garanzia MoneyBack</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore debitis ut illum, atque id quibusdam nihil dolorum veniam exercitationem odit natus possimus, quis, molestias accusamus doloremque fugiat minima unde fugit!</p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                <h3 class="pb-3">Assistenza 24/7</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore debitis ut illum, atque id quibusdam nihil dolorum veniam exercitationem odit natus possimus, quis, molestias accusamus doloremque fugiat minima unde fugit!</p>
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
                                            <p>"Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec id elit non mi porta gravida at eget metus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum."</p>
                                            <p class="cite">- Juliet Elliott, Cyclist</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content-wrapper">
                                        <div class="content">
                                            <div class="swiper-avatar"><img src="https://dgtzuqphqg23d.cloudfront.net/aqUDdv8fco91cPIeBAetAcpDfUEOIuaIrivU11PMnBs-2048x1942.jpg"></div>
                                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere consectetur est at lobortis. Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros."</p>
                                            <p class="cite">- Katie Kookaburra, Cyclist</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content-wrapper">
                                        <div class="content">
                                            <div class="swiper-avatar"><img src="https://dgalywyr863hv.cloudfront.net/pictures/athletes/188112/45714/8/full.jpg"></div>
                                            <p>"Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec id elit non mi porta gravida at eget metus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum."</p>
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
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum possimus architecto quam at voluptatem veritatis inventore ratione nemo minima ex voluptatibus eveniet, veniam provident magni, nostrum eum, exercitationem dolor repellendus?</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum possimus architecto quam at voluptatem veritatis inventore ratione nemo minima ex voluptatibus eveniet, veniam provident magni, nostrum eum, exercitationem dolor repellendus?</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum possimus architecto quam at voluptatem veritatis inventore ratione nemo minima ex voluptatibus eveniet, veniam provident magni, nostrum eum, exercitationem dolor repellendus?</p>
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