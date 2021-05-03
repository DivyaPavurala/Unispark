<div class="newsletter_kdls_agileits">
    <div class="col-sm-6 newsleft">
        <h3>Sign up for Newsletter !</h3>
    </div>
    <div class="col-sm-6 newsright">
        <form action="<?php echo base_url('home/newsletter') ?>" method="post">
            <input type="email" placeholder="Enter your email..." name="email" required="">
            <input type="submit" value="Submit">
        </form>
    </div>

    <div class="clearfix"></div>
</div>
<!-- footer -->
<div class="footer">
    <div class="footer_inner_info_kdls_agileits">
        <div class="col-md-5 footer-left">
            <h2><a href="index.html"style="text-decoration:none"><img src="<?php echo base_url(); ?>flogo.png" height="60"> Uni Spark </a></h2>
            <p>Uni Spark 
                provide a wide range of Creative and Technical Web Solutions including Web Design, Web Development, Website Hosting, Digital Marketing and SEO Services.</p>
            <ul class="social-nav model-3d-0 footer-social social two">
                <li>
                    <a href="#" class="facebook">
                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                    </a>
                </li>
                <li>
                    <a href="#" class="twitter">
                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                    </a>
                </li>
                <li>
                    <a href="#" class="instagram">
                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                    </a>
                </li>
                <li>
                    <a href="#" class="pinterest">
                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-7 footer-right">
            <div class="sign-grds">
                <div class="col-md-6 sign-gd">
                    <h4>Latest <span>Info</span> </h4>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="404.html">Services</a></li>
                        <li><a href="signin.html">Signin</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <!--                <div class="col-md-3 sign-gd flickr-post">
                                    <h4>Our <span>Works</span></h4>
                                    <ul>
                                        <li><a href="single.html"><img src="<?php echo base_url(); ?>images/g1.jpg" alt=" " class="img-responsive" /></a></li>
                                        <li><a href="single.html"><img src="<?php echo base_url(); ?>images/g2.jpg" alt=" " class="img-responsive" /></a></li>
                                        <li><a href="single.html"><img src="<?php echo base_url(); ?>images/g3.jpg" alt=" " class="img-responsive" /></a></li>
                                        <li><a href="single.html"><img src="<?php echo base_url(); ?>images/g4.jpg" alt=" " class="img-responsive" /></a></li>
                                        <li><a href="single.html"><img src="<?php echo base_url(); ?>images/g5.jpg" alt=" " class="img-responsive" /></a></li>
                                        <li><a href="single.html"><img src="<?php echo base_url(); ?>images/g6.jpg" alt=" " class="img-responsive" /></a></li>
                                        <li><a href="single.html"><img src="<?php echo base_url(); ?>images/g7.jpg" alt=" " class="img-responsive" /></a></li>
                                        <li><a href="single.html"><img src="<?php echo base_url(); ?>images/g8.jpg" alt=" " class="img-responsive" /></a></li>
                                        <li><a href="single.html"><img src="<?php echo base_url(); ?>images/g4.jpg" alt=" " class="img-responsive" /></a></li>
                                    </ul>
                                </div>-->
                <div class="col-md-6 sign-gd-two">
                    <h4>Contact <span>Information</span></h4>
                    <div class="address">
                        <div class="address-grid">
                            <div class="address-left">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="address-right">
                                <h6>Phone Number</h6>
                                <p>+919441177093</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="address-grid">
                            <div class="address-left">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="address-right">
                                <h6>Email Address</h6>
                                <p>Email :<a href="mailto:unisparkit@gmail.com">unisparkit@gmail.com</a></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="address-grid">
                            <div class="address-left">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="address-right">
                                <h6>Location</h6>
                                <p>Visakhapatnam,India.

                                </p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <p class="copy-right">&copy 2018 Uni Spark. All rights reserved | Design by <a href="http://unispark.co.in/">Uni Spark</a></p>
    </div>
</div>

<!-- //footer -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>
<script>
    $('ul.dropdown-menu li').hover(function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });
</script>

<!-- js -->
<!-- Smooth-Scrolling-JavaScript -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/easing.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll, .navbar li a, .footer li a").click(function (event) {
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
    document.onreadystatechange = function () {
        var state = document.readyState
        if (state == 'complete') {
            document.getElementById('interactive');
            document.getElementById('load').style.visibility = "hidden";
        }
    }
</script>
<!-- //Smooth-Scrolling-JavaScript -->

<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.7.2.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.quicksand.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>js/script.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>js/jquery.prettyPhoto.js" type="text/javascript"></script>
<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->

</body>



</html>