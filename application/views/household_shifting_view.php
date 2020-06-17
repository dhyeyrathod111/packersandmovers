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
    
    <?php $this->load->view('common/breadcrumb',['page_name'=>'Services','page_name_two'=>'Household Shifting']) ?>
    
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
                                        <h4>Household Shifting</h4>
                                        <p>The registered Packing and Moving service providers with us maintain modern infrastructure to accommodate advanced tools, machines, packaging boxes, wrappings, bags and other things that always assist them to deliver professional home relocation services to the clients. In addition to they boast a team of experienced professionals who are well versed of handling home relocation needs of the customers with care, diligence and with very necessary safety measures.</p>
                                        <p>Here on the online directory, customers can avail premium packing, moving and loading services for household goods across India. </p>
                                    </div>
                                    <img style="width: 409px;" src="<?php echo base_url('assets') ?>/images/household_shiftiung.jpg">
                                </div>
                                <div class="col-sm-12 small-space col-xs-12"></div>
                                <div class="col-sm-12 service-block">
                                    <p>The list of Packers and Movers enlisted here with us offer some major household services like packing, loading & unloading services for households, services for the transportation of valuable households, premium unpacking & rearranging services for every household. Also there are many set of additional services available with household relocation service providers like pet & plant moving services, warehousing & storage facility for households or valuables and much more. Also they believe in offering safe home relocation services by taking good care of customer valuable and with use of modern & mechanized methods for loading and unloading of customer’s valuable and households.</p>
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
