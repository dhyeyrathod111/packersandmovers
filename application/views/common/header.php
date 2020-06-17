<section id="topbar">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 topbar-base no-padding">
                <div class="col-sm-8 col-md-6 topbar-block left text-left">
                    <ul>
                        <li><i class="fa fa-clock-o"></i>Mon - Sat: 09.00 - 19.00</li>
                        <li><a href="tel:+789675978"><i class="fa fa-phone"></i>+(789) 675 978</a> </li>
                        <li><a href="mailto:support@industry.com"><i class="fa fa-envelope"></i>support@industry.com</a> </li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-4 col-md-offset-2 topbar-block text-right">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i> </a> </li>
                        <li><a href="#"><i class="fa fa-twitter"></i> </a> </li>
                        <li><a href="#"><i class="fa fa-google-plus"></i> </a> </li>
                        <li><a href="#"><i class="fa fa-pinterest"></i> </a> </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i> </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<header>
    <nav class="navbar"  data-spy="affix" data-offset-top="55" id="slide-nav">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('assets') ?>/images/logo-2.png" alt="Site logo"></a>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse" id="menu_nav">
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="<?php echo (current_url() === base_url()) ? 'active' : '' ; ?>" href="<?php echo base_url() ?>">
                                Home
                            </a>
                        </li>
                        <li>
                            <a class="<?php echo (current_url() === base_url('about')) ? 'active' : '' ; ?>" href="<?php echo base_url('about') ?>">
                                about us
                            </a>
                        </li>
                        <li class="dropdown">
                            <a class="<?= ($this->uri->segment(1) === 'service') ? 'active' : '' ?>" href="<?php echo base_url('service') ?>">services</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="<?php echo (current_url() === base_url('service/household-shifting')) ? 'active' : '' ; ?>" href="<?php echo base_url('service/household-shifting') ?>">
                                        Household Shifting services
                                    </a>
                                </li>
                                <li>
                                    <a class="<?php echo (current_url() === base_url('service/relocation-services')) ? 'active' : '' ; ?>" href="<?php echo base_url('service/relocation-services') ?>">
                                        Relocation services
                                    </a>
                                </li>
                                <li>
                                    <a class="<?php echo (current_url() === base_url('service/corporate-shifting-service')) ? 'active' : '' ; ?>" href="<?php echo base_url('service/corporate-shifting-service') ?>">
                                        Corporate Shifting Services
                                    </a>
                                </li>
                                <li> 
                                    <a class="<?php echo (current_url() === base_url('service/office-relocation-services')) ? 'active' : '' ; ?>" href="<?php echo base_url('service/office-relocation-services') ?>">
                                        Office Relocation Services
                                    </a>
                                </li>
                                <li>
                                    <a class="<?php echo (current_url() === base_url('service/car-transportation-services')) ? 'active' : '' ; ?>" href="<?php echo base_url('service/car-transportation-services') ?>">
                                        Car Transportation Services
                                    </a>
                                </li>
                                <li>
                                    <a class="<?php echo (current_url() === base_url('service/international-shifting-services')) ? 'active' : '' ; ?>" href="<?php echo base_url('service/international-shifting-services') ?>">
                                        International Shifting Services
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="<?php echo (current_url() === base_url('gallery')) ? 'active' : '' ; ?>" href="<?php echo base_url('gallery') ?>">
                                    Gallery
                            </a> 
                        </li>
                        <li>
                            <a class="<?php echo (current_url() === base_url('contact')) ? 'active' : '' ; ?>" href="<?php echo base_url('contact') ?>">
                                Contact
                            </a> 
                        </li>
                        <li class="dropdown">
                            <a href="#"><i class="fa fa-search"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <form class="navbar-form" action="#" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="search" placeholder="Search...">
                                        </div>
                                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
             </div>
        </div>
    </nav>
</header>