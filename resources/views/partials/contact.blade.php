<section id="contact">
    <div class="container wow fadeInUp">
        <div class="section-header">
            <h3 class="section-title">Contact</h3>

            <div class="card">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>A new command I give you: Love one another. As I have loved you, so you must love one another. By this everyone will know that you are my disciples, if you love one another.</p>
                        <footer class="blockquote-footer">John 13:34-35</footer>
                    </blockquote>
                </div>
            </div>

        </div>
    </div>

    <div class="col-md-12">
        <div id="map_canvas" style="width: 100%; height: 450px;"></div>
    </div>

    <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

            <div class="col-lg-3 col-md-4">

                <div class="info">
                    <div>
                        <i class="fas fa-map-marker fa-2x" style="float: left;"></i>
                        <p>4650 SW 30th Ave<br>Fort Lauderdale, FL 33312</p>
                    </div>

                    <div>
                        <i class="fas fa-envelope fa-2x" style="float: left;"></i>
                        <p>info@cfcfl.org</p>
                    </div>

                    <div>
                        <i class="fas fa-phone fa-2x" style="float: left;"></i>
                        <p>954-xxx-xxxx</p>
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

    </div>
</section><!-- End Contact Section -->
