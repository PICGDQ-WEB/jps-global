@extends('front.layout')

@section('head')
    <title>Our Products | {{env('APP_NAME')}}</title>
@endsection

@section('body')

{{-- Header Top  --}}
<section>
    <div class="bg-black text-light d-flex align-items-end" id="top__header">
        <div class="container py-5">
            <p class="text-uppercase text-secondary">Get your favourite and healthy rice</p>
            <h1 style="font-weight: 900;">Our Products</h1>
        </div>
    </div>
</section>
{{-- End Header Top  --}}

<section>
    <div class="container py-3 mt-3">
        <div class="d-flex align-items-center justify-content-between">
            <div style="font-size: 1.3rem; font-weight: 800;" class="text-secondary"><i class="fa-solid fa-search"></i> &nbsp;Search</div>
            <div class="col-lg-5 col-7">
                <input type="text" class="my-form-control" placeholder="Filter search" id="filterSearch" onkeyup="filterSearch()">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container px-0 py-3 mb-3 mb-md-5">
        {{-- <div class="text-secondary">Products will appear here...</div> --}}

        <div class="row m-0" id="products">
            @for($i=1; $i<=3; $i++)
            <div class="col-lg-3 col-md-6 col-6 mb-3 mb-md-4">
                <div class="card p-0 product__card">
                    <div class="overlay">
                        <a href="{{route('product')}}">
                            <button class="btn btn-success px-3 py-2 rounded-0"><i class="fa-regular fa-eye"></i> View Product</button>
                        </a>
                    </div>
                    <img src="/front/media/products/product.jpg" alt="" class="w-100">
                    <div class="d-flex align-items-center justify-content-between" style="font-size: 13px;">
                        <span class="p-3">Basmati Rice</span>
                        <div class="ps-3 text-success" style="font-weight: 800;">
                            <i class="fa-regular fa-star-half-stroke"></i> 4.5
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 mb-3 mb-md-4">
                <div class="card p-0 product__card">
                    <div class="overlay">
                        <a href="{{route('product')}}">
                            <button class="btn btn-success px-3 py-2 rounded-0"><i class="fa-regular fa-eye"></i> View Product</button>
                        </a>
                    </div>
                    <img src="/front/media/products/product.jpg" alt="" class="w-100">
                    <div class="d-flex align-items-center justify-content-between" style="font-size: 13px;">
                        <span class="p-3">Local Rice</span>
                        <div class="ps-3 text-success" style="font-weight: 800;">
                            <i class="fa-regular fa-star-half-stroke"></i> 4.5
                        </div>
                    </div>
                </div>
            </div>
            @endfor
            <div class="text-secondary" id="noResultFound" style="display: none;">Oops! No matching results found.</div>
        </div>

    </div>
</section>

@endsection

@section('foot')
<script src="/front/js/filter.js"></script>
@endsection