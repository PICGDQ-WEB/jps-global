@extends('front.layout')

@section('head')
    <title>My Post Title | {{env('APP_NAME')}}</title>
@endsection

@section('body')

{{-- Header Top  --}}
<section>
    <div class="bg-light text-dark d-flex align-items-end" id="top__header">
        <div class="container py-5">
            <p class="text-uppercase text-secondary"><i class="fa-solid fa-globe-asia"></i> Published on {{date('d M, Y', strtotime($post->post_added))}}</p>
            <h1 style="font-weight: 900;" class="text-capitalize">{{$post->post_title}}</h1>
        </div>
    </div>
</section>
{{-- End Header Top  --}}

<div class="container my-5" id="post__page">
    
    <div class="row m-0">

        <div class="col-lg-8 mb-4">
            <img src="/assets/images/blogs/{{$post->post_featured}}" alt="" class="w-100 rounded-4 mb-4">
            {!! $post->post_desc !!}
        </div>
        <div class="col-lg-4">
            <div style="position: sticky !important; top: 120px;">
                <h2 class="mb-4">Other Blogs</h2>
                @php
                    $recent = DB::table('posts')
                                ->orderBy('id', 'DESC')
                                ->limit(6)
                                ->get();
                @endphp
                @foreach ($recent as $item)
                <div class="row m-0 mb-4">
                    <div class="col-md-3 p-0">
                        <img src="/assets/images/blogs/{{$item->post_featured}}" alt="" class="w-100 rounded-2">
                    </div>
                    <div class="col-md-9 mt-3 pe-lg-2 pe-0">
                        <div class="m-0">
                            <a href="{{route('post', ['slug'=>$item->post_url])}}" class="text-capitalize">{{$item->post_title}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>

</div>


@endsection