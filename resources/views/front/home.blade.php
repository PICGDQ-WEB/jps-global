@extends('front.layout')

@section('head')
    <title>Home | {{env('APP_NAME')}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <style>
        .swiper {
            width: 100%;
            height: 80vh;
        }   
    </style>
    <link href="https://vjs.zencdn.net/8.10.0/video-js.css" rel="stylesheet" />
@endsection

@section('body')
    
{{-- slider  --}}
{{-- <div class="swiper position-relative">
    <div class="overl__Y">
        <div class="d-flex align-items-center justify-content-center" style="height: 100%; width: 100%;">
            <h1 id="hero__title" class="text-center display-1">Discover The World<br/>In Every Bite!</h1>
        </div>
    </div>
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
</div> --}}
{{-- end slider  --}}

<div id="hero_video_section">
    <video
        id="my-video"
        class="video-js"
        autoplay="autoplay"
        muted loop
        preload="auto"
        poster="/assets/video_thumb.png"
        data-setup="{}"
        class="hero__video"
        style="width: 100%;"
    >
        <source src="/assets/video.mp4" type="video/mp4" />
        <source src="/assets/video.mp4" type="video/webm" />
        <p class="vjs-no-js">
        To view this video please enable JavaScript, and consider upgrading to a
        web browser that
        </p>
    </video>

    <div class="overl__Y">
        <div class="d-flex align-items-center justify-content-center" style="height: 100%; width: 100%;">
            <h1 id="hero__title" class="text-center display-1">Discover The World<br/>In Every Bite!</h1>
        </div>
    </div>
</div>

<div class="bg-white py-5">
    <div class="container">
        <div class="row m-0 justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12 mb-3">
                <p style="font-size: 0.8rem;" class="text-dark">BUILD YOUR COMMODITY PROGRAM IN A SAFE AND SUSTAINABLE WAY</p>
                <h2 class="text-dark" style="font-size: 3rem; font-weight: 800;">Smart, transparent and sustainable products and supply chains.</h2>
            </div>
            <div class="col-lg-6 col-md-12 mb-3">
                <p class="text-dark">At the heart of {{env('APP_NAME')}} is a profound dedication to quality that echoes through every grain we offer. We handpick the best grains to for consistently high-quality product. From field to plate, every bite reflects our commitment to delivering nothing but the best.</p>
                <a href="{{route('intro')}}">
                    <button class="btn btn-success rounded-0 py-3 px-4 mt-3">Know More</button>
                </a>
            </div>
        </div>
    </div>
</div>

{{-- What we value  --}}
<section>
    <div class="container pt-5 my-4 px-0">
        <div class="pe-3">
            <div class="text-end">OUR FOCUS</div>
            <h2 style="font-size: 2.7rem; font-weight: 900;" class="text-end my-3">Choose Quality, Choose Us</h2>
            <p class="text-end text-secondary">Discover the difference with our premium rice, where quality is never compromised.</p>
        </div>

        <div class="row m-0 mt-5">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-light rounded-0">
                    <img src="/front/media/used/rice-quality.jpg" alt="" class="w-100" style="height: 260px; object-fit: cover;">
                    <h3 class="mt-3 mx-3 mb-0" style="font-weight: 900;">Quality Assurance</h3>
                    <p class="p-3 text-secondary">We handpick the best grains to ensure a consistently high-quality product.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-light rounded-0">
                    <img src="/front/media/used/workforce.jpg" alt="" class="w-100" style="height: 260px; object-fit: cover;">
                    <h3 class="mt-3 mx-3 mb-0" style="font-weight: 900;">Vigilant Workforce</h3>
                    <p class="p-3 text-secondary">Qualified and skilled workforce, with manufacturing being monitored around-the-clock.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card border-light rounded-0">
                    <img src="/front/media/images/rice-variety.jpeg" alt="" class="w-100" style="height: 260px; object-fit: cover;">
                    <h3 class="mt-3 mx-3 mb-0" style="font-weight: 900;">Rice Variety</h3>
                    <p class="p-3 text-secondary">Discover a diverse range of Basmati rice to suit every culinary need.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Process  --}}
