@extends('front.layout')

@section('head')
    <title>Product | {{env('APP_NAME')}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .mySwiper .swiper-slide {
            width: 25%;
            height: 100%;
            opacity: 0.4;
        }
        .mySwiper .swiper-slide:hover{
            opacity: 0.7;
            cursor: pointer;
        }

        .mySwiper .swiper-slide-thumb-active {
            opacity: 1;
        }

        #imagePreview .swiper-slide img
        {
            height: 500px;
        }

        #thumbs .swiper-slide img
        {
            height: 70px;
            width: 90px;
        }
    </style>
@endsection

@section('body')

<div class="modal fade" id="queryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border-0">
        <div class="modal-body p-0" style="min-height: 60vh;">
          <div class="row m-0 p-0">
            {{-- <div class="col-md-5 p-0">
                <img src="/front/media/images/closeup-mixed-rice.jpg" alt="" class="w-100" style="border-radius: 20px 0px 0px 20px; height: 60vh; object-fit: cover; object-position: right;">
            </div> --}}
            <div class="col-md-12 p-4 my-2">
                <h2 class="text-green text-center">Generate Query</h2>

                <div class="mt-4">
                    <form action="">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="my-label text-green">Your name</label>
                            <input type="text" class="my-form-control-transparent">
                        </div>
                        <div class="mb-3">
                            <label for="" class="my-label text-green">Phone</label>
                            <input type="tel" class="my-form-control-transparent">
                        </div>
                        <div class="mb-3">
                            <label for="" class="my-label text-green">Email</label>
                            <input type="email" class="my-form-control-transparent">
                        </div>
                        <div class="mb-3">
                            <label for="" class="my-label text-green">Message</label>
                            <textarea name="" cols="30" rows="6" class="my-form-control-transparent" style="resize: none;"></textarea>
                        </div>
                        <div>
                            <button class="btn btn-success rounded-0 w-100 text-center py-3">
                                <i class="fa-regular fa-pen-to-square"></i> Generate Query
                            </button>
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<section style="padding-top: 110px;" class="bg-black text-gray">
    <div class="container py-md-4 px-0">
        <div class="productImageHolder row m-0">
            <div class="col-lg-5 mb-4">
                {{-- Image Preview  --}}
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 mb-2">
                    <div class="swiper-wrapper" id="imagePreview">
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                {{-- Thumbs --}}
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper" id="thumbs">
                        <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                        </div>
                        <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                        </div>
                        <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                        </div>
                        <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                        </div>
                        <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                        </div>
                        <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                        </div>
                        <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                        </div>
                        <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                        </div>
                        <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-3">
                <h1 class="text-green">Indian Basmati Rice</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, quia suscipit. Provident tenetur quos nobis aspernatur minima cum deleniti voluptates commodi esse quas distinctio excepturi illum corporis, assumenda amet quo illo atque temporibus voluptatibus, ducimus, aliquid incidunt rerum.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur, doloribus.</p>

                <h2 style="font-size: 1.4rem;" class="mt-4 text-light">Why this rice?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, id.</p>
                <ul>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                </ul>

                <div class="mt-md-4 col-lg-5 pt-3">
                    <button class="btn btn-outline-success rounded-0 px-4 py-3 w-100" data-bs-toggle="modal" data-bs-target="#queryModal">
                        <i class="fa-regular fa-pen-to-square"></i> Generate Query
                    </button>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="px-3 py-4 pt-md-5">
    <div class="container py-md-4">
        <h2 class="mb-4 pb-md-4">Other Products</h2>
        <div class="row m-0" id="products">
            @for($i=1; $i<=4; $i++)
            <div class="col-lg-3 col-md-6 col-6 mb-3 mb-md-4 pe-0">
                <div class="card p-0 product__card">
                    <div class="overlay">
                        <a href="{{route('product')}}">
                            <button class="btn btn-success px-3 py-2 rounded-0"><i class="fa-regular fa-eye"></i> View Product</button>
                        </a>
                    </div>
                    <img src="/front/media/products/product.jpg" alt="" class="w-100">
                    <div class="d-flex align-items-center justify-content-between" style="font-size: 13px;">
                        <span class="p-3">Basmati Rice</span>
                        <div class="ps-3 text-success" style="font-weight: 800;">
                            <i class="fa-regular fa-star-half-stroke"></i> 4.5
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 mb-3 mb-md-4 pe-0">
                <div class="card p-0 product__card">
                    <div class="overlay">
                        <a href="{{route('product')}}">
                            <button class="btn btn-success px-3 py-2 rounded-0"><i class="fa-regular fa-eye"></i> View Product</button>
                        </a>
                    </div>
                    <img src="/front/media/products/product.jpg" alt="" class="w-100">
                    <div class="d-flex align-items-center justify-content-between" style="font-size: 13px;">
                        <span class="p-3">Local Rice</span>
                        <div class="ps-3 text-success" style="font-weight: 800;">
                            <i class="fa-regular fa-star-half-stroke"></i> 4.5
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

{{-- contact us  --}}
<section>
    <div class=" p-0 bg-dark" style="height: 70vh;">
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

@endsection

@section('foot')
    <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 10,
      slidesPerView: 5,
      freeMode: true,
      watchSlidesProgress: true,
      breakpoints: { 
        500: {  
            slidesPerView: 5,
            slidesPerColumn: 3,
        },
        900: {  
            slidesPerView: 7,
            slidesPerColumn: 3,
        },
        1024: {  
            slidesPerView: 5,
            slidesPerColumn: 5,
        },
        }
    });
    var swiper2 = new Swiper(".mySwiper2", {
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      thumbs: {
        swiper: swiper,
      },
    });
  </script>
@endsection