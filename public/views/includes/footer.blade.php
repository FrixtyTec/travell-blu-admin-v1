 <footer class="tm-container-outer">
     <p class="mb-0">Copyright © <span class="tm-current-year">2022</span> Travell Blu . Designed by <a
             rel="nofollow" href="javascript:void(0)" target="_parent">Frixty Tech</a></p>
 </footer>
 </div>
 </div>
 <!-- .main-content -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form id="Login" class="form" action="">
                     <div class="form-group">
                         <label for="message-text" class="col-form-label">First Name:</label>
                         <input type="text" class="form-control" id="recipient-first-name"
                             name="recipient-first-name">
                     </div>
                     <div class="form-group">
                         <label for="message-text" class="col-form-label">Last Name:</label>
                         <input type="text" class="form-control" id="recipient-first-name" name="recipient-last-name">
                     </div>
                     <div class="form-group">
                         <label for="message-text" class="col-form-label">Mobile Number:</label>
                         <input type="number" class="form-control" id="recipient-mobile">
                     </div>
                     <div class="form-group">
                         <label for="recipient-name" class="col-form-label">Email:</label>
                         <input type="text" class="form-control" id="register-email" name="register-email" readonly />
                     </div>

                     <div class="form-group">
                         <label for="message-text" class="col-form-label">Full Address:</label>
                         <textarea type="text" class="form-control" id="recipient-address" name="recipient-address"></textarea>
                     </div>
                     <div class="form-group">
                         <label for="message-text" class="col-form-label">Password:</label>
                         <input type="password" class="form-control" id="recipient-password"
                             name="recipient-password">
                     </div>
                     <div class="form-group">
                         <label for="message-text" class="col-form-label">Confirm Password:</label>
                         <input type="password" class="form-control" id="recipient-confirm-password"
                             name="recipient-confirm-password">
                     </div>
                 </form>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <button type="button" class="btn btn-primary">Send message</button>
             </div>
         </div>
     </div>
 </div>


 <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModal" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">

             <form id="registerForm" class="form" action="">
                 <div class="modal-header">
                     <div class="tab-list"
                         style="padding: 7px 14px;border: 1px solid #8686ff;width: 100%;border-radius: 15px;/*! box-shadow: -10px 15px 70px -20px rgba(3,3,3,0.75); *//*! -webkit-box-shadow: -10px 15px 70px -20px rgba(3,3,3,0.75); */-moz-box-shadow: -10px 15px 70px -20px rgba(3,3,3,0.75);">
                         <div class="col-md-12">
                             <div class="row">
                                 <div class="col-md-6 btn btn-secondary personal-account btn-customer-custom brdr-15"
                                     onclick="changeTab('home')">Personal Account</div>
                                 <div class="col-md-6 btn partner-account brdr-15" onclick="changeTab('profile')">
                                     Partner Account</div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="modal-body">
                     <div class="home" id="home">
                         <h6>Login/Signup</h6>
                         <hr />
                         <div class="form-group">
                             <label for="email" class="col-form-label">Email / Mobile Number:</label>
                             <input type="email" class="form-control" id="email" name="email">
                         </div>

                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Login</button>
                 </div>
             </form>
         </div>
     </div>
 </div>
 <!-- load JS files -->
 <script src="{{ asset('front/js/jquery-1.11.3.min.js') }}"></script>
 <!-- jQuery (https://jquery.com/download/) -->
 <script src="{{ asset('front/js/popper.min.js') }}"></script>
 <!-- https://popper.js.org/ -->
 <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
 <!-- https://getbootstrap.com/ -->
 <script src="{{ asset('front/js/datepicker.min.js') }}"></script>
 <!-- https://github.com/qodesmith/datepicker -->
 <script src="{{ asset('front/js/jquery.singlePageNav.min.js') }}"></script>
 <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
 <script src="{{ asset('front/slick/slick.min.js')}}"></script>
 <!-- http://kenwheeler.github.io/slick/ -->
 <script src="{{ asset('front/js/jquery.scrollTo.min.js') }}"></script>
 <script src="{{ asset('front/js/dist/jquery.validate.min.js') }}"></script>
 <!-- https://github.com/flesler/jquery.scrollTo -->
 <script>
     /* Google Maps
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  ------------------------------------------------*/
     var map = '';
     var center;

     function initialize() {
         var mapOptions = {
             zoom: 16,
             center: new google.maps.LatLng(37.769725, -122.462154),
             scrollwheel: false
         };

         map = new google.maps.Map(document.getElementById('google-map'), mapOptions);

         google.maps.event.addDomListener(map, 'idle', function() {
             calculateCenter();
         });

         google.maps.event.addDomListener(window, 'resize', function() {
             map.setCenter(center);
         });
     }

     function calculateCenter() {
         center = map.getCenter();
     }

     function loadGoogleMap() {
         var script = document.createElement('script');
         script.type = 'text/javascript';
         script.src =
             'https://maps.googleapis.com/maps/api/js?key=AIzaSyDVWt4rJfibfsEDvcuaChUaZRS5NXey1Cs&v=3.exp&sensor=false&' +
             'callback=initialize';
         document.body.appendChild(script);
     }

     /* DOM is ready
     ------------------------------------------------*/
     $(function() {
         $("#registerForm").validate({
             rules: {
                 email: {
                     required: true,
                     email: true
                 },
             },
             messages: {
                 email: "Please enter a valid email address",
             },
             submitHandler: function(form) {

                 if ($('#email').val() == 'chandru@gmail.com') {
                     window.location.href = '{{route("cart")}}';
                     $('#registerModal').modal('hide');
                 } else {
                     $('#registerModal').modal('hide');
                     $('#exampleModal').modal('show')
                 }
             }
         });
         // Change top navbar on scroll
         $(window).on("scroll", function() {
             if ($(window).scrollTop() > 100) {
                 $(".tm-top-bar").addClass("active");
             } else {
                 $(".tm-top-bar").removeClass("active");
             }
         });

         // Smooth scroll to search form
         $('.tm-down-arrow-link').click(function() {
             $.scrollTo('#tm-section-search', 300, {
                 easing: 'linear'
             });
         });

         // Date Picker in Search form
         var pickerCheckIn = datepicker('#inputCheckIn');
         var pickerCheckOut = datepicker('#inputCheckOut');

         // Update nav links on scroll
         $('#tm-top-bar').singlePageNav({
             currentClass: 'active',
             offset: 60
         });

         // Close navbar after clicked
         $('.nav-link').click(function() {
             $('#mainNav').removeClass('show');
         });

         // Slick Carousel
         $('.tm-slideshow').slick({
             infinite: true,
             arrows: true,
             slidesToShow: 1,
             slidesToScroll: 1
         });

         loadGoogleMap(); // Google Map                
         $('.tm-current-year').text(new Date().getFullYear());


     });

     function changeTab(v) {
         if (v == 'home') {
             $('.personal-account').addClass('btn-secondary btn-customer-custom')
             $('.partner-account').removeClass('btn-secondary btn-partner-custom')
         } else if (v == 'profile') {
             $('.partner-account').addClass('btn-secondary btn-partner-custom')
             $('.personal-account').removeClass('btn-secondary btn-customer-custom')
         }
     }
 </script>

 </body>

 </html>
