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
    
    <?php $this->load->view('common/breadcrumb',['page_name'=>'Services','page_name_two'=>'Office Relocation Services']) ?>
    
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
                                        <h4>Office Relocation Services</h4>
                                        <p>You may need to do office relocation for various reasons. One of the common reasons for growing business is need for space to expand and better infrastructure facilities. You may be planning to shift at bigger space, open new branches or renovate your present office. Whatever the reason may be you need office relocation services for a successful move. Seeking professional assistance from renowned packers and movers would lead to smooth moving experience.</p>
                                        <p>For efficient office relocation, your company needs proper planning in advance and coordination with staffs.</p>
                                    </div>
                                    <img style="width: 409px;" src="<?php echo base_url('assets') ?>/images/office-relocation.png"> 
                                </div>
                                <div class="col-sm-12 small-space col-xs-12"></div>
                                <div class="col-sm-12 service-block">
                                    <p>The task of office relocation brings a lot of mess in the working environment. Business corporate must hire professional moving services. They would analyze the requirement of company and carry out resettlement activity. It will minimise non-working hours and maintain the business output as usual. This would also enable your company to save a lot time in performing office relocation. The transition period would be smoother. The detailed documentation would be taken care of the professional packers and movers.</p>
                                    <p>Hiring an established team of packers and movers would save you from Relocation plans, Infrastructure needed, Equipment needed, Shipment of old office appliances and Quotation for entire procedure. The brainstorming session would be done by the relocation service providers.</p>
                                    <p>Trustworthy packers and movers also assist you in legal documentation, to obtain business permits and construction permits.</p>
                                    <p>Office relocation service providers bring high quality of packing materials and tools. They implement latest technology to pack and unpack heavy goods and official equipments.</p>
                                    <p>Established packers and movers have years of experience, thereby they know how to meet the requirements of business corporate. They have expertise to carry out office relocation in various cities. They study the company’s profile and plan accordingly. Professional packers and movers would execute office relocation from scratch to the end.</p>
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
