@extends('front.layout')

@section('head')
    <title>Sitemap | {{env('APP_NAME')}}</title>
@endsection

@section('body')

{{-- Header Top  --}}
<section>
    <div class="bg-black text-light" style="min-height: 80vh;">
        <div class="container" style="padding-top: 130px;">

            <div class="row m-0" id="sitemap__cont">
                <div class="col-lg-4 mb-5">
                    <h1 style="font-weight: 900;">Sitemap</h1>
                    <p class="text-uppercase text-secondary">Explore our complete website from one place</p>
                    <img src="/front/media/images/route.jpg" alt="" style="height: 260px; width: 100%; object-fit: cover;">
                </div>
                <div class="col-lg-8">
                    <div class="row m-0">
                        <div class="col-md-6 mb-4">
                            <h2>Explore</h2>
                            <ul>
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <a href="/">About us</a>
                                </li>
                                <li>
                                    <a href="/">Infrastructure</a>
                                </li>
                                <li>
                                    <a href="/">Media</a>
                                </li>
                                <li>
                                    <a href="/">Blog</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 mb-4">
                            <h2>Business</h2>
                            <ul>
                                <li>
                                    <a href="/">Our brands</a>
                                </li>
                                <li>
                                    <a href="/">Our products</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 mb-4">
                            <h2>Policy</h2>
                            <ul>
                                <li>
                                    <a href="/">Terms and conditions</a>
                                </li>
                                <li>
                                    <a href="/">Privacy policy</a>
                                </li>
                                <li>
                                    <a href="/">Refund policy</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 mb-4">
                            <h2>Help & Support</h2>
                            <ul>
                                <li>
                                    <a href="/">Faq's</a>
                                </li>
                                <li>
                                    <a href="/">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
{{-- End Header Top  --}}

@endsection