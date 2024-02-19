@extends('front.layout')

@section('head')
    <title>Home | {{env('APP_NAME')}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <style>
        .swiper {
            width: 100%;
            height: 500px;
        }   
    </style>
@endsection

@section('body')
    
{{-- slider  --}}
<div class="swiper position-relative">
    <div class="overl__Y"></div>
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="/front/media/slider/1.webp" alt="">
      </div>
      <div class="swiper-slide">
        <img src="/front/media/slider/2.webp" alt="">
      </div>
      <div class="swiper-slide">
        <img src="/front/media/slider/3.webp" alt="">
      </div>
    </div>
</div>
{{-- end slider  --}}

<div class="bg-black py-5">
    <div class="container">
        <div class="row m-0 justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12 mb-3">
                <p style="font-size: 0.8rem;" class="text-secondary">BUILD YOUR COMMODITY PROGRAM IN A SAFE AND SUSTAINABLE WAY</p>
                <h2 class="text-light" style="font-size: 3rem; font-weight: 800;">Smart, transparent and sustainable products and supply chains.</h2>
            </div>
            <div class="col-lg-6 col-md-12 mb-3">
                <p class="text-light">At the heart of {{env('APP_NAME')}} is a profound dedication to quality that echoes through every grain we offer. We handpick the best grains to for consistently high-quality product. From field to plate, every bite reflects our commitment to delivering nothing but the best.</p>
                <a href="{{route('intro')}}">
                    <button class="btn btn-outline-success rounded-0 py-3 px-4 mt-3">Know More</button>
                </a>
            </div>
        </div>
    </div>
</div>

{{-- What we value  --}}
<section>
    <div class="container pt-5 my-4 px-0">
        <div class="text-center">OUR FOCUS</div>
        <h2 style="font-size: 2.7rem; font-weight: 900;" class="text-center my-3">Choose Quality, Choose Us</h2>
        <p class="text-center container col-md-5 text-secondary">Discover the difference with our premium rice, where quality is never compromised.</p>

        <div class="row m-0 mt-5">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card rounded-0">
                    <img src="/front/media/images/rice quality assurance.jpeg" alt="" class="w-100" style="height: 260px; object-fit: cover;">
                    <h3 class="mt-3 mx-3 mb-0" style="font-weight: 900;">Quality Assurance</h3>
                    <p class="p-3 text-secondary">We handpick the best grains to ensure a consistently high-quality product.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card rounded-0">
                    <img src="/front/media/images/vigilant-workforce.jpeg" alt="" class="w-100" style="height: 260px; object-fit: cover;">
                    <h3 class="mt-3 mx-3 mb-0" style="font-weight: 900;">Vigilant Workforce</h3>
                    <p class="p-3 text-secondary">Qualified and skilled workforce, with manufacturing being monitored around-the-clock.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card rounded-0">
                    <img src="/front/media/images/rice-variety.jpeg" alt="" class="w-100" style="height: 260px; object-fit: cover;">
                    <h3 class="mt-3 mx-3 mb-0" style="font-weight: 900;">Rice Variety</h3>
                    <p class="p-3 text-secondary">Discover a diverse range of Basmati rice to suit every culinary need.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- About  --}}
<section>
    <div class="container pt-lg-5 px-0">
        <div class="row m-0 justify-content-center">
            <div class="col-lg-6 col-md-12 p-4 p-md-5 bg-dark">
                <div class="p-md-4">
                    <h2 class="text-light" style="font-size: 2.7rem;">About {{env('APP_NAME')}}</h2>
                    <div class="py-3">
                        <p class="text-light">Welcome to {{env('APP_NAME')}}, where a rich tradition meets modern quality assurance. Hailing from the heartland of Haryana, Karnal. We are extremely proud to provide a broad range of Indian basmati and non-basmati rice.</p>
                        <p class="text-light">Equipped with a state-of-the-art testing facility in our mill, we uphold stringent quality standards that only meets but exceeds expectations. We are dedicated to delivering superior quality in terms of taste, nutritional value, and overall satisfaction.</p>
                        <p class="text-light">Join us on a journey where tradition and innovation come together to bring you the finest rice experience from Haryana.</p>
                    </div>
                    <a href="{{route('intro')}}">
                        <button class="btn btn-outline-success rounded-0 py-3 px-4">Learn More</button>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 p-0">
                <img src="/front/media/og/jps.jpeg" alt="" style="height: 100%; width: 100%; object-fit: cover;">
            </div>
        </div>
    </div>

    {{-- Counter  --}}
    <div class="bg-warning p-5 shadow-sm">
        <div class="container p-0">
            <div class="row m-0 text-dark justify-content-center">
                {{-- <div class="col-6 col-lg-3 col-md-4 col-sm-6 my-2" id="counterContainer">
                    <div>
                        <div class="text-center"><i class="fa-solid fa-users fa-xl"></i></div>
                        <div class="counterNumber text-center">1200+</div>
                        <p class="mb-0 counterDesc text-center">Happy Customers</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-4 col-sm-6 my-2" id="counterContainer">
                    <div>
                        <div class="text-center"><i class="fa-solid fa-dolly fa-xl"></i></i></div>
                        <div class="counterNumber text-center">9200+</div>
                        <p class="mb-0 counterDesc text-center">Orders</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-4 col-sm-6 my-2" id="counterContainer">
                    <div>
                        <div class="text-center"><i class="fa-solid fa-user-group fa-xl"></i></div>
                        <div class="counterNumber text-center">489+</div>
                        <p class="mb-0 counterDesc text-center">Employees</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-4 col-sm-6 my-2" id="counterContainer">
                    <div>
                        <div class="text-center"><i class="fa-solid fa-city fa-xl"></i></div>
                        <div class="counterNumber text-center">79+</div>
                        <p class="mb-0 counterDesc text-center">Cities</p>
                    </div>
                </div> --}}
                <div class="col-6 col-lg-3 col-md-4 col-sm-6 my-2" id="counterContainer">
                    <div>
                        <div class="text-center"><i class="fa-solid fa-city fa-xl"></i></div>
                        <div class="counterNumber text-center">200+ Per Day</div>
                        <p class="mb-0 counterDesc text-center">Production Capacity</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Counter  --}}

    <div class=" pb-5 mb-3 px-0">
        <div class="row m-0 justify-content-center">
            <div class="col-lg-6 col-md-12 p-0">
                <img src="/front/media/images/we-serve-authencity.jpeg" alt="" style="height: 100%; width: 100%; object-fit: cover; ">
            </div>
            <div class="col-lg-6 col-md-12 p-4 p-md-5 bg-dark">
                <div class="p-md-4">
                    <h2 class="text-light" style="font-size: 2.7rem;">We Serve Authenticity</h2>
                    <p class="text-light py-4">We start in the fields, carefully growing and harvesting grains that capture true authenticity. Moving from the fields to processing, each step reflects our strong dedication to providing rice that's more than just food – it's a genuine experience filled with flavor and traditional craftsmanship. Trust us to bring you the authenticity you crave, from our fields to your table.</p>
                    <a href="{{route('infrastructure')}}">
                        <button class="btn btn-outline-success rounded-0 py-3 px-4">Elevate Every Meal</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End About --}}

