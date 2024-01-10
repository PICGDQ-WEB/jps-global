@extends('front.layout')

@section('head')
    <title>Infrastructure | {{env('APP_NAME')}}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" type="text/css" media="screen" />
@endsection

@section('body')

{{-- Header Top  --}}
<section>
    <div class="bg-light text-dark d-flex align-items-end" id="top__header">
        <div class="container py-5">
            <p class="text-uppercase text-secondary">You are most welcome in our infra</p>
            <h1 style="font-weight: 900;">Infrastructure</h1>
        </div>
    </div>
</section>
{{-- End Header Top  --}}

<section>
    <div class="container py-4 mt-md-4 mb-md-3 py-md-5 px-0">
        <div class="row m-0">
            <div class="col-lg-6 mb-3">
                <img src="/front/media/images/rice-variety.jpeg" alt="" class="w-100">
            </div>
            <div class="col-lg-6">
                <h2 class="mb-3">Top-notch Quality Every Step of the Way</h2>
                <p>In our quest to provide you with the best rice experience, we focus on efficiency and quality in every detail. From our updated storage and distribution centers to our smart packaging solutions, each step is tailored to make sure that you taste the difference.</p>
                <p>It's our promise to bring you not just rice but a culinary journey marked by freshness, superior quality, and the convenience you deserve.</p>
                <div class="mt-4 pt-2">
                    <a href="{{route('contact')}}">
                        <button class="btn btn-success px-4 py-3 rounded-0">Contact Us</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <img src="/front/media/images/aboutus.jpg" alt="" style="width: 100%; object-fit: cover; object-position: bottom;" id="infraImage">
</section>

<section>
    <div class="container py-5">
        <h2 class="col-lg-12">A Benchmark for Quality in India's Rice Production and Trading Sector</h2>
        <div class="pt-5">
            @php
            $location = '/front/media/infra';
            $path = public_path($location);
            $files = preg_grep('~\.(jpeg|jpg|png)$~', scandir($path));
            @endphp
            <div class="row m-0 gallery">
                @foreach ($files as $file)
                    <div class="col-6 col-lg-6 col-md-6 pb-3">
                        <a href="{{$location}}/{{$file}}" data-fancybox="gallery">
                            <img src="{{$location}}/{{$file}}" alt="" id="creativeBanner">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection

@section('foot')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script>
    $(document).ready(function() {
    $(".gallery .col-4 a").fancybox();
    });
</script>
@endsection