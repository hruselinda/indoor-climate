<?php include('header.php'); ?>

        <!-- Map canvas - Used to load google map -->
        <iframe class="map-canvas style-1 mt-20"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9934.722249271881!2d-0.1268141!3d51.5007292!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604c38c8cd1d9%3A0xb78f2474b9a45aa9!2sBig+Ben!5e0!3m2!1sen!2suk!4v1522342155693"
                width="100%"
                height="400"
                frameborder="0"
                style="border:0;"
                allowfullscreen>
        </iframe>

        <!-- end: Page title -->

        <!-- CONTENT -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-uppercase">Contact us</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum.</p>
                        <p>web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
                        <div class="row m-t-40">
                            <div class="col-md-6">
                                <address>
                                    <strong>Contact details</strong><br>
                                    Westminster<br>
                                    London<br>
                                    0123 / 45-67-89 <br>
                                    eng. John Watson
                                </address>
                            </div>
                            <div class="col-md-6">
                                <address>
                                    <strong>Working time</strong><br>
                                    Monday - Friday:<br>
                                    09:00 - 17:00<br>
                                    Weekend <br>
                                    Closed
                                </address>
                            </div>
                        </div>

                        <div class="social-icons m-t-30 social-icons-colored">
                            <ul>
                                <li class="social-facebook"><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-twitter"><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-google"><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i>
                                <li class="social-pinterest"><a href="https://www.pinterest.co.uk/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                <li class="social-linkedin"><a href="https://uk.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>

                        <div class="clearfix"></div>
                        <br/>
                    </div>


                    <div class="col-md-6">
                        <form class="widget-contact-form" action="include/contact-form.php" role="form" method="post">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="name">Name</label>
                                    <input type="text" aria-required="true" name="widget-contact-form-name" class="form-control required name" placeholder="Enter your name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="email">Email</label>
                                    <input type="email" aria-required="true" name="widget-contact-form-email" class="form-control required email" placeholder="Enter your email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <label for="subject">Topic</label>
                                    <input type="text" name="widget-contact-form-subject" class="form-control required" placeholder="What is it about">
                                </div>
                            </div>
                            <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea type="text" name="widget-contact-form-message" rows="5" class="form-control required" placeholder="Your message" style="height: 180px; resize:none;"></textarea>
                                </div>
                            <br/>
                            <button class="btn btn-default" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send </button>
                        </form>

                    </div>
                </div>
            </div>
        </section>
        <!-- end: CONTENT -->


<?php include('footer.php'); ?>