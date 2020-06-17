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
    
    <?php $this->load->view('common/breadcrumb',['page_name'=>'Services','page_name_two'=>'Relocation Services']) ?>
    
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
                                        <h4>Relocation Services</h4>
                                        <p>There are a number of reasons because of which people need to relocate their home. Obviously, they would want to move their household belongings safely. Hiring home relocation services would ensure easier and smooth transition process.</p>
                                        <p>The amount of work involved in Home relocation service is extensive and can prove to be a stressful one. Due to this reason, many people like to hire home shifting services from reputed movers and packers.</p>
                                    </div>
                                    <img style="width: 409px;" src="<?php echo base_url('assets') ?>/images/relocation_services.jpg">
                                </div>
                                <div class="col-sm-12 small-space col-xs-12"></div>
                                <div class="col-sm-12 service-block">
                                    <p>Getting a plan worked out in advance is a way of avoiding towards a successful move. Packers and Movers may get booked on weekends. Thus, for avoiding the rush, discuss with your family in advance regarding the date of move and hire packing company in advance. It is ideal to book professional packers and movers for home shifting services, at least two-three months in advance.</p>
                                    <p>Before choosing a Packers and Movers, be sure about your requirements and kind of services you want. Make a list of inventories includes household furniture, electronic items and potted plants. Leave behind clutters and stuffs that have not been in use since more than a year. Call the relocation service provider at home and show him all the inventories before the moving day.</p>
                                    <p>Inform all the utility service providers regarding your change of address. Return old library books and things that you have borrowed from your old neighbours. Don’t pack clutters and disposal with you. Categorise the items according to their utility and pack them accordingly. You can also organise a charity sale at your garage and give redundant household items to the needy. This would also significantly reduce the load you need to transport to new destination. This will help you to cut down cost on shifting expenses.</p>
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