<section>
    <div class="container pt-5 my-4 px-3">
        <div class="pe-3">
            <div class="text-center">WHAT WE DO?</div>
            <h2 style="font-size: 2.7rem; font-weight: 900;" class="text-center my-3">Our Processes</h2>
            <p class="text-center text-secondary">From the moment paddy is unloaded from the lorry to the final step of packing the bags, the entire process is fully automated.</p>
        </div>

        <div class="row m-0 mt-4 pt-3">
            <div class="col-12" id="steps_tabs">
                <button onclick="toggletab(this, 'step1')" class="tab__active">
                    Research & Development
                </button>
                <button onclick="toggletab(this, 'step2')">
                    Procurement
                </button>
                <button onclick="toggletab(this, 'step3')">
                    Paddy Cleaning
                </button>
                <button onclick="toggletab(this, 'step4')">
                    Storage
                </button>
                <button onclick="toggletab(this, 'step5')">
                    De-Husking
                </button>
                <button onclick="toggletab(this, 'step6')">
                    Whitening and Polishing
                </button>
                <button onclick="toggletab(this, 'step7')">
                    Grading
                </button>
                <button onclick="toggletab(this, 'step8')">
                    Quality Control
                </button>
                <button onclick="toggletab(this, 'step9')">
                    Packaging & Distribution
                </button>

            </div>
            <div class="steps mt-4">
                <div id="step1" class="row m-0 stepActive">
                    <div class="col-md-6 mb-3 order-sm-2">
                        <h3 class="display-6">Research & Development</h3>
                        <p>We dedicate ourselves to thorough research and development to ensure we source the finest quality rice. Our efforts focus on identifying sustainable practices and establishing strong relationships with reliable suppliers and farmers.</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <img src="/assets/images/used/step1.jpg" alt="" class="timeline_image">
                    </div>
                </div>
                <div id="step2" class="row m-0" style="display: none;">
                    <div class="col-md-6 mb-3 order-sm-2">
                        <h3 class="display-6">Procurement</h3>
                        <p>Our procurement process begins with meticulous sourcing from trusted partners. We negotiate fair prices while prioritizing quality and consistency. Each batch of paddy undergoes rigorous inspection to meet our high standards before it enters our facility.</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <img src="/assets/images/used/step2.webp" alt="" class="timeline_image">
                    </div>
                </div>
                <div id="step3" class="row m-0" style="display: none;">
                    <div class="col-md-6 mb-3 order-sm-2">
                        <h3 class="display-6">Paddy Cleaning</h3>
                        <p>Upon arrival, the paddy undergoes comprehensive cleaning to remove impurities like dust and husk. This step is critical in preserving the rice's nutritional value and pristine appearance.</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <img src="/assets/images/used/step3.jpg" alt="" class="timeline_image">
                    </div>
                </div>
                <div id="step4" class="row m-0" style="display: none;">
                    <div class="col-md-6 mb-3 order-sm-2">
                        <h3 class="display-6">Storage</h3>
                        <p>Cleaned paddy is stored under optimal conditions to maintain freshness and quality. We ensure strict temperature and humidity controls to prevent deterioration and preserve taste.</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <img src="/assets/images/used/step4.jpg" alt="" class="timeline_image">
                    </div>
                </div>
                <div id="step5" class="row m-0" style="display: none;">
                    <div class="col-md-6 mb-3 order-sm-2">
                        <h3 class="display-6">De-Husking</h3>
                        <p>Using advanced machinery, we carefully remove the outer husk from the paddy, transforming it into brown rice. This step marks the beginning of the rice's journey towards becoming polished white rice.</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <img src="/assets/images/used/step5.jpg" alt="" class="timeline_image">
                    </div>
                </div>
                <div id="step6" class="row m-0" style="display: none;">
                    <div class="col-md-6 mb-3 order-sm-2">
                        <h3 class="display-6">Whitening and Polishing</h3>
                        <p>Brown rice is whitened and polished to achieve the smooth texture and appealing appearance that our customers expect. This process enhances both the visual appeal and taste of the rice.</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <img src="/assets/images/used/step6.webp" alt="" class="timeline_image">
                    </div>
                </div>
                <div id="step7" class="row m-0" style="display: none;">
                    <div class="col-md-6 mb-3 order-sm-2">
                        <h3 class="display-6">Grading</h3>
                        <p>Our grading process categorizes rice based on size, shape, and quality. This ensures uniformity and allows us to offer various grades that cater to different preferences and markets.</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <img src="/assets/images/used/step7.jpg" alt="" class="timeline_image">
                    </div>
                </div>
                <div id="step8" class="row m-0" style="display: none;">
                    <div class="col-md-6 mb-3 order-sm-2">
                        <h3 class="display-6">Quality Control</h3>
                        <p>Quality control is embedded in every stage of our process. We conduct rigorous testing and inspections to maintain purity, nutritional content, and adherence to food safety standards.</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <img src="/assets/images/used/step8.jpg" alt="" class="timeline_image">
                    </div>
                </div>
                <div id="step9" class="row m-0" style="display: none;">
                    <div class="col-md-6 mb-3 order-sm-2">
                        <h3 class="display-6">Packaging & Distribution</h3>
                        <p>The final step involves premium packaging designed to preserve the freshness and quality of our rice. We take pride in delivering our products efficiently through reliable distribution channels, ensuring that our rice arrives promptly and in perfect condition to our customers' tables.</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <img src="/assets/images/used/step9.jpg" alt="" class="timeline_image">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggletab(elem, step)
        {
            $('.steps').children('#'+step).show();
            $('.steps').children('#'+step).siblings().hide();
            $(elem).addClass('tab__active');
            $(elem).siblings().removeClass('tab__active');
        }
    </script>
