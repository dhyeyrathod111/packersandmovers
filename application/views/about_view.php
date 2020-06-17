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
    <!-- Breadcrumb end-->
    <!--Services-->
    <section id="service">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 service-base space">
                    <div class="col-sm-6 service-block">
                        <div class="service-inner">
                            <img src="<?php echo base_url('assets') ?>/images/demo-1.png" alt="About">
                            <div class="service-text">
                                <h4>ABOUT OUR COMPANY</h4>
                                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas venenatis sollicitudin neque, ve Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas venenatis sollicitudin neque, </p>
                                <a href="#">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 service-block">
                        <div class="service-inner">
                            <img src="<?php echo base_url('assets') ?>/images/demo-2.png" alt="About">
                            <div class="service-text">
                                <h4>ABOUT OUR WORK</h4>
                                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas venenatis sollicitudin neque, ve Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas venenatis sollicitudin neque, </p>
                                <a href="#">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Services end-->
    <!-- About us -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 about-base space">
                    <div class="col-sm-12 col-md-4 about-block">
                        <img src="<?php echo base_url('assets') ?>/images/img1.jpg" alt="About">
                        <h5>ABOUT COMPANY</h5>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas venenatis soll icitudin neque, ve Class aptent taci</p>
                    </div>
                    <div class="col-sm-6 col-md-4 about-block">
                        <div class="about-item col-sm-12 col-xs-12 no-padding">
                            <div class="col-sm-3 col-xs-4 about-icon no-padding">
                                <span class="icon-lightbulb"></span>
                            </div>
                            <div class="about-text col-sm-9 col-xs-8 no-padding">
                                <h6>BRILLIANT IDEAS</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit. Integer adipiscing erat eg</p>
                            </div>
                        </div>
                        <div class="about-item col-sm-12 col-xs-12 no-padding">
                            <div class="col-sm-3 col-xs-4 about-icon no-padding">
                                <span class="icon-key"></span>
                            </div>
                            <div class="about-text col-sm-9 col-xs-8 no-padding">
                                <h6>PROFESSINAL SPECIALISTS</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit. Integer adipiscing erat eg</p>
                            </div>
                        </div>
                        <div class="about-item col-sm-12 col-xs-12 no-padding">
                            <div class="col-sm-3 col-xs-4 about-icon no-padding">
                                <span class="icon-puzzle"></span>
                            </div>
                            <div class="about-text col-sm-9 col-xs-8 no-padding">
                                <h6>PLANNING</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit. Integer adipiscing erat eg</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 about-block">
                        <div class="about-item col-sm-12 col-xs-12 no-padding">
                            <div class="col-sm-3 col-xs-4 about-icon no-padding">
                                <span class="icon-hotairballoon"></span>
                            </div>
                            <div class="about-text col-sm-9 col-xs-8 no-padding">
                                <h6>REVULUTION</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit. Integer adipiscing erat eg</p>
                            </div>
                        </div>
                        <div class="about-item col-sm-12 col-xs-12 no-padding">
                            <div class="col-sm-3 col-xs-4 about-icon no-padding">
                                <span class=" icon-globe"></span>
                            </div>
                            <div class="about-text col-sm-9 col-xs-8 no-padding">
                                <h6>WORLD WIDE BRANCH</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit. Integer adipiscing erat eg</p>
                            </div>
                        </div>
                        <div class="about-item col-sm-12 col-xs-12 no-padding">
                            <div class="col-sm-3 col-xs-4 about-icon no-padding">
                                <span class="icon-trophy"></span>
                            </div>
                            <div class="about-text col-sm-9 col-xs-8 no-padding">
                                <h6>SAFE WORK</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit. Integer adipiscing erat eg</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end About us -->
    <!-- Counter -->
    <section id="counter">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 counter-base space">
                    <!-- Counter block 1 -->
                    <div class="col-sm-3 counter-block text-center">
                        <div class="count">1035</div>
                        <h4>Completed <span>Project</span></h4>
                    </div>
                    <!-- Counter block 2 -->
                    <div class="col-sm-3 counter-block text-center">
                        <div class="count">11024</div>
                        <h4>Cup <span>Coffee</span></h4>
                    </div>
                    <!-- Counter block 3 -->
                    <div class="col-sm-3 counter-block text-center">
                        <div class="count">867</div>
                        <h4>Happy <span>Client</span></h4>
                    </div>
                    <!-- Counter block 4 -->
                    <div class="col-sm-3 counter-block text-center">
                        <div class="count">538</div>
                        <h4>Developer <span>Hand</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end counter -->
    <!-- Team -->
    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 team-base space">
                    <div class="main-heading text-center col-sm-12">
                        <h2>OUR TEAM</h2>
                        <p>Embedded in our culture of hard work, honesty, and getting the well done job,</p>
                    </div>
                    <div class="col-sm-6 col-md-3 team-block">
                        <div class="team-inner">
                            <img src="<?php echo base_url('assets') ?>/images/team-2.jpg" alt="Team">
                            <div class="team-text text-center">
                                <div class="name">John Ride</div>
                                <div class="profession">CEO & Founder</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem</p>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i> </a> </li>
                                    <li><a href="#"><i class="fa fa-twitter"></i> </a> </li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i> </a> </li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 team-block">
                        <div class="team-inner">
                            <img src="<?php echo base_url('assets') ?>/images/team-4.jpg" alt="Team">
                            <div class="team-text text-center">
                                <div class="name">Michale Ross</div>
                                <div class="profession">Architect</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem</p>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i> </a> </li>
                                    <li><a href="#"><i class="fa fa-twitter"></i> </a> </li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i> </a> </li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 team-block">
                        <div class="team-inner">
                            <img src="<?php echo base_url('assets') ?>/images/team-1.jpg" alt="Team">
                            <div class="team-text text-center">
                                <div class="name">Thomas ID</div>
                                <div class="profession">Project Manager</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem</p>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i> </a> </li>
                                    <li><a href="#"><i class="fa fa-twitter"></i> </a> </li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i> </a> </li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 team-block">
                        <div class="team-inner">
                            <img src="<?php echo base_url('assets') ?>/images/team-3.jpg" alt="Team">
                            <div class="team-text text-center">
                                <div class="name">John Wick</div>
                                <div class="profession">Support Manager</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem</p>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i> </a> </li>
                                    <li><a href="#"><i class="fa fa-twitter"></i> </a> </li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i> </a> </li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i> </a> </li>
                                </ul>
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
