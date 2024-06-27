@extends('front.layout')

@section('head')
    <title>Our Products | {{env('APP_NAME')}}</title>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
    />
@endsection

@section('body')

{{-- Header Top  --}}
<section>
    <div class="bg-light text-dark d-flex align-items-end" id="top__header">
        <div class="container py-5">
            <p class="text-uppercase text-secondary">Get your favourite and healthy rice</p>
            <h1 style="font-weight: 900;">Our Products</h1>
        </div>
    </div>
</section>
{{-- End Header Top  --}}

<section>
    <div class="container py-3 mt-3">
        <div class="d-lg-flex align-items-center justify-content-between">
            <div style="font-size: 1.3rem; font-weight: 800;" class="text-secondary mb-3"><i class="fa-solid fa-shop"></i> &nbsp;Products ({{$products->count()}})</div>
            {{-- <div class="col-lg-5 col-12">
                <input type="text" class="my-form-control" placeholder="Filter search" id="filterSearch" onkeyup="filterSearch()">
            </div> --}}
        </div>
    </div>
</section>

<section>
    <div class="container px-0 py-3 mb-3 mb-md-5">
        {{-- <div class="text-secondary">Products will appear here...</div> --}}

        <div class="row m-0">
            <div class="col-md-3 mb-4 px-4">
                @include('front.products.filters')
            </div>
            <div class="col-md-9">
                <div class="row m-0" id="products">
                    @foreach($products as $product)
                    <div class="col-lg-4 col-md-6 col-6 mb-3 mb-md-4">
                        <div class="card p-0 product__card">
                            <a href="{{$product->product_images}}" data-fancybox="gallery" data-caption="{{$product->product_title}}">
                                <img src="{{$product->product_images}}" class="w-100" style="height: 200px; object-fit: cover;" />
                            </a>
                            <div class="p-3" style="font-size: 13px;">
                                <div class="badge text-bg-info mb-2">{{$product->folder}}</div>
                                <div class="badge text-bg-success mb-2">{{$product->product_category}}</div>
                                <div style="font-size: 0.9rem;">{{$product->product_title}}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="text-secondary" id="noResultFound" style="display: none;">Oops! No matching results found.</div>
                </div>
            </div>
        </div>


    </div>
</section>

@endsection

@section('foot')
<script src="/front/js/filter.js"></script>
<script>
    Fancybox.bind("[data-fancybox]", {
    // Your custom options
    });
</script>
@endsection