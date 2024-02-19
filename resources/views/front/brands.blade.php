@extends('front.layout')

@section('head')
    <title>Our Brands | {{env('APP_NAME')}}</title>
@endsection

@section('body')

{{-- Header Top  --}}
{{-- <section>
    <div class="bg-black text-light d-flex align-items-end" id="top__header">
        <div class="container py-5">
            <p class="text-uppercase text-secondary">Our brands</p>
            <h1 style="font-weight: 900;">Welcome to {{env('APP_NAME')}}</h1>
        </div>
    </div>
</section> --}}
{{-- End Header Top  --}}

{{-- <section>

    <div>
        <img src="/front/media/brands/brand1.jpeg" alt="" class="w-100" style="object-fit: cover; object-position: center; z-index:1;">
        <div class="container py-5">
            <h2 class="mb-3">#1 Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, optio. Quos explicabo iure nisi at consectetur officiis nostrum minima nemo laboriosam quae repellendus, iste vitae itaque eum fuga quam omnis.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa accusantium natus aut, in vitae et officiis, fuga inventore, quas nemo ut earum ipsam laudantium! Quo aut laboriosam in vero similique, odio voluptas vitae fugiat, tempora pariatur cupiditate omnis dolore architecto reiciendis voluptatibus eligendi ab. Laborum.</p>
        </div>
    </div>
    <div>
        <img src="/front/media/brands/brand2.jpeg" alt="" class="w-100" style="object-fit: cover; object-position: center; z-index:1;">
        <div class="container py-5">
            <h2 class="mb-3">#2 Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, optio. Quos explicabo iure nisi at consectetur officiis nostrum minima nemo laboriosam quae repellendus, iste vitae itaque eum fuga quam omnis.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa accusantium natus aut, in vitae et officiis, fuga inventore, quas nemo ut earum ipsam laudantium! Quo aut laboriosam in vero similique, odio voluptas vitae fugiat, tempora pariatur cupiditate omnis dolore architecto reiciendis voluptatibus eligendi ab. Laborum.</p>
        </div>
    </div>

</section> --}}

<div>
    <img src="/front/media/images/coming-soon.jpg" alt="" style="width: 100%; height: 95vh; object-fit: contain; background-color: rgb(27,24,31);">
</div>

{{-- contact us  --}}
<section>
    <div class="p-0" style="height: 75vh; background-color: rgb(27,24,31);">
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

@endsection