</section>

{{-- About  --}}
<section>
    <div class="container pt-lg-5 px-0">
        <div class="row m-0 justify-content-center">
            <div class="col-lg-6 col-md-12 p-4 p-md-5 bg-white">
                <div class="p-md-4">
                    <h2 class="text-dark" style="font-size: 2.7rem;">About {{env('APP_NAME')}}</h2>
                    <div class="py-3">
                        <p class="text-dark">Welcome to {{env('APP_NAME')}}, where a rich tradition meets modern quality assurance. Hailing from the heartland of Haryana, Karnal. We are extremely proud to provide a broad range of Indian basmati and non-basmati rice.</p>
                        <p class="text-dark">Equipped with a state-of-the-art testing facility in our mill, we uphold stringent quality standards that only meets but exceeds expectations. We are dedicated to delivering superior quality in terms of taste, nutritional value, and overall satisfaction.</p>
                        <p class="text-dark">Join us on a journey where tradition and innovation come together to bring you the finest rice experience from Haryana.</p>
                    </div>
                    <a href="{{route('intro')}}">
                        <button class="btn btn-success rounded-0 py-3 px-4">Learn More</button>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 p-0">
                <img src="/front/media/og/jps.jpeg" alt="" style="height: 100%; width: 100%; object-fit: cover;">
            </div>
        </div>
    </div>

    {{-- Counter  --}}
    <div class="p-5 shadow-sm" style="background: #00c87a;">
        <div class="container p-0">
            <div class="row m-0 text-light justify-content-center">
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

    <div class="px-0">
        <div class="row m-0 justify-content-center">
            <div class="col-lg-6 col-md-12 p-0">
                <img src="/front/media/images/we-serve-authencity.jpeg" alt="" style="height: 100%; width: 100%; object-fit: cover; ">
            </div>
            <div class="col-lg-6 col-md-12 p-4 p-md-5 bg-white">
                <div class="p-md-4">
                    <h2 class="text-dark" style="font-size: 2.7rem;">We Serve Authenticity</h2>
                    <p class="text-dark py-4">We start in the fields, carefully growing and harvesting grains that capture true authenticity. Moving from the fields to processing, each step reflects our strong dedication to providing rice that's more than just food – it's a genuine experience filled with flavor and traditional craftsmanship. Trust us to bring you the authenticity you crave, from our fields to your table.</p>
                    <a href="{{route('infrastructure')}}">
                        <button class="btn btn-success rounded-0 py-3 px-4">Elevate Every Meal</button>
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
    <div class="p-0 mb-5" style="background: #00c87a;">
        <div class="d-flex align-items-center justify-content-center m-0" style="height: 100%; width: 100%;">
            <div class="col-10 col-lg-5 col-md-10 px-3 py-5 bg-white">
                <div style="font-size: 0.8rem;" class="text-dark text-center">LET'S WORK TOGETHER</div>
                <h2 class="text-dark text-center my-3" style="font-size: 2.8rem; font-weight: 900;">Contact us for more information</h2>
                <p class="text-dark text-center container col-md-11">Reach Out and Elevate Your Dining Experience with Us!</p>
                <div class="text-center py-3">
                    <a href="{{route('contact')}}">
                        <button class="btn btn-success px-4 py-3 rounded-0">Contact Us</button>
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
        
        @php
            $recent = DB::table('posts')
                        ->orderBy('id', 'DESC')
                        ->limit(6)
                        ->get();
        @endphp
        <div class="row m-0 my-4 pt-3">
            @foreach ($recent as $item)
            <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-4">
                <div class="card p-0 product__card">
                    <img src="/assets/images/blogs/{{$item->post_featured}}" alt="" class="w-100">
                    <div class="p-3">
                        <a href="{{route('post', ['slug'=>$item->post_url])}}" class="stretched-link">
                            <h3 class="" style="font-size:1.4rem;">Why you should choose Basmati Rice?</h3>
                        </a>
                        <div class="d-flex align-items-center text-secondary" style="font-size: 12px;">
                            <div><i class="fa-solid fa-globe-asia"></i>&nbsp;</div>
                            <div>Posted on {{date('d-m-y')}}</div>
                        </div>
                    </div>
                </div>
            </div> 
            @endforeach
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
    <script src="https://vjs.zencdn.net/8.10.0/video.min.js"></script>
    <script>
        videojs('player', {autoplay: true});
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            direction: 'horizontal',
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