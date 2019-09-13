<?php $this->load->view("backend/includes_for_whole/head");?>

<?php $this->load->view("backend/includes_for_whole/menu");?>

<div class="page-content">
    <div class="content">
        <h1 class="c_title">Ana Səhifə</h1>
        <div class="grid simple ">
            <div class="row" style="margin-top: 50px">
                <div class="grid-body no-border c_grid_padding">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="grid simple">
                                <div class="grid-body">
                                    <div class="row-fluid">
                                        <div data-height="220px" class="c_portfolio_btn_div">
                                            <h1>Brendlər</h1>
                                            <img style="height: 300px;" src="https://image.flaticon.com/sprites/new_packs/806015-transport-logos.png" alt="">
                                            <br><br>
                                            <a href="<?php echo base_url("secure_admin_panel_car_brand")?>" class="btn btn-primary c_portfolio_btn">Get</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="grid simple">
                                <div class="grid-body">
                                    <div class="row-fluid">
                                        <div data-height="220px" class="c_portfolio_btn_div">
                                            <h1>Brendlərin classları</h1>
                                            <img style="height: 300px; object-fit: contain" src="https://i.ytimg.com/vi/qAl4S12hq4I/maxresdefault.jpg" width="100%" alt="">
                                            <br><br>
                                            <a href="<?php echo base_url("secure_admin_panel_car_brand_class")?>" class="btn btn-primary c_portfolio_btn">Get</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="grid simple">
                                <div class="grid-body">
                                    <div class="row-fluid">
                                        <div data-height="220px" class="c_portfolio_btn_div">
                                            <h1>Brendlərin Modelləri</h1>
                                            <img style="height: 300px; object-fit: contain" src="https://i.ytimg.com/vi/ghjVMq7DMM4/maxresdefault.jpg" width="100%" alt="">
                                            <br><br>
                                            <a href="<?php echo base_url("secure_admin_panel_car_brand_model")?>" class="btn btn-primary c_portfolio_btn">Get</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="grid simple">
                                <div class="grid-body">
                                    <div class="row-fluid">
                                        <div data-height="220px" class="c_portfolio_btn_div">
                                            <h1>Aksesuarların Kateqoriyaları</h1>
                                            <img style="height: 300px; object-fit: contain" src="http://www.the-lowdown.com/wp-content/uploads/2015/06/sb3.jpg" width="100%" alt="">
                                            <br><br>
                                            <a href="<?php echo base_url("secure_admin_panel_portfolio_category_ml")?>" class="btn btn-primary c_portfolio_btn">Get</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="grid simple">
                                <div class="grid-body">
                                    <div class="row-fluid">
                                        <div data-height="220px" class="c_portfolio_btn_div">
                                            <h1>Aksesuarlar</h1>
                                            <img  style="height: 300px; object-fit: contain" src="https://www.justyellowpage.com/image/logo/Car-Accessories5245848976.jpg" alt="">
                                            <br><br>
                                            <a href="<?php echo base_url("secure_admin_panel_portfolio_list_ml")?>" class="btn btn-primary c_portfolio_btn">Get</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="grid simple">
                                <div class="grid-body">
                                    <div class="row-fluid">
                                        <div data-height="220px" class="c_portfolio_btn_div">
                                            <h1>Alətlərin Kateqoriyaları</h1>
                                            <img style="height: 300px; object-fit: contain" src="http://www.the-lowdown.com/wp-content/uploads/2015/06/sb3.jpg" width="100%" alt="">
                                            <br><br>
                                            <a href="<?php echo base_url("secure_admin_panel_portfolio_category_ml")?>" class="btn btn-primary c_portfolio_btn">Get</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="grid simple">
                                <div class="grid-body">
                                    <div class="row-fluid">
                                        <div data-height="220px" class="c_portfolio_btn_div">
                                            <h1>Alətlər</h1>
                                            <img  style="height: 300px; object-fit: contain" src="https://www.justyellowpage.com/image/logo/Car-Accessories5245848976.jpg" alt="">
                                            <br><br>
                                            <a href="<?php echo base_url("secure_admin_panel_portfolio_list_ml")?>" class="btn btn-primary c_portfolio_btn">Get</a>
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
</div>


<?php $this->load->view("backend/includes_for_whole/footer");?>

<!--melumat alerti-->
<?php if($this->session->flashdata("alert")){ ?>
    <script>
        iziToast.success({
            icon: 'icon-person',
            message: '<?php echo $this->session->flashdata("alert")?>',
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            // progressBarColor: 'rgb(0, 255, 184)',
        });
    </script>
<?php }?>
