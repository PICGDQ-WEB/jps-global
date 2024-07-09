@extends('front.layout')

@section('head')
    <title>Media & Gallery | {{env('APP_NAME')}}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" type="text/css" media="screen" />
@endsection

@section('body')

{{-- Header Top  --}}
<section>
    <div class="bg-dark text-light d-flex align-items-end" id="top__header">
        <div class="container py-5">
            <p class="text-uppercase text-secondary">Our Gallery</p>
            <h1 style="font-weight: 900;">Media & Gallery</h1>
        </div>
    </div>
</section>
{{-- End Header Top  --}}

<section>
    <div class="container py-md-5 mt-5 mb-4">
        @php
            $location = '/front/media/og';
            $path = public_path($location);
            $files = preg_grep('~\.(jpeg|jpg|png)$~', scandir($path));
            @endphp
        <div class="row m-0 gallery">
            @foreach ($files as $file)
                <div class="col-6 col-lg-3 col-md-6 pb-3">
                    <a href="{{$location}}/{{$file}}" data-fancybox="gallery">
                        <img src="{{$location}}/{{$file}}" alt="" id="creativeBanner">
                    </a>
                </div>
            @endforeach
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