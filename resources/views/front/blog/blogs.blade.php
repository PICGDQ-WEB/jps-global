@extends('front.layout')

@section('head')
    <title>Blogs | {{env('APP_NAME')}}</title>
@endsection

@section('body')

{{-- Header Top  --}}
<section>
    <div class="bg-light text-dark d-flex align-items-end" id="top__header">
        <div class="container py-5">
            <p class="text-uppercase text-secondary">Read the latest news and blogs.</p>
            <h1 style="font-weight: 900;">Our Blogs</h1>
        </div>
    </div>
</section>
{{-- End Header Top  --}}

<div class="container my-md-5 p-0">
    <div class="row m-0 py-3">
        @for ($i=1; $i<=3; $i++)
        <div class="col-lg-4 col-md-6 mb-5">
            <div class="card product__card">
                <div class="overlay">
                    <a href="{{route('post')}}">
                        <button class="btn btn-dark rounded-0"><i class="fa-regular fa-eye"></i> Read more</button>
                    </a>
                </div>
                <img src="/front/media/images/jasmine-rice.jpg" alt="" class="w-100">
                <div class="p-3">
                    <h2 style="font-size: 1.4rem;" class="mb-0">Lorem ipsum dolor sit amet consec tetur.</h2>
                    <div class="d-flex mt-2 text-secondary" style="font-size: 12px;">
                        <div><i class="fa-solid fa-globe-asia"></i></div>
                        <div class="pe-1">Published on {{date('d-m-Y')}}</div>
                    </div>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>


@endsection