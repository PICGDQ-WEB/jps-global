<footer class="bg-black py-5">
    <div class="container">
        <div class="row m-0">
            <div class="col-lg-3 col-md-6 my-md-3 mb-3">
                <img src="/front/media/JPS Global Logo.svg" alt="" style="height: 100px;" class="mb-3">
                <p style="font-size: 14px;" class="text-secondary text-capitalize">Opp. Radha Swami Satsang Bhawan,<br/>Village Uplana, Tehsil Assandh,<br/>Karnal, Haryana, 132039</p>
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
            <div class="col-lg-3 col-md-6 my-md-3 mb-3">
                <div class="footer__head mb-2" style="font-size: 1.2rem;">Explore</div>
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="{{route('intro')}}">About us</a>
                    </li>
                    <li>
                        <a href="{{route('media')}}">Media</a>
                    </li>
                    <li>
                        <a href="{{route('blog')}}">Blog</a>
                    </li>
                    <li>
                        <a href="/sitemap">Sitemap</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 my-md-3 mb-3">
                <div class="footer__head mb-2" style="font-size: 1.2rem;">Business</div>
                <ul>
                    <li>
                        <a href="{{route('products')}}">Our Products</a>
                    </li>
                    <li>
                        <a href="{{route('brands')}}">Our Brands</a>
                    </li>
                </ul>
                <div class="footer__head mb-2 mt-4" style="font-size: 1.2rem;">Support</div>
                <ul>
                    <li>
                        <a href="{{route('contact')}}">Contact Us</a>
                    </li>
                    <li>
                        <a href="{{route('faq')}}">FAQs</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 my-md-3 mb-3">
                <div class="footer__head mb-2" style="font-size: 1.2rem;">Subscribe to our newsletter</div>
                <form id="enquiryForm">
                    <div class="mb-3">
                        <label for="" style="font-size: 13px; color: #eee;">Your email</label>
                        <input type="email" name="email" class="input_field">
                    </div>
                    <div>
                        <button class="btn btn-warning btn-sm" type="submit"><i class="fa-solid fa-arrow-right"></i> Subscribe</button>
                    </div>
                </form>
            </div>

            <div class="col-md-12 border-top border-secondary py-3 mt-4">
                <div class="d-flex m-0 justify-content-between align-items-center">
                    <div class="p-0 text-secondary" style="font-size: 13px;">Follow us on :</div>
                    <div class="text-light">
                        <a href="#" class="px-2"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#" class="px-2"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="px-2"><i class="fa-brands fa-pinterest"></i></a>
                        <a href="#" class="px-2"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-12 border-top border-secondary pt-5">
                <div class="p-0 text-secondary text-center" style="font-size: 13px;">&copy;2023 {{env('APP_NAME')}} All rights reserved.</div>
            </div>
        </div>
    </div>
</footer>

<script>
$('#enquiryForm').on('submit', function(event) {
    event.preventDefault();
    $(this).children().find('input').prop('disabled', true);
    $(this).children().find('button').prop('disabled', true);
    $(this).children().find('button').html('Please wait');
    
    var formData = new FormData(this);
    formData.append('service_id', 'service_c34325h');
    formData.append('template_id', 'template_enquiry');
    formData.append('user_id', '_M_qN6dylc600UkEF');
 
    $.ajax('https://api.emailjs.com/api/v1.0/email/send-form', {
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false
    }).done(function() {
        alert('Your mail is sent!');
        $(this).children().find('input').prop('disabled', false);
        $(this).children().find('button').prop('disabled', false);
        $(this).children().find('button').html('Subscribe');
    }).fail(function(error) {
        alert('Oops... ' + JSON.stringify(error));
        $(this).children().find('input').prop('disabled', false);
        $(this).children().find('button').prop('disabled', false);
        $(this).children().find('button').html('Retry');
    });
});
</script>