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
    
    <?php $this->load->view('common/breadcrumb',['page_name'=>'Services','page_name_two'=>'International Shifting Services']) ?>
    
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
                                        <h4>International Shifting Services</h4>
                                        <p>Are you aspiring to work and live in another country? You must be ready to face the major change in your life. If you have a plan for an international relocation, then hire international moving companies. It would take at least 4-5 months of time for an international relocation. Person who is planning to shift overseas has to take care of job applications, legal papers and house resettlement matters.</p>
                                        <p>Here are some important aspects that you need to be aware of before relocating abroad.</p>
                                    </div>
                                    <img style="width: 409px;" src="<?php echo base_url('assets') ?>/images/international-relocation.jpg">
                                </div>
                                <div class="col-sm-12 small-space col-xs-12"></div>
                                <div class="col-sm-12 service-block">
                                    <p>Many documents and paperwork are involved to complete before one can proceed with international relocation. Most of the times countries ask for Transcript of records, Birth certificate, Marriage contract, Divorce decrees, Medical certificates and Immunization records. Complete all the paperwork in time before shifting date. You would have a hassle free relocation process in overseas, if all the important documents are in your hand.</p>
                                    <p>Get valid passport and immigration documents before leaving your own company. At least 4 months prior to relocation date arrange an authorised passport. International Packers and Movers also helps its customers to prepare necessary documents for immigration.</p>
                                    <p>After verification of passport, people need to contact embassy of the country. The embassy will give an endorsement document that is called as Visa. This essential document testifies that your passport has taken into considered. You are been allowed to enter in that foreign country for a specific period of time, or for a permanently. Indian driving license may not be valid in foreign countries. Find out the guidelines of that country regarding driving license document. Some countries would need the candidate take a test and get hold of a driver's license in their country. Other countries may recognize our same driver's licenses from your country.</p>
                                    <p>For international relocation, people must do research on the particular city in which you are going to live. Check out connectivity and transportation and also look for a place where you have a friend nearby. Find how far medical centres, office, shopping complex and schools are located. Make yourself aware about the laws of the country you are planning to be relocated. Aware of safety precautions while travelling in public transport in the foreign land.</p>
                                    <p>Search for a new home before international relocation. Certain points are needed to consider in furniture, overall design, electrical, water system, amount of space you need, materials of the house, location and proximity to city.</p>
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
