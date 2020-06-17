<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Construct</title>
    <!-- Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <?php $this->load->view('common/css') ?>
</head>

<body class="inner">
    
    <?php $this->load->view('common/header') ?>

    <?php $this->load->view('common/breadcrumb',['page_name'=>'About us']) ?>    


    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 contact space">
                    <div class="main-heading text-center col-sm-12">
                        <h2>CONTACT US</h2>
                        <p>Embedded in our culture of hard work, honesty, and getting the well done job,</p>
                    </div>
                    <div class="col-sm-12 no-padding contact-base">
                        <div class="col-sm-4 contact-block">
                            <div class="contact-item">
                                <div class="icon pull-left">
                                    <i class="fa fa-map-o"></i>
                                </div>
                                <div class="contact-text">
                                    <h5>Visit Us</h5>
                                    <p>42/2 North road, London, England</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="icon pull-left">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="contact-text">
                                    <h5>Email Us</h5>
                                    <a href="mailto:support@industry.com">support@industry.com</a>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="icon pull-left">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="contact-text">
                                    <h5>Call Us</h5>
                                    <a href="tel:+789675978">+(789) 675 978</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 contact-block">
                            <form id="contact-form">
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" name="name" id="name" required="" placeholder="Name...">
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="email" class="form-control" name="mail" id="mail" required="" placeholder="Email...">
                                </div>
                                <div class="form-group col-sm-12">
                                    <input type="text" class="form-control" name="website" id="website" placeholder="Subject...">
                                </div>
                                <div class="form-group col-sm-12 ">
                                    <textarea class="form-control" name="comment" id="comment" placeholder="Message..."></textarea>
                                </div>
                                <div class="col-sm-12 button">
                                    <input type="submit" id="submit_contact" class="btn" value="Send Message">
                                    <div id="msg" class="message"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php $this->load->view('common/footer') ?>
    <?php $this->load->view('common/js') ?>
</body>

</html>
