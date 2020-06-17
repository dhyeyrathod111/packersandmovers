<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <title>Construct</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <?php $this->load->view('common/css') ?>
</head>
<body>

    <?php $this->load->view('common/header') ?>
    <?php $this->load->view('common/banner') ?>

    <section id="service">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 no-padding service-title">
                    <form id="quote" action="#" method="post">
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="search" placeholder="Name">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="search" placeholder="Contact number">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="search" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <textarea class="form-control" name="comment" id="comment" placeholder="From Address"></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <textarea class="form-control" name="comment" id="comment" placeholder="To Address"></textarea>
                        </div>
                        <div class="col-md-12 button btn-block text-center">
                            <a href="#" class="btn">get a quote</a>
                        </div>
                    </form> 
                </div>
                <div class="col-sm-12 service-base space">
                    
                    <div class="col-sm-4 service-block">
                        <div class="service-inner">
                            <img style="height: 200px;width: 360px" src="<?php echo base_url('assets') ?>/images/household_shiftiung.jpg" alt="Services">
                            <div class="service-text">
                                <h4>Household Shifting</h4>
                                <p>Is finding a reliable service for household goods is making you worried? Get best suggestions for reliable household shifting services .. </p>
                                <a href="<?php echo base_url('service/household-shifting') ?>">read more</a>
                            </div>
                            <div class="service-top-btn">
                                <p class="top-btn">Recomemded</p>
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
                            <div class="service-top-btn">
                                <p class="top-btn">Recomemded</p>
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
                            <div class="service-top-btn">
                                <p class="top-btn">Best Service</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <section id="counter">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 counter-base space">
                    <div class="col-sm-3 counter-block text-center">
                        <div class="count">1035</div>
                        <h4>Completed <span>Project</span></h4>
                    </div>
                    <div class="col-sm-3 counter-block text-center">
                        <div class="count">1124</div>
                        <h4>Cup <span>Coffee</span></h4>
                    </div>
                    <div class="col-sm-3 counter-block text-center">
                        <div class="count">867</div>
                        <h4>Happy <span>Client</span></h4>
                    </div>
                    <div class="col-sm-3 counter-block text-center">
                        <div class="count">538</div>
                        <h4>Developer <span>Hand</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="certification">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 certification space">
                    <div class="main-heading text-center col-sm-12">
                        <h2>Packing Tips</h2>
                        <p>Embedded in our culture of hard work, honesty, and getting the well done job,</p>
                    </div>
                    <div class="certi-base col-sm-12 no-padding">
                        <div class="col-sm-4 certi-block text-center animate-in move-up">
                            <span class="icon-tools-2"></span>
                            <h4>SAFETY</h4>
                            <p>pork sirloi loine beefb andoe uillen uillen capicola swine a kevin mignon tritip picolakevin mignon tritip picola kevinsdertand filet mignon</p>
                        </div>
                        <div class="col-sm-4 certi-block text-center animate-in move-up">
                            <span class="icon-recycle"></span>
                            <h4>COMMUNITY</h4>
                            <p>pork sirloi loine beefb andoe uillen uillen capicola swine a kevin mignon tritip picolakevin mignon tritip picola kevinsdertand filet mignon</p>
                        </div>
                        <div class="col-sm-4 certi-block text-center animate-in move-up">
                            <span class="icon-circle-compass"></span>
                            <h4>SUSTANABILITY</h4>
                            <p>pork sirloi loine beefb andoe uillen uillen capicola swine a kevin mignon tritip picolakevin mignon tritip picola kevinsdertand filet mignon</p>
                        </div>
                        <div class="col-sm-4 certi-block text-center animate-in move-up">
                            <span class="icon-trophy"></span>
                            <h4>BEST QUALITY</h4>
                            <p>pork sirloi loine beefb andoe uillen uillen capicola swine a kevin mignon tritip picolakevin mignon tritip picola kevinsdertand filet mignon</p>
                        </div>
                        <div class="col-sm-4 certi-block text-center animate-in move-up">
                            <span class="icon-pencil"></span>
                            <h4>INTEGRITY</h4>
                            <p>pork sirloi loine beefb andoe uillen uillen capicola swine a kevin mignon tritip picolakevin mignon tritip picola kevinsdertand filet mignon</p>
                        </div>
                        <div class="col-sm-4 certi-block text-center animate-in move-up">
                            <span class=" icon-strategy"></span>
                            <h4>STRATEGY</h4>
                            <p>pork sirloi loine beefb andoe uillen uillen capicola swine a kevin mignon tritip picolakevin mignon tritip picola kevinsdertand filet mignon</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="work">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 work space">
                    <div class="col-sm-8 work-block animate-in left-out">
                        <h3>Lets make your
                            <span>DREAM HOUSE</span>
                            with our best
                            <span>ENGINEERS</span></h3>
                        <p>
                            Embedded in our
                            <em> culture </em>
                            of hard
                            <em>work</em>
                            , honesty, and
                            <em>
                                getting the well done job
                            </em>
                        </p>
                    </div>
                    <div class="col-sm-4 work-block text-right animate-in right-out">
                        <a href="#" class="btn">start project</a>
                        <a href="#" class="btn">call now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="news">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 news space">
                    <div class="main-heading text-center col-sm-12">
                        <h2>RECENT NEWS</h2>
                        <p>Embedded in our culture of hard work, honesty, and getting the well done job,</p>
                    </div>
                    <div class="news-base col-sm-12 no-padding">
                        <div id="news-slider">
                            <div class="item">
                                <div class="col-sm-12 news-block">
                                    <div class="news-inner">
                                        <img src="<?php echo base_url('assets') ?>/images/blog-3_360x230.jpg" alt="Services">
                                        <div class="news-text">
                                            <h4><a href="#">Earn Industry Award this year.</a></h4>
                                            <ul class="news-post-info">
                                                <li><i class="fa fa-user"></i>By <span>Super User</span></li>
                                                <li><a href="#"><i class="fa fa-comment-o"></i><span>0</span> Comment</a></li>
                                            </ul>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vesti bulum tortor quam, feugiat vitae, ultricies...</p>
                                            <a href="#">read more</a>
                                        </div>
                                        <div class="news-top-btn">
                                            <p class="top-btn"><i class="fa fa-calendar"></i> 01 DEC 2015 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-12 news-block">
                                    <div class="news-inner">
                                        <img src="<?php echo base_url('assets') ?>/images/blog-1_360x230.jpg" alt="Services">
                                        <div class="news-text">
                                            <h4><a href="#">Earn Industry Award this year.</a></h4>
                                            <ul class="news-post-info">
                                                <li><i class="fa fa-user"></i>By <span>Super User</span></li>
                                                <li><a href="#"><i class="fa fa-comment-o"></i><span>0</span> Comment</a></li>
                                            </ul>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vesti bulum tortor quam, feugiat vitae, ultricies...</p>
                                            <a href="#">read more</a>
                                        </div>
                                        <div class="news-top-btn">
                                            <p class="top-btn"><i class="fa fa-calendar"></i> 01 DEC 2015 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-12 news-block">
                                    <div class="news-inner">
                                        <img src="<?php echo base_url('assets') ?>/images/blog-4_360x230.jpg" alt="Services">
                                        <div class="news-text">
                                            <h4><a href="#">Earn Industry Award this year.</a></h4>
                                            <ul class="news-post-info">
                                                <li><i class="fa fa-user"></i>By <span>Super User</span></li>
                                                <li><a href="#"><i class="fa fa-comment-o"></i><span>0</span> Comment</a></li>
                                            </ul>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vesti bulum tortor quam, feugiat vitae, ultricies...</p>
                                            <a href="#">read more</a>
                                        </div>
                                        <div class="news-top-btn">
                                            <p class="top-btn"><i class="fa fa-calendar"></i> 01 DEC 2015 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-12 news-block">
                                    <div class="news-inner">
                                        <img src="<?php echo base_url('assets') ?>/images/blog-5_360x230.jpg" alt="Services">
                                        <div class="news-text">
                                            <h4><a href="#">Earn Industry Award this year.</a></h4>
                                            <ul class="news-post-info">
                                                <li><i class="fa fa-user"></i>By <span>Super User</span></li>
                                                <li><a href="#"><i class="fa fa-comment-o"></i><span>0</span> Comment</a></li>
                                            </ul>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vesti bulum tortor quam, feugiat vitae, ultricies...</p>
                                            <a href="#">read more</a>
                                        </div>
                                        <div class="news-top-btn">
                                            <p class="top-btn"><i class="fa fa-calendar"></i> 01 DEC 2015 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 team-base space">
                    <div id="team-slider">
                        <div class="item">
                            <div class="col-sm-12 team-block text-center">
                                <img src="<?php echo base_url('assets') ?>/images/team01.jpg" alt="Testimonials">
                                <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet pellentesque felis. Morbi in sem quis dui placerat ornare.entesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</p>
                                <div class="name">John Doe</div>
                                <div class="profession">Founder, Oxford</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-12 team-block text-center">
                                <img src="<?php echo base_url('assets') ?>/images/team08.jpg" alt="Testimonials">
                                <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet pellentesque felis. Morbi in sem quis dui placerat ornare.entesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</p>
                                <div class="name">John Doe</div>
                                <div class="profession">Founder, Oxford</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="partner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 partner space">
                    <div class="main-heading text-center col-sm-12">
                        <h2>PARTNERS</h2>
                        <p>Embedded in our culture of hard work, honesty, and getting the well done job,</p>
                    </div>
                    <div class="col-sm-12 partner-base no-padding">
                        <ul>
                            <li class="col-sm-2 animate-in left-out">
                                <a href="#"><img src="<?php echo base_url('assets') ?>/images/original_100_client-11.png" alt="Partners"></a>
                            </li>
                            <li class="col-sm-2 animate-in left-out">
                                <a href="#"><img src="<?php echo base_url('assets') ?>/images/client-2.png" alt="Partners"></a>
                            </li>
                            <li class="col-sm-2 animate-in left-out">
                                <a href="#"><img src="<?php echo base_url('assets') ?>/images/client-3.png" alt="Partners"></a>
                            </li>
                            <li class="col-sm-2 animate-in left-out">
                                <a href="#"><img src="<?php echo base_url('assets') ?>/images/client-4.png" alt="Partners"></a>
                            </li>
                            <li class="col-sm-2 animate-in left-out">
                                <a href="#"><img src="<?php echo base_url('assets') ?>/images/client-5.png" alt="Partners"></a>
                            </li>
                            <li class="col-sm-2 animate-in left-out">
                                <a href="#"><img src="<?php echo base_url('assets') ?>/images/client-6.png" alt="Partners"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $this->load->view('common/footer') ?>
    <?php $this->load->view('common/js') ?>
</body>

</html>
