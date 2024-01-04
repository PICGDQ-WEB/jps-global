@extends('front.layout')

@section('head')
    <title>Contact Us | {{env('APP_NAME')}}</title>
@endsection

@section('body')

{{-- Header Top  --}}
<section>
    <div class="bg-black text-light d-flex align-items-end" id="top__header">
        <div class="container py-5">
            <p class="text-uppercase text-secondary">Contact Us</p>
            <h1 style="font-weight: 900;">Let's Work Together</h1>
        </div>
    </div>
</section>
{{-- End Header Top  --}}

<section>
    <div class="container my-5 py-md-5">
        <div class="row m-0">
            <div class="col-lg-6 pe-0 mb-4">
                <p class="text-uppercase text-secondary" style="font-size: 13px !important;">Contact Us</p>
                <h2>Get In Touch</h2>
                <p class="mt-4">Have a question or a comment? Feel free to get in touch with us.</p>

                <div class="pt-4">
                    <p>Opp. Radha Swami Satsang Bhawan,<br/>Village Uplana, Tehsil Assandh,<br/>Karnal, Haryana, 132039</p>
                    <p style="font-size: 14px;" class="text-secondary mb-1">
                        <a href="tel:+917419555559">(+91) 7419-555-559</a>
                    </p>
                    <p style="font-size: 14px;" class="text-secondary">
                        <a href="tel:+919873588808">(+91) 9873-588-808</a>
                    </p>
                    <p style="font-size: 14px;" class="text-secondary">
                        <a href="mailto:enquiry@jpsglobalrice.com">enquiry@jpsglobalrice.com</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-6 pe-0">
                <form actionUrl="" method="post" class="row m-0">
                    @csrf
                    <div class="col-md-6 mb-3">
                        <label for="" class="my-label">Your name</label>
                        <input type="text" class="my-form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="" class="my-label">Company</label>
                        <input type="text" class="my-form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="" class="my-label">Contact Phone/Mobile</label>
                        <input type="text" class="my-form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="" class="my-label">Email Address</label>
                        <input type="text" class="my-form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="" class="my-label">Message</label>
                        <textarea name="" id="" rows="7" class="my-form-control" style="resize: none;"></textarea>
                    </div>
                    <div>
                        <button class="btn btn-success rounded-3 px-4 py-3">Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection