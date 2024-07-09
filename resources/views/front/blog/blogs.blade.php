@extends('front.layout')

@section('head')
    <title>Blogs | {{env('APP_NAME')}}</title>
@endsection

@section('body')

{{-- Header Top  --}}
<section>
    <div class="bg-dark text-light d-flex align-items-end" id="top__header">
        <div class="container py-5">
            <p class="text-uppercase text-secondary">Read the latest news and blogs.</p>
            <h1 style="font-weight: 900;">Our Blogs</h1>
        </div>
    </div>
</section>
{{-- End Header Top  --}}

<div class="container my-md-5 p-0">
    <div class="row m-0 py-3">
        @foreach ($posts as $item)
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="card product__card">
                    <img src="/assets/images/blogs/{{$item->post_featured}}" alt="" class="w-100">
                    <div class="p-3">
                        <a href="{{route('post', ['slug'=>$item->post_url])}}" class="stretched-link">
                            <h2 style="font-size: 1.4rem;" class="mb-0">{{$item->post_title}}</h2>
                        </a>
                        <div class="d-flex mt-2 text-secondary" style="font-size: 12px;">
                            <div><i class="fa-solid fa-globe-asia"></i></div>
                            <div class="pe-1">Published on {{date('d-m-Y', strtotime($item->post_added))}}</div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection