<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Construct</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <?php $this->load->view('common/css') ?>
</head>
<body class="inner">
    <?php $this->load->view('common/header') ?>
    
    <?php $this->load->view('common/breadcrumb',['page_name'=>'Services','page_name_two'=>'Corporate Shifting Service']) ?>
    
    <section id="service-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 service-inner space">
                    <?php $this->load->view('common/service_sidebar') ?>
                    <div class="col-sm-8 col-md-9 service-main no-padding">
                        <section id="service-contract">
                            <div class="col-sm-12 service-base no-padding">
                                <div class="col-sm-12 no-padding contract">
                                    <div class="col-sm-6 service-block">
                                        <h4>Corporate Shifting Service</h4>
                                        <p>Relocation services can easily to accomplish corporate relocation task on time. Corporate Relocation Company has great area of operating network all across India. Corporate Relocation is a weary task that involved several factors.</p>
                                        <p>Most often corporate businesses are needed to be relocated with personal belongings due to expansion of business. There are many reasons behind a corporate relocation, but whatever the reason is a professional corporate relocation service provider is needed to carry out the move efficiently.</p>
                                    </div>
                                    <img style="width: 409px;" src="<?php echo base_url('assets') ?>/images/corporate-shifting-services.jpg">
                                </div>
                                <div class="col-sm-12 small-space col-xs-12"></div>
                                <div class="col-sm-12 service-block">
                                    <p>Globalization has made the world smaller in size so corporate relocation is no longer is a hectic task. Packers and Movers are highly experienced and serve you the best services in your city and country. It is the responsibility of the client to hire a trustworthy and reliable relocation service provider for the commercial move of big corporate houses.</p>
                                    <p>Corporate Relocation Service has become so common nowadays that any individual or a big corporate body can avail their services. If you are planning to relocate your office to a new place, then you can choose a reputed moving company by searching them at online directories or ask your acquaintances who have undertaken services of such companies.</p>
                                    <p>Today, small, medium and big corporate houses relocate their business set up for better infrastructure and expanding their businesses. Moving professionals have years of experience to carry out small/big scale corporate relocation.</p>
                                    <p>In this hi-tech world, companies are welcoming employees who are highly qualified and are flexible for employee relocation services. Corporate relocation services have come into the practice to help such individuals.</p>
                                </div>
                            </div>
                        </section>
                        <!--Services end-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $this->load->view('common/footer') ?>
    <?php $this->load->view('common/js') ?>
</body>

</html>
