@extends('front.layout')

@section('head')
    <title>FAQs | {{env('APP_NAME')}}</title>
    <style>
        .accordion-button::after
        {
            display: none;
        }
    </style>
@endsection

@section('body')

{{-- Header Top  --}}
<section>
    <div class="bg-light text-dark d-flex align-items-end" id="top__header">
        <div class="container py-5">
            <p class="text-uppercase text-secondary">Help and support</p>
            <h1 style="font-weight: 900;">FAQs</h1>
        </div>
    </div>
</section>
{{-- End Header Top  --}}

<section>
    <div class="container my-5">

        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  <i class="fa-solid fa-check ps-3"></i>What varieties of rice does JPS Global offer?
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">JPS Global takes pride in presenting a diverse range of rice varieties with a special focus on the aromatic and premium Basmati rice. From traditional Basmati to unique blends, our rice selection caters to a wide range of culinary preferences, ensuring a delightful experience for every taste.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  <i class="fa-solid fa-check ps-3"></i>Where is JPS Global from, and where are its rice fields located?
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">JPS Global originates from Karnal, Haryana, and cultivates its rice in the fertile fields of this region. Our commitment to quality and authenticity begins right here in the heart of Karnal, ensuring that every grain mirrors the essence of this renowned agricultural hub.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  <i class="fa-solid fa-check ps-3"></i>How does JPS Global ensure the quality of its rice?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">JPS Global employs stringent quality control measures to guarantee that only the highest-quality rice reaches our consumers. From careful cultivation in the fields to state-of-the-art processing in our milling plants, we uphold the highest standards to ensure an unparalleled rice experience for our customers.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                  <i class="fa-solid fa-check ps-3"></i>Does it have global export services?
                </button>
              </h2>
              <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Our commitment extends globally, with JPS Global actively engaging in global export services to share the excellence of our rice with discerning consumers worldwide.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                  <i class="fa-solid fa-check ps-3"></i>What sustainable practices do you follow?
                </button>
              </h2>
              <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">JPS Global prioritizes sustainable rice production. Embracing eco-friendly methods, we focus on water conservation, organic farming, and energy-efficient milling.</div>
              </div>
            </div>
        </div>

    </div>
</section>

@endsection