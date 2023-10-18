<?php include ('inc/header.php');
use Clinic_two\Classes\Models\Contact;
use Clinic_two\Classes\Validation\Validator;

if($request->postHas('submit')){
    $name = $request->post('name');
    $subject = $request->post('subject');
    $email = $request->post('email');
    $phone = $request->post('phone');
    $note = $request->post('message');

    $validate = new Validator();
    $validate->validate('name',$name,['required','str','max']);
    $validate->validate('service',$subject,['required','str','max']);
    $validate->validate('email',$email,['required','email','max']);
    $validate->validate('phone',$phone,['required','numeric','max']);
    $validate->validate('note',$note,['required','str']);

    if($validate->hasErrors()){
        $session->set("errors",$validate->getErrors());
    }
    else{
        $data = new Contact();
        $data->insert("name,subject,email,phone,message","'$name','$subject','$email','$phone','$note'");
    }
}
?>
<!-- Start Page Title Area -->
<div class="page-title-area page-title-bg2">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Contact</h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Contact Info Area -->
<section class="contact-info-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class="flaticon-pin"></i>
                    </div>

                    <h3>Location</h3>
                    <span>Rawasy Medical center, 13-25 Abdulla Ibn Salam St, Kuwait, Kuwait City, Kuwait </span>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class="flaticon-phone-call"></i>
                    </div>

                    <h3>Phone Number</h3>
                    <span>Mobile: <a href="#">+96598008445</a></span>
                    <span>Phone: <a href="#">+96598008445</a></span>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class="flaticon-email"></i>
                    </div>

                    <h3>Email Address</h3>
                    <span><a href="#"><span class="__cf_email__" data-cfemail="e68e838a8a89a68d8a8390c885898b"> info@smarttargetkwt.com</span></a></span>
                    <span><a href="#"><span class="__cf_email__" data-cfemail="4c24292020230c3f393c3c233e38622f2321">info@smarttargetkwt.com</span></a></span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Contact Info Area -->

<!-- Start Contact Area -->
<section class="contact-area ptb-100">
    <div class="container">
        <div class="contact-inner">
            <div class="row m-0">
                <div class="col-lg-7 col-md-12 p-0">
                    <div class="contact-form">
                        <span class="sub-title">Message Us</span>
                        <h2>Drop us Message for any Query</h2>

                        <form method="post" action="<?=URL?>contact.php">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label><i class="flaticon-user"></i></label>
                                        <input type="text" name="name" id="name" class="form-control" required
                                               data-error="Please enter your name" placeholder="YOUR NAME">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label><i class="flaticon-email"></i></label>
                                        <input type="email" name="email" id="email" class="form-control" required
                                               data-error="Please enter your email" placeholder="YOUR EMAIL">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label><i class="flaticon-phone-call"></i></label>
                                        <input type="text" name="phone" id="phone_number" required
                                               data-error="Please enter your number" class="form-control"
                                               placeholder="YOUR PHONE">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label><i class="flaticon-customer-support"></i></label>
                                        <input type="text" name="subject" id="msg_subject" class="form-control"
                                               required data-error="Please enter your subject"
                                               placeholder="YOUR SUBJECT">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label><i class="flaticon-list"></i></label>
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="6"
                                                  required data-error="Write your message"
                                                  placeholder="YOUR MESSAGE"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" name="submit" class="btn btn-primary">Send Message <i
                                                class="fas fa-paper-plane"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 p-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3477.748841371726!2d48.03005547522147!3d29.34835557528147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf9ce5c8ab1dcb%3A0xa564567a7dd8d7de!2sRawasy%20Medical%20centre!5e0!3m2!1sen!2seg!4v1681640623218!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-map"><img src="assets/img/bg-map.png" alt="image"></div>
</section>
<!-- End Contact Area -->
<?php include ('inc/footer.php')?>