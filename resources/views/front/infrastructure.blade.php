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
                <img src="/front/media/images/jasmine-rice.jpg" alt="" class="w-100">
            </div>
            <div class="col-lg-6">
                <h2 class="mb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, asperiores?</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis, reprehenderit accusamus eum nam deleniti ratione optio. Blanditiis a temporibus quasi, laborum iste neque ipsam quis quas voluptatem. Repudiandae illum molestiae voluptas voluptatum molestias pariatur at perferendis quidem, enim reprehenderit eos vitae accusamus libero cumque, unde reiciendis qui magnam, laudantium incidunt.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis magni aut et distinctio provident esse molestiae laboriosam nesciunt quia molestias!</p>
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
        <h2 class="col-lg-8">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi tempora ducimus ab possimus facere ut nulla libero et debitis dipisci voluptatum.</h2>
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