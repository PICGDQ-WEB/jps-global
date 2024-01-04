@extends('front.layout')

@section('head')
    <title>About Us | {{env('APP_NAME')}}</title>
@endsection

@section('body')

{{-- Header Top  --}}
<section>
    <div class="bg-black text-light d-flex align-items-end" id="top__header">
        <div class="container py-5">
            <h1 style="font-weight: 900;">Sustainable, Transparent, Safe</h1>
            <p class="text-uppercase text-secondary">WE AIM TO BE THE DISRUPTOR IN BREAKING BARRIERS USING TECHNOLOGY TO CONNECT GROWERS TO CONSUMERS.</p>
        </div>
    </div>
</section>
{{-- End Header Top  --}}


<section class="">
    <div class="container my-5 py-md-5">
        <div class="row m-0">
            <div class="col-lg-6 mb-3">
                <h2>About {{env('APP_NAME')}}</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus maiores excepturi provident perspiciatis. Qui accusamus sapiente quia corrupti explicabo veritatis fugit voluptates sit porro commodi. Itaque ab voluptates blanditiis! Nesciunt?</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. <a href="#">Odit nulla vel amet eum, assumenda itaque?</a></p>

                <div class="row m-0 mb-3">
                    <div class="col-lg-6 col-6 mb-3">
                        <div class="counterNumber">2015</div>
                        <div class="counterDesc text-capitalize">Founded</div>
                    </div>
                    <div class="col-lg-6 col-6 mb-3">
                        <div class="counterNumber">79+</div>
                        <div class="counterDesc text-capitalize">Cities</div>
                    </div>
                    <div class="col-lg-6 col-6 mb-3">
                        <div class="counterNumber">9200+</div>
                        <div class="counterDesc text-capitalize">Orders</div>
                    </div>
                    <div class="col-lg-6 col-6 mb-3">
                        <div class="counterNumber">7200+</div>
                        <div class="counterDesc text-capitalize">Acres</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <img src="/front/media/images/aboutus.jpg" alt="" class="w-100">
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-5">
    <div class="container my-4">
        <h2 class="col-lg-6" style="line-height: 45px !important;">We are a growing team who is passionate about bringing sustainable products to the market!</h2>
        <div class="row m-0 my-md-5">
            <div class="col-lg-4 pe-0">
                <div class="card rounded-0 p-4 bg-light border-0">
                    <i class="text-green fa-solid fa-infinity fa-3x"></i>
                    <h3 class="mt-3 mb-4">Sustainable</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, neque illum tenetur voluptatem unde soluta necessitatibus. Quaerat animi corrupti ullam consequatur quia architecto enim corporis laudantium vel quis voluptatum eos quasi dignissimos autem iure sint minima eius obcaecati, nobis assumenda?</p>
                </div>
            </div>
            <div class="col-lg-4 pe-0">
                <div class="card rounded-0 p-4 bg-light border-0">
                    <i class="text-green fa-regular fa-square-full fa-3x"></i>
                    <h3 class="mt-3 mb-4">Transparent</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, neque illum tenetur voluptatem unde soluta necessitatibus. Quaerat animi corrupti ullam consequatur quia architecto enim corporis laudantium vel quis voluptatum eos quasi dignissimos autem iure sint minima eius obcaecati, nobis assumenda?</p>
                </div>
            </div>
            <div class="col-lg-4 pe-0">
                <div class="card rounded-0 p-4 bg-light border-0">
                    <i class="text-green fa-solid fa-shield-halved fa-3x"></i>
                    <h3 class="mt-3 mb-4">Safe & Secure</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, neque illum tenetur voluptatem unde soluta necessitatibus. Quaerat animi corrupti ullam consequatur quia architecto enim corporis laudantium vel quis voluptatum eos quasi dignissimos autem iure sint minima eius obcaecati, nobis assumenda?</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container my-4">
        <h2>Our Team</h2>
        <p>Meet our incredible team – we would love to meet you!</p>

        <div class="row m-0 py-5">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card product__card">
                    <img src="/front/media/images/team1.jpg" alt="" class="w-100" style="height: 300px; object-fit: cover;">
                    <div class="p-3">
                        <h3 class="m-0 mb-2" style="font-size: 1.2rem;">Anurag Pandey</h3>
                        <p>My Designation</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut delectus alias magni libero, aperiam ratione expedita, voluptates cumque maxime animi fuga perferendis sequi cupiditate eum possimus qui sint!</p>
                        <div>
                            <a href="#" class="pe-1"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#" class="pe-1"><i class="fa-solid fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card product__card">
                    <img src="/front/media/images/team3.jpg" alt="" class="w-100" style="height: 300px; object-fit: cover;">
                    <div class="p-3">
                        <h3 class="m-0 mb-2" style="font-size: 1.2rem;">Vidya Venkatesh</h3>
                        <p>My Designation</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut delectus alias magni libero, aperiam ratione expedita, voluptates cumque maxime animi fuga perferendis sequi cupiditate eum possimus qui sint!</p>
                        <div>
                            <a href="#" class="pe-1"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#" class="pe-1"><i class="fa-solid fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card product__card">
                    <img src="/front/media/images/team2.jpg" alt="" class="w-100" style="height: 300px; object-fit: cover;">
                    <div class="p-3">
                        <h3 class="m-0 mb-2" style="font-size: 1.2rem;">Kamal Kotil</h3>
                        <p>My Designation</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut delectus alias magni libero, aperiam ratione expedita, voluptates cumque maxime animi fuga perferendis sequi cupiditate eum possimus qui sint!</p>
                        <div>
                            <a href="#" class="pe-1"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#" class="pe-1"><i class="fa-solid fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection