@extends('frontend.master')
@section('content')
    <!-- banner section -->
    <section>
        <!-- banner section -->
        <div class="hero hero-primary overflow-hidden relative z-10">
            <!-- Swiper -->
            <div class="hero-slider-container swiper-container relative">
                <div class="swiper primary-slider">
                    <div class="swiper-wrapper">
                        <!-- Hero  1 -->
                        @foreach($sliderPlots as $keySliderPlott=>$datumSliderPlott)
                            <div
                                class="swiper-slide relative z-0 py-100px 4xl:min-h-[780px] overflow-hidden flex items-center bg-section-bg-1">
                                <div class="container w-full">
                                    <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-30px">
                                        <!-- banner Left -->
                                        <div class="slide-animation">
                                            <p class="text-sm md:text-15px lg:text-base text-heading-color font-bold mb-5 animated">
                                                <i class="fas fa-home text-secondary-color"></i> Real Estate | Guru
                                                Group
                                            </p>
                                            <h1 class="text-3xl md:text-40px lg:text-50px 4xl:text-65px leading-30px md:leading-10 lg:leading-50px 4xl:leading-65px font-bold mb-5 animated">
                                                <span
                                                    class="leading-30px md:leading-10 lg:leading-50px 4xl:leading-65px">{{$datumSliderPlott->title}}</span>
                                            </h1>
                                            <p class="text-sm lg:text-base mb-5 max-w-450px pl-15px xl:pl-30px border-l border-border-color-14 animated">
                                                    <span
                                                        class="leading-25px lg:leading-1.8"> {{ \Illuminate\Support\Str::words(strip_tags($datumSliderPlott->short_description), 20, '...') }} </span>
                                            </p>
                                            <div class="mt-5 lg:mt-10 mb-30px xl:mb-0 animated">
                                                <h5 class="capitalize text-sm md:text-base text-white relative group whitespace-nowrap font-normal transition-all duration-300 border border-secondary-color hover:border-heading-color inline-block mr-15px">
                                                <span
                                                    class="inline-block absolute top-0 right-0 w-full h-full bg-secondary-color group-hover:bg-primary-color z-1 group-hover:w-0 transition-all duration-300"></span>
                                                    <a href="about.html"
                                                       class="relative z-10 px-5 md:px-25px lg:px-10 py-10px md:py-3 lg:py-17px group-hover:text-heading-color leading-23px">Make
                                                        An Enquiry</a>
                                                </h5>
                                                @if($datumSliderPlott->video_url)
                                                    <div class="inline-block">
                                                        <div>
                                                            <a class="glightbox w-60px h-60px text-center text-sm lg:text-base text-secondary-color shadow-box-shadow-2 rounded-full bg-white flex items-center justify-center"
                                                               href="{{$datumSliderPlott->video_url}}"
                                                               data-glightbox="type: video;">
                                                                <i class="icon-play ltn__secondary-color"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- banner right -->
                                        <div
                                            class="4xl:absolute right-[60px] xl:right-[150px] bottom-[100px] 4xl:h-[70%] 4xl:w-[45%]">
                                            <img class="4xl:h-full 4xl:ml-auto"
                                                 src="{{asset($datumSliderPlott->thumbnail_image)}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                    <div class="hidden xl:block">
                        <div class="swiper-button-next">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="fas fa-arrow-left"></i>
                        </div>
                    </div>
                    <div
                        class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section -->
    <section>
        <div class="container pt-30 pb-90px">
            <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-30px">
                <!-- about left -->
                <div class="lg:mr-30px relative mb-10 lg:mb-0">
                    <img src="{{asset('frontend/assets/img/others/7.png')}}" alt="" class="max-w-full">
                </div>
                <!-- about right -->
                <div>
                    <div class="mb-5">
                        <p class="text-sm md:text-15px lg:text-base text-secondary-color bg-secondary-color bg-opacity-10 capitalize mb-15px py-1px px-5 rounded-full inline-block font-semibold">
                            <span class="leading-1.3">about us</span>
                        </p>
                        <h2 class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-44px text-heading-color font-bold mb-15px">
                            <span class="leading-1.3"> The Leading Real Estate Marketplace </span>
                        </h2>
                        <p class="text-sm lg:text-base max-w-500px">
                            <span class="leading-1.8 lg:leading-1.8">{{getConfigTableData()?->description}}</span>
                        </p>
                    </div>
                    <div>
                        <h5 class="uppercase text-sm md:text-base text-white relative group whitespace-nowrap font-normal mb-0 transition-all duration-300 border border-secondary-color hover:border-heading-color inline-block">
                            <span
                                class="inline-block absolute top-0 right-0 w-full h-full bg-secondary-color group-hover:bg-black hover:bg-primary-cogroup-lor z-1 group-hover:w-0 transition-all duration-300"></span>
                            <a href="service.html"
                               class="relative z-10 px-5 md:px-25px lg:px-10 py-10px md:py-3 lg:py-17px group-hover:text-heading-color leading-23px">KNOW
                                MORE</a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter section -->
    <section class="bg-section-bg-1">
        <div class="container pt-30 pb-70px">
            <div class="text-center counter grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-30px mb-45px -mt-3">
                <!-- count 1 -->
                <div>
                    <div class="text-65px text-secondary-color">
                        <i class="flaticon-select leading-1"></i>
                    </div>
                    <h5 class="text-3xl md:text-4xl lg:text-42px text-heading-color font-bold mb-10px">
                        <span class="leading-1.3" data-countup-number="560">560</span>
                        <span>+</span>
                    </h5>
                    <p class="text-sm lg:text-base font-bold">
                        <span class="leading-1.8">Total Area Sq</span>
                    </p>
                </div>
                <!-- count 2 -->
                <div>
                    <div class="text-65px text-secondary-color">
                        <i class="flaticon-office leading-1"></i>
                    </div>
                    <h5 class="text-3xl md:text-4xl lg:text-42px text-heading-color font-bold mb-10px">
                        <span class="leading-1.3" data-countup-number="197">197</span>
                        <span>K+</span>
                    </h5>
                    <p class="text-sm lg:text-base font-bold">
                        <span class="leading-1.8">Asset Sold</span>
                    </p>
                </div>
                <!-- count 3 -->
                <div>
                    <div class="text-65px text-secondary-color">
                        <i class="flaticon-excavator leading-1"></i>
                    </div>
                    <h5 class="text-3xl md:text-4xl lg:text-42px text-heading-color font-bold mb-10px">
                        <span class="leading-1.3" data-countup-number="268">268</span>
                        <span>+</span>
                    </h5>
                    <p class="text-sm lg:text-base font-bold">
                        <span class="leading-1.8">Total Constructions</span>
                    </p>
                </div>
                <!-- count 4 -->
                <div>
                    <div class="text-65px text-secondary-color">
                        <i class="flaticon-armchair leading-1"></i>
                    </div>
                    <h5 class="text-3xl md:text-4xl lg:text-42px text-heading-color font-bold mb-10px">
                        <span class="leading-1.3" data-countup-number="340">340</span>
                        <span>+</span>
                    </h5>
                    <p class="text-sm lg:text-base font-bold">
                        <span class="leading-1.8">Plots</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- featured appartments  section -->
    <section>
        <div class="container-3 pt-115px pb-[75px] modal-container">
            <!-- section heading -->
            <div class="text-center mb-50px">
                <p class="text-sm md:text-15px lg:text-base text-secondary-color bg-secondary-color bg-opacity-10 capitalize mb-15px py-0.5 px-5 rounded-full inline-block font-semibold">
                    <span class="leading-1.3">Properties</span>
                </p>
                <h2 class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-44px text-heading-color font-bold">
                    <span class="leading-1.3">Recent Properties </span>
                </h2>
            </div>
            <div class="featured-apartments swiper-container relative">
                <!-- apartment cards  -->
                <div class="swiper featured-apartments-slider static">
                    <div class="swiper-wrapper">
                        <!-- card 1 -->
                        @foreach($allPlots as $keyAllPlots => $datumAllPlots)

                            <div class="swiper-slide mb-65px px-15px">
                                <div class="group border border-border-color-13 shadow-box-shadow-4">
                                    <!-- card thumbs -->
                                    <div class="relative leading-1">
                                        <a href="product-details.html" class="overflow-hidden">
                                            <img src="{{asset($datumAllPlots->thumbnail_image)}}"
                                                 class="w-full group-hover:scale-110 transition-all duration-700 img-fluid"
                                                 style="height: 350px; width: 100%; object-fit:cover ;"
                                                 alt="">
                                        </a>

                                        <div
                                            class="absolute w-full left-0 bottom-0 px-15px pb-15px lg:px-30px bg-transparent bg-gradient-color-5">
                                            <div class="text-sm text-white flex justify-between items-center">
                                                <a href="locations.html" class="hover:text-secondary-color">
                                                    <i class="flaticon-pin"></i> Belmont Gardens,Chicago </a>
                                                <ul class="flex gap-10px">
                                                    <li>
                                                        <a class="w-30px lg:w-42px h-30px flex justify-center items-center bg-transparent lg:bg-white lg:bg-opacity-35 hover:text-secondary-color"
                                                           href="product-details.html">
                                                            <i class="fas fa-camera pr-1 leading-1"></i> {{$datumAllPlots?->galleries?->count()}}
                                                        </a>
                                                    </li>
                                                    @if($datumAllPlots->video_url)
                                                        <li>
                                                            <a class="w-30px lg:w-42px h-30px flex justify-center items-center bg-transparent lg:bg-white lg:bg-opacity-35 hover:text-secondary-color"
                                                               href="product-details.html">
                                                                <i class="fas fa-film pr-1 leading-1"></i> 1 </a>
                                                        </li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                        <div
                                            class="text-xs sm:text-13px text-white px-10px py-1 sm:px-15px sm:pt-3px sm:pb-0 bg-green uppercase font-semibold absolute top-[15px] right-[18px]">
                                            <span class="leading-5 sm:leading-25px block">for sale</span>
                                        </div>
                                    </div>
                                    <!-- card body -->
                                    <div class="px-5 pt-4 lg:px-30px lg:pt-5">
                                        {{--                                    <h5 class="text-lg text-secondary-color font-semibold mb-5px">--}}
                                        {{--                                        <span class="leading-1.8">$34,900</span>--}}
                                        {{--                                        <label class="text-sm font-normal">/Month</label>--}}
                                        {{--                                    </h5>--}}
                                        <h4 class="text-lg md:text-xl lg:text-22px font-semibold text-heading-color mb-15px">
                                            <a href="product-details.html"
                                               class="hover:text-secondary-color leading-1.3">{{$datumAllPlots->title}}</a>
                                        </h4>
                                        <p class="text-sm mb-15px">
                                            <a class="text-primary" href="">
                                            <span
                                                class="leading-1.8">{{ showText($datumAllPlots->short_description) }} <br> Read More</span>
                                            </a>
                                        </p>
                                    </div>
                                    <!-- cart footer -->
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- pagination -->
                    <div
                        class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal !-bottom-[6px]"></div>
                    <!--  navigation -->
                    <div class="hidden 3xl:block">
                        <div class="swiper-button-next z-1">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                        <div class="swiper-button-prev z-1">
                            <i class="fas fa-arrow-left"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modals -->
            <!-- modal apartment details-->
            <div
                class="modal hidden fixed top-0 left-0 w-full h-full z-xxl transition-all duration-500 bg-lightBlack opacity-0 overflow-y-auto">
                <div class="modal-close fixed md:absolute top-0 left-0 w-full h-full z-xsmall cursor-zoom-out"></div>
                <div
                    class="modal-content transition-all duration-500 -translate-y-20 sm:max-w-500px lg:max-w-980px m-2 mt-150px sm:mx-auto relative z-small rounded-lg">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-30px p-30px bg-white relative">
                        <div>
                            <img src="{{asset('frontend/assets/img/product/4.png')}}" class="w-full" alt="">
                        </div>
                        <!-- card body -->
                        <div class="pl-25px">
                            <div class="absolute right-4 top-4">
                                <button
                                    class="modal-close w-10 h-10 leading-10 text-center bg-section-bg-1 text-black text-25px inline-block">
                                    <span>×</span>
                                </button>
                            </div>
                            <ul class="flex items-center mb-5px">
                                <li>
                                    <a href="#" class="text-xs text-ratings hover:text-secondary-color">
                                        <i class="fas fa-star leading-1.8"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-xs text-ratings hover:text-secondary-color">
                                        <i class="fas fa-star leading-1.8"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-xs text-ratings hover:text-secondary-color">
                                        <i class="fas fa-star leading-1.8"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-xs text-ratings hover:text-secondary-color">
                                        <i class="fas fa-star-half-alt leading-1.8"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-xs text-ratings hover:text-secondary-color">
                                        <i class="far fa-star leading-1.8"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-xs text-ratings hover:text-secondary-color"> ( 95 Reviews
                                        )</a>
                                </li>
                            </ul>
                            <h4 class="text-22px md:text-2xl font-bold text-heading-color mb-0">
                                <a href="product-details.html" class="leading-1.3 hover:text-secondary-color">3 Rooms
                                    Manhattan</a>
                            </h4>
                            <p class="text-34px md:text-50px text-secondary-color font-semibold mb-5 pb-0 border-b border-border-color-12 border-opacity-25 leading-1.2">
                                <span>$34,900</span>
                                <del class="text-26px md:text-40px leading-1.2 opacity-60 pl-1">$36,500</del>
                            </p>
                            <p class="text-sm lg:text-base mb-9 md:mb-10">
                                <span class="leading-1.8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos repellendus repudiandae incidunt quidem pariatur expedita, quo quis modi tempore non.</span>
                            </p>
                            <ul class="flex flex-wrap gap-5 pb-5 mb-5 border-b border-border-color-12 border-opacity-25">
                                <li class="text-sm">
                                    <button
                                        class="modal-open leading-1.8 font-semibold hover:text-secondary-color transition-all duration-300"
                                        data-modal-index="3">
                                        <i class="far fa-heart px-0.5"></i> Add to Wishlist
                                    </button>
                                </li>
                                <li class="text-sm">
                                    <button
                                        class="leading-1.8 font-semibold hover:text-secondary-color transition-all duration-300">
                                        <i class="fas fa-exchange-alt px-0.5"></i> Compare
                                    </button>
                                </li>
                            </ul>
                            <!-- social area -->
                            <ul class="flex gap-x-[18px] items-center">
                                <li>
                                    <p class="text-sm lg:text-base">
                                        <span class="leading-1.8">Share</span>
                                    </p>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/"
                                       class="text-sm lg:text-base hover:text-secondary-color">
                                        <i class="fab fa-facebook-f leading-1.8"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://x.com/" class="text-sm lg:text-base hover:text-secondary-color">
                                        <i class="fab fa-twitter leading-1.8"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/"
                                       class="text-sm lg:text-base hover:text-secondary-color">
                                        <i class="fab fa-linkedin leading-1.8"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/"
                                       class="text-sm lg:text-base hover:text-secondary-color">
                                        <i class="fab fa-instagram leading-1.8"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- action -->
                            <div class="text-end">
                                <a href="product-details.html"
                                   class="text-xs hover:text-secondary-color underline hover:underline">
                                    <span class="leading-1.8">View Details</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal  wishlist 1-->
            <div
                class="modal hidden fixed top-0 left-0 w-full h-full z-xxl transition-all duration-500 bg-lightBlack opacity-0 overflow-y-auto">
                <div class="modal-close fixed md:absolute top-0 left-0 w-full h-full z-xsmall cursor-zoom-out"></div>
                <div
                    class="modal-content transition-all duration-500 -translate-y-20 max-w-500px m-2 mt-150px sm:mx-auto relative z-small p-30px bg-white">
                    <div class="flex">
                        <div class="w-125px mr-5 flex-shrink-0">
                            <img src="{{asset('frontend/assets/img/product/4.png')}}" class="w-full" alt="">
                        </div>
                        <!-- card body -->
                        <div class="pl-25px">
                            <div class="absolute right-4 top-4">
                                <button
                                    class="modal-close w-10 h-10 leading-10 text-center bg-black bg-opacity-5 text-black text-25px inline-block">
                                    <span>×</span>
                                </button>
                            </div>
                            <h4 class="text-base lg:text-lg font-bold text-heading-color mb-10px">
                                <a href="product-details.html" class="leading-1.3 hover:text-secondary-color">3 Rooms
                                    Manhattan</a>
                            </h4>
                            <p class="text-sm lg:text-base mb-5 md:mb-6  ">
                                <i class="fa fa-check-circle leading-1 text-green float-left clear-both pr-1.5 mt-1.5"></i>
                                Successfully added to your Wishlist
                            </p>
                            <!-- action -->
                            <div>
                                <h5 class="capitalize text-sm md:text-base text-white relative group whitespace-nowrap font-normal mb-0 transition-all duration-300 border border-secondary-color hover:border-heading-color inline-block">
                                    <span
                                        class="inline-block absolute top-0 right-0 w-full h-full bg-secondary-color group-hover:bg-black hover:bg-primary-cogroup-lor z-1 group-hover:w-0 transition-all duration-300"></span>
                                    <a href="wishlist.html"
                                       class="relative z-10 px-5 py-5px group-hover:text-heading-color leading-23px">View
                                        Wishlist</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal  wishlist 2-->
            <div
                class="modal hidden fixed top-0 left-0 w-full h-full z-xxl transition-all duration-500 bg-lightBlack opacity-0 overflow-y-auto">
                <div class="modal-close fixed md:absolute top-0 left-0 w-full h-full z-xsmall cursor-zoom-out"></div>
                <div
                    class="modal-content transition-all duration-500 -translate-y-20 max-w-500px m-2 mt-150px sm:mx-auto relative z-small p-30px bg-white">
                    <div class="flex">
                        <div class="w-125px mr-5 flex-shrink-0">
                            <img src="{{asset('frontend/assets/img/product/4.png')}}" class="w-full" alt="">
                        </div>
                        <!-- card body -->
                        <div class="pl-25px">
                            <div class="absolute right-4 top-4">
                                <button
                                    class="modal-close w-10 h-10 leading-10 text-center bg-black bg-opacity-5 text-black text-25px inline-block">
                                    <span>×</span>
                                </button>
                            </div>
                            <h4 class="text-base lg:text-lg font-bold text-heading-color mb-10px">
                                <a href="product-details.html" class="leading-1.3 hover:text-secondary-color">3 Rooms
                                    Manhattan</a>
                            </h4>
                            <p class="text-sm lg:text-base mb-5 md:mb-6  ">
                                <i class="fa fa-check-circle leading-1 text-green float-left clear-both pr-1.5 mt-1.5"></i>
                                Successfully added to your Wishlist
                            </p>
                            <!-- action -->
                            <div>
                                <h5 class="capitalize text-sm md:text-base text-white relative group whitespace-nowrap font-normal mb-0 transition-all duration-300 border border-secondary-color hover:border-heading-color inline-block">
                                    <span
                                        class="inline-block absolute top-0 right-0 w-full h-full bg-secondary-color group-hover:bg-black hover:bg-primary-cogroup-lor z-1 group-hover:w-0 transition-all duration-300"></span>
                                    <a href="wishlist.html"
                                       class="relative z-10 px-5 py-5px group-hover:text-heading-color leading-23px">View
                                        Wishlist</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonials section -->
    <section>
        <div class="bg-[url('../img/bg/20.jpg')] bg-top bg-no-repeat">
            <div class="container pt-115px pb-55px">
                <!-- section heading -->
                <div class="text-center mb-50px">
                    <p class="text-sm md:text-15px lg:text-base text-secondary-color bg-secondary-color bg-opacity-10 capitalize mb-15px py-0.5 px-5 rounded-full inline-block font-semibold">
                        <span class="leading-1.3">Our Testimonial</span>
                    </p>
                    <h2 class="text-2xl sm:text-3xl md:text-26px lg:text-3xl xl:text-44px text-heading-color font-bold">
                        <span class="leading-1.3">Clients Feedback </span>
                    </h2>
                </div>
                <div class="testimonials-slider-container swiper-container relative -mx-15px">
                    <!-- apartment cards  -->
                    <div class="swiper testimonials-slider static">
                        <div class="swiper-wrapper">
                            <!-- card 1 -->
                            @foreach($allTestimonials as $keyAllTestimonials => $datumAllTestimonials)
                                <div class="swiper-slide mb-65px lg:mb-50px px-15px">
                                    <div
                                        class="pt-25px pb-10 px-35px group border border-border-color-13 shadow-box-shadow-4 rounded-10px bg-white cursor-default relative">
                                        <!-- card body -->
                                        <div>
                                            <p class="text-sm md:text-base mb-5 md:mb-6 xl:mb-27px">
                          <span class="text-3xl mr-0.5 translate-y-2 inline-block">
                            <i class="flaticon-left-quote-1 group-hover:text-secondary-color transition-all duration-300"></i>
                          </span>
                                                <span class="leading-1.8"> {{showText($datumAllTestimonials->message,50)}}</span>
                                            </p>
                                        </div>
                                        <!-- cart footer -->
                                        <div>
                                            <div>
                                                <div
                                                    class="flex flex-wrap md:flex-nowrap gap-x-15px gap-y-10px items-center">
                                                    <div class="w-60px h-60px flex-shrink-0">
                                                        <img src="{{asset($datumAllTestimonials->image)}}"
                                                             alt=""
                                                             class="w-full h-full rounded-100%">
                                                    </div>
                                                    <div>
                                                        <h4 class="text-base lg:text-lg font-semibold text-heading-color mb-0">
                                                            <span class="leading-1.3 hover:text-secondary-color">Jacob William</span>
                                                        </h4>
                                                        <span class="text-sm uppercase"> Selling Agents </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <span
                                            class="hover-line absolute bottom-0 left-0 w-0 group-hover:w-full h-1 bg-secondary-color transition-all duration-300 block"></span>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <!-- pagination -->
                        <div
                            class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal !-bottom-[6px] block lg:hidden"></div>
                        <!--  navigation -->
                        <div class="hidden lg:block">
                            <div class="swiper-button-next bg-white z-1">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                            <div class="swiper-button-prev bg-white z-1">
                                <i class="fas fa-arrow-left"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- news  section -->
@endsection
