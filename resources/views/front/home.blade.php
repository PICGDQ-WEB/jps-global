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
                <p class="text-light">From private label to brands, we develop strong and dependable, end-to-end supply chains. Backed by dependable, secure technology, we are committed to a traceable and sustainable future of commodities.</p>
                <button class="btn btn-outline-success rounded-0 py-3 px-4 mt-3">Learn More</button>
            </div>
        </div>
    </div>
</div>

{{-- What we value  --}}
<section>
    <div class="container pt-5 my-4 px-0">
        <div class="text-center">OUR FOCUS</div>
        <h2 style="font-size: 2.7rem; font-weight: 900;" class="text-center my-3">What We Value?</h2>
        <p class="text-center container col-md-5 text-secondary">Lorem ipsum dolor sit amet. Quaerat suscipit maiores consectetur doloribus veniam cum, itaque, quam deserunt ut eos, illum odit error. Ipsum officiis, possimus magni nisi nam.</p>

        <div class="row m-0 mt-5">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card rounded-0">
                    <img src="/front/media/images/jasmine-rice.jpg" alt="" class="w-100" style="height: 260px; object-fit: cover;">
                    <h3 class="mt-3 mx-3 mb-0" style="font-weight: 900;">Safe</h3>
                    <p class="p-3 text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem commodi asperiores, inventore quia quibusdam incidunt sit. Minima blanditiis cumque fuga ratione laboriosam, nemo placeat at aspernatur laudantium, magnam maxime quibusdam.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card rounded-0">
                    <img src="/front/media/images/jasmine-rice.jpg" alt="" class="w-100" style="height: 260px; object-fit: cover;">
                    <h3 class="mt-3 mx-3 mb-0" style="font-weight: 900;">Transparent</h3>
                    <p class="p-3 text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem commodi asperiores, inventore quia quibusdam incidunt sit. Minima blanditiis cumque fuga ratione laboriosam, nemo placeat at aspernatur laudantium, magnam maxime quibusdam.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card rounded-0">
                    <img src="/front/media/images/jasmine-rice.jpg" alt="" class="w-100" style="height: 260px; object-fit: cover;">
                    <h3 class="mt-3 mx-3 mb-0" style="font-weight: 900;">Sustainable</h3>
                    <p class="p-3 text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem commodi asperiores, inventore quia quibusdam incidunt sit. Minima blanditiis cumque fuga ratione laboriosam, nemo placeat at aspernatur laudantium, magnam maxime quibusdam.</p>
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
                    <p class="text-light py-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse ut aut nesciunt amet corrupti voluptatum enim, iure quod impedit consectetur placeat quasi maxime doloribus explicabo exercitationem quisquam dignissimos mollitia eum molestiae? Vero reiciendis deleniti non exercitationem nostrum vel temporibus officia atque ad quidem optio praesentium nesciunt harum accusamus veniam facilis eius molestias dolore, quasi neque eos! Autem molestiae facere, aperiam harum eum velit officia obcaecati asperiores eaque sed eius esse? Nostrum necessitatibus repudiandae sint nam labore, possimus ipsum, earum soluta harum facere autem dolorem quidem excepturi eos ducimus dolorum corporis fugit omnis culpa velit veritatis ratione! Omnis ratione at sint!</p>
                    <button class="btn btn-outline-success rounded-0 py-3 px-4">Explore More</button>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 p-0">
                <img src="/front/media/images/jasmine-rice.jpg" alt="" style="height: 100%; width: 100%; object-fit: cover; ">
            </div>
        </div>
    </div>

    {{-- Counter  --}}
    <div class="bg-warning p-5 shadow-sm">
        <div class="container p-0">
            <div class="row m-0 text-dark">
                <div class="col-6 col-lg-3 col-md-4 col-sm-6 my-2" id="counterContainer">
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
                </div>
            </div>
        </div>
    </div>
    {{-- End Counter  --}}

    <div class=" pb-5 mb-3 px-0">
        <div class="row m-0 justify-content-center">
            <div class="col-lg-6 col-md-12 p-0">
                <img src="/front/media/images/jasmine-rice.jpg" alt="" style="height: 100%; width: 100%; object-fit: cover; ">
            </div>
            <div class="col-lg-6 col-md-12 p-4 p-md-5 bg-dark">
                <div class="p-md-4">
                    <h2 class="text-light" style="font-size: 2.7rem;">Rice</h2>
                    <p class="text-light py-4">We are proud to offer an end-to-end rice supply chain. All of our rice is USA grown and packaged. Each grain is traced and monitored for sustainability. Our grading standards ensure the highest quality. We support our farmers in their communities as they grow rice to support the growing demand for USA rice in domestic and export markets.</p>
                    <button class="btn btn-outline-success rounded-0 py-3 px-4">Explore More</button>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End About --}}

{{-- Products --}}
<section class="mb-md-5 pb-4">
    <div class="container pt-3 my-4 px-0">
        <div class="text-center">What we provide?</div>
        <h2 style="font-size: 2.7rem; font-weight: 900;" class="text-center my-3">Our Products</h2>
        <p class="text-center container col-lg-5 text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat suscipit maiores consectetur doloribus veniam cum, itaque, quam deserunt ut eos, illum odit error.</p>
        
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
</section>
{{-- End Products --}}

{{-- contact us  --}}
<section>
    <div class="container p-0 bg-dark mb-5" style="height: 70vh;">
        <div class="d-flex align-items-center justify-content-center m-0" style="height: 100%; width: 100%;">
            <div class="col-10 col-lg-5 col-md-10 px-3 py-4 bg-black">
                <div style="font-size: 0.8rem;" class="text-secondary text-center">LET'S WORK TOGETHER</div>
                <h2 class="text-light text-center my-3" style="font-size: 2.8rem; font-weight: 900;">Contact us for more information</h2>
                <p class="text-secondary text-center container col-md-11">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab fugiat nulla saepe doloribus expedita, omnis voluptatibus provident soluta assumenda, molestias hic iste!</p>
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
        <h2 style="font-size: 2.7rem; font-weight: 900;" class="text-center my-3">Our Blogs</h2>
        <p class="text-center container col-lg-5 text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat suscipit maiores consectetur doloribus veniam cum, itaque, quam deserunt ut eos, illum odit error.</p>
        
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