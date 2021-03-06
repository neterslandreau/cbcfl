<section id="contact" class="pt-5">
    <div class="container wow fadeInUp">
        <div class="section-header">
            <h3 class="section-title">&nbsp;</h3>

            <div class="card mb-5">
                <div class="card-header text-center">
                    <h3 class="section-title">Come Visit Us!</h3>
                </div>
                <div class="card-body text-justify">
                    Community Bible Church Dania Beach is located on the corner of Griffin Road and SW 30th Avenue,
                    one mile west of I95 and one mile east of 441 in Dania Beach.
                    We meet every Sunday at 10:30 am for our morning worship service and we connect
                    through small groups and other activities throughout the week.
                </div>
            </div>

{{--            <div class="card mb-5">--}}
{{--                <div class="card-body">--}}
{{--                    <blockquote class="blockquote mb-0">--}}
{{--                        <p>{{ $contact_scripture }}</p>--}}
{{--                        <footer class="blockquote-footer">{{ $contact_reference }}</footer>--}}
{{--                    </blockquote>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>
    </div>

    @if ($agent->isMobile())
    <div class="col-12">
    @else
    <div class="col-8 offset-2">
    @endif
        <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14336.360359006754!2d-80.1820802!3d26.063312!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2bb516409f226dc9!2sCommunity+Bible+Church!5e0!3m2!1sen!2sus!4v1499360137623" width="100%" height="450" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
    </div>

    <div class="col-md-12">
        <div id="map_canvas" class="d-none"></div>
    </div>

    <div class="container wow fadeInUp mt-5">
{{--        <h3 class="info-title">Contact Us</h3>--}}
        <div class="row justify-content-center">

            <div class="col-lg-3 col-md-4">

                <div class="info">
                    <div>
                        <i class="fas fa-map-marker fa-2x" style="float: left;"></i>
                        <p>{{ $church_address }}</p>
                    </div>

                    <div>
                        <i class="fas fa-envelope fa-2x" style="float: left;"></i>
                        <p>{{ $church_email }}</p>
                    </div>

                    <div>
                        <i class="fas fa-phone fa-2x" style="float: left;"></i>
                        <p>{{ $church_phone }}</p>
                    </div>
                </div>

                <div class="social-links">
                    <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="fab fa-google-plus"></i></a>
                    <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
                </div>

            </div>

            <div class="col-lg-5 col-md-8">
                <div class="form">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>

        </div>
        <div class="row no-gutters">
            <div class="col-1 no-gutters">&nbsp;</div>
            <div class="col-10 no-gutters">&nbsp;</div>
            <div class="col-1 no-gutters"><a id="goto_hero" href="#" class="back-to-top"><i class="fas fa-chevron-up"></i></a></div>
        </div>


    </div>
</section><!-- End Contact Section -->
