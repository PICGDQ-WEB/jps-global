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
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, impedit?
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat blanditiis recusandae vero soluta praesentium quia minima repudiandae obcaecati ea quos adipisci quae quibusdam, porro accusamus qui eveniet! Consectetur excepturi asperiores temporibus ducimus reprehenderit, deleniti laboriosam mollitia unde aliquid modi qui odio ullam, optio adipisci possimus iusto sed obcaecati nulla iure!</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aut fuga accusantium quibusdam ullam? Nostrum, cumque nisi?
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat blanditiis recusandae vero soluta praesentium quia minima repudiandae obcaecati ea quos adipisci quae quibusdam, porro accusamus qui eveniet! Consectetur excepturi asperiores temporibus ducimus reprehenderit, deleniti laboriosam mollitia unde aliquid modi qui odio ullam, optio adipisci possimus iusto sed obcaecati nulla iure!</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, doloremque?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat blanditiis recusandae vero soluta praesentium quia minima repudiandae obcaecati ea quos adipisci quae quibusdam, porro accusamus qui eveniet! Consectetur excepturi asperiores temporibus ducimus reprehenderit, deleniti laboriosam mollitia unde aliquid modi qui odio ullam, optio adipisci possimus iusto sed obcaecati nulla iure!</div>
              </div>
            </div>
        </div>

    </div>
</section>

@endsection