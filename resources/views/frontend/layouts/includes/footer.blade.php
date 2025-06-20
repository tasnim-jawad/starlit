<footer class="ltn__footer-area footer_background_color">
   <div class="container">
    <div class="footer-top-area  section-bg-2 plr--5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-about-widget">
                        <div class="footer-logo">
                            <div class="site-logo">
                                <img class="invert" src=" {{ asset('assets/frontend') }}/img/cropped-Starlit-logo.png" alt="Logo">
                            </div>
                        </div>
                        <p>Leave us a note and we will get back to you for a free consultation</p>
                        <div class="footer-address">
                            <ul>
                                <li>
                                    <div class="footer-address-icon">
                                        <i class="icon-placeholder"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p>House- 413, Road- 7, Avenue- 3, Mirpur DOHS, Dhaka-1216.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-address-icon">
                                        <i class="icon-call"></i>
                                    </div>
                                    <div class="footer-address">
                                        <p><a class="text-white" href="tel:+88 01978 800 842">+88 01978 800 842</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-address-icon">
                                        <i class="icon-mail"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p><a class="text-white " href="mailto:starlithomesltd@gmail.com">starlithomesltd@gmail.com</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="ltn__social-media mt-20">
                            <ul>
                                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-menu-widget clearfix">
                        <h4 class="footer-title">Company</h4>
                        <div class="footer-menu text-wh">
                            <ul>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('news') }}">Blog</a></li>
                                <li><a href="{{ route('properties') }}">Properties</a></li>
                                <li><a href="{{ route('about') }}">Locations Map</a></li>
                                <li><a href="{{ route('about') }}">FAQ</a></li>
                                <li><a href="{{ route('contact') }}">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-menu-widget clearfix">
                        <h4 class="footer-title">Services</h4>
                        <div class="footer-menu text-wh">
                            <ul>
                                <li><a href="javascript:void(0)">Order tracking</a></li>
                                <li><a href="javascript:void(0)">Wish List</a></li>
                                <li><a href="javascript:void(0)">Login</a></li>
                                <li><a href="javascript:void(0)">My account</a></li>
                                <li><a href="javascript:void(0)">Terms & Conditions</a></li>
                                <li><a href="javascript:void(0)">Promotional Offers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-menu-widget clearfix">
                        <h4 class="footer-title">Customer Care</h4>
                        <div class="footer-menu text-wh">
                            <ul>
                                <li><a href="/login">Login</a></li>
                                <li><a href="javascript:void(0)">My account</a></li>
                                <li><a href="javascript:void(0)">Wish List</a></li>
                                <li><a href="javascript:void(0)">Order tracking</a></li>
                                <li><a href="javascript:void(0)">FAQ</a></li>
                                <li><a href="javascript:void(0)">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                    <div class="footer-widget footer-newsletter-widget">
                        <h4 class="footer-title">Newsletter</h4>
                        <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                        <div class="footer-newsletter">
                            <form id="newsletter-form">
                                <input id="newsletter-email" type="email" name="email" placeholder="Email*">
                                <small id="newsletter-error" style="color: red;"></small> <!-- Display validation error -->
                                <div class="btn-wrapper">
                                    <button class="theme-btn-1" type="submit"><i class="fa-solid fa-location-arrow"></i></button>
                                </div>
                            </form>
                        </div>
                        <h5 class="mt-30">We Accept</h5>
                        <img src="{{ asset('assets/frontend') }}/img/icons/payment-4.png" alt="Payment Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ltn__copyright-area ltn__copyright-2 section-bg-7  plr--5">
        <div class="container-fluid ltn__border-top-2">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="ltn__copyright-design clearfix">
                        <p>All Rights Reserved @ Tech Park IT <span class="current-year"></span></p>
                    </div>
                </div>
                <div class="col-md-6 col-12 align-self-center">
                    <div class="ltn__copyright-menu text-end text-wh">
                        <ul>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Claim</a></li>
                            <li><a href="#">Privacy & Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
</footer>

@push('js_start')
<script>
    async function onSubmitNewsletter(e) {
        e.preventDefault();
        const email = document.getElementById('newsletter-email').value;
        const form = document.getElementById('newsletter-form');
        const errorDiv = document.getElementById('newsletter-error');
        errorDiv.innerText = ""; // Clear previous errors

        try {
            const response = await fetch('/api/v1/newsletters/store', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({ email })
            });

            const data = await response.json();

            if (response.ok) {
                alert("Subscribed  successfully!");
                form.reset();
            } else if (response.status === 422) {
                // Laravel validation errors
                if (data.errors && data.errors.email) {
                    errorDiv.innerText = data.errors.email[0];
                } else {
                    errorDiv.innerText = data.message || "Validation error.";
                }
            } else {
                alert(data.message || "Something went wrong.");
            }
        } catch (err) {
            console.error(err);
            alert("Network or server error.");
        }
    }

    document.getElementById('newsletter-form').addEventListener('submit', onSubmitNewsletter);
</script>
@endpush