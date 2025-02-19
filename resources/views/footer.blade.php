 <footer>
     <div id="footer" class="footer-main-block">
         <div class="container">
             <div class="row">
                 <div class="col-lg-4 col-md-4">
                     <div class="footer-block">
                         <div class="footer-logo">
                             <a href="/" title="">
                                 <img src="assets/images/logo/logo.png" class="img-fluid" alt=""
                                     style="max-width: 40%; height: auto;">
                             </a>
                         </div>
                         <div class="footer-dtls">
                             <p>Magic Sofa Cover – Elevate Your Home with Comfort & Style. Premium-quality home
                                 essentials, reliable service, and affordable elegance in every order.</p>
                         </div>

                         <ul class="footer-social-icons">
                             <li><a href="#" title=""><i class="flaticon-facebook"></i></a></li>
                             <li><a href="#" title=""><i class="flaticon-twitter"></i></a></li>
                             <li><a href="#" title=""></a><i class="flaticon-linkedin"></i></li>
                             <li><a href="#" title=""><i class="flaticon-pinterest"></i></a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-lg-8 col-md-8">
                     <div class="row">
                         <div class="col-lg-4 col-md-4">
                             <div class="footer-widget">
                                 <h3 class="footer-widget-heading">Useful Links</h3>
                                 <ul class="footer-menu">
                                     <li><a href="/about" title="">About Us</a></li>
                                     <li><a href="/shop" title="">Shop</a></li>
                                     <li><a href="/contact" title="">Talk to Us</a></li>
                                     <li><a href="/faqs" title="">Faqs</a></li>

                                 </ul>
                             </div>
                         </div>

                         <div class="col-lg-4 col-md-4">
                             <div class="footer-widget">
                                 <h3 class="footer-widget-heading">Quick Links</h3>
                                 <ul class="footer-menu">
                                     @auth
                                         <li><a href="{{ route('dashboard') }}" title="">Dashboard</a></li>
                                     @else
                                         <li><a href="{{ route('login') }}" title="">Login</a></li>
                                         <li><a href="{{ route('register') }}" title="">Register</a></li>
                                     @endauth
                                     <li><a href="{{ route('policy') }}" title="">Terms and Conditions</a></li>
                                 </ul>
                             </div>
                         </div>

                         <div class="col-lg-4 col-md-4">
                             <div class="footer-widget">
                                 <h3 class="footer-widget-heading">Contact</h3>
                                 <ul class="footer-menu">
                                     <li><a href="tel:+254 707 518787" title="">+254 707 518787</a></li>
                                     <li><a href="" title=""><span class="__cf_email__"
                                                 data-cfemail="">cmoraa19@gmail.com</span></a>
                                     </li>
                                     <li>Royal Palm Mall AM15 first floor , Wing A
                                         Along Ronald Ngala street Nairobi,Kenya
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="tiny-footer-block">
         <div class="container">
             <div class="row">
                 <div class="col-lg-6 col-md-6">
                     <div class="footer-coyright">© <?php echo date('Y'); ?> {{ config('app.name') }} | All Rights Reserved.
                         Designed and Developed by <a href="https://jrmhd.tech/" target="_blank">Jrmhd Technologies</a>
                     </div>
                 </div>
                 <div class="col-lg-6 col-md-6">
                     <ul class="tiny-footer-menu">
                         <li><a href="/faqs" title="">Terms & Conditions</a></li>
                         <li><a href="/policy" title="">Privacy Policy</a></li>
                         <li><a href="/contact" title="">Contact Us</a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </footer>
