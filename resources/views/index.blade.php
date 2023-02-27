@extends("layouts.app")

@section("style")
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section("content")
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row gy-4 d-flex justify-content-between">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h2 data-aos="fade-up">Welcome To WeSource</h2>
                <p data-aos="fade-up" data-aos-delay="100">
                    We partner with organizations to provide on demand solutions that help them reduce costs, save time
                    and increase productivity. As the HR evolution rapidly changes business landscapes and the
                    traditional responsibilities of human resources, WeSource continues to provide credible cutting edge
                    solutions and hands on locally compliant experience.
                </p>
                <!-- <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up"
                    data-aos-delay="200">
                    <input type="text" class="form-control" placeholder="ZIP code or CitY">
                    <button type="submit" class="btn btn-primary">Search</button>
                </form> -->

                <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Clients</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Support</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Workers</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>
            </div>

            <div class="col-lg-5 order-1 order-lg-2 hero-img landing-image" data-aos="zoom-out">
                <img src="{{ asset('img/hero-img.png') }}" class="img-fluid mb-3 mb-lg-0" alt="">
            </div>

        </div>
    </div>
</section>
<!-- End Hero Section -->

<main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
                    <div class="icon flex-shrink-0"><i class="fa-solid fa-cart-flatbed"></i></div>
                    <div>
                        <h4 class="title">We listen</h4>
                        <p class="description">
                            Whatever your HR requirements, contact us for an in depth flexible and transparent
                            customized solution, depending on your domain/sector and location.
                        </p>
                        <a href="/service-details" class="readmore stretched-link"><span>Learn More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><i class="fa-solid fa-truck"></i></div>
                    <div>
                        <h4 class="title">We Propose</h4>
                        <p class="description">
                            Our proposal will provide the most suitable customized solution with options of payments,
                            prices and complete services offered.
                        </p>
                        <a href="/service-details" class="readmore stretched-link">
                            <span>Learn More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon flex-shrink-0"><i class="fa-solid fa-truck-ramp-box"></i></div>
                    <div>
                        <h4 class="title">We deliver and fulfill</h4>
                        <p class="description">
                            From shortlisting, talent acquisition, reference checking, onboarding, training, payroll,
                            performance management, HR Consulting till off-boarding, we ensure, our clients receive
                            exceptional service and a dedicated relationship manager.
                        </p>
                        <a href="/service-details" class="readmore stretched-link">
                            <span>Learn More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about pt-0">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">
                <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
                    <img src="{{ asset('img/about.jpg') }}" class="img-fluid" alt="">
                    <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                </div>
                <div class="col-lg-6 content order-last  order-lg-first">
                    <h3>About Us</h3>
                    <p>
                        We partner with organizations to provide on demand solutions that help them reduce costs, save time and increase productivity.
                    </p>
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-diagram-3"></i>
                            <div>
                                <h5>HR Consultants</h5>
                                <p>
                                    HR Consultants with professional experience in the UAE, who possess an
                                    entrepreneurial drive, connect with us to explore options how we can expand our HR
                                    advisory services together.
                                </p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-fullscreen-exit"></i>
                            <div>
                                <h5>HR Recruiters</h5>
                                <p>
                                    HR Recruiters with previous 360 degrees professional experience, who possess an
                                    entrepreneurial drive, connect with us to explore options how we can work together.
                                </p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-broadcast"></i>
                            <div>
                                <h5>Contract Staffing</h5>
                                <p>
                                    With flexible work schedules on the rise and market demand shifting faster than ever we provide customized solutions for your business, whether you need one person or an entire project team. 
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <span>Our Services</span>
                <h2>Our Services</h2>

            </div>

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('img/storage-service.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <h3><a href="/service-details" class="stretched-link">Storage</a></h3>
                        <p>
                            Cumque eos in qui numquam. Aut aspernatur perferendis sed atque quia voluptas quisquam
                            repellendus temporibus itaqueofficiis odit
                        </p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('img/logistics-service.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <h3>
                            <a href="/service-details" class="stretched-link">Logistics</a>
                        </h3>
                        <p>
                            Asperiores provident dolor accusamus pariatur dolore nam id audantium ut et iure incidunt
                            molestiae dolor ipsam ducimus occaecati nisi
                        </p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('img/cargo-service.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <h3><a href="/service-details" class="stretched-link">Cargo</a></h3>
                        <p>
                            Dicta quam similique quia architecto eos nisi aut ratione aut ipsum reiciendis sit
                            doloremque oluptatem aut et molestiae ut et nihil
                        </p>
                    </div>
                </div>
                <!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('img/trucking-service.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <h3>
                            <a href="/service-details" class="stretched-link">Trucking</a>
                        </h3>
                        <p>
                            Dicta quam similique quia architecto eos nisi aut ratione aut ipsum reiciendis sit
                            doloremque oluptatem aut et molestiae ut et nihil
                        </p>
                    </div>
                </div>
                <!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('img/packaging-service.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <h3><a href="/service-details" class="stretched-link">Packaging</a></h3>
                        <p>Illo consequuntur quisquam delectus praesentium modi dignissimos facere vel cum
                            onsequuntur maiores beatae consequatur magni voluptates</p>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('img/warehousing-service.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <h3><a href="/service-details" class="stretched-link">Warehousing</a></h3>
                        <p>
                            Quas assumenda non occaecati molestiae. In aut earum sed natus eatae in vero. Ab modi
                            quisquam aut nostrum unde et qui est non quo nulla
                        </p>
                    </div>
                </div><!-- End Card Item -->

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
        <div class="container" data-aos="zoom-out">

            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h3>Call To Action</h3>
                    <p> 
                        We help great people find temporary solutions before the next phase of life, or a path to fulltime employment with us.
                    </p>
                    <a class="cta-btn" href="#">Call To Action</a>
                </div>
            </div>

        </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container">

            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

                <div class="col-md-5">
                    <img src="{{ asset('img/features-1.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7">
                    <h3>Packager</h3>
                    <p class="fst-italic">
                        Manually packages materials and products.
                    </p>
                    <ul>
                        <li>
                            <i class="bi bi-check"></i> 
                            Successfully pass a drug screen
                        </li>
                        <li>
                            <i class="bi bi-check"></i> 
                            Ability to attend work as scheduled
                        </li>
                        <li>
                            <i class="bi bi-check"></i> 
                            Ability to work in hot, humid, cold warehouse environment
                        </li>
                    </ul>
                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                <div class="col-md-5 order-1 order-md-2">
                    <img src="{{ asset('img/features-2.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 order-2 order-md-1">
                    <h3>Forklift Operator</h3>
                    <p class="fst-italic">
                        Operate forklift in a safe manner
                    </p>
                    <ul>
                        <li>
                            <i class="bi bi-check"></i> 
                            Pass Drug Screen
                        </li>
                        <li>
                            <i class="bi bi-check"></i> 
                            Follow all Safety Rules
                        </li>
                        <li>
                            <i class="bi bi-check"></i> 
                            Ability to attend work as scheduled
                        </li>
                    </ul>
                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                <div class="col-md-5">
                    <img src="{{ asset('img/features-3.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7">
                    <h3>Line Leader</h3>
                    <p>
                        Lead workers engaged in packaging materials and products.
                    </p>
                    <ul>
                        <li>
                            <i class="bi bi-check"></i> 
                            Successfully pass a drug screen
                        </li>
                        <li>
                            <i class="bi bi-check"></i> 
                            Ability to attend work as scheduled
                        </li>
                        <li>
                            <i class="bi bi-check"></i> 
                            Ability to work in hot, humid, cold warehouse environment
                        </li>
                    </ul>
                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                <div class="col-md-5 order-1 order-md-2">
                    <img src="{{ asset('img/features-4.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 order-2 order-md-1">
                    <h3>Packager</h3>
                    <p class="fst-italic">
                        Manually packages materials and products.
                    </p>
                    <ul>
                        <li>
                            <i class="bi bi-check"></i> 
                            Ability to work in a fast paced environment
                        </li>
                        <li>
                            <i class="bi bi-check"></i> 
                            Have the capability to perform physical activities that require considerable use of arms
                        </li>
                        <li>
                            <i class="bi bi-check"></i> 
                            Ability to lift 10 pounds frequently and greater than 45 pounds occasionally
                        </li>
                    </ul>
                </div>
            </div><!-- Features Item -->

        </div>
    </section><!-- End Features Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- <section id="pricing" class="pricing pt-0">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <span>Pricing</span>
                <h2>Pricing</h2>

            </div>

            <div class="row gy-4">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-item">
                        <h3>Free Plan</h3>
                        <h4><sup>$</sup>0<span> / month</span></h4>
                        <ul>
                            <li>
                                <i class="bi bi-check"></i> 
                                Quam adipiscing vitae proin
                            </li>
                            <li>
                                <i class="bi bi-check"></i> 
                                Nec feugiat nisl pretium
                            </li>
                            <li>
                                <i class="bi bi-check"></i> 
                                Nulla at volutpat diam uteera
                            </li>
                            <li class="na">
                                <i class="bi bi-x"></i> 
                                <span>Pharetra massa massa ultricies</span>
                            </li>
                            <li class="na">
                                <i class="bi bi-x"></i> 
                                <span>Massa ultricies mi quis hendrerit</span>
                            </li>
                        </ul>
                        <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-item featured">
                        <h3>Business Plan</h3>
                        <h4><sup>$</sup>29<span> / month</span></h4>
                        <ul>
                            <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                            <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                            <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                            <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                            <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
                        </ul>
                        <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-item">
                        <h3>Developer Plan</h3>
                        <h4><sup>$</sup>49<span> / month</span></h4>
                        <ul>
                            <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                            <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                            <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                            <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                            <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
                        </ul>
                        <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>

            </div>

        </div>
    </section> -->
    <!-- End Pricing Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container">

            <div class="slides-1 swiper" data-aos="fade-up">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('img/testimonials/testimonials-1.jpg') }}" class="testimonial-img"
                                alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                risus at semper.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('img/testimonials/testimonials-2.jpg') }}" class="testimonial-img"
                                alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('img/testimonials/testimonials-3.jpg') }}" class="testimonial-img"
                                alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                    minim.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('img/testimonials/testimonials-4.jpg') }}" class="testimonial-img"
                                alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                    dolore labore illum veniam.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('img/testimonials/testimonials-5.jpg') }}" class="testimonial-img"
                                alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <span>Frequently Asked Questions</span>
                <h2>Frequently Asked Questions</h2>

            </div>

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-10">

                    <div class="accordion accordion-flush" id="faqlist">

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-1">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Non consectetur a erat nam at lectus urna duis?
                                </button>
                            </h3>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                    laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor
                                    rhoncus dolor purus non.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                                </button>
                            </h3>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                    interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                    scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                    Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                                </button>
                            </h3>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                    Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl
                                    suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis
                                    convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                                </button>
                            </h3>
                            <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                    interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                    scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                    Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                                </button>
                            </h3>
                            <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim
                                    suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan.
                                    Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit
                                    turpis cursus in
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->

</main>
<!-- End #main -->
@endsection