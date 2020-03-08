<!-- Stored in resources/views/book/index.blade.php -->
@extends('layout.app')
@section('title', 'Home')
@section('body')
<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">24 Life</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Dịch vụ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#book">Sách</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#news">Tin tức mới</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">Thông tin về chúng tôi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Liên lạc</a>
                    </li>
                </ul>
            </div>
        </div><!-- end div conainer -->
    </nav> <!-- end nav -->

    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">24 life!</div>
                <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
            </div>
        </div>
    </header>

    <!-- Services -->
    <section class="page-section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Services</h2>
                <h3 class="section-subheading text-muted">Make you life easier</h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading">Mua sắm</h4>
                <p class="text-muted">Mua cả thế giới</p>
            </div>

            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading">Sửa chữa Laptop</h4>
                <p class="text-muted">Sửa chữa laptop tại nhà.</p>
            </div>

            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading">Bảo mật website</h4>
                <p class="text-muted">Tăng cường bảo mật cho website của bạn</p>
            </div>

        </div>
    </section>

        <!-- Book Grid -->
        <section class="bg-light page-section" id="book">
            <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Sách mới</h2>
                <h3 class="section-subheading text-muted">Sách mới cập nhật.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#bookModal1">
                    <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                    </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Threads</h4>
                    <p class="text-muted">Illustration</p>
                </div>
                </div>
            </div>
            </div>
        </section>

        <!-- About -->
        <section class="page-section" id="news">
            <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">About</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                <ul class="timeline">
                    <li>
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                        <h4>2009-2011</h4>
                        <h4 class="subheading">Our Humble Beginnings</h4>
                        </div>
                        <div class="timeline-body">
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                    </li>
                    <li class="timeline-inverted">
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                        <h4>March 2011</h4>
                        <h4 class="subheading">An Agency is Born</h4>
                        </div>
                        <div class="timeline-body">
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                    </li>
                    <li>
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                        <h4>December 2012</h4>
                        <h4 class="subheading">Transition to Full Service</h4>
                        </div>
                        <div class="timeline-body">
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                    </li>
                    <li class="timeline-inverted">
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                        <h4>July 2014</h4>
                        <h4 class="subheading">Phase Two Expansion</h4>
                        </div>
                        <div class="timeline-body">
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                    </li>
                    <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>Be Part
                        <br>Of Our
                        <br>Story!</h4>
                    </div>
                    </li>
                </ul>
                </div>
            </div>
            </div>
        </section>

        <!-- Team -->
        <section class="bg-light page-section" id="about">
            <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
                    <h4>Kay Garland</h4>
                    <p class="text-muted">Lead Designer</p>
                    <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                        <a href="#">
                        <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                        <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                    </ul>
                </div>
                </div>
                <div class="col-sm-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="">
                    <h4>Larry Parker</h4>
                    <p class="text-muted">Lead Marketer</p>
                    <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                        <a href="#">
                        <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                        <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                    </ul>
                </div>
                </div>
                <div class="col-sm-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="">
                    <h4>Diana Pertersen</h4>
                    <p class="text-muted">Lead Developer</p>
                    <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                        <a href="#">
                        <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                        <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
            </div>
        </section>

        <!-- Clients -->
        <section class="py-5">
            <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
                </a>
                </div>
                <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
                </a>
                </div>
                <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
                </a>
                </div>
                <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
                </a>
                </div>
            </div>
            </div>
        </section>

        <!-- Contact -->
        <section class="page-section" id="contact">
            <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                        <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                        <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                        <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                        <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                        <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-center">
                        <div id="success"></div>
                        <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                    </div>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                <span class="copyright">Copyright &copy; Your Website 2019</span>
                </div>
                <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    </li>
                    <li class="list-inline-item">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    </li>
                    <li class="list-inline-item">
                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    </li>
                </ul>
                </div>
                <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li class="list-inline-item">
                    <a href="#">Privacy Policy</a>
                    </li>
                    <li class="list-inline-item">
                    <a href="#">Terms of Use</a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
        </footer>

        <!-- book Modals -->

        <!-- Modal 1 -->
        <div class="portfolio-modal modal fade" id="bookModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
                </div>
                <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2 class="text-uppercase">Project Name</h2>
                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                        <ul class="list-inline">
                        <li>Date: January 2017</li>
                        <li>Client: Threads</li>
                        <li>Category: Illustration</li>
                        </ul>
                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                        <i class="fas fa-times"></i>
                        Close Project</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <!-- Modal 2 -->
        <div class="portfolio-modal modal fade" id="bookModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
                </div>
                <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2 class="text-uppercase">Project Name</h2>
                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                        <ul class="list-inline">
                        <li>Date: January 2017</li>
                        <li>Client: Explore</li>
                        <li>Category: Graphic Design</li>
                        </ul>
                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                        <i class="fas fa-times"></i>
                        Close Project</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <!-- Modal 3 -->
        <div class="portfolio-modal modal fade" id="bookModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
                </div>
                <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2 class="text-uppercase">Project Name</h2>
                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                        <ul class="list-inline">
                        <li>Date: January 2017</li>
                        <li>Client: Finish</li>
                        <li>Category: Identity</li>
                        </ul>
                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                        <i class="fas fa-times"></i>
                        Close Project</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <!-- Modal 4 -->
        <div class="portfolio-modal modal fade" id="bookModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
                </div>
                <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2 class="text-uppercase">Project Name</h2>
                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                        <ul class="list-inline">
                        <li>Date: January 2017</li>
                        <li>Client: Lines</li>
                        <li>Category: Branding</li>
                        </ul>
                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                        <i class="fas fa-times"></i>
                        Close Project</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <!-- Modal 5 -->
        <div class="portfolio-modal modal fade" id="bookModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl"></div>
                </div>
                </div>
                <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2 class="text-uppercase">Project Name</h2>
                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                        <ul class="list-inline">
                        <li>Date: January 2017</li>
                        <li>Client: Southwest</li>
                        <li>Category: Website Design</li>
                        </ul>
                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                        <i class="fas fa-times"></i>
                        Close Project</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <!-- Modal 6 -->
        <div class="portfolio-modal modal fade" id="bookModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                <li>Date: January 2017</li>
                                <li>Client: Window</li>
                                <li>Category: Photography</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times"></i>
                                Close Project</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection