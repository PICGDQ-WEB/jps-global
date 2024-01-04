@extends('front.layout')

@section('head')
    <title>My Post Title | {{env('APP_NAME')}}</title>
@endsection

@section('body')

{{-- Header Top  --}}
<section>
    <div class="bg-light text-dark d-flex align-items-end" id="top__header">
        <div class="container py-5">
            <p class="text-uppercase text-secondary"><i class="fa-solid fa-globe-asia"></i> Published on {{date('d M, Y')}}</p>
            <h1 style="font-weight: 900;">My Post Title</h1>
        </div>
    </div>
</section>
{{-- End Header Top  --}}

<div class="container my-5" id="post__page">
    
    <div class="row m-0">

        <div class="col-lg-8 mb-4">
            <img src="/front/media/images/jasmine-rice.jpg" alt="" class="w-100 rounded-4 mb-4">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt facere vel, hic veritatis cum ducimus eos rem amet deserunt consectetur impedit saepe iste nam obcaecati blanditiis dolore nesciunt ex natus soluta cupiditate, corporis iusto iure. Vitae aliquam, nam ab doloremque pariatur deleniti officia, numquam consectetur cupiditate asperiores quo error porro.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo pariatur suscipit molestiae quos aspernatur esse deleniti, inventore ipsa repellat minima facilis adipisci perferendis dolorem. Quod, minima tempora consectetur natus sunt assumenda. Deserunt id labore doloremque omnis quas amet. Facere quas quis repudiandae, quae, quos nostrum modi culpa reiciendis repellendus quisquam laborum aperiam? Reiciendis illo eaque modi vitae dicta ea? Voluptas dicta beatae atque in necessitatibus voluptate deserunt porro officiis velit voluptatem magnam, doloribus tempora. Maxime sunt voluptate unde accusamus dolores, delectus facilis ratione recusandae magnam velit nihil doloremque eveniet impedit placeat at excepturi error, magni voluptatem debitis. Mollitia, in sed?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt facere vel, hic veritatis cum ducimus eos rem amet deserunt consectetur impedit saepe iste nam obcaecati blanditiis dolore nesciunt ex natus soluta cupiditate, corporis iusto iure. Vitae aliquam, nam ab doloremque pariatur deleniti officia, numquam consectetur cupiditate asperiores quo error porro.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt facere vel, hic veritatis cum ducimus eos rem amet deserunt consectetur impedit saepe iste nam obcaecati blanditiis dolore nesciunt ex natus soluta cupiditate, corporis iusto iure. Vitae aliquam, nam ab doloremque pariatur deleniti officia, numquam consectetur cupiditate asperiores quo error porro.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt facere vel, hic veritatis cum ducimus eos rem amet deserunt consectetur impedit saepe iste nam obcaecati blanditiis dolore nesciunt ex natus soluta cupiditate, corporis iusto iure. Vitae aliquam, nam ab doloremque pariatur deleniti officia, numquam consectetur cupiditate asperiores quo error porro.</p>
        </div>
        <div class="col-lg-4">
            <div style="position: sticky !important; top: 120px;">
                <h2 class="mb-4">Other Blogs</h2>
                <div class="row m-0 mb-4">
                    <div class="col-md-3 p-0">
                        <img src="/front/media/images/jasmine-rice.jpg" alt="" class="w-100 rounded-2">
                    </div>
                    <div class="col-md-9 mt-3 pe-lg-2 pe-0">
                        <div class="m-0">
                            <a href="{{route('post')}}">Lorem ipsum dolor sit amet consectetur.</a>
                        </div>
                    </div>
                </div>
                <div class="row m-0 mb-4">
                    <div class="col-md-3 p-0">
                        <img src="/front/media/images/jasmine-rice.jpg" alt="" class="w-100 rounded-2">
                    </div>
                    <div class="col-md-9 mt-3 pe-lg-2 pe-0">
                        <div class="m-0">
                            <a href="{{route('post')}}">Lorem ipsum dolor sit amet consectetur.</a>
                        </div>
                    </div>
                </div>
                <div class="row m-0 mb-4">
                    <div class="col-md-3 p-0">
                        <img src="/front/media/images/jasmine-rice.jpg" alt="" class="w-100 rounded-2">
                    </div>
                    <div class="col-md-9 mt-3 pe-lg-2 pe-0">
                        <div class="m-0">
                            <a href="{{route('post')}}">Lorem ipsum dolor sit amet consectetur.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>


@endsection