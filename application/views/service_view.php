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

    <?php $this->load->view('common/breadcrumb',['page_name'=>'Services']) ?>    
    
    <section id="service">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 service-base space">


                    <div class="col-sm-4 service-block">
                        <div class="service-inner">
                            <img style="height: 200px;width: 360px" src="<?php echo base_url('assets') ?>/images/household_shiftiung.jpg" alt="Services">
                            <div class="service-text">
                                <h4>Household Shifting</h4>
                                <p>Is finding a reliable service for household goods is making you worried? Get best suggestions for reliable household shifting services, </p>
                                <a href="<?php echo base_url('service/household-shifting') ?>">read more</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-4 service-block">
                        <div class="service-inner">
                            <img style="height: 200px;width: 360px" src="<?php echo base_url('assets') ?>/images/relocation_services.jpg" alt="Services">
                            <div class="service-text">
                                <h4>Relocation Services</h4>
                                <p>There are a number of reasons because of which people need to relocate their home. Obviously, they would want to move their household belongings ..</p>
                                <a href="<?php echo base_url('service/relocation-services') ?>">read more</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-4 service-block">
                        <div class="service-inner">
                            <img style="height: 200px;width: 360px" src="<?php echo base_url('assets') ?>/images/corporate-shifting-services.jpg" alt="Services">
                            <div class="service-text">
                                <h4>Corporate Shifting Service</h4>
                                <p>Relocation services can easily to accomplish corporate relocation task on time. Corporate Relocation Company has great area .. </p>
                                <a href="<?php echo base_url('service/corporate-shifting-service') ?>">read more</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="margin col-sm-12 col-xs-12"></div>
                    <div class="col-sm-4 service-block">
                        <div class="service-inner">
                            <img style="height: 200px;width: 360px" src="<?php echo base_url('assets') ?>/images/office-relocation.png" alt="Services">
                            <div class="service-text">
                                <h4>OFFICE RELOCATION SERVICES</h4>
                                <p>You may need to do office relocation for various reasons. One of the common reasons for growing business is need for space .. </p>
                                <a href="<?php echo base_url('service/office-relocation-services') ?>">read more</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-4 service-block">
                        <div class="service-inner">
                            <img style="height: 200px;width: 360px" src="<?php echo base_url('assets') ?>/images/car-trasport.jpg" alt="Services">
                            <div class="service-text">
                                <h4>CAR TRANSPORTATION SERVICES</h4>
                                <p>Availing renowned Car Transportation Services in Mumbai is never an easy task to do. Thus you need to find a renowned ..</p>
                                <a href="<?php echo base_url('service/car-transportation-services') ?>">read more</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-4 service-block">
                        <div class="service-inner">
                            <img style="height: 200px;width: 360px" src="<?php echo base_url('assets') ?>/images/international-relocation.jpg" alt="Services">
                            <div class="service-text">
                                <h4>International Shifting Services</h4>
                                <p>Are you aspiring to work and live in another country? You must be ready to face the major change in your life.. </p>
                                <a href="<?php echo base_url('service/international-shifting-services') ?>">read more</a>
                            </div>
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
