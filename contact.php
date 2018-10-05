<?php /* Template Name: contact */ ?>
<?php get_header(); ?>
<!-- Contact Section -->
    <section id="contact">
                <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading" style="color:white">Email us directly at <a href="mailto:contact@mitshi.in">contact@mitshi.in</a></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="https://formspree.io/contact@mitshi.in" method="POST">
                        <div class="row">
                            <div class="col-md-8 text-center" style="margin-bottom:25px;">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" name="name" required="" data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" name="email" required="" data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" name="phone" required="" data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                 <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" name="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                                <br>
                            </div>
                            <div class="col-md-4" id="contact-address">
                                <!-- <div class="col-md-4 col-lg-4"> -->
                                    <h4>Registrar &amp; Transfer Agent</h4>
                                    <p>Adroit Corporate Services Pvt.Ltd.
                                        17-20, Jafferbhoy Ind. Estate,
                                        1st Floor, Makhwana  Road,
                                        Marol Naka, Andheri (E), Mumbai 400059, India.<br>
                                        <span class="fa fa-phone"></span> Tel / Direct: +91 (0)22 42270400 <br>
                                        <span class="fa fa-print"></span> Fax: +91 (0)22 28503748
                                    </p>
                                    <br>
                                <!-- </div> -->
                                <!-- <div class="col-md-4 col-lg-4"> -->
                                    <h4>Primary Address</h4>
                                    <p> 2, JUHU ARADHANA CHS Ltd,
                                        Gr Floor, Juhu Lane, Andheri (W)
                                        Mumbai 400058, India.<br>
                                        Email: contact@mitshi.in
                                    </p>
                                    <br>
                                <!-- </div> -->
                                <!-- <div class="col-md-4 col-lg-4"> -->
                                    <h4>Alternate Address</h4>
                                    <p>701,NEW VIRENDRA APT,
                                        KHAR ROAD NO 1<br>
                                        MUMBAI 400052, India.
                                    </p>
                                <!-- </div> -->

                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br>
        </div>
    </section>
<?php get_footer(); ?>