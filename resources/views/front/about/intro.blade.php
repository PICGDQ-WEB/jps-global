@extends('front.layout')

@section('head')
    <title>About Us | {{env('APP_NAME')}}</title>
@endsection

@section('body')

{{-- Header Top  --}}
<section>
    <div class="bg-dark text-light d-flex align-items-end" id="top__header">
        <div class="container py-5">
            <h1 style="font-weight: 900;">Ready to Taste the Finest?</h1>
            <p class="text-uppercase text-secondary">Take a journey with us where taste meets uncompromised quality – because your culinary satisfaction starts with the finest rice.</p>
        </div>
    </div>
</section>
{{-- End Header Top  --}}


<section class="">
    <div class="container my-5 py-md-5">
        <div class="row m-0">
            <div class="col-lg-6 mb-3">
                <h2>About {{env('APP_NAME')}}</h2>
                <p>We deliver on time and ensure top-notch quality. Tahar boasts a modern testing facility, fully equipped to uphold excellent quality assurance and standards. Our proficiency further lies in meeting even the most demanding customer requirements.</p>
                <p>With cutting-edge rice milling equipment, get complete production to delivery solutions.</p>

                <div class="row m-0 mb-3">
                    <div class="col-lg-6 col-6 mb-3">
                        <div class="counterNumber">2023</div>
                        <div class="counterDesc text-capitalize">Founded</div>
                    </div>
                    <div class="col-lg-6 col-6 mb-3">
                        <div class="counterNumber">200+ per day</div>
                        <div class="counterDesc text-capitalize">Production Capacity</div>
                    </div>
                    {{-- <div class="col-lg-6 col-6 mb-3">
                        <div class="counterNumber">9200+</div>
                        <div class="counterDesc text-capitalize">Orders</div>
                    </div>
                    <div class="col-lg-6 col-6 mb-3">
                        <div class="counterNumber">7200+</div>
                        <div class="counterDesc text-capitalize">Acres</div>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <img src="/front/media/og/jps.jpeg" alt="" class="w-100">
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-5">
    <div class="container my-4">
        <h2 class="col-lg-6" style="line-height: 45px !important;">We go beyond delivering excellent taste and quality of rice; certain unique aspects set us apart, making us superior to others.</h2>
        <div class="row m-0 my-md-5">
            <div class="col-lg-4 pe-0">
                <div class="card rounded-0 p-4 bg-light border-0">
                    <i class="text-green fa-solid fa-infinity fa-3x"></i>
                    <h3 class="mt-3 mb-4">Certified Supply and Manufacturing</h3>
                    <p>Each rice product undergoes a meticulous journey, adhering to the highest standards, ensuring that every aspect of our operations is synonymous with excellence.</p>
                </div>
            </div>
            <div class="col-lg-4 pe-0">
                <div class="card rounded-0 p-4 bg-light border-0">
                    <i class="text-green fa-regular fa-square-full fa-3x"></i>
                    <h3 class="mt-3 mb-4">From Fields to Worldwide</h3>
                    <p>Our journey extends far beyond the fields where our grains are nurtured. From these fields, we embark on a global expedition, delivering not just products but a promise of quality that knows no borders. </p>
                </div>
            </div>
            <div class="col-lg-4 pe-0">
                <div class="card rounded-0 p-4 bg-light border-0">
                    <i class="text-green fa-solid fa-shield-halved fa-3x"></i>
                    <h3 class="mt-3 mb-4">Procure, Store, and Export</h3>
                    <p>We procure with precision, store with care, and export with dedication, ensuring that at every stage, our products maintain the highest standards.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container my-4">
        {{-- <h2>Our Team of Experts</h2>
        <p>At JPS Global, our team of experts is the driving force, bringing taste, quality, and satisfaction to the table. </p> --}}

        <div class="row m-0 py-5">
            <div class="col-lg-12">
                <div class="card product__card p-3">
                    {{-- <img src="/front/media/images/team1.jpg" alt="" class="w-100" style="height: 300px; object-fit: cover;"> --}}
                    <div class="p-3">
                        <p>A visionary leader and driving force behind the company's success. His strategic foresight and commitment to quality have not only enhanced production standards but also established strong relationships with clients.</p>
                        <h3 class="m-0 mb-2" style="font-size: 1.2rem;">Yoginder Singh</h3>
                        <p>CMD</p>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-4 col-md-6 mb-4">
                <div class="card product__card">
                    <img src="/front/media/images/team3.jpg" alt="" class="w-100" style="height: 300px; object-fit: cover;">
                    <div class="p-3">
                        <h3 class="m-0 mb-2" style="font-size: 1.2rem;">Yuvraj Rana</h3>
                        <p>Director</p>
                        <p>His wealth of expertise in operations and management to the company. With a strong background in industrial engineering and business management, he has been instrumental in optimizing the company's production processes and enhancing efficiency.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card product__card">
                    <img src="/front/media/images/team2.jpg" alt="" class="w-100" style="height: 300px; object-fit: cover;">
                    <div class="p-3">
                        <h3 class="m-0 mb-2" style="font-size: 1.2rem;">Siddharth Singh</h3>
                        <p>Director</p>
                        <p>His keen understanding of market dynamics and consumer preferences has enabled the company to expand its global footprint and cater to diverse customer needs.</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>

@endsection