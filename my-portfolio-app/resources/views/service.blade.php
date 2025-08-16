@extends('layout.content')

@section('main_content')
    <!-- Services -->
    <div id="services" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="h2-heading">Our Services</h2>
                    <p class="p-heading">
                        I specialize in building modern, responsive, and high-quality web solutions.
                        From design to development, I help startups and businesses create
                        digital experiences that grow their brand and attract customers.
                    </p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->

            <div class="row">
                <!-- Service 1 -->
                <div class="col-lg-4">
                    <div class="text-box"
                        style="text-align:center; padding:20px; border:1px solid #ddd; border-radius:10px; margin:10px; box-shadow:0 2px 6px rgba(0,0,0,0.1);">
                        <i class="fas fa-paint-brush"
                            style="font-size:40px; color:#007bff; margin-bottom:15px; display:block;"></i>
                        <h4>UI/UX DESIGN</h4>
                        <p>Clean, creative, and user-friendly designs that enhance engagement
                            and give your brand a unique digital identity.</p>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-lg-4">
                    <div class="text-box"
                        style="text-align:center; padding:20px; border:1px solid #ddd; border-radius:10px; margin:10px; box-shadow:0 2px 6px rgba(0,0,0,0.1);">
                        <i class="fas fa-laptop-code"
                            style="font-size:40px; color:#007bff; margin-bottom:15px; display:block;"></i>
                        <h4>WEB DEVELOPMENT</h4>
                        <p>Robust and scalable websites built using HTML, CSS, Bootstrap,
                            and Laravel to ensure performance and reliability.</p>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-lg-4">
                    <div class="text-box"
                        style="text-align:center; padding:20px; border:1px solid #ddd; border-radius:10px; margin:10px; box-shadow:0 2px 6px rgba(0,0,0,0.1);">
                        <i class="fas fa-bullhorn"
                            style="font-size:40px; color:#007bff; margin-bottom:15px; display:block;"></i>
                        <h4>DIGITAL PRESENCE</h4>
                        <p>SEO-friendly structures and optimized content to boost your
                            visibility on search engines without heavy ad costs.</p>
                    </div>
                </div>
            </div> <!-- end of row -->

            <div class="row mt-4">
                <!-- Service 4 -->
                <div class="col-lg-4">
                    <div class="text-box"
                        style="text-align:center; padding:20px; border:1px solid #ddd; border-radius:10px; margin:10px; box-shadow:0 2px 6px rgba(0,0,0,0.1);">
                        <i class="fas fa-mobile-alt"
                            style="font-size:40px; color:#007bff; margin-bottom:15px; display:block;"></i>
                        <h4>LANDING PAGES</h4>
                        <p>High-converting landing pages for mobile apps and businesses
                            designed to increase downloads and leads.</p>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="col-lg-4">
                    <div class="text-box"
                        style="text-align:center; padding:20px; border:1px solid #ddd; border-radius:10px; margin:10px; box-shadow:0 2px 6px rgba(0,0,0,0.1);">
                        <i class="fas fa-shopping-cart"
                            style="font-size:40px; color:#007bff; margin-bottom:15px; display:block;"></i>
                        <h4>E-COMMERCE SOLUTIONS</h4>
                        <p>Custom online stores with secure payments and
                            responsive layouts for a smooth shopping experience.</p>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="col-lg-4">
                    <div class="text-box"
                        style="text-align:center; padding:20px; border:1px solid #ddd; border-radius:10px; margin:10px; box-shadow:0 2px 6px rgba(0,0,0,0.1);">
                        <i class="fas fa-cogs"
                            style="font-size:40px; color:#007bff; margin-bottom:15px; display:block;"></i>
                        <h4>CUSTOM TEMPLATES</h4>
                        <p>Ready-to-use premium HTML/CSS templates tailored
                            to your project needs for faster deployment.</p>
                    </div>
                </div>
            </div> <!-- end of row -->

        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of services -->

@endsection