{{-- Products --}}
{{-- <section class="mb-md-5 pb-4">
    <div class="container pt-3 my-4 px-0">
        <div class="text-center">What we provide?</div>
        <h2 style="font-size: 2.7rem; font-weight: 900;" class="text-center my-3">Our Signature Rice Products</h2>
        <p class="text-center container col-lg-6 text-secondary">Discover the difference – because your taste buds deserve nothing but the best.</p>
        
        <div class="row m-0 my-4 pt-3">
            @for($i=1; $i<=4; $i++)
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
                <div class="card p-0 product__card">
                    <div class="overlay">
                        <a href="{{route('product')}}">
                            <button class="btn btn-dark px-3 py-2 rounded-0">Learn more</button>
                        </a>
                    </div>
                    <img src="/front/media/products/product.jpg" alt="" class="w-100">
                    <div class="p-3">Basmati Rice</div>
                </div>
            </div>
            @endfor
            <div class="col-md-12 text-center mt-3">
                <a href="{{route('products')}}">
                    <button class="btn btn-outline-dark px-4 py-2 btn-lg rounded-0"><i class="fa-solid fa-arrow-right"></i> &nbsp;Explore</button>
                </a>
            </div>
        </div>
    </div>
</section> --}}
{{-- End Products --}}

{{-- contact us  --}}
<section>
    <div class="container p-0 bg-dark mb-5" style="height: 70vh;">
        <div class="d-flex align-items-center justify-content-center m-0" style="height: 100%; width: 100%;">
            <div class="col-10 col-lg-5 col-md-10 px-3 py-4 bg-black">
                <div style="font-size: 0.8rem;" class="text-secondary text-center">LET'S WORK TOGETHER</div>
                <h2 class="text-light text-center my-3" style="font-size: 2.8rem; font-weight: 900;">Contact us for more information</h2>
                <p class="text-secondary text-center container col-md-11">Reach Out and Elevate Your Dining Experience with Us!</p>
                <div class="text-center py-3">
                    <a href="{{route('contact')}}">
                        <button class="btn btn-outline-light px-4 py-3 rounded-0">Contact Us</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- end of contact us  --}}

{{-- Blog --}}
<section class="mb-5 pb-4">
    <div class="container pt-3 my-4 px-0">
        <div class="text-center">What's New?</div>
        <h2 style="font-size: 2.7rem; font-weight: 900;" class="text-center my-3">Explore, Indulge, & Elevate</h2>
        <p class="text-center container col-lg-5 text-secondary">Discover the stories behind our products, learn new cooking techniques, and stay updated on all things rice-related.</p>
        
        <div class="row m-0 my-4 pt-3">
            @for($i=1; $i<=6; $i++)
            <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-4">
                <div class="card p-0 product__card">
                    <div class="overlay">
                        <a href="{{route('post')}}">
                            <button class="btn btn-dark px-3 py-2 rounded-0">Read more</button>
                        </a>
                    </div>
                    <img src="/front/media/products/product.jpg" alt="" class="w-100">
                    <div class="p-3">
                        <h3 class="" style="font-size:1.4rem;">Why you should choose Basmati Rice?</h3>
                        <p class="text-secondary mb-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id, blanditiis suscipit fugit rerum, dolor ad voluptas sequi ullam odio adipisci quas earum deleniti quis ipsum quo ea magni aliquid autem.</p>
                        <div class="d-flex align-items-center text-secondary" style="font-size: 12px;">
                            <div><i class="fa-solid fa-globe-asia"></i>&nbsp;</div>
                            <div>Posted on {{date('d-m-y')}}</div>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
            <div class="col-md-12 text-center mt-3">
                <a href="{{route('blog')}}">
                    <button class="btn btn-outline-dark px-4 py-2 btn-lg rounded-0"><i class="fa-solid fa-arrow-right"></i> &nbsp;Explore</button>
                </a>
            </div>
        </div>
    </div>
</section>
{{-- End Blog --}}

@endsection

@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            direction: 'vertical',
            loop: true,
            autoplay: {
                delay: 6000,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
@endsection