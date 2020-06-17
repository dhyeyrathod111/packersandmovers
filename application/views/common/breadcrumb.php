<section id="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 breadcrumb-base no-padding">
                <div class="col-sm-8 col-xs-4 page-heading">
                    <h4> <?php echo !empty($page_name_two) ? $page_name_two : $page_name ?> </h4>
                </div>
                <div class="col-sm-4 col-xs-8 breadcrumb-block text-right">
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url() ?>">Home</a>
                        </li>
                        <li class="active"><?php echo $page_name ?></li>
                        <?php if (!empty($page_name_two)) : ?>
                            <li class="active"><?php echo $page_name_two ?></li>
                        <?php endif ; ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>