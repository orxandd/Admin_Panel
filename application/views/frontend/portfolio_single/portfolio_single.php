<div id="canvas" class="c_margin_bottom">
    <div id="box_wrapper">

        <section class="page_title ls s-py-50 corner-title ls invise overflow-visible">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>
                            <?php echo $portfolio_single["name"];?>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?php echo base_url("")?>">Ana Səhifə</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="<?php echo base_url("portfolio")?>">Portfolio</a>
                            </li>
                            <li class="breadcrumb-item active">
                                <?php echo $portfolio_single["category_name"]?>
                            </li>
                        </ol>
                        <div class="divider-15 d-none d-xl-block"></div>
                    </div>
                </div>
            </div>
        </section>


        <section class="ls s-pt-50 service-singe2">
            <div class="d-none d-lg-block divider-65"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="item-media">
                            <div class="owl-carousel entry-thumbnail-carousel gallery-owl-nav" data-loop="true" data-margin="0" data-nav="true" data-dots="false" data-items="1" data-autoplay="false" data-responsive-xs="1" data-responsive-sm="1" data-responsive-md="1" data-responsive-lg="1">

                                <?php foreach ($all_single_portfolio_gallery as $item){?>
                                <div class="item c_responsive_slider">
                                    <img class="c_responsive_slider" src="<?php echo base_url("uploads/portfolio/$item[name]")?>" alt="Şəkil yüklənmədi">
                                </div>
                                <?php }?>

                            </div>
                            <!-- .owl-thumbnail -->
                        </div>
                        <div class="icon-box hero-bg single text-center">
                            <p>
                                <?php echo $portfolio_single["desc"];?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
    <!-- eof #box_wrapper -->
</div>
