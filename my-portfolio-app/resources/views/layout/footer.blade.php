<!-- Footer -->
<div class="footer bg-gray">
    <div class="container">
        <div class="row">
                    <div class="row">
                        <!-- About Me Section -->
                        <div class="col-lg-4 col-md-6 footer-section">
                            <h5>About Me</h5>
                            <p>
                                I am a passionate web developer creating modern, responsive, and attractive websites
                                and web apps for clients worldwide.
                            </p>
                        </div>

                        <!-- Services Section -->
                        <div class="col-lg-4 col-md-6 footer-section">
                            <h5>Services</h5>
                            <ul>
                                <li><a href="#your-link">Web Development</a></li>
                                <li><a href="#your-link">E-commerce Solutions</a></li>
                                <li><a href="#your-link">Portfolio Design</a></li>
                                <li><a href="#your-link">Custom Web Apps</a></li>
                            </ul>
                        </div>

                        <!-- Quick Links Section -->
                        <div class="col-lg-4 col-md-6 footer-section">
                            <h5>Quick Links</h5>
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('about') }}">About</a></li>
                                <li><a href="{{ url('service') }}">Service</a></li>
                                <li><a href="{{ url('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div> <!-- end of footer -->


            <div class="col-lg-12 mt-5">
                <div class="social-container">
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-pinterest-p fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-instagram fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-youtube fa-stack-1x"></i>
                        </a>
                    </span>
                </div> <!-- end of social-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of footer -->
<!-- end of footer -->


<!-- Copyright -->
<div class="copyright bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="p-small">Copyright © <a class="no-line" href="#your-link">Your name</a></p>
            </div> <!-- end of col -->
        </div> <!-- enf of row -->
    </div> <!-- end of container -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="p-small">Distributed By <a class="no-line" href="https://themewagon.com/">Themewagon</a></p>
            </div> <!-- end of col -->
        </div> <!-- enf of row -->
    </div> <!-- end of container -->

</div> <!-- end of copyright -->
<!-- end of copyright -->


<!-- Scripts -->
<script src="{{ url('web/js/jquery.min.js') }}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
<script src="{{ url('web/js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
<script src="{{ url('web/js/jquery.easing.min.js') }}"></script>
<!-- jQuery Easing for smooth scrolling between anchors -->
<script src="{{ url('web/js/scripts.js') }}"></script> <!-- Custom scripts -->
</body>

</html>