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

    <?php $this->load->view('common/breadcrumb',['page_name'=>'Gallery']) ?>    
    
    <section id="portfolio" style="background-position: 50% 24px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 portfolio-base no-padding">
                    <div id="sp-simpleportfolio" class="sp-simpleportfolio sp-simpleportfolio-view-items layout-gallery-space">
                        <div class="sp-simpleportfolio-filter">
                            <ul>
                                <li class="active" data-group="all"><a href="#">Show All</a></li>
                                <li data-group="builder"><a href="#">Builder</a></li>
                                <li data-group="electric"><a href="#">Electric</a></li>
                                <li data-group="painting"><a href="#">painting</a></li>
                                <li data-group="hammer"><a href="#">Hammer</a></li>
                            </ul>
                        </div>
                        <div class="sp-simpleportfolio-items sp-simpleportfolio-columns-3 shuffle" style="overflow: hidden; height: 1108px; transition: height 250ms ease-out 0s;">
                            <div class="sp-simpleportfolio-item shuffle-item filtered" data-groups="[&quot;hammer&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;">
                                <div class="sp-simpleportfolio-overlay-wrapper clearfix">
                                    <img class="sp-simpleportfolio-img" src="<?php echo base_url('assets') ?>/images/work-6_600x400.jpg" alt="Embedded in our culture">
                                    <div class="sp-simpleportfolio-overlay">
                                        <div class="sp-vertical-middle">
                                            <div>
                                                <div class="sp-simpleportfolio-btns">
                                                    <a class="btn-zoom" href="<?php echo base_url('assets') ?>/images/work-6_600x400.jpg" data-featherlight="image">Zoom</a>
                                                    <a class="btn-view" href="project-detail.html">View</a>
                                                </div>
                                                <h3 class="sp-simpleportfolio-title">
                                                <a href="project-detail.html"> Embedded in our culture</a>
                                            </h3>
                                                <div class="sp-simpleportfolio-tags"> Hammer </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sp-simpleportfolio-item shuffle-item filtered" data-groups="[&quot;builder&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; opacity: 1; transform: translate3d(400px, 0px, 0px) scale3d(1, 1, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;">
                                <div class="sp-simpleportfolio-overlay-wrapper clearfix">
                                    <img class="sp-simpleportfolio-img" src="<?php echo base_url('assets') ?>/images/work-1_600x400.jpg" alt="The roof top apartment">
                                    <div class="sp-simpleportfolio-overlay">
                                        <div class="sp-vertical-middle">
                                            <div>
                                                <div class="sp-simpleportfolio-btns">
                                                    <a class="btn-zoom" href="<?php echo base_url('assets') ?>/images/work-1_600x400.jpg" data-featherlight="image">Zoom</a>
                                                    <a class="btn-view" href="project-detail.html">View</a>
                                                </div>
                                                <h3 class="sp-simpleportfolio-title">
                                                <a href="project-detail.html"> The roof top apartment </a>
                                            </h3>
                                                <div class="sp-simpleportfolio-tags">Builder</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sp-simpleportfolio-item shuffle-item filtered" data-groups="[&quot;builder&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; opacity: 1; transform: translate3d(800px, 0px, 0px) scale3d(1, 1, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;">
                                <div class="sp-simpleportfolio-overlay-wrapper clearfix">
                                    <img class="sp-simpleportfolio-img" src="<?php echo base_url('assets') ?>/images/work-8_600x400.jpg" alt="Roof top building">
                                    <div class="sp-simpleportfolio-overlay">
                                        <div class="sp-vertical-middle">
                                            <div>
                                                <div class="sp-simpleportfolio-btns">
                                                    <a class="btn-zoom" href="<?php echo base_url('assets') ?>/images/work-8_600x400.jpg" data-featherlight="image">Zoom</a>
                                                    <a class="btn-view" href="project-detail.html">View</a>
                                                </div>
                                                <h3 class="sp-simpleportfolio-title">
                                                <a href="project-detail.html"> Roof top building </a>
                                            </h3>
                                                <div class="sp-simpleportfolio-tags">Builder</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sp-simpleportfolio-item shuffle-item filtered" data-groups="[&quot;painting&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; opacity: 1; transform: translate3d(0px, 277px, 0px) scale3d(1, 1, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;">
                                <div class="sp-simpleportfolio-overlay-wrapper clearfix">
                                    <img class="sp-simpleportfolio-img" src="<?php echo base_url('assets') ?>/images/work-7_600x400.jpg" alt="House building">
                                    <div class="sp-simpleportfolio-overlay">
                                        <div class="sp-vertical-middle">
                                            <div>
                                                <div class="sp-simpleportfolio-btns">
                                                    <a class="btn-zoom" href="<?php echo base_url('assets') ?>/images/work-7_600x400.jpg" data-featherlight="image">Zoom</a>
                                                    <a class="btn-view" href="project-detail.html">View</a>
                                                </div>
                                                <h3 class="sp-simpleportfolio-title">
                                                <a href="project-detail.html">House building</a>
                                            </h3>
                                                <div class="sp-simpleportfolio-tags"> painting </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sp-simpleportfolio-item shuffle-item filtered" data-groups="[&quot;electric&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; opacity: 1; transform: translate3d(400px, 277px, 0px) scale3d(1, 1, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;">
                                <div class="sp-simpleportfolio-overlay-wrapper clearfix">
                                    <img class="sp-simpleportfolio-img" src="<?php echo base_url('assets') ?>/images/work-1234_600x400.jpg" alt="The Great LondonProject">
                                    <div class="sp-simpleportfolio-overlay">
                                        <div class="sp-vertical-middle">
                                            <div>
                                                <div class="sp-simpleportfolio-btns">
                                                    <a class="btn-zoom" href="<?php echo base_url('assets') ?>/images/work-1234_600x400.jpg" data-featherlight="image">Zoom</a>
                                                    <a class="btn-view" href="project-detail.html">View</a>
                                                </div>
                                                <h3 class="sp-simpleportfolio-title"><a href="project-detail.html"> The Great LondonProject</a>
                                            </h3>
                                                <div class="sp-simpleportfolio-tags"> Electric </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sp-simpleportfolio-item shuffle-item filtered" data-groups="[&quot;builder&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; opacity: 1; transform: translate3d(800px, 277px, 0px) scale3d(1, 1, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;">
                                <div class="sp-simpleportfolio-overlay-wrapper clearfix">
                                    <img class="sp-simpleportfolio-img" src="<?php echo base_url('assets') ?>/images/work-4_600x400.jpg" alt="Organic Life project">
                                    <div class="sp-simpleportfolio-overlay">
                                        <div class="sp-vertical-middle">
                                            <div>
                                                <div class="sp-simpleportfolio-btns">
                                                    <a class="btn-zoom" href="<?php echo base_url('assets') ?>/images/work-4_600x400.jpg" data-featherlight="image">Zoom</a>
                                                    <a class="btn-view" href="project-detail.html">View</a>
                                                </div>
                                                <h3 class="sp-simpleportfolio-title">
                                                <a href="project-detail.html">Organic Life project </a>
                                            </h3>
                                                <div class="sp-simpleportfolio-tags"> Builder </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sp-simpleportfolio-item shuffle-item filtered" data-groups="[&quot;electric&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; opacity: 1; transform: translate3d(0px, 554px, 0px) scale3d(1, 1, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;">
                                <div class="sp-simpleportfolio-overlay-wrapper clearfix">
                                    <img class="sp-simpleportfolio-img" src="<?php echo base_url('assets') ?>/images/work-12345_600x400.jpg" alt="New York Project">
                                    <div class="sp-simpleportfolio-overlay">
                                        <div class="sp-vertical-middle">
                                            <div>
                                                <div class="sp-simpleportfolio-btns">
                                                    <a class="btn-zoom" href="<?php echo base_url('assets') ?>/images/work-12345_600x400.jpg" data-featherlight="image">Zoom</a>
                                                    <a class="btn-view" href="project-detail.html">View</a>
                                                </div>
                                                <h3 class="sp-simpleportfolio-title">
                                                <a href="project-detail.html"> New York Project</a>
                                            </h3>
                                                <div class="sp-simpleportfolio-tags">Electric </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sp-simpleportfolio-item shuffle-item filtered" data-groups="[&quot;electric&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; opacity: 1; transform: translate3d(400px, 554px, 0px) scale3d(1, 1, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;">
                                <div class="sp-simpleportfolio-overlay-wrapper clearfix">
                                    <img class="sp-simpleportfolio-img" src="<?php echo base_url('assets') ?>/images/work_600x400.jpg" alt="The big Project we have">
                                    <div class="sp-simpleportfolio-overlay">
                                        <div class="sp-vertical-middle">
                                            <div>
                                                <div class="sp-simpleportfolio-btns">
                                                    <a class="btn-zoom" href="<?php echo base_url('assets') ?>/images/work_600x400.jpg" data-featherlight="image">Zoom</a>
                                                    <a class="btn-view" href="project-detail.html">View</a>
                                                </div>
                                                <h3 class="sp-simpleportfolio-title">
                                                <a href="project-detail.html">The big Project we have </a>
                                            </h3>
                                                <div class="sp-simpleportfolio-tags">Electric </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sp-simpleportfolio-item shuffle-item filtered" data-groups="[&quot;hammer&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; opacity: 1; transform: translate3d(800px, 554px, 0px) scale3d(1, 1, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;">
                                <div class="sp-simpleportfolio-overlay-wrapper clearfix">
                                    <img class="sp-simpleportfolio-img" src="<?php echo base_url('assets') ?>/images/work-10_600x400.jpg" alt="Water land project">
                                    <div class="sp-simpleportfolio-overlay">
                                        <div class="sp-vertical-middle">
                                            <div>
                                                <div class="sp-simpleportfolio-btns">
                                                    <a class="btn-zoom" href="<?php echo base_url('assets') ?>/images/work-10_600x400.jpg" data-featherlight="image">Zoom</a>
                                                    <a class="btn-view" href="project-detail.html">View</a>
                                                </div>
                                                <h3 class="sp-simpleportfolio-title">
                                                <a href="project-detail.html">Water land project </a>
                                            </h3>
                                                <div class="sp-simpleportfolio-tags">Hammer</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sp-simpleportfolio-item shuffle-item filtered" data-groups="[&quot;builder&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; opacity: 1; transform: translate3d(0px, 831px, 0px) scale3d(1, 1, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;">
                                <div class="sp-simpleportfolio-overlay-wrapper clearfix">
                                    <img class="sp-simpleportfolio-img" src="<?php echo base_url('assets') ?>/images/work-3_600x400.jpg" alt="Single BUilder Project">
                                    <div class="sp-simpleportfolio-overlay">
                                        <div class="sp-vertical-middle">
                                            <div>
                                                <div class="sp-simpleportfolio-btns">
                                                    <a class="btn-zoom" href="<?php echo base_url('assets') ?>/images/work-3_600x400.jpg" data-featherlight="image">Zoom</a>
                                                    <a class="btn-view" href="project-detail.html">View</a>
                                                </div>
                                                <h3 class="sp-simpleportfolio-title">
                                                <a href="project-detail.html"> Single BUilder Project </a>
                                            </h3>
                                                <div class="sp-simpleportfolio-tags">Builder </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sp-simpleportfolio-item shuffle-item filtered" data-groups="[&quot;hammer&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; opacity: 1; transform: translate3d(400px, 831px, 0px) scale3d(1, 1, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;">
                                <div class="sp-simpleportfolio-overlay-wrapper clearfix">
                                    <img class="sp-simpleportfolio-img" src="<?php echo base_url('assets') ?>/images/work-9_600x400.jpg" alt="Sanorita dream project">
                                    <div class="sp-simpleportfolio-overlay">
                                        <div class="sp-vertical-middle">
                                            <div>
                                                <div class="sp-simpleportfolio-btns">
                                                    <a class="btn-zoom" href="<?php echo base_url('assets') ?>/images/work-9_600x400.jpg" data-featherlight="image">Zoom</a>
                                                    <a class="btn-view" href="project-detail.html">View</a>
                                                </div>
                                                <h3 class="sp-simpleportfolio-title">
                                                <a href="project-detail.html"> Sanorita dream project</a>
                                            </h3>
                                                <div class="sp-simpleportfolio-tags">Hammer </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sp-simpleportfolio-item shuffle-item filtered" data-groups="[&quot;builder&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; opacity: 1; transform: translate3d(800px, 831px, 0px) scale3d(1, 1, 1); transition: transform 250ms ease-out 0s, opacity 250ms ease-out 0s;">
                                <div class="sp-simpleportfolio-overlay-wrapper clearfix">
                                    <img class="sp-simpleportfolio-img" src="<?php echo base_url('assets') ?>/images/work-5_600x400.jpg" alt="Lorem ispum project ">
                                    <div class="sp-simpleportfolio-overlay">
                                        <div class="sp-vertical-middle">
                                            <div>
                                                <div class="sp-simpleportfolio-btns">
                                                    <a class="btn-zoom" href="<?php echo base_url('assets') ?>/images/work-5_600x400.jpg" data-featherlight="image">Zoom</a>
                                                    <a class="btn-view" href="project-detail.html">View</a>
                                                </div>
                                                <h3 class="sp-simpleportfolio-title">
                                                <a href="project-detail.html">Lorem ispum project</a>
                                            </h3>
                                                <div class="sp-simpleportfolio-tags"> Builder</div>
                                            </div>
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

    
    <?php $this->load->view('common/footer') ?>
    <?php $this->load->view('common/js') ?>
</body>

</html>
