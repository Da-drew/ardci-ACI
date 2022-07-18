<?php include 'includes/main-header.php'?>
<?php include 'includes/contact-code.php'?>


<section class="contact-banner-section">
    <div class="contact-banner-overlay"></div>
    <div class="container-fluid contact-banner-container">
        <div class="contact-name">
            <div class="contact-title-div">
                <h2 class="contact-title">Contact Us</h2>
                <hr class="contact-banner-hr">
            </div>
        </div>
    </div>
</section>

<section class="contact-body">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <form class="contact-form-page needs-validation" method="POST" action="contact-us.php" autocomplete="off" novalidate> 
                    <div class="inpt-box">
                        <label for="contactFname" class="contact-label">Your Name</label>
                        <input type="text" class="form-control to-upper" id="contactFname" name="name" autofocus required>
                        <div class="invalid-feedback">
                            *Please provide name.
                        </div>
                    </div>
                    <div class="inpt-box">
                        <label for="contactEmail" class="contact-label">Your Email</label>
                        <input type="email" class="form-control" id="contactEmail" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" required>
                        <div class="invalid-feedback">
                            *Please provide a valid email.
                        </div>
                    </div>
                    <div class="inpt-box">
                        <label for="contactSubject" class="contact-label">Subject</label>
                        <input type="text" class="form-control to-upper" id="contactSubject" name="subject" required>
                        <div class="invalid-feedback">
                            *Please provide subject.
                        </div>
                    </div>
                    <div class="inpt-box">
                        <label for="contactMessage" class="contact-label">Your Message</label>
                        <textarea class="form-control to-upper" id="contactMessage" name="message" rows="10" required></textarea>
                    </div>
                    <div class="inpt-button">
                        <button type="submit" name="send" class="btn btn-primary contact-submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-5">
                <div class="get-in-touch-div">
                    <h3 class="get-touch-title">Get in Touch</h3>
                    <hr class="get-touch-hr">
                    <p class="get-touch-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente vero similique eligendi veniam temporibus, quasi tempora nulla. Exercitationem, voluptatum numquam?</p>
                </div>
                <div class="contact-details-div">
                    <h3 class="cotact-details-title">Contact Details</h3>
                    <hr class="contact-details-hr">
                    <div class="contact-details-location">
                        <i class="fa-solid fa-location-dot"></i><span class="contact-location-txt">ARDCI Building, San Roque, Virac, Catanduanes</span> 
                    </div>
                    <div class="contact-details-number">
                        <i class="fa-solid fa-phone-flip"></i><span class="contact-number-txt">+63912 662 7134</span> 
                    </div>
                    <div class="contact-details-email">
                        <i class="fa-solid fa-envelope"></i><span class="contact-email-text"><a href="mailto:ardci-aci@gmail.com">ardci-aci@gmail.com</a></span>
                    </div>
                </div>
                <div class="contact-follow-us">
                    <h3 class="contact-follow-us-title">Follow Us</h3>
                    <hr class="follow-us-hr">
                    <a href="#" class="follow-us-social"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="follow-us-social"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="follow-us-social"><i class="fa-brands fa-instagram-square"></i></a>
                </div>
            </div>
            <div class="col-12">
                <div class="contact-maps">
                    <iframe width="100%" height="420" id="gmap_canvas" src="https://maps.google.com/maps?q=ardci%20corporate%20inn&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'includes/footer.php'